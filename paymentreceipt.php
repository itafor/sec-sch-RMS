 <?php include("includes/header.php"); ?>
 <?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>  

<div class="container">
<div id="print"> 
 <div class="frontContent">        
  <?php 
if(isset($_POST['receipt'])){
$bankslipno=htmlspecialchars($_POST['bankslipno']);
$email=htmlspecialchars($_POST['email']);
 
if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                echo "<span class='btn btn-warning'>Your email is not valid."."</span>";    
                }else{
if(!empty($email)){
$check_email=mysqli_query($connection,"SELECT * FROM application WHERE email='$email'");
    if(mysqli_num_rows($check_email)==0){
        echo "<span class='btn btn-warning'>This email address ".$email." does not exist"."</span>";
    }else{
            $check_trans=mysqli_query($connection,"SELECT * FROM application WHERE bankslipno='$bankslipno'");
    if(mysqli_num_rows($check_trans)==0){
        echo "<span class='btn btn-warning'>This Bank deposit ID ".$bankslipno." does not exist, please try later"."</span>";
    }else{
        $select_profile="SELECT * FROM application WHERE email='$email'  AND bankslipno='$bankslipno'";
    $result=mysqli_query($connection,$select_profile);
    if(!$result) {
        echo "<span class='btn btn-warning'>This Bank deposit no and email does not matched, please try later"."</span>"; 
    }else{
           ?>
           <img src="images/resultheader.png" class="img-responsive" style="width:100%;" >
                <h3 style="text-align: center;">PAYMENT RECEIPT</h3>
         <table  id="studentresultdetail"> 
           <tr>
            <td class='tblwidth'>  <?php 
    $select_profile="SELECT * FROM application WHERE email='$email'  AND bankslipno='$bankslipno'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['picture']; 
    echo "<br/>";
 // echo "Welcome: ". $name=$data['firstname']."<br/>";
  echo "<img src='$picture' alt=\"My profile picture\">";         
 }
 ?></td>
           </tr>
           <br/> <br/> <br/>
        <tr>  
        <td class='tblwidth'>
         <?php   
            $select_profile="SELECT * FROM application WHERE email='$email' AND bankslipno='$bankslipno'";
    $result=mysqli_query($connection,$select_profile); 
          while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
        "<span class='stddetals'>Student Full name: </span>"."<br/>".
        "<span class='stddetals'>Deposit Slip No: </span>  "."<br/>".
        "<span class='stddetals'>Total Amount:</span>  "."<br/>".  
       "<span class='stddetals'>Bank Name/Branch:</span>  "."<br/>".
       "<span class='stddetals'>Transaction Date/Time: </span>  "."<br/>".
        "<span class='stddetals'>Payment Item Name:  </span>"."<br/>".
        "<span class='stddetals'><b>Transaction ID: </b></span>  " ."<br/>". 
        "<span class='stddetals'><b>Receipt No: </b></span>  " ."<br/>". 
       "<span class='stddetals'>Processesd Date: </span>  "."<br/>".
      "</P>";
      echo"  </td> "; 
      echo"  <td class='tblwidth'> ". 
         "<span class='stddetals' >" .$name=$data['surname']."  " .$name=$data['middlename']."   " .$name=$data['lastname']."</span><br/>". 
       " <span class='stddetals'>" .$name=$data['bankslipno']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['totalatm']."</span><br/>".
       " <span class='stddetals'>".$name=$data['bankname']."</span><br/>". 
       " <span class='stddetals'>" .$name=$data['transdate']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['paymentitem']."</span><br/>".
       " <span class='stddetals'>".$name=$data['code']."</span><br/>". 
       " <span class='stddetals'>".$name=$data['transid']."</span><br/>". 
       "<span class='stddetals'>" .$name=$data['processedate']."</span><br/>".
     " </td> ";
    
    echo "<br/>";
     echo"  <td class='tblwidth'> "; 
 // echo "<img src='$picture' alt=\"My profile picture\" class='prof_img'>"."<br>"."<h3 style='color: white;'>". $name=$data['firstname']." ".$data['lastname']."</h3>";
 }
 ?>  
 

 <?php
 }
?>
   </td>   

 </tr> 

  </table> 
  
   
   <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div>
   </div>
    </div>  
    <?php  
        
    }
}
}
}
}
?>


  </div>
  </div>
 <?php require("includes/footer.php"); ?> 