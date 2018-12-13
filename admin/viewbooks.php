<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
                            <h4 class="page-head-line">AVAILABLE BOOKS</h4> 
                                                        <br/>
                            <?php 
       $query=mysqli_query($connection,"SELECT * FROM book ");
            if(mysqli_num_rows($query) > 0){
            echo "<table class='table table-bordered'>";
                    echo "<tr>";
                        echo "<th>S/N</th>";
                        echo "<th>TITLE</th>";
                        echo "<th>KEYWORDS</th>";
                        echo "<th>ACTION</th>";
                        echo "<th>ACTION</th>";
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