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
    <title>deit page</title>
</head>
<body>
    <div class='min-page'>
    <form action="" method="post">
    <h3> edit page </h3>
<label for="page"></label>
<input type="text" name="name_page" placeholder="enter name page"><br><br>

<input type="submit" value="save post" name="edit_page" class="btn btn-success">
    </form>

</div>
</body>
</html>