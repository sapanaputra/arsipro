<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>ARSIPRO | Arsitek & Kontraktor Profesional</title>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		/>

		<link
			href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="./assets/css/global-header.css" />
		<link rel="stylesheet" href="./assets/css/global-footer.css" />
		<link rel="stylesheet" href="./assets/css/accesibility.css">
		<link rel="stylesheet" href="./assets/css/contact-page.css" />

	</head>
	<body>
		<?php include 'header.php';?>

		<main>
			<div class="container">
				<!-- Header part contain Title page and descriptoion -->
				<div class="header">
					<h2>Kontak Kami</h2>
					<hr/>
					<p>
						Silakan kontak kami jika anda punya kendala
					</p>
				</div>

				<!-- End of header Part -->

				<!-- Main part contain form and informatoion contactus -->
				<div class="main">
					<div class="contact">
						<!-- Form start here -->
						<div class="contact-form">
							<form  method="post" action="kirim.php">
								<div class="contact-detail">
									<label class="hide" for="name">Enter your name</label>
									<input type="text" class="form-control" placeholder="Nama Anda" id="name" name="name" required="" />
									<label class="hide" for="email">Enter your email address</label>
									<input
										type="text"
										class="form-control"
										placeholder="No Whatsapp"
										id="email"
										name="nohp" required=""
									/>
								</div>
								<label class="hide" for="message">Pesan</label>
								<textarea
									class="form-control"
									rows="5"
									id="comment"
									placeholder="Pertanyaan"
									style="resize: none; width: 100%;"
									name="pesan" required=""
								></textarea>

								<input type="submit" class="btn" value="Kirim Pesan" name="kirim">
							</form>
						</div>
						<!-- Form finish here -->

						<!-- Contact Us start here -->
						<div class="contact-us">
							<h3>Kontak Kami</h3>

							<span
								><i
									style="font-size: 1.5rem;"
									class="fa fa-map-marker"
									aria-hidden="true"
								></i
								>Jl. Prabu. Cakrabuana Kota Cirebon Jawa Barat</span
							>
							<span
								><i
									style="font-size: 1.5rem;"
									class="fa fa-phone"
									aria-hidden="true"
								></i
								>0853-2208-8850</span
							>
							<span
								><i
									style="font-size: 1.5rem;"
									class="fa fa-envelope-o"
									aria-hidden="true"
								></i
								>jaka.sapana@gmail.com</span
							>
						</div>
						<!-- Contact Us Finish here -->
					</div>
				</div>
			</div>
		</main>

		<?php include 'footer.php';?>
		<script src="assets/js/toggleHamburger.js"></script>
	</body>
</html>
