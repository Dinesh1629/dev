<!doctype html>
<html>

<head>
	<meta charset=utf-8>
	<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
	<meta name=viewport content="width=device-width,initial-scale=1">
	<title>Ahobilam</title>
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
<main class="home">
	<section class="landing temple-bg" style="background-image:url('assets/img/12.jpg');background-position: bottom;">
		<div class="head-title">
			<h1><span>Projects</span></h1>
			<a href="#completed">Completed Projects</a><br>
			<a href="#ongoing">Ongoing Projects</a><br>
			<!-- <a href="#upcoming">Upcoming Projects</a> -->
		</div>


	</section>
	<section class="container-fluid">
		<h2 class="heading-sec p-2" id="ongoing">Ongoing Projects</h2>

		<h3 class="text-center p-2">Renovation of Nammazhwar Sannidhi - Ahobilam</h3>
		<p>The Nammazhwar Sannidhi was found while cleaning at a place called <b>"Bhairagi Kund"</b> 
		in Upper Ahobilam. The process of renovation & restoration is in progress.</p>
		<div class="row">
			<div class="col-md-3">
				<img src="<?php echo base_url() ; ?>assets/img/aazhwar.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url() ; ?>assets/img/c-2.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url() ; ?>assets/img/c-3.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url() ; ?>assets/img/c-4.jpg" alt="" class="img-fluid">
			</div>
		</div>
		<div class="text-center p-5">
			<p>We request your support and contribution for making this initiative successful.</p>
				<a href="donations">
			<button class="btn btn-secondary btn-lg">DONATE NOW</button>			
			</a>
		</div>
<br><br>
		<!--  -->
		<div class="text-center">
			<img src="<?php echo base_url() ; ?>assets/img/c-a.jpg" width="200px" alt="" class="mx-auto text-center">
		</div>
		<h3 class="text-center p-2">Clean Ahobilam</h3>
		<p>Clean Ahobilam is an initiative by Sri Ahonilam Mutt to keep the temple premises and surroundings Plastiv & Garbage free.</p>
