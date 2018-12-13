<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>
  <?php
 if(!isset($_SESSION["matricno"])){
  header("location: ../studentLogin.php");
  exit();
 } 
?>
<div class="userheader">
<a href="index.php"><img src="images/logo.PNG" class="img-responsive" alt="MY PROFILE" width="150" height="150"></a>
 <div class="dropdown">
  <button class="dropbtn"> 
   <?php 
    $matricno=$_SESSION['matricno'];
    $select_profile="SELECT * FROM students WHERE matricno='$matricno'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['picture']; 
    echo "<br/>";
 // echo "Welcome: ". $name=$data['firstname']."<br/>";
  echo "<img src='$picture' alt=\"My profile picture\"  style='width:70'; height='70'; border-radius:50px; >";
 }
?>
  
  </button>
  <div class="dropdown-content">
    <a href="../viewProfile.php"><span class="fa fa-eye"></span>View Profile</a>
    <a href="../editProfile.php"><span class="fa fa-edit"></span>Edit Profile</a>
    <a href="../photo.php"><span class="fa fa-user"></span>Change Picture</a>
    <a href="../changepass.php"><span class="fa fa-key fa-fw"></span>Change Password</a>
    <a href="../logout.php"><span class="fa fa-lock"></span>Logout</a>
  </div>
</div>

</div>
  <div id="menus">
  <div class="toggle-btn" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
  </div>
  <ul>
    <li><a href=""><span class="fa fa-tachometer"></span>Student Dashboard</a></li>
        <li><a href="../complain.php"><span class="fa fa-envelope"></span>Contact Admin</a></li>
       <li><a href=""><span class="fa fa-graduation-cap"></span>COURSES</a>
             <ul>
             <li><a href="../courseRegistration.php"><span class="fa fa-plus"></span>Register Courses</a></li>
             <li><a href="../viewRegCourses.php"><span class="fa fa-eye"></span>View Courses</a></li>
             <li><a href="../delCoursesform.php"><span class="fa fa-trash"></span>Drop course(s)</a></li> 
            
          </ul>
             </li> 
                <li><a href="checkresultform.php"><span class="fa fa-check"></span>Check Result</a></li> 
                   <li><a href=""><span class="fa fa-book"></span>E-LIBRARY</a>
                      <ul>
             <li><a href="../viewbooks.php"><span class="fa fa-eye"></span>View Books</a></li> 
             <li><a href="../requestbook.php"><span class="fa fa-list"></span>Request Books</a></li> 
             <li><a href="../searchbook.php"><span class="fa fa-search"></span>Search Books</a></li>  
          </ul>
       </li>
       
            <li><a href="../deleteAnouncement.php"><span class="fa fa-remove"></span>Delete Anouncement</a></li>
             <li><a href=""><span class="fa fa-"></span></a>
               
             </li>
          <li><a href=""><span class="fa fa-"></span></a>
              
              </li>
               <li><a href=""><span class="fa fa-"></span></a></li>
                <li><a href=""><span class="fa fa-"></span></a></li>
                 <li><a href=""><span class="fa fa-"></span></a></li>
                 <li><a href=""><span class="fa fa-"></span></a></li> 
  </ul>
  </div>
  
      
               <div class="container">  
                            <div class="admincontent">
                            <h4 class="page-head-line">AVAILABLE BOOKS</h4> 
                                                        <br/>
                            <?php 
       $query=mysqli_query($connection,"SELECT * FROM book ");
            if(mysqli_num_rows($query) > 0){
            echo "<table class='table table-bordered'>";
                    echo "<tr>";
                        echo "<th>S/N</th>";
                        echo "<th>BOOK TITLE</th>";
                        echo "<th>KEYWORDS</th>";
                        echo "<th>DOWNLOAD</th>";
                        echo "<th>COMMENT</th>";
                    echo "</tr>";
                    $i=0;
                while($row=mysqli_fetch_array($query))
                {
                    $i++;
                    echo "<tr>";
                    echo "<td>{$i}</td>";
                    echo "<td>{$row["BTITLE"]}</td>";
                    echo "<td>{$row["KEYWORDS"]}</td>";
                  
                    ?>
                    <?php
                    echo "<td><a href='{$row["FILE"]}' target='_blank'><button  class='btn btn-primary' role='button'><i class='fa fa-download '></i></button></a></td>";
                                     
                    ?> 
                     <td>
                            <a href="../students/comment_book.php?id=<?php echo $row['id']?>">
                            <button  class="btn btn-info" role="button"><i class="fa fa-">Comment</i></button> </a> </td>
                                
                    <?php
                    echo "</tr>";
                }
            echo "</table>";
        }
        else
        {
           $failure =  "The book store is empty"; 
        }
    ?>
                </div>
        </div>
  <?php require("includes/footer.php"); ?>