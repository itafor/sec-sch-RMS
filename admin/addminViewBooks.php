<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">AVAILABLE BOOKS IN LIBRARY</h4>
   <a href="addbook.php">Add More Books</a>
   <?php
     if(isset($_GET['id'])){
      $id=urlencode($_GET['id']);
      $getbook=mysqli_query($connection, "DELETE FROM book WHERE id= '$id'");
      if($getbook){
        $success =  "Book deleted successfully"; 
      }else{
       $failure =  "Book deletion failed"; 
      }
     }
    ?>
         <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-danger'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?>      
     <br/>  <br/>  <br/>
                            <?php 
       $query=mysqli_query($connection,"SELECT * FROM book ");
            if(mysqli_num_rows($query) > 0){
            echo "<table class='table table-bordered'>";
                    echo "<tr>";
                        echo "<th>S/N</th>";
                        echo "<th>TITLE</th>";
                        echo "<th>KEYWORDS</th>";
                         echo "<th>DOWNLOAD</th>";
                        echo "<th>REMOVE</th>";
                         echo "<th>VIEW COMMENT</th>";
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
                    echo "<td><a href='{$row['FILE']}' target='_blank'><button  class='btn btn-primary' role='button'><i class='fa fa-download '></i></button></a></td>";
                                     
                    ?> 
                     <td>
                            <a href="addminViewBooks.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure you want to delete this book? You cant revert this action')">
                            <button  class="btn btn-danger" role="button"><i class="fa fa-trash"></i></button> </a> </td>
                            <td>
                            <a href="comment_book.php?id=<?php echo $row['id']?>">
                            <button  class="btn btn-info" role="button"><i class="fa fa-eye">Comment</i></button> </a> </td>    
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