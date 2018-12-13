<?php
//insert.php
//$connect = mysqli_connect("localhost", "root", "", "depotter");
 include("includes/connection.php"); 
if(isset($_POST["item_name"]))
{
 $item_name = $_POST["item_name"];
  
     
 $query = '';
 for($count = 0; $count<count($item_name); $count++)
 {
  $item_name_clean = mysqli_real_escape_string($connection, $item_name[$count]);
  
  if($item_name_clean != '')
  {
   $query .= '
   INSERT INTO primary_subject(id,name) 
   VALUES("","'.$item_name_clean.'"); 
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connection, $query))
  {
   echo 'subject Inserted successfully';
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
