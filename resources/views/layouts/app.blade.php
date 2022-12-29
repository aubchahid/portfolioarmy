<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content= "width=device-width, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ztokarmy</title>
    <link rel="icon" href="img/logo-icon.png">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- fancybox -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- aos -->
    <link rel="stylesheet" href="css/aos.css">
    <!-- nice-select -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- color -->
    <link rel="stylesheet" href="css/color.css">

    <!-- Font Awesome 5 -->

    <script src="https://kit.fontawesome.com/27a041baf1.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="page-loader">
        <div class="spinner"></div>
        <div class="txt">Samantha</div>
    </div>
    <header>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<div class="logo-icon">
						<a href="{{ route('home') }}">
							<img src="{{ asset('img/logo.png') }}" style="width: 150px !important" alt="logo">
						</a>
						<img alt="bar-menu" class="bar-menu" src="img/burger-menu-icon.svg">
					</div>
				</div>
				<div class="col-lg-9">
					<div class="menu-bar">
						<nav>
							<ul>
								<li><a href="{{ route('home') }}">Accueil</a></li>
								<li><a href="about.html">About</a>
								</li>
								<li class="menu-item-has-children"><a href="#">Schedule</a>
									<!-- First Tier Drop Down -->
									<ul>
										<li><a href="schedule.html">Schedule</a></li>
										<li><a href="online-schedule.html">online Schedule </a></li>
										<li><a href="apointment-1.html">Apointment 1 </a></li>
										<li><a href="apointment-2.html">Apointment 2 </a></li>
	
	
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="#">Pages</a>
									<ul>
										<li><a href="portfolio.html">Portfolio</a></li>
										<li><a href="portfolio-details.html">Portfolio Details</a></li>
										<li><a href="pricing-table.html">Pricing Table</a></li>
										<li><a href="404.html">404</a></li>
	
	
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="#">Blog</a>
									<ul>
										<li><a href="blog-style-1.html">Blog Style 1</a></li>
										<li><a href="blog-style-2.html">Blog Style 2</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
	
	
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
	
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>		
	</header>

    {{ $slot }}


    <!-- scroll top -->
    <button class="scroll-top-btn hidden">&#11014;</button>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- nice-select -->
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- owl.carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- fancybox -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- aos -->
    <script src="js/aos.js"></script>
    <!-- beforeafter -->
    <script src="js/beforeafter.js"></script>

    <!-- custom -->
    <script src="js/custom.js"></script>
</body>

</html>
