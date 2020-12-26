<!doctype html>
<html>

<head>
	<meta charset=utf-8>
	<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
	<meta name=viewport content="width=device-width,initial-scale=1">
	<title>Visit Ahobilam</title>
	<link rel="shortcut icon" href="<?php echo base_url() ; ?>assets/img/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="<?php echo base_url() ; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ; ?>assets/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php $this->load->view("common/head")?>
	<?php $this->load->view("common/foot")?>

</head>


<body>
<?php $this->load->view("common/header")?>

<main class="home">
	<section class="landing">
		<div class="head-title">
			<h1><span>Visiting Ahobilam <br>Tourism</span></p>
		</div>
	</section>
	<?php $this->load->view("others/visitby")?>
	<section class="container-fluid pay-1">
		<br>
		<br>
		<p class="sec-font">Visiting</p>
		<h2 class="heading-sec py-3">Location and Connectivity</h2>
		<div class="row">
			<div class="col-md-7">
			</div>
			<div class="col-md-4 mt-5 pt-md-5">
			<p class="text-grey f-14 py-3">
                <br>
                <br>
                <br>
                Ahobilam is nestled in the middle of Nallamalai Hills range of Eastern Ghat with Tirumala Hills on the southern and Srisailam on the northern end. Located in Kurnool district of Andhra Pradesh and . Nandyal on the Guntur-Dharmavaram line is the nearest rail head while Kadapa, 112 km away, is a major railhead connecting Mumbai, Chennai , Hyderabad and other major towns.
            </p>
			</div>
		</div>
	</section>
    <section class="container px-5">
		<!-- <img src="<?php echo base_url();?>assets/img/visit.jpg" class="img-fluid mx-auto w-md-75" alt=""> -->
	</section>
    <section class="container-fluid px-5">
		<p class="sec-font">Tourism</p>
		<h2 class="heading-sec py-5">Pilgrim Centres Nearby</h2>
		<div class="row my-5 m-md-5">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo base_url();?>assets/img/3-4-mah.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="card-title head-h3">Mahanandi <span class="float-right secondary-text pt-3">(65 km)</span> </h3>
                        <p class="f-14">Forest green cover is at its best during August to January. For pilgrims any time of the year is good. Brahmotsavam is held during February-March and Pavithrotsavam is held during Sept. – October every year. . Other major festivals celebrated in the temples are given separately under ‘Uthsavams’.</p>
                        <div class="float-right">
                            <a href="#" class="btn btn-outline">Locate me</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo base_url();?>assets/img/3-4-mah.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="card-title head-h3">Mahanandi <span class="float-right secondary-text pt-3">(65 km)</span> </h3>
                        <p class="f-14">Forest green cover is at its best during August to January. For pilgrims any time of the year is good. Brahmotsavam is held during February-March and Pavithrotsavam is held during Sept. – October every year. . Other major festivals celebrated in the temples are given separately under ‘Uthsavams’.</p>
                        <div class="float-right">
                            <a href="#" class="btn btn-outline">Locate me</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo base_url();?>assets/img/3-4-mah.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="card-title head-h3">Mahanandi <span class="float-right secondary-text pt-3">(65 km)</span> </h3>
                        <p class="f-14">Forest green cover is at its best during August to January. For pilgrims any time of the year is good. Brahmotsavam is held during February-March and Pavithrotsavam is held during Sept. – October every year. . Other major festivals celebrated in the temples are given separately under ‘Uthsavams’.</p>
                        <div class="float-right">
                            <a href="#" class="btn btn-outline">Locate me</a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section>
</main>
<?php $this->load->view("common/footer")?>

</body>

</html>