<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<style>
      body {
         background-color: rgb(20,30, 1);
      }
   </style>

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
<style>

input[type=text], select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;}
  .c {
  background-color: lightblue; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</head>
<body class="a">

<div class="container">
  <form method="POST" action="display.php">
  <center><h2>Terengganu’s Ertiga Club held Malaysia tour program </h2></center>
<center><img src = "logo.PNG" class = "logo"/></center>
  <div class="row">
    <div class="col-25">
    <h1>Car participation</h1>
    <button><a class='c' href='car.php'>CAR</a></button><br>
      <b><label>Name</label></b>
    </div>
    <div class="col-75">
      <input type="text" name="name" placeholder="Your name">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <b><label>Email</label></b>
    </div>
    <div class="col-75">
      <input type="text" name="email" placeholder="Your email(xxx@xxx.com)">
    </div>
	<div class="col-25">
      <b><label>Phone Number</label></b>
    </div>
    <div class="col-75">
      <input type="text" name="nophone" placeholder="Your phone number(xxx-xxx-xxxx)">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <b><label for="review">Address</label></b>
    </div>
    <div class="col-75">
      <textarea name="address" placeholder="Your address" style="height:200px"></textarea>
    </div>
	<div class="col-25">
      <b><label>Car Name</label></b>
    </div>
    <div class="col-75">
      <input type="text" name="carname" placeholder="Your car name">
    </div>
	<div class="col-25">
      <b><label>NO Plat</label></b>
    </div>
    <div class="col-75">
      <input type="text" name="carprize" placeholder="Your Plat">
    </div>
  </div>
  <br>
  <div class="row">
  <td>&nbsp;</td>
    <input type="submit" value="SEND">
  </div>
  </form>
</div>

</body>
</html>