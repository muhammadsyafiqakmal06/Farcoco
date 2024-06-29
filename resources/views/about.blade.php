@extends('layouts.main')

@section('container')
<link href="css/style.about.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

<div class="image-aboutus-banner" style="margin-top:70px">
	<div class="container">
		<div style="text-align: center;">
			<h1 class="lg-text">ABOUT US</h1>
		</div>
	</div>
</div>

<div class="animation">
<div class="aboutus-secktion paddingTB60">
	<div class="container">
		<div class="row">
			<div class="col-md-5" style="text-align: center">
				<div class="logo-kecil">
					<img src="LOGO.png" alt="">
				</div>
			</div>
			<div class="col-md-6" style="margin-top: 25px; margin-bottom: 20px;">
				<h1 class="strong">Who we are</h1>
				<p style="text-align: justify"><b>FAR COCO</b> Indonesia is the best coconut derivative supplier company from Indonesia with a worldwide market reach. We produce through cooperation with various partners of farmers and factories throughout Indonesia.
				</p>
				<h1 class="strong">What we do</h1>
				<p style="text-align: justify"> Our company gives top priority to the best service and product quality, focusing on the important things, especially in innovation and commitment.</>
			</div>
		</div>
	</div>
</div>

<div class="row-vm">
	<div class="column-vm">
		<div class="vision-left">
			<h1 class="strong" style="color: white">VISION</h1>
			<p style="color: white">Make a global contribution by addressing the global need for coconut as a healthier choice and a better life</p>
		</div>
		<div class="foto-tengah">
			<img src="../img/FOTO tengah.png" alt="">
		</div>
		<div class="mission-right">
			<h1 class="strong" style="color: white">MISSION<br></h1>
			<p style="color: white">Providing the best service and quality for customers with commitment and innovation to give preference and take a role in meeting customer needs</p>
		</div>
	</div>
</div>

<div class="container paddingTB60">
	<div class="row">
		<div class="site-heading text-center">
			<h3>Our Team</h3>
			<div class="border"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 team-box">
			<center>
				<div class="team-img-thumbnail">
					<img src="../img/Faisal.png">
					<div class="team-content">
						<br>
						<h3>Muhammad Faisal</h3>
						<p>Founder</p>
						<div class="border-team"></div>
					</div>
				</div>
			</center>
		</div>
		<div class="col-md-4 team-box">
			<center>
				<div class="team-img-thumbnail">
					<img src="../img/Akbar.png">
					<div class="team-content">
						<br>
						<h3>Noor Akbar</h3>
						<p>Co-Founder</p>
						<div class="border-team"></div>
					</div>
				</div>
			</center>
		</div>
		<div class="col-md-4 team-box">
			<center>
				<div class="team-img-thumbnail">
					<img src="../img/dandy.png">
					<div class="team-content">
						<br>
						<h3>Dandi Agus Maulana</h3>
						<p>Head of Operational</p>
						<div class="border-team"></div>
					</div>
				</div>
			</center>
		</div>
	</div>
</div>


<div class="row2">
	<h3>We Are Registered</h3>
	<div class="border"></div>
	<div class="column2" style="text-align: right">
		<img src="../img/ICON - Kementrian Keuangan PUTIH NO BORDER.png" alt="" >
	</div>
	<div class="column2" >
		<img src="../img/ICON - Kementrian Perdagangan PUTIH NO BORDER.png" alt="">
	</div>
	<div class="column2 " style="text-align: right">
		<img src="../img/ICON - Pengayoman PUTIH NO BORDER.png" alt="">
	</div>
	<div class="column2" >
		<img src="../img/ICON - Direktoral Pajak PUTIH NO BORDER.png" alt="">
	</div>
</div>
</div>

@endsection