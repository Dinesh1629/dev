<!-- This website is Designed and Developed by Smazee -->
<!doctype html>
<html>

<head>
	<meta charset=utf-8>
	<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
	<meta name=viewport content="width=device-width,initial-scale=1">
	<title>Ahobilam</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php $this->load->view("common/head") ?>
	<?php $this->load->view("common/foot") ?>
</head>
<body>
	<?php $this->load->view("common/header") ?>
	<main class="home">


		<section class="landing position-relative" id="home-landing">
			<div id="carouselId" class="carousel slide position-absolute w-100 d-none d-lg-block" style="max-height:88vh" data-ride="carousel">
				<div class="carousel-inner" style="max-height:88vh" role="listbox">
					<div class="carousel-item active">
						<video class=" w-100" src="<?php echo base_url(); ?>assets/videos/VID-20200128-WA0001_Trim1.mp4" loop autoplay muted></video>
					</div>
					<div class="carousel-item">
						<video class=" w-100" src="<?php echo base_url(); ?>assets/videos/VID-20200128-WA0001_Trim5.mp4" loop autoplay muted></video>
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url(); ?>assets/img/a/AHOBILAM 01 (11).JPG" alt="" style="width: inherit;">
					</div>
					<div class="carousel-item">
						<video class=" w-100" src="<?php echo base_url(); ?>assets/videos/VID-20200128-WA0001_Trim2.mp4" loop autoplay muted></video>
					</div>
					<div class="carousel-item">
						<video class=" w-100" src="<?php echo base_url(); ?>assets/videos/VID-20200128-WA0001_Trim13.mp4" loop autoplay muted></video>
					</div>
				</div>				
			</div>
			<div class="bg-grad"></div>			
			<div class="head-title" style="z-index: 21">
				<h1><span>Ahobilam</span><br> The abode of <br>Nava Narasimhas</h1>
				<p>A treat for the eyes, A retreat for the soul.</p>
			</div>			
		</section>	

		
		<section class="container-fluid">
			<br>
			<br>
			<br>
			<p class="sec-font">About</p>
			<h2 class="heading-sec">Ahobilam Kshetram & Temple</h2>
			<div class="row bg-white my-5">
				<div class="col-md-6">
					<img src="<?php echo base_url(); ?>assets/img/1-2-bg1.png" alt="" class="img-fluid img-tag-bottom">
					<div class="abt-text d-flex">
						<h4>Nava Narashima</h4>
						<a href="navanarashima" class="my-auto ml-auto see-more">SEE MORE &nbsp;
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#DB4242" d="M10 17l5-5-5-5v10z" />
								<path fill="none" d="M0 24V0h24v24H0z" /></svg>
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-5">
							<img src="<?php echo base_url(); ?>assets/img/1-2-bg2.png" class="img-fluid" alt="">
						</div>
						<div class="col-7  my-auto">
							<div class="abt-text">
								<h4>History</h4>
								<a href="history" class="my-auto ml-auto see-more">SEE MORE &nbsp;
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
										<path fill="#DB4242" d="M10 17l5-5-5-5v10z" />
										<path fill="none" d="M0 24V0h24v24H0z" /></svg>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-7  my-auto">
							<div class="abt-text">
								<h4>Daily Programs</h4>
								<a href="daily-programs" class="my-auto ml-auto see-more">SEE MORE &nbsp;
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
										<path fill="#DB4242" d="M10 17l5-5-5-5v10z" />
										<path fill="none" d="M0 24V0h24v24H0z" /></svg>
								</a>
							</div>
						</div>
						<div class="col-5">
							<img src="<?php echo base_url(); ?>assets/img/8.jpg" class="img-fluid" alt="">
						</div>
					</div>
				</div>
			</div>
			<br>
		</section>
		<section class="">
			<p class="sec-font">Events</p>
			<h2 class="heading-sec py-5">Festivals, Programs & More...</h2>
			<div class="row no-gutters">
				<a class="col-md-6 sec-3-links sec-3-1" href="<?php echo base_url('festival'); ?>">
					<h4 class="sec-3-text">Uthsavams</h4>
				</a>
				<div class="col-md-6 h-100">
					<a class="sec-3-links sec-3-2 row no-gutters" href="<?php echo base_url('festival'); ?>">
						<h4 class="sec-3-text">Swati Festival</h4>
					</a>
					<a class="sec-3-links sec-3-3 row no-gutters" href="<?php echo base_url('festival'); ?>">
						<h4 class="sec-3-text">Brahmothsavam</h4>
					</a>
				</div>
			</div>
		</section>
		<section class="container-fluid">
			<h2 class="heading-sec py-5">Projects</h2>
			<div class="row">
				<div class="col-md-6 col-xs-12 d-flex align-items-stretch">
					<div class="card card--4">
						<img src="" alt="" class="img-fluid">
						<h3 class="sec-font">Renovation</h3>
						<img src="<?php echo base_url(); ?>assets/img/a/reno.png" alt="" class="img-fluid">
						<p>

						</p>
					</div>
				</div>
				<div class="col-md-6 col-xs-12 d-flex align-items-stretch">
					<div class="card card--4">
						<img src="" alt="" class="img-fluid">
						<h3 class="sec-font">Clean Ahobilam</h3>
						<img src="<?php echo base_url(); ?>assets/img/a/clean.png" alt="" class="img-fluid">
						<p>

						</p>
					</div>
				</div>
				<div class="col-md-6 col-xs-12 d-flex align-items-stretch">
					<div class="card card--4">
						<img src="" alt="" class="img-fluid">
						<h3 class="sec-font">Azhwar Sanathi</h3>
						<img src="<?php echo base_url(); ?>assets/img/a/alwar.png" alt="" class="img-fluid">
						<p>

						</p>
					</div>
				</div>
				<div class="col-md-6 col-xs-12 d-flex align-items-stretch">
					<div class="card card--4">
						<img src="" alt="" class="img-fluid">
						<h3 class="sec-font">Water Renovation</h3>
						<img src="<?php echo base_url(); ?>assets/img/a/water.png" alt="" class="img-fluid">
						<p>

						</p>
					</div>
				</div>
			</div>
			<div class="mx-auto text-center">
				<a href="<?php echo base_url('projects'); ?>" class="btn btn-primary text-white m-5">View all projects</a>
			</div>
			<hr>
		</section>
		<?php $this->load->view('others/donate'); ?>
		<!-- <section class="p-3 visit">
	<br>
	<br>
	<p class="sec-font">Visiting</p>
	<h2 class="heading-sec text-white py-3">Reaching & Stay</h2>
	<p class="container">Ahobilam is nestled in the middle of Nallamalai Hills range of Eastern Ghat with Tirumala Hills on the southern and Srisailam on the northern end. Located in Kurnool district of Andhra Pradesh</p>

	<div class="text-center container">
		<a href="<?php echo base_url('visit'); ?>"><button class="btn btn-white">Reach us via Map</button></a>
		<a href="tel:"><button class="btn btn-white">Contact for Stay</button></a>
	</div>
	<br>
	<br>
	</section> -->
		<section class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="<?php echo base_url();?>management">
					<img src="<?php echo base_url(); ?>assets/img/man-2.jpg" style="max-height: 500px;" alt="" class="img-fluid">
					</a>
				</div>
				<div class="col-md-6">
					
					<video class="w-100" src="<?php echo base_url(); ?>assets/videos/VID-20200128-WA0001.mp4" controls></video>
				</div>
				<div class="col-md-3">
					<a href="<?php echo base_url();?>festival#upcoming">
						<img src="<?php echo base_url(); ?>assets/img/1-minss.jpg" style="max-height: 500px;" alt="" class="img-fluid">					
					</a>
				</div>
			</div>
		</section>
	</main>
	<?php $this->load->view("common/footer") ?>

</body>

</html>
<!-- Designed and Developed by Smazee -->