<p>The Clean Ahobilam was inaugurated in May 2019. So far the collection is around 0.5 MT of plastic waste.</p>
<div class="row">
			<div class="col-md-3">
				<img src="<?php echo base_url() ; ?>assets/img/cc-3.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url() ; ?>assets/img/cc-2.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-6">
				<img src="<?php echo base_url() ; ?>assets/img/cc-1.jpg" alt="" class="img-fluid pb-2">
				<img src="<?php echo base_url() ; ?>assets/img/cc-4.jpg" alt="" class="img-fluid">
			</div>
		</div>
		<div class="text-center p-5">
			<p>All severthis can be part of this initiative by volunteering & contributing garbage cans/bags/gloves/mask/soap for the helpers.</p>
				<a href="<?php echo base_url('donations');?>">
			<button class="btn btn-secondary btn-lg">DONATE NOW</button>			
			</a>
		</div>

		<!--  -->
		<!-- <h2 class="heading-sec p-2" id="upcoming">Upcoming Projects</h2> -->
		<h2 class="heading-sec p-2" id="completed">Completed Projects</h2>

        <div class="row no-gutters scroll-fixedrow">
            <div class="col-md-6 temple-img temple-img-1" style="background-image: url(assets/img/nn-8.png);">
			
			</div>
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">RENOVATION</p>
					<h2 class="head-h3">Sri Ramanujar Sannidhi </h2>
					<p class="f-14 px-5 m-md-5">
                    Main shrine consolidated and reconstructed,
                    We have re-constructed the walls with old dismantled veneer stones,
                    We have used only the Lime and Brick mortar over the sanctum as per ASI instruction,
                    The Mahamandapa is re-erected up to the roof level with the old ceiling slabs,
                    Earth works excavation around the shrine and mandapa up to original plinth level,
                    Proper drainage system is provided,
                    The Apron work is carried out as per the advice of Archaeologist to portray the architectural beauty of RamanujarSannadhi,

                    </p>
					<a class="see-more f-16" href="donations">DONATE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
        </div>
        <div class="row no-gutters scroll-fixedrow">
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">RENOVATION</p>
					<h2 class="head-h3">Sri Andal Sannidhi</h2>
					<p class="f-14 px-5 m-md-5">
                    Concerted ceiling and Kodungai constructed to replace the broken stone work removed, 
                    Completed with stone slabs and Kodungai as per archaeology guidance to preserve the heritage value inside the main temple

                    </p>
					<a class="see-more f-16" href="<?php echo base_url('donations');?>">DONATE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
            <div class="col-md-6 temple-img temple-img-2" style="background-image: url(assets/img/a/Picture2.jpg);">
			
			</div>
        </div>
        <div class="row no-gutters scroll-fixedrow">
            <div class="col-md-6 temple-img temple-img-1" style="background-image: url(assets/img/a/Picture3.jpg);">
			
			</div>
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">RENOVATION</p>
					<h2 class="head-h3">Sri Ramar Sannidhi</h2>
					<p class="f-14 px-5 m-md-5">
                    Salakaram Primer coat work completed,
                    Weathering coaurse,brick jelly , brick batting work finished,
                    Lime process work in progress.

                    </p>
					<a class="see-more f-16" href="<?php echo base_url('donations');?>">DONATE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
        </div>
        <div class="row no-gutters scroll-fixedrow">
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">RENOVATION</p>
					<h2 class="head-h3">Ahobilesan Sannidhi </h2>
					<p class="f-14 px-5 m-md-5">
                    Water tightening of the terrace over the rock bed abetting the KayalanaMandapa is completed,
                    Pressed tiles have been laid to provide better look and drain water,
                    This work is done so that water does not into mandapa of Sri Narasimha Shrine,
                    As per ASI instruction brick jelly and pure lime (without using sand) with proper gradient are used to drain out the water. For plastering Water proof material is also added.
                    The terrace brick vimana over the AhobilaNarasimha is consolidated by providing an “UPA” peedam below the super structure. Restoration of stucco figures in lime plaster is done,
                    To strengthen the vimana de-plastering and re-plastering with lime mortar is done. This will enable the inner vimana to survive for long years.


                    </p>
					<a class="see-more f-16" href="<?php echo base_url('donations');?>">DONATE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
            <div class="col-md-6 temple-img temple-img-2"  style="background-image: url(assets/img/a/Picture4.jpg);">
			
			</div>
        </div>
        <div class="row no-gutters scroll-fixedrow">
		<div class="col-md-6 temple-img temple-img-1"  style="background-image: url(assets/img/a/Picture8.jpg);">
			
			</div>
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">RENOVATION</p>
					<h2 class="head-h3">Sri JwalaNarasimha Swamy Temple</h2>
					<p class="f-14 px-5 m-md-5">You can make your offerings for Arjitha sevas , Renovation & Samprokshanam, Annadanam or participate in various activities of the temple</p>
					
				</div>
			</div>
            
        </div>
        <div class="row no-gutters scroll-fixedrow">
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">RENOVATION</p>
					<h2 class="head-h3">Jwala Nrisimhan Sannidhi</h2>
					<p class="f-14 px-5 m-md-5">
                    Sannidhi is completely renovated,
                    Stone cleaning and weathering course completed,
                    Covered by Stainless steel roof for safety

                    </p>
					<a class="see-more f-16" href="<?php echo base_url('donations');?>">DONATE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
            <div class="col-md-6 temple-img temple-img-2" style="background-image: url(assets/img/nn-9.png);">
			
			</div>
        </div>
        <div class="row no-gutters scroll-fixedrow">
		<div class="col-md-6 temple-img temple-img-1"  style="background-image: url(assets/img/a/Picture7.jpg);">
			
			</div>
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">RENOVATION</p>
					<h2 class="head-h3">Ankurarpana Mandapam</h2>
					<p class="f-14 px-5 m-md-5">You can make your offerings for Arjitha sevas , Renovation & Samprokshanam, Annadanam or participate in various activities of the temple</p>
					<a class="see-more f-16" href="<?php echo base_url('donations');?>">DONATE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
            
        </div>
        <div class="row no-gutters scroll-fixedrow">
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">RENOVATION</p>
					<h2 class="head-h3">Stone Cleaning & Weathering Course</h2>
					<p class="f-14 px-5 m-md-5">
                    Ramanujar sannidhi,Sri srinivasar sannidh,Perumal & Thayar sannidhi,Navarang mandapam, Andal Sannidhi,All Sasana Mantapam at 2nd Prakaram,Kalyana Mantapam,Jwala Narasimhan.

                    </p>
					<a class="see-more f-16" href="<?php echo base_url('donations');?>">DONATE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
            <div class="col-md-6 temple-img temple-img-2"  style="background-image: url(assets/img/a/Picture6.png);">
			
			</div>
        </div>
        <div class="row no-gutters scroll-fixedrow">
		<div class="col-md-6 temple-img temple-img-1"  style="background-image: url(assets/img/a/Picture5.jpg);">
			
			</div>
            <div class="col-md-6 temple-text align-self-center">
				<div class="text-center p-3">
					<p class="secondary-text">RENOVATION</p>
					<h2 class="head-h3">Kalakshepa Mandapam</h2>
					<p class="f-14 px-5 m-md-5">You can make your offerings for Arjitha sevas , Renovation & Samprokshanam, Annadanam or participate in various activities of the temple</p>
					<a class="see-more f-16" href="<?php echo base_url('donations');?>">DONATE &nbsp;
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#DB4242" d="M10 17l5-5-5-5v10z"/><path fill="none" d="M0 24V0h24v24H0z"/></svg>
					</a>
				</div>
			</div>
            
        </div>
	</section>
</main>
</main>
<?php $this->load->view("common/footer")?>

</body>

</html>