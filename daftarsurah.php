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
include 'tampil_surah.php';
function show_daftar(){
	mb_internal_encoding('UTF-8'); 
	$data = database("SELECT `index`, surat_indonesia, arti, jumlah_ayat FROM DaftarSurat");
	echo '<tr>
				<th>No.</th>
				<th>Surah</th>
				<th>Arti</th>
				<th>Juml.Ayat</th>
				</tr>';

	foreach($data as $d){

		echo '<tr><td>'.$d['index'].'</td><td><a href="http://localhost/quran/index.php?surat='.$d['index'].'&nama='.$d['surat_indonesia'].'">'.$d['surat_indonesia'].'</a></td><td>'.$d['arti'].'</td></td><td>'.$d['jumlah_ayat'].'</td></tr>';


	}
}
?>