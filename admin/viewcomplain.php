<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
<h4 class="page-head-line">Student's messeges</h4> 
  
    <?php     
    if(isset($_GET['id'])) {
    $id=urlencode($_GET['id']);
    $del=mysqli_query($connection,"DELETE FROM complain WHERE id='$id'");
    if($del) {
     echo "student reaction removed successfully" ;
    }
    }                            
        $sql=mysqli_query($connection,"SELECT students.*, complain.*  from students inner JOIN complain on students.matricno= complain.matricno WHERE complain.username= '{$_SESSION["username"]}'");
      
        if(mysqli_num_rows($sql) > 0)
        {
            echo "<table  class='table table-bordered'>";
                    echo "<tr>";
                        echo "<th>S/N</th>";
                        echo "<th>STUDENT</th>";
                        echo "<th>MATRIC NO.</th>"; 
                        echo "<th>REQUEST</th>";
                        echo "<th>LOGS</th>";
                        echo "<th>ACTION</th>"; 
                    echo "</tr>";
                    $i=0;
                while($row=mysqli_fetch_array($sql))
                {
                    $i++;
                    echo "<tr>";
                    echo "<td>{$i}</td>";
                    echo "<td>{$row["firstname"]}  {$row["middlename"]}</td>";
                     echo "<td>{$row["matricno"]}</td>";   
                    echo "<td>{$row["MES"]}</td>";
                    echo "<td>{$row["LOGS"]}</td>";
                    ?>
                    <td>
                       <a href="viewcomplain.php?id=<?php echo $row['id']?>" target="_blank" onclick="return confirm('Are you sure you want to delete this student record?')">
                            <button  class="btn btn-danger" role="button"><i class="fa fa-trash"></i>  DELETE</button> </a>                                        
                      <?php
                    echo "</tr>";
                }
            echo "</table>";
        }
        else
        {
            echo "<p class='error'>No complain yet</p>";
        }
    ?>                                                           

                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>