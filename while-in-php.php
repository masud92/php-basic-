<?php
	$data = array('masud','saiful','sohagi','asa','mehedi','mahin'); 
	
	$data_size = count($data); 
	$a=1; 
	while($a<$data_size){
		echo $data[$a].'<br/>'; 
		$a++; 
	}
?>
<?php

	$data = array('masud','saiful','sohagi','asa','mehedi','mahin',);
	$data_size = count($data);
	echo ($data_size);
	
?>
<?php

	$data = array('masud','saiful','sohagi','asa','mehedi','mahin'); 
	
	$data_size = count($data); 
	$a=6; 
	while($a>$data_size){
		echo $data[$a].'<br/>'; 
		$a++; 
	}
?>