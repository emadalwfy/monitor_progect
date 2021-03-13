<?php




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
    <title>settings</title>
</head>
<body>
<h4 class="text-center"> settings</h4>
<form action="" method="post">
<div class="min-setings">
<label for="users">admin user name</label><br>
<input type="text" name="user_name_settings" id="users"><br>

<label for="usersemail">admin user name</label><br>
<input type="email" name="user_email_settings" id="usersemail"><br>


<label for="number_post">number post display</label><br>
<input type="number" name="number_post" id="number_post"><br>

<label for="linguage"> chose lunguage</label><br>
<select name="selectlungaue" id="">
<option value="ar">arabic</option>
<option value="en">english</option>
<option value="fr">france</option>
</select><br>
<h3 class="h3_setting"> other setting</h3>
<input type="submit" value="save setting" name="setting_sub" class="btn btn-info btn-lg  sub_setting">
</div>
</form>

    
</body>
</html>