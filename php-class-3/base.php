<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta Tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />
		<!-- Company Title -->
		<title>Bootstrap || Lesson 16</title>
		<!-- Company Icon -->
		<link rel="icon" href="images/logo.png" />

		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/all.css" />

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

		<!-- Global CSS here -->
		<link rel="stylesheet" href="css/global.css" />

		<!-- All Custom css here -->
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body data-bs-spy="scroll" data-bs-target="#main-nav" data-bs-offset="50">
		<header>
			<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-black bg-opacity-25" id="main-nav">
				<div class="container-fluid">
					<a class="navbar-brand d-flex" href="#">
						<img src="images/logo2.png" width="100" alt="Company Logo" />
						<h2 class="ms-2 my-auto text-uppercase">Mohammad</h2>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarsExample03">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a class="nav-link px-3 me-2 text-white active" href="#home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-3 me-2 text-white" href="#about">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-3 me-2 text-white" href="#services">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-3 me-2 text-white" href="#project">Project</a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-3 me-2 text-white" href="#contact">Contact</a>
							</li>
							<li class="nav-item">
								<a class="btn btn-primary w-100" href="#"> Login </a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<main>
			<!-- ===== This Is Slider Section ===== -->
			<section id="home" class="bg-no-repeat bg-size-cover bg-position-center" style="background-image: url('images/home.jpg')">
				<div class="container-lg">
					<div class="row no-gutters">
						<div class="col-6 text-left">
							<!-- Person Part -->
							<img class="img-fluid d-block pr-4" src="images/Profile Picture2.png" alt="DEWAN MOHAMMAD ALI" />
						</div>
						<div class="col-sm-6 col-12 align-self-center text-uppercase">
							<!-- Content Part -->
							<h5 class="text-warning mb-0 h5-sm">Introduction</h5>
							<h4 class="text-white mb-0 h4-sm"><b>Hello, My Name is DEWAN MOHAMMAD ALI</b></h4>
							<h2 class="text-warning h2-sm">I'M A PROGRAMMER</h2>
							<button class="btn btn-light rounded-pill px-sm-4 py-sm-2 py-0">My Work</button>
							<button class="btn btn-primary rounded-pill px-sm-4 py-sm-2 py-0">Hire Me</button>
						</div>
					</div>
				</div>
			</section>
			<!-- ===== This Is About Section ===== -->
			<section id="about">
				<div class="container-lg">
					<div class="text-center">
						<h6 class="text-primary mb-0 font-weight-normal">About Me</h6>
						<h1 class="text-uppercase pb-3 mb-5">Welcome To My Website</h1>
						<p class="text-muted mb-5">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
							into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
					</div>
					<!-- Progress Part -->
					<div class="row justify-content-center mb-5 py-4" id="progress">
						<div class="col-md-4 col-sm-6 col-11 mb-3">
							<h6 class="mb-1">WEB DESIGN</h6>
							<!-- progress bar 1 -->
							<div class="progress rounded-pill mb-4">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-success rounded-pill" role="progressbar" style="width: 75%"></div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-11 mb-3">
							<h6 class="mb-1">PHP DEVELOPMENT</h6>
							<!-- progress bar 1 -->
							<div class="progress rounded-pill mb-4">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary rounded-pill" role="progressbar" style="width: 75%"></div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-11 mb-3">
							<h6 class="mb-1">PHOTOGRAPHY</h6>
							<!-- progress bar 1 -->
							<div class="progress rounded-pill mb-4">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning rounded-pill" role="progressbar" style="width: 75%"></div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-11 mb-3">
							<h6 class="mb-1">BRANDING</h6>
							<!-- progress bar 1 -->
							<div class="progress rounded-pill mb-4">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger rounded-pill" role="progressbar" style="width: 75%"></div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-11 mb-3">
							<h6 class="mb-1">MARKETING</h6>
							<!-- progress bar 1 -->
							<div class="progress rounded-pill mb-4">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary rounded-pill" role="progressbar" style="width: 75%"></div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-11 mb-3">
							<h6 class="mb-1">SEO</h6>
							<!-- progress bar 1 -->
							<div class="progress rounded-pill mb-4">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-info rounded-pill" role="progressbar" style="width: 75%"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ===== This Is Services Section ===== -->
			<section id="services" class="bg-no-repeat bg-size-cover bg-position-center bg-attachment-fixed" style="background-image: url('images/serve.jpg')">
				<div class="container-lg">
					<div class="text-center">
						<h6 class="text-primary mb-0 font-weight-normal">My Services</h6>
						<h1 class="text-uppercase text-white mb-4">What I do</h1>
					</div>
					<!-- Service Content -->
					<div class="row g-2 g-lg-3 text-white justify-content-center">
						<!-- Service 1 -->
						<div class="col-md-4 col-sm-6 col-11">
							<div class="card p-5 bg-white bg-opacity-25 text-center h-100">
								<h2 class="text-warning mb-4"><i class="fas fa-list"></i></h2>
								<h3 class="mb-4">Professional Code</h3>
								<p class="px-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
						</div>
						<!-- Service 2 -->
						<div class="col-md-4 col-sm-6 col-11">
							<div class="card p-5 bg-white bg-opacity-25 text-center h-100">
								<h2 class="text-warning mb-4"><i class="far fa-lightbulb"></i></h2>
								<h3 class="mb-4">Creative Ideas</h3>
								<p class="px-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
						</div>
						<!-- Service 3 -->
						<div class="col-md-4 col-sm-6 col-11">
							<div class="card p-5 bg-white bg-opacity-25 text-center h-100">
								<h2 class="text-warning mb-4"><i class="far fa-clone"></i></h2>
								<h3 class="mb-4">SEO Marketing</h3>
								<p class="px-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
						</div>
						<!-- Service 4 -->
						<div class="col-md-4 col-sm-6 col-11">
							<div class="card p-5 bg-white bg-opacity-25 text-center h-100">
								<h2 class="text-warning mb-4"><i class="far fa-heart"></i></h2>
								<h3 class="mb-4">User Friendly</h3>
								<p class="px-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
						</div>
						<!-- Service 5 -->
						<div class="col-md-4 col-sm-6 col-11">
							<div class="card p-5 bg-white bg-opacity-25 text-center h-100">
								<h2 class="text-warning mb-4"><i class="fas fa-magic"></i></h2>
								<h3 class="mb-4">Web development</h3>
								<p class="px-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
						</div>
						<!-- Service 6 -->
						<div class="col-md-4 col-sm-6 col-11">
							<div class="card p-5 bg-white bg-opacity-25 text-center h-100">
								<h2 class="text-warning mb-4"><i class="fas fa-sliders-h"></i></h2>
								<h3 class="mb-4">Portfolio Option</h3>
								<p class="px-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ===== This Is Project Section ===== -->
			<section id="project" class="bg-warning">
				<div class="container-lg">
					<div class="text-center">
						<h6 class="text-primary mb-0 font-weight-normal">View All</h6>
						<h1 class="text-uppercase mb-4">My Project</h1>
					</div>
					<div class="row g-2 g-lg-3 justify-content-center">
						<!-- Project 001 -->
						<div class="col-lg-4 col-sm-6 col-11">
							<div class="card">
								<img class="card-img d-block" src="images/g1.jpg" alt="Project 1" />
								<div class="card-img-overlay p-2 top-auto card-hover-visible">
									<a class="btn btn-dark w-100"> VIEW </a>
								</div>
							</div>
						</div>
						<!-- Project 002 -->
						<div class="col-lg-4 col-sm-6 col-11">
							<div class="card">
								<img class="card-img d-block" src="images/g2.jpg" alt="Project 2" />
								<div class="card-img-overlay p-2 top-auto card-hover-visible">
									<a class="btn btn-dark w-100"> VIEW </a>
								</div>
							</div>
						</div>
						<!-- Project 003 -->
						<div class="col-lg-4 col-sm-6 col-11">
							<div class="card">
								<img class="card-img d-block" src="images/g3.jpg" alt="Project 3" />
								<div class="card-img-overlay p-2 top-auto card-hover-visible">
									<a class="btn btn-dark w-100"> VIEW </a>
								</div>
							</div>
						</div>
						<!-- Project 004 -->
						<div class="col-lg-4 col-sm-6 col-11">
							<div class="card">
								<img class="card-img d-block" src="images/g4.jpg" alt="Project 4" />
								<div class="card-img-overlay p-2 top-auto card-hover-visible">
									<a class="btn btn-dark w-100"> VIEW </a>
								</div>
							</div>
						</div>
						<!-- Project 005 -->
						<div class="col-lg-4 col-sm-6 col-11">
							<div class="card">
								<img class="card-img d-block" src="images/g5.jpg" alt="Project 5" />
								<div class="card-img-overlay p-2 top-auto card-hover-visible">
									<a class="btn btn-dark w-100"> VIEW </a>
								</div>
							</div>
						</div>
						<!-- Project 006 -->
						<div class="col-lg-4 col-sm-6 col-11">
							<div class="card">
								<img class="card-img d-block" src="images/g6.jpg" alt="Project 6" />
								<div class="card-img-overlay p-2 top-auto card-hover-visible">
									<a class="btn btn-dark w-100"> VIEW </a>
								</div>
							</div>
						</div>
						<!-- Project 007 -->
						<div class="col-lg-4 col-sm-6 col-11">
							<div class="card">
								<img class="card-img d-block" src="images/g7.jpg" alt="Project 7" />
								<div class="card-img-overlay p-2 top-auto card-hover-visible">
									<a class="btn btn-dark w-100"> VIEW </a>
								</div>
							</div>
						</div>
						<!-- Project 008 -->
						<div class="col-lg-4 col-sm-6 col-11">
							<div class="card">
								<img class="card-img d-block" src="images/g8.jpg" alt="Project 8" />
								<div class="card-img-overlay p-2 top-auto card-hover-visible">
									<a class="btn btn-dark w-100"> VIEW </a>
								</div>
							</div>
						</div>
						<!-- Project 009 -->
						<div class="col-lg-4 col-sm-6 col-11">
							<div class="card">
								<img class="card-img d-block" src="images/g9.jpg" alt="Project 9" />
								<div class="card-img-overlay p-2 top-auto card-hover-visible">
									<a class="btn btn-dark w-100"> VIEW </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ===== This Is Reviews Section ===== -->
			<section id="review" class="bg-no-repeat bg-size-cover bg-position-center" style="background-image: url('images/review.jpg')">
				<div class="container-lg">
					<div class="row">
						<div class="col-3 text-center">
							<!-- Reviews 001 -->
							<h2 class="text-warning mb-4"><i class="far fa-lightbulb"></i></h2>
							<h3 class="font-weight-bold text-white mb-4">48</h3>
							<h6 class="text-white">Project Done</h6>
						</div>
						<div class="col-3 text-center">
							<!-- Reviews 002 -->
							<h2 class="text-warning mb-4"><i class="far fa-heart"></i></h2>
							<h3 class="font-weight-bold text-white mb-4">47</h3>
							<h6 class="text-white">Satisfied clients</h6>
						</div>
						<div class="col-3 text-center">
							<!-- Reviews 003 -->
							<h2 class="text-warning mb-4"><i class="fas fa-magic"></i></h2>
							<h3 class="font-weight-bold text-white mb-4">60</h3>
							<h6 class="text-white">Awards</h6>
						</div>
						<div class="col-3 text-center">
							<!-- Reviews 004 -->
							<h2 class="text-warning mb-4"><i class="fas fa-grin-alt"></i></h2>
							<h3 class="font-weight-bold text-white mb-4">48</h3>
							<h6 class="text-white">Happy clients</h6>
						</div>
					</div>
				</div>
			</section>
			<!-- ===== This Is Contact Section ===== -->
			<section id="contact" class="bg-no-repeat bg-size-cover bg-position-center bg-attachment-fixed" style="background-image: url('images/contact.jpg')">
				<div class="container-lg .bg-transparent-noimportant">
					<div class="text-center">
						<h6 class="text-primary mb-0 font-weight-normal">Find Me</h6>
						<h1 class="text-uppercase text-white mb-5">Contact Me Now</h1>
					</div>
					<form class="row g-2 justify-content-center" name="contactForm" onsubmit="if(confirm('Do you want to sent this massage?')){if (myValidation() == false){return false;}} else{event.preventDefault(); return false;}">
						<div class="col-md-6 col-11">
							<div class="mb-3">
								<span id="name-error"></span>
								<input type="text" onkeyup="key(this)" name="name" class="form-control bg-transparent" placeholder="Type Your name" onfocus="myFocus(this)" />
							</div>
							<div class="mb-3">
								<span id="email-error"></span>
								<input type="email" name="email" class="form-control bg-transparent" placeholder="Type Email Address" onfocus="myFocus(this)" />
							</div>
							<div class="mb-3">
								<span id="phone-error"></span>
								<input type="number" name="phone" class="form-control bg-transparent" placeholder="Type Your Phone Number" onfocus="myFocus(this)" />
							</div>
						</div>
						<div class="col-md-6 col-11 jus">
							<div class="mb-3">
								<span id="massage-error"></span>
								<textarea id="uppertext" onkeyup="upper(this); targeLength(this);" name="massage" class="form-control bg-transparent" placeholder="Type Your massage Here" onfocus="myFocus(this);" style="margin-bottom: 0; height: 145px"></textarea>
								<span id="showlength" style="color: white; float: right"></span>
							</div>
						</div>
						<div class="my-4 text-center w-100">
							<button type="submit" class="btn btn-lg btn-primary">Submit</button>
						</div>
					</form>
					<!-- Address Part -->
					<div class="row mt-5 text-white" id="address">
						<div class="col-sm-4 text-center">
							<h1 class="text-warning mb-3"><i class="fas fa-map-marked-alt"></i></h1>
							<p>
								Address <br />
								Ghatail, Tangail
							</p>
						</div>
						<div class="col-sm-4 text-center">
							<h1 class="text-warning mb-3"><i class="far fa-envelope"></i></h1>
							<p>
								Email <br />
								dmaghatail@gmail.com
							</p>
						</div>
						<div class="col-sm-4 text-center">
							<h1 class="text-warning mb-3"><i class="fas fa-mobile-alt"></i></h1>
							<p>
								Phone <br />
								+880 1741-815293
							</p>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="py-md-3 py-5">
			<div class="container-lg">
				<div class="row align-item-center">
					<!-- Social-Media Part -->
					<nav class="col-sm-4 order-md-5" id="social-link">
						<ul class="nav justify-content-md-end justify-content-center">
							<li>
								<a class="btn btn-light btn-outline-primary rounded-circle" href="#"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li>
								<a class="btn btn-light btn-outline-primary rounded-circle" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a class="btn btn-light btn-outline-primary rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
							</li>
						</ul>
					</nav>

					<!-- Copyright Part -->
					<div class="col-sm-8 text-center text-md-start py-3">&copy; 2020 all right reserved by Dewan Mohammad Ali</div>
				</div>
				<button class="btn btn-dark fixed-bottom start-auto align-item-end justify-content-end m-3" id="upper">
					<i class="fas fa-chevron-up"></i>
				</button>
			</div>
		</footer>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
		<!-- jQuery first, then popper.js, then Bootstrap.js 
		<script src="js/jquery-3.5.1.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
		--></body>
</html>
