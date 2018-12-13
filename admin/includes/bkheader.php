<?php ob_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      
    <title>Result Management Sytem</title>
     <link rel="icon" type="image/png" href=""> 
      
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">  
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
 <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
 
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link   href="bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  <script src="bootstrap3-editable/js/bootstrap-editable.min.js"></script>
  <script src="jquery-tabledit-master/jquery.tabledit.min.js"></script>
  <script src="jquery-tabledit-master/jquery.tabledit.js"></script> 
    <script src="jquery-tabledit-master/jquery.tabledit.min.js"></script>
  <script  src="jquery-tabledit-master/jquery.tabledit.js"></script>
      
     <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script> 
       <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  
      <!--deleting multiple rows--> 
   <script>
function show_confirm22()
    {
    var r=confirm("The selected entry will be parmanently deleted!");
    if (r==true)
    {return true;
    }
    else
    {
    return false;
    }
    }
</script>
<!--check box selection-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"> </script>
<script language="javascript">
    $(function(){
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
          $('.case').attr('checked', this.checked);
    });
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){

        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }

    });
});
</script>
<!--check box selection-->
  
  
      <style>
      
* {
    box-sizing: border-box;
}
html, body{
 padding: 0px;
 margin: 0px;
 height: 100%; 
}  
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: red; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
}

#myBtn:hover {
    background-color: #555; /* Add a dark-grey background on hover */
}
.page-head-line {
    font-weight: 900;
    padding-bottom: 20px;
    border-bottom: 2px solid #F0677C;
    text-transform: uppercase;
    color: #35475e;
    font-size: 20px;
    margin-bottom: 40px;
}  
#menus{
    position: relative;
    left: -200px;
     transition: all 600ms linear;
     z-index: 10; 
     float: left;
     height: 1000px;
    }
    #menus.active{
     left: 0px;
    }
#menus ul{
     list-style: none;  
     margin-left: -50px;
     margin-top: -01px;
     
}
#menus ul li{
padding: 15px;
position: relative;
width: 200px; 
background-color: #34495e;
 border-top: 1px solid #BDC3C7;
 transition: all 0.3s; 
 -webkit-transition: all 0.3s;
 -o-transition: all 0.3s;  
 z-index: 5;
}
#menus > ul >li{
border-right: 5px solid #f1c401;
}
#menus ul ul{
 transition: all 0.3s;
 opacity: 0;
 left: 107%;  
 position: absolute;
  margin-top: -70px;  
 visibility: hidden;
  z-index: 4px;
}
#menus ul li:hover > ul{
    opacity:1;
visibility: visible;
}
#menus ul li:hover {  
    background-color: #f1c401;
    opacity:1;
visibility: visible;
}
#menus ul li a{
color: #fff;
text-decoration: none;
}
#menus > ul > li:nth-of-type(2)::after {
    content: "";
    position: absolute;
    margin-left: 60%;
color: #fff;
font-size: 20px;
}
#menus > ul > li:nth-of-type(6)::after {
    content: "";
    position: absolute;
    margin-left: 50%;
color: #fff;
font-size: 20px;
}
span{
margin-right: 15px;
}
.userheader{
  background-color: #35475e;
  height: 100px;
   width: 100%; 
  position: relative;
  bottom: 0; 
  z-index: 10;
}
.userfooter{
background-color: #35475e;
  position:relative;
  right: 0px;
  bottom: 0px;
  left: 0px;
  height: 400px;
  padding: 1rem;
  text-align: center;
  color: white;
  margin-top: 10px ;
  width: 100%;
   
}
#searchfield input[name="book"]{
 height:70px; 
 width: 100px;
}
/* main box container */
.admincontent{
         margin-top: 10px; 
          
          height: auto;
          margin-left: 100px; 
          margin-right: 100px;
          padding-right: 30px;
          padding-left: 30px;
          width: auto;  
          }
          .admincontent_BS{
            margin-top: 10px; 
            border: 2px solid #35475e;
          height: 70px;
          margin-left: 100px; 
          margin-right: 100px;
          padding-right: 30px;
          padding-left: 30px;
          width: 800px;  
          }
.userheader .dropbtn {
     background-color: #34495e; 
    color: white;
    padding: 3px;
    font-size: 16px;
    border: none;
}

.userheader .dropdown {
    position: relative;
    display: inline-block;
   float: right;
    padding-top: -23px;
    margin-right: 70px;
}
.userheader  img{  
    float: left; 
    margin-left: 50px;
    padding-top: 30px; 
    }
   .userheader .dropdown img{
    position: relative;
    padding-top : -5px; 
   }
