<?php
	$gambar = "foto.png";
	$enkripsi = base64_encode(file_get_contents($gambar));
	echo $enkripsi;
?>