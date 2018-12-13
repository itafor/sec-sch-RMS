<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
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
      <?php 
      if(isset($_POST['send'])){
       $newstitle =addslashes( strip_tags( htmlspecialchars($_POST['title'])));
       $newsbody =addslashes( strip_tags( htmlspecialchars($_POST['body'])));
        if(empty($newstitle)) {
          $failure = "please enter news title";
        }elseif(empty($newsbody)){
           $failure = "please enter news content"; 
        } else{
         $searchnews=mysqli_query($connection,"SELECT * FROM news where newstitle='$newstitle'");
         if(mysqli_num_rows($searchnews) > 0){
           $failure = "News title already exist";  
         }else{
         
             $sendNews = mysqli_query($connection, "insert into news (newstitle,body,adddate) VALUES('$newstitle','$newsbody',now())");
             if(!$sendNews){
              $failure = "sending news failed".mysqli_error($connection); 
             }else{
               
                for($i =0; $i< count($_FILES['photos']['name']); $i++){
                              $filetmp =  $_FILES['photos']['tmp_name'][$i]; 
                               $filename =  $_FILES['photos']['name'][$i];
                                 $filetype =  $_FILES['photos']['type'][$i]; 
                                 $filepath= "newsfile/".$filename;
                             move_uploaded_file($filetmp,$filepath); 
                              
                              $uploadfile=mysqli_query($connection,"INSERT INTO newsfiles (newstitle,newsfile) VALUES('$newstitle','".'../'.$filepath."')");     
                           if(!$uploadfile){
                             echo "file upload not succesfull".mysqli_error($connection);
                           }else{
                           $success = "News added successfully".mysqli_error($connection);  
                           }
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
   <h4 class="page-head-line">Add News or Event</h4> 
   <form action="addnews.php" method="post" role="form" enctype="multipart/form-data">
<div class="controls">
 
<div class="row">
            <div class="col-md-8">
                <div class="form-group">
                   NEWS TITLE:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="title" class="form-control" placeholder="subject" required="required"  data-error="Firstname is required." value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                   News Content:<span style="color:red">*</span>
           <textarea name="body" class="form-control" cols="35" rows="15" required="required"></textarea>  
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                   Upload files:<span style="color:red">*</span>
                    <input type="file" name="photos[]" multiple="multiple"  class="form-control"  value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <input id="form_name" type="submit" name="send" value="Add News" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
     
      </div>
</form>
       
                                                                                   

                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>