<?php
include 'header.php';
?>
<title>GNDPC HOME</title>


<?php
$slider=array();
$slider=getGalleryImages('9','slider','sliderY');

for ($arr=0; $arr < 1; $arr++) {
	for ($arr1=0; $arr1 < 10; $arr1++) {
		if(!isset($slider[$arr][$arr1])){
		$slider[$arr][$arr1] = '';
	}
	}
}

/*News data call from db*/
$news = array(array());
$news=getNews();
for ($arr=0; $arr < 1; $arr++) {
	for ($arr1=0; $arr1 < 10; $arr1++) {
		if(!isset($news[$arr][$arr1])){
		$news[$arr][$arr1] = '&nbsp;';
	}
	}
}
/*News data call from db end*/
?>
<!-- Slider -->
<div class="container-fluid">
	<div class="row m-0 p-0 position-absolute scrollingNewsCont">
		<div class="alert m-0 p-1 scrollingNews">
			<marquee class="w-100">
			<?php 
			foreach (array_reverse($news) as $new) {
				echo '<span class="important">'.$new[3].'</span> ['.dateFormat($new[1]).']  '.$new[2].' <a target="_blank" href="//'.$new[5].'">'.$new[4].'</a>&nbsp;&nbsp;,   ';
			//echo $new[5];
			}
		?>


	  </marquee>

<!--
	   <center style="background:#ffe6e6;width: fit-content;margin: auto;border-radius:15px;">
                      	<p style="background-color:#ffe6e6;opacity:20%;border-radius:10px;">
                      	    <span class="slidertext"><font size="4" color="red">Admission Notice</font>
	 	  <hr size="10" width="50%">
	   <br>
	   <a href="https://forms.gle/VaSLM2Ca5Hq5hRBJ9" target="_blank">Register for Admission 2021-2022 (1st Year) </a>
	   <br>
	   <br>
	   <a href="https://forms.gle/QgFTn3zkMgpsJdGV8" target="blank">Register for LEET Admission 2021-2022 (2nd Year)</a>
	   <br><br>
	   <p style="color:blue;">Contact No.-98156-00649 (Timing 9:00AM to 4:00PM)</p></span>
	   <hr width="100%">
	   <!--<br>
	   <a href="documents/SRE2021.jpeg" target="_blank">Notice for Sikh Quota Examination 2021 </a>
	   <br>
	   <hr width="100%">-->
                      <!-- <span class="slidertext"><font size="4" color="red">Semester Fee Notice</font>
                        <hr size="10" width="50%">
                          <br />
                          
                         <p style="color:blue;"> <a href="documents/semFee.jpeg"> Notice for Semester Fee 2021</a><br><br></p>
                          
                       </span>
                      </font>
                    
                    </center>-->
		</div>
	</div>

	<div id="imageslider" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">

<?php
$SliderCount=0;
foreach ($slider as $image) {
	if ($SliderCount==0) {
		echo '<li data-target="#imageslider" data-slide-to="'.$SliderCount.'" class="active"></li>';
	}
	else{
		echo '<li data-target="#imageslider" data-slide-to="'.$SliderCount.'"></li>';
	}
	$SliderCount++;
}
?>
			</ul>
			<div class="carousel-inner">
