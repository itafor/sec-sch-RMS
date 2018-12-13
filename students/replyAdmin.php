<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
                  
             
                       <?php 
                       
                    
    if(isset($_GET['id'])) {
    $id=urlencode($_GET['id']);
   }        
       $show_complaint=mysqli_query($connection, "SELECT * FROM complain WHERE(id = '".$id."') "); 
                  while($i=mysqli_fetch_array($show_complaint)){ 
                 echo "<div style='color: white; background-color:black; font-size: 20px; text-align: center; width: 500px; margin-left:200px;'>". "</strong>".$i['name']." (".$i['matricno'].")"."<br/>"."</strong>".$i['MES'] ."  "."<small>".$i['LOGS']."</small>"."</div>";    
                  }
          $sql=mysqli_query($connection,"SELECT * FROM reply_complain WHERE  id='$id' Limit 1; ");
      
        if(mysqli_num_rows($sql) > 0)
        {       
             while($i=mysqli_fetch_array($sql))
                {
                   
                     ?>
          
                <form action=" " method="post">
                 <input type="hidden" name="matricno" value="<?php echo $i['matricno']; ?>">
                  
                 <input type="hidden" name="id" value="<?php echo $i['id']; ?>" >
                   <label style=" margin-left:200px;">Your Reply</label>
           <textarea name="mess"  class="form-control" cols="2" rows="3" style="width:500px; margin-left:200px;" required></textarea> 
           
            <input type="submit" name="submit" value="Reply"  class="form-control" style="width:100px; margin-left:200px;  background-color:black; font-size: 20px; text-align: center; color: white;" >
                 </form>
             
               
          <?php
          }
          
        }else
        {
            echo "<p class='error'>No reply from admin yet</p>";
        } 
    ?>  
     <?php
                  if(isset($_POST['submit'])){          
                $matricno=addslashes($_POST['matricno']);
                $rid=addslashes($_POST['id']);
              $mes=addslashes(htmlspecialchars($_POST['mess']));
              
             ini_set("date.timezone", "Africa/Lagos");
             date_default_timezone_set('Africa/Lagos'); 
             $newDateTime = date('D, d M Y, g:i a', time())."<br>"; ;
             
             if(!empty($mes)){
               $reply_body=mysqli_query($connection,"INSERT INTO reply_complain (matricno,MES,id,date) VALUES('$matricno','$mes','$rid','$newDateTime')");
               if($reply_body){
                $success= "Reply sent";
               }else{
                 $failure= "Reply failed";
               }
               }else{
                $failure= "Please enter your message to continue"; 
               }
               
                  }
                  
                  
                  
        $sql=mysqli_query($connection,"SELECT * FROM reply_complain WHERE  id='$id' ORDER BY replyID DESC");
      
        if(mysqli_num_rows($sql) > 0)
        {
               while($i=mysqli_fetch_array($sql))
                {
                    $usename=$i['adusername'];
                    if(!empty($usename)){
            echo "<div style='color: white; background-color:green; border-radius:5px; font-size: 20px; text-align: center; width: 500px; margin-left:200px;'>". "</strong>".$i['adusername']."  "."<small>".$i['date']."</small>"."<br/>"."</strong>".$i['MES'] ."</div>";
                    }else{
                      echo "<div style='color: yellow; background-color:blue; border-radius:5px; font-size: 20px; text-align: center; width: 500px; margin-left:200px;'>". "</strong>".$i['matricno']."  "."<small>".$i['date']."</small>"."<br/>"."</strong>".$i['MES']."</div>"; 
                     //echo  "<small>".$i['date']."<br/>"."</small>";
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

                </div>
        </div>
  <?php require("includes/footer.php"); ?>