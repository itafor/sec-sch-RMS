<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?> 

      <h4 class="page-head-line">Click on any data to edit it</h4>
    <div style="opacity: .5; pointer-events: none;">
   <h3 style='color:red;'>Not allowed, contact the engineer on 07065907948 or email him on itaforfrancis@gmail.com</h3>
       
         
      
   <table class="table table-bordered table-striped">
    <thead>
     <tr>
      <th width="10%">ID</th>
      <th width="40%">CLASSES</th>  
    </thead>
    <tbody id="student_data">
    </tbody>
   </table>                                                               
    
                </div>
                
                </div>
        </div>         
        <script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 function fetch_student_data()
 {
  $.ajax({
   url:"fetchclass.php",
   method:"POST",
   dataType:"json",
   success:function(data)
   {
    for(var count=0; count<data.length; count++)
    {
     var html_data = '<tr><td>'+data[count].id+'</td>';
     html_data += '<td data-name="name" class="name" data-type="text" data-pk="'+data[count].id+'">'+data[count].name+'</td>';
     
     $('#student_data').append(html_data);
    }
   }
  })
 }
 
 fetch_student_data();
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.name',
  url: "updateclass.php",
  title: 'COURSE CODE',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.coursetitle',
  url: "updatecourse.php",
  title: 'COURSE TITLE',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.creditunit',
  url: "updatecourse.php",
  title: 'CREDIT UNIT',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.matricno',
  url: "updatestudents.php",
  title: 'Matric No',
  type: "POST",
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.faculty',
  url: "updatestudents.php",
  title: 'Faculty',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.dept',
  url: "updatestudents.php",
  title: 'DEPT',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
   
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.level',
  url: "updatestudents.php",
  title: 'level',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
    var expression = /^[0-9]+$/;
   if(!expression.test(value))
   {
    return 'Numbers only !';
   }
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.discipline',
  url: "updatestudents.php",
  title: 'Discipline',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.emai',
  url: "updatestudents.php", 
  title: 'Email',
  type: "POST",
  //dataType: 'json',   
   validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }

 
   
 });$('#student_data').editable({
  container: 'body',
  selector: 'td.phon',
  url: "updatestudents.php",
  title: 'phone No',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
    var expression = /^[0-9]+$/;
   if(!expression.test(value))
   {
    return 'Numbers only!';
   }
  }
 });$('#student_data').editable({
  container: 'body',
  selector: 'td.stdaddress',
  url: "updatestudents.php",
  title: 'Address',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });$('#student_data').editable({
  container: 'body',
  selector: 'td.state',
  url: "updatestudents.php",
  title: 'state',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });$('#student_data').editable({
  container: 'body',
  selector: 'td.lga',
  url: "updatestudents.php",
  title: 'LGA',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.gender',
  url: "updatestudents.php",
  title: 'Gender',
  type: "POST",
  dataType: 'json',
  source: [{value: "Male", text: "Male"}, {value: "Female", text: "Female"}],
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.dob',
  url: "updatestudents.php",
  title: 'Date Of Birth',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.religion',
  url: "updatestudents.php",
  title: 'Religion',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.maritalstatus',
  url: "updatestudents.php",
  title: 'Marital Status',
  type: "POST",
  dataType: 'json',
   source: [{value: "Single", text: "Single"}, {value: "Married", text: "Married"},{value: "Divorsed", text: "Divorsed"}],
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.nokname',
  url: "updatestudents.php",
  title: 'Next Of King Name',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.nokphon',
  url: "updatestudents.php",
  title: 'Next of King Phone',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }         
   var expression = /^[0-9]+$/;
   if(!expression.test(value))
   {
    return 'Numbers only!';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.nokaddress',
  url: "updatestudents.php",
  title: 'Next Of King Address',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
});
</script>
   
                  
                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>