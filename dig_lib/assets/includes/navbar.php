<!DOCTYPE html>
<html lang="en">

<head>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

	<!-- Bootstrap CSS Start -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<!-- Bootstrap CSS End -->

	<!-- Custom CSS Start -->
	<link rel="stylesheet" href="../assets/css/navbar.css">


</head>

<body>
	<!-- partial:index.partial.html -->

	<body class="hero-anime">

		<div class="navigation-wrap start-header start-style" style="background-color:rgba(201, 206, 207, 0.819); backdrop-filter: blur(10px);">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="navbar navbar-expand-md navbar-light">
							<!-- navbar-brand -->
							<a href="../home/"><img src="../assets/images/logo_gndpc.png" alt="Here GNDPCcollege Logo" width="240px"></a>

							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto py-4 py-md-0">
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link" href="../../library.php?library=home">Library Home</a>
									</li>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link" href="../../StuWebPortal/">Student Dashboard</a>
									</li>
									<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<a class="dropdown-item" href="#">Another action</a>
									</div>
								</li> -->
								</ul>
							</div>

						</nav>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

	<script>
		(function($) {
			"use strict";

			$(function() {
				var header = $(".start-style");
				$(window).scroll(function() {
					var scroll = $(window).scrollTop();

					if (scroll >= 10) {
						header.removeClass('start-style').addClass("scroll-on");
					} else {
						header.removeClass("scroll-on").addClass('start-style');
					}
				});
			});

			//Animation

			$(document).ready(function() {
				$('body.hero-anime').removeClass('hero-anime');
			});

			//Menu On Hover

			$('body').on('mouseenter mouseleave', '.nav-item', function(e) {
				if ($(window).width() > 750) {
					var _d = $(e.target).closest('.nav-item');
					_d.addClass('show');
					setTimeout(function() {
						_d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
					}, 1);
				}
			});

		})(jQuery);
	</script>

</body>

</html>