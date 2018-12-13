<?php
  if(!adminloggedin()) {
 header("location: adminlogin.php");
exit();
 } 
?> 
<div class="userheader">
<a href="index.php"><?php 
    
    $select_profile="SELECT * FROM headersetting";
    $headerdisplay=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($headerdisplay)){
    $logo=$data['logo'];
    $schname=$data['schname']; 
     $schaddress=$data['schaddress']; 
     $phone=$data['phone'];
     $email=$data['email'];
     $website=$data['website'];
   echo "<img src='$logo' alt=\"My profile picture\" width='70px' height='70px'>";
   //echo '<td align="center">'.'<p class="schname">'.$schname.'</p>'.'</td>';
 }
?> </a>
 <div class="dropdown">
  <button class="dropbtn">
  <?php 
    $username=$_SESSION['username'];
    $select_profile="SELECT * FROM admin WHERE username='$username'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['picture']; 
    echo "<br/>";
 // echo "Welcome: ". $name=$data['firstname']."<br/>";
  echo "<img src='$picture' alt=\"My profile picture\" width='70' height='70' >";
 }
?>
  
  </button>
  <div class="dropdown-content">
    <a href="viewprofile.php"><span class="fa fa-eye"></span>View Profile</a>
    <a href="editAdminProfile.php"><span class="fa fa-edit"></span>Edit Profile</a>
    <a href="photo.php"><span class="fa fa-user"></span>Change Picture</a>
    <a href="changepassword.php"><span class="fa fa-key fa-fw"></span>Change Password</a>
    <a href="logout.php"><span class="fa fa-lock"></span>Logout</a>
  </div>
</div>
</div>