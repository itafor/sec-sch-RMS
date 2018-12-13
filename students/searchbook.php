<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>                   
                                                                      
 <?php
 global $initalsum, $failure ;
  //if(isset($_POST['submit'])){ 
 ?>                               
  <?php    
    if (isset($_POST['search'])) {
    $book = $_POST['book'];
    if(empty($book)){
         echo "<span class='btn btn-warning'>" ."Please enter a keyword to search for"."</span>";        
    }else{
   
 $result=mysqli_query($connection,"select  * FROM book
 WHERE  BTITLE LIKE '%{$book}%' OR KEYWORDS LIKE '%{$book}%'");      
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($result) == 0) {
     $failure = "Not found".mysqli_error($connection);
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>BOOK TITLE</th>
                                                   <th>BOOK KEYWORD</th> 
                                                 
                                                    
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


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                             
                                             <td><?php echo htmlentities($row['BTITLE']);?></td>
                                              <td><?php echo htmlentities($row['KEYWORDS']);?></td>
                                                 <td>
           <a href=".php?id=<?php echo $row['id']?>" target="_blank" onclick="return confirm(' Are you sure you want to delete this book? This action can not be revert')">
             </a> </td>                                       
                                          
                                        </tr>
                                        
                           
                                      
                                      
<?php 
}
$sn++;
 
} ?>  
  <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div>         
  <?php
  //} 
       
 }
}

 ?>   
 <?php
 if(!$failure)              
                    
                      ?>
                      
      
                                    </tbody>
                                </table>
                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     } 
     ?>
      
      
      <form action="" method="POST" >
          <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                   search books by title or keyword:<span style="color:red">*</span>
                    <input id="searchfield" type="text" name="book" class="form-control"  placeholder="search books" value="<?php echo isset($_POST['student']) ? $_POST['student'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div> </br>
          
        </div>
          <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <input id="form_name" type="submit" name="search" value="Login" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            </div>
        </form>
                </div>
        </div>
  <?php require("includes/footer.php"); ?>