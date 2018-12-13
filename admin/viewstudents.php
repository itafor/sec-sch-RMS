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
                    if(isset($_GET['stdId'])){
                         $id=$_GET['stdId'];
                    $query=mysqli_query($connection,"DELETE FROM students WHERE  stdId='".$id."'");
        
                    if($query){
                    $success = "Student  deleted successfully";
                    }else{
                     $failure = "Student deletion failed";
                    }
                    
                    }   
          ?>            
                                      
 <?php
 global $initalsum, $failure ;
  //if(isset($_POST['submit'])){ 
 ?>                               
   <h4 class="page-head-line">All Students</h4>  
  <?Php
                      if (isset($_POST['search'])) {    
                       $regnum=$_POST['regnum'];
                       
                         $search_students=mysqli_query($connection,"select  * FROM students
 WHERE  matricno LIKE '%{$regnum}%' OR class ='".$_POST['regnum']."' OR dept='$regnum' OR  gender='$regnum'");  
 
         if(mysqli_num_rows($search_students) == 0) {
     $failure = "Nothing found".mysqli_error($connection);
   } else{
  echo '  
             
    <table class="table table-bordered">
                                    <thead>
                                        <tr>
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

                                                   <th>ACTION</th>


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
                                                   

                                                   <td>
                                            <a href="viewstudents.php?stdId=<?php echo $row['stdId']?>" onclick="return confirm('Deleting this student will remove all info about him/her,this action can not be undo. Are you sure you want to delete this applicant record?')">
                            <button  class="btn btn-danger" role="button"><i class="fa fa-trash"></i></button> </a> 
                                <a href="addStudentPix.php?stdId=<?php echo $row['stdId']?>" onclick="return confirm('You are about to update this student picture. Do you want to continue?')">
                            <button  class="btn btn-info" role="button"><i class="fa fa-pencil"></i>Pix</button> </a>

                               <a href="editStudentProfile.php?stdId=<?php echo $row['stdId']?>" onclick="return confirm('You are about to update this student profile. Do you want to continue?')">
                            <button  class="btn btn-success" role="button"><i class="fa fa-upload"></i></button> </a>
                          </td>                     
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++; 
}
 
                      } 
                        ?>
                         
<form action="" method="POST" >
          <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                Search students by Registration number OR class OR dept OR gender:<span style="color:red">*</span>
                    <input id="searchfield" type="text" name="regnum" class="form-control" placeholder="search books" value="<?php echo isset($_POST['regnum']) ? $_POST['regnum'] : '' ?>">
                    
                </div>
            </div> 
          
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

<?php
// find out how many rows are in the table 
$sql = "SELECT COUNT(*) FROM students";
$result = mysqli_query($connection, $sql) or trigger_error("SQL", E_USER_ERROR);
$r = mysqli_fetch_row($result);
$numrows = $r[0];

// number of rows to show per page
$rowsperpage = 10;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   // cast var as int
   $currentpage = (int) $_GET['currentpage'];
} else {
   // default page num
   $currentpage = 1;
} // end if

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
   // set current page to last page
   $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
   // set current page to first page
   $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;

// get the info from the db 
$sql = "SELECT * FROM students LIMIT $offset, $rowsperpage";
$result = mysqli_query(  $connection, $sql) or trigger_error("SQL", E_USER_ERROR);


?>

<?php     
 
   if(mysqli_num_rows($result) == 0) {
     $failure = "Empty students record".mysqli_error($connection);
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>PICTURES</th>
                                                <th>FIRST NAME</th>
                                                <th>MIDDLE</th>
                                                <th>LAST NAME</th>
                                                 <th>GENDER</th> 
                                                <th>CLASS</th>  
                                                 <th>DEPT</th>
                                                   <th>REG. NO</th>
                                                   <th>PASSWORD</th>
                                                 <th>ADDRESS</th>
                                                 <th>ACTION</th> 
                                                    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>


 <?php  
 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($result))
{  
$sn =$sn + 1;     
?>
<?php 
   $photo = $row['picture'];
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                          <td><?php 
                            
                           echo "<img src='$photo' width='100' height='100' alt=\"My profile picture\">";  
                      
                  ?></td> 
                                             <td style="text-align: center;"><?php echo htmlentities($row['firstname']);?></td>
                                              <td><?php echo htmlentities($row['middlename']);?></td>
                                              <td><?php echo htmlentities($row['lastname']);?></td>
                                             
                                               <td><?php echo $ca= htmlentities($row['gender']);?></td> 
                                               
                                               <td><?php echo $exam =htmlentities($row['class']);?></td>
                                                 <td><?php echo $exam =htmlentities($row['dept']);?></td>
                                                 <td><?php echo $exam =htmlentities($row['matricno']);?></td>    
                                                  <td><?php echo $exam =htmlentities($row['password']);?></td> 
                                               <td style="width: 70px; height: 60px; font-size: 12px; text-align: center;"><?php echo htmlentities($row['stdaddress']);?></td>
                                                 <td>
                                            <a href="viewstudents.php?stdId=<?php echo $row['stdId']?>" onclick="return confirm('Deleting this student will remove all info about him/her,this action can not be undo. Are you sure you want to delete this applicant record?')">
                            <button  class="btn btn-danger" role="button"><i class="fa fa-trash"></i></button> </a> 
                                <a href="addStudentPix.php?stdId=<?php echo $row['stdId']?>" onclick="return confirm('You are about to update this student picture. Do you want to continue?')">
                            <button  class="btn btn-info" role="button"><i class="fa fa-upload"></i>Pix</button> </a>

                               <a href="editStudentProfile.php?stdId=<?php echo $row['stdId']?>" onclick="return confirm('You are about to update this student profile. Do you want to continue?')">
                            <button  class="btn btn-success" role="button"><i class="fa fa-pencil"></i></button> </a>
                          </td>                                       
                                          
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++; 
} ?>  
  <?php
  //} 
       
 //}
//}

 ?>   
 <?php
 if(!$failure)              
                    
                      ?>
                      
      
                                    </tbody>
                                </table>


<?php

/******  build the pagination links ******/
// range of num links to show
$range = 3;

// if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1' style='font-size:30px;'><<</a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage' style='font-size:30px;'><</a> ";
} // end if 

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $totalpages)) {
      // if we're on current page...
      if ($x == $currentpage) {
         // 'highlight' it but don't make a link
         echo " <b style='font-size:30px; color:green;'>[ $x ]</b> ";
      // if not current page...
      } else {
         // make it a link
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x' style='font-size:30px; color:blue;'>$x</a> ";
      } // end else
   } // end if 
} // end for

// if not on last page, show forward and last page links        
if ($currentpage != $totalpages) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage' style='font-size:30px;'>> </a> ";
   // echo forward link for lastpage
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages' style='font-size:30px;'>>></a> ";
} // end if
/****** end build pagination links ******/
?>




























                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
          echo "<span class='btn btn-success'>" .$success."</span>";
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
        
</div>
</div>
 <?php require("includes/footer.php"); ?>