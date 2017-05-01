<?php
$mysqli = new mysqli("localhost","root","","placement");
	if($mysqli->connect_errno)
		die("Connection failed".$mysqli->connect_error);
 $output="";
$columns= array();
// Generate the SQL query
$query = "select ";
$first = true;

if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
            $columns[]=$check;
			 $query .= $first ? "${check}" : ", ${check}";
				$first = false;

			//echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    }
	print_r($columns);
	echo $query;
	$query .= " from student ";
		$first = true;
		echo $query;

	
}

if($mysqli->multi_query($query))
	{
		do{
			$result = $mysqli->store_result();

			echo "Total Record :".$result->num_rows;
			echo "<hr width='100px' align='left'/>";
			$finfo = $result->fetch_fields();
			echo "<div id='table_wrapper'>";
			echo "<table border='1' id='student_table'>";
			echo "<tr>";
			foreach($finfo as $f)
			{
				echo "<th>".$f->name."</th>";
			}
			echo "</tr>";
			
			while($row = $result->fetch_assoc())
			{
				echo "<tr>";
				foreach($row as $v)
				{
					echo "<td>".$v."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			
		}while($mysqli->more_results() && $mysqli->next_result());
	}
else
{
 echo 'Data Not Found';
}
?>

