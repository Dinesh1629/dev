<!doctype html>
<html>

<head>
	<meta charset=utf-8>
	<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
	<meta name=viewport content="width=device-width,initial-scale=1">
	<title>Ahobilam</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php $this->load->view("common/head") ?>
	<?php $this->load->view("common/foot") ?>

</head>


<body>
	<?php $this->load->view("common/header") ?>
	<main class="home">
    <section class="container">
        <h1 class="text-center p-5 heading">Gallery</h1>
    <?php ?>
    <p class="py-2">Day 1 - Sarabha Vahanam</p>
    <div id="carouselId" class="carousel slide mx-auto" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php foreach($day1 as $key=>$d1){?>
            <?php if(stripos($d1,'.mp4')==0){?>
            <div class="carousel-item <?php echo ($key==2)?'active':'';?>">
                <img src="<?php echo base_url().'assets/img/gallery/day1/'.$d1;?>" class="img-fluid mx-auto" style="max-height: 400px">
            </div>
            <?php }else{?>
            <div class="carousel-item <?php echo ($key==2)?'active':'';?>">
                <video src="<?php echo base_url().'assets/img/gallery/day1/'.$d1;?>" autoplay muted controls="true"></video>
            </div>
            <?php }?>
            <?php }?>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <p class="py-2">Day 2</p>
    <div id="carouselId2" class="carousel slide mx-auto" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php foreach($day2 as $key=>$d2){?>
            <?php if(stripos($d2,'.mp4')==0){?>
            <div class="carousel-item <?php echo ($key==2)?'active':'';?>">
                <img src="<?php echo base_url().'assets/img/gallery/day2/'.$d2;?>" class="img-fluid mx-auto" style="max-height: 400px">
            </div>
            <?php }else{?>
            <div class="carousel-item <?php echo ($key==2)?'active':'';?>">
                <video src="<?php echo base_url().'assets/img/gallery/day2/'.$d2;?>" autoplay muted controls="true"></video>
            </div>
            <?php }?>
            <?php }?>
        </div>
        <a class="carousel-control-prev" href="#carouselId2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <p class="py-2">Day 3</p>
    <div id="carouselId3" class="carousel slide mx-auto" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php foreach($day3 as $key=>$d3){?>
            <?php if(stripos($d3,'.mp4')==0){?>
            <div class="carousel-item <?php echo ($key==2)?'active':'';?>">
                <img src="<?php echo base_url().'assets/img/gallery/day3/'.$d3;?>" class="img-fluid mx-auto" style="max-height: 400px">
            </div>
            <?php }else{?>
            <div class="carousel-item <?php echo ($key==2)?'active':'';?>">
                <video src="<?php echo base_url().'assets/img/gallery/day3/'.$d3;?>" autoplay muted controls="true"></video>
            </div>
            <?php }?>
            <?php }?>
        </div>
        <a class="carousel-control-prev" href="#carouselId3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </section>
			<br>
			<br>
			<br>
        
	</main>
	<?php $this->load->view("common/footer") ?>

</body>

</html>
<!-- Designed and Developed by Smazee -->