 <?php include("includes/header.php"); ?>
 <?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>  

<div class="container">
 <div class="frontContent">  
   <h4 class="page-head-line">PAYMENT RECEIPT FORM</h4>        

<form action="paymentreceipt.php" method="POST">
 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  Bank deposit No:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="bankslipno" class="form-control" placeholder="Please enter your email address here to to print payment slip" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
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
                    <input id="form_name" type="submit" name="receipt" value="Proceed to print payment receipt" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
</form>

  </div>
  </div>
 <?php require("includes/footer.php"); ?> 