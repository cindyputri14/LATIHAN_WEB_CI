<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Halaman Profil</title>
	<link rel="stylesheet" href="<?= base_url('assets') ?>/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/style2.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
	 crossorigin="anonymous">
	<style>
		.atas {
			background-image: url("<?= base_url('assets/atas.JPG') ?>");
		}

	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
		<a class="navbar-brand" href="#">FAISAL</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('welcome/index') ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('welcome/event') ?>">Event</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('welcome/gallery') ?>">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('welcome/profil') ?>">Profil</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<div class="gerak">
		<div class="atas">
			<h1 class="text-light" id="typed">Website <span></span></h1>
			<p class="text-light">Silahkan Pesan Terlebih Dahulu</p>
			<div class="kotak">
				<div class="row pl-4 pt-3">
					<div class="col-sm-12">
						<h5><span style="color:#F4B101">2</span> Travelers</h5>
					</div>
				</div>
				<div class="row text-center mt-1 kotak2">
					<div class="col-sm-2 pt-2">
						<div class="row">
							<div class="col-12"><i class="fas fa-map-marker-alt"></i> From</div>
							<div class="col-12 pt-3 ml-2">
								<div class="progress" style="height: 1vh;">
									<div class="progress-bar" role="progressbar" style="width:100%;" aria-valuenow="100" aria-valuemin="0"
									 aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-2 pt-2">
						<div class="row">
							<div class="col-12"><i class="fas fa-location-arrow"></i> To Where</div>
							<div class="col-12 pt-3 ml-2">
								<div class="progress" style="height: 1vh;">
									<div class="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="100" aria-valuemin="0"
									 aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-2 pt-2">
						<div class="row">
							<div class="col-12"><i class="far fa-calendar-alt"></i> Fri 9/14</div>
							<div class="col-12 pt-3 ml-2">
								<div class="progress" style="height: 1vh;">
									<div class="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="100" aria-valuemin="0"
									 aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-2 pt-2">
						<div class="row">
							<div class="col-12"><i class="far fa-calendar-alt"></i> Fri 9/21</div>
							<div class="col-12 pt-3 ml-2">
								<div class="progress" style="height: 1vh;">
									<div class="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="100" aria-valuemin="0"
									 aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 lets">Let's Go Place</div>
				</div>
				<div class="row">
					<div class="col-sm-2 ml-2">
						<div class="progress" style="height: 1vh;">
							<div class="progress-bar" role="progressbar" style="width:100%;" aria-valuenow="100" aria-valuemin="0"
							 aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="progress" style="height: 1vh;">
							<div class="progress-bar" role="progressbar" style="width:100%;" aria-valuenow="100" aria-valuemin="0"
							 aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="progress" style="height: 1vh;">
							<div class="progress-bar" role="progressbar" style="width:100%;" aria-valuenow="100" aria-valuemin="0"
							 aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="progress" style="height: 1vh;">
							<div class="progress-bar" role="progressbar" style="width:100%;" aria-valuenow="100" aria-valuemin="0"
							 aria-valuemax="100"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="desc">
				<div class="row mt-3">
					<div class="col-sm-4">
						<h3 class="text-light"><span class="kuning">01</span> <b>Travel</b></h3>
					</div>
					<div class="col-sm-4">
						<h3 class="text-light"><span class="kuning">02</span> <b>Experience</b></h3>
					</div>
					<div class="col-sm-4">
						<h3 class="text-light"><span class="kuning">03</span> <b>Relax</b></h3>
					</div>
				</div>
				<div class="row" id="descBawah">
					<div class="col-sm-4">
						<h6 class="text-light">lorem</h6>
					</div>
					<div class="col-sm-4">
						<h6 class="text-light">lorem</h6>
					</div>
					<div class="col-sm-4">
						<h6 class="text-light">lorem</h6>
					</div>
				</div>
			</div>
			<div class="garis"></div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= base_url('assets') ?>/typed.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
	<script>
		$(document).ready(function () {
			var typed = new Typed('#typed span', {
				strings: ["", "Muhammad.", "Faisal.", "Affan."],
				backSpeed: 300,
				typeSpeed: 200,
				smartBackspace: true,
				startDelay: "3000",
			});
		});

	</script>

</body>

</html>
