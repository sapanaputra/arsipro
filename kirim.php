<?php
	$name = $_POST['name'];
	$nohp = $_POST['nohp'];
	$message = $_POST['pesan'];
	if (isset($_POST['kirim'])) {
		header("Location:https://wa.me/6285322088850?text="."Nama Anda : ".$name."%0ANo Whatsapp : ".$nohp."%0APertanyaan : ".$message);
		//echo "hia";
	}
?>
