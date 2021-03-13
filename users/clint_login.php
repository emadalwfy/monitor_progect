<?php
include_once  '../conectdb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/min.css">
    <title>deit category</title>
</head>
<body>
    <div class="min_dev_reg_admin">
    <div class='text-center' >
    <form action="" method="post">
 
 <h3>log in clint</h3>

<label for="user_email"> user email</label><br>
<input type="email" name="user_email" id="user_email"><br>

<label for="user_pass"> user password</label><br>
<input type="password" name="user_pass" id="user_pass"><br>


<input type="submit" value="log in " name="login_clint" class="btn btn-info btn-lg">

    </form><br>
<h3><a href="reg_user_clint.php"> register naw</a></h3>
</div>
</div>
</body>
</html>