<?php
$SliderCount=0;
foreach ($slider as $compressedimage) {
if ($SliderCount==0) {
				echo '<div class="carousel-item active">
					<img src="img/images/fixSlider.png" style="background:url('.$compressedimage[2].');">
					<div class="carousel-caption slider-text">
						<h2>'.$compressedimage[7].'</h2>
						<p>'.$compressedimage[8].'</p>
					</div>
				</div>';
}
else{
				echo '<div class="carousel-item">
					<img src="img/images/fixSlider.png" style="background:url('.$compressedimage[2].');">
					<div class="carousel-caption slider-text">
						<h2>'.$compressedimage[7].'</h2>
						<p>'.$compressedimage[8].'</p>
					</div>
				</div>';
}
$SliderCount++;
}
?>
			</div>
			<a class="carousel-control-prev left butleft" href="#imageslider" data-slide="prev">
				<i class="fas fa-angle-double-left"></i>
			</a>
			<a class="carousel-control-next right butright" href="#imageslider" data-slide="next">
				<i class="fas fa-angle-double-right"></i>
			</a>
		</div>
	</div>
	<!-- slider end -->



	<!-- Events and News -->
	<div class="container-fluid eventHome">
		<div class="container bottopmargevent">
			<div class="row">

				<!-- News Start -->
				<div class="col-lg-3 order-lg-3 newspc">
					<!-- <h1 class="text-center"><spans class="headev">News</spans></h1> -->
					<div class="announcements-container container-fluid">
						<div class="row">
							<div class="container-title col-12" id="newsbutton" data-toggle="tooltip" data-placement="left" title="Click For Next News">Notice</div>
							<div class="col-12">
								<ul class="announcements container-fluid" data-toggle="modal" data-target="#newsmodal">

											<?php
											foreach (array_reverse($news) as $new) {
												echo '<li onclick="newschange(this)" data-toggle="tooltip" data-placement="left" title="Click to view full news">
												<span class="important">'.$new[3].'</span>['.dateFormat($new[1]).'] '.$new[2].' <a target="_blank" href="//'.$new[5].'">'.$new[4].'</a></li>';
											}
											?>
								</ul>
							</div>
						</div>
					</div>
				</div>





				<!-- Modal For News -->
				<div class="modal fade" id="newsmodal" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">News</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<div id="newspaste">
									<!--This Is div where News is inserted via js-->
								</div>
							</div>
							<!-- <div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div> -->
						</div>
					</div>
				</div>
				<!-- Modal for News End -->






				<!-- News End -->

				<!-- Events -->
				<!-- Heading Start -->
				<div class="intro order-lg-1 col-12">
					<h2 class="text-center">
						<spans class="headev">Events
							<spans class="d-none d-lg-inline"> And News</spans>
						</spans>
					</h2>
					<!-- <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat,pellentesque utlaoreet vitae.</p> -->
				</div>
				<!-- Heading End -->
				<div class="col-lg-9 order-lg-2">
					<div class="adddivsforswiper row">
<?php
$events = array(array());
$events=getEvents();

for ($arr=0; $arr < 4; $arr++) {
	for ($arr1=0; $arr1 < 10; $arr1++) {
		if(!isset($events[$arr][$arr1])){
		$events[$arr][$arr1] = '&nbsp';
	}
	}
}

for ($i=0; $i < 4; $i++) {
		$display='';
		if ($events[$i][1]=='&nbsp') {
			$display='d-none';
		}
		echo '<div class="col-sm-6 swiper-slide '.$display.'">
							<!-- This div is The Main Block Slide -->
							<div class="row item">
								<div class="col-sm-6 p-0">
									<p class="date">'.dateFormat($events[$i][1]).'</p>
									<img src="img/images/fixEvent.png" class="eventImage" style="background:url('.$events[$i][3].');">
									<!--Zero Margin And Padding(p-0)-->
								</div>
								<div class="col">
									<a>
										<h3 class="name">'.$events[$i][2].'</h3>
									</a>
									<p class="description">'.$events[$i][4].'</p>
									<button class="btn btn-outline-primary btn-sm readmore" data-toggle="popover" title="'.$events[$i][2].'"data-placement="left" data-content="'.$events[$i][4].'">Read More</button>
								</div>
							</div>
						</div>';
}
?>


					</div>
				</div>
				<!-- Events end -->
			</div>
		</div>
	</div>

	<!-- Events and News End -->



	<!-- Departments Start -->
<div class="container-fluid deptimg">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="departments col-12 bottopmargdepart">
					<div class="intro">
						<h2 class="text-center">
							<spans class="headev">Departments</spans>
						</h2>
						<p class="text-center"></p>
					</div>
					<div class="row adddivsforswiper" id="randomColor">
						<a href="dept.php?dept=computer" class="col-sm-6 col-md-4 col-lg-3 item swiper-slide" style="background:url(img/dept/comp.jpg)">
							<div class="colhover">
								<h2 class="text-center a">COMPUTER</h1>
							</div>
						</a>
						<a  href="dept.php?dept=mechanical" class="col-sm-6 col-md-4 col-lg-3 item swiper-slide" style="background:url(img/dept/mech.jpg)">
							<div class="colhover">
								<h2 class="text-center">MECHANICAL</h1>
							</div>
						</a>

						<a  href="dept.php?dept=electrical" class="col-sm-6 col-md-4 col-lg-3 item swiper-slide" style="background:url(img/dept/elect.jpg)">
							<div class="colhover">
								<h2 class="text-center">ELECTRICAL</h1>
							</div>
						</a>
						<a  href="dept.php?dept=electronics" class="col-sm-6 col-md-4 col-lg-3 item swiper-slide" style="background:url(img/dept/electro.jpg)">
							<div class="colhover">
								<h2 class="text-center">ELECTRONICS</h1>
							</div>
						</a>
						<a href="dept.php?dept=applied" class="col-sm-6 col-md-4 col-lg-3 item swiper-slide" style="background:url(img/dept/appl.jpg)">
							<div class="colhover">
								<h2 class="text-center">APPLIED</h1>
							</div>
						</a>
						<a href="dept.php?dept=civil" class="col-sm-6 col-md-4 col-lg-3 item swiper-slide" style="background:url(img/dept/civil.jpg)">
							<div class="colhover">
								<h2 class="text-center">CIVIL</h1>
							</div>
						</a>
						<a href="dept.php?dept=automobile" class="col-sm-6 col-md-4 col-lg-3 item swiper-slide" style="background:url(img/dept/auto.jpg)">
							<div class="colhover">
								<h2 class="text-center">AUTOMOBILE</h1>
							</div>
						</a>
						<a href="dept.php?dept=ws" class="col-sm-6 col-md-4 col-lg-3 item swiper-slide" style="background:url(img/dept/workshop.jpg">
							<div class="colhover">
								<h2 class="text-center">WORKSHOP</h1>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Departments End -->






