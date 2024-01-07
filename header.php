<?php
include 'admin/functions.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap Links Start -->

	<!-- Bootstrap CSS Start -->
	<!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- Booststrap CSS End -->


	<!-- Bootstrap JS Start -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<!-- Bootstrap JS End -->

	<!-- Bootstrap Links End -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="assets/swiper/swiper.min.css">
	<link rel="stylesheet" href="assets/lightgallery/css/lightgallery.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/x-icon" href="img/images/logo.png">
</head>

<body>

	<!-- Loader Code Start -->

	<div class="loader-container" id="preloader">
		<div class='loader'>
			<div class="bg"></div>
			<div class='circle'></div>
			<div class='circle'></div>
			<div class='circle'></div>
			<div class='circle'></div>
			<div class='circle'></div>
		</div>
	</div>
	<!-- Loader Code End -->


	<!-- Scroll Progress Bar start -->
	<div class="progress"></div>
	<!-- Scroll Progress Bar end-->

	<!-- Scroll On Top Button -->
	<a href="javascript:" id="return-to-top" class="scrollButtons scroll1"><i class="fa fa-angle-double-up"></i></a>
	<a href="javascript:" id="return-to-down" class="scrollButtons scroll2"><i class="fa fa-angle-double-up"></i></a>
	<!-- Scroll On Top Button end -->

	<!-- Navigation Bar -->
	<div class="container-fluid">
		<div class="row m-0 p-0" id="navheight">
			<div class="col-xl-8 p-0 head-img">
				<!-- <img src="img/images/fixHeader.png" class="header-img" data-toggle="modal" data-target="#colorChanger"> -->
			</div>
			<div class="col-md-12 row mnumbar">
				<div class="col-md-6 mbarcont p-0">
					&nbsp&nbsp
					<a href="tel:0161-2490654" class="text-decoration-none text-white"><i class="fa fa-phone fa-rotate-90"></i> 0161-2490654</a>
				</div>
				<div class="col-md-6 mbarcont p-0">
					&nbsp&nbsp
					<a href="mailto:principalgndp@gmail.com" class="text-decoration-none text-white"><i class="fa fa-envelope"></i> principalgndp@gmail.com</a>
				</div>
			</div>
			<div class="logo-top col-md-12">
				<!-- d-sm-block d-md-none d-lg-none d-lg-none -->
				<div class="col-12 p-0">
					<img src="img/images/header.png" class="img-fluid m-auto d-block" data-toggle="modal" data-target="#colorChanger">
				</div>
			</div>
		</div>
		<hr class="m-0 header-hr">

		<div class="col-xl-12 nav-fix">
			<div class="col-md-12 w-100 p-0" id="navdiv" style="background: var(--gndpc);">
				<nav class="navbar navbar-light navbar-expand-md p-1" id="navbar">
					<img src="img/images/header1.png" id="headimage1" class="" style="padding-left: 5px;" data-toggle="modal" data-target="#colorChanger">
					<!-- <img src="img/images/header.png" id="headimage2" class="" style="padding-left: 5px;" data-toggle="modal" data-target="#colorChanger"> -->
					<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
						<h4 class="d-inline">
							<img src="img/images/header2.png" class="img-fluid" style="max-height: 38px;">
						</h4><i class="fa fa-bars nav-icon"></i>
					</button>
					<div class="collapse navbar-collapse" id="navcol-1">
						<ul class="nav navbar-nav m-auto">

							<!-- Home Menu Start -->
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home</a>
								<!--nav-active-->
							</li>
							<!-- Home Menu End -->

							<!-- About Menu Start -->
							<li class="nav-item">
								<a class="nav-link" href="about.php">About</a>
							</li>
							<!-- About Menu End -->

							<!-- Courses Menu Start -->
							<li class="nav-item">
								<a class="nav-link" href="courses.php">Courses</a>
							</li>
							<!-- Courses Menu End -->


							<!-- Admission Menu Start -->
							<li class="nav-item">
								<a class="nav-link" href="admission.php">Admission</a>
							</li>
							<!-- Admission Menu End -->

							<!-- Administration Menu Start -->
							<li class="nav-item">
								<a class="nav-link" href="Administration9.php">Administration</a>
							</li>
							<!-- Administration Menu End -->

							<!-- Department Dropdown Menu End -->
							<li class="nav-item dropdown">
								<a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">Departments
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu nav-drop depart-nav-link">
									<li class="nav-item">
										<a class="nav-link font-weight-normal" href="dept.php?dept=computer">Computer
											Science Engineering</a>
									</li>
									<li class="nav-item">
										<a class="nav-link font-weight-normal" href="dept.php?dept=civil">Civil
											Engineering</a>
									</li>
									<li class="nav-item">
										<a class="nav-link font-weight-normal" href="dept.php?dept=electrical">Electrical Engineering</a>
									</li>
									<li class="nav-item">
										<a class="nav-link font-weight-normal" href="dept.php?dept=electronics">Electronics &
											Communication Engineering</a>
									</li>
									<li class="nav-item">
										<a class="nav-link font-weight-normal" href="dept.php?dept=mechanical">Mechanical Engineering</a>
									</li>
									<li class="nav-item">
										<a class="nav-link font-weight-normal" href="dept.php?dept=automobile">Automobile Engineering</a>
									</li>
									<li class="nav-item">
										<a class="nav-link font-weight-normal" href="dept.php?dept=applied">Applied
											Science</a>
									</li>
									<li class="nav-item">
										<a class="nav-link font-weight-normal" href="dept.php?dept=sports">Sports
											Department</a>
									</li>
									<li class="nav-item">
										<a class="nav-link font-weight-normal" href="dept.php?dept=workshop">Workshop
											Department</a>
									</li>
									<li class="nav-item">
										<a class="nav-link font-weight-normal" href="dept.php?dept=office">Office
											Department</a>
									</li>
									<li class="nav-item">
										<a class="nav-link font-weight-normal" href="library.php?library=home">Library Department</a>
									</li>
								</ul>
							</li>
							<!-- Department Dropdown Menu End -->




							<!-- GNDPC Gallery Menu Start -->
							<li class="nav-item">
								<a class="nav-link" href="gallery.php">Gallery</a>
							</li>
							<!-- GNDPC Gallery Menu End -->
						</ul>
					</div>
				</nav>
			</div>

		</div>
	</div>
	<!-- Navigation Bar end -->
	<hr class="m-0 header-hr">







	<div class="modal fade" id="colorChanger" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Change UI Color(#2EABE2)</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">x</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<input type="range" class="form-control-range" name="red" id="r" min="0" max="255" value="46" oninput="showRedVal(this.value); rgbToHex();" onchange="showRedVal(this.value); rgbToHex();">
						<div id="redSlideValue">0</div>
						<input type="range" class="form-control-range" name="green" id="g" min="0" max="255" value="171" oninput="showGreenVal(this.value); rgbToHex();" onchange="showGreenVal(this.value); rgbToHex();">
						<div id="greenSlideValue">0</div>
						<input type="range" class="form-control-range" name="blue" id="b" min="0" max="255" value="226" oninput="showBlueVal(this.value); rgbToHex();" onchange="showBlueVal(this.value); rgbToHex();">
						<div id="blueSlideValue">0</div>
					</div>
					<section class="text-center">
						<div id="rgbValueBox">
							<span class="rgbText">RGB (</span>
							<span id="rSpanValue">00,</span>
							<span id="gSpanValue">00,</span>
							<span id="bSpanValue">00</span>
							<span class="rgbTextClosing">)</span>
						</div>
						<div id="HEXValueBox">#000000</div>
					</section>



				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" onclick="resetValCol()">Default</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		//auto-changes value from slider
		function showRedVal(redValue) {
			document.getElementById("redSlideValue").innerHTML = redValue;
			document.getElementById("rSpanValue").innerHTML = redValue + ",";
		}

		function showGreenVal(greenValue) {
			document.getElementById("greenSlideValue").innerHTML = greenValue;
			document.getElementById("gSpanValue").innerHTML = greenValue + ",";
		}

		function showBlueVal(blueValue) {
			document.getElementById("blueSlideValue").innerHTML = blueValue;
			document.getElementById("bSpanValue").innerHTML = blueValue;
		}
		showRedVal('46');
		showBlueVal('171');
		showGreenVal('226');
		//grabs rgb values on input and converts them to HEX color code
		//also changes background as sliders are moved
		function rgbToHex(r, g, b) {
			r = document.getElementById("r").value;
			g = document.getElementById("g").value;
			b = document.getElementById("b").value;
			//change rgb values to integers
			var rHex = parseInt(r)
			var gHex = parseInt(g)
			var bHex = parseInt(b)
			//puts Hex vars into HEX format eg #00FF00
			var hexColor = ("#" + ((1 << 24) + (rHex << 16) +
				(gHex << 8) + bHex).toString(16).slice(1).toUpperCase());
			document.getElementById("HEXValueBox").innerHTML = hexColor;
			//changes background color to HEX value
			document.body.style.setProperty('--gndpc', hexColor);
			document.body.style.setProperty('--navCol', hexColor);
			sessionStorage.setItem("gndpcCol", hexColor);
		}
		let getColr = sessionStorage.getItem("gndpcCol");
		document.body.style.setProperty('--gndpc', getColr);
		document.body.style.setProperty('--navCol', getColr);

		function resetValCol() {
			sessionStorage.clear();
			document.body.style.setProperty('--gndpc', '#2EABE2');
			document.body.style.setProperty('--navCol', '#2EABE2');
		}
	</script>
</body>

</html>

