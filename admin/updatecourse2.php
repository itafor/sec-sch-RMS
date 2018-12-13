<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
                                 <h4 class="page-head-line">UPLOAD STUDENTS' RESULT</h4>
                                 <?php     
                                 $id=$_REQUEST['id'];
                                 
                    $query=mysqli_query($connection,"SELECT * FROM studentregister WHERE  id='".$id."'");
                     
                    $result=mysqli_fetch_array($query); 
          ?>            
        <form  id="result" method="post" action="updatecourse3.php" role="form"  >
<div class="messages"></div>

    <div class="controls">
    <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <span style="color:red"></span>
                    <input id="form_name" type="hidden" name="id" class="form-control" value="<?php echo $result['id']  ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
           <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <span>CURRENT TERM</span>
                    <input id="form_name" type="text" name="term" disabled="disabled" class="form-control" value="<?php echo $result['term']  ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <span>STUDENT NAME</span>
                    <input id="form_name" type="text" name="name" disabled="disabled" class="form-control" value="<?php echo $result['fullname']  ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <?php  if($result['term']=='First Term'){ ?>
            <div class="row" style="opacity: .5; pointer-events: none;"> 
            <div class="col-md-6">
                <div class="form-group">
                  
                    <input id="form_phone" type="hidden" name="ftbf" class="form-control" value="<?php echo $result['ftbf'] ?>"  required="required" onkeyup="isnum(this)" >
                     <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row" style="opacity: .5; pointer-events: none;"> 
            <div class="col-md-6">
                <div class="form-group">
                   
                    <input id="form_phone" type="hidden" name="stbf" class="form-control" value="<?php echo $result['stbf'] ?>"  required="required" onkeyup="isnum(this)" >
                     <div class="help-block with-errors"></div>
                </div>
            </div>
        </div> 
        <?php }else{ ?>
            <div class="row"> 
            <div class="col-md-6">
                <div class="form-group">
                   FIRST TERM BF (100%):<span style="color:red">*</span>
                    <input id="form_phone" type="text" name="ftbf" class="form-control" value="<?php echo $result['ftbf'] ?>"  required="required" onkeyup="isnum(this)" >
                     <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
          <?php  if($result['term']=='Second Term'){ ?> 
         <div class="row" style="opacity: .5; pointer-events: none;" > 
            <div class="col-md-6">
                <div class="form-group">
                   
                    <input id="form_phone" type="hidden" name="stbf" class="form-control"  value="<?php echo $result['stbf'] ?>"  required="required" onkeyup="isnum(this)" >
                     <div class="help-block with-errors"></div>
                </div>
            </div>
        </div> 
        <?php }else{ ?> 
        
            <div class="row" > 
            <div class="col-md-6">
                <div class="form-group">
                   SECOND TERM BF (100%):<span style="color:red">*</span>
                    <input id="form_phone" type="text" name="stbf" class="form-control" value="<?php echo $result['stbf'] ?>"  required="required" onkeyup="isnum(this)" >
                     <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
        <div class="row"> 
            <div class="col-md-6">
                <div class="form-group">
                    EXAM SCORE (60%):<span style="color:red">*</span>
                    <input id="form_phone" type="text" name="examscore" class="form-control" value="<?php echo $result['exam'] ?>" required="required" onkeyup="isnum(this)">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    CA SCORE (40%):<span style="color:red">*</span>
                    <input id="form_phone" type="text" name="cascore" class="form-control" value="<?php echo $result['ca'] ?>"  required="required" onkeyup="isnum(this)" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>  
            <div class="col-md-12">
                <input type="submit" name="edit" class="btn btn-success btn-send" value="UPLOAD RESULT">
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