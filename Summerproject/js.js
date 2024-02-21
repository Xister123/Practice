<script>  
function validateDoctorForm(){  
    var doc_username = document.getElementsByName("doc_username").value;  
    var password = document.getElementsByName("doc_password").value;  

    if (doc_username == "" || doc_username == null){  
        alert("Username can't be blank");  
        return false;  
    } else if(password.length < 6){  
        alert("Password must be at least 6 characters long.");  
        return false;  
    }  
}  

function validatePatientForm(){  
    var pat_username = document.getElementsByName("pat_username").value;  
    var password = document.getElementsByName("pat_password").value;  

    if (pat_username == "" || pat_username == null){  
        alert("Username can't be blank");  
        return false;  
    } else if(password.length < 6){  
        alert("Password must be at least 6 characters long.");  
        return false;  
    }  
}  
</script>
