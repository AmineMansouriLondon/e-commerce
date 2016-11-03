<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<body background="images/background1.jpg">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Games4You</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

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
  <body>
    <!-- Header -->
      <nav class="navbar navbar-default navbar-inverse" style="border-radius:0px !important; margin-bottom:0px;">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Game4You</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
             
              </li>
             </li>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
              <a class="btn btn-default" href='admin_login.php?logout=1'>Logout</a>
            </form>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!-- End Header -->

    
    <hr class="divider">
      <div class="row">
        <div align="center">

        
              <h3>Hello <?php echo $manager ?>, what would you like to do today?</h3>
              <h4>Manage Inventory:</h4>
              <p><a href="inventory_list.php" class="btn btn-primary" role="button">Click Here</a></p>
            </div>
          </div>
       </div>

    <!-- End Product Thumbnail -->
    <hr class="divider">

    <footer>
      <p class="pull-right"><a href="#">Back To Top</a></p>
      <p>Designed By Amine Mansouri . <a href="#">Privacy</a> . <a href="#">Terms</a></p>
    </footer>
    </div>
    <!-- End Marketing -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>