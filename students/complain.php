<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>    
                    <?php
            if(isset($_POST["submit"]))
                {  
                 $name =addslashes(htmlspecialchars($_POST["name"]));
                   $mes =addslashes(htmlspecialchars($_POST["mess"]));
                   if(empty($mes)){
                     $failure = "<p> plesae type your complain </p>";   
                   } else{
                        $ckadmin=mysqli_query ($connection, "SELECT * FROM  admin"); 
                    while($data=mysqli_fetch_array($ckadmin)){
                   $da =  $data['username'];
                 $sql=mysqli_query($connection,"insert into complain (matricno,MES,LOGS,status,name,username) values ('{$_SESSION["matricno"]}','$mes',CURRENT_TIMESTAMP,'unread','$name','$da')"); 
                    }
                    if($sql){
                        $success = "<p class='success'>Message Sent</p>";
                    } else{
                      $failure = "<p> Error while sending your complain </p>"; 
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
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="hidden" name="name" value="<?php
          $query=mysqli_query($connection,"select * from students where matricno ='{$_SESSION["matricno"]}'");
            while($data=mysqli_fetch_array($query)){
             echo $data['firstname']." ".$data['middlename'];
            }
         ?>"  class="form-control" > 
            <label>Your Message</label>
           <textarea name="mess"  class="form-control" cols="5" rows="5"></textarea> 
           
            <input type="submit" name="submit" value="SEND MESSAGE"  class="form-control" class="btn btn-success btn-send">
            </form>

                </div>
        </div>
            <table height="320px"></table>
  <?php require("includes/footer.php"); ?>