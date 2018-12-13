 <?php include("includes/header.php"); ?>
 <?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>  

<div class="container">
 <div class="frontContent">  
   <h4 class="page-head-line">PAYMENT SLIP</h4>        
     <h4>Enter your registered email address to print payment slip</h4>
<form action="paymentslip.php" method="POST">
 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  EMAIL:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="email" class="form-control" placeholder="Please enter your email address here to to print payment slip" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="submit" name="slip" value="Proceed to print payment slip" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
</form>

  </div>
  </div>
 <?php require("includes/footer.php"); ?> 