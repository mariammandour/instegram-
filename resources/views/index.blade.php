{{View::make('handler/header')}}
<section>
	<div class="gap gray-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="page-contents">
						{{View::make('handler/rightnav')}}
						<div class="col-lg-6">
							<div class="central-meta">
								<div class="new-postbox">
									<figure>
										<img src="images/resources/admin2.jpg" alt="">
									</figure>
									<div class="newpst-input">
										<form method="post">
											<textarea rows="2" placeholder="write something"></textarea>
											<div class="attachments">
												<ul>

													<li>
														<i class="fa fa-image"></i>
														<label class="fileContainer">
															<input type="file">
														</label>
													</li>

													<li>
														<button type="submit">Post</button>
													</li>
												</ul>
											</div>
										</form>
									</div>
								</div>
							</div><!-- add post new box -->
							<div class="loadMore">
								<div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="images/resources/friend-avatar10.jpg" alt="">
											</figure>
											<div class="friend-name">
												<ins><a href="time-line.html" title="">Janice Griffith</a></ins>
												<span>published: june,2 2018 19:PM</span>
											</div>
											<div class="post-meta">
												<img src="images/resources/user-post.jpg" alt="">

												<div class="description">

													<p>
														World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most
														beatuiful car available in america and the saudia
														arabia, you can book your test drive by our official
														website
													</p>
												</div>
											</div>
										</div>
										<div class="coment-area">
											<ul class="we-comet">

												<li>
													<div class="comet-avatar">
														<img src="images/resources/comet-1.jpg" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="time-line.html" title="">Donald
																	Trump</a></h5>
															<span>1 week ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
														</div>
														<p>we are working for the dance and sing songs. this
															video is very awesome for the youngster. please vote
															this video and like our channel
															<i class="em em-smiley"></i>
														</p>
													</div>
												</li>
												<li>
													<a href="#" title="" class="showmore underline">more
														comments</a>
												</li>
												<li class="post-comment">
													<div class="comet-avatar">
														<img src="images/resources/comet-1.jpg" alt="">
													</div>
													<div class="post-comt-box">
														<form method="post">
															<textarea placeholder="Post your comment"></textarea>
															<div class="add-smiles">
																<span class="em em-expressionless" title="add icon"></span>
															</div>
															<div class="smiles-bunch">
																<i class="em em---1"></i>
																<i class="em em-smiley"></i>
																<i class="em em-anguished"></i>
																<i class="em em-laughing"></i>
																<i class="em em-angry"></i>
																<i class="em em-astonished"></i>
																<i class="em em-blush"></i>
																<i class="em em-disappointed"></i>
																<i class="em em-worried"></i>
																<i class="em em-kissing_heart"></i>
																<i class="em em-rage"></i>
																<i class="em em-stuck_out_tongue"></i>
															</div>
															<button type="submit"></button>
														</form>
													</div>
												</li>
											</ul>
										</div>
									</div>
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