<?php

	$con = mysqli_connect("localhost","freedo","D27d97daa5b","freedo_db");

	function inputuser($con,$startuser,$idlogin,$password,$firstname,$surname,$numberphone,$email,$address){
		$sql = "INSERT INTO user(startuser,idlogin,password,firstname,surname,numberphone,email,address)
		VALUES ('$startuser','$idlogin','$password','$firstname','$surname','$numberphone','$email','$address')"; 
		// echo $sql;
		mysqli_query($con,$sql) or die (mysqli_error($con));
	}

	function getproimg($proimg){
		$target_path = 'im/'.uniqid().$proimg['name'];
		copy($proimg['tmp_name'],$target_path);

		return $target_path;
	}

	function inputproduct($con,$proname,$prodescription,$prosize,$protype,$procolour,$proprice,$stock,$proimg,$target_path,$progender,$promotion,$hiret,$hires){
		$sql = "INSERT INTO product(proname,prodescription,prosize,protype,procolour,proprice,stock,proimg,progender,promotion,hiret,hires)
		VALUES ('$proname','$prodescription','$prosize','$protype','$procolour','$proprice','$stock','$target_path','$progender','$promotion','$hiret','$hires')"; 
		mysqli_query($con,$sql) or die (mysqli_error($con));
	}
?>