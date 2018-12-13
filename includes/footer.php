   <footer class="footersetting"> 
  </footer>
  
   <?php 
    
    $select_profile="SELECT * FROM footersetting";
    $headerdisplay=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($headerdisplay)){
    $logo=$data['logo'];
    $schname=$data['schname']; 
     $year=$data['year']; 
     $copyrigth=$data['copywright'];
     
    echo "<br/>";
    echo '<table width="100%" class="footerdata">';
     echo '<tr class="resultrow">';
  echo "<td class='resultheaderimage'><img src='admin/$logo' alt=\"My profile picture\" ></td>";
    echo '<td align="center" class="schname">'.' '.$copyrigth.'   '.' '.$year.'   '.''.$schname.'</td>';               
 }
?>  
</tr>
</table> 
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   
  
   <script type="text/javascrpt" src="bootstrap/js/bootstrap.js"></script>
     <script type="text/javascrpt" src="js/jquery-3.3.1.js"></script>  
     <script type="text/javascrpt" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascrpt" src="flexslider/jquery.flexslider.js"></script> 
    
     <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>      
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1JdygIDgHWHcRqf9p08O1STb-AB7zRco&callback=initMap"
  type="text/javascript"></script>
  
   <link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"> 
   <link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css"> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script> 
   <script src="lightbox2/lightbox.min.js"></script> 

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
</body>
</html>