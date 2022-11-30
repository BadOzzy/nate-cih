<?php
	$namafail="carsale.txt";
	unlink($namafail);
//redirect ke form.php
header("location:form.php");
?>