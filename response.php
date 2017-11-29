<?php
if(isset($_POST) && !empty($_POST['number'])) {
	if(is_numeric($_POST['number'])) {
		$response=$_POST['number'];
		if($response==1) {
			echo json_encode(array(1,"Contenido cargado numero 1"));
		}
		if($response==2) {
			echo json_encode(array(2,"Contenido cargado numero 2"));
		}
		if($response==3) {
			echo json_encode(array(3,"Contenido cargado numero 3"));
		}
		
	} else {
		//else num
		echo "Error: no hay POST number";
	}
	
	
}//1
else {
	//else empty
	echo "Error: el POST number no se envió";
}
?>