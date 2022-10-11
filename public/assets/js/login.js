let btn_submit = document.querySelector("button");
const login_form = document.getElementById("LoginForm");
btn_submit.addEventListener("click",(e)=>{
    e.preventDefault();
    const identity = document.getElementById("matricule");
    const password = document.getElementById("password");
    if (identity.value == "") {
        identity.classList.add("is-invalid");
        document.getElementById("mymatricule").innerHTML = '<i class="fa fa-warning"></i>&nbsp;Mots de passe ne peut pas être';
    }
    if(password.value == ""){
       password.classList.add("is-invalid");
       document.getElementById("mypassword").innerHTML = "<i class='fa fa-warning'></i>&nbsp;Mots de passe ne peut pas être";
    }
    if(identity.value != "" && password.value !=""){
        login_form.submit();
    }
});

let input = document.querySelectorAll("input");
input.forEach(item => {
    item.addEventListener("focus",()=>{
        item.classList.remove('is-invalid');
    })
});