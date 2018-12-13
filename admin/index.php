<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?> 

   

                 <div class='card'>

            <div class='card-body'>
              <div class='well dash-box'>
                    <h2> <i class='fa fa-eye'></i>
                   <?php   $countStudent =mysqli_query($connection,"SELECT * FROM Students"); 
                  echo   $nowRow = mysqli_num_rows($countStudent);
                  ?> 
                </h2>
          <a href='viewstudents.php'> <h4>Students</h4> </a>
                    
                </div>
              </div>
          </div>

       <div class='card'>
          <div class='card-body'>
              <div class='well dash-box'>
                    <h2> <i class='fa fa-bar-chart'></i> Results</h2>
                    
          <a href='checkresultform.php'> <h4>Check Result</h4> </a>

                </div>
            </div>
        </div>

           <div class='card'>
            <div class='card-body'>
              <div class='well dash-box'>
                    <h2> <i class='fa fa-user'></i>
                    	<?php   $countstaff =mysqli_query($connection,"SELECT * FROM admin"); 
                  echo   $nowRow = mysqli_num_rows($countstaff);
                  ?> 
                    </h2>
                    
          <a href='approveAdmin.php'> <h4> Staff</h4> </a>

                  </div>
              </div>
          </div>   

     
                </div>  
                
          </div>
     
     
 <?php require("includes/footer.php"); ?>