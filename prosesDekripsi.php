<?php 
	header("Content-type: image/gif");
	$teks = @$_POST['teks'];
	$gambar = base64_decode($teks);
	echo $gambar;
 ?>