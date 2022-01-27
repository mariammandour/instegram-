<?php

namespace App\Http\Controllers;


use App\Models\posts;
use App\Models\Users;
use App\Models\follows;
use Illuminate\Http\Request;

class userscontroller extends Controller
{   

    public  function __construct(){

        $this->middleware('isLogin',['except' => ['create','store','dologin']]);
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data =    $this->validate($request, [
            "name"     => "required",
            "email"    => "required|email",
            "password" => "required|min:6|max:10",
            "phone" => "required|regex:/^01[0125][0-9]{8}$/",
            "address" => "required",
            "gender" => "required",
            "image" => "required"

        ]);

        $data['password'] = bcrypt($data['password']);
        $FinalName = time() . rand() . '.' . $request->image->extension();

        if ($request->image->move(public_path('images'), $FinalName)) {

            $data['image'] = $FinalName;

            $op =  Users::create($data);

            if ($op) {
                $Message = "Register";
            } else {
                $Message = "Error Try Again";
            }
        } else {
            $Message = "Error In Uploading Try Again ";
        }
        session()->flash('Message', $Message);

        return redirect(url('User/create'));
    }



    public function dologin(Request $request)
    {
        // code .....
        $data =    $this->validate($request, [
            "email"    => "required|email",
            "password" => "required|min:6|max:10",
        ]);

        if (auth()->attempt($data)) {

            return redirect(url('/index'));
        } else {

            $Message = "Error in Email || password try Again";
            session()->flash('Message', $Message);
            return redirect(url('User/create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Users::find($id);

        return view('User.edit',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $this->validate($request, [
            "name"     => "required",
            "email"    => "required|email",
            // "password" => "required|min:6|max:10",
            "phone" => "required|regex:/^01[0125][0-9]{8}$/",
            "address" => "required",
            "gender" => "required",
            "image"   => "nullable|image|mimes:png,jpg"
        ]);

        # Fetch Raw Data ....
        $rawData = Users::find($id);


        if (request()->hasFile('image')) {

            $FinalName = time() . rand() . '.' . $request->image->extension();

            if ($request->image->move(public_path('images'), $FinalName)) {

                unlink(public_path('images/' . $rawData->image));
            } else {
                $FinalName = $rawData->image;
            }
        } else {
            $FinalName = $rawData->image;
        }



        $data['image'] =  $FinalName;

        $op = Users::where('id', $id)->update($data);

        if ($op) {
            $message = "account Updated";
        } else {
            $message = "Error Try Again";
        }

        session()->flash('Message', $message);
        return redirect(url('/post'));
    }

    public function editpassword($id)
    {
        $data = Users::find($id);

        return view('User.editpassword', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepassword(Request $request, $id)
    {
        //
        $data = $this->validate($request, [
            "password" => "required|min:6|max:10"
        ]);
        $data['password'] = bcrypt($data['password']);
        $rawData = Users::find($id);

        $op = Users::where('id', $id)->update($data);

        if ($op) {
            $message = "password Updated";
        } else {
            $message = "Error Try Again";
        }

        session()->flash('Message', $message);
        return redirect(url('/post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
    public function logout()
    {
        auth()->logout();
        return redirect(url('User/create'));
    }
    
    public function notfollow(){
        $data = users::join('follow','follow.friend_id','=','users.id')->select('users.id','users.name','users.image')->where('follow.user_id','=',auth()->user()->id)->get();
        
        $accounts = users::join('follow','users.id','!=','follow.friend_id')->select('users.id','users.name','users.image')->where('follow.user_id','=',auth()->user()->id)->where('users.id','!=',auth()->user()->id)->get();

        $posts = posts::join('users','users.id','=','post.user_id')->select('post.*','users.image as userimage','users.name')->get();


        return view('index', ['accounts' => $accounts,'data' => $data,'posts'=>$posts]);
    }
    public function addfriend($id){
        
        $data['user_id']=auth()->user()->id;
        $data['friend_id']=$id;
        follows::create($data);
        return redirect(url('/index'));
    }
}
