<?php
    $EMAIL=$_POST['EMAIL'];
    $PASSWORD=$_POST['PASSWORD'];

    $servername = "localhost";
    $username = "username";
    $password = "";
    $dbname = "bloodbank";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query=mysqli_query(success,"SELECT * FROM user WHERE EMAIL='".$EMAIL."' AND PASSWORD='".$PASSWORD."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbEMAIL=$row['EMAIL'];
    $dbPASSWORD=$row['PASSWORD'];
    }

    if($EMAIL == $dbEMAIL && $PASSWORD == $dbPASSWORD)
    {
    session_start();
    $_SESSION['sess_user']=$EMAIL;

    /* Redirect browser */
    header("Location: search.php");
    }
    } else {
    echo "Invalid username or password!";
    }
?>
