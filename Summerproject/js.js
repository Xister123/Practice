<script>  
function validateDoctorForm(){  
    var doc_username = document.getElementsByName("doc_username")[0].value;  
    var password = document.getElementsByName("doc_password")[0].value;  

    if (doc_username == "" || doc_username == null){  
        alert("Username can't be blank");  
        return false;  
    } else if(password.length < 6){  
        alert("Password must be at least 6 characters long.");  
        return false;  
    }  
}  

function validatePatientForm(){  
    var pat_username = document.getElementsByName("pat_username")[0].value;  
    var password = document.getElementsByName("pat_password")[0].value;  

    if (pat_username == "" || pat_username == null){  
        alert("Username can't be blank");  
        return false;  
    } else if(password.length < 6){  
        alert("Password must be at least 6 characters long.");  
        return false;  
    }  
}  
</script>
