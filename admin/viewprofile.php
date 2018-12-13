<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">Add New Department</h4> 
                                     <table  id="studentresultdetail"> 
                 <tr>
                   <td class='tblwidth'> 
                    <?php 
    $username=$_SESSION['username'];
    $select_profile="SELECT * FROM admin WHERE username='$username'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['picture']; 
    echo "<br/>";
 // echo "Welcome: ". $name=$data['firstname']."<br/>";
  echo "<img src='$picture' alt=\"My profile picture\">";         
 }
?></td>
                 </tr>
        <tr> 
        <br/><br/>
<br/><br/> 
        <td class='tblwidth'>
        
        <?php 
         $username=$_SESSION['username'];   
   $result=mysqli_query($connection,"select * FROM admin WHERE username='$username'");        
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
        "<span class='stddetals'>FULL NAME: </span>"."<br/>".
       "<span class='stddetals'>EMAIL ADDRESS:  </span>"."<br/>".
       "<span class='stddetals'>PHONE NUMBER: </span>  "."<br/>".
            
      "</P>";
      echo"  </td> "; 
      echo"  <td class='tblwidth'> ". 
       " <span class='stddetals'>".$name=$data['fullname']."</span><br/>". 
       "<span class='stddetals'>" .$name=$data['email']."</span><br/>". 
       " <span class='stddetals'>" .$name=$data['phone']."</span><br/>".
      
     " </td> "; 
    
    echo "<br/>";
 }
}
 ?>  

 </tr> 
  </table> 
  
    <br/><br/>
       
  
                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     } 
     ?>
      
      <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">  
        <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div> 
  
 </div>
                                                                                   

                </div>  
                
          </div>   
          
     
 <?php require("includes/footer.php"); ?>