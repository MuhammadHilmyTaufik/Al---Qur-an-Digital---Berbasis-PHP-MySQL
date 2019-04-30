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
 function show_quran($surat, $nama=''){	
	mb_internal_encoding('UTF-8'); 
	if (($surat < 1) || ($surat > 114)) exit; 
	echo '<h2><a href="index.php">Back To Menu</a></h2>';
	echo '<center><h3>'.$nama.'</h3></center>';
	if($surat > 1) {
		echo '<p class ="arabic_center">'.mb_strtolower('بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ').'</p>';
		echo '<hr />'; 
	}

	$data = database("SELECT A.text as arabic, B.text as indonesia FROM ArabicQuran A LEFT OUTER JOIN IndonesianQuran B ON A.index=B.index WHERE A.surat = $surat");

	$ayat = 1;
	foreach($data as $d){
    		$str = mb_strtolower($d['arabic']);
  		echo '<p class ="arabic">'. $str .' ﴿'.format_arabic_number($ayat).'﴾</p>';
		echo '<p class ="latin">'.'['.$ayat.'] '.$d['indonesia'] .'</p>';
		echo '<hr />'; 
		$ayat++;
	}

}

 ?>