.userheader .dropdown-content {
    display: none;
    position: absolute;
    background-color: #34495e;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.userheader .dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.userheader .dropdown-content a:hover {background-color: blue}

.userheader .dropdown:hover .dropdown-content {
    display: block;
}

.userheader .dropdown:hover .dropbtn {
    /*background-color: black;  */
}
#menus .toggle-btn{
 position: absolute;
 left: 200px;
 top: 115px;
}
#menus .toggle-btn span{
   display: block;
   width: 30px;
   height: 5px;
   background: #151719;
   margin: 5% 0%;
   
}
  #studentresultdetail .stddetals{
   color:#000000; 
    margin-left:20px;
    font-family: roboto;
    font-size: 14px;

  }
 #studentresultdetail .tblwidth{
    width: 300px;
 }
  #studentresultdetail .tblwidth img{
    width: 120px;
    height: 120px;
    margin-left: 130px;
    border-radius: 5px ;
    margin-top: -80px;
 }
 .nav {
    background-color: #000000;
    border-color: green;
}
.test{
 color: #ffffff;
}

abbr
{
        border-bottom: 1px dotted #666;
    cursor: help;
}

.tooltip
{
    position:absolute;
    background-color:#eeeefe;
    border: 1px solid #aaaaca;
    font-size: smaller;
    padding:4px;
    width: 160px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);    
} 
.bsheetControl{
  margin-top: 50px;
  float: right;
  margin-right: -900px;
}
.broadsheet{
  margin-top: 10px;
  margin-left: -240px;
}
.broadsheetTitle{
 font-size: 18px;
 margin-bottom: -75px;
 margin-left: -200px;
}
 .resultborder{
     width: 900px;
 border: double #6b2a2a;
  border-radius:5px;
  padding-left: 2px;
  padding-right: 2px; 
}
.resultsheet{
width:100%; 
height:100px;
margin-bottom: 5px;
border-bottom: solid #ff5436;

 }
.resultsheet .resultrow .resultheaderimage img{
 margin-left: 50px;
 width: 100px;
 height: 100px;
}
.resultsheet .resultrow .schname {
 font-size: 34px;
 margin-left: -600px;
 line-height: 9px;
 font-family: Arial, Helvetica, sans-serif
 color: #333333;
 margin-bottom: 20px;
}
.resultsheet .resultrow td .headerdetals{
    font-size: 22px;
 margin-left: -600px;
line-height: 16px;
font-family: roboto;
}
 .footerdata .resultrow .resultheaderimage img{
  margin-left: 200px;
  width: 50px;
  height: 50px;
  margin-top: 30px;
  margin-bottom: 13px;
  }
  .footerdata .resultrow .schname {
 font-size: 24px;
 margin-right: 600px;
 font-family: fantasy;
 color:white;
 margin-top: -30px;
}
  .resultsheetlogin{
        border-bottom: double;
        width: 100%;
    }
   
   .resultsheetlogin .resultrow .resultheaderimage img{
  margin-left: 200px;
  width: 100px;
  height: 100px;
  margin-top: -10px;
  margin-bottom: 13px;
  }
  .resultsheetlogin .resultrow .schname {
 font-size: 38px;
 margin-right: 400px;
 font-family: fantasy;
 color:navy;
 margin-top: -30px;
}
 .footerdata{
       position: relative;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #35475e;
     color: white;
  text-align: center;
  width: 100%;
 }

 .footerdata .resultrow .resultheaderimage img{
  margin-left: 200px;
  width: 50px;
  height: 50px;
  margin-top: 30px;
  margin-bottom: 13px;
  }
  .footerdata .resultrow .schname {
 font-size: 24px;
 margin-left : -1200px;
 font-family: fantasy;
 color:white;
 margin-top: -30px;
}
   .resultborder{
 border: solid ;
  border-radius:5px; 
  width: 700px;
}
  #studentRresultTBL{
     margin-top: 20px;
     margin-right: 120px;
     margin-left: 120px;
     width: 550px;
     
    }
   #resultpixDv{
margin-left: 10px;
margin-bottom: -100px;
 }
 #subjtable{
  margin-top: -50px;
  text-align: center;
 }
 .comments{
      width: 600px;
  font-size: 12px;
  font-family:sans-serif;
  font-style: italic;
  color: #35475e;
  margin-right: 50px;
  }
