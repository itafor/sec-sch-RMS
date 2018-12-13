<?php
//session_start();
//login check function
  function loggedin(){
      if(isset($_SESSION['regno']) || isset($_COOKIE['regno'])){
       $loggedin=true;
       return $loggedin;
 } 
  }
  
  // check admin login function
  function adminloggedin(){
      if(isset($_SESSION['username']) || isset($_COOKIE['username'])){ 
       $adminloggedin=true;
       return $adminloggedin;
 } 
  }
 
 function myphotos(){
  echo "<h1>MY PHOTOS.</h1>";
         if(isset($_GET['regno'])){
        $regno=urldecode('regno');      
     // $username=$_SESSION['username'];
   $query="SELECT * FROM photos WHERE regno='$regno'";
   $query1=mysql_query($query);
   
   while($ros=mysql_fetch_array($query1)){
        $path=$ros['path'];
        $id=$ros['id']; 
        $name=$ros['name'];
        $filename=$ros['filename'];
        
         
  // echo"  <img src='$path'  width=\"200px\" height=\"200px\"/> ";  
        
       echo "<table width='900' height='50' align='center'>";
       echo "<tr>";
       echo"<a  href=\"$path\" >"; 
        echo "<td>". "<img src='$path'  width=\"200px\" height=\"200px\"/>"."</td>";
         echo "<br/>";
        echo "</tr>";
       echo "</table>";
       
     }
     
 }
 } 
 
  function grade($totalscore){
     if($totalscore == 0){
      return "<p style='color:black;'>"."----"."</p>" ; 
     }elseif($totalscore <=39) {
      return "<p style='color:red;'>"."F"."</p>" ;
   }elseif($totalscore >= 40 && $totalscore <=45){
      return "E" ;
   }elseif($totalscore >= 46 && $totalscore <=49){
      return "D" ;
   } elseif($totalscore >= 50 && $totalscore <=59){
      return "C" ;
   }elseif($totalscore >= 60 && $totalscore <=69){
      return "B" ;
   } elseif($totalscore >= 70 && $totalscore <=100){
      return "A" ;
   } elseif($totalscore <=39) {
      return "<p style='color:red;'>".$totalscore."</p>" ;
   }else{
    return "<p style='color:black;'>".$totalscore."</p>" ;     
   }
}

function remark($totalscore){
    if($totalscore == 0){
      return "<p style='color:black;'>"."----"."</p>" ; 
     }elseif($totalscore <=39) {
   return "<p style='color:red;'>"."FAIL"."</p>" ;
   }elseif($totalscore >= 40 && $totalscore <=45){
    return "<p style='color:#000000;'>"."PASS"."</p>" ;     
   }elseif($totalscore >= 46 && $totalscore <=49){
      return "PASS" ;
      return "<p style='color:red;'>"."FAIR"."</p>" ; 
   } elseif($totalscore >= 50 && $totalscore <=59){
      return "PASS" ;
   }elseif($totalscore >= 60 && $totalscore <=69){
      return "PASS" ;
   } elseif($totalscore >= 70 && $totalscore <=100){
      return "PASS" ;
   }
}

function exam($exam){
  if($exam <=34) {
      return "<p style='color:red;'>".$exam."</p>" ;
   }else{
    return "<p style='color:black;'>".$exam."</p>" ;     
   }
}

function caScore($cascore){
  if($cascore <=14) {
      return "<p style='color:red;'>".$cascore."</p>" ;
   }else{
    return "<p style='color:black;'>".$cascore."</p>" ;     
   }
}
function totalScores($total){
  if($total <=39) {
      return "<p style='color:red;'>".$total."</p>" ;
   }else{
    return "<p style='color:black;'>".$total."</p>" ;     
   }
}
?>
