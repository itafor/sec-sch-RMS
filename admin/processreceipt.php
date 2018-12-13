<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">PAYMENT RECEIPT PROCESSING FROM</h4> 
   
                  <?php   
      if(isset($_POST['receipt'])) {
      
          $transid=htmlspecialchars($_POST['transid']);
          $email=htmlspecialchars($_POST['email']); 
          $slipno=htmlspecialchars($_POST['slipno']); 
          $totalatm=htmlspecialchars($_POST['totalatm']); 
          $bankname=htmlspecialchars($_POST['bankname']); 
          $paymentitem=htmlspecialchars($_POST['paymentitem']);
          $transdate=htmlspecialchars($_POST['transdate']); 
          $receiptno=rand(000000000,999999999);
           $date=date("Y-m-d h:i:sa");
            if(empty($transdate)) 
          {
                $failure = "Please enter transaction date and time";    
          }elseif(empty($transid)){
             $failure = "Please enter Transaction ID";
           }elseif(empty($email)){
               $failure = "Please enter student email ";
           }elseif(empty($slipno)){
             $failure = "Please enter deposit slip no";
           }elseif(empty($totalatm)){
            $failure = "Please enter total amount paid by student";   
           }if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                $failure = "Your email is not valid.";    
                }elseif(empty($bankname)){
               $failure = "Please enter bank name and branh";     
              }else{
               $checkTransID=mysqli_query($connection,"SELECT * FROM application WHERE code='$transid'");
                 if(mysqli_num_rows($checkTransID) == 0){
                  $failure ="The Transaction code you entered does exist";
                 }else{
                   $checkemail=mysqli_query($connection,"SELECT * FROM application WHERE email='$email'");
                     if(mysqli_num_rows($checkemail) == 0){
                  $failure ="The email address you entered does exist";
                 }else{  
     $query=mysqli_query($connection,"UPDATE application SET bankslipno='".$slipno."', totalatm='".$totalatm."', bankname='".$bankname."',     transdate='".$transdate."', paymentitem='".$paymentitem."', transid='".$receiptno."', processedate='".$date."' WHERE email ='".$email."' AND code='".$transid."'");
        
          if(!$query)
          {die ("An unexpected error occured while processing receipt, Please try again!");}
          else
         {
         $success = "Receipt processed  successfully!";
           
         }
      }
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
     <?php 
    $check=mysqli_query($connection,"SELECT * FROM admin WHERE username='".$_SESSION['username']."' AND rank = 'admin' ");
     if(mysqli_num_rows($check) > 0)
    {
   // echo '<div style="opacity: .5; pointer-events: none">' ; 
    }else{
        echo '<div style="opacity: .5; pointer-events: none;">' ;
   echo "<h3 style='color:red;'>Forbidden Area, Only the admin can access this area</h3>"; 
    }
     
    ?>
                    <form action="" method="POST">
 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  Transanction ID:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="transid" class="form-control" placeholder="Please enter student transaction ID" value="<?php echo isset($_POST['transid']) ? $_POST['transid'] : '' ?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div> 
        </div> 
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  EMAIL:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="email" class="form-control" placeholder="Please enter student email address here to to print payment slip" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div> 
        </div> 
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  Deposit Slip No:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="slipno" class="form-control" placeholder="Please enter deposit slip no" value="<?php echo isset($_POST['slipno']) ? $_POST['slipno'] : '' ?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div> 
        </div> 
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  Total Amount Paid:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="totalatm" class="form-control" placeholder="Please enter total amt paid by student" value="<?php echo isset($_POST['totalatm']) ? $_POST['totalatm'] : '' ?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div> 
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  Bank Name/Branh:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="bankname" class="form-control" placeholder="Please enter bank name and branch" value="<?php echo isset($_POST['bankname']) ? $_POST['bankname'] : '' ?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div> 
        </div> 
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  Transaction Date/Time:<span style="color:red">*</span>
                    <input id="transdate" type="text" name="transdate" class="form-control" placeholder="Please enter " value="<?php echo isset($_POST['transdate']) ? $_POST['transdate'] : '' ?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div> 
        </div> 
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  Payment Item Name:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="paymentitem" class="form-control" placeholder="Please enter payment itam name" value="<?php echo isset($_POST['paymentitem']) ? $_POST['paymentitem'] : '' ?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div> 
        </div> 
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="submit" name="receipt" value="Process receipt" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
</form>
                                                                                   

                </div>  
                
          </div>
          </div>
         <script>
  $("#transdate").datetimepicker();
</script> 
 <?php require("includes/footer.php"); ?>