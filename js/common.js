window.addEventListener("load", function(){
    let signup_form=document.getElementById("signup-form");
    signup_form.addEventListener("submit", function(event){
        let httpRequest=new XMLHttpRequest();
        let signup_form_data=new FormData(signup_form);
        httpRequest.addEventListener("load", signup_success);
        httpRequest.addEventListener("error", on_error);
        httpRequest.open('POST', 'user_authentication/signup_submit.php');
        httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        httpRequest.send(signup_form_data);
        document.getElementById("loading").style.display="block";
        event.preventDefault();
    })

    let login_form=document.getElementById("login-form");
    login_form.addEventListener("submit", function(event){
        let httpRequest=new XMLHttpRequest();
        let login_form_data=new FormData(login_form);
        httpRequest.addEventListener("load", login_success);
        httpRequest.addEventListener("error", on_error);
        httpRequest.open('POST', 'user_authentication/login_submit.php');
        httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        httpRequest.send(login_form_data);
        document.getElementById("loading").style.display="block";
        event.preventDefault();
    })
})

let signup_success=(event)=>{
    document.getElementById("loading").style.display="none";
    let response=JSON.parse(event.target.responseText);
    if(response.success)
    {
        alert(response.message);
        window.location.href="index.php";
    }
    else
    {
        alert("Something went wrong!");
    }
}

let login_success=(event)=>{
    document.getElementById("loading").style.display="none";
    let response=JSON.parse(event.target.responseText);
    if(response.success)
    {
        alert(response.message);
        location.reload();
    }
    else
    {
        alert("Something went wrong");
    }
};

let on_error=()=>{
    document.getElementById("loading").style.display="none";
    alert("Something wrent wrong!");
};
