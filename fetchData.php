<?php include("includes/connection.php"); ?>  
<body>
<?php 
$state=$_POST['state'];

if(isset($_POST['state'])){
$query =$connection->query("SELECT * FROM locals WHERE state_id =".$_POST['state']." ORDER BY local_name ASC");
$rowCount=$query->num_rows;

 if($rowCount > 0){
     echo '<option value="">Select Local Government</option>';
  while($row=$query->fetch_assoc()){ 
      
   echo '<option value= "'.$row['local_id'].'">'.$row['local_name'].'</option>';
 }
   }else{
     echo '<option value="">Local Govt value not available </option>';
   }
}

if(isset($_POST['dept'])){
$query =$connection->query("SELECT  * FROM level WHERE dept_id=".$_POST['dept']." ORDER BY name ASC");
$rowCount=$query->num_rows;

 if($rowCount > 0){
      echo '<option value="">select level </option>';
  while($row=$query->fetch_assoc()){ 
     
   echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">level value not available </option>';
   }
}


if(isset($_POST['level'])){
$query =$connection->query("SELECT * FROM semester WHERE level_id=".$_POST['level']."");
$rowCount=$query->num_rows;

 if($rowCount > 0){
      echo '<option value="">select semester </option>';
  while($row=$query->fetch_assoc()){ 
     
   echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">semester value not available </option>';
   }
}


if(isset($_POST['semester'])){
$query =$connection->query("SELECT * FROM course WHERE semester_id=".$_POST['semester']."");
$rowCount=$query->num_rows;

 if($rowCount > 0){
      echo '<option value="">COURSE(S) ENTERED SO FAR</option>';
  while($row=$query->fetch_assoc()){ 
     
   echo '<option value= "'.$row['id'].'">'.'<h3 style=" color:red;">Course Code:</h3> '.$row['name'].','.'   Course Title:         '     .$row['coursetitle'].','.'  Credit Unit:        '.$row['creditunit'].'</option>';       
 }
   }else{
     echo '<option value="">course value not available </option>';
   }
}

?>
</select>  

