<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class postscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct(){

        $this->middleware('isLogin');
        }
    public function index()
    {
        $posts = posts::join('users', 'users.id', '=', 'post.user_id')
            ->select('post.*', 'users.image as userimage', 'users.name')->where('post.user_id', '=', auth()->user()->id)->get();

        return view('/post', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            "caption"     => "required",
            "image" => "required"

        ]);

        $FinalName = time() . rand() . '.' . $request->image->extension();


        if ($request->image->move(public_path('images'), $FinalName)) {
            $data['user_id'] = auth()->user()->id;
            $data['image'] = $FinalName;

            $op =  posts::create($data);

            if ($op) {
                $Message = "Register";
            } else {
                $Message = "Error Try Again";
            }
        } else {
            $Message = "Error In Uploading Try Again ";
        }
        session()->flash('Message', $Message);

        return redirect(url('/index'));
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
        $data = posts::find($id);
        // dd($data);
        return view('editpost', ['data' => $data]);
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
        $data =    $this->validate($request, [
            "caption"     => "required",
            "image" => "nullable|image|mimes:png,jpg"

        ]);


        # Fetch Raw Data ....
        $rawData = posts::find($id);


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

        $op = posts::where('id', $id)->update($data);

        if ($op) {
            $message = "account Updated";
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
        $data = posts::find($id);

        $op = posts::find($id)->delete();    // where('id',$id)

        if ($op) {
            unlink(public_path('images/' . $data->image));
            $message = "Raw Removed";
        } else {
            $message = "Error Try Again";
        }

        session()->flash('Message', $message);
        return redirect(url('/post'));
    }
}
