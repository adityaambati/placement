<?php

include('session.php');
$user=$_SESSION['login_user'];
$query=mysqli_query($db,"select * from student where rollno='$user' ");
while($row=mysqli_fetch_array($query))
{
					$rollno=$row['rollno'];		
					$name=$row["name"];
					$gender=$row["gender"];
					$dob=$row["dob"];
					$ssc_per=$row["ssc_per"];
					$ssc_school=$row["ssc_school"];
					$ssc_board=$row["ssc_board"];
					$inter_per=$row["inter_per"];
					$inter_college=$row["inter_college"];
					$inter_board=$row["inter_board"];
					$ug_per=$row["ug_per"];
					$backlogs=$row["backlogs"];
					$email=$row["email"];
					$contact=$row["contact"];
					$aadhaar=$row["aadhaar"];
					$passport=$row["passport"];
					$branch=$row["branch"];
					
								
					}
					
?>

<html>
	<head>
			<link rel="stylesheet" type="text/css" href="datadsdcss.css">
</head><body>
<div class="topnav" id="myTopnav">
  <a href="dsbdataentry.php">Profile</a>
  <a href="dataentry.php">Edit</a>
  <a href="logout.php">Logout</a>
</div>
<form method="post" action="update.php">
<table align="center" height="100%" width="80%">
<tr><td>Name</td><td>
<input value="<?php echo  $name; ?>" type="text" name="name"/><span class="error">*</span>
</td>
</tr>
<!-- <tr>
<td>Gender</td>
<td>
<select name="gender">
<option selected disabled>click here for new one</option>
<option value="male" >Male</option>
<option value="female">Female</option>
</select> 
<label><?php echo "$gender";?></label>
</td>
</tr>-->
<tr>
<td>DOB</td><td>
<input value="<?php echo  $dob; ?>" type="date" name="dob"/><span class="error">*</span>
</td>
</tr><tr>
<td>SSC %</td><td>
<input value="<?php echo  $ssc_per; ?>" type="text" name="ssc_per"/><span class="error">*</span>
</td>
</tr><tr>
<td>SSC School</td><td>
<input value="<?php echo  $ssc_school; ?>" type="text" name="ssc_school"/><span class="error">*</span>
</td>
</tr><tr>
<td>SSC Board</td><td>
<input value="<?php echo  $ssc_board; ?>" type="text" name="ssc_board"/><span class="error">*</span>
</td>
</tr><tr>
<td>Inter %</td><td>
<input value="<?php echo  $inter_per; ?>" type="text" name="inter_per"/><span class="error">*</span>
</td>
</tr><tr>
<td>Inter College</td><td>
<input value="<?php echo  $inter_college; ?>" type="text" name="inter_college"/><span class="error">*</span>
</td>
</tr><tr>
<td>Inter Board</td><td>
<input value="<?php echo  $inter_board; ?>" type="text" name="inter_board"/><span class="error">*</span>
</td>
</tr>
<tr>
<td>UG %</td><td>
<input  value="<?php echo  $ug_per; ?>" type="text" name="ug_per"/><span class="error">*</span>
</td>
</tr><tr>
 <td>Backlogs</td><td>
<input value="<?php echo  $backlogs; ?>" type="text" name="backlogs"/><span class="error">*</span>
</td>
</tr><tr>
<td>Email</td><td>
<input value="<?php echo  $email; ?>" type="text" name="email"/><span class="error">*</span>
</td>
</tr><tr>
<td>Contact No:</td><td>
<input maxlength="10" value="<?php echo  $contact; ?>" type="text" name="contact"/><span class="error">*</span>
</td>
</tr><tr>
<td>Aadhaar:</td><td>
<input maxlength="12" value="<?php echo  $aadhaar; ?>" type="text" name="aadhaar"/><span class="error">*</span>
</td>
</tr>
<tr>
<td>Passport</td><td>
<input value="<?php echo  $passport; ?>" type="text" name="passport"/>
</td>
</tr>
<!-- <tr>
<td>Branch</td>
<td><select  name="branch">
<option selected disabled>click here for new one</option>
<option value="Computer Science & Engineering">Computer Science & Engineering</option>
<option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Information Technology">Information Technology</option>
<option value="Electronics and Communication Enginering">Electronics and Communication Enginering</option>
</select>
<label> <?php echo "$branch";?></label>
</td>

</tr>-->
<tr>

<td  align="center">
<input type="submit" value="Request update"/>
</td>
</tr>
</table></form>


</body>

</html>