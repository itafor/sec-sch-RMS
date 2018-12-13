<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
                                 <h4 class="page-head-line">UPDATE STUDENTS PROFILE</h4>
                      <?php   
      if(isset($_POST['edit'])) {
         $id=$_POST['stdId'];
          $firstname=$_POST['firstname']; 
          $middlename=$_POST['middlename']; 
          $lastname=$_POST['lastname']; 
          $stdaddress=$_POST['stdaddress'];
          $gender=$_POST['gender'];
          $class=$_POST['class'];
          $dept=$_POST['dept'];
         // $matricno=$_POST['matricno'];
          $password=$_POST['password'];
           if(empty($firstname)){
             $failure = "pls enter your first name";
           }elseif(empty($lastname)){
             $failure = "Please enter last name";
           }elseif(empty($stdaddress)){
                 $failure = "Enter student address";       
              }else if(empty($gender)){
                 $failure = "Enter gender";       

              }else if(empty($class)){
             $failure = "Please enter class";
              }else if(empty($dept)){
             $failure = "Please enter dept";
              }else if(empty($password)){
             $failure = "Please enter password";
              }else{
                 $updateStudentDetail=mysqli_query($connection,"UPDATE students SET firstname='".$firstname."',
                 middlename='".$middlename."', lastname='".$lastname."', stdaddress='".$stdaddress."',
                 gender='".$gender."', class='".$class."', dept='".$dept."',password='".$password."' WHERE stdId='".$id."'");
                 if($updateStudentDetail){
                   $success = "Profile  updated  successfully!";
                     header("location: viewstudents.php") ;  
                    }else{
                       $failure = "Profile update failed"; 
                    } 
                     } 
     
          //}
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