<?php
	$root = "172.20.0.2";
	$username = "root";
	$pass = "root";
	$dtb = "Redlock";

	$connect = mysqli_connect($root,$username,$pass,$dtb);
	if(!$connect){
		echo "connection failed";die();
	}
	
	$query = mysqli_query($connect,"SELECT * FROM users");
	while($row = mysqli_fetch_array($query)){
		echo "id : ",$row['ID'],"name : ",$row['Nama'],"alamat : ",$row['Alamat'],"jabatan : ",$row['Jabatan'];
	
	}









?>
