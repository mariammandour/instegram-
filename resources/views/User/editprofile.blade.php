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
									<h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>

									<form method="post">
										<div class="form-group">
											<input type="text" id="input" required="required" />
											<label class="control-label" for="input"> Name</label><i class="mtrl-select"></i>
										</div>
										
										<div class="form-group">
											<input type="text" required="required" />
											<label class="control-label" for="input"> Email</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
											<input type="text" required="required" />
											<label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
										</div>
										
										<div class="form-group">
											<input type="text" required="required" />
											<label class="control-label" for="input">Address</label><i class="mtrl-select"></i>
										</div>
										
										<div class="form-radio">
											<div class="radio">
												<label>
													<input type="radio" checked="checked" name="radio"><i class="check-box"></i>Male
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="radio"><i class="check-box"></i>Female
												</label>
											</div>
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