document.addEventListener("DOMContentLoaded", func=()=> {
document.getElementById("Submit").addEventListener("click",func=(event)=>{
    event.preventDefault()
    const name=document.getElementById("name").value;
    const password=document.getElementById("password").value;
    document.getElementById("textarea").innerHTML="username"+name+"password"+password;
});
});