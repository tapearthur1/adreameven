

<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';
?>

<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style></style>
    <link href="css/style.css" rel="stylesheet">
    
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resource/">
          <meta name="msapplication-config" content="/partials/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
  </head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Adreamevents</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <ul class="nav navbar-nav"><i class="hide"><?php echo guard(); ?></i>
            <li><a href="index.php">Home</a></li>
            <?php if((isset($_SESSION['username']) || isCookieValid($db))): ?>
                <li><a href="profile.php">My Profile</a></li>
                <li><a href="members.php">Members</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
              <!--  <li><a href="#about">About</a></li>-->
                <li><a href="members.php">Members</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign up</a></li>
            <?php endif ?>
        </ul>
        <li><a href="signup.php"><span class="glyphicon glyphicon-search"></span></a></li>
    
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
