<?php
session_start();
define("APPURL", "http://localhost/Forum%20Pro");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome To Forum</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo APPURL; ?>/css/bootstrap.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo APPURL; ?>/css/custom.css" rel="stylesheet">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo APPURL; ?>/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo APPURL; ?>">Forum</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="<?php echo APPURL; ?>">Home</a></li>
          <?php if (isset($_SESSION['username'])): ?>
            <li><a href="<?php echo APPURL; ?>/topics/create.php">Create Topic</a></li>
          <?php endif; ?>
            <?php if (isset($_SESSION['username'])): ?>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <?php echo htmlspecialchars($_SESSION['username']); ?>
              <span class="caret"></span>
            </a>
            <?php else: ?>
            <?php endif; ?>
        

            <?php if (isset($_SESSION['username'])): ?>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="<?php echo APPURL; ?>/auth/logout.php">Logout</a></li>
              </ul>
            <?php else: ?>

                <li><a href="<?php echo APPURL; ?>/auth/register.php">Register</a></li>
                <li><a href="<?php echo APPURL; ?>/auth/login.php">Login</a></li>

            <?php endif; ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>