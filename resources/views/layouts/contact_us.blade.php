@extends('main')
@section('title', 'Contact Us')
	@section('content')
		<div style="position:absolute;">
			<img src="img/contact-banner.jpg" class="img-responsive"/>	
		</div>
		<section>
			<div class="container ">
				<div class="box effect5">
					<h3>Contact Us</h3>
				</div>
			</div>
		</section>
		
		<div class="container">
			<div class="col-md-6 google_c">
				<h3>Google Map</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d874.474908122575!2d77.49822964708501!3d28.752413463893994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skiet!5e0!3m2!1sen!2sin!4v1520252785018" width="600" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-6">
				<h3>Contact Us</h3>
				<div class="contact_c">
					<div class="adr">
						<h2><i class="fa fa-address-book" style="padding-right: 10px;"></i><span>Address :</span></h2>
						<p>TBI-KIET Group of Institution, Ghaziabad.<br>13 km Stone, Ghaziabad-Meerut Road, Ghaziabad, U.P.</p>
					</div>
					<div class="adr">
						<h2><i class="fa fa-envelope" style="padding-right: 10px;"></i><span>E-mail :</span></h2>
						<p>info@example.com</p>
					</div>
					<div class="adr">
						<h2><i class="fa fa-phone" style="padding-right: 10px;"></i><span>Contact No. :</span></h2>
						<p>+91-8279666790</p>
					</div>
					<div class="adr">
						<h2><i class="fa fa-globe" style="padding-right: 10px;"></i><span>Website :</span></h2>
						<p>Example.com</p>
					</div>
				</div>
			</div>
		</div>

	@endsection()
