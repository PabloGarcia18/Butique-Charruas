document.querySelectorAll(".user-input").forEach(element => {
    element.addEventListener("blur", (event) => {
        if (event.target.value != ""){
            event.target.nextElementSibling.classList.add("filled2");
        } else {
            event.target.nextElementSibling.classList.remove("filled2");
        }
    })
});

document.querySelectorAll(".password-input").forEach(element => {
    element.addEventListener("blur", (event) => {
        if (event.target.value != ""){
            event.target.nextElementSibling.classList.add("filled");
        } else {
            event.target.nextElementSibling.classList.remove("filled");
        }
    })
});
function login(){
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
}