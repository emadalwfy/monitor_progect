<?php

include_once "conectdb.php";


$deletcat="DELETE FROM `cat` WHERE id='".$_GET['id']. "' ";
$resultdelcat=mysqli_query($coon,$deletcat)or die (mysqli_error($coon));
if($resultdelcat)
{
    echo "yes delet";
  header("location: ?page=category/all_cat.php");
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