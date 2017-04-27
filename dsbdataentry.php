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
<html><head><link rel="stylesheet" type="text/css" href="datadsdcss.css">
</head><body>
<div class="topnav" id="myTopnav"><h1 align="center"><font  face="" color="white">
<?php echo  $rollno; ?></font></h1><hr>
  <a href="dsbdataentry.php">Profile</a>
  <a href="dataentry.php" >Edit</a>
  <a href="logout.php">Logout</a>
</div>
<h1 align="center"><?php echo  $name; ?></h1>
 <table width="100%" height="5%" bgcolor="#00ced1">
<tr><td>Email:<?php echo  $email; ?></td><td>Contact:<?php echo  $contact; ?></td><td>Branch:<?php echo  $branch; ?></td></tr></table>
 <br><table align="center" height="60%" width="30%">
<tr><td>
<b>DOB:</b>
</td><td><?php echo  $dob; ?></td></tr>
<tr><td>
<b>Gender:</b>
</td><td><?php echo  $gender; ?></td></tr>

 <tr><td>
<b>B.Tech Percentage:</b>
</td><td><?php echo  $ug_per; ?>%</td></tr><tr><td>
<b>Backlogs:</b>
</td><td><?php echo  $backlogs; ?></td></tr>
<tr><td>
<b>Intermediate Percentage:</b>
</td><td><?php echo  $inter_per; ?>%</td></tr>
<tr><td>
<b>Intermediate College:</b>
</td><td><?php echo  $inter_college; ?></td></tr>
<tr><td>
<b>Intermediate Board:</b>
</td><td><?php echo  $inter_board; ?></td></tr><tr><td>
<b>SSC Percentage:</b>
</td><td><?php echo  $ssc_per; ?>%</td></tr><tr><td>
<b>SSC School:</b>
</td><td><?php echo  $ssc_school; ?></td></tr><tr><td>
<b>SSC Board</b>
</td><td><?php echo  $ssc_board; ?></td></tr><tr><td>
<b>Aadhaar No:</b>
</td><td><?php echo  $aadhaar; ?></td></tr><tr><td>
<b>Passport No:</b>
</td><td><?php echo  $passport; ?></td></tr>
</table>
</body>

</html>














