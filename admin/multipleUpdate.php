<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
                                 <h4 class="page-head-line">UPLOAD STUDENTS' RESULT</h4>
    <?php    
    if(isset($_POST['update'])) {

           $size = count($_POST['ca']);                     
    $i = 0;
    while ( $i <= $size) {
        $exam = $_POST['exam'][$i];
        $ca = $_POST['ca'][$i];
        $ftbf = $_POST['ftbf'][$i];
        $stbf = $_POST['stbf'][$i];
        $id =$_POST['id'][$i];
        $qurey = mysqli_query($connection,"UPDATE studentregister SET ca = '$ca', exam = '$exam', ftbf = '$ftbf', stbf = '$stbf' WHERE id = '$id' LIMIT 1 ");
        if($qurey){
            header('location: index.php');
        }

        ++$i;

        }   
}
       
          ?>            
       
                </div>
        
        </div>
  <?php require("includes/footer.php"); ?>