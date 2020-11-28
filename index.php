<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Star Hotels Helps you Discover The Perfect Balance
	Of Hospitality, Luxury And
	Comfort.">
	<title>ARSIPRO | Arsitek & Kontraktor Profesional</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/global-header.css">
	<link rel="stylesheet" href="./assets/css/global-footer.css">
	<link rel="stylesheet" href="./assets/css/accesibility.css">
	<link rel="stylesheet" href="./assets/css/index.css">
</head>
<body class="scroll-bar">
	<div id="loader">
		<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
			<path fill="#d4af37" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
				<animateTransform 
					attributeName="transform" 
					attributeType="XML" 
					type="rotate"
					dur="1s" 
					from="0 50 50"
					to="360 50 50" 
					repeatCount="indefinite" />
		</path>
		</svg>
	</div>
	<?php include "header.php";?>

	<div class="jumbotron-container">
		<div class="jumbotron-left">
			<h2 class="jumbotron-header">Arsitek & Kontrakor Profesional</h2>
			<p>Kami menawarkan jasa dibidang Arsitek & Kontraktor<br> sewilayah 3 Cirebon</p>
		</div>
		<div class="jumbotron-right">
			<form action="kirim.php" method="post" class="jumbotron-form">
				<!-- Put the form here -->
					<h3>Butuh Jasa Kami?</h3><br>
					<p>Isi data lengkap mengenai jasa yang anda butuhkan.</p>
					<label class="hide" for="guests">how many guests</label>
					<input type="text" id="guests" name="name" placeholder="Nama Anda" required=""><br>
					<label class="hide" for="guests">how many guests</label>
					<input type="text" id="guests" name="nohp" placeholder="No HP Anda" required=""><br>
					<label class="hide" for="children">children</label>
					<input type="text" id="children" name="pesan" placeholder="Jelaskan Kebutuhan anda" required=""><br>
					<input type="submit" name="kirim" value="Kirim" class="rates">
			</form>
		</div>
	</div>

	<!-- Enjoy your stay in our hotel -->
	<div class="enjoy-container">
		<div class="enjoy-header">
			<h2 class="enjoy-heading">Apa yang anda<br> butuhkan?</h2>
			<hr class="horizontal">
			<p>Kami memiliki banyak jasa dibidang aristek dan kontraktor, kami siap membantu anda dalam merancangnya</p>
		</div>
	<div class="enjoy-services">
		<div class="first-col">
			<div class="upper">
					<span>
						<img src="./assets/img/icon.png" class="enjoy__clock-icon">
					</span>
					<h3>Jasa Arsitek</h3>
					<p>Merancang desain meliputi interior dan eksterior dan biaya RAB</p>
			</div>
			<div class="lower">
				<span>
					<img src="./assets/img/icon.png" class="enjoy__fitness-icon">
				</span>
				<h3>Jasa Desain Interior</h3>
				<p>Merancang meliputi konsep desain dari layout, gambar kerja dan 3d rendering interior</p>
			</div>
			
		</div>
		<div class="sec-col">
				<div class="upper">
					<span>
						<img src="./assets/img/icon.png"  class="enjoy__coffee-icon">
					</span>
						<h3>Jasa Renovasi</h3>
					<p>Merancang konsep desain dan renovasi sesuai kebutuhan</p>
				</div>
				<div class="lower">
					<span>
						<img src="./assets/img/icon.png"  class="enjoy__wifi-icon">
					</span>
						<h3>Jasa Bangunan</h3>
						<p>Merancang konsep desain rumah dan memulai tahap pengerjaan</p>
				</div>
		</div>
		<div class="third-col cont">
			
			<img src="./assets/img/jumbotron.jpeg" width="100%" class="third-col-video">
		</div>
	</div>

	</div>
	<?php /* <section class="special-offers">
		<!-- Top Text -->
		<div class="page-header-container">

		  <h2 class="page-header">Jasa dan Projek <br>yang sedang dikerjakan</h2>
	
            
            </div>
			<div class="row center-lg">
				<div class="col image-col right-marg">
					<img src="assets/img/hotel-1.webp" alt="room-image" class="small-image">
					<img src="assets/img/hotel-2.webp" alt="room-image" class="small-image">
					<img src="assets/img/hotel-3.webp" alt="room-image" class="small-image img-hide">
					<div class="side-by-side-container">
						<div class="large-image-container">
							<img src="assets/img/hotel-4-large.webp" alt="room-image-large" class="large-image">
						</div>
						<section class="stacked-image-container">
						  <div><img src="assets/img/hotel-5.webp" alt="room-image" class="small-image"></div>
						  <div><img src="assets/img/hotel-6.webp" alt="room-image" class="small-image"></div>
						</section>
					</div>
				</div>
				<div class="col">
					<p class="offers-sub-title">
							Kami sedang mengerjakan pembangunan rumah <br>di kabupaten cirebon, lokasi didaerah susukan 
					</p>
					<ul class="offers-list">
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">2 Kamar Tidur</p>
							</div>
						</li>
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">1 Ruang Tamu</p>
							</div>
						</li>
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">Bagasi Mobil</p>
							</div>
						</li>
					</ul>
					<a href="https://timbu.com/search?query=hotel" class="btn btn-fill btn-large centered">Lebih Lanjut</a>
				</div>
			</div>
		</section>
		*/ ?>

	<!-- Client Reviews -->
	<div class="review-container">
		<div class="review-header">
			<h2 class="review-title">
				Ulasan Klien
			</h2>
			<hr class="horizontal">
			<p class="">Kami menawarkan service terbaik untuk yang menggunakan jasa kami</p>
		</div>
		<div class="cards-container">
				<div class="card">
					<img src="./assets/img/user.png" alt="" class="card-avi">
					<h2 class="card-title">
							Bapak Hasan
					</h2>
					<h3 class="card-subtitle">
						Cirebon
					</h3>
					<p class="card-desc">Makasih atas pembuatan kosannya sesuai dengan konsep desain</p>
				</div>
				<div class="card">
					<img src="./assets/img/user.png" alt="" class="card-avi">
					<h2 class="card-title">
							Ibu Tiara
					</h2>
					<h3 class="card-subtitle">
							Cirebon
					</h3>
					<p class="card-desc">Renovasi tempat usaha saya cepat dan sesuai harapan</p>
				</div>
				<div class="card">
					<img 
						<img src="./assets/img/user.png"
						alt="" 
						class="card-avi">
					<h2 class="card-title">
						Bapak Roni
					</h2>
					<h3 class="card-subtitle">
						Cirebon
					</h3>
					<p class="card-desc">Puas dengan pengerjaan kontrakannya</p>
				</div>
				

			</div>
	</div>
	<?php include 'footer.php';?>
	<script defer async>
		(() => {
			const loader = document.getElementById('loader');
			const scrollBar = document.getElementsByClassName('scroll-bar')[0];
			window.addEventListener('load', () => {
				loader.classList.add('none');
				scrollBar.classList.remove('scroll-bar')
			});
		})();
	</script>
	<script  defer async src="assets/js/toggleHamburger.js"></script>
</body>
</html>