<script>  
function validateform(){  
var doc_username=document.myform.name.value;  
var password=document.myform.password.value;  
  
if ( doc_username=="" ||  doc_username==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
function validateform(){  
var pat_username=document.myform.name.value;  
var password=document.myform.password.value;  
  
if ( pat_username==null ||  pat_username==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script> 