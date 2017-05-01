
<?php
include('session_admin.php');

?>




<html>
<head>
 <link href="css1.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link href="css1.css" rel="stylesheet" />

</head>
<body>
<ul>
   <li class="active"><a href="adminhome.php">Home</a></li>
  <li><a href="adminquery.php">Get Data</a></li>
  <li><a href="#">Download</a></li>
  <li><a href="#">Demos</a></li>
  <li><a href="#">Help</a></li>
  <li class="right"><a href="admin_logout.php">logout</a></li>
</ul>
<br />
<br />
<br />
<br />
	<form action="test.php" method="post">
			<input type="checkbox" name="check_list[]" value="rollno">Roll Number<br/>
			<input type="checkbox" name="check_list[]" value="name">Name of student<br/>
			<input type="checkbox" name="check_list[]" value="gender">Gender<br/>
			<input type="checkbox" name="check_list[]" value="dob">Date of Birth<br/>
			<input type="checkbox" name="check_list[]" value="ssc_per">SSC Percentage<br/>
			<input type="checkbox" name="check_list[]" value="ssc_school">SSC School<br/>
			<input type="checkbox" name="check_list[]" value="ssc_board">SSC Board<br/>
			<input type="checkbox" name="check_list[]" value="inter_per">Inter Percentage<br/>
			<input type="checkbox" name="check_list[]" value="inter_college">Inter College<br/>
			<input type="checkbox" name="check_list[]" value="inter_board">Inter Board<br/>
			<input type="checkbox" name="check_list[]" value="ug_per">UG Percentage<br/>
			<input type="checkbox" name="check_list[]" value="backlogs">Backlogs<br/>
			<input type="checkbox" name="check_list[]" value="aadhaar">Aadhaar No<br/>
			<input type="checkbox" name="check_list[]" value="branch">Branch<br/>
			<input type="checkbox" name="check_list[]" value="passport">Passport<br/>
			 <select name="branch">
			 <option value="Computer Science & Engineering">Computer Science & Engineering</option>
			 <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
			 <option value="Civil Engineering">Civil Engineering</option>
			 <option value="Mechanical Engineering">Mechanical Engineering</option>
			 <option value="Information Technology">Information Technology</option>
			 <option value="Electronics and Communication Enginering">Electronics and Communication Enginering</option>
			 </select>
			
			<input type="submit" />
	</form>



</body>

</html>
