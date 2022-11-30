<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Switch Template</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|IBM+Plex+Sans:600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
								<img class="header-logo-image asset-light" src="dist/images/logo-light.svg" alt="Logo">
								<img class="header-logo-image asset-dark" src="dist/images/logo-dark.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
			
        </header>
<center><body class="b">
<center><img src = "logo.png" /></center>
<?php
	$name = $_POST['name'];
	$email = $_POST['email']; 
	$nophone = $_POST['nophone']; 
	$address = $_POST['address']; 
	$carname = $_POST['carname']; 
	$carprize = $_POST['carprize']; 
	$namafail="registration .txt";
//buka fail untuk masuk data
	$fail = fopen($namafail,'a');
	$teks = "\r\n <b>BY:   ".$name.",<br>   CAR NAME:   ".$carname.",<br>  No Plat:   ".$carprize.",<br> NUMBER PHONE:   ".$nophone.",<br> EMAIL:   ".$email.",<br> ADDRESS:   ".$address.",<br>   ON : ".date("H:i:s d/m/Y")."</i>\r\n \r\n";
//tulis 
	fwrite($fail,$teks);
//tutup fail 
	fclose($fail); 
//buka fail untuk baca data
	$fail = fopen($namafail,'r');
	$teks = fread($fail,filesize($namafail));
	$teks = str_replace("\r\n","<br>",$teks);
	echo "<h1>Car participation</h1><button><a class='c' href='form.php'>ADD</a></button><button><a class='f' href='delete.php'>DELETE</a></button><button><a class='f' href='form.php'>OVERWRITE</a></button><button><a class='c' href='car.php'>CAR</a></button>";
	echo "<hr>";
	echo $teks;
//tutup fail
	fclose($fail); 
?>
</body></center>
</html>