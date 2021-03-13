<?php
// connectin host and data base

$host="localhost";
$user="root";
$pass="";
$db="monitor_project";

$coon=mysqli_connect($host,$user,$pass,$db);

if($coon){
    // echo  "yes conectin.".'<br>';
}else{
    echo "sory cannot connecting";
}
@session_start();

// insert post in table posts

if(isset($_POST['save_post'])){

    $title=$_POST['title'];
    $text_post=$_POST['text_post'];
    $file=$_POST['file'];

    if(empty($title) || empty($text_post) || empty($file) ){
     echo " require all file enter text";
    }else{
    $insertpost="INSERT INTO `posts`(`title`, `text`, `files`) 
    VALUES ('$title','$text_post', '$file')";

    $resultinsert=mysqli_query($coon,$insertpost);
    if($resultinsert){
        echo  "inser success fully";
    }else{
        echo  "failde insert ";
    }

}
}
// //////////EDIT POSTS AND UPDATE//////////////////////

if(isset($_POST['edit_post'])){

    $title=$_POST['title'];
    $text_post=$_POST['text_post'];
    $file=$_POST['file'];

    if(empty($title) || empty($text_post) || empty($file) ){
     echo " require all file enter text";
    }else{
    $edit_post="UPDATE `posts` SET `title`='$title',`text`='$text_post',`files`='$file' WHERE id='".$_GET['id']."'";

    $resultupdate=mysqli_query($coon,$edit_post);
    if($resultupdate){
        echo  "update success fully";
    }else{
        echo  "failde update ";
    }

}
}
//////// SELECT POST FOR DISPLAY   //////////////////////////
$selectpost="SELECT * FROM `posts` WHERE 1";// WHERE 1";
$resultselect=mysqli_query($coon,$selectpost);


// //// DELET POST////////////////////////////////////////////


// ////////////////INSERT PAGE  INSERT ///////////////////////

if(isset($_POST['save_page'])){

    $name_page=$_POST['name_page'];
  

    if(empty($name_page)  ){
     echo " require  file enter text";
    }else{
    $insertpage="INSERT INTO `pages`( `name_page`) VALUES ('$name_page')";

    $resultinsert=mysqli_query($coon,$insertpage);
    if($resultinsert){
        echo  "inser success fully";
    }else{
        echo  "failde insert ";
    }

}
}
//  EDIT PAGE///////////// EDIT PAGE/////////////////////////////////

if(isset($_POST['edit_page'])){

    $name_page=$_POST['name_page'];

    if(empty($name_page)  ){
     echo " require  file enter text";
    }else{

    $editpage="UPDATE `pages` SET `name_page`='$name_page'  WHERE id='".$_GET['id']."'";

    $resultiedit=mysqli_query($coon, $editpage);
    if($resultiedit){
        echo  "update page success fully";
        ob_start( );
        // echo "Hello World";
            header( "Location: ?page=all_page.php" );
            exit( 2);
      
        // header('location: ?page=all_page.php');
    }else{
        echo  "failde update page ";
    }

}
}

/////// SELECT Page  FOR DISPLAY   //////////////////////////
$selectpage="SELECT * FROM `pages` WHERE 1";// WHERE 1";
$resultselectpage=mysqli_query($coon,$selectpage);


// //////////ADD INSERT CATEGORY INSERT//////////////////////

if(isset($_POST['save_cat'])){

    $name_cat=$_POST['name_cat'];
  

    if(empty($name_cat)  ){
     echo " require  file enter text";
    }else{
    $insertcat="INSERT INTO `cat`( `name_cat`) VALUES ('$name_cat')";

    $resultinsert=mysqli_query($coon,$insertcat);
    if($resultinsert){
        echo  "inser success fully";
    }else{
        echo  "failde insert ";
    }

}
}


// /////////////////////////////
/////// SELECT Category  FOR DISPLAY   //////////////////////////
$selectcat="SELECT * FROM `cat` WHERE 1";// WHERE 1";
$resultselectcat=mysqli_query($coon,$selectcat);


//  EDIT PAGE///////////// EDIT PAGE/////////////////////////////////

if(isset($_POST['edit_cat'])){

    $name_cat=$_POST['name_cat'];

    if(empty($name_cat)  ){
     echo " require  file enter text";
    }
    else{

    $editcat="UPDATE `cat` SET `name_cat`='$name_cat'  WHERE id='".$_GET['id']."'";

    $resultiedit=mysqli_query($coon, $editcat);
    if($resultiedit){
        echo  "update page success fully";
        ob_start( );
        // echo "Hello World";
            header( "Location: ?page=all_page.php" );
            exit( 2);
      
        // header('location: ?page=all_page.php');
    }else{
        echo  "failde update page ";
    }

}
}


