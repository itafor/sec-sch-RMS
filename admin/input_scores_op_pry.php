<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?> 
  
                                 <h4 class="page-head-line">Enter students scores</h4>
                                     
  <?php
     if(isset($_POST['submit'])){ 
    $reg_number=htmlspecialchars($_POST['regno']);
   $year=htmlspecialchars($_POST['session']);
   $class=htmlspecialchars($_POST['class']);
   $dept=htmlspecialchars($_POST['dept']);
   $term=htmlspecialchars($_POST['term']);
   
    
   $_SESSION['regno'] = $reg_number;
   $_SESSION['session']=$year;
   $_SESSION['class']=$class;
   $_SESSION['dept']=$dept;
   $_SESSION['term']=$term;
   
    }   
   ?>
   
   

   
   <form action="finalInput_scores_op_pry.php" method="post" class="regform" role="form" >
 

 <div class="controls">

     <div class="row"> 
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" name="submit"  value="Continue" style=" height:50px;" class="btn btn-success btn-send">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
 </form> 
   
  
                                    </tbody>
                                </table>
                     
      
    

 </div> 
                </div>
        </div>   
        
</div>
 <?php require("includes/footer.php"); ?>