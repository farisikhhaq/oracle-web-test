<?php
require_once('default-time.php');
require_once('class-api.php');
$api = new Adzan();
$get_data = $api->get_data(null, null); // Initiate default class with null parameter;
$data = $get_data[0];
$total_row = $get_data[1];
?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pesmaba dan Jadwal Sholat</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="css/styles.css" rel="stylesheet">
	<!-- Fonts CSS-->
	<link rel="stylesheet" href="css/heading.css">
	<link rel="stylesheet" href="css/body.css">
	<style>
		.button {
			background-color: #8B008B;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 10px;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
		<div class="container"><a class="navbar-brand js-scroll-trigger" href="http://168.138.192.230/login.php"><img id="brandImage" src="https://objectstorage.ap-tokyo-1.oraclecloud.com/p/1g1uDU_araL9rXX2MciDDUKKBxVvYFLsb2oYPZcdz5c7vILjMqOMYylK0u43qXGv/n/nryojlw3k71c/b/bucket-uts/o/RISPOL-BIRU.png" alt=""></a>
			<button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">JENIS PESMABA</a>
					</li>
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#jadwalsholat">JADWAL SHOLAT</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<header class="masthead bg-primary text-white text-center">
		<div class="container d-flex align-items-center flex-column">
			<!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="https://objectstorage.ap-tokyo-1.oraclecloud.com/p/VeyKr9gQVnxEKLbBCEBFhSRzYvJVJBzLfNuc3SJ-dQuvyEZn2jG1cJNsR0zMIyDH/n/nryojlw3k71c/b/bucket-uts/o/avataaars.svg" alt="">
			<!-- Masthead Heading-->
			<h1 class="masthead-heading mb-0">PESMABA DAN INFORMASI SHOLAT</h1>
			<!-- Icon Divider-->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
				<div class="divider-custom-line"></div>
			</div>
			<!-- Masthead Subheading-->
			<p class="pre-wrap masthead-subheading font-weight-light mb-0">FARIS IKHLASUL HAQ - 1941720062</p>
		</div>
	</header>
	<section class="page-section portfolio" id="portfolio">
		<div class="container">
			<!-- Portfolio Section Heading-->
			<div class="text-center">
				<h2 class="page-section-heading text-secondary mb-0 d-inline-block">PORTFOLIO</h2>
			</div>
			<!-- Icon Divider-->
			<div class="divider-custom">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
				<div class="divider-custom-line"></div>
			</div>
			<!-- Portfolio Grid Items-->
			<div class="row justify-content-center">
				<!-- Portfolio Items-->
				<div class="col-md-6 col-lg-4 mb-5">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
						</div><img class="img-fluid" src="https://objectstorage.ap-tokyo-1.oraclecloud.com/p/NUOzv-HTa0vnlvrRlg68RLYOzEUenmZJLxuZBHIgoWXEks0sxJGnO91TpabrkEbG/n/nryojlw3k71c/b/bucket-uts/o/cabin.png" alt="Log Cabin" />
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-5">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
						</div><img class="img-fluid" src="https://objectstorage.ap-tokyo-1.oraclecloud.com/p/jynvn0xV9v6pzXdg3byXEt1ONASXAyfuC51ufQL7ctFoz2rypJ9K51UVGuDn7i3W/n/nryojlw3k71c/b/bucket-uts/o/cake.png" alt="Tasty Cake" />
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-5">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
						</div><img class="img-fluid" src="https://objectstorage.ap-tokyo-1.oraclecloud.com/p/kqoPWiVoMQ9H680FMK1QLrIIpGZpVBgyyBhzmWcDlcoxhs0knL2JHUJEzN5pGfra/n/nryojlw3k71c/b/bucket-uts/o/circus.png" alt="Circus Tent" />
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-5">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
						</div><img class="img-fluid" src="https://objectstorage.ap-tokyo-1.oraclecloud.com/p/2tMgxQFHowpGLCTyduVhSbHgIhP3uQrjQDJQic7WKG5lXdyvtTWoqyJsViEcOMux/n/nryojlw3k71c/b/bucket-uts/o/game.png" alt="Controller" />
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-5">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
						</div><img class="img-fluid" src="https://objectstorage.ap-tokyo-1.oraclecloud.com/p/iVfXrF3kABsmkP0gT0Rvs0flbidmJIwqgtcvZ6hpTmEvuukHK8Xk2yXcFlwsfspt/n/nryojlw3k71c/b/bucket-uts/o/safe.png" alt="Locked Safe" />
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-5">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
						</div><img class="img-fluid" src="https://objectstorage.ap-tokyo-1.oraclecloud.com/p/-Va1wjvjPAiZjPXAl_jhpAwtVLzrXPebWon_3EDW3bsg2IzhpVyEAerERQ0ULBRD/n/nryojlw3k71c/b/bucket-uts/o/submarine.png" alt="Submarine" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="page-section portfolio" id="jadwalsholat">
		<div class="wrapper">
			<div class="header">
				<h4>Jadwal Imsakiyah & Sholat 5 Waktu</h4>
				<h6 id="title-month"><?php echo date('Y'); ?></h6>
				<a href="login.php" class="button">MASUK PESMABA</a>
			</div>
			<div class="form-jadwal">
				<div class="form-jadwal-content">
					<label class="form-label">Kota</label>
					<select name="kota" id="kota" class="form-control select-jadwal">
						<option value="Makassar">Makassar</option>
						<option value="Jakarta">Jakarta</option>
						<option value="Bandung">Bandung</option>
						<option value="Surabaya">Surabaya</option>
						<option value="Medan">Medan</option>
						<option value="Ambon">Ambon</option>
						<option value="Jayapura">Jayapura</option>
					</select>
					<label class="form-label">Bulan</label>
					<select name="bulan" id="bulan" class="form-control select-jadwal">
						<option value="1" <?php if (date('m') == '1') {
												echo 'selected';
											} ?>>Januari</option>
						<option value="2" <?php if (date('m') == '2') {
												echo 'selected';
											} ?>>Februari</option>
						<option value="3" <?php if (date('m') == '3') {
												echo 'selected';
											} ?>>Maret</option>
						<option value="4" <?php if (date('m') == '4') {
												echo 'selected';
											} ?>>April</option>
						<option value="5" <?php if (date('m') == '5') {
												echo 'selected';
											} ?>>Mei</option>
						<option value="6" <?php if (date('m') == '6') {
												echo 'selected';
											} ?>>Juni</option>
						<option value="7" <?php if (date('m') == '7') {
												echo 'selected';
											} ?>>Juli</option>
						<option value="8" <?php if (date('m') == '8') {
												echo 'selected';
											} ?>>Agustus</option>
						<option value="9" <?php if (date('m') == '9') {
												echo 'selected';
											} ?>>September</option>
						<option value="10" <?php if (date('m') == '10') {
												echo 'selected';
											} ?>>Oktober</option>
						<option value="11" <?php if (date('m') == '11') {
												echo 'selected';
											} ?>>November</option>
						<option value="12" <?php if (date('m') == '12') {
												echo 'selected';
											} ?>>Desember</option>
					</select>
				</div>
			</div>
			<div class="content-jadwal">
				<table class="table table-striped table-bordered">
					<thead id="theader">
						<th>No.</th>
						<th>Tanggal</th>
						<th>Imsyak</th>
						<th>Subuh</th>
						<th>Terbit</th>
						<th>Dzuhur</th>
						<th>Ashar</th>
						<th>Maghrib</th>
						<th>Isya'</th>
					</thead>
					<tbody id="load-content">
						<?php for ($i = 0; $i < $total_row; $i++) { ?>

							<tr class="<?php if (strtotime(date('d-m-Y')) == strtotime($data->data[$i]->date->readable)) {
											echo 'jadwal-selected';
										} ?>">
								<td><?php echo $i + 1; ?></td>
								<td>
									<b><?php echo strftime("%A, %d %B %Y", strtotime($data->data[$i]->date->readable)) . "<br>"; ?></b>
									<?php
									echo
									$data->data[$i]->date->hijri->day . " " . $data->data[$i]->date->hijri->month->en . " " . $data->data[$i]->date->hijri->year . "H";
									?>
								</td>
								<td><?php echo $data->data[$i]->timings->Imsak; ?></td>
								<td><?php echo $data->data[$i]->timings->Fajr; ?></td>
								<td><?php echo $data->data[$i]->timings->Sunrise; ?></td>
								<td><?php echo $data->data[$i]->timings->Dhuhr; ?></td>
								<td><?php echo $data->data[$i]->timings->Asr; ?></td>
								<td><?php echo $data->data[$i]->timings->Maghrib; ?></td>
								<td><?php echo $data->data[$i]->timings->Isha; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<!-- <table id="header-fixed" class="table">
					<thead>
						<th width="45">No.</th>
						<th width="200">Tanggal</th>
						<th width="93">Imsyak</th>
						<th width="93">Subuh</th>
						<th width="93">Terbit</th>
						<th width="93">Dzuhur</th>
						<th width="93">Ashar</th>
						<th width="93">Maghrib</th>
						<th width="93">Isya'</th>
					</thead>
				</table> -->
			</div>
			<div class="footer">
				<p>Created by Faris Ikhlasul Haq (<a href="https://github.com/farisikhhaq">farisikhhaq</a>) &copy 2021</p>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="main.js"></script>
	<!-- Bootstrap core JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<!-- Third party plugin JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<!-- Contact form JS-->
	<script src="assets/mail/jqBootstrapValidation.js"></script>
	<script src="assets/mail/contact_me.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
</body>

</html>