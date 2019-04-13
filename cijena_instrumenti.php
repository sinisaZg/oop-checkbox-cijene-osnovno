<?php
include 'klasa_instrumenti.php';
$instrumenti= $_POST['instrumenti'];

$ukupna_cijena=new instrumenti($instrumenti);
echo $ukupna_cijena->ukupna_cijena();  
?>
