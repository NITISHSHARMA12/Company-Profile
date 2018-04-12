@extends('main')
@section('title', 'Home')
	@section('content')
		<section>
	        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		        <!-- Indicators -->
		        <ol class="carousel-indicators">
		        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		        </ol>

		        <!-- Wrapper for slides -->
		        <div class="carousel-inner" role="listbox">
		        <div class="item active">
		          <img src="{{asset('img/slider.jpg')}}" alt="...">
		          <div class="carousel-caption slcontent">
		          <h1>manages your alert on the go</h1>
		          <p>little device that tracks your stuff from one go to the endless journeys.</p>
		          </div>
		        </div>
		        <div class="item">
		          <img src="img/slider3.jpg" alt="...">
		          <div class="carousel-caption slcontent">
		            <h1>Make them feel special</h1>
		            <p>Make them feel trusted and provide a better care that attracts reliable amount of drivers.</p>
		          </div>
		        </div>
	        </div>
		         <!-- Controls -->
	        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	        </a>
	      </div>
        </section>
        <!-- :::::::::::::::::::::::::::::::::::::Abouts::::::::::::::::::::::: -->

		<section id="abouts" class="about">
			<div class="container-fluid abouts_img">
				<div class="col-sm-6">  
					<div class="">

					</div>
				</div>
				<div class="col-sm-6 about_content">
					<div class="abouts_content">
					            <h2 class="text_cap">vishnumist</h2>
					            <p><b>Vision</b> Automotive population is increasing exponentially in the country. The biggest problem regarding the increased traffic is the raise in number of road accidents. Road accidents are undoubtedly a global menace in our country. The global status report on road safety published by the World Health Organization (WHO) identified the major causes of road accidents are due to driver errors and carelessness. Driver sleepiness, alcoholism and carelessness are the key players in accident scenario. The fatalities and associated expenses as a result of road accidents are very serious problems. So, the purpose of the system is  to examine the cause of the occurring road accidents by using electrical device. </p>

					            <p>Our goal is to focus on the accidents caused due to drowsiness, alcohol, low maintenance, fog and others moreover in-depth analysis of  the interaction between vehicle, driver and road environment so that we can improve our system’s liabilities for better and precise performance.</p>

					            <p>Hence this will allow a technical understanding of typical accidents scenarios and analysis of countermeasure efficiencies for an enhanced car safety contribution within traffic system.</p>

					            <p><b>Mission </b>The mission is to detect drowsiness and to develop a system capable of detecting drowsiness in a rapid manner, system which can differentiate normal eye blink and drowsiness so that it can prevent the driver from entering the state of sleepiness while driving. The system works well even in case of drivers wearing spectacles and under low light conditions also.</p>

					            <p>During the monitoring, the system is able to decide if the eyes are opened or closed. When the eyes have been closed for about two seconds, the alarm beeps to alert the driver and the speed of the vehicle is reduced. By doing this many accidents will reduced and provides safe life to the driver and vehicle safety. A system for driver safety and car security is presented only in the luxurious costly cars. Using drowsiness detection system, driver safety can be implemented in normal cars also</p>

					</div>
				</div>

			</div>
		</section>
		<div class="divider"></div>
		<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
		<section id="services">
			<div class="container-fluid">
				<h1 class="section-title">Our Services</h1>
				<span class="section-divider"></span>
			<div class="divider"></div>
			<div class="row">
				<div class="col-md-4">
					<div class="service">
						<div class="service_icon color_1">
							<i class="fa fa-area-chart" aria-hidden="true"></i>
						</div>
						<strong class="st-feature-title red">BMS</strong>
						<p>Provide a battery management system which is essentially the “brain” of a battery pack, it measures and reports crucial information for the operation of the battery and also protects the battery from damage in a wide range of operating conditions.</p>
					</div>

				</div>

				<div class="col-md-4">
					<div class="service">
						<div class="service_icon color_2">
							<i class="fa fa-battery-half" aria-hidden="true"></i>
						</div>
						<strong class="st-feature-title red">Li-Po battery packaging</strong>
						<p>We use Lithium Polymer batteries (henceforth referred to as “LiPo” batteries), they are a newer type of battery and we  use them  in our electronic devices .</p>
					</div>

				</div>

				<div class="col-md-4">
					<div class="service">
						<div class="service_icon color_3">
							<i class="fa fa-university"></i>
						</div>
						<strong class="st-feature-title red">Web Development</strong>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.</p>
					</div>

				</div>
			</div>
		</section>
		<div class="divider"></div>
       	<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
		<section id="subscribe">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3 class="subscribe-title">Subscribe For Updates</h3>
						<p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
					</div>
					<div class="col-md-4 subscribe-btn-container">
						<a class="subscribe-btn" href="#">Subscribe Now</a>
					</div>
				</div>
			</div>
		</section>
		<!-- <div class="divider"></div> -->
		<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: 
		<section id="teams">
	      	<div class="container-fluid">
		        <h1 class="section-title">meet our team</h1>
		        <span class="section-divider"></span>
		        <div class="divider"></div>

	        <div id="owl-demo">
	            <div class="item">
	             <div class="col-md-3">
	               <div class="team_cover">
	                  <div class="team_img">
	                      <img src="img/team/team-4.jpg" class="img-responsive"/>
	                  </div>
	                  <div class="team_details">
	                    <h4>nitish sharma</h4>
	                    <span>Web Developer</span>
	                    <div class="member-socail">
	                      <a class="social-icon twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	                      <a class="social-icon facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	                      <a class="social-icon linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	                      <a class="social-icon gplus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
	                      <a class="social-icon mail" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
	                    </div>
	                  </div>
	                 </div>
	              </div>

	              <div class="item">
	             <div class="col-md-3">
	               <div class="team_cover">
	                  <div class="team_img">
	                      <img src="img/team/team-4.jpg" class="img-responsive"/>
	                  </div>
	                  <div class="team_details">
	                    <h4>nitish sharma</h4>
	                    <span>Web Developer</span>
	                    <div class="member-socail">
	                      <a class="social-icon twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	                      <a class="social-icon facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	                      <a class="social-icon linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	                      <a class="social-icon gplus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
	                      <a class="social-icon mail" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
	                    </div>
	                  </div>
	                 </div>
	              </div>

	              <div class="item">
	             <div class="col-md-3">
	               <div class="team_cover">
	                  <div class="team_img">
	                      <img src="img/team/team-4.jpg" class="img-responsive"/>
	                  </div>
	                  <div class="team_details">
	                    <h4>nitish sharma</h4>
	                    <span>Web Developer</span>
	                    <div class="member-socail">
	                      <a class="social-icon twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	                      <a class="social-icon facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	                      <a class="social-icon linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	                      <a class="social-icon gplus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
	                      <a class="social-icon mail" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
	                    </div>
	                  </div>
	                 </div>
	              </div>

	              <div class="item">
	             <div class="col-md-3">
	               <div class="team_cover">
	                  <div class="team_img">
	                      <img src="img/team/team-4.jpg" class="img-responsive"/>
	                  </div>
	                  <div class="team_details">
	                    <h4>nitish sharma</h4>
	                    <span>Web Developer</span>
	                    <div class="member-socail">
	                      <a class="social-icon twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	                      <a class="social-icon facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	                      <a class="social-icon linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	                      <a class="social-icon gplus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
	                      <a class="social-icon mail" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
	                    </div>
	                  </div>
	                 </div>
	              </div>

	          </div>
	      </div>
    </section>-->
    <section>
    	<div class="container-fluid" style="padding: 0px;">
    		<!-- <h3>Google Map</h3> -->
    		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d874.474908122575!2d77.49822964708501!3d28.752413463893994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skiet!5e0!3m2!1sen!2sin!4v1520252785018" width="100%" height="280" frameborder="0" style="border: 8px solid #2c3d4a;margin-bottom: -5px;" allowfullscreen></iframe>
    	</div>

    </section>
    <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
   
	@endsection

