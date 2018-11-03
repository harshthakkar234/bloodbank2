<?php
session_start();
    $con=mysqli_connect('localhost','root','','inp') or die(mysql_error());

if (!$con){
 die("Database Connection Failed" . mysqli_error($con));
}


// if(isset($_POST['']) && isset($_POST['PASSWORD'])) {
//     $EMAIL=$_POST['EMAIL'];
//     $PASS=$_POST['PASSWORD'];
//     $PASSWORD=md5($PASS);
//
//
//
//
//     $query="SELECT * FROM `user` WHERE `EMAIL`='$EMAIL' AND `PASSWORD`='$PASSWORD';";
//     $result = mysqli_query($con, $query) or die(mysqli_error($con));
//     $row = mysqli_fetch_assoc($result);
//     $count = mysqli_num_rows($result);
//
//     if($count == 1)
//     {
//
//     $_SESSION['login_user']=$EMAIL;
//    die(header("location: search.php"));
//     }
//
//      else {
//     echo "Invalid username or password!"  .mysqli_error($con);
//     echo $PASSWORD;
//     }
//
// }
if(isset($_POST['userid']) && isset($_POST['psw'])) {
    $userid=$_POST['userid'];
    $psw=$_POST['psw'];
    $query="SELECT * FROM `user1` WHERE `userid`='$userid' AND `password`='$psw';";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if($count == 1)
    {
    $_SESSION['login_user']=$userid;
   die(header("location: mhome.php"));
    }
     else {
    echo "Invalid username or password!"  .mysqli_error($con);
    echo $psw;
    }
}
?>
