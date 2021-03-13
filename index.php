<?php

include_once "session.php";

  @session_start(); 
 if(isset($_SESSION['use_admin'])){
   $username=$_SESSION['use_admin'];
   session_write_close();
  //  header("location: index.php");
 }else{
  //  session_unset();
  echo "you not fund sseion";
  header("location: users/login_admin.php");
   session_write_close();
   session_unset();
 }


// session_unset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/min.css">
    <title>index monitor products</title>
</head>
<body>
    <!-- start nav bar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
    <!-- end nav bar -->
<!-- start  aside bar -->
<aside></aside>
<div class="container">
<div class="row">
<div class="col-sm-2">
<div class="min-aside">

<!-- <ul class="ul-aside">  -->
<li class="li-aside">
<a href="front_end/home.php" class="a-aside"> Home</a>
</li>
<!-- psts aside -->
<div class="accordion" id="accordionExample">
  <div class="card" >
    <div class="card-header" id="headingOne">
      <h2 class="mb-3">
        <button class="btn btn-link" id="btnlink" type="button" data-toggle="collapse" data-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
          POSTS
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <li>
<a href="?page=posts/add_post.php">add post</a>
</li>
<li>
<!-- <a href="?page=posts/edit_post.php">edit post</a> -->
</li>
<li>
<a href="?page=posts/all_post.php">all post</a>
</li>
      <!-- </div> -->
    </div>
  </div>
 

 <!-- pages asise -->


 <div class="accordion" id="accordionExample">
  <div class="card" id="headingone">
    <!-- <div class="card-header" id="headingone"> -->
      <h2 class="mb-3">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsepages"
        aria-expanded="true" id="btnlink" aria-controls="collapse">
        Pages
        </button>
      </h2>
    </div>
    <div id="collapsepages" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <li>
<a href="?page=pages/add_page.php">add pages</a>
</li>
<li>
<!-- <a href="?edit=category/editcat.php">edit pages</a> -->
</li>
<li>
<a href="?page=pages/all_page.php">all pages</a>
</li>
      </div>
    </div>
  </div>
  </div>

<!-- categoris -->
 <div class="accordion" id="accordionExample">
  <div class="card" >
    <div class="card-header" id="headingone">
      <h2 class="mb-3">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetow"
        aria-expanded="true" id="btnlink" aria-controls="collapse">
        catgory
        </button>
      </h2>
    </div>
    <div id="collapsetow" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <li>
<a href="?page=category/add_cat.php">add ctegory</a>
</li>
<li>
<!-- <a href="?edit=category/editcat.php">edit cat</a> -->
</li>
<li>
<a href="?page=category/all_cat.php">all cat</a>
</li>
      </div>
    </div>
  </div>
  </div>
    
<!-- users -->
<div class="accordion" id="accordionExample">
  <div class="card" >
    <div class="card-header" id="headingone">
      <h2 class="mb-3">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseusers"
        aria-expanded="true" id="btnlink" aria-controls="collapse">
        Users
        </button>
      </h2>
    </div>
    <div id="collapseusers" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <li>
<a href="users/user_admin.php">user admin</a>
</li>
<li>
<a href="users/login_admin.php">log in admin</a>
</li>
<li>
<a href="users/reg_user_clint.php"> reg_user_clint</a>
</li>
<li>
<a href="users/clint_login.php"> login clint</a>
</li>
      </div>
    </div>
  </div>
  </div>
<!--   ANALAYTISE -->
<li class="li-aside">
<a href="?page=analytise.php" class="a-aside"> ANALAYTISE</a>
</li>

<!-- settings -->
<li class="li-aside">
<a href="?page=settings.php" class="a-aside"> Settings</a>
</li>

</div>
</div>
</div>

<!-- ///////////// -->
<div class="col-sm-9">
<?php
    if(@$_GET['page']){
      $url=@$_GET['page'];
      if(is_file($url)){
        include_once $url;
      }else{
        echo "not found get";
      }
    }
?>
</div>
</div>
</div>
</aside>
<!-- end  aside bar -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>