<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
 
                        <?php 
                      
        if(isset($_POST["submit"]))
        {
          $comment =addslashes( htmlspecialchars( $_POST["comment"]));
            if(empty($_POST['comment'])){
               $failure = " Please enter your comment";
            }else{
                
            $sql=mysqli_query($connection,"insert into comment (BID,matricno,COMM,LOGS) values ({$_GET["id"]},'{$_SESSION['matricno']}','{$comment}',now())");
           } 
            
        }
        
        
        $sql=mysqli_query($connection,"SELECT * FROM book WHERE id=".$_GET["id"]);
         
            if(mysqli_num_rows($sql) >0 )
            {
                echo "<table class='table table-bordered'>";
                    while($row=mysqli_fetch_array($sql))
                    {
                            echo "<tr><th>TITLE</th><td>{$row["BTITLE"]}</td></tr>";
                            echo "<tr><th>KEYWORDS</th><td>{$row["KEYWORDS"]}</td></tr>";
                    }
                echo "</table>";
                ?>
                    <div id="center">
                        <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="post">
                            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                Your Comments:<span style="color:red">*</span>
           <textarea name="comment"  class="form-control"></textarea>  
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <button type="submit" name="submit" >Post Now</button>
                        </form>
                        <?php 
                        if(!isset($_GET['id'])){
                          $failure = "<p>Please select a book to comment on</p>"; 
                        }else{
  $s=mysqli_query($connection,"Select students.*, comment.*, comment.LOGS, comment.BID
From comment Inner Join
  students On comment.matricno = students.matricno
Where comment.BID =".$_GET["id"]." order by comment.CID DESC");
                           
                            if(mysqli_num_rows($s) > 0 )
                            {
                                while($ro=mysqli_fetch_array($s))
                                {
                                    echo "<p><strong>{$ro["firstname"]} : </strong>
                                            {$ro["COMM"]}   
                                            <i>&nbsp;&nbsp;{$ro["LOGS"]}</i></p>";
                                }
                            }
                            else
                            {
                                echo "<br><br>" ;
                                $failure = "<p>NO comment yet</p>".mysqli_error($connection);
                            }
                
                        ?>
                    </div>
                <?php
            }
            }
            else
            {
                $failure = "<p class='error'>No Book Record Found</p>";
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
                </div>
        </div>
  <?php require("includes/footer.php"); ?>