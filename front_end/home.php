<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/min.css">
    <title>home page</title>
</head>
<body class="body_home_page">
<!-- start navbar -->
<div class="div_home_page">
<nav class="navbar navbar-expand-lg navbar-deeppink bg-deeppink">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="front_end/home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
<!-- end nav bar -->
<div class="text-center home_evnts">
    <h3 class="h3_text_home">be the first to know the products</h3>
    <br>
    <h4 class="h4_home_page">log in</h4>
    <form action="" method="post">
    <input type="email" name="email_user" placeholder="enter you email" autocomplate="off"><br>
    <br>
    <input type="password" name="pass_user" placeholder="enter password"><br><br>
     <input type="submit" value="log in" name="sub_log_home_page" class="btn btn-success btn-lg">
    </form>

    <h4 class="h4_home_page">Connect with us via</h4>
    <ul class="text-center ul_home_page">
        <li class="li_home_page">
        <a href="#" class="a_home_page">facebook</a>
        </li>
        <li class="li_home_page">
        <a href="#" class="a_home_page">twiter</a>
        </li>
        <li class="li_home_page">
        <a href="#" class="a_home_page">instgram</a>
        </li>
        <li class="li_home_page">
        <a href="#" class="a_home_page">snapchat</a>
        </li>
    </ul>
  <h1>welcom git hub</h1>
</div>

<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>