<?php
var_dump($_FILES);
$plik_tmp = $_FILES['file_name']['tmp_name'];
$plik_nazwa = $_FILES['file_name']['name'];
$plik_rozmiar = $_FILES['file_name']['size'];
$plik_opis = $_POST['file_desc'];
var_dump($plik_tmp, $plik_nazwa, $plik_rozmiar, $plik_opis);

//exit;
//if(is_uploaded_file($plik_tmp)) 
{
    move_uploaded_file("C:/" . $plik_nazwa, "upload/$plik_nazwa");
    $myFile = "upload/$plik_nazwa" . "desc";
    $fh = fopen($myFile, 'w') or die("can't open file");
    fwrite($fh, $plik_opis);
    fclose($fh);
    header('Location: 4.html'); 
    
    exit;
}

?>