/////// USER ADMIN REGISTER /////////////////////////////////////////////
if(isset($_POST['reg_admin_user'])){

    $user_name=mysqli_real_escape_string($coon,$_POST['user_name']);
    $user_email=mysqli_real_escape_string($coon,$_POST['user_email']);
    $user_pass=mysqli_real_escape_string($coon,$_POST['user_pass']);
    $conf_pass=mysqli_real_escape_string($coon,$_POST['conf_pass']);

    // valdate if empty value
    if(empty($user_name)){ echo "the user name require". '<br>';}
    if(empty($user_email)){echo "the user email require". '<br>';}
    if(empty($user_pass)){echo "the user password require". '<br>';}
    if(empty($conf_pass)){echo "the conferm password  require". '<br>';}
    if($user_pass!= $conf_pass){
        echo "The two passwords do not match";
    }

    $selectusername_email="SELECT * FROM user_admin WHERE useremail='$user_email' ";
    $result_selectusername_email=mysqli_query($coon,$selectusername_email);
    $row_user_admin=mysqli_fetch_assoc($result_selectusername_email);
  if($row_user_admin){
    if($row_user_admin['useremail'] == $user_email){
   echo "the email already exists";
    }
  }
    else{
  $insert_data_user_admin="INSERT INTO user_admin(username , useremail ,userpass)VALUES
   ('$user_name','$user_email','$user_pass')";

   $query_data_admin=mysqli_query($coon,$insert_data_user_admin);
   if($query_data_admin){
     echo  $_SESSION['user_name']=$user_name;
       echo $_SESSION['success']="you are logind in";
       header("location: ../index.php");
       
   }else{
    echo mysqli_error($coon);
    echo "noo insert data";
   }
  }
}

// 
/////// USER ADMIN LOG IN /////////////////////////////////////////////
if(isset($_POST['login_admin'])){

    $user_email=mysqli_real_escape_string($coon,$_POST['user_email']);
    $user_pass=mysqli_real_escape_string($coon,$_POST['user_pass']);


    // valdate if empty value
    if(empty($user_email)){echo "the user email require". '<br>';}
    if(empty($user_pass)){echo "the user password require". '<br>';}
 
    $selectusername_email="SELECT * FROM user_admin WHERE useremail='$user_email' AND userpass='$user_pass' ";
    $result_selectusername_email=mysqli_query($coon,$selectusername_email);
    $row_user_admin=mysqli_fetch_assoc($result_selectusername_email);
  if($row_user_admin){
    if($row_user_admin['useremail'] == $user_email AND $row_user_admin['userpass'] == $user_pass){

        $_SESSION['logined']=true;
        $_SESSION['use_admin']="$user_email";
        header('location: ../index.php');

    }}
   else{
        // header('location: ../index.php');
       echo  "user email or password uncurecct";
      }
    }

     

////////////////////////////////////////////////

/////// USER CLINT REGISTER /////////////////////////////////////////////
if(isset($_POST['reg_clint_user'])){
    // $user_name= $_POST['user_name'];
    // $user_email= $_POST['user_email'];
    // $user_pass= $_POST['user_pass'];
    // $conf_pass= $_POST['conf_pass'];

    $user_name=mysqli_real_escape_string($coon,$_POST['user_name']);
    $user_email=mysqli_real_escape_string($coon,$_POST['user_email']);
    $user_pass=mysqli_real_escape_string($coon,$_POST['user_pass']);
    $conf_pass=mysqli_real_escape_string($coon,$_POST['conf_pass']);

    // valdate if empty value
    if(empty($user_name)){ echo "the user name require". '<br>';}
    if(empty($user_email)){echo "the user email require". '<br>';}
    if(empty($user_pass)){echo "the user password require". '<br>';}
    if(empty($conf_pass)){echo "the conferm password  require". '<br>';}
    if($user_pass!= $conf_pass){
        echo "The two passwords do not match";
    }
    $selectusername_email="SELECT * FROM clint_user WHERE useremail='$user_email' ";
    $result_selectusername_email=mysqli_query($coon,$selectusername_email);
    $row_user_admin=mysqli_fetch_assoc($result_selectusername_email);
  if($row_user_admin){
    if($row_user_admin['useremail'] == $user_email){
   echo "the email already exists".'<br>';
    }
}else{
    
        $insert_clint_data="INSERT INTO `clint_user`( `username`, `useremail`, `userpass`) VALUES
        ('$user_name','$user_email','$user_pass')";
   
       $result=mysqli_query($coon,$insert_clint_data);
       if($insert_clint_data){
           echo "insert successfully";
       }else{
           echo mysqli_error($coon);
       }
    }
}

 
/////// USER Clinte LOG IN /////////////////////////////////////////////
if(isset($_POST['login_clint'])){

    $user_email=mysqli_real_escape_string($coon,$_POST['user_email']);
    $user_pass=mysqli_real_escape_string($coon,$_POST['user_pass']);


    // valdate if empty value
    if(empty($user_email)){echo "the user email require". '<br>';}
    if(empty($user_pass)){echo "the user password require". '<br>';}
 
    $selectusername_email="SELECT * FROM clint_user WHERE useremail='$user_email' AND userpass='$user_pass' ";
    $result_selectusername_email=mysqli_query($coon,$selectusername_email);
    $row_user_admin=mysqli_fetch_assoc($result_selectusername_email);
  if($row_user_admin){
    if($row_user_admin['useremail'] == $user_email AND $row_user_admin['userpass'] == $user_pass){
      header('location: ../index.php');

    }
}else{
    // elseif($row_user_admin['useremail'] != $user_email OR $row_user_admin['userpass'] != $user_pass){
        // header('location: ../index.php');
       echo  "user email or password uncurecct";
      }
    
}