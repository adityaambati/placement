<?php
//fetch.php
include('session_admin.php');
$output = '';
if(isset($_POST["query"]))
{

	
 $search = mysqli_real_escape_string($db, $_POST["query"]);
 $query = "
  SELECT * FROM student 
  
  WHERE rollno LIKE '%".$search."%'
  OR name LIKE '%".$search."%' 
  OR branch LIKE '%".$search."%' 
  OR gender LIKE '%".$search."%' 
  OR dob LIKE '%".$search."%'
  OR ssc_per LIKE '%".$search."%'
  OR ssc_school LIKE '%".$search."%'
  OR ssc_board LIKE '%".$search."%'
  OR inter_per LIKE '%".$search."%'
  OR inter_college LIKE '%".$search."%'
 OR inter_board LIKE '%".$search."%'
 OR ug_per LIKE '%".$search."%'
 OR backlogs LIKE '%".$search."%'
 OR email LIKE '%".$search."%'
 OR contact LIKE '%".$search."%'
 OR aadhaar LIKE '%".$search."%'
 OR passport LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM student ORDER BY rollno
 ";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive" id="student_table">
   <table class="table table bordered" id="table_id">
    <tr>
     <th>rollno</th>
     <th>name</th>
     <th>branch</th>
     <th>gender</th>
	 <th>dob</th>
     <th>ssc_per</th>
	 <th>ssc_school</th>
	 <th>ssc_board</th>
	 <th>inter_per</th>
	 <th>inter_college</th>
	 <th>inter_board</th>
	 <th>ug_per</th>
	 <th>backlogs</th>
	 <th>email</th>
	 <th>contact</th>
	 <th>aadhaar</th>
	 <th>passport</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["rollno"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["branch"].'</td>
    <td>'.$row["gender"].'</td>
    <td>'.$row["dob"].'</td>
	<td>'.$row["ssc_per"].'</td>
	<td>'.$row["ssc_school"].'</td>
	<td>'.$row["ssc_board"].'</td>
	<td>'.$row["inter_per"].'</td>
	<td>'.$row["inter_college"].'</td>
	<td>'.$row["inter_board"].'</td>
	<td>'.$row["ug_per"].'</td>
	<td>'.$row["backlogs"].'</td>
	<td>'.$row["email"].'</td>
	<td>'.$row["contact"].'</td>
	<td>'.$row["aadhaar"].'</td>
	<td>'.$row["passport"].'</td>
   </tr>
  ';
 }
 echo $output;

}
else
{
 echo 'Data Not Found';
}

?>
<html>
<head>		   <script src="https://rawgit.com/unconditional/jquery-table2excel/master/src/jquery.table2excel.js"></script>
</head>
<body><div align="center">  
                     <button name="create_excel" id="create_excel" class="btn btn-success">Create Excel File</button>  
                </div> </body>
</html>
 <script>
 $(document).ready(function(){  
      $('#create_excel').click(function(){  
      $('#student_table').table2excel({
		name: "My Bio",
        filename: "Biodata",
      });  
	}); 	
 }); 
 </script>  
