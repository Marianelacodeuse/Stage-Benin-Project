
			@extends('layouts.app')
			@section('contact')
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url(assets/img/bn-4.jpg) no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center">
							<h1>Get in Touch</h1>
							<p><a href="index-2.html">Home</a><span class="current-page">Contact Us</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Who We Are Start ================================== -->
			<section class="gray">
				<div class="container">
					
					<div class="row">
						
						<div class="col-lg-5 col-md-5 bg-white">
							<div class="contact-address">
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-home theme-cl"></i>
									</div>
									<div class="add-text-box">
										<h4>Workio Limited</h4>
										CEO: Sagar Singh<br>
										CFO: Shaurya Singh<br>
									</div>
								</div>
								
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-map-alt theme-cl"></i>
									</div>
									<div class="add-text-box">
										<h4>Head Offices</h4>
										810 Clis Road,<br>
										Indraprash NW11 0PU, India
									</div>
								</div>
								
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-email theme-cl"></i>
									</div>
									<div class="add-text-box">
										<h4>Emails</h4>
										Workio@gmail.com<br>
										my.Workio@gmail.com<br>
									</div>
								</div>
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-headphone theme-cl"></i>
									</div>
									<div class="add-text-box">
										<h4>Calls</h4>
										91+ 123 456 9857<br>
										91+ 258 548 5426<br>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-7">
							<div class="contact-form">
								<form>
									<div class="form-row">
										<div class="form-group col-md-6">
										  <label>Name</label>
										  <input type="email" class="form-control" placeholder="Name">
										</div>
										<div class="form-group col-md-6">
										  <label>Email</label>
										  <input type="email" class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label>Subject</label>
										<input type="text" class="form-control" placeholder="Subject">
									</div>
									<div class="form-group">
										<label>Message</label>
										<textarea class="form-control" placeholder="Type Here..."></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Send Request</button>
								</form>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Who We Are End ================================== -->
			@endsection
			