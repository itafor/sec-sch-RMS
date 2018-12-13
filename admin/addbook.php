<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">Add Books To Library</h4> 
           <?php
    if(isset($_POST["submit"]))
        {
            $bname=htmlspecialchars( addslashes($_POST["bname"]));
            $keys=htmlspecialchars( addslashes($_POST["keys"]));
            $target_dir = "books/";
            $target_file = $target_dir . basename($_FILES["efile"]["name"]);
            $query=mysqli_query($connection,"SELECT * FROM book WHERE BTITLE='$bname' OR KEYWORDS = '$keys'");
            if(mysqli_num_rows($query) != 0){
                $failure =  "The name or keyword you entered already exist"; 
            }else{
            if(empty($bname)){
               $failure =  "Enter book name";
            }elseif(empty($keys)){
               $failure =  "Enter book keyword";
            }else{
            if (move_uploaded_file($_FILES["efile"]["tmp_name"], $target_file))
            {
                $sql=mysqli_query($connection,"INSERT INTO book(BTITLE,KEYWORDS,FILE)
                     VALUES ('{$bname}','{$keys}', '{$target_file}' )");
                
                    $success ="(" .$bname .") added successfully";   
            }
                    
            else
            {
              
                $failure =  "Sorry, there was an error uploading your file".mysqli_error($connection); 
            }
    
        }
  }   
  }   
?>

 <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-danger'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?> 
         <form action="addbook.php" method="post" role="form" enctype="multipart/form-data">
         
<div class="controls">
 
<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   BOOK TITLE:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="bname"  required class="form-control" placeholder="book name"   data-error="Firstname is required." value="<?php echo isset($_POST['bname']) ? $_POST['bname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   Keywords:<span style="color:red">*</span>
           <textarea name="keys"  class="form-control" required="required"></textarea>  
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Upload File</label>   
                    <input id="form_name" type="file" name="efile" required class="form-control"  required="required"  value="<?php echo isset($_POST['efile']) ? $_POST['efile'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-6">
            
                 <button type="submit" name="submit">Save Details</button>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
     
      </div>
</form>
                                                                 

                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>