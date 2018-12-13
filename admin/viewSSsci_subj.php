<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">SS SCIENCE SubjectS</h4> 
    
   
   <?php
   $sql = mysqli_query ($connection,"SELECT * FROM sss_sci_subj ");
    if(mysqli_num_rows($sql)==0){
      echo "nothing found" ;
    } else{
       echo ' <div class="table-responsive">   
         <form method="post" action="ss_sci_subj_delOP.php"> 
      <table  border="2px" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                              <th>SUBJECTS</th>
                                                  <th>  <div style=" float:left;">
           &nbsp;<input type="checkbox" id="selectall"/> Check All   &nbsp;&nbsp;
           
          <abbr title="Remove subjects!">  <button  class="btn btn-danger" name="delete" type="submit" id="delete" value="Delete" onClick="return show_confirm22();" style="background:#F52126; color:#fff; border:none; font-size:16px; padding:4px 8px;">
                <i class="fa fa-remove ">DELETE</i></button>  </abbr>
         </div>
         <div style="clear:both;"></div>
    </div> </th>
                                               <div style="margin-top:20px;">
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
                                     
    //$array = array();          ?>
                      
              <tr>
    <?php
    $sn=0; 
    while ($row = mysqli_fetch_array($sql)) {
        $sn =$sn + 1;
        ?>  
                                    <tr>
                                            <td><?php echo $sn;?></td>
                                              <td><?php  echo $coursecode=htmlentities($row['name']);?></td>
                                              
                                             
                                <td> <abbr title="Remove subjects!">     <input type="checkbox" name="delid[]" class="case" value="<?php echo $row['id']; ?>" /></abbr> </td>      
                                    </tr> 
                                            
        
    <?php } $sn++;?>
<?php     
}

   
  
?>
       
    </tbody>
    </table>
       </form> 
           <input type="button" value="Print" onclick="javascript:printDiv('print')" />  
                </div>  
                
          </div>
        
 <?php require("includes/footer.php"); ?>