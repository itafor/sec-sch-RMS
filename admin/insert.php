<?php
//insert.php
//$connect = mysqli_connect("localhost", "root", "", "depotter");
 include("includes/connection.php"); 
if(isset($_POST["dept_name"]))
{
 $dept_name = $_POST["dept_name"];
  
 $query = '';
 for($count = 0; $count<count($dept_name); $count++)
 {
  $dept_name_clean = mysqli_real_escape_string($connection, $dept_name[$count]);
  
  if($dept_name_clean != '')
  {
   $query .= '
   INSERT INTO dept(id,name,faculty_id) 
   VALUES("","'.$dept_name_clean.'"); 
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connection, $query))
  {
   echo 'Department Inserted successfully';
  }
  else
  {
   echo 'Error'.mysqli_error($connection);
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}

?>
