<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>De Potter College</title>
     <link rel="icon" type="image/png" href="images/LOGO1.png"> 
</head>

<?php include("includes/connection.php"); ?>  
<body>
<?php 
$faculty=$_POST['faculty'];

if(isset($_POST['faculty'])){
$query =$connection->query("SELECT * FROM depts WHERE faculty_id =".$_POST['faculty']."");
$rowCount=$query->num_rows;

 if($rowCount > 0){
     echo '<option value="">select a dept</option>';
  while($row=$query->fetch_assoc()){ 
      
   echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">dept value not available </option>';
   }
}

?>
</select>  
</body>
</html>
