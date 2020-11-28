<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ARSIPRO | Arsitek & Kontraktor Profesional</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/global-header.css">
	<link rel="stylesheet" href="./assets/css/global-footer.css">
	<link rel="stylesheet" href="./assets/css/rooms-and-suites.css">
	
</head>
<body>
   <?php include 'header.php';?>
    <main>
        <div class="container">

            <!-- Top Text -->
            <div class="page-header-container">
                <h2 class="page-header">Jasa & Proyek Kami</h2>
                <hr />
                <p class="page-sub-header">
                    Jasa & Proyek yang kami kerjakan saat ini
                </p>
            </div>

            

            <!-- Rooms -->
            <section class="rooms-section">
                
                <div class="row center-lg">
                    <div class="rooms col col-2">
                        <img src="assets/img/5.jpg" alt="" class="rooms-img" height="250px">
                        <h3 class="room-title">Rumah Type 36/72.</h3>
                        <p class="room-text">Desain rumah minimalis area dekat dengan jalan raya</p>
                        <div>
                            <div class="details-container">
                                <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">1 Toilet</p>
                            </div>
                            <div class="details-container">
                                <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">1 Kamar Tidur</p>
                            </div>
                        </div>
                        <p class="amount-text">Harga : Rp ;-</p>
                        <div class="buttons-container">
                            <a href="https://wa.me/6285322088850" class="btn btn-fill">Kontak Kami</a>
                        </div>
                    </div>
                    <div class="rooms col col-2">
                        <img src="assets/img/6.jpg" alt="" class="rooms-img" height="250px">
                        <h3 class="room-title">Rumah Type </h3>
                        <p class="room-text">Desain rumah minimalis dan dekat dengan jalan raya</p>
                        <div>
                            <div class="details-container">
                                <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">1 Toilet</p>
                            </div>
                            <div class="details-container">
                                <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">2 Kamar Tidur</p>
                            </div>
                            <div class="details-container">
                                <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">1 Bagasi Mobil</p>
                            </div>
                        </div>
                        <p class="amount-text">Harga : Rp ;-</p>
                        <div class="buttons-container">
                            <a href="https://wa.me/6285322088850" class="btn btn-fill">Kontak Kami</a>
                        </div>
                    </div>
                    
                   
                </div>
            </section>

        </div>
    </main>

 <?php include 'footer.php';?>
    <script src="assets/js/switchRooms.js"></script>
    <script src="assets/js/toggleHamburger.js"></script>
</body>

</html>