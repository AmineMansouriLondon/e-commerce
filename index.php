<?php
include "sign/config.php";
include "search.php";
include "sign/session.php";

//Check if the user is logged in
$logged_in = "";
if (isset($_SESSION["uname"])) {
  //Print their name, give option to view cart, check account and logout.
    $logged_in .='<ul class="nav navbar-nav navbar-right">
        <li><a type="button" href="products/cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>   View Cart </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>  Hi, '. $uname. '<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a type="button" href="account.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  My Account</a></li>
            <li><a type="button" href="sign/login.php?logout=1"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>  Logout</a></li>
          </ul>
        </li>
      </ul>';
    } else {
      //Otherwise we show the login button.
      $logged_in.='<ul class="nav navbar-nav navbar-right">
        <li><a type="button" href="sign/login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>   Login </a></li>
        </li>
      </ul>';
    }
?>

<?php 

$promotions_1 = "";
$sql3 = mysql_query("SELECT * FROM home WHERE position='bottom' ORDER BY date_added DESC LIMIT 6");
$productCount3 = mysql_num_rows($sql3); // count the output amount
if ($productCount3 > 0) {
  while($row = mysql_fetch_array($sql3)){ 
             $id = $row["id"];
       $title = $row["title"];
       $category = $row["category"];
       $subcategory = $row["subcategory"];
       $img_path = $row["img_path"];
       $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
       $promotions_1 .= 
       '<div class="col-sm-4 col-md-2">
          <div class="thumbnail">
            <img src="'. $img_path .'" alt="thumb01">
            <div class="caption">
              <h3 align="center">'. $title .'</h3>
             <p align="center"><a href="products/'. $category .' '. $subcategory .'.php" class="btn btn-primary" role="button">Show Now</a></p>
            </div>
          </div>
        </div>';
          }
     } else {
        echo "We have no products listed in our store yet";
     }

     ?>
<?php

$promotions_2 = "";
$sql4 = mysql_query("SELECT * FROM home WHERE position='top' ORDER BY date_added DESC LIMIT 3");
$productCount4 = mysql_num_rows($sql4); // count the output amount
if ($productCount4 > 0) {
  while($row = mysql_fetch_array($sql4)){ 
             $id = $row["id"];
       $title = $row["title"];
       $category = $row["category"];
       $subcategory = $row["subcategory"];
       $details = $row["details"];
       $img_path = $row["img_path"];
       $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
       $promotions_2 .= 
         '<div align="center" class="col-lg-4">
          <img class="img-square" src="'. $img_path .'" alt="Generic placeholder image" width="140" height="140">
          <h2>'. $title .'</h2>
          <p>'. $details .'</p>
          <p><a class="btn btn-default" href="products/'. $category .' '. $subcategory .'.php" class="btn btn-primary" role="button">Take Me There!</a></p>
        </div>';
          }
     } else {
        echo "We have no products listed in our store yet";
     }
     mysql_close();
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

            <form action="index.php" method="post" class="navbar-form navbar-left">
                <input type="text" class="form-control" name="search" placeholder="Search...">
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Search</button>
            </form>

<?php echo $logged_in ?>

            </ul>
              </li>
            </ul>
          </br>
          </div>
        </div>
      </nav>
<nav class="navbar navbar-default navbar-default" style="border-radius:0px !important; margin-bottom:0px;">
  <ul class="nav navbar-nav">
<div align="center"><img src="assets/images/delivery.png" style="height:70px; width:150px; margin-left:5px"> </div>
</ul>
<ul class="nav navbar-nav navbar-right" style="margin-right:5px">
<img src="assets/images/paypal.gif" style="height:70px; width:250px">
</ul>
<ul class="nav navbar-nav navbar-right" style="margin-right:280px">
<img src="assets/images/sec.png" style="height:70px; width:70px">
<img src="assets/images/low.png" style="height:50px; width:250px">
<img src="assets/images/sat.png" style="height:70px; width:70px">
</ul>
    
    </nav>
    <!-- End Header -->

<?php echo $output ?>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="assets/images/banner1.jpg" alt="...">
      <div class="carousel-caption">
        <h3>..All The Latest Games..</h3>
      </div>
    </div>
    <div class="item">
      <img src="assets/images/banner2.jpg" alt="...">
      <div class="carousel-caption">
        <h3>..At Your Fingertips..</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<nav class="navbar navbar-default navbar-inverse">
<h2 style="margin-left:500px; color:white;"> Dear Gamers, Welcome Home. </h2>
  </nav>
</br>

<div class="row">

    <?php echo $promotions_2 ?>

  </div>

</br>

  <div class="row">

    <?php echo $promotions_1 ?>

  </div>

      <hr class="divider">

    <footer class="navbar navbar-default navbar-inverse" style="margin-bottom:0px;">
      <div align="center">
      <h4 style="color:white;">Designed By Amine Mansouri</h4>
      <h5 style="color:red;">Games4You&copy; 2016</h5>
      <h5><a href="storeadmin/">Go To Admin Panel</a></h5>
    </div>
    </footer>

  </body>

</html>

  </body>
</html>