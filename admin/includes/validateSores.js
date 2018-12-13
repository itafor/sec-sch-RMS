document.getElementById('myform').addEventListener('submit', saveScore);

function saveScore(e) {
let ca = document.getElementById('ca').value;
let exam = document.getElementById('exam').value;

  if(!validateForm(ca, exam)){ 
   e.preventDefault();
 return false;
}

 }  
    
  function validateForm(ca, exam){
  if(!ca || !exam) {
  alert('Please fill in the form');
  return false;
}

if( ca > 30) {
  alert('CA score must not be more than 30');
  return false;
}

 if(exam > 70) {
  alert('EXAM score must not be more than 70');
  return false;
}

if(isNaN(ca)) {
  alert('Please enter a valid score, ca must be a number');
  return false;
}
if(isNaN(exam)) {
  alert('Please enter a valid score, exam must be a number');
  return false;
}
 return true;
  }