<HTML>
  <HEAD>
    <TITLE>REGISTRATION PAGE </TITLE>
    <link rel="stylesheet" href="registration.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </HEAD>
  <BODY>

    <div class="sidebar">
    <a href="home.php"><i class="fa fa-fw fa-home" style="font-size:48px"></i> HOME</a>
    <a href="search.php"><i class="fa fa-fw fa-search" style="font-size:48px"></i> SEARCH</a>
    <a href="registration.php"><i class="fa fa-fw fa-user" style="font-size:48px"></i> REGISTER</a>
    <a href="contactus.php"><i class="fa fa-fw fa-envelope" style="font-size:48px"></i> CONTACT</a>
      </div>
    <div class="topnav topbar" id="myTopnav">
      <a href="home.php"><b id="tp2"><img id="logo" src="somaiyalogo.png" alt="somaiya trust" height="50px" > SOMAIYA </b><b id="tp">BLOOD</b><b id="tp2">BANK</b></a>
      <a href="login.php" class="topright navlinkh" id="nava">Login</a>
    </div>

    <DIV class="container">
      <br>
      <H2>REGISTRATION</H2>
      <hr>
      <FORM method="post" action="try.php">
	    <P>
          <INPUT class="radsp" NAME="REGTYPE" TYPE="RADIO" VALUE="DONOR">DONOR
          <INPUT class="radsp" NAME="REGTYPE" TYPE="RADIO" VALUE="RECEIVER">RECEIVER
        </P>
        <p>
          <LABEL class="lab">First Name</LABEL>
          <INPUT TYPE="TEXT" name="FNAME" PLACEHOLDER="FIRST NAME" REQUIRED>
        </p>
        <P>
          <LABEL class="lab">Last Name</LABEL>
          <INPUT TYPE="TEXT" name="LNAME" PLACEHOLDER="LAST NAME" REQUIRED>
        </P>
        <P>
          <LABEL class="lab">Email</LABEL>
          <INPUT TYPE="EMAIL" name="EMAIL" PLACEHOLDER="EMAIL" REQUIRED>
        </P>
        <P>
          <LABEL class="lab">Password</LABEL>
          <INPUT TYPE="PASSWORD" name="PASSWORD" PLACEHOLDER="PASSWORD" REQUIRED>
        </P>
        <P>
          <LABEL class="lab">Age</LABEL>
          <INPUT TYPE="NUMBER" name="AGE" PLACEHOLDER="AGE" REQUIRED>
        </P>
        <p>
          <LABEL class="lab">Blood Group</LABEL>
          <SELECT name="BLOODGROUP" >
            <OPTION>A+</OPTION>
            <OPTION>A-</OPTION>
            <OPTION>B+</OPTION>
            <OPTION>B--</OPTION>
            <OPTION>AB+</OPTION>
            <OPTION>AB-</OPTION>
            <OPTION>O+</OPTION>
            <OPTION>O-</OPTION>
          </SELECT>
        </p>
        <P>
          <LABEL class="lab">Sex</LABEL>
          <INPUT class="radsp" NAME="SEX" TYPE="RADIO" VALUE="MALE">MALE
          <INPUT class="radsp" NAME="SEX" TYPE="RADIO" VALUE="FEMALE">FEMALE
        </P>

        <H2>CONTACT DETAILS</H2>
        <hr>
        <P>
          <LABEL class="lab">Mobile Number</LABEL>
          <INPUT TYPE="NUMBER" name="MNO" PLACEHOLDER="MOBILE NUMBER" REQUIRED>
        </P>

        <P>
          <LABEL class="lab">Alternate Number</LABEL>
          <INPUT TYPE="NUMBER" name="ALNO" PLACEHOLDER="Alt. NUMBER" >
        </P>

        <H2>LOCATION DETAILS</H2>
        <hr>
        <P>
          <LABEL class="lab">State</LABEL>
          	<select name="STATE">
			<option selected disabled value="">------------Select State------------</option>
			<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
			<option value="Andhra Pradesh">Andhra Pradesh</option>
			<option value="Arunachal Pradesh">Arunachal Pradesh</option>
			<option value="Assam">Assam</option>
			<option value="Bihar">Bihar</option>
			<option value="Chandigarh">Chandigarh</option>
			<option value="Chhattisgarh">Chhattisgarh</option>
			<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
			<option value="Daman and Diu">Daman and Diu</option>
			<option value="Delhi">Delhi</option>
			<option value="Goa">Goa</option>
			<option value="Gujarat">Gujarat</option>
			<option value="Haryana">Haryana</option>
			<option value="Himachal Pradesh">Himachal Pradesh</option>
			<option value="Jammu and Kashmir">Jammu and Kashmir</option>
			<option value="Jharkhand">Jharkhand</option>
			<option value="Karnataka">Karnataka</option>
			<option value="Kerala">Kerala</option>
			<option value="Lakshadweep">Lakshadweep</option>
			<option value="Madhya Pradesh">Madhya Pradesh</option>
			<option value="Maharashtra">Maharashtra</option>
			<option value="Manipur">Manipur</option>
			<option value="Meghalaya">Meghalaya</option>
			<option value="Mizoram">Mizoram</option>
			<option value="Nagaland">Nagaland</option>
			<option value="Orissa">Orissa</option>
			<option value="Pondicherry">Pondicherry</option>
			<option value="Punjab">Punjab</option>
			<option value="Rajasthan">Rajasthan</option>
			<option value="Sikkim">Sikkim</option>
			<option value="Tamil Nadu">Tamil Nadu</option>
			<option value="Tripura">Tripura</option>
			<option value="Uttaranchal">Uttaranchal</option>
			<option value="Uttar Pradesh">Uttar Pradesh</option>
			<option value="West Bengal">West Bengal</option>
		</select>
        </P>

        <P>
          <LABEL class="lab">City</LABEL>
          <INPUT TYPE="TEXT" name=" CITY" PLACEHOLDER="CITY" REQUIRED>
        </P>

        <P>
          <LABEL class="lab">Landmark</LABEL>
          <INPUT TYPE="TEXT" name="LMARK" PLACEHOLDER="LANDMARK" REQUIRED>
        </P>
        <input type="submit">
      </FORM>
    </DIV>
    <div id="fixbot" class="container-fluid">
      <h2 id="ContactUs">REACH US:</h2>
      <hr color="#f2f2f2">
      Address: Somaiya Ayurvihar ,Sion (W) , Mumbai - 400022.<br>
      Contact <br>
      Phone : 9123456789 <br>
      Email: bloodbank@somaiya.edu
    </div>

  </BODY>
</HTML>
ss
