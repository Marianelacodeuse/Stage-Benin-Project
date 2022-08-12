@extends('layouts.app')

@section('blog')
		<!-- ============================ Hero Banner  Start================================== -->
		<div class="page-title-wrap pt-img-wrap" style="background:url(assets/img/bn2.jpg) no-repeat;">
			<div class="container">
				<div class="col-lg-12 col-md-12">
					<div class="pt-caption text-center">
						<h1>Our Latest Blog</h1>
						<p><a href="index-2.html">Home</a><span class="current-page">Blog</span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<!-- ============================ Hero Banner End ================================== -->

		<!-- ============================ Blog Grid Start ================================== -->
		<section>
			<div class="container">

				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="blog-grid-wrap mb-4">
							<div class="blog-grid-thumb">
								<a href="{{url('blog/blog-detail')}}"><img src="assets/img/module-1.jpg" class="img-responsive" alt="" /></a>
								<div class="bg-cat-info">
									<div class="post-m-info">
										<h5 class="pm-date">12</h5>
										<h5 class="pm-month">Dec</h5>
									</div>
								</div>
								<h6 class="post-cat">Travel & Tour</h6>
							</div>
							<div class="blog-grid-content">
								<h4 class="cnt-gb-title"><a href="{{route('blog-detail')}}">Why most People used bootstrap framework?</a></h4>
								<p>In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu bibendum, velit diam.</p>
							</div>
							<div class="blog-grid-meta">
								<div class="gb-info-author">
									<p><strong>By </strong>Javid Akhtar</p>
								</div>
								<div class="gb-info-cmt">
									<ul>
										<li><a href="#">110<i class="fa fa-comment text-info"></i></a></li>
										<li><a href="#">50<i class="fa fa-heart text-info"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4">
						<div class="blog-grid-wrap mb-4">
							<div class="blog-grid-thumb">
								<a href="blog-detail.html"><img src="assets/img/module-2.jpg" class="img-responsive" alt="" /></a>
								<div class="bg-cat-info">
									<div class="post-m-info">
										<h5 class="pm-date">10</h5>
										<h5 class="pm-month">Jan</h5>
									</div>
								</div>
								<h6 class="post-cat">Technology & Fashion</h6>
							</div>
							<div class="blog-grid-content">
								<h4 class="cnt-gb-title"><a href="blog-detail.html">drizvato Launch New & powerful template</a></h4>
								<p>In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu bibendum, velit diam.</p>
							</div>
							<div class="blog-grid-meta">
								<div class="gb-info-author">
									<p><strong>By </strong>Javid Akhtar</p>
								</div>
								<div class="gb-info-cmt">
									<ul>
										<li><a href="#">20<i class="fa fa-comment text-info"></i></a></li>
										<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4">
						<div class="blog-grid-wrap mb-4">
							<div class="blog-grid-thumb">
								<a href="blog-detail.html"><img src="assets/img/module-3.jpg" class="img-responsive" alt="" /></a>
								<div class="bg-cat-info">
									<div class="post-m-info">
										<h5 class="pm-date">10</h5>
										<h5 class="pm-month">Feb</h5>
									</div>
								</div>
								<h6 class="post-cat">Business</h6>
							</div>
							<div class="blog-grid-content">
								<h4 class="cnt-gb-title"><a href="blog-detail.html">Which Features is best in drizvato Theme?</a></h4>
								<p>In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu bibendum, velit diam.</p>
							</div>
							<div class="blog-grid-meta">
								<div class="gb-info-author">
									<p><strong>By </strong>Javid Akhtar</p>
								</div>
								<div class="gb-info-cmt">
									<ul>
										<li><a href="#">250<i class="fa fa-comment text-info"></i></a></li>
										<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="blog-grid-wrap mb-4">
							<div class="blog-grid-thumb">
								<a href="blog-detail.html"><img src="assets/img/module-1.jpg" class="img-responsive" alt="" /></a>
								<div class="bg-cat-info">
									<div class="post-m-info">
										<h5 class="pm-date">12</h5>
										<h5 class="pm-month">Dec</h5>
									</div>
								</div>
								<h6 class="post-cat">Travel & Tour</h6>
							</div>
							<div class="blog-grid-content">
								<h4 class="cnt-gb-title"><a href="blog-detail.html">Why most People used bootstrap framework?</a></h4>
								<p>In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu bibendum, velit diam.</p>
							</div>
							<div class="blog-grid-meta">
								<div class="gb-info-author">
									<p><strong>By </strong>Javid Akhtar</p>
								</div>
								<div class="gb-info-cmt">
									<ul>
										<li><a href="#">110<i class="fa fa-comment text-info"></i></a></li>
										<li><a href="#">50<i class="fa fa-heart text-info"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4">
						<div class="blog-grid-wrap mb-4">
							<div class="blog-grid-thumb">
								<a href="blog-detail.html"><img src="assets/img/module-2.jpg" class="img-responsive" alt="" /></a>
								<div class="bg-cat-info">
									<div class="post-m-info">
										<h5 class="pm-date">10</h5>
										<h5 class="pm-month">Jan</h5>
									</div>
								</div>
								<h6 class="post-cat">Technology & Fashion</h6>
							</div>
							<div class="blog-grid-content">
								<h4 class="cnt-gb-title"><a href="blog-detail.html">drizvato Launch New & powerful template</a></h4>
								<p>In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu bibendum, velit diam.</p>
							</div>
							<div class="blog-grid-meta">
								<div class="gb-info-author">
									<p><strong>By </strong>Javid Akhtar</p>
								</div>
								<div class="gb-info-cmt">
									<ul>
										<li><a href="#">20<i class="fa fa-comment text-info"></i></a></li>
										<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4">
						<div class="blog-grid-wrap mb-4">
							<div class="blog-grid-thumb">
								<a href="blog-detail.html"><img src="assets/img/module-3.jpg" class="img-responsive" alt="" /></a>
								<div class="bg-cat-info">
									<div class="post-m-info">
										<h5 class="pm-date">10</h5>
										<h5 class="pm-month">Feb</h5>
									</div>
								</div>
								<h6 class="post-cat">Business</h6>
							</div>
							<div class="blog-grid-content">
								<h4 class="cnt-gb-title"><a href="blog-detail.html">Which Features is best in drizvato Theme?</a></h4>
								<p>In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu bibendum, velit diam.</p>
							</div>
							<div class="blog-grid-meta">
								<div class="gb-info-author">
									<p><strong>By </strong>Javid Akhtar</p>
								</div>
								<div class="gb-info-cmt">
									<ul>
										<li><a href="#">250<i class="fa fa-comment text-info"></i></a></li>
										<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="blog-grid-wrap mb-4">
							<div class="blog-grid-thumb">
								<a href="blog-detail.html"><img src="assets/img/module-1.jpg" class="img-responsive" alt="" /></a>
								<div class="bg-cat-info">
									<div class="post-m-info">
										<h5 class="pm-date">12</h5>
										<h5 class="pm-month">Dec</h5>
									</div>
								</div>
								<h6 class="post-cat">Travel & Tour</h6>
							</div>
							<div class="blog-grid-content">
								<h4 class="cnt-gb-title"><a href="blog-detail.html">Why most People used bootstrap framework?</a></h4>
								<p>In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu bibendum, velit diam.</p>
							</div>
							<div class="blog-grid-meta">
								<div class="gb-info-author">
									<p><strong>By </strong>Javid Akhtar</p>
								</div>
								<div class="gb-info-cmt">
									<ul>
										<li><a href="#">110<i class="fa fa-comment text-info"></i></a></li>
										<li><a href="#">50<i class="fa fa-heart text-info"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4">
						<div class="blog-grid-wrap mb-4">
							<div class="blog-grid-thumb">
								<a href="blog-detail.html"><img src="assets/img/module-2.jpg" class="img-responsive" alt="" /></a>
								<div class="bg-cat-info">
									<div class="post-m-info">
										<h5 class="pm-date">10</h5>
										<h5 class="pm-month">Jan</h5>
									</div>
								</div>
								<h6 class="post-cat">Technology & Fashion</h6>
							</div>
							<div class="blog-grid-content">
								<h4 class="cnt-gb-title"><a href="blog-detail.html">drizvato Launch New & powerful template</a></h4>
								<p>In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu bibendum, velit diam.</p>
							</div>
							<div class="blog-grid-meta">
								<div class="gb-info-author">
									<p><strong>By </strong>Javid Akhtar</p>
								</div>
								<div class="gb-info-cmt">
									<ul>
										<li><a href="#">20<i class="fa fa-comment text-info"></i></a></li>
										<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4">
						<div class="blog-grid-wrap mb-4">
							<div class="blog-grid-thumb">
								<a href="blog-detail.html"><img src="assets/img/module-3.jpg" class="img-responsive" alt="" /></a>
								<div class="bg-cat-info">
									<div class="post-m-info">
										<h5 class="pm-date">10</h5>
										<h5 class="pm-month">Feb</h5>
									</div>
								</div>
								<h6 class="post-cat">Business</h6>
							</div>
							<div class="blog-grid-content">
								<h4 class="cnt-gb-title"><a href="blog-detail.html">Which Features is best in drizvato Theme?</a></h4>
								<p>In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu bibendum, velit diam.</p>
							</div>
							<div class="blog-grid-meta">
								<div class="gb-info-author">
									<p><strong>By </strong>Javid Akhtar</p>
								</div>
								<div class="gb-info-cmt">
									<ul>
										<li><a href="#">250<i class="fa fa-comment text-info"></i></a></li>
										<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="bs-example">
							<ul class="pagination">
								<li><a href="#"><i class="ti-arrow-left"></i></a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#"><i class="ti-arrow-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</section>
		<div class="clearfix"></div>
		<!-- ============================ Blog Grid End ================================== -->
@endsection
