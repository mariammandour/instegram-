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
									<h5 class="f-title"><i class="ti-lock"></i>Change Password</h5>
									@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
									@endif
									<form action="{{url('/updatepassword/'.$data['id'])}}" method="post" enctype="multipart/form-data">
										@csrf
										{{ session()->get('Message') }}
										<div class="form-group">
											<input type="password" id="input" name="password" />
											<label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
										</div>
										
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