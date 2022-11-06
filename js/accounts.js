function fetch_register(){
    const data = new FormData(document.getElementById('form_fetch_register'));

    fetch('./account/register.php', 
    {
        method: 'POST',
        body: data
    })
    .then(function(response) 
    {
        if(response.ok) 
        {
            return response.text();
        } else 
        {
            throw "Error";
        }
    })
    .then(function(texto) 
    {
        //document.getElementById("message").textContent = texto;
        alert(texto);
    })
    .catch(function(err) 
    {
        console.log(err);
    });  
}
function fetch_login(){
    const data = new FormData(document.getElementById('form_fetch_login'));

    fetch('./account/login-in.php', 
    {
        method: 'POST',
        body: data
    })
    .then(function(response) 
    {
        if(response.ok) 
        {
            return response.text();
        } else 
        {
            throw "Error";
        }
    })
    .then(function(texto) 
    {
        //document.getElementById("message").textContent = texto;
        if(texto === "Credenciales válidas"){
            localStorage.setItem("usr_status", "yes");
        }else{
            localStorage.setItem("usr_status", "no");
        }
        alert(texto);
    })
    .catch(function(err) 
    {
        console.log(err);
    }); 
} 
function showreg(){
    let registro = document.getElementById("register");
    let login = document.getElementById("login");
    
    let btnreg = document.querySelector('.btn-register');
    let btnlog = document.querySelector('.btn-login');


    registro.style.display = "grid";
    login.style.display = "none";
    btnreg.style.background = "whitesmoke";
    btnreg.style.color = "goldenrod";
    btnreg.style.backdropfilter = "";

    btnlog.style.color = "whitesmoke";
    btnlog.style.background = "#545454"
    btnlog.style.backdropfilter = "blur(1px)";
    btnlog.style.backdropfilter = "contrast(0.9)";
    btnlog.style.bordercolor = "transparent";
}
function showlogin(){
    let registro = document.getElementById("register");
    let login = document.getElementById("login");
    let btnreg = document.querySelector('.btn-register');
    let btnlog = document.querySelector('.btn-login');


    login.style.display = "grid";
    registro.style.display = "none";
    btnlog.style.background = "whitesmoke";
    btnlog.style.color = "goldenrod";
    btnlog.style.backdropfilter = "";

    btnreg.style.color = "whitesmoke";
    btnreg.style.background = "#545454"
    btnreg.style.backdropfilter = "blur(1px)";
    btnreg.style.backdropfilter = "contrast(0.9)";
    btnreg.style.bordercolor = "transparent";
}