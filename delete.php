<?php
include('config.php');
if(isset($_POST['id']))
{
 foreach($_POST['id'] as $id)
 {
 $sql = "DELETE FROM empinfo WHERE id=$id";
 $sql1=mysqli_query($db, $sql);
	 if($sql1)
	 { echo "deleted"; }
	else
	{ echo "error"; }
 }
}
?>