<!-- Testimonials Start -->
<div class="container-fluid bottopmargtest" id="testimonialDiv">
	<div class="testimonials">
		<!-- Swiper -->
		<div class="intro">
			<h2 class="text-center">
				<spans class="headev">Testimonials</spans>
			</h2>
			<p class="text-center">&nbsp</p>
		</div>
		<div class="swiper-container-testimonials testimonials-container">
			<div class="swiper-wrapper">
			<?php
			$testimonials = array(array());
			$testimonials=getTestimonials();

			for ($arr=0; $arr < 1; $arr++) {
				for ($arr1=0; $arr1 < 10; $arr1++) {
					if(!isset($testimonials[$arr][$arr1])){
					$testimonials[$arr][$arr1] = '&nbsp';
				}
				}
			}

			foreach ($testimonials as $testimonial) {
					echo '<div class="swiper-slide testimonials-slide">
									<div class="text-center test-colors">
										<div class="icon">
											<i class="fas fa-quote-left col-12"></i>
										</div>
										<div class="col-12 description">'.$testimonial[4].'</div>
										<div class="passport" style="background:url('.$testimonial[3].');"></div>
										<div class="col text-center info">
											<h5 class="name">'.$testimonial[1].'</h5>
												<p class="designation">'.$testimonial[2].'</p>
										</div>
									</div>
								</div>';
			}
			?>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination-testimonials" style="text-align: center;"></div>
			<!-- Add Arrows -->
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
			<!-- Add Arrows End -->
		</div>
	</div>
</div>
<!-- Testimonials End -->

<?php 
//This Small code below is for removing the whole division of testimonials in case no data is available in database
if ($testimonials[0][0]=="&nbsp") {
	echo "<script>document.getElementById('testimonialDiv').parentNode.removeChild(document.getElementById('testimonialDiv'))</script>";
}
?>






	<!-- Achievements and Aluminies Start -->
<div class="container mt-5 mb-5" id="achAluDiv">
	<div class="row">
	<!-- Achievements End -->
	<div class="col-md-8 achievements">
		<div class="intro">
			<h2 class="text-center">
				<spans class="headev">Achievements</spans>
			</h2>
			<p class="text-center"></p>
		</div>
		<div class="adddivsforswiper row">
	<?php
	$achievements = array(array());
	$achievements=getAchievements();

	for ($arr=0; $arr < 4; $arr++) {
		for ($arr1=0; $arr1 < 10; $arr1++) {
			if(!isset($achievements[$arr][$arr1])){
			$achievements[$arr][$arr1] = '&nbsp';
		}
		}
	}

	for ($i=0; $i < 4; $i++) {
		$display='';
		if ($achievements[$i][1]=='&nbsp') {
			$display='d-none';
		}
	echo '<div class="col-sm-6 swiper-slide '.$display.'">
				<!-- This div is The Main Block Slide -->
				<div class="row item">
					<div class="col-sm-6 p-0">
						<p class="date">'.dateFormat($achievements[$i][1]).'</p>
						<img src="img/images/fixEvent.png" class="eventImage" style="background:url('.$achievements[$i][3].');">
						<!--Zero Margin And Padding(p-0)-->
					</div>
					<div class="col">
						<a>
							<h3 class="name">'.$achievements[$i][2].'</h3>
						</a>
						<p class="description">'.$achievements[$i][4].'</p>
						<button class="btn btn-outline-primary btn-sm readmore" data-toggle="popover" title="'.$achievements[$i][2].'"data-placement="left" data-content="'.$achievements[$i][4].'">Read More</button>
					</div>
				</div>
			</div>';
	}
	?>
		</div>
	</div>
	<!-- Achievements End -->

	<!-- Aluminies Start -->
	<div class="col-md-4 aluminies">
		<!-- Swiper -->
		<div class="intro">
			<h2 class="text-center">
				<spans class="headev">Aluminies</spans>
			</h2>
			<p class="text-center"></p>
		</div>
		<div class="swiper-container-aluminies aluminies-container">
			<div class="swiper-wrapper">
			<?php
			$aluminies = array(array());
			$aluminies=getAluminies();

			for ($arr=0; $arr < 1; $arr++) {
				for ($arr1=0; $arr1 < 10; $arr1++) {
					if(!isset($aluminies[$arr][$arr1])){
					$aluminies[$arr][$arr1] = '&nbsp';
				}
				}
			}

			foreach ($aluminies as $aluminie) {
					echo '<div class="swiper-slide aluminies-slide">
									<div class="text-center test-colors">
										<div class="col-12 description">'.$aluminie[4].'</div>
										<div class="passport" style="background:url('.$aluminie[3].');"></div>
										<div class="col text-center info">
											<h5 class="name">'.$aluminie[1].'</h5>
												<p class="designation">'.$aluminie[2].'</p>
										</div>
									</div>
								</div>';
			}
			?>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination-aluminies" style="text-align: center;"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<!-- Add Arrows End -->
		</div>
	</div>
	<!-- Aluminies End -->
