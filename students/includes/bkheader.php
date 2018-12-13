<?php ob_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Bolson Schools</title>
     <link rel="icon" type="image/png" href="images/Godswilllogo.png">  
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
    var r=confirm("The entry will be parmanently deleted!");
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
.page-head-line {
    font-weight: 900;
    padding-bottom: 20px;
    border-bottom: 2px solid #F0677C;
    text-transform: uppercase;
    color: #F0677C;
    font-size: 20px;
    margin-bottom: 40px;
}  
#menus{
    position: fixed;
    left: -200px;
     transition: all 600ms linear;
     z-index: 3; 
     float: left;
     margin-top: 94px; 
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
  box-shadow:0 1px 1px #ccc;
    padding: 20px 40px;
    height: 100px;
    color: #ffffff;
    box-sizing: border-box;
    top: -6px;
   position: fixed;
   width:100%;
   z-index: 10;
    -webkit-transition:top 0.3s;
    transition:top 0.3s;
    
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
  margin-top: 20px ;
 width: 100%;
}
/* main box container */
.admincontent{
         margin-top: 150px; 
           
          height: auto;
          padding-right: 30px;
          padding-left: 30px;
          width: auto;
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
    margin-top: -20px;
    margin-right: 70px;
   
}
.userheader .dropdown img{ 
   width: 70px;
    height: 85px;
    
}
.userheader  img{  
    float: left; 
    margin-left: 50px;
    margin-top: -20px; 
    padding-top: 30px; 
    }
   .userheader .dropdown img{
    position: relative;
    padding-top : -10px; 
    width: 70px;
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
 .resultsheet{
width:100%; 
height:100px;
margin-bottom: 5px;
border-bottom: solid #ff5436;

 }
.resultsheet .resultrow .resultheaderimage img{
 margin-left: 100px;
 width: 100px;
 height: 80px;
}
.resultsheet .resultrow .schname {
 font-size: 30px;
 margin-left: -900px;
 line-height: 14px;
 font-family: fantasy;
 color:navy;
}
.resultsheet .resultrow td .headerdetals{
    font-size: 16px;
 margin-left: -900px;
line-height: 9px;
font-family: sans-serif;
font-weight: 200;
}
.admincontent #resulttitle{
    text-align: center;
    color: green;
    text-decoration: underline;
    font-size: 24px;
 }
 #studentRresultTBL{
 float: right;
 width: 70%;
 height: 30px;
 margin-top: -70px;
 }
 #resultpixDv{
margin-bottom:-70px;
 margin-left: 50px;
width: 150px;
}
.resultborder{
 border: solid #6b2a2a;
  border-radius:5px;
  padding-left: 2px;
  padding-right: 2px; 
}
 #subjtable{
  margin-top: 30px;
  width: 100%;
  text-align: center;
 }
  .comments{
  font-size: 16px;
  font-family:sans-serif;
  font-style: italic;
  color: #35475e; 
  }
   #studentresultdetail .stddetals{
   color:#000000; 
    margin-left: -20px;
    font-family: roboto;
   font-size:16px;

  }
   #regform{
       margin-top: 100px;
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
       position:absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
 
  text-align: center;
   background-color: #35475e;
     color: white;
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
/* set element styles to fit tablet and higher(desktop) */
@media screen and (max-width: 850px) {
    
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
    .resultborder{
 border: solid ;
  border-radius:5px; 
  width: 700px;
}
     
     
     
   .resultsheet{
width:100%; 
height:100px;
margin-bottom: 5px;
border-bottom: solid #ff5436;
margin-top: 40px;

 }
.resultsheet .resultrow .resultheaderimage img{
 margin-left: 20px;
 width: 100px;
 height: 80px;
 margin-top: 40px;
}
.resultsheet .resultrow .schname {
 font-size: 26px;
 margin-left: -250px;
 line-height: 10px;
 font-family: fantasy;
 color: silver;
 margin-top: 40px;
}
.resultsheet .resultrow td .headerdetals{
    font-size: 14px;
 margin-left: -250px;
line-height: 9px;
font-family: sans-serif;
font-style: oblique;
}  
   .footerdata{
   position: absolute;
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
     
     
       #studentRresultTBL{
     margin-top: 50px;
     margin-right: 2px;
     
    }
   #resultpixDv{
margin-left: 10px;
margin-bottom: -150px;

 }
  .comments{
      width: 100%;
  font-size: 8px;
  font-family:sans-serif;
  font-style: italic;
  color: #35475e;
  margin-right: 5px;
  }
  #menus{
      position: fixed; 
    left: -200px;
     transition: all 600ms linear;
     z-index: 2; 
     margin-top: -10px;
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
  
  background-color: #35475e;
  box-shadow:0 1px 1px #ccc;
    padding: 20px 40px;
    color: #ffffff;
    box-sizing: border-box;
    top: -6px;
   position: fixed;
   z-index: 10;
    -webkit-transition:top 0.3s;
    transition:top 0.3s;
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
         margin-top: 70px; 
           margin-bottom: -100px;
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
  width: auto;
 
}

#studentresultdetail{
 width: 70px;
} 

 #studentresultdetail .stddetals{
   color:#000000; 
    margin-left: -20px;
    font-family: roboto;
   

  }
 #studentresultdetail .tblwidth{
    width: 300px;
     
 }
  #studentresultdetail .tblwidth img{
    width: 100px;
    height: 100px;
    margin-left: 50px;
    border-radius: 5px ;
 }

} 
  </style> 
</head> 
<body>