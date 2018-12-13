<?php ob_start(); ?>
<?php include("includes/connection.php"); ?>  
<body>
<?php 
$faculty=$_POST['faculty'];

if(isset($_POST['faculty'])){
$query =$connection->query("SELECT * FROM depts WHERE faculty_id =".$_POST['faculty']."");
$rowCount=$query->num_rows;

 if($rowCount > 0){
     echo '<option value="">select a department</option>';
  while($row=$query->fetch_assoc()){ 
      
   echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">departmentvalue not available </option>';
   }
}

if(isset($_POST['dept'])){
$query =$connection->query("SELECT * FROM level WHERE dept_id=".$_POST['dept']."");
$rowCount=$query->num_rows;

 if($rowCount > 0){
      echo '<option value="">select term </option>';
  while($row=$query->fetch_assoc()){ 
     
   echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">term value not available </option>';
   }
}


if(isset($_POST['level'])){
$query =$connection->query("SELECT * FROM semester WHERE level_id=".$_POST['level']."");
$rowCount=$query->num_rows;

 if($rowCount > 0){
     // echo '<option value=""> </option>';
  while($row=$query->fetch_assoc()){ 
     
   echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">Subject value not available </option>';
   }
}


if(isset($_POST['semester'])){
$query =$connection->query("SELECT * FROM course WHERE semester_id=".$_POST['semester']."");
$rowCount=$query->num_rows;

 if($rowCount > 0){
      echo '<option value="">select course</option>';
  while($row=$query->fetch_assoc()){ 
     
   echo '<option value= "'.$row['id'].'">'.'<h3 style=" color:red;">Course Code:</h3> '.$row['name'].'   Course Title:         '     .$row['coursetitle'].'  Credit Unit:        '.$row['creditunit'].'</option>';
 }
   }else{
     echo '<option value="">course value not available </option>';
   }
}

?>
</select>  

