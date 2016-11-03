<?php 
session_start();
if (isset($_SESSION["manager"])) {
    header("location: index.php"); 
    session_destroy();
    exit();
}
if(isset($GET['logout'])){
  session_unset();
  session_destroy();
}
?>
<?php 
// Parse the log in form if the user has filled it out and pressed "Log In"
if (isset($_POST["username"]) && isset($_POST["password"])) {

	  $manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["username"]); // filter everything but numbers and letters
    $password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password"]); // filter everything but numbers and letters
    // Connect to the MySQL database  
    include "../sign/config.php"; 
    $sql = mysql_query("SELECT id FROM admin WHERE username='$manager' AND password='$password' LIMIT 1"); // query the person
    // MAKE SURE PERSON EXISTS IN DATABASE 
    $existCount = mysql_num_rows($sql); // count the row nums
    if ($existCount == 1) { // evaluate the count
	     while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
		 }
		 $_SESSION["id"] = $id;
		 $_SESSION["manager"] = $manager;
		 $_SESSION["password"] = $password;
		 header("location: index.php");
         exit();
    } else {
		echo 'That information is incorrect, please try again <a href="index.php">Click Here</a>';
		exit();
	} 
}

?>

<!DOCTYPE html>
<body background="images/background1.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>Admin Log In </title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="box">
<div align="center" style="margin-up:100px;"id="mainWrapper">
      <h1>Please Log In to manage the Store</h1>
      <p>
      <form id="form1" name="form1" method="post" action="admin_login.php">
        Username:<br />
          <input name="username" type="text" id="username" size="40" placeholder="Username" />
        Password:<br />
       <input name="password" type="password" id="password" size="40" placeholder="Password"/>       
       <button name="login" type="submit" id="login" >Log In</button>
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
       