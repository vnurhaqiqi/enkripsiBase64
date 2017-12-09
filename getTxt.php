<?php 

header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=enkripsi.txt");
$valid_array = array('jpg','jpeg','png','gif','bmp');
                if(isset($_POST['submit']) && $_FILES['gambar']['size']>0){

                  $ext = @strtolower(end(@explode('.', $_FILES['gambar']['name'])));

                  if(in_array($ext, $valid_array)){

                    move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$_FILES['gambar']['name']);
                    
                    $enkripsi = base64_encode(file_get_contents('gambar/'.$_FILES['gambar']['name']));
                  	}
                }
echo $enkripsi;
 ?>