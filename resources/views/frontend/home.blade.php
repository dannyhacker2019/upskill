@extends('layouts.default')

@section('content')

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Best Online Learning System</h1>
				   					<p><a href="{{ route('user.register')}}" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Online Free Course</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Education is a Key to Success</h1>
				   					<p><a href="{{ route('user.register')}}" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Best Online Learning Center</h1>
				   					<p><a href="{{ route('user.register')}}" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	
			  	</ul>
		  	</div>
		</aside>
		</div>

		<div id="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-4 intro-wrap">
						<div class="intro-flex">
							<div class="one-third color-1 animate-box">
								<span class="icon"><i class="flaticon-market"></i></span>
								<div class="desc">
									<h3>Learn Courses Online</h3>
									<p><a href="{{ route('frontend.course')}} class="view-more">View More</a></p>
								</div>
							</div>
							<div class="one-third color-2 animate-box">
								<span class="icon"><i class="flaticon-open-book"></i></span>
								<div class="desc">
									<h3>Online Library Store</h3>
									<p><a href="#" class="view-more">View More</a></p>
								</div>
							</div>
							<div class="one-third color-3 animate-box">
								<div class="desc2">
									<h3>50% off in all selected Courses</h3>
									<p><a href="#" class="view-more">View More</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="about-desc animate-box">
							<h2>Welcome to Upskill</h2>
							<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
							<div class="fancy-collapse-panel">
	                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingOne">
	                             <h4 class="panel-title">
	                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why choose us?
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	                             <div class="panel-body">
	                                 <div class="row">
									      		<div class="col-md-6">
									      			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
									      		</div>
									      		<div class="col-md-6">
									      			<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									      		</div>
									      	</div>
	                             </div>
	                         </div>
	                     </div>
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingTwo">
	                             <h4 class="panel-title">
	                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What we do?
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	                             <div class="panel-body">
	                                 <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												<ul>
													<li>Separated they live in Bookmarksgrove right</li>
													<li>Separated they live in Bookmarksgrove right</li>
												</ul>
	                             </div>
	                         </div>
	                     </div>
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingThree">
	                             <h4 class="panel-title">
	                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Offer Services
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	                             <div class="panel-body">
	                                 <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>	
	                             </div>
	                         </div>
	                     </div>
	                  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-books"></i>
							</span>
							<div class="desc">
								<h3>Professional Courses</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-professor"></i>
							</span>
							<div class="desc">
								<h3>Experienced Instructor</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-book"></i>
							</span>
							<div class="desc">
								<h3>Practical Training</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-diploma"></i>
							</span>
							<div class="desc">
								<h3>Validated Certificate</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-book"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Courses</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-student"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Students</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-professor"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to="2300" data-speed="5000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Teachers</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-earth-globe"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to="200" data-speed="5000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Countries</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="colorlib-classes colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Our Classes</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-1.jpg);">
								<span class="price text-center"><small>$450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Developing Mobile Apps</a></h3>
								<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-2.jpg);">
								<span class="price text-center"><small>$450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Convert PSD to HTML</a></h3>
								<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-3.jpg);">
								<span class="price text-center"><small>$450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Convert HTML to WordPress</a></h3>
								<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-4.jpg);">
								<span class="price text-center"><small>$450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Developing Mobile Apps</a></h3>
								<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-5.jpg);">
								<span class="price text-center"><small>$450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Learned Smoke Effects</a></h3>
								<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-6.jpg);">
								<span class="price text-center"><small>$450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Convert HTML to WordPress</a></h3>
								<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>


		<div class="colorlib-event">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Upcoming Events</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="event-flex row-pb-sm">
					<div class="half event-img animate-box" style="background-image: url(images/event.jpg);">
					</div>
					<div class="half">
						<div class="row">
							<div class="col-md-12 animate-box">
								<div class="event-entry">
									<div class="desc">
										<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
										<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
										<h2><a href="event.html">We Held Free Training for Basic Programming</a></h2>
									</div>
									<div class="location">
										<span class="icon"><i class="icon-map"></i></span>
										<p>291 South 21th Street, Suite 721 New York NY 10016</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 animate-box">
								<div class="event-entry">
									<div class="desc">
										<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
										<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
										<h2><a href="event.html">You're Invited 1st Anniversary of Upskill</a></h2>
									</div>
									<div class="location">
										<span class="icon"><i class="icon-map"></i></span>
										<p>291 South 21th Street, Suite 721 New York NY 10016</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 animate-box">
								<div class="event-entry">
									<div class="desc">
										<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
										<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
										<h2><a href="event.html">Practice Workshop 2018</a></h2>
									</div>
									<div class="location">
										<span class="icon"><i class="icon-map"></i></span>
										<p>291 South 21th Street, Suite 721 New York NY 10016</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-blog colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Recent News</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
							</div>
						</article>
					</div>
					<div class="col-md-6">
						<div class="f-blog animate-box">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">How to Create Website in Scratch</a></h2>
								<p class="admin"><span>04 March 2018</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</div>
						<div class="f-blog animate-box">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">How to Convert PSD File to HTML File?</a></h2>
								<p class="admin"><span>04 March 2018</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</div>
						<div class="f-blog animate-box">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">How to Build Games App in Mobile</a></h2>
								<p class="admin"><span>04 March 2018</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@stop