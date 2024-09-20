<header class="header stricky">
	<div class="containerFull">
		<div class="inlineHeader">
			<div class="leftLogo">
				<a href="index.php">
					<picture>
						<source srcset="images/logo.webp" type="image/webp" />
						<img src="images/logo.png" />
					</picture>
				</a>
			</div>
			<div class="rightMenu">
				<div class="topHeader d-none d-md-block">
					<ul>
						<li><a href="#"><i class="fa fa-envelope"></i> info@beyondthebox.com</a></li>
						<li><a href="#"><i class="fa fa-phone"></i> +91-12345 67890</a></li>
						<li><a class="px-2" href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a class="px-2" href="#"><i class="fab fa-x-twitter"></i></a></li>
						<li><a class="px-2" href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a class="px-2" href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
				<div class="mainMenu">
					<ul class="justify-content-end  d-none d-md-flex">
						<li class="<?php if ($page == 'home') {
										echo 'active';
									} ?>"><a href="index.php">Home</a></li>
						<li class="<?php if ($page == 'about') {
										echo 'active';
									} ?>"><a href="about.php">About Us</a></li>
						<li class="<?php if ($page == 'services') {
										echo 'active';
									} ?>"><a href="services.php">Services</a></li>
						<li class="<?php if ($page == 'specialities') {
										echo 'active';
									} ?>"><a href="specialities.php">Specialities</a></li>
						<li class="<?php if ($page == '') {
										echo 'active';
									} ?>"><a href="#">Resources</a>
						</li>
						<li class="<?php if ($page == 'contact') {
										echo 'active';
									} ?>"><a href="contact.php">Contact Us</a></li>
					</ul>
					<a href="appointment.php" class="headerBtn ms-lg-4 d-none d-md-flex">Book an Appointment</a>



					<button class="btnMenu d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"><i class="fa fa-bars"></i></button>
				</div>




			</div>
			<div>

			</div>
		</div>
	</div>













	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header">
			<div class="sidelogo">
				<a href="index.php">
					<picture>
						<source srcset="images/logo.webp" type="image/webp" />
						<img src="images/logo.png" />
					</picture>
				</a>
			</div>
			<h5 id="offcanvasRightLabel">&nbsp;</h5>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<div class="innerMenu">
				<ul>
					<li class="<?php if ($page == 'home') {
									echo 'active';
								} ?>"><a href="index.php">Home</a></li>
					<li class="<?php if ($page == 'about') {
									echo 'active';
								} ?>"><a href="about.php">About Us</a></li>
					<li class="<?php if ($page == 'services') {
									echo 'active';
								} ?>"><a href="services.php">Services</a></li>
					<li class="<?php if ($page == 'specialities') {
									echo 'active';
								} ?>"><a href="specialities.php">Specialities</a></li>
					<li class="<?php if ($page == '') {
									echo 'active';
								} ?>"><a href="#">Resources</a>
					</li>
					<li class="<?php if ($page == 'contact') {
									echo 'active';
								} ?>"><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<div class="followUs">
			<h3 class="text fontWeight500">Follow Us</h3>
			<ul class="socialLink">
				<li><a class="px-2" href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a class="px-2" href="#"><i class="fab fa-x-twitter"></i></a></li>
				<li><a class="px-2" href="#"><i class="fab fa-linkedin-in"></i></a></li>
				<li><a class="px-2" href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
</header>