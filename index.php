<!DOCTYPE html>
<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="google" value="notranslate">
<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/arabic.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link href="img/logo.png" rel="shortcut icon">
<title>Al Quran Digital - Berbasis PHP & MySQL</title>
</head>
<body style="text-align:center">
 <h2>Al Quran Digital - Berbasis PHP & MySQL</h2><hr/>
 <table style="width:100%" class="table1">

 </head>
<body>
	<!-------------------------------------------------->
	<!--[   Al Qur'an Digital Berbasis PHP & MySQL   ]-->	
	<!--[ 	    Code By: Muhammad Hilmy Taufik       ]-->
	<!--[ 	            Copyright 2019               ]-->
	<!-------------------------------------------------->
	<!--[ 		Ikuti Saya Di Sosial Media           ]-->
	<!-------------------------------------------------->
	<!--[ Github    : MuhammadHilmyTaufik			 ]-->
	<!--[ Instagram : @muhammadhilmytaufikk			 ]-->
	<!--[ Facebook  : Muhammad Hilmy Taufik			 ]-->
	<!-------------------------------------------------->
<?php 
include 'database/config.php';
include 'daftarsurah.php';
$surat = isset($_GET['surat']) ? $_GET['surat'] : 0;
$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
if($surat == 0)
	show_daftar();
else
	show_quran($surat, $nama);

function format_arabic_number($number){
	$arabic_number = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
	$jum_karakter = strlen($number);
	$temp = "";
	for($i = 0; $i < $jum_karakter; $i++){
		$char = substr($number, $i, 1);
		$temp .= $arabic_number[$char];
	}
	return '<span class="arabic_number">'.$temp.'</span>';
}

?>
</body>
</html>