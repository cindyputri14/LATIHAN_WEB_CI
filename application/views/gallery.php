<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Gallery</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/style.css">
</head>

<body>
	<!-- <p>Koleksi Sepeda Malang Gowes</p>
	<img src="<?= base_url('assets/1.jpg') ?>" class="img">
	<p>America Style</p>
	<img src="<?= base_url('assets/1.jpg') ?>" class="img">
	<p>Stripe Blue</p>
	<img src="<?= base_url('assets/1.jpg') ?>" class="img">
	<p>Donker Blue</p>
	<img src="<?= base_url('assets/1.jpg') ?>" class="img">
	<p>Blue Mamba</p>

	<div class="box">
		<img src="<?= base_url('assets/nama.JPG') ?>" style="width: 200px; border-radius: 10%;">
		<h1>ARIFIN</h1>
		<h5>Full Stack programmer</h5>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi labore voluptas, recusandae est eius quia
			architecto accusamus quam voluptatem, culpa saepe ut natus error harum fuga dolorem veritatis, inventore
			perferendis?</p>
		<p>Hubungi saya : 085 855 685 099</p>
	</div> -->
	<nav class="white" role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="https://www.wadahsukses.com" class="brand-logo"><img src="<?= base_url('assets') ?>/logo.png" style="width: 11vh; height: 8vh"></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?= base_url('welcome/profil') ?>">Profil</a></li>
			</ul>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?= base_url('welcome/gallery') ?>">Contact</a></li>
			</ul>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?= base_url('welcome/event') ?>">Event</a></li>
			</ul>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?= base_url('welcome/index') ?>">Home</a></li>
			</ul>

			<ul id="nav-mobile" class="sidenav">
				<li><a href="<?= base_url('welcome/profil') ?>">Profil</a></li>
				<li><a href="<?= base_url('welcome/contact') ?>">Contact</a></li>
				<li><a href="<?= base_url('welcome/event') ?>">Event</a></li>
				<li><a href="<?= base_url('welcome/index') ?>">Home</a></li>
			</ul>
			<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		</div>
	</nav>

	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
				<h1 class="header center teal-text text-darken-1">Koleksi Sepeda Malang</h1>
				<div class="row center">
					<h5 class="header col s12 light">Adalah Koleksi Sepeda terjangkau di Malang</h5>
				</div>
				<div class="row center">
					<a href="#jenisSepeda" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Selengkapnya</a>
				</div>
				<br><br>

			</div>
		</div>
		<div class="parallax"><img src="<?= base_url('assets') ?>/bg1.JPG" alt="Unsplashed background img 1"></div>
	</div>


	<div class="container" id="jenisSepeda">
		<div class="section">
			<div class="row">
				<div class="col s12 center">
					<h4>Jenis Sepeda Pancal</h4>
				</div>
			</div>
			<!--   Icon Section   -->
			<div class="row">
				<div class="carousel">
					<a class="carousel-item" href="#one!">
						<img src="<?= base_url('assets') ?>/1.jpg">
						<div class="row">
							<div class="col s12 center">
								<h5>Sepeda Dolen</h5>
							</div>
						</div>
					</a>
					<a class="carousel-item" href="#two!">
						<img src="<?= base_url('assets') ?>/1.jpg">
						<div class="row">
							<div class="col s12 center">
								<h5>Sepeda Dolen</h5>
							</div>
						</div>
					</a>
					<a class="carousel-item" href="#three!">
						<img src="<?= base_url('assets') ?>/1.jpg">
						<div class="row">
							<div class="col s12 center">
								<h5>Sepeda Dolen</h5>
							</div>
						</div>
					</a>
					<a class="carousel-item" href="#four!">
						<img src="<?= base_url('assets') ?>/1.jpg">
						<div class="row">
							<div class="col s12 center">
								<h5>Sepeda Dolen</h5>
							</div>
						</div>
					</a>
					<a class="carousel-item" href="#five!">
						<img src="<?= base_url('assets') ?>/1.jpg">
						<div class="row">
							<div class="col s12 center">
								<h5>Sepeda Dolen</h5>
							</div>
						</div>
					</a>
				</div>

			</div>

		</div>
	</div>


	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<h5 class="header col s12 light">Kami Selalu Memberikan pengalaman terbaik kepada anda</h5>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="<?= base_url('assets') ?>/bg2.jpg" alt="Unsplashed background img 2"></div>
	</div>

	<div class="container">
		<div class="section">

			<div class="row">
				<div class="col s12 center">
					<h3><i class="mdi-content-send brown-text"></i></h3>
					<h4>Contact Us</h4>
					<p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc
						nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros.
						Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget,
						bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet
						semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris,
						non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
				</div>
			</div>

		</div>
	</div>


	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<h5 class="header col s12 light">Selalu terbaik di dalam pesona</h5>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="<?= base_url('assets') ?>/bg3.jpg	" alt="Unsplashed background img 3"></div>
	</div>

	<footer class="page-footer teal">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Faisal Affan</h5>
					<p class="red-text text-darken-1"><b>( Full Stack Programmer )</b></p>
					<p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, optio error! Incidunt, harum. Quae nisi ut vero, ipsa aut, sit vel odio delectus exercitationem quidem, distinctio nemo aliquid ratione repellat.</p>
					<p class="grey-text text-lighten-4">Hubungi Kami : +6285 855 685 099</p>

				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Settings</h5>
					<ul>
						<li><a class="white-text" href="#!">Link 1</a></li>
						<li><a class="white-text" href="#!">Link 2</a></li>
						<li><a class="white-text" href="#!">Link 3</a></li>
						<li><a class="white-text" href="#!">Link 4</a></li>
					</ul>
				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Connect</h5>
					<ul>
						<li><a class="white-text" href="#!">Link 1</a></li>
						<li><a class="white-text" href="#!">Link 2</a></li>
						<li><a class="white-text" href="#!">Link 3</a></li>
						<li><a class="white-text" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<div class="col s12 center">
					Made by <a class="red-text text-darken-2 accent-2" href="http://wadahsukses.com">Wadahsukses</a>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="<?= base_url('assets') ?>/init.js"></script>

</body>

</html>
