<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
                            
                       <?php     
    if(isset($_GET['id'])) {
    $id=urlencode($_GET['id']);
    $del=mysqli_query($connection,"DELETE FROM  anouncement WHERE id='$id'");
    if($del) {
     echo "Anouncement removed successfully" ;
    }
    }  
     $matric=$_SESSION['matricno'];                          
        $sql=mysqli_query($connection,"SELECT * FROM anouncement WHERE matricno = '".$matric."' ");
      
        if(mysqli_num_rows($sql) > 0)
        {
            echo ' <form method="post" action="deleteMultipleData.Announcement.php">'; 
            echo "<table  class='table table-bordered'>";
                    echo "<tr>";
                        echo "<th>S/N</th>";
                        echo "<th>MATRIC NO.</th>"; 
                        echo "<th>ANOUNCEMENT</th>";
                        echo "<th>LOGS</th>";
                        echo "<th>SELECT</th>"; 
                    echo "</tr>";
                     include("includes/multi_deleteBTN.php");
                  
                    $i=0;
                while($row=mysqli_fetch_array($sql))
                {
                    $i++;
                     
                    echo "<tr>";
                    echo "<td>{$i}</td>";
                     echo "<td>{$row["matricno"]}</td>";   
                    echo "<td>{$row["mes"]}</td>";
                    echo "<td>{$row["date"]}</td>";
                    ?>
                       <td><input type="checkbox" name="delid[]" class="case" value="<?php echo $row['id']; ?>" /></td>                                       
                      <?php
                    echo "</tr>";
                }
            echo "</table>";
           
        }
        else
        {
            echo "<p class='error'>No Anouncement yet</p>";
        }
    ?>                                                           
         </form>

                </div>
        </div>
            <table height="450px"></table>
  <?php require("includes/footer.php"); ?>