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
 
function remark($totalscore){
    if($totalscore == 0){
        return " ";
    }elseif($totalscore >= 1 && $totalscore <=39) {
      return "<p style='color:red;'>"."FAIL"."</p>" ;
   }elseif($totalscore >= 40 && $totalscore <=45){
    return "<p style='color:red;'>"."PASS"."</p>" ;     
   }elseif($totalscore >= 46 && $totalscore <=49){
      return "FAIR" ;
      return "<p style='color:black;'>".FAIR."</p>" ; 
   } elseif($totalscore >= 50 && $totalscore <=59){
      return "GOOD" ;
   }elseif($totalscore >= 60 && $totalscore <=69){
      return "VERY GOOD" ;
   } elseif($totalscore >= 70 && $totalscore <=100){
      return "EXCELLENT" ;
   }
}


function exam($exam){
    if($exam == 0){
    return "<p style='color:black;'>"."  "."</p>" ;     
   }else if($exam <=24) {
      return "<p style='color:red;'>".$exam."</p>" ;
   }else{
    return "<p style='color:black;'>".$exam."</p>" ;     
   }
}

function caScore($cascore){
    if($cascore == 0){
    return "<p style='color:black;'>"." "."</p>" ;     
   }else if($cascore <=14) {
      return "<p style='color:red;'>".$cascore."</p>" ;
   }else{
    return "<p style='color:black;'>".$cascore."</p>" ;     
   }
}

function firstTBF($ftbf){
    if($ftbf == 00){
    return "<p style='color:black;'>"."  "."</p>" ;     
   }else{
    return "<p style='color:black;'>".$ftbf."</p>" ;     
   }
}

function secondTBF($stbf){
    if($stbf == 00){
    return "<p style='color:black;'>"."  "."</p>" ;     
   }else{
    return "<p style='color:black;'>".$stbf."</p>" ;     
   }
}
function totalScores($total){
    if($total == 0) {
      return "<p style='color:black;'>"." "."</p>" ;    
    }elseif($total <=39) {
      return "<p style='color:red;'>".$total."</p>" ;
   }else{
    return "<p style='color:black;'>".$total."</p>" ;     
   }
}


 function grade($totalscore){
     if($totalscore == 0){
      return "<p style='color:black;'>"." "."</p>" ; 
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
function forbiddenArea(){
    $connection=mysqli_connect("localhost","root","depotter","id4101158_depotter"); 
$check=mysqli_query($connection,"SELECT * FROM admin WHERE username='".$_SESSION['username']."' AND rank = 'admin' ");
     if(mysqli_num_rows($check) > 0)
    {
   // echo '<div style="opacity: .5; pointer-events: none">' ; 
    }else{
        echo '<div style="opacity: .5; pointer-events: none;">' ;
   echo "<h3 style='color:red;'>Forbidden Area, Only the admin can access this area</h3>"; 
    }
}

function rank($position,$strt){
      $someArray=array($position);
     return $data[]=max($someArray);
    while($position<=100){
       for($strt=1; $strt<=3; $strt++){
       if($position ==84){    
        return $strt;
        $position+=1;
       }elseif($position == 72) {
         return $strt + 1; 
       }elseif($position ==73){
         return $strt + 2; 
       } 
       } 
     $position++;
}
 }   

 function classTeacherComment($percentage){
     
    if($percentage <=39.9) {
      return "<h5 style='color:red; font-size: 12px;'>"."FAIL: "." "."  "."Sit up and study harder, you can do better than this "."</h5>" ;
   }elseif($percentage >= 40 && $percentage <=45){
   return "<h5 style='color:black; font-size: 12px;'>"."POOR RESULT: "." "."   "."Put more effort, you can do better than this next term "."</h5>" ;
   }elseif($percentage >= 46 && $percentage <=49.9){
    return "<h5 style='color:black; font-size: 12px;'>"."FAIR RESULT: "."  "."  "."Be serious in your studies, you can do more than. be focus! "."</h5>" ;
   } elseif($percentage >= 50 && $percentage <=59.9){
    return "<h5 style='color:black; font-size: 12px;'>"."GOOD RESULT: "." "."  "."Good performance, still put more effort next term "."</h5>" ;
   }elseif($percentage >= 60 && $percentage<=69.9){
   return "<h5 style='color:black; font-size: 14px;'>"."VERY GOOD RESULT: "."  "."  "."Keep it up, don't relent effort "."</h5>" ;
   } elseif($percentage >= 70 && $percentage <=100){
   return "<h5 style='color:black; font-size: 12px;'>"."EXCELLENT RESULT: "."  "."  "." Outstanding performance, keep it up"."</h5>" ;
   } 
 
 }
function principalComment($percentage){
     
    if($percentage <=39.9) {
     return "<h5 style='color:black; font-size: 12px;'>"."Stop being playful, concentrate on your studies "."</h5>" ;
   }elseif($percentage >= 40 && $percentage <=45){
   return "</h5>"."<h5 style='color:black; font-size: 12px;'>"."You can do better than this next term if you can study harder "."</h5>" ;
   }elseif($percentage >= 46 && $percentage <=49.9){
    return "</h5>"."<h5 style='color:black; font-size: 12px;'>"."Cultivate a good reading habit, you can do better than this! "."</h5>" ;
   } elseif($percentage >= 50 && $percentage <=59.9){
    return "</h5>"."<h5 style='color:black; font-size: 12px;' >"."Good, device a means to improve on some of the above subjects "."</h5>" ;
   }elseif($percentage >= 60 && $percentage<=69.9){
   return "</h5>"."<h5 style='color:black; font-size: 12px;'>"."Satisfactory, Keep it up"."</h5>" ;
   } elseif($percentage >= 70 && $percentage <=100){
   return "</h5>"."<h5 style='color:black; font-size: 12px;'>"."Excellent, keep it up"."</h5>" ;
   } 
 
 }

?>
