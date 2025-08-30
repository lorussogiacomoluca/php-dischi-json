<?php
require_once('./functions.php');
$nuovo_disco = [
  "titolo"  => $_POST['titolo'] ?? '',
  "artista" => "Articolo 31", // fisso
  "cover"   => $_POST['urlImage'] ?? '',
  "anno"    => $_POST['anno'] ?? '',
  "genere"  => $_POST['genere'] ?? ''
];
$dischi[] = $nuovo_disco;
file_put_contents('dischi.json', json_encode($dischi));
header("Location: index.php");
