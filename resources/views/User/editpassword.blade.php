{{View::make('handler/header')}}
{{View::make('handler/beginprofile')}}
<section>
	<div class="gap gray-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="page-contents">
						{{View::make('handler/rightnav')}}
						<div class="col-lg-6">
							<div class="central-meta">
								<div class="editing-info">
									<h5 class="f-title"><i class="ti-lock"></i>Change Password</h5>

									<form method="post">
										<div class="form-group">
											<input type="password" id="input" required="required" />
											<label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
											<input type="password" required="required" />
											<label class="control-label" for="input">Confirm password</label><i class="mtrl-select"></i>
										</div>
										
										<div class="submit-btns">
											<button type="button" class="mtr-btn"><span>Update</span></button>
										</div>
									</form>
								</div>
							</div>
						</div><!-- centerl meta -->
						{{View::make('handler/leftnav')}}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
{{View::make('handler/footer')}}