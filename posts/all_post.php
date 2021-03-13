<?php
include_once  "conectdb.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all post</title>
</head>
<body>
    <h2 class="text-center">all post</h2>
<table class="table table-bordered">
  <thead>

    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">text</th>
      <th scope="col">files</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELET</th>
    </tr>

  </thead>
  <tbody>
  <?php   while($row=mysqli_fetch_assoc($resultselect)){   ?>
    <tr>
      <th scope="row"><?php echo $row['id'];   ?></th>
      <td><?php echo $row['title'];   ?></td>
      <td><?php echo $row['text'];   ?></td>
      <td><?php echo $row['files'];   ?></td>
      <td><a href="?page=posts/edit_post.php&id=<?php echo $row['id'];   ?>">EDIT</a></td>
      <td><a href="?page=posts/delet_post.php &id=<?php echo $row['id'];   ?>">delet</a></td>
    </tr>
    <?php   }?>
    
    </tr> 
  </tbody>
</table>
</body>
</html>