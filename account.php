<?php
include "sign/config.php";
include "search.php";
include "sign/session.php";
?>

<?php
$info = "";
$info2 = "";
$confirm = "";

$sql3 = mysql_query("SELECT * FROM users WHERE uname='$uname'");
$productCount3 = mysql_num_rows($sql3); // count the output amount
if ($productCount3 > 0) {
  while($row = mysql_fetch_array($sql3)){ 
       $id = $row["id"];
       $fname = $row["name"];
       $lname = $row["lname"];
       $uname = $row["uname"];
       $address = $row["address"];
       $email = $row["email"];
       $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
       $info .= 
      ' <div align="center">
       <h4> First Name: <h5>'. $fname .'<h5> </br>
       <h4> Last Name: <h5>'. $lname .'<h5> </br>
       <h4> Username: <h5>'. $uname .'<h5> </br>
       <h4> Address: <h5>'. $address .'<h5> </br>
       <h4> Email: <h5>'. $email .'<h5> </br>
        </div>';

        $info2.="<div align='center'><form action='account.php' method='post'>
       <h4> First Name: <h5><input id='name' type='text' name='name' value='$fname'></input><h5> </br>
       <h4> Last Name: <h5><input id='lname' name='lname' value='$lname'></input><h5> </br>
       <h4> Username: <h5><input id='uname' name='uname' value='$uname'></input><h5> </br>
       <h4> Address: <h5><textarea id='address' name='address'>$address</textarea><h5> </br>
       <h4> Email: <h5><input id='email' name='email' value='$email'></input><h5> </br>
       <button id='submit' type='submit' class='btn btn-default'>Change Now</button></br> </br>
       <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button> </br>
        </div></form>";
          }
     } else {
        echo "Error";
     }

      if (isset($_POST['name'])) {
      $fname = mysql_real_escape_string($_POST['name']);
      $lname = mysql_real_escape_string($_POST['lname']);
      $uname = mysql_real_escape_string($_POST['uname']);
      $email = mysql_real_escape_string($_POST['email']);
      $sql = mysql_query("UPDATE users SET name='$fname', lname='$lname', uname='$uname', email='$email' WHERE id='$id'");
      $confirm.="<div align='center' class='alert alert-success' role='alert'><h4>Successfully Changed.</h4></div>
                 <meta http-equiv='refresh' content='3;url=account.php'>";
      }
?>


<!DOCTYPE html>
<html lang="en">
<body background="assets/images/background1.jpg">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Games4You</title>

    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
    <script type="text/javascript" src="assets/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <style type="text/css">

    <style type="text/css">
    .marketing{
      text-align: center;
      margin-bottom: 20px;
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
            <a class="navbar-brand" href="index.php">Game4You</a>
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
        <li><a type="button" href="products/cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>   View Cart </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>  Hi, <?php echo $uname ?><span class="caret"></span></a>
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

      <h2 align="center" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Account <h2>
      </br>
      <div align="center"><img src="assets/images/user.png"></img></div>
    </br>
    </br>

    <?php echo $info ?>
    <?php echo $confirm ?>

<!-- Button trigger modal -->
<div align='center'>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Edit Account</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Account</h4>
      </div>
      <div class="modal-body">
        <?php echo $info2 ?>
      </div>
      </div>
    </div>
    </div>
    </div>
        </div>
    </div>


      <hr class="divider">

    <footer class="navbar navbar-default navbar-inverse" style="margin-bottom:0px;">
      <div align="center">
      <h4 style="color:white;">Designed By Amine Mansouri</h4>
      <h5 style="color:red;">Games4You&copy; 2016</h5>
    </div>
    </footer>

  </body>

</html>

  </body>
</html>