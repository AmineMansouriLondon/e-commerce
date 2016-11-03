<?php 
require('config.php');

if(isset($_POST ['submit'])){

	//Perform verification 

	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];

	if($email1 == $email2){
		if($pass1 == $pass2){
			//Carry on

		$name = mysql_escape_string($name);
		$lname = mysql_escape_string($_POST['lname']);
		$uname = mysql_escape_string($_POST['uname']);
		$email1 = mysql_escape_string($email1);
		$email2 = mysql_escape_string($email2);
		$pass1 = mysql_escape_string($pass1);
		$pass2 = mysql_escape_string($pass2);

		//Password hashing
		$pass1 = md5($pass1);

		$sql = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname'");
		if(mysql_num_rows($sql) > 0){
			echo "Sorry, that user already exists. ";
			exit();
		}

		mysql_query("INSERT INTO `users` (`id`, `name`, `lname`, `uname`, `email`, `pass`) VALUES(NULL, '$name', '$lname', '$uname', '$email1', '$pass1')") or die(mysql_error());


		} else {
			echo "Sorry, your passwords do not match. ";
			exit();
		}

		} else {
			echo "Sorry, your email's do not match. ";
		
	}


} 
?>

<!DOCTYPE html>
<body background="../storeadmin/images/background1.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>Admin Log In </title>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../storeadmin/css/style.css">
</head>
<body>
<div class="box">
<div align="center" style="margin-up:100px;"id="mainWrapper">
      <h1>Registration</h1>
      <p>
      <form id="form" name="form" method="POST" action="register.php">
      	First Name:<br />
          <input name="name" type="text" id="uname" size="40" placeholder="First Name" />
        Last Name:<br />
          <input name="lname" type="text" id="lname" size="40" placeholder="Last Name" />
        Username:<br />
          <input name="uname" type="text" id="uname" size="40" placeholder="Username" />
        Email:<br />
          <input name="email1" type="text" id="email1" size="40" placeholder="Email" />
        Confirm Email:<br />
          <input name="email2" type="text" id="email2" size="40" placeholder="Confirm Email" />
        Password:<br />
       <input name="pass1" type="password" id="pass1" size="40" placeholder="Password"/>  
        Confirm Password:<br />
          <input name="pass2" type="password" id="pass2" size="40" placeholder="Confirm Password" />

       <button name="submit" type="submit" id="submit" href="login.php" >Register</button>
        <p>
</form>

    <hr class="divider">

    <footer>
      <p class="pull-right"><a href="#">Back To Top</a></p>
      <p>Designed By Amine Mansouri . <a href="#">Privacy</a> . <a href="#">Terms</a></p>
    </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
