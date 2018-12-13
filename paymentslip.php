 <?php include("includes/header.php"); ?>
 <?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>  

<div class="container">
<div id="print"> 
 <div class="frontContent">  
       
  <?php 
if(isset($_POST['slip'])){
$email=htmlspecialchars($_POST['email']);
if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                echo "<span class='btn btn-warning'>Your email is not valid."."</span>";    
                }else{
if(!empty($email)){
$check_email=mysqli_query($connection,"SELECT * FROM application WHERE email='$email'");
    if(mysqli_num_rows($check_email)==0){
        echo "<span class='btn btn-warning'>This email address ".$email." does not exist in our records"."</span>";
    }else{
           ?>
           <img src="images/resultheader.png" class="img-responsive" style="width:100%;" >
                <h3 style="text-align: center;">BANK PAYMENT SLIP</h3>
         <table  id="studentresultdetail"> 
         
        <tr>  
        <td class='tblwidth'>
         <?php   
            $select_profile="SELECT * FROM application WHERE email='$email'";
    $result=mysqli_query($connection,$select_profile);
          while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
        "<span class='stddetals'>SURNAME: </span>"."<br/>".
        "<span class='stddetals'>MIDDLE NAME: </span>  "."<br/>".
        "<span class='stddetals'>LAST NAME:</span>  "."<br/>".  
       "<span class='stddetals'>FIRST CHOICE:</span>  "."<br/>".
       "<span class='stddetals'>SECOND CHOICE: </span>  "."<br/>".
       "<span class='stddetals'><b>Transaction id: </b></span>  " ."<br/>". 
       "<span class='stddetals'> ACCOUNT NUMBER:  </span>"."<br/>".
        "<span class='stddetals'> ACCOUNT NAME:  </span>"."<br/>". 
         "<span class='stddetals'> BANK:  </span>"."<br/>". 
       "<span class='stddetals'>DATE: </span>  "."<br/>".
      "</P>";
      echo"  </td> "; 
      echo"  <td class='tblwidth'> ". 
         "<span class='stddetals' >" .$name=$data['surname']."</span><br/>".
        " <span class='stddetals'>" .$name=$data['middlename']."</span><br/>".
         " <span class='stddetals'>" .$name=$data['lastname']."</span><br/>".  
       " <span class='stddetals'>" .$name=$data['firstchoice']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['secondchoice']."</span><br/>".
       " <span class='stddetals'>".$name=$data['code']."</span><br/>". 
       " <span class='stddetals'>" ."2028183963"."</span><br/>".
        " <span class='stddetals'>" ."De Potter College of Health Technology"."</span><br/>". 
         " <span class='stddetals'>" ."First Bank"."</span><br/>". 
       "<span class='stddetals'>" .$name=$data['date']."</span><br/>".
     " </td> ";
    
    echo "<br/>";
     echo"  <td class='tblwidth'> "; 
 // echo "<img src='$picture' alt=\"My profile picture\" class='prof_img'>"."<br>"."<h3 style='color: white;'>". $name=$data['firstname']." ".$data['lastname']."</h3>";
 }
 ?>  
 
  <?php 
    $select_profile="SELECT * FROM application WHERE email='$email'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['picture']; 
    echo "<br/>";
 // echo "Welcome: ". $name=$data['firstname']."<br/>";
  echo "<img src='$picture' alt=\"My profile picture\">";         
 }
?>
   </td>   

 </tr> 

  </table> 
  
   <div class="instruction"> PLEASE CONFIRM THAT ALL DETAILS SHOWN ABOVE ARE CORRECT BEFORE YOU PROCEED TO MAKE PAYMENT</div>
   <p>You can pay cash, cheque or bankDraft with this payment slip at any branch of the above acquiring bank(s) only<br/>
   Make sure you Collect your payment receipt from the bank after payment
  </P>
   <div class="instruction">
    <h2>PAYMENT PROCEEDURE </h2>
    <ul>
    <li>Print this Payment slip and procced to the acquiring bank(s) for payment</li> 
    <li>Take evident of payment (bank deposit slip) to the school for verification</li> 
    <li>Wait for the school admin to process your payment receipt</li>
    <li>Return to the portal to print your payment receipt</li>
     <li>The school admin must sign and stamp your payment receipt</li> 
    </ul>
   </div>
   
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
?>


  </div>
  </div>
 <?php require("includes/footer.php"); ?> 