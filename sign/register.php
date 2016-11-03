<?php 
require('config.php');

$error="";

if(isset($_POST ['submit'])){

	//Perform verification 

	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];

	if($email1 == $email2){
		if($pass1 == $pass2){

		$name = mysql_escape_string($name);
		$lname = mysql_escape_string($lname);
		$uname = mysql_escape_string($_POST['uname']);
		$email1 = mysql_escape_string($email1);
		$email2 = mysql_escape_string($email2);
		$pass1 = mysql_escape_string($pass1);
		$pass2 = mysql_escape_string($pass2);

		//Password hashing
		$pass1 = md5($pass1);

		$sql = mysql_query("SELECT * FROM users WHERE uname = '$uname'");
		if(mysql_num_rows($sql) > 0){
			$error.= '<div class="alert alert-warning" role="alert">Sorry, that user already exists.</div>';
		}

		mysql_query("INSERT INTO users (id, name, lname, uname, email, pass) VALUES(NULL, '$name', '$lname', '$uname', '$email1', '$pass1')") or die(mysql_error());
		header("location: login.php");


		} else {
			$error.= '<div class="alert alert-danger" role="alert">Sorry, your passwords do not match. Please try again.</div>';
		}

		} else {
			$error.= '<div class="alert alert-danger" role="alert">Sorry, your emails do not match. Please try again.</div>';
		
	}


} 
?>

<!DOCTYPE html>
<html lang="en">
<body background="../assets/images/background2.jpg">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Games4You</title>

    
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="../storeadmin/css/style.css">
    <script type="text/javascript" src="../assets/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    
    <style type="text/css">
    .marketing{
      text-align: center;
      margin-bottom: 0px;
    }
    .divider{
      margin: 80px 0;
    }
    hr{
      border: solid 1px #eee;
    }
    .thumbnail img{
      width: 100%;
    }
    </style>
 </head>

      <nav class="navbar navbar-default navbar-inverse" style="border-radius:0px !important; margin-bottom:0px;">
        <div class="container-fluid">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php">Game4You</a>
          </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>   Shop By Platform <span class="caret"></span></a>
                <ul class="dropdown-menu">
                 <li><h5 align="center">  XBOX ONE  </h5></li>
                 <li><a href="products/xbox one games.php">Games</a></li>
                 <li><a href="products/xbox one consoles.php">Consoles</a></li>
                 <li><a href="products/xbox one accessories.php">Accessories</a></li>
                 <li role="separator" class="divider"></li>

                 <li><h5 align="center">  PS4  </h5></li>
                 <li><a href="products/ps4 games.php">Games</a></li>
                 <li><a href="products/ps4 consoles.php">Consoles</a></li>
                 <li><a href="products/ps4 accessories.php">Accessories</a></li>
                 <li role="separator" class="divider"></li>

                 <li><h5 align="center">  PC  </h5></li>
                 <li><a href="products/pc games.php">Games</a></li>
                 <li><a href="products/pc consoles.php">Consoles</a></li>
                 <li><a href="products/pc accessories.php">Accessories</a></li>
                 <li role="separator" class="divider"></li>

                 <li><h5 align="center">  Wii U  </h5></li>
                 <li><a href="products/wii games.php">Games</a></li>
                 <li><a href="products/wii consoles.php">Consoles</a></li>
                 <li><a href="products/wii accessories.php">Accessories</a></li>
                 <li role="separator" class="divider"></li>

                 <li><h5 align="center">  PSP  </h5></li>
                 <li><a href="products/psp games.php">Games</a></li>
                 <li><a href="products/psp consoles.php">Consoles</a></li>
                 <li><a href="products/psp accessories.php">Accessories</a></li>
                 <li role="separator" class="divider"></li>

                 <li><h5 align="center">  Nintendo DS  </h5></li>
                 <li><a href="products/ds games.php">Games</a></li>
                 <li><a href="products/ds consoles.php">Consoles</a></li>
                 <li><a href="products/ds accessories.php">Accessories</a></li>
                 <li role="separator" class="divider"></li>
                </ul>
               </li>
            </ul>

             <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>  Options <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a type="button" href="account.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  My Account</a></li>
            <li><a type="button" href="sign/login.php?logout=1"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>  Logout</a></li>
          </ul>
        </li>
      </ul>

            <form action="index.php" method="post" class="navbar-form navbar-left">
                <input type="text" class="form-control" name="search" placeholder="Search...">
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Search</button>
            </form>

            </ul>
              </li>
            </ul>
          </br>
          </div>
        </div>
      </nav>
</head>
<body>
<div class="box">
<div align="center" style="margin-up:100px;"id="mainWrapper">
      <h1 style="color:black;">Registration</h1>
      <form id="form" name="form" method="POST" action="register.php">
      	<h4 style="color:black";>
      	First Name:
          <input name="name" type="text" id="name" placeholder="First Name" />  
        Last Name:
          <input name="lname" type="text" id="lname" placeholder="Last Name" /> 
        Username:
          <input name="uname" type="text" id="uname" placeholder="Username" />
        Email:
          <input name="email1" type="text" id="email1" placeholder="Email" />
        Confirm Email:
          <input name="email2" type="text" id="email2" placeholder="Confirm Email" />
        Password:
       <input name="pass1" type="password" id="pass1" placeholder="Password"/>  
        Confirm Password:
          <input name="pass2" type="password" id="pass2" placeholder="Confirm Password" />
      </h4>

       <button name="submit" type="submit" id="submit" href="login.php" >Register    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
       <?php echo $error ?>
</form>
       <a type="button" class="btn btn-primary" href='login.php' ><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>  Go Back</a>
</div>
</br>



</body>

    <footer class="navbar navbar-default navbar-inverse" style="margin-bottom:0px;">
      <div align="center">
      <h4 style="color:white;">Designed By Amine Mansouri</h4>
      <h5 style="color:red;">Games4You&copy; 2016</h5>
    </div>
    </footer>

    </div>
  </body>
</html>
