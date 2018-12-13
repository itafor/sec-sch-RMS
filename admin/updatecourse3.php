<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
                                 <h4 class="page-head-line">UPLOAD STUDENTS' RESULT</h4>
                      <?php   
      if(isset($_POST['edit'])) {
      
          $id=$_REQUEST['id'];
          $examscore=$_REQUEST['examscore']; 
          $cascore=$_REQUEST['cascore'];
          
          $ftbf=$_REQUEST['ftbf']; 
          $stbf=$_REQUEST['stbf'];
          
           if($examscore >60){
             $failure = "Exam score must not be more than 60%  " . " you entered " .$examscore."%";
           }elseif($cascore > 40){
               $failure = "CA score must not be more than 40%  "."you entered " .$cascore."%";
           }elseif($ftbf>100){
              $failure = "First term brought foward score must not be more than 100%  "."you entered " .$ftbf."%";     
           }elseif($stbf>100){
              $failure = "second term brought foward score must not be more than 100%  "."you entered " .$stbf."%";     
           }elseif(empty($examscore)){
             $failure = "Please enter exam score";
           }elseif(empty($cascore)){
            $failure = "Please enter CA score";   
           }elseif(!preg_match('/^[0-9]*$/',$examscore)){
                 $failure = "Exam score must be numbers only not letters "."you entered " .$examscore;    
              }elseif(!preg_match('/^[0-9]*$/',$cascore)){
               $failure = "CA score must be numbers only not letters "."you entered " .$cascore;     
              }elseif(!preg_match('/^[0-9]*$/',$ftbf)){
               $failure = "FTBF score must be numbers only not letters "."you entered " .$ftbf;     
              }elseif(!preg_match('/^[0-9]*$/',$stbf)){
               $failure = "STBF score must be numbers only not letters "."you entered " .$stbf;     
              }else{
     $query=mysqli_query($connection,"UPDATE studentregister SET exam='".$examscore."', ca='".$cascore."', ftbf='".$ftbf."', stbf='".$stbf."' WHERE id='".$id."'");
        
          if(!$query)
          {
              $failure="An unexpected error occured while saving the record, Please try again!".mysqli_error($connection);
          }
          else
         {
         $success = "Scores uploaded  successfully!";
           
         }
      }
    }
     ?>                                                              
         <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
  
     } 
     ?> 
                </div>
        </div>
  <?php require("includes/footer.php"); ?>