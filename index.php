<?php
	session_start();
	session_unset();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="keywords" content="Nation Development Website">
	<meta name="application-name" content="CG India">
	<meta name="author" content="Bhavesh Kothari">
	<meta name="description" content="Cleaning India, Improving India">
	<title>CG India</title>
	<link rel="shortcut icon" href="./assets/image/favicon.jpg" type="image/x-icon">  
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="https://kit.fontawesome.com/a0d95914a1.js" crossorigin="anonymous"></script>
</head>

<body>
	<header id="home">
		<!-- <nav class="d-none navbar d-lg-block navbar-dark bg-primary p-1">
			<div class="container p-0">
					<div class="col text-white-50">
						Helpline: 
						<a href="tel:+919998779842" class="text-decoration-none text-white-50">
							<i class="fas fa-phone-alt"></i>
							+91 99987 79842
						</a>
						/
						<a href="mailto:bkj281@gmail.com" class="text-decoration-none text-white-50">
							<i class="fas fa-envelope"></i>
							bkj281@gmail.com
						</a>
					</div>
					<div class="col">
						<span class="float-end">
							<a href="#" class="text-white-50 px-1"><i class="fab fa-facebook"></i></a>
							<a href="#" class="text-white-50 px-1"><i class="fab fa-instagram"></i></a>
							<a href="#" class="text-white-50 px-1"><i class="fab fa-twitter"></i></a>
							<a href="https://www.linkedin.com/in/bhavesh-kothari-4687a3202/" class="text-white-50 px-1"><i class="fab fa-linkedin-in"></i></a>
							<a href="#" class="text-white-50 px-1"><i class="fab fa-youtube"></i></a>
							<a href="#" class="text-white-50 px-1"><i class="fab fa-github"></i></a>
						</span>
					</div>
			</div>
		</nav> -->
		<?php
			include('./page/topnav.php');
		?>

		<nav id="navbar" class="navbar navbar-expand-lg bg-dark navbar-dark">
			<div class="container-fluid">
				<a href="index.html" class="navbar-brand mx-sm-4">
					<img src="./assets/image/favicon.jpg" alt="Logo" width="24" class="d-inline-block align-text-top rounded-circle">
					<span class="align-bottom mx-2">CG India</span>
				</a>
				<button class="navbar-toggler" type="button" 	data-bs-toggle="collapse" data-bs-target="#collapseNavbar" aria-controls="collapseNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end"	id="collapseNavbar">
					<div class="navbar-nav">
						<div class="nav-item">
							<a href="#home" class="nav-link active" aria-current="page">
								<i class="fas fa-home fa-fw"></i>
								Home
							</a>
						</div>
						<div class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-info fa-fw"></i>
								About
							</a>
							<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#about">
									<i class="fas fa-users fa-fw"></i>
									Us
								</a></li>
								<li><a class="dropdown-item" href="#mission">
									<i class="fas fa-bullseye fa-fw"></i>
									Our Mission
								</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</div>
						<div class="nav-item">
							<a href="#service" class="nav-link">
								<i class="fas fa-concierge-bell fa-fw"></i>
								Services
							</a>
						</div>
						<div class="nav-item">
							<a href="#contact" class="nav-link">
								<i class="fas fa-id-badge fa-fw"></i>
								Contact Us
							</a>
						</div>
						<div class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-sign-in-alt"></i>
								Login/Register
							</a>
							<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#login">
									<i class="fas fa-sign-in-alt"></i>
									Login
								</a></li>
								<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#register">
									<i class="fas fa-sign-in-alt"></i>
									Register
								</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<!-- Login Modal -->
	<div class="modal fade" id="login">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-primary text-white">
					<h5 class="modal-title">
						User Login
					</h5>
					<button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">
					<i class="fas fa-user-circle fa-10x d-block text-center text-primary mb-4"></i>
				
					<form action="./php/login.php" method="POST">
						<div class="mb-3">
							<label for="username" class="form-label">
								<i class="fas fa-file-signature fa-fw"></i>
								User ID
							</label>
							<input type="email" class="form-control" name="email" id="username" placeholder="abc123@nomail.com" required>
						</div>

						<div class="mb-3">
							<label for="pwd" class="form-label">
								<i class="fas fa-key fa-fw"></i>
								Password
							</label>
							<input type="password" class="form-control" name="pwd" id="pwd" placeholder="Your Password" required>
						</div>

						<div class="mb-3 row">
							<div class="col-6 col-sm-4">
								<label for=""><i class="far fa-question-circle fa-fw"></i> Account Type</label>
							</div>
							<div class="col-6 col-sm-8">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="category" id="person" value="person" checked>
									<label class="form-check-label fw-normal" for="person">Contributor</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="category" id="district" value="official">
									<label class="form-check-label fw-normal" for="district">Official</label>
								</div>
							</div>
						</div>

						<div class="mb-3 row">
							<div class="col-12">
								<label for="verify" class="form-label">
									<i class="fas fa-check-double fa-fw"></i>
									Verification Code
								</label>
							</div>
							<div class="col-6">
								<input type="text" class="form-control" name="verify" id="verify" required>
							</div>
							<div class="col-3">
								<img src="./php/captcha.php" id="captcha" class="d-block m-auto rounded-3">
							</div>
							<div class="col-2 align-self-center">
								<span onclick="refresh();"><i class="fas fa-sync fa-fw fa-lg"></i></span>
							</div>
							<div class="col-1"></div>
						</div>

						<div class="mt-3">
							<button type="submit" class="btn btn-primary btn-sm w-100">Login</button>
						</div>

						<div class="mt-3 text-end">
							<a href="#" class="move" data-bs-toggle="modal" data-bs-target="#register">Don't have an account? Click Here.</a>
						</div>

					</form>
				</div>

				<div class="modal-footer d-block">
					<button type="button" data-bs-dismiss="modal" class="btn btn-danger btn-sm w-25">Cancel</button>
					<a href="#" class="float-end move">Forgot Password?</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Registration Modal -->
	<div class="modal fade" id="register">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-success text-white">
					<h5 class="modal-title">
						User Registration
					</h5>
					<button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">
					<i class="fas fa-user fa-10x d-block text-center text-success mb-4"></i>
					<form action="./php/register.php" method="POST" enctype="multipart/form-data">
						<div class="row mb-3">
							<div class="col-12">
								<label for="" class="form-label">
									<i class="fas fa-file-signature fa-fw"></i>
									Full Name
								</label>
							</div>
							<div class="col-12 col-md-6 mb-1">
								<input type="text" class="form-control" name="f_name" id="f_name" placeholder="First Name" required>
							</div>
							<div class="col-12 col-md-6">
								<input type="text" class="form-control" name="l_name" id="l_name" placeholder="Last Name" required>
							</div>
						</div>

						<div class="mb-3">
							<label for="username" class="form-label">
								<i class="fas fa-signature fa-fw"></i>
								User ID
							</label>
							<input type="email" class="form-control" name="email" id="username" placeholder="abc123@nomail.com" required>
						</div>

						<div class="mb-3">
							<label for="dob" class="form-label">
								<i class="fas fa-birthday-cake fa-fw"></i>
								D.O.B.
							</label>
							<input type="date" class="form-control" name="dob" id="dob" required>
						</div>

						<div class="mb-3">
							<label for="phn" class="form-label">
								<i class="fas fa-mobile-alt fa-fw"></i>
								Phone No.
							</label>
							<input type="tel" class="form-control" name="phn" id="phn" placeholder="+91 xxxxx xxxxx" required>
						</div>

						<div class="row mb-3">
							<div class="col-12 mb-2">
								<label for="address" class="mb-2">
									<i class="fas fa-map-marker-alt fa-fw"></i>
									Address
								</label>
								<input type="text" class="form-control" name="address" id="address" placeholder="Building No, Society Name" required>
							</div>
							<div class="col-md-4 mb-1">
								<input type="text" name="city" class="form-control" id="city" placeholder="City" required>
							</div>
							<div class="col-md-4 mb-1">
								<input type="text" name="state" class="form-control" id="state" placeholder="State" required>
							</div>
							<div class="col-md-4 mb-1">
								<input type="number" name="pin" class="form-control" id="pin" placeholder="Pin Code" required>
							</div>
						</div>

						<div class="mb-3">
							<label for="pwd" class="form-label">
								<i class="fas fa-key fa-fw"></i>
								Password
							</label>
							<input type="password" class="form-control" name="pwd" id="pwd" placeholder="Your Password" required>
						</div>

						<div class="mb-3">
							<label for="pwd2" class="form-label">
								<i class="fas fa-key fa-fw"></i>
								Re-Enter Password
							</label>
							<input type="password" class="form-control" name="pwd2" id="pwd2" placeholder="Your Password" required>
						</div>

						<div class="mb-3 row">
							<div class="col-6 col-sm-4">
								<label for="">
									<i class="far fa-question-circle fa-fw"></i> 
									Account Type
								</label>
							</div>
							<div class="col-6 col-sm-8">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="category" id="person" value="person" checked>
									<label class="form-check-label fw-normal" for="person">Contributor</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="category" id="district" value="official">
									<label class="form-check-label fw-normal" for="district">Official</label>
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label for="dp" class="form-label">
								<i class="far fa-image fa-fw"></i>
								Profile Pic
							</label>
							<input type="file" class="form-control" id="dp" name="dp" accept="image/*" required>
						</div>

						<div class="mt-3">
							<button type="submit" class="btn btn-success btn-sm w-100">Register</button>
						</div>

						<!-- <div class="mt-3 text-end">
							<a href="#" class="move" data-bs-toggle="modal" data-bs-target="#login">Already have an account? Click Here.</a>
						</div> -->
					</form>
				</div>

				<div class="modal-footer d-block">
					<button type="button" data-bs-dismiss="modal" class="btn btn-danger btn-sm w-25">Cancel</button>
				</div>
			</div>
		</div>
	</div>

	<main>
		<!-- carousel-dark for dark controls -->
		<div id="carousel" class="carousel carousel-dark slide carousel-fade pt-1 pt-md-0" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
				<button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="./assets/image/mygov_16142409634429634.jpg" alt="Carousel Image" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="./assets/image/gov-track5.png" alt="Carousel Image" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="./assets/image/mygov_16142409824429634.jpg" alt="Carousel Image" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="./assets/image/bg17.jpg" alt="Carousel Image" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="./assets/image/bg6.jpg" alt="Carousel Image" class="d-block w-100">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<div class="container">
			<div class="row pt-5" id="about">
				<div class="col text-center">
					<h1>About Us</h1>
					<hr class="w-50 mx-auto">
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-lg-6 align-self-center">
					<img src="./assets/image/logobg.jpeg" alt="Logo" class="img-fluid">
				</div>
				<div class="col-12 col-lg-6">
					<h3 class="text-center mt-4">CG India</h3>
					<hr class="w-25 mx-auto my-0">
					<p class="mt-3">
						To accelerate the efforts to achieve universal sanitation coverage and to put focus on sanitation, the Prime Minister of India launched the Swachh Bharat Mission on 2nd October, 2014. The Mission Coordinator for SBM is Secretary, Department of Drinking Water and Sanitation (DDWS), Ministry of Jalshakti with two Sub-Missions, the Swachh Bharat Mission (Gramin) and the Swachh Bharat Mission (Urban). Together, they aim to achieve Swachh Bharat by 2019, as a fitting tribute to Mahatma Gandhi on his 150th Birth Anniversary.
						<br>
					</p>
					<p>
						CG India is an initiative by us for a clean & green India dream. We are trying to clean Indian roads, societies, public places, etc. by getting details from the local residential people there. 
					</p>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col text-center">
					<iframe src="./assets/pdf/CGI.pdf#zoom=136.5%" frameborder="0" class="w-100" id='iframe'></iframe>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row pt-5" id="mission">
				<div class="col text-center">
					<h1>Our Mission</h1>
					<hr class="w-50 mx-auto">
				</div>
			</div>

			<div class="row">
				<div class="col text-center">
					<iframe id="modi" src="https://www.youtube.com/embed/HmtxA_iXvbY?start=12" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-12 col-lg-6 align-self-center">
					<img src="./assets/image/mission.jpg" alt="Mission Images" class="img-fluid">
				</div>
				<div class="col-12 col-lg-6">
					<h3 class="text-center mt-4">
						Welcome to <span class="text-danger text-decoration-underline">CG India</span> - An initiative for Swachh Bharat Abhiyaan
					</h3>
					<hr class="w-50 mx-auto my-0">
					<p class="mt-3">
						The Swachh Bharat Abhiyan is the most significant cleanliness campaign by the Government of India. Shri Narendra Modi led a cleanliness pledge at India Gate, which about thirty lakh government employees across the country joined.
					</p>
					<p class="fw-bold">
						As a part of this mission, local people can upload a issue which need immediate cleanliness, after there request is received, we will send our men there for cleanliness.<br>
						After cleanliness, we will contact the person who registred the issue for feedback.
					</p>
				</div>
			</div>
		</div>

		<div class="container-fluid text-center">
			<div class="row pt-5" id="service">
				<div class="col text-center">
					<h1>Services</h1>
					<hr class="w-25 mx-auto">
				</div>
			</div>

			<div class="row first py-3 mt-3 text-white">
				<div class="col-12 col-md-4 d-block m-auto">
					<div class="d-block m-auto py-2 icon-setting bg-white rounded-circle">
						<i class="fas fa-hand-holding-heart fa-4x fa-fw fcolor m-2"></i>
					</div>
					<h4 class="mt-3">Quality of Life</h4>
					<p class="mt-3 copy">
						To bring about an improvement in the general quality of life in the rural areas, by promoting cleanliness, hygiene and eliminating open defecation.
					</p>
				</div>
				<div class="col-12 col-md-4 d-block m-auto">
					<div class="d-block m-auto py-2 icon-setting bg-white rounded-circle">
						<i class="far fa-snowflake fa-5x fa-fw fcolor"></i>
					</div>
					<h4 class="mt-3">Sustainable Sanitation</h4>
					<p class="mt-3 copy">
						To motivate communities to adopt sustainable sanitation practices and facilities through awareness creation and health education.
					</p>
				</div>
				<div class="col-12 col-md-4 d-block m-auto">
					<div class="d-block m-auto py-2 icon-setting bg-white rounded-circle">
						<i class="fas fa-user-friends fa-4x fa-fw fcolor mt-2"></i>
					</div>
					<h4 class="mt-3">Promote Social Inclusion</h4>
					<p class="mt-3 copy">
						To create significant positive impact on gender and promote social inclusion by improving sanitation especially in marginalized communities.
					</p>
				</div>
			</div>

			<div class="row second mt-5 pt-4 pb-3 text-white">
				<div class="col-6 col-md-4 col-lg-2 set-text mb-2">
					<h4 class="">10,120</h4>
					<h6 class="d-block m-0 swachh">Swachh Bharat</h6>
					<h6 class="d-block">Pledges Taken</h6>
				</div>
				<div class="col-6 col-md-4 col-lg-2 set-text mb-2">
					<h4 class="">3,731</h4>
					<h6 class="d-block m-0 swachh">Swachh Bharat</h6>
					<h6 class="d-block">Challenges Taken</h6>
				</div>
				<div class="col-6 col-md-4 col-lg-2 set-text mb-2">
					<h4 class="">3,800</h4>
					<h6 class="d-block m-0 swachh">Swachh Bharat</h6>
					<h6 class="d-block">Activities Done</h6>
				</div>
				<div class="col-6 col-md-4 col-lg-2 set-text mb-2">
					<h4 class="">7,165</h4>
					<h6 class="d-block m-0 swachh">Swachh Bharat</h6>
					<h6 class="d-block">Active Participants</h6>
				</div>
				<div class="col-6 col-md-4 col-lg-2 set-text">
					<h4 class="">1,00,111</h4>
					<h6 class="d-block m-0 swachh">Swachh Bharat</h6>
					<h6 class="d-block">Contributed Hours</h6>
				</div>
				<div class="col-6 col-md-4 col-lg-2 set-text">
					<h4 class="">683</h4>
					<h6 class="d-block m-0 swachh">Swachh Bharat</h6>
					<h6 class="d-block">Pakhwada Activities</h6>
				</div>
			</div>
		</div>

		<!-- <div class="container">
			<div class="row pt-5" id="contact">
				<div class="col text-center">
					<h1>Contact Us</h1>
					<hr class="w-50 mx-auto">
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-6 mx-auto">
					<form action="./php/complain.php" method="POST">
						<div class="mb-3">
							<label for="cname" class="form-label"><i class="fas fa-user fa-fw"></i> Your Name</label>
							<input type="text" class="form-control" name="cname" id="cname" placeholder="Enter your name..." required>
						</div>
						<div class="mb-3">
							<label for="cmail" class="form-label"><i class="fas fa-paper-plane fa-fw"></i> E-Mail</label>
							<input type="email" class="form-control" name="cmail" id="cmail" placeholder="abc123@xyz.com" required>
						</div>
						<div class="mb-3">
							<label for="message" class="form-label"><i class="fas fa-comment-alt fa-fw"></i> Query Details</label>
							<textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message..." required></textarea>
						</div>
						<div class="mt-4">
							<button type="submit" class="btn btn-primary w-100">Send</button>
						</div>
					</form>
				</div>
			</div>
		</div> -->

		<?php
			include('./page/contactform.php')
		?>

	</main>

	<!-- <footer class="mt-5 text-center fw-bold p-3 bg-secondary bg-opacity-25">
		<div class="container">
			<div class="row">
				<div class="col mb-3">
					<a href="#" class="mx-2 text-dark social"><i class="fab fa-facebook-square fa-2x"></i></a>
					<a href="#" class="mx-2 text-dark social"><i class="fab fa-instagram-square fa-2x"></i></a>
					<a href="#" class="mx-2 text-dark social"><i class="fab fa-twitter-square fa-2x"></i></a>
					<a href="https://www.linkedin.com/in/bhavesh-kothari-4687a3202/" class="mx-2 text-dark social"><i class="fab fa-linkedin fa-2x"></i></a>
					<a href="#" class="mx-2 text-dark social"><i class="fab fa-youtube-square fa-2x"></i></a>
					<a href="#" class="mx-2 text-dark social"><i class="fab fa-github-square fa-2x"></i></a>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<ul class="nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link social" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link social" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link social" href="#service">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link social" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col">
					<h6 class="fw-bolder">Made With Love <i class="fas fa-heart text-danger"></i> CG India</h6>
					<p class="mt-3 fw-bold copy">&copy; 2021 CG India | All Rigths Are Reserved</p>
				</div>
			</div>
		</div>
	</footer> -->

	<?php
		include('./page/footer.php')
	?>

	<script type="text/javascript" src="./js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</body>

</html>