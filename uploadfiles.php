<?php require_once("includes/connection.php");?> 
<?php include("includes/header.php"); ?>
    
 <div class="frontContent">
    <div class="title">MY CONTENT TITLE</div>      
    <div class="container"> 
      
           <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Enter </h4>
                   
                      <?php 
                         if(isset($_POST['upload'])){
                             $phone=htmlspecialchars($_POST['phone']);
                          for($i =0; $i< count($_FILES['credentials']['name']); $i++){
                              $filetmp =  $_FILES['credentials']['tmp_name'][$i]; 
                               $filename =  $_FILES['credentials']['name'][$i];
                                 $filetype =  $_FILES['credentials']['type'][$i]; 
                                 $filepath= "uploads/".$filename;
                             move_uploaded_file($filetmp,$filepath); 
                              
                              $uploadfile=mysqli_query($connection,"INSERT INTO credentials (id,file_name,file_tmp,file_type,phone) VALUES('','$filename','$filetmp','$filetype','$phone')");     
                           if(!$uploadfile){
                             echo "file upload not succesfull".mysqli_error($connection);
                           }else{ 
                             echo "file uploaded succesfully" ;
                             $file=scandir("uploads");
                            // print_r($file);
                             for($a=2; $a<count($file); $a++){
                              ?>
                              <p>
                              <a href="uploads/<?php echo $file[$a]?>"><?php echo $file[$a]?></a>
                              </p>
                              <?php
                             }
                           }
                           
                          }
                         } 
                          ?>
                   
                   
                   <form action="uploadfiles.php" method="post" role="form" enctype="multipart/form-data"> 
                   <div class="row"> 
                     <div class="col-md-4">
                <div class="form-group">
                   PHONE NO:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="phone"  class="form-control">
                    <div class="help-block with-errors"></div>
                </div>
            </div>  
         </div>
         <div class="row"> 
                     <div class="col-md-4">
                <div class="form-group">
                   UPLOAD CREDENTIALS:<span style="color:red">*</span>
                    <input id="form_name" type="file" name="credentials[]" multiple class="form-control">
                    <div class="help-block with-errors"></div>
                </div>
            </div>  
         </div>
          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input id="form_name" type="submit" name="upload" value="upload" class="btn btn-success btn-send" class="form-control" >
                    
                </div>
            </div> 
        </div>
                   <form>
                </div>

            </div

            </div>
        </div> <!--content-wraper end-->
 
    
       
    </div>
 </div>

   
<?php require("includes/footer.php"); ?> 