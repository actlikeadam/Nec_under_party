<!DOCTYPE html>

<html>
<head>
	<title>Christmas 2k18</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/main.css">
	
	<!-- Favicon -->
	<link rel="icon" href="img/favicon.ico">

	<!-- Font & icon -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway|Great+Vibes" rel="stylesheet">	

</head>

<!-- Navbar -->
<body>
	<div id="particles-js"></div>

	<!-- Header -->
	<div class="container-fluid bg-img1 header1">
		<div class="container py-120 text-center header wow fadeIn">
			<h1 class="font-100 infinite-color pt-5">Your Official Invitation</h1>
			<h2 class="wow fadeIn pt-5" data-wow-delay="0.4s">TO OUR</h2>
			<h3 class="font-50 wow fadeIn pt-5" data-wow-delay="0.6s"><img src="img/mistletoe.png" class="icon-size">Christmas Party<img src="img/mistletoe.png" class="icon-size"></h3>
			<div class="pt-80 wow fadeIn" data-wow-delay="0.8s"><a href="http://www.thenec.co.uk/"><img src="img/nec-logo2.png" class="nec-logo"></a></div>
		</div>
	</div>

	<!-- Middle section testimonial e chiudo con call to action che mi fa scroll to anchor-->
	<div class="container-fluid">
		<div class="container py-110 text-center header wow fadeIn">
			<div class="row">
				<div class="col-md-6">
					<div class="wow bounceInLeft text-dark pt-4">
						<h2 class="event normal">Saturday 1st December 2K18</h2>
						<h2>SEE YOU IN THE HALL, 1ST FLOOR</h2>
						<h2 class="dress normal pt-4">Dress code:</h2>
						<h2>Christmas Outfits</h2>
					</div>
				</div>
				<div class="col-md-6">
					<div id="demo" class="carousel slide wow" data-ride="carousel">
						<!-- Indicators -->
						<ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
						</ul>

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active p-3">
								<img class="testimonials" src="img/test1.jpg">
								<div class="carousel-content"><h2 class="quotation">"Best party ever!"</h2></div>
							</div>
							<div class="carousel-item p-3">
								<img class="testimonials" src="img/test2.jpg">
								<div class="carousel-content"><h2 class="quotation">"Join us ;)"</h2></div>
							</div>
							<div class="carousel-item p-3">
								<img class="testimonials" src="img/test3.jpg">
								<div class="carousel-content"><h2 class="quotation">"Don't miss it..."</h2></div>
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Contact section -->
	<div class="container-fluid bg-img2 text-white header3">
		<div class="container py-200">
			<form id="nec" class="wow bounceInUp bg-opacity" action="#" method="post">
				<h2 class="text-center">Contact details:</h2>
				<div class="form-row">
					<div class="form-group col-md-2">
						<label>Title</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="title">
					</div>
					<div class="form-group col-md-5">
						<label>Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
					<div class="form-group col-md-5">
						<label>Surname</label>
						<input type="text" class="form-control" id="surname" name="surname" placeholder="Surname">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Company</label>
						<input type="text" class="form-control" id="company" name="company" placeholder="Company">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-12 pt-3">
						<h4>Are you able to attend our christmas party?</h4>
						<div class="form-check">
							<input class="form-check-input here yesgo" type="radio" name="exampleRadios1" value="option1" checked>
							<label class="form-check-label" for="exampleRadios1">
								Yes
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input here nothanks" type="radio" name="exampleRadios1" value="option2">
							<label class="form-check-label" for="exampleRadios2">
								No
							</label>
						</div>
						<div class="col-12 nojoin">
							<button type="button" class="btn btn-warning" onclick="location.href='http://necunderparty.actlikeadam.com'" id="sad">Finish</button>
						</div>
					</div>
				</div>
				<div class="no-attend">
				<div class="form-row">
					<div class="form-group col-12 pt-3">
						<h4>Do you have any dietary requirements?</h4>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios2" value="option1">
							<label class="form-check-label" for="exampleRadios1">
								Yes
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios2" value="option2" checked>
							<label class="form-check-label" for="exampleRadios2">
								No
							</label>
						</div>
						<div class="form-group">
							<label for="sel1">Dietary requirements:</label>
							<select class="form-control short" id="sel1">
								<option selected value> Select an option </option>
								<option>Vegetarian</option>
								<option>Vegan</option>
								<option>Halal</option>
								<option>Kosher</option>
								<option>Gluten-free</option>
								<option>Other</option>
							</select>
						</div>
						<div class="form-group">
							<label>Additional requirements</label>
							<textarea class="form-control short" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-12 pt-3">
						<h4>Will you require hotel accomodation for the night?</h4>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios3" value="option1">
							<label class="form-check-label" for="exampleRadios1">
								Yes
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios3" value="option2" checked>
							<label class="form-check-label" for="exampleRadios2">
								No
							</label>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-12 pt-3">
						<h4>Will you require parking at the NEC?</h4>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios4" value="option1">
							<label class="form-check-label" for="exampleRadios1">
								Yes
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios4" value="option2" checked>
							<label class="form-check-label" for="exampleRadios2">
								No
							</label>
						</div>
						<div class="form-group">
							<label>Please let us know your car registration</label>
							<input type="text" class="form-control short" name="car">
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-warning" id="happy">Finish</button>
				</div>
			</form>
		</div>
	</div>

	<!-- Footer -->
	<footer class="bg-black text-center border-white">
		<div class="pt-4 text-white"><img src="img/santa-claus.png" height="20" width="20"> Developed by <a class="text-white" href="http://actlikeadam.com/">Adam Micolucci</a> for NEC <img src="img/reindeer.png" height="20" width="20"></div>
		<div class="pb-3"><a href="http://www.thenec.co.uk/"><img src="img/nec-logo.png" class="nec-logo-footer"></a></div>
	</footer>

	<!-- JS -->
	<script src="js/particles.min.js"></script> 
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</body>
</html>