<?php

include_once  "conectdb.php"; 
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
    <title>add_post</title>
</head>

<body>
<div class="row">
<div class="col-sm-5">


<form action="" method="post">
    <!--title   -->
    <div class="min-post">
    <label for="title"><h3>add new title</h3></label><br>
    <input type="text" name="title" id="title"><br>

    
    <label for="text"><h3>add new text</h3></label><br>
    <textarea name="text_post" id="text" cols="30" rows="10"></textarea><br>

    <label for="fileup"><h3>add image or vedio</h3></label><br>
    <input type="file" name="file" id="fileup">

    </div>
</div>
<div class="col-sm-4">
<div class="page_cat_post">
  <!-- check box page -->
  <h3> add to pages</h3><hr>
  <label for="pages"><b>page1</b></label>
  <input type="checkbox" name="pages" id="pages" value="page1"><br>
  
  <label for="pages"><b>page1</b></label>
  <input type="checkbox" name="pages" id="pages" value="page1"><br>
  
  <label for="pages"><b>page1</b></label>
  <input type="checkbox" name="pages" id="pages" value="page1"><br>
  <hr>
  <!-- //////////// check box categoris -->
  <h3> add category </h3><hr>
  
  <label for="pages"><b>page1</b></label>
  <input type="checkbox" name="pages" id="pages" value="page1"><br>
  
  <label for="pages"><b>page1</b></label>
  <input type="checkbox" name="pages" id="pages" value="page1"><br>
  
  <label for="pages"><b>page1</b></label>
  <input type="checkbox" name="pages" id="pages" value="page1"><br>
<br><br>
<input type="submit"  name="save_post" value="puplisher" class="btn btn-info btn-lg">
</div>
</div>
    </form>
    </div>
</div>


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>