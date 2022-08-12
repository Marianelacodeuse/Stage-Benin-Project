@extends('layouts.app')
@section('blog-detail')

<!-- ============================ Hero Banner  Start================================== -->
<div class="page-title-wrap pt-img-wrap" style="background:url(assets/img/bn-4.jpg) no-repeat;">
	<div class="container">
		<div class="col-lg-12 col-md-12">
			<div class="pt-caption text-center">
				<h1>Blog Detail</h1>
				<p><a href="index-2.html">Home</a><span class="current-page">Blog Detail</span></p>
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

			<div class="col-lg-8 col-md-8 col-sm-12">
				<article class="blog-news big-detail-wrap">
					<div class="blog-detail-wrap">

						<!-- Featured Image -->
						<figure class="img-holder">
							<a href="blog-detail.html"><img src="assets/img/module-1.jpg" class="img-responsive" alt="News"></a>
							<div class="blog-post-date theme-bg">
								Mar 12, 2017
							</div>
						</figure>

						<!-- Blog Content -->
						<div class="full blog-content">
							<div class="post-meta">
								<span class="author"><i class="ti-user"></i><a href="#" title="Posts by admin">Admin</a></span>
								<span class="author"><i class="ti-calendar"></i>March 6, 2019</span>
								<span class="author"><i class="ti-comment-alt"></i>0 Comments</span>
							</div>
							<h3>Helping Kids Grow Up Stronger</h3>
							<div class="blog-text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

								<blockquote>
									<p class="p1">I’ve been asked a lot for my view on American health care. Well, ‘it would be a good idea,’ to quote Gandhi.<br>
										―&nbsp;<span class="authorOrTitle">Paul Farmer</span></p>
								</blockquote>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
								<div class="post-tags">
									<strong>Tags:</strong>
									<a href="#">Groups</a>
									<a href="#">Parkings</a>
									<a href="#">Spa</a>
									<a href="#">Team</a>
									<a href="#">Food</a>
								</div>
							</div>

							<!-- Blog Share Option -->
							<div class="no-mrg">
								<div class="blog-footer-social">
									<span>Share <i class="fa fa-share-alt"></i></span>
									<ul class="list-inline social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>

						</div>
						<!-- Blog Content -->

					</div>
				</article>

				<!-- Comment -->
				<div class="comment-wrap">
					<div class="comment-detail">
						<div class="comment-detail-title">
							<h4>comment-detail (2)</h4>
						</div>

						<ul id="singlecomment-detail" class="comment-detail-list">
							<li class="comment" id="comment-56">
								<div class="comment">
									<div class="comment__image">
										<img alt="" src="assets/img/user-1.jpg" class="avatar avatar-75 photo" height="75" width="75">
									</div>
									<div class="comment__text">
										<h5>danny</h5>
										<span>
											<em>August 9, 2016<a rel="nofollow" class="comment-reply-link" href="#">Reply</a></em>
										</span>
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>

									</div>
									<hr>
								</div>
								<!--end comment-->

								<ul class="children">

									<li class="comment" id="comment-57">
										<div class="comment">
											<div class="comment__image">
												<img alt="" src="assets/img/user-2.jpg" class="avatar avatar-75 photo" height="75" width="75">
											</div>
											<div class="comment__text">
												<h5>danny</h5>
												<span>
													<em>August 9, 2016<a rel="nofollow" class="comment-reply-link" href="#">Reply</a></em>
												</span>
												<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>

											</div>
											<hr>
										</div>
										<!--end comment-->

									</li><!-- #comment-## -->
								</ul><!-- .children -->
							</li><!-- #comment-## -->
						</ul>

					</div>
				</div>

				<div class="comment-detail-form">
					<div class="section-title2">
						<h3 id="reply-title" class="comment-reply-title">Write a Comment
							<small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small>
						</h3>
					</div>

					<form>
						<div class="row">
							<div class="form-group col-md-6 col-sm-6">
								<input type="text" class="form-control" placeholder="Your Name">
							</div>

							<div class="form-group col-md-6 col-sm-6">
								<input type="email" class="form-control" placeholder="Your Email">
							</div>

							<div class="form-group col-md-12 col-sm-12">
								<textarea class="form-control" placeholder="Comment"></textarea>
							</div>

							<div class="col-md-12 col-sm-12">
								<button class="btn btn-primary" type="submit">submit now</button>
							</div>
						</div>
					</form>
				</div>

			</div>

			<!-- Sidebar Start -->
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="sidebar">

					<div class="side-widget-body p-t-10 mb-3">
						<div class="input-group small">
							<input type="text" class="form-control b-r" placeholder="Search…">
							<span class="input-group-btn">
								<button type="button" class="btn btn-primary">Go</button>
							</span>
						</div>
					</div>

					<div class="side-widget">
						<div class="side-widget-header">
							<h4><i class="ti-check-box"></i>Latest Blogs</h4>
						</div>
						<div class="side-widget-body p-t-10">
							<div class="side-list">
								<ul class="side-blog-list">
									<li>
										<a href="#">
											<div class="blog-list-img">
												<img src="assets/img/module-1.jpg" class="img-responsive" alt="">
											</div>
										</a>
										<div class="blog-list-info">
											<h5><a href="#" title="blog">Freel Documentry</a></h5>
											<div class="blog-post-meta">
												<span class="updated">Nov 26, 2017</span> | <a href="#" rel="tag">Documentry</a>
											</div>
										</div>
									</li>

									<li>
										<a href="#">
											<div class="blog-list-img">
												<img src="assets/img/module-2.jpg" class="img-responsive" alt="">
											</div>
										</a>
										<div class="blog-list-info">
											<h5><a href="#" title="blog">Preez Food Rock</a></h5>
											<div class="blog-post-meta">
												<span class="updated">Oct 10, 2017</span> | <a href="#" rel="tag">Food</a>
											</div>
										</div>
									</li>

									<li>
										<a href="#">
											<div class="blog-list-img">
												<img src="assets/img/module-3.jpg" class="img-responsive" alt="">
											</div>
										</a>
										<div class="blog-list-info">
											<h5><a href="#" title="blog">Cricket Buzz High</a></h5>
											<div class="blog-post-meta">
												<span class="updated">Oct 07, 2017</span> | <a href="#" rel="tag">Sport</a>
											</div>
										</div>
									</li>

									<li>
										<a href="#">
											<div class="blog-list-img">
												<img src="assets/img/module-1.jpg" class="img-responsive" alt="">
											</div>
										</a>
										<div class="blog-list-info">
											<h5><a href="#" title="blog">Tour travel Tick</a></h5>
											<div class="blog-post-meta">
												<span class="updated">Sep 27, 2017</span> | <a href="#" rel="tag">Travel</a>
											</div>
										</div>
									</li>

								</ul>
							</div>
						</div>
					</div>

					<div class="side-widget">
						<div class="side-widget-header">
							<h4><i class="ti-briefcase"></i>Top Categories</h4>
						</div>
						<div class="side-widget-body p-t-10 p-b-0">
							<div class="side-list">
								<ul class="category-list">
									<li><a href="#">Business <span>4</span></a></li>
									<li><a href="#">Shopping <span>7</span></a></li>
									<li><a href="#">Photography <span>10</span></a></li>
									<li><a href="#">Intertainment <span>55</span></a></li>
									<li><a href="#">Education <span>8</span></a></li>
									<li><a href="#">Travel &amp; Tour <span>17</span></a></li>
									<li><a href="#">Health &amp; Fitness <span>9</span></a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>
</section>
<div class="clearfix"></div>
<!-- ============================ Blog Grid End ================================== -->
@endsection