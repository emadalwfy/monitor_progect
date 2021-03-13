<?php
include_once  'conectdb.php';
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
    <title>add page</title>
</head>
<body>
    <div class='min-cat'>
    <form action="" method="post">
    <h3> add category </h3>
<label for="page"></label>
<input type="text" name="name_cat" placeholder="enter name cat"><br><br>

<input type="submit" value="save category" name="save_cat" class="btn btn-success">
    </form>

</div>
</body>
</html>