<?php

include_once "conectdb.php";

$delet="DELETE FROM `posts` WHERE id='".$_GET['id']. "' ";
$resultdel=mysqli_query($coon,$delet)or die (mysqli_error($coon));
if($resultdel)
{
    // echo "yes delwt";
    // header("location:?page=posts/allposts.php");
    header("location:?page=Monitor_products/posts/all_post.php");
    // header('location: posts/all_post.php');
    // exit();
// header("Refresh:1 ;posts/all_post.php");
}
else{
    echo "no delet";

}


// code page php
if(@$_GET['page']){
    $url=@$_GET['page'];
    if(is_file($url)){
        include_once $url;
    }else{
        echo "not found get";
    }
}