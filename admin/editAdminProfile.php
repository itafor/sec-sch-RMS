<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">EDIT YOUR PROFILE</h4> 
       
 <?php
                                $matricno=$_SESSION['username'];
                                 
                    $query=mysqli_query($connection,"SELECT * FROM admin WHERE username='$matricno'");
        
                    $result=mysqli_fetch_array($query); 
          ?>            
        <form id="contact-form" method="post" action="updateadmin.php" role="form">
<div class="messages"></div>

    <div class="controls">
    <div class="row">
            <div class="col-md-12">
                <div class="form-group">
               FULL NAME:  <span style="color:red">*</span>
                    <input id="form_name" type="text" name="fullname" class="form-control" value="<?php echo $result['fullname']  ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
            <div class="row"> 
            <div class="col-md-6">
                <div class="form-group">
                    EMAIL ADDRESS:<span style="color:red">*</span>
                    <input id="form_phone" type="text" name="email" class="form-control" value="<?php echo $result['email'] ?>" required="required">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    PHONE NUMBER:<span style="color:red">*</span>
                    <input id="form_phone" type="text" name="phone" class="form-control" value="<?php echo $result['phone'] ?>"  required="required" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="edit" class="btn btn-success btn-send" value="EDIT">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong style="color:red;">*</strong> These fields are required.</p>
            </div>
        </div>
    </div>
    
</form>                                                                       

                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>