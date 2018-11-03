<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "inp";
$firstname = $_POST['firstname'];
$userid = $_POST["userid"];
$psw = $_POST['psw'];
$usrtel = $_POST['usrtel'];
$bday = $_POST['bday'];
$collegename = $_POST['collegename'];
$branch = $_POST['branch'];
$email = $_POST['email'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  $sql = "INSERT INTO `user1`(name, userid, password, contact, dob, clg, branch, email) VALUES ('$firstname', '$userid', '$psw', '$usrtel', '$bday', '$collegename', '$branch', '$email')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      header("Location: mhome.php", true, 301);
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
//$sql = mysqli_query("INSERT INTO `user!` (`firstname`, `userid`, `psw`, `usrtel`, `bday`, `collegename`, `branch`, `email`) VALUES ($firstname, $userid, $psw, $usrtel, $bday, $collegename, $branch, $email));
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
//if ($conn->query($sql) === TRUE) {
   // $last_id = $conn->insert_id;
   // echo "New record created successfully. Last inserted ID is: " . $last_id;
//} else {
 //   echo "Error: " . $sql . "<br>" . $conn->error;
//}

?>
