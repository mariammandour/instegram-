{{View::make('handler/header')}}
{{View::make('handler/beginprofile')}}
<section>
	<div class="gap gray-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="page-contents">
						{{View::make('handler/rightnav')}}

						</aside>
					</div><!-- sidebar -->
					<div class="col-lg-6">

						<div class="loadMore">
							<div class="central-meta item">
								@foreach ($posts as $key => $post)
								<div class="user-post">
									<div class="friend-info">
										<figure>
											<img src="{{url('/images/'.$post->userimage)}}" alt="">
										</figure>
										<div class="friend-name">
											<ins><a href="time-line.html" title="">{{$post->name}}</a></ins>

										</div>
										<div class="post-meta">
											<img src="{{url('/images/'.$post->image)}}" alt="">

											<div class="description">

												<p>
													{{$post->caption}}
												</p>
												<td>
													<!-- <a href='{{url('/post/'.$post->id.'/edit')}}' class='btn btn-danger m-r-1em'>Delete</a> -->
													<a href="{{url('/post/'.$post->id.'/edit')}}" class='btn btn-primary m-r-1em'>Edit</a>

													<a href='' data-toggle="modal" data-target="#modal_single_del{{$key}}" class='btn btn-danger m-r-1em'>Remove </a>
													<div class="modal" id="modal_single_del{{$key}}" tabindex="-1" role="dialog">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">delete confirmation</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>

																<div class="modal-body">
																	Remove  !!!!
																</div>
																<div class="modal-footer">
																	<form action="{{url('/post/'.$post->id)}}" method="post">

																		@csrf

																		@method('delete')

																		<div class="not-empty-record">
																			<button type="submit" class="btn btn-primary">Delete</button>
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
											</div>
										</div>
									</div>

									<!-- <div class="coment-area">
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
									</div> -->
								</div>
								@endforeach
							</div>

						</div>
					</div><!-- centerl meta -->

					<div class="col-lg-3">

					</div><!-- sidebar -->
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
</div>
{{View::make('handler/footer')}}