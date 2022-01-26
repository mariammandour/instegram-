{{View::make('handler/header')}}
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<h1>Winku</h1>
						<p>
							Winku is free to use for as long as you want with two active projects.
						</p>
						<div class="friend-logo">
							<span><img src="images/wink.png" alt=""></span>
						</div>
						<a href="#" title="" class="folow-me">Follow Us on</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
						{{session()->get('Message')}}
						<p>
							Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join
								now</a>
						</p>
						<form method="post" action="{{url('/dologin')}}">
							@csrf
							<div class="form-group">
								<input type="email" name="email" />
								<label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
								<input type="password" id="input" name="password" />
								<label class="control-label" for="input">password</label><i class="mtrl-select"></i>
							</div>

							<div class="submit-btns">
								<!-- <button class="mtr-btn signin" type="button"><span>Login</span></button> -->
								<input type="submit" value="login">
								<button class="mtr-btn signup" type="submit"><span>Register</span></button>
							</div>
						</form>
					</div>
					<div class="log-reg-area reg">
						<h2 class="log-title">Register</h2>
						<p>
							Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join
								now</a>
						</p>
						<form method="post" action="{{ url('/Register')}}">
							@csrf
							<div class="form-group">
								<input type="text" name="name" value="{{ old('name') }}" />
								<label class="control-label" for="input">User Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
								<input type="text" name="email" value="{{ old('email') }}" />
								<label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
								<input type="password" name="password" />
								<label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
								<input type="text" name="phone" value="{{ old('phone') }}" />
								<label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">
								<input type="text" name="address" value="{{ old('address') }}" />
								<label class="control-label" for="input">Address</label><i class="mtrl-select"></i>
							</div>
							<div>
								<label class="control-label" for="input">image</label><i class="mtrl-select"></i><br>
								<input type="file" name="image" />

							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
								<label class="form-check-label" for="flexRadioDefault1">
									Male
								</label>
							</div>
							<div class="form-check ">
								<input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
								<label class="form-check-label" for="flexRadioDefault2">
									Female
								</label>
							</div>


							<a href="#" title="" class="already-have">Already have an account</a>
							<div class="submit-btns">
								<input type="submit" value="submit">
								<!-- <button class="mtr-btn signup" type="submit"><span>Register</span></button> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{View::make('handler/footer')}}