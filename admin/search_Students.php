<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
              
 <?php 
    
    $select_profile="SELECT * FROM headersetting";
    $headerdisplay=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($headerdisplay)){
    $logo=$data['logo'];
    $schname=$data['schname']; 
     $schaddress=$data['schaddress']; 
     $phone=$data['phone'];
     $email=$data['email'];
     $website=$data['website'];
    echo "<br/>";
    echo '<table width="100%" class="resultsheet">';
     echo '<tr class="resultrow">';
  echo "<td class='resultheaderimage'><img src='$logo' alt=\"My profile picture\" ></td>";
   echo '<td align="center">'.'<p class="schname">'.$schname.'</p>'.'<p class="headerdetals">'.$schaddress.'</p>'.'<p class="headerdetals">'.$website.'</P>'.'<p class="headerdetals">'.'Tel: '.$phone.'</p>'.'<p class="headerdetals">'.'E-mail: '.$email.'</p>'.'</td>';
 }
?>  
</tr>
</table>
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
                       <?Php
                      if (isset($_POST['search'])) {    
                       $regnum=$_POST['regnum'];
                       
                         $search_students=mysqli_query($connection,"select  * FROM students
 WHERE  class ='".$_POST['regnum']."' ");  
 
         if(mysqli_num_rows($search_students) == 0) {
     $failure = "Nothing found".mysqli_error($connection);
   } else{
      
  echo '             <table class="table table-bordered">
                                    <thead> ';
                                    echo "<h2>" ."CLASS:". $regnum ."</h2> "; 
                                      echo '  <tr>
                                            <th>S/N</th>
                                             <th>PHOTO</th>
                                                <th>SURNAME</th>
                                                <th>MIDDLE</th>
                                                <th>LAST NAME</th>
                                                 <th>PASSWORD</th>
                                                   <th>REG. NO</th> 
                                                   <th>CLASS</th>
                                                   <th>DEPARTMENT</th>
                                                  
                                                   <th>GENDER</th>
                                                  
                                                   <th>ADDRESS</th>
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;      
$sn=0; 
while($row=mysqli_fetch_array($search_students))
{  
$sn =$sn + 1;
$pix=$row['picture'];     
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                      <?php 
                                      if (empty($pix)){
                                      echo "<td>"."<img src='../students/images/default.jpg' alt=\"profile picture\" width='60' heigth='60' style='border-radius:50%;' >"."</td>";
                                      } else{
                                         echo "<td>"."<img src='../students/$pix' alt=\"profile picture\" width='60' heigth='60' style='border-radius:50%;' >"."</td>";     
                                      }
                                      ?>  
                                             <td><?php echo htmlentities($row['firstname']);?></td>
                                              <td><?php echo htmlentities($row['middlename']);?></td>
                                              <td><?php echo htmlentities($row['lastname']);?></td>
                                               <td><?php echo htmlentities($row['password']);?></td>
                                                 <td><?php echo $exam =htmlentities($row['matricno']);?></td>
                                                 <td><?php echo $exam =htmlentities($row['class']);?></td> 
                                                 <td><?php echo $exam =htmlentities($row['dept']);?></td>
                                                
                                                 <td><?php echo $exam =htmlentities($row['gender']);?></td>
                                                 
                                                  <td><?php echo $exam =htmlentities($row['stdaddress']);?></td>
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++;
$failure="";  
}
     
                      } 
                        ?>
      
                   <form action="" method="POST" >
          <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                Search students by class:<span style="color:red">*</span>
                    <input id="searchfield" type="text" name="regnum" class="form-control" placeholder="search books" value="<?php echo isset($_POST['regnum']) ? $_POST['regnum'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div> </br>
          
        </div>    
             
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="submit" name="search" value="SEARCH" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
          </form>
          
          <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div> 

 </div>  
   
 
                      
      
                                    </tbody>
                                </table>
                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
          echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?>
        
    
                </div>
        </div>   
        
</div>
</div>
 <?php require("includes/footer.php"); ?>