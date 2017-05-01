<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!$db)
	{
		echo "database error".mysqli_error($db);
	}
	else
	{


		$rollno=$_POST["rollno"];
	    $name=$_POST["name"];
	    $gender=$_POST["gender"];
		$password=md5($_POST["password"]);
		
	    $dob=$_POST["dob"];
	    $ssc_per=$_POST["ssc_per"];
	    $ssc_school=$_POST["ssc_school"];
	    $ssc_board=$_POST["ssc_board"];
	    $inter_per=$_POST["inter_per"];
	    $inter_college=$_POST["inter_college"];
	    $inter_board=$_POST["inter_board"];
	    $ug_per=$_POST["ug_per"];
	    $backlogs=$_POST["backlogs"];
	    $email=$_POST["email"];
	    $contact=$_POST["contact"];
	    $aadhaar=$_POST["aadhaar"];
	    $passport=$_POST["passport"];
	    $branch=$_POST["branch"];

	  if(empty($rollno) || empty($name) || empty($password) || empty($gender) ||
			empty($branch) || empty($email) || empty($aadhaar) || empty($inter_per) || 
			empty($inter_board) || empty($inter_college) || empty($ssc_board) || 
			empty($ssc_per) || empty($ssc_school) || empty($ug_per) || empty($dob))
		{
				$message = "enter required fields";
					echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else 
		{
		$sql="insert into student values('$rollno','$name','$branch','$gender','$dob','$ssc_per','$ssc_school','$ssc_board','$inter_per','$inter_college','$inter_board','$ug_per','$backlogs','$email','$contact','$aadhaar','$passport');";
		$sql1="insert into student_login values('$rollno','$password')";
		$query=mysqli_query($db,$sql);
		$query1=mysqli_query($db,$sql1);
		if(!$query && !$query1)
			echo "Status:Ierror".mysqli_error($db);
		else if(!$query)
			echo "Status::Ierror".mysqli_error($db);
		else if(!$query1)
			echo "Status::Ierror".mysqli_error($db);
		else
			echo "success";
		}
		
	
	}

	
}
//}
?>
<html><head><link rel="stylesheet" type="text/css" href="datadsdcss.css">
</head><body>
<h1 align="center">Please Enter Your Data and Register</h1>
<form method="post">
<table align="center" height="100%" width="80%">
<tr>
<td>Roll No</td><td>
<input type="text" name="rollno"/> <span class="error">*</span>
</td>
</tr><tr>
<td>Password</td><td>
<input type="password" name="password"/><span class="error">*</span>
</td>
</tr><tr>
<td>Name</td><td>
<input type="text" name="name"/> <span class="error">*</span>
</td>
</tr><tr>
<td>Gender</td><td><select name="gender"><option value="male">Male</option><option value="female">Female</option></select> <span class="error">*</span>
</td>
</tr><tr>
<td>DOB</td><td>
<input type="date" name="dob"/> <span class="error">*</span>
</td>
</tr><tr>
<td>SSC %</td><td>
<input type="text" name="ssc_per"/> <span class="error">*</span>
</td>
</tr><tr>
<td>SSC School</td><td>
<input type="text" name="ssc_school"/> <span class="error">*</span>
</td>
</tr><tr>
<td>SSC Board</td><td>
<input type="text" name="ssc_board"/> <span class="error">*</span>
</td>
</tr><tr>
<td>Inter %</td><td>
<input type="text" name="inter_per"/> <span class="error">*</span>
</td>
</tr><tr>
<td>Inter College</td><td>
<input type="text" name="inter_college"/> <span class="error">*</span>
</td>
</tr><tr>
<td>Inter Board</td><td>
<input type="text" name="inter_board"/> <span class="error">*</span>
</td>
</tr>
<tr>
<td>UG %</td><td>
<input type="text" name="ug_per"/><span class="error">*</span></td>
</tr><tr>
 <td>Backlogs</td><td>
<input type="text" name="backlogs"/> <span class="error">*</span>
</td>
</tr><tr>
<td>Email</td><td>
<input type="text" name="email"/> <span class="error">*</span>
</td>
</tr><tr>
<td>Contact No:</td><td>
<input type="text" name="contact" maxlength="10"/> <span class="error">*</span>
</td>
</tr><tr>
<td>Aadhaar:</td><td>
<input type="text" name="aadhaar" maxlength="12"/> <span class="error">*</span>
</td>
</tr>
<tr>
<td>Passport</td><td>
<input type="text" name="passport"/> 
</td>
</tr>
<tr>
<td>Branch</td><td><select name="branch"><option value="Computer Science & Engineering">Computer Science & Engineering</option><option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option><option value="Civil Engineering">Civil Engineering</option><option value="Mechanical Engineering">Mechanical Engineering</option><option value="Information Technology">Information Technology</option><option value="Electronics and Communication Enginering">Electronics and Communication Enginering</option></select> <span class="error">*</span>
</td>
</tr><tr>
<td  align="center">
<input type="submit" value="Register"/>&nbsp;&nbsp;
<input type="button" value="login" onclick="window.location.href='student_login.php'"/>
</td>
</tr>
</table></form>


</body>

</html>














