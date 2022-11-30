<!DOCTYPE html>
<html>
<head>
<style>
.b{
	background-image: url("bcg.jpg");
	
}
.c{
	background-color: #8E44AD;
  color: white;
  padding: 10px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
 
}
.f{
	background-color: #8E44AD;
  color: white;
  padding: 10px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 float: left;
}
</style>
</head>
<center><body class="b">
<!-- for display value input user in formowr.php --> <!--  -->
 <?php
        //declare variable for value from user
    $name = $_POST['name'];
	$email = $_POST['email']; 
	$nophone = $_POST['nophone']; 
	$address = $_POST['address']; 
	$carname = $_POST['carname']; 
	$carprize = $_POST['carprize']; 
	$namafail="carsale.txt";

        //open file for insert new data
        $fail = fopen($namafail,'w') or die("Unable to open file!");

        //set text for display in file txt
       $teks = "\r\n <b>BY:   ".$name.",<br>   CAR NAME:   ".$carname.",<br>  CAR PRIZE:   ".$carprize.",<br> NUMBER PHONE:   ".$nophone.",<br> EMAIL:   ".$email.",<br> ADDRESS:   ".$address.",<br>   ON : ".date("H:i:s d/m/Y")."</i>\r\n \r\n";

        //write data
        fwrite($fail,$teks);

        //close fail
        fclose($fail);

        //open file for read data
        $fail = fopen($namafail,'r');
        $teks = fread($fail,filesize($namafail));
        $teks = str_replace("\r\n","<br>",$teks);

     
echo "<h1>Review from customer Ae86 Car Sale System</h1><button><a class='c' href='form.php'>WRITE</a></button><button><a class='f' href='delete.php'>DELETE</a></button><button><a class='f' href='overwrite.php'>EDIT</a></button>";
	echo "<hr>";
	echo $teks;
        //close file
        fclose($fail);
        ?>