/* set element styles to fit tablet and higher(desktop) */
@media screen and (max-width: 800px) { 
    .resultsheetlogin{
        border-bottom: double;
        width: 100%;
    }
       
   .resultsheetlogin .resultrow .resultheaderimage img{
  margin-left: 30px;
  width: 50px;
  height: 50px;
  margin-top: -10px;
  margin-bottom: 13px;
  }
  .resultsheetlogin .resultrow .schname {
 font-size: 16px;
 margin-right: 50px;
 font-family: fantasy;
 color:navy;
 margin-top: -30px;
}
         .footerdata{
       position: relative;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #35475e;
     color: white;
  text-align: center;
 }

 .footerdata .resultrow .resultheaderimage img{
  margin-left: 10px;
  width: 50px;
  height: 50px;
  margin-top: 30px;
  margin-bottom: 13px;
  }
  .footerdata .resultrow .schname {
 font-size: 12px;
 margin-left : 50px;
 font-family: fantasy;
 color:white;
 margin-top: -30px;
}  
  
#myform{
 
  width: 500px;
  margin-left: -10px;
}

 #studentRresultTBL{
     margin-top: -50px;
     margin-right: 20px;
     margin-left: 120px;
     width: auto;
    }
   #resultpixDv{  
}
margin-left: 10px;
margin-bottom: -150px;
 }
 #subjtable{
  margin-top: -50px;
  text-align: center;
 }
 .comments{
   width: 500px;
  font-size: 12px;
  font-family:sans-serif;
  font-style: italic;
  color: #35475e;
  margin-right: 2px;
  }
  #menus{
    position: relative;
    left: -200px;
     transition: all 600ms linear;
     z-index: 2; 
    }
    #menus.active{
     left: 0px;
    } 
    #menus .toggle-btn{
 position: absolute;
 left: 200px;
 top: 115px;
}
#menus .toggle-btn span{
   display: block;
   width: 30px;
   height: 5px;
   background: #151719;
   margin: 5% 0%;
   
}   
#menus ul{
     list-style: none;
     margin: 0;
     margin-left: -41px; 
    margin-top: -01px;
}
#menus ul li{
padding: 5px;
position: relative;
width: 118px; 
background-color: #35475e;
 border-top: 1px solid #BDC3C7;
 z-index: 5;
 transition: all 0.3s; 
 -webkit-transition: all 0.3s;
 -o-transition: all 0.3s;  
}
#menus > ul >li{
border-right: 5px solid #f1c401;
}
#menus ul ul{
 transition: all 0.3s;
 opacity: 0;
  margin-top: -24px;
 left: 106%;
 position: absolute;
 visibility: hidden;
}
#menus ul li:hover > ul{
    opacity:1;
visibility: visible;
}
#menus ul li:hover {  
    background-color: blue;
    opacity:1;
visibility: visible;
}
#menus ul li a{
color: #fff;
text-decoration: none;
}
#menus > ul > li:nth-of-type(2)::after {
    content: "";
    position: absolute;
    margin-left: 29%;
color: #fff;
font-size: 20px;
}
#menus > ul > li:nth-of-type(6)::after {
    content: "";
    position: absolute;
    margin-left: 5%;
color: #fff;
font-size: 20px;
}
span{
margin-right: 15px;
}
.userheader{
  background-color: #35475e;
  height: 70px;
  width: 100%; 
  position: relative;
  bottom: 0;
}
/*user profile*/

.userheader .dropbtn {
    
    color: white;
    padding: 3px;
    font-size: 12px;
    border: none;
}

.userheader .dropdown {
    position: relative;
    display: inline-block;
    float: right;
    margin-top: -10px; 
    
} 
.userheader  img{  
    float: left; 
    margin-left: 30px;
    padding-top: 20px; 
    }

 .userheader .dropdown img{ 
   width: 50px;
    height: 50px;
    position: relative;
    padding-top : -5px; 
    
}
.userheader .dropdown-content {
    display: none;
    position: absolute;
    background-color: #34495e; 
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    color: white;   
}

.userheader .dropdown-content a {
    color: white; 
    padding: 12px 16px;
    text-decoration: none;
    display: block;    
}

.userheader .dropdown-content a:hover {background-color: blue}

.userheader .dropdown:hover .dropdown-content {
    display: block;
}

.userheader .dropdown:hover .dropbtn {
    
}
/* main box container */
.admincontent{
         margin-top: auto; 
           margin-bottom: -200px;
          height: auto; 
          margin-left: -6px;
          width: auto; 
           
    }

.userfooter{
  background-color: #35475e;
  position: relative;
  right: 0px;
  bottom: 0px;
  left: 0px;
   height: auto;
  padding: 1rem;
  text-align: center;
  color: white;
  width: 100%;
}
 .applicants{
 margin-top: -300px;
 }
 abbr
{
        border-bottom: 1px dotted #666;
    cursor: help;
}

.tooltip
{
    position:absolute;
    background-color:#eeeefe;
    border: 1px solid #aaaaca;
    font-size: smaller;
    padding:4px;
    width: 160px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);    
} 
/*custom scroll bar*/
  .resultborder{
 border: solid ;
  border-radius:5px; 
  
}
.resultsheet{
width:100%;
height:100px;
margin-bottom: 5px;
border-bottom: solid #ff5436;
 }
.resultsheet .resultrow .resultheaderimage img{
 margin-left: 20px;
 width: 100px;
 height: 100px;
 margin-top: 40px;
}
.resultsheet .resultrow .schname {
 font-size: 20px;
 margin-left: 100px;
 line-height: 10px;
 font-family: Arial, Helvetica, sans-serif;
 color: #333;
 margin-top: 40px;
}
.resultsheet .resultrow td .headerdetals{
    font-size: 12px;
 margin-left: 100px;
line-height: 9px;
font-family: roboto;
}  
   

}

      </style>
</head> 
<body>