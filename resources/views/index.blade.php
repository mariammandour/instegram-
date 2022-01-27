{{View::make('handler/header')}}
<section>
	<div class="gap gray-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="page-contents">
						{{View::make('handler/rightnav')}}
						<div class="widget stick-widget">
							<h4 class="widget-title">follow me</h4>
							<ul class="followers">
								@foreach ($accounts as $key => $one)
								<li>
									<figure><img src="{{url('/images/'.$one->image)}}" alt="">
									</figure>
									<div class="friend-meta">
										<h4><a href="time-line.html" title="">{{$one->name}}</a></h4>
										<a href="{{url('/addfriend/'.$one->id)}}" title="" class="underline">follow</a>
									</div>
								</li>
								@endforeach
							</ul>
						</div><!-- who's following -->
						</aside>
					</div><!-- sidebar -->
					<div class="col-lg-6">
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						<div class="central-meta">
							<div class="new-postbox">
								<figure>
									<img src="{{url('/images/'.auth()->user()->image)}}" alt="">
								</figure>
								<div class="newpst-input">
									<form action="{{ url('/post')}}" method="post" enctype="multipart/form-data">
										@csrf
										<textarea rows="2" placeholder="write something" name="caption"></textarea>
										<div class="attachments">
											<ul>

												<li>
													<i class="fa fa-image"></i>
													<label class="fileContainer">
														<input type="file" name="image" />
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
											</div>
										</div>
									</div>

									<div class="coment-area">
										<ul class="we-comet">
										@foreach ($comments as $key => $comment)
										@if($comment->post_id == $post->id)
											<li>
												<div class="comet-avatar">
													<img src="{{url('/images/'.$comment->userimage)}}" alt="">
												</div>
												<div class="we-comment">
													<div class="coment-head">
														<h5><a href="time-line.html" title="">{{$comment->name}}</a></h5>
														<span>1 week ago</span>
														<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
													</div>
													<p>{{$comment->comment}}
														<i class="em em-smiley"></i>
													</p>
												</div>
											</li>
										@endif
										@endforeach
											<li class="post-comment">
												<div class="comet-avatar">
													<img src="{{url('/images/'.auth()->user()->image)}}" alt="">
												</div>
												<div class="post-comt-box">
													<form action="{{ url('/comment/'.$post->id)}}" method="post" enctype="multipart/form-data">
														@csrf
														<textarea placeholder="Post your comment " name="comment"></textarea>
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
														<button type="submit">comment</button>
													</form>
												</div>
											</li>
										</ul>
									</div>
								</div>
								@endforeach
							</div>

						</div>
					</div><!-- centerl meta -->
					<div class="col-lg-3">
						<aside class="sidebar static">
							<div class="widget friend-list stick-widget">
								<h4 class="widget-title">Friends</h4>
								<div id="searchDir"></div>
								<ul id="people-list" class="friendz-list">
									@foreach ($data as $key => $raw)
									<li>
										<figure>
											<img src="{{url('/images/'.$raw->image)}}" alt="">
											<span class="status f-off"></span>
										</figure>

										<div class="friendz-meta">
											<a href="#" onclick="location.replace('http:#'),'_top'">{{ $raw->name }}</a>
											<!-- <i></i> -->
										</div>
									</li>
									@endforeach
								</ul>

							</div><!-- friends list sidebar -->
						</aside>
					</div><!-- sidebar -->
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
</div>
{{View::make('handler/footer')}}