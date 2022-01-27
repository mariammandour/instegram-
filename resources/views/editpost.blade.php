{{View::make('handler/header')}}
{{View::make('handler/beginprofile')}}
<section>
    <div class="gap gray-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="page-contents">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <div class="editing-info">
                                    <h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <form action="{{url('/post/'.$data->id)}}" method="post" enctype="multipart/form-data">

                                        @csrf
                                        @method('put')
                                        {{ session()->get('Message') }}
                                        <div class="form-group">
                                            <input type="text" id="input" value="{{$data->caption}}" name="caption" />
                                            <label class="control-label" for="input"> caption</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Image</label>
                                            <input type="file" name="image">
                                        </div>

                                        <img src="{{url('/images/'.$data['image'])}}" alt="" height="150px" width="150px">

                                        <div class="submit-btns">
                                            <button type="submit" class="btn btn-info">update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- centerl meta -->
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
{{View::make('handler/footer')}}