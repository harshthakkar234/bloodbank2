<?php
session_start();
    $con=mysqli_connect('localhost','root','','bloodbank') or die(mysql_error());

if (!$con){
 die("Database Connection Failed" . mysqli_error($con));
}


if(isset($_POST['EMAIL']) && isset($_POST['PASSWORD'])) {
    $EMAIL=$_POST['EMAIL'];
    $PASS=$_POST['PASSWORD'];
    $PASSWORD=md5($PASS);




    $query="SELECT * FROM `user` WHERE `EMAIL`='$EMAIL' AND `PASSWORD`='$PASSWORD';";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if($count == 1)
    {

    $_SESSION['login_user']=$EMAIL;
   die(header("location: search.php"));
    }

     else {
    echo "Invalid username or password!"  .mysqli_error($con);
    echo $PASSWORD;
    }

}
?>
