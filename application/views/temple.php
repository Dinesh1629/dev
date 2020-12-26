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

	<?php $this->load->view("common/head")?>
	<?php $this->load->view("common/foot")?>

</head>


<body>
<?php $this->load->view("common/header")?>
<main class="home">
	<section class="landing temple-bg  position-relative">

			<div id="carouselId" class="carousel slide position-absolute w-100 d-none d-lg-block" style="max-height:88vh" data-ride="carousel">
				<div class="carousel-inner" style="max-height:88vh" role="listbox"> 
					<div class="carousel-item active">
						<video class=" w-100" src="<?php echo base_url(); ?>assets/videos/VID-20200128-WA0001_Trim8.mp4" loop autoplay muted></video>
					</div>
					<div class="carousel-item">
						<video class=" w-100" src="<?php echo base_url(); ?>assets/videos/VID-20200128-WA0001_Trim10.mp4" loop autoplay muted></video>
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url(); ?>assets/img/AAAA.jpg" alt="" style="width: inherit;">
					</div>
					<div class="carousel-item">
						<video class=" w-100" src="<?php echo base_url(); ?>assets/videos/VID-20200128-WA0001_Trim12.mp4" loop autoplay muted></video>
					</div>
				</div>
				<!-- <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a> -->
			</div>
			<div class="bg-grad d-none d-lg-block"></div>


		<div class="head-title" style="z-index: 22">
			<h1><span>Ahobilam Kshetram & <br> Temple</span></p>
		</div>


	</section>
	<section class="container-fluid">
        <div class="row no-gutters scroll-fixedrow">
            <div class="col-md-6 temple-img temple-img-1">
			
			</div>
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">About</p>
					<h2 class="head-h3">History</h2>
					<p class="f-14 px-5 m-md-5">After Hiranyasamhara by the Lord, all the devas praised the strength and courage (Balam & Showyam) of the Lord, as “Ahoveeryam, Ahoshowryam Ahobahupa rakramam Narasimham, Paramdaivam Ahobilam Ahobalam”</p>
					<a class="see-more f-16" href="<?php echo base_url('ahobilam-kshetram/history');?>">SEE MORE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
        </div>
        <div class="row no-gutters scroll-fixedrow">
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">About</p>
					<h2 class="head-h3">Nava Narashima</h2>
					<p class="f-14 px-5 m-md-5">This shrine is inside a cave with a front mantapam. The Lord is Ugra Narasimha who is in a seated position, tearing the Asura (Hiranyakasipu) who is positioned in His lap.</p>
					<a class="see-more f-16" href="<?php echo base_url('ahobilam-kshetram/navanarashima');?>">SEE MORE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
            <div class="col-md-6 temple-img temple-img-2">
			
			</div>
        </div>
        <div class="row no-gutters scroll-fixedrow">
            <div class="col-md-6 temple-img temple-img-3">
			
			</div>
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">About</p>
					<h2 class="head-h3">Management | Ahobilam Mutt</h2>
					<p class="f-14 px-5 m-md-5">Ahobila Matam is a Sri Vaishnava religious institution establsihed 600 years ago in a place called Ahobilam by Srimad Athivan Satakopan. He was originally known as Kidambi Srinivasachar. He was a student under Gadikasadam Ammal in Kanchipuram.</p>
					<a class="see-more f-16" href="<?php echo base_url('management');?>">SEE MORE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
        </div>
        <div class="row no-gutters scroll-fixedrow">
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">About</p>
					<h2 class="head-h3">Daily Programs</h2>
					<p class="f-14 px-5 m-md-5">You can make your offerings for Arjitha sevas , Renovation & Samprokshanam, Annadanam or participate in various activities of the temple</p>
					<a class="see-more f-16" href="<?php echo base_url('ahobilam-kshetram/daily-programs');?>">SEE MORE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
            <div class="col-md-6 temple-img temple-img-4">
			
			</div>
        </div>
		<div class="row no-gutters scroll-fixedrow">
            <div class="col-md-6 temple-img temple-img-5">
			
			</div>
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">About</p>
					<h2 class="head-h3">Festivals</h2>
					<p class="f-14 px-5 m-md-5">Swati is the avatara star (nakshatra) of Sri Lakshmi Narasimhan. This day every month is celebrated with great devotion and is witnessed by a large number of devotees.</p>
					<a class="see-more f-16" href="<?php echo base_url('festival');?>">SEE MORE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
        </div>
	</section>
	<?php $this->load->view('others/donate'); ?>

</main>
<?php $this->load->view("common/footer")?>

</body>

</html>