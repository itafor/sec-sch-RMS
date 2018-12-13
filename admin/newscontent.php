<?php require_once("includes/connection.php");?> 
<?php include("includes/header.php"); ?>
    
 <div class="frontContent">
    <div class="title">NEWS & EVENTS</div>      
    <div class="container"> 
      
           <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">NEWS CONTENT </h4>
                       <?php
  if(isset($_GET['id'])){
    $news_id=urlencode($_GET['id']);
  } 
  
   $selectnewsbody = mysqli_query($connection,"SELECT * FROM news where id=".$_GET["id"]."") ;
    if(mysqli_num_rows($selectnewsbody) > 0){
      while($news=mysqli_fetch_array($selectnewsbody)){
   $newsbody = $news['body'];
    echo " <h2 class='panel-heading'>" .$news_title = $news['newstitle']. "</h2>";  
     echo ' <p style="font-size: 20px; font-family: roboto; color: #000;" >'.htmlspecialchars($newsbody) . '</p>';
             
  }
  $get_news=mysqli_query($connection,"Select  news.body as Nbody, news.adddate as addeddate, news.newstitle as ntitle,  newsfiles.*
From news Inner Join
   newsfiles On  newsfiles.newstitle = news.newstitle
Where news.id=".$_GET["id"]." ");
 if(mysqli_num_rows($get_news) > 0){
 while($news=mysqli_fetch_array($get_news)){
    $newsbody = $news['Nbody']; 
    $photos = $news['newsfile'];
       $news_title = $news['ntitle'];
                 if(!empty($photos)){
    echo '<img src="newsfile/'.$photos.'" width="50%" height="50%">'; 
             
           
    
          }
  }
  
  
  }else{
     echo "phtose not selected".mysqli_error($connection); 
      
  }
  
    }else{
      echo "message body not selected".mysqli_error($connection);
    }
  
  

  ?>                                                                                    


 
                </div>

            </div

            </div>
        </div> <!--content-wraper end-->
 
    
       
    </div>
 </div>

   
<?php require("includes/footer.php"); ?> 