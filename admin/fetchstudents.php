<?php include("includes/connection.php"); ?> 
<?php

   $result=mysqli_query($connection,"select stdId, states.name as state, locals.local_name  as lga, students.* FROM students
join states on states.state_id= students.state join locals on locals.local_id=students.lga 
  ");  
//$result = mysqli_query($connection, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>