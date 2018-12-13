<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>De Potter College</title> 
     <link rel="icon" type="image/png" href="images/logo.png"> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=2y2is9b6pjgpk0z18qga7kcql2qr6gml3y2huxktzcwt9t6c"></script> 
  <script>tinymce.init({ selector:'textarea' });</script>

 <link href="assets/css/bootstrap.css" rel="stylesheet" /> 
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> 
     <link rel="stylesheet" type="text/css" href="fa/css/font-awesome.css"> 
      <link rel="stylesheet" type="text/css" href="fa/css/font-awesome.min .css">
        <link rel="stylesheet" type="text/css" href="flexslider/flexslider.css"> 
     <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        
         
        <link rel="stylesheet"  href="datepicker/jquery.datetimepicker.min.css"> 
    <script src="datepicker/jquery.datetimepicker.min.js"> </script> 
    <script src="datepicker/jquery.js"> </script>  
      <script src="datepicker/jquery.datetimepicker.full.min.js"> </script> 
    <script src="datepicker/jquery.datetimepicker.full.js"> </script>  
                 <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
    <script>
$(document).ready(function(){
$('#state').on('change',function(){
   $stateName=$(this).val();
   if($stateName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'state='+$stateName,
          success:function(html){
           console.log(html);
           $('#lga').html(html);
          },
      
      });
   } else{
       $('#lga').html('<option value="">Select select state first </option>');
   }
});

$('#dept').on('change',function(){
   $deptName=$(this).val();
   if($deptName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'dept='+$deptName,
          success:function(html){
           console.log(html);
           $('#level').html(html);
          },
      
      });
   } else{
       $('#level').html('<option value="">Select dept first </option>');
   }
});

$('#level').on('change',function(){
   $levelName=$(this).val();
   if($levelName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'level='+$levelName,
          success:function(html){
           console.log(html);
           $('#semester').html(html);
          },
      
      });
   } else{
       $('#semester').html('<option value="">Select level first </option>');
   }
});

$('#semester').on('change',function(){
   $semesterName=$(this).val();
   if($semesterName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'semester='+$semesterName,
          success:function(html){
           console.log(html);
           $('#course').html(html);
          },
      
      });
   } else{
       $('#course').html('<option value="">Select semester first </option>');
   }
});
}); 
</script>  
                                                                      
</head>
<body>
<div class="page-header no-margin no-padding">
  <img src="https://kodelicious.000webhostapp.com/depotterhealthTech/DP/images/Header.png" class="img-responsive" style="width:100%;" >
        </div>
        <div class="navcontainer">
        
         <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-inverse navbar-static-top">
  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
         </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item ">
        <a class="nav-link" href="../index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About DPCH
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../depotterprofile.php">College Profile</a>
           <a class="dropdown-item" href="../missionVision.php">Vision & Mission Statement</a> 
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../programmes.php">Programmes</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Portal
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../students/studentLogin.php">Returning Students</a>
          <a class="dropdown-item" href="../studentRegForm.php">Freshers</a>
          <a class="dropdown-item" href="../admin/adminlogin.php">Staff</a> 
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../applicationForm.php">Apply Now</a>
      </li>
     
       <li class="nav-item">
        <a class="nav-link" href="../gallery.php">Gallery</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../newsheadline.php">NEWS/EVENTS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../faq.php">FAQs</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Payment
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../paymentslipform.php">Print payment slip</a>
          <a class="dropdown-item" href="../paymentreceiptform.php">Print payment receipt</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contactus.php">Contact Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Examination
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://kodelicious.000webhostapp.com/depotterhealthTech/DP/dpoes/oes/index.php">students</a>
           <a class="dropdown-item" href="https://kodelicious.000webhostapp.com/depotterhealthTech/DP/dpoes/oes/admin/index.php">Examiner</a> 
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
   
  </div> 
</nav>
</div>