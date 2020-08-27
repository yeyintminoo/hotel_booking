@extends('frontendtemplate')
@section('content')
      
    <h2 class="section-heading h1 pt-4 text-center">CONTACT US</h2>
       	  

    <div class="container container-fluid">
       	   <div class="row">
       	   	  <div class="col-md-5">
       	   	  	 <!--Form with header-->
       	   	  	 <div class="card">
       	   	  	 	<div class="card-body">
       	   	  	 		<!--Header-->
       	   	  	 		<div class="form-header blue accent-1">
       	   	  	 			<h3><i class="fas fa-envelope"></i> Write to us:</h3>
       	   	  	 		</div>

       	   	  	 		<p>We'll write rarely, but with only the best content.</p>

       	   	  	 		<!--Body-->
       	   	  	 		<div class="md-form">
       	   	  	 			<i class="fas fa-user prefix grey-text"></i>
       	   	  	 			<input type="text" id="form-name" class="form-control">
       	   	  	 			<label for="form-name">Your name</label>
       	   	  	 		</div>

       	   	  	 		<div class="md-form">
       	   	  	 			<i class="fas fa-envelope prefix grey-text"></i>
       	   	  	 			<input type="text" id="form-email" class="form-control">
       	   	  	 			<label for="form-email">Your email</label>
       	   	  	 		</div>

       	   	  	 		<div class="md-form">
       	   	  	 			<i class="fas fa-tag prefix grey-text"></i>
       	   	  	 			<input type="text" id="form-Subject" class="form-control">
       	   	  	 			<label for="form-Subject">Subject</label>
       	   	  	 		</div>

       	   	  	 		<div class="md-form">
       	   	  	 			<i class="fas fa-pencil-alt prefix grey-text"></i>
       	   	  	 			<textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
       	   	  	 			<label for="form-text">Icon Prefix</label>
       	   	  	 		</div>

       	   	  	 		<div class="text-center mt-4">
       	   	  	 			<button class="btn btn-success">Submit</button>
       	   	  	 		</div>
       	   	  	 	</div>
       	   	  	 </div>
       	   	  	 <!--Form with header-->
       	   	  </div>

       	   	  <div class="col-md-7">
       	   	  	<!--Google map-->
       	   	  	<div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
       	   	  		<iframe src="https://maps.google.com/maps?q=Hilton%20Mandalay%2C%2026th%20St%2C%2066th%20St%2C%20Mandalay%2005021&t=&z=13&ie=UTF8&iwloc=&output=embed"
       	   	  		frameborder="0" style="border:0" allowfullscreen></iframe>
       	   	  	</div>

       	   	  	<br>
       	   	  	<!--Buttons-->
       	   	  	<div class="row text-center py-5">
       	   	  		<div class="col-md-4">
       	   	  			<a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
       	   	  			<p>San Francisco, CA 94126</p>
       	   	  			<p>United States</p>
       	   	  		</div>

       	   	  		<div class="col-md-4">
       	   	  			<a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
       	   	  			<p>+ 01 234 567 89</p>
       	   	  			<p>Mon - Fri, 8:00-22:00</p>
       	   	  		</div>

       	   	  		<div class="col-md-4">
       	   	  			<a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
       	   	  			<p>info@gmail.com</p>
       	   	  			<p>sale@gmail.com</p>
       	   	  		</div>
       	   	  	</div>
       	   	  </div>
       	   </div>
    </div>
@endsection
