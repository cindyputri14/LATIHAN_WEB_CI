<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Profil Admin</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/style.css">
</head>

<body style="margin: 175px; font-family: monospace; font-style: italic; font-size: 5mm; background-color: #2378cc; text-allign: center;">
	<img src="<?= base_url('assets') ?>/bg1.jpg" style="width: 200px;">
	<h1>Event Sepeda Marathon 2019</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae explicabo a corporis ipsum harum fugit eligendi
		culpa aliquid, delectus soluta! Eveniet exercitationem nisi dignissimos sunt reiciendis culpa deserunt delectus
		veritatis!</p>
	<button class="btn waves-effect waves-light" type="submit" name="action" id="button">Kembali
		<i class="material-icons right">arrow_back</i>
	</button>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="<?= base_url('assets') ?>/init.js"></script>
	<script>
		$('#button').on('click', function () {
			window.location.href = "<?= base_url('welcome/gallery') ?>";
		});
	</script>
</body>

</html>
