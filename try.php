<?php
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
$REGTYPE=$_POST['REGTYPE'];
$FNAME=$_POST['FNAME'];
$LNAME=$_POST['LNAME'];
$EMAIL=$_POST['EMAIL'];
$PASSWORD=$_POST['PASSWORD'];
$AGE=$_POST['AGE'];
$BLOODGROUP=$_POST['BLOODGROUP'];
$SEX=$_POST['SEX'];
$MNO=$_POST['MNO'];
$ALNO=$_POST['ALNO'];
$STATE=$_POST['STATE'];
$CITY=$_POST['CITY'];
$LMARK=$_POST['LMARK'];
  $sql = "INSERT INTO user(REGTYPE,FNAME,LNAME,EMAIL,PASSWORD,AGE,BLOODGROUP,SEX,MNO,ALNO,STATE,CITY,LMARK)VALUES('$REGTYPE','$FNAME','$LNAME','$EMAIL','$PASSWORD','$AGE','$BLOODGROUP','$SEX','$MNO','$ALNO','$STATE','$CITY','$LMARK')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
<?php
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

    // Grab User submitted information
    $email = $_POST["EMAIL"];
    $pass = $_POST["PASSWORD"];

    $loginquery="select EMAIL, PASSWORD from user where EMAIL= $email";
    $result = $conn->query($loginquery);
    if ($conn->query($loginquery) === TRUE) {
        echo "queryrun";
    } else {
        echo "Error: " . $loginquery . "<br>" . $conn->error;
    }
//
//     if($row["EMAIL"]==$email && $row["PASSWORD"]==$pass)
// echo"You are a validated user.";
// else
// echo"Sorry, your credentials are not valid, Please try again.";
?>
