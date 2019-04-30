`<!-------------------------------------------------->
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
function database($sql){
	$db = new mysqli("localhost", "root", "", "quran");
	if($db->connect_errno > 0){
    		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	$db->query("SET NAMES 'utf8'"); 
	$db->query('SET CHARACTER SET utf8');

	if(!$result = $db->query($sql)){
    		die('There was an error running the query [' . $db->error . ']');
	}
		
	$return = array();
	while($row = $result->fetch_array()){
    		$return[] = $row;
	}
	$result->free();
	$db->close();
	return $return;	
}
?>
