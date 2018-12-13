<?php include("includes/connection.php"); ?> 
<?php include("includes/bkheader.php"); ?>    
<?php  
//action.php
//$connect = mysqli_connect('localhost', 'root', '', 'testing');
  
$input = filter_input_array(INPUT_POST);



$exam = mysqli_real_escape_string($connection, $input["examscore"]);
$ca = mysqli_real_escape_string($connection, $input["cascore"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE courseregister  
 SET  examscore= '".$exam."', 
 cascore = '".$ca."' 
 WHERE courseRegId= '".$input["id"]."'
 ";

 mysqli_query($connection, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM courseregister
 WHERE courseRegId= '".$input["id"]."'
 ";
 mysqli_query($connection, $query);
}

echo json_encode($input);

?>