</div>
</div>

<?php 
//This Small code below is for removing the whole division of achievement and aluminies in case no data is available in database
if ($achievements[0][0]=="&nbsp"||$aluminies[0][0]=="&nbsp") {
	echo "<script>document.getElementById('achAluDiv').parentNode.removeChild(document.getElementById('achAluDiv'))</script>";
}
?>

<!-- Achievements and Aluminies End -->







	<!-- Feedback Form -->
	<div class="container-fluid feed-feedback-img">
		<div class="overlay">
		<div class="container bottopmargform">
			<div class="row">
				<form method="post" class="feed-feedback col-12">
					<h1 class="text-center">
						<spans class="headev">Feedback</spans>
					</h1>
					<p class="text-center"></p>
					<div class="row">
						<div class="form-group col-md-6">
							<!-- <label for="name">Your Name *</label> -->
							<div class="d-flex feed-input">
								<i class="fa fa-user align-self-center"></i>
								<input class="form-control" type="text" name="name" placeholder="Your Name" id="feedbackName" data-toggle="tooltip" data-placement="top" title="Please Enter Your Name" onfocus="disableTooltipFeedback()">
							</div>
						</div>
						<div class="form-group col-md-6">
							<!-- <label for="name">Your Name *</label> -->
							<div class="d-flex feed-input">
								<i class="fa fa-envelope align-self-center"></i>
								<input class="form-control" type="text" name="email" placeholder="Your Email" id="feedbackEmail" data-toggle="tooltip" data-placement="top" title="Please Enter a Valid Email" onfocus="disableTooltipFeedback()">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<!-- <label for="name">Your Name *</label> -->
							<div class="d-flex feed-input">
								<i class="fa fa-phone align-self-center"></i>
								<input class="form-control" type="text" name="phonenumber" placeholder="Your Phone No." id="feedbackPhno" data-toggle="tooltip" data-placement="top" title="Please Enter a Valid Phone Number" onfocus="disableTooltipFeedback()">
							</div>
						</div>
						<div class="form-group col-md-6">
							<!-- <label for="name">Your Name *</label> -->
							<div class="d-flex feed-input">
								<i class="fa fa-info-circle align-self-center"></i>
								<input class="form-control" type="text" name="subject" placeholder="Subject" id="feedbackSubject" data-toggle="tooltip" data-placement="top" title="Please Enter Subject of your concern" onfocus="disableTooltipFeedback()">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<!-- <label for="name">Your Name *</label> -->
							<div class="d-flex feed-input">
								<i class="fa fa-pen align-self-center"></i>
								<textarea class="form-control" rows="6" name="feedback" placeholder="Your Feedback" id="feedbackText" data-toggle="tooltip" data-placement="top" title="Please Enter your Feedback" onfocus="disableTooltipFeedback()"></textarea>
							</div>
						</div>
						<div class="form-group col-md-12">
							<button class="btn btn-dark form-sub" style="width:100%;" type="submit" name="feedsub" onclick="return validFeedback();">Send us your message!</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>

	<!-- Feedback Form End -->
<?php
if (isset($_POST['feedsub'])) {
	addFeedback(addslashes($_POST['name']),addslashes($_POST['email']),addslashes($_POST['phonenumber']),addslashes($_POST['subject']),addslashes($_POST['feedback']));
}
?>







<?php
include 'footer.php';
?>
