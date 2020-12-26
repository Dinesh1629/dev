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
	<div class="container">
		<h1 class="text-center p-3">Ahobilam – Development Works</h1>
		<p>HH Jeeyar and Ahobilam Devasthanams have been planning a number of works for the development of Ahobilam to provide adequate facilities and infrastructure to the increasing number of pilgrims coming to Ahobilam. The following works have been taken up:</p>
		<ol class="ml-4">
			<li>Toilet Block – Lower Ahobilam</li>
			<p> Construction of a Toilet Block with separate toilets and bathing facilities for Ladies & Gents at Lower Ahobilam for the pilgrims is being taken up through donations.
			</p>
			<div class="text-left secondary-text">Estimated Cost : Rs. 30.50 lakhs</div>

			<br><br>
			<li>Prahlada Statue at ‘Y’ Junction – Lower Ahobilam</li>
			<p>
			It is proposed to erect a statue of Bhaktha Prahlada on whose prompting Lord Vishnu took the Narasimha Avatara at Ahobilam, is planned at the Lower Ahobilam ‘Y’ Junction. This project is also being taken up through donations.
			</p>
			<div class="text-left secondary-text">Estimated Cost : Rs. 25.20 lakhs</div>
			<p>
				Donations for the above are solicited. Cost of any of the Projects can be totally borne by a Donor or any amount possible may be contributed. Payments may be made by Cheque favouring ‘Sri Lakshminarasimhaswami Devasthanams, Ahobilam’ and handed over at the Devasthanam office or may be deposited in Account No. A/C NO: 002010011001555 – Andhra Bank, Ahobilam IFSC Code: ANDB0001862.
				
				On-line transfer can also be made to the above account. . After transferring the amount please email the details of amount transferred, date of transfer and bank details, along with donor name and address to the Manager at: ahobilammutt.gpa@gmail.com
			</p>
			
			<div class="text-center"><a href="<?php echo base_url('contact');?>">
			<button class="btn btn-secondary btn-lg">DONATE NOW</button>			
			</a></div>
			<br><br>
			<li>60-Room Pilgrim Cottages – Lower Ahobilam – PRAHLADA SADAN</li>
			<p>
			Ahobilam Devasthanams are putting up a 60-room Cottage at Lower Ahobilam for pilgrims visiting the holy kshetram of Ahobilam. Estimated to cost Rs. 7.33 crores. Bhakthas & philanthropic public are invited to participate in the construction of this proposed 60-room Cottage, named ‘Prahlada Sadan’ by opting for the following Scheme.
			</p>
			<div class="text-left secondary-text">Estimated Cost : Rs. 7.33 crores</div>
			<p>
			Donors can book a room/Executive suit under ‘Donor Scheme’ in by contributing Rs. 5 lakhs (Rupees Five Lakhs) per Room or Rs. 9 lakhs (Rupees Nine Lakhs) per Executive Suit. For donation of Rs. 5 lakhs for a room the donor will be given 20 days of free accommodation in a year and for Executive Suit 30 days of free accommodation in a year against pre-issued coupons, for 20 years.

			</p><p>
			Bhakthas & philanthropists are invited to book a room/executive suit under the Donor Scheme. Room/Suit will be in the name of the Donor. Donations will be exempted from Income Tax u/s 80 (G) of the IT Act.

For further information please contact the Manager of the Devasthanams on Phone (office) 7780766246.
			</p>
		</ol>
		<p class="text-danger">The G. P. A,<br />
Sri Ahobila Math<br />
Ahobilam &#8211; 518545<br />
Email: <a href="mailto:ahobilammutt.gpa@gmail.com">ahobilammutt.gpa@gmail.com</a>
</p>
</div>
<section class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<img src="<?php echo base_url() ; ?>assets/img/ms-5.jpeg" alt="" class="img-fluid">
		</div>
		<div class="col-md-3">
			<img src="<?php echo base_url() ; ?>assets/img/ms-1.jpeg" alt="" class="img-fluid">
		</div>
		<div class="col-md-3">
			<img src="<?php echo base_url() ; ?>assets/img/ms-3.jpeg" alt="" class="img-fluid">
		</div>
		<div class="col-md-3">
			<img src="<?php echo base_url() ; ?>assets/img/ms-4.jpeg" alt="" class="img-fluid">
		</div>
	</div>
</section>
<?php $this->load->view('others/donate');?>
</main>
<?php $this->load->view("common/footer")?>

</body>

</html>