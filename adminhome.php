<?php
include('session_admin.php');

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
  <div class="container">
   <br />
   <h2 align="center">Student Details</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by student Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 { 
  $.ajax({
   url:"adminfetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>