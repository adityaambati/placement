<?php

include('session.php');
$user=$_SESSION['login_user'];
echo "$user";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!$db)
	{
		echo "database error".mysqli_error($db);
	}
	else
	{	
	    $name=$_POST["name"];
		//$branch=$_POST["branch"];
	    //$gender=$_POST["gender"];
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
	    
		
								 if(empty($_POST['name'])  || empty($_POST['dob']) ||
									empty($_POST['ssc_per']) || empty($_POST['ssc_school']) || empty($_POST['ssc_board']) || empty($_POST['inter_per']) || 
									empty($_POST['backlogs']) || empty($_POST['contact']) || empty($_POST['aadhaar'])  || 
									empty($_POST['inter_college']) || empty($_POST['inter_board']) || empty($_POST['ug_per']) || empty($_POST['email']))
									{
											$message = "You missed required fields go back to edit";
												echo "<script type='text/javascript'>alert('$message');</script>";
												
									}
									else 
										{
											$sql="update student set name='$name',dob='$dob',ssc_per='$ssc_per',ssc_school='$ssc_school',ssc_board='$ssc_board',inter_per='$inter_per',inter_college='$inter_college',inter_board='$inter_board',ug_per='$ug_per',backlogs='$backlogs',email='$email',contact='$contact',aadhaar='$aadhaar',passport='$passport' where rollno='$user';";
		
											$query=mysqli_query($db,$sql);
											
											if(!$query)
												echo "Status:Ierror".mysqli_error($db);
											else
												echo "Status:inserted";
		
											}
								
		
		
	
	}

	
}
?>

<html><head>
<link rel="stylesheet" type="text/css" href="datadsdcss.css">
</head><body>
<div class="topnav" id="myTopnav">
  <a href="dsbdataentry.php">Profile</a>
  <a href="dataentry.php">Edit</a>
  <a href="logout.php">Logout</a>
</div>
<br>
<h2>Your Request for data change has been sent to your Training and placement officer ,changes will be done in 24 hours and you can check them at your profile page...</h2>

</body>
</html>