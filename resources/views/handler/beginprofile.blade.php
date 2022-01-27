<section>
		<div class="feature-photo">
			<figure><img src="{{url('/images/resources/timeline-1.jpg')}}" alt=""></figure>
			
			
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<img src="{{url('/images/'.auth()->user()->image)}}" alt="">
								
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
									<h5>{{auth()->user()->name}}</h5>
									
								</li>
								<li>
									<a class="active" href='{{url('/post')}}' title="" data-ripple="">time line</a>
									<!-- <a class="" href="{{url('/friends')}}" title="" data-ripple="">Friends</a> -->
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->