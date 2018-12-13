 <?php 
    
    $select_profile="SELECT * FROM footersetting";
    $headerdisplay=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($headerdisplay)){
    $logo=$data['logo'];
    $schname=$data['schname']; 
     $year=$data['year']; 
     $copyrigth=$data['copywright'];
     
    echo "<br/>";
    echo '<table width="100%" class="footerdatadisabled">';
     echo '<tr class="resultrow">';
  //echo "<td class='resultheaderimage'><img src='$logo' alt=\"My profile picture\" ></td>";
   // echo '<td align="center" class="schname">'.' '.$copyrigth.'   '.' '.$year.'   '.''.$schname.'</td>';               
 }
?>  
</tr>
</table> 
    <script >
        function toggleSidebar(){
           document.getElementById("menus").classList.toggle('active'); 
        }
    </script>
       
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   
     <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>      
     
  
  <title>Live Table Data Edit Delete using Tabledit Plugin in PHP</title>  
            <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
 
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link   href="bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  <script src="bootstrap3-editable/js/bootstrap-editable.min.js"></script>
  <script src="jquery-tabledit-master/jquery.tabledit.min.js"></script>
  <script src="jquery-tabledit-master/jquery.tabledit.js"></script> 
    <script src="jquery-tabledit-master/jquery.tabledit.min.js"></script>
  <script  src="jquery-tabledit-master/jquery.tabledit.js"></script>
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
      
     <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script> 
       <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
  <script>
function myFunction() {
    window.print();
}

function inputValidation(inputTxt) {
  var regx =/^[a-zA-Z\s]+$/; 
  var  textField=document.getElementById("textField");
  if(inputTxt.value !=''){
      
     if(inputTxt.value.match(regx)){
         
        textField.textContent='Correct';
      textField.style.color='green';
      
      }else{
        textField.textContent='Invalid input: only letters and white space are allowed';
    textField.style.color='red';
      }
   
   }else{
      textField.textContent='Please enter your Course of study';
    textField.style.color='red';
   } 
}

function disciplineValidation(inputTxt) {
  var regx = /^[a-zA-Z\s]+$/; 
  var  discipline=document.getElementById("discipline");
  if(inputTxt.value !=''){
     if(inputTxt.value.match(regx)){
         
        discipline.textContent='Correct';
      discipline.style.color='green';
      
      }else{
        discipline.textContent='Invalid input: only letters and white space are allowed';
    discipline.style.color='red';
      } 
   }else{
      discipline.textContent='Please enter your full name';
    discipline.style.color='red';
   } 
}

function matricValidation(inputTxt){
     var  matric=document.getElementById("matric"); 
     if(inputTxt.value !=''){
        matric.textContent='correct';
    matric.style.color='green';  
     }else{
      matric.textContent='Please enter your  matric no';
    matric.style.color='red';
   }
}
function sessionValidation(inputTxt){
 var  session=document.getElementById("session"); 
     if(inputTxt.value !=0){
        session.textContent='correct';
    session.style.color='green';  
     }else{
      session.textContent='Please enter current session';
    session.style.color='red';
   }
}

function facultyValidation(inputTxt){
 var  faculty=document.getElementById("faculty"); 
     if(inputTxt.value !=0){
        faculty.textContent='correct';
    faculty.style.color='green';  
     }else{
      faculty.textContent='Please enter your faculty';
    faculty.style.color='red';
   }
}
</script>
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
$('#faculty').on('change',function(){
   $facultyName=$(this).val();
   if($facultyName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'faculty='+$facultyName,
          success:function(html){
           console.log(html);
           $('#dept').html(html);
          },
      
      });
   } else{
       $('#dept').html('<option value="">Select faculty first </option>');
   }
});
}); 
</script>
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
$('#faculty').on('change',function(){
   $facultyName=$(this).val();
   if($facultyName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'faculty='+$facultyName,
          success:function(html){
           console.log(html);
           $('#dept').html(html);
          },
      
      });
   } else{
       $('#dept').html('<option value="">Select dept first </option>');
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
       $('#level').html('<option value="">Select programme first </option>');
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

</body>
</html>