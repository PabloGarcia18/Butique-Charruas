let mcart = new Map();
let cant = sessionStorage.getItem("cantidad_cart");
let total1 = 0;

if(!cant){
    console.log("No hay cantidades")
    sessionStorage.setItem("cantidad_cart", 0);
}else{
    load();
}

function load(){
    for (let i = 0; i < sessionStorage.length; i++) {
        const key = sessionStorage.key(i)
        const cat = JSON.parse(sessionStorage.getItem(key));
        if(key === "cantidad_cart"){
            console.log("Cantidad OK");
        }else{
            let productorefinado =
            {
                nombre: cat.nombre,
                precio: cat.precio,
                cantidad: cat.cantidad,
                img: cat.img,
                id: cat.id,
            }
            mcart.set(cat.id, productorefinado);
            mostrarcart();
        }
        
    }
    const amount = document.querySelector(".count");
    const fd = [];
    for(const [k, v] of mcart.entries()){
        fd.push(v.cantidad);
        console.log(fd);
    }
    let total = fd.reduce((a, b) => a + b, 0);

    console.log(total);

    sessionStorage.setItem("cantidad_cart", total);

    amount.innerHTML = "" + total + "";
    if(total < 1){
        amount.style.opacity = "0";  
    }else{
        amount.style.opacity = "1";  
    }
    
}


window.addEventListener('DOMContentLoaded',function(){
});

function carrito_charger(id, nombre, precio, img)
{
    let x = document.getElementById("carting" + id);
    x.style.left = "80px";
    
    setTimeout(function(){
        x.style.left = "0";
    },1500);
    const carrito = document.querySelector("#cont-cart");

    let nuevo_producto = 
        {
            nombre: nombre,
            precio: precio,
            cantidad: 0,
            img: img,
            id: id,
        }
    if(mcart.has(id)){
        n = parseInt(mcart.get(id).cantidad)+1;

        let prod2 = 
        {
            nombre: nombre,
            precio: precio,
            cantidad: n,
            img: img,
            id: id,
        }
        
        mcart.set(id, prod2);
        
        sessionStorage.setItem(id, JSON.stringify(prod2))
        const cat = JSON.parse(sessionStorage.getItem(id));
        mcart.set(id, cat);
    }else{
        mcart.set(id, nuevo_producto);
        nuevo_producto.cantidad = parseInt(mcart.get(id).cantidad)+1;
        mcart.set(id, nuevo_producto);
        sessionStorage.setItem(id, JSON.stringify(nuevo_producto))
        const cat = JSON.parse(sessionStorage.getItem(id));
        mcart.set(id, cat);
    }
    load()
}
function mostrarcart(){
    document.getElementById("cont-cart").innerHTML = "";
    document.getElementById("prod").innerHTML = "";
    for(const [k, v] of mcart.entries())
        {
            document.getElementById("cont-cart").innerHTML += 
            "<section class='infop'> <div class='product_img' style=\"background-image: url("+ v.img +")\"></div> <p class='product_title'>" + v.nombre + "</p> <p class='product_cant'>x" + v.cantidad + "</p> <p class='product_price'>$"+ v.precio * v.cantidad +"</p> <i id='eliminarprod' onclick='eliminarp("+v.id+")' class='fas fa-trash' style='color: whitesmoke'></i></section>";
            document.getElementById("prod").innerHTML += 
            "<section class='infop'> <div class='product_img' style=\"background-image: url("+ v.img +")\"></div> <p class='product_title'>" + v.nombre + "</p> <p class='product_cant'>x" + v.cantidad + "</p> <p class='product_price'>$"+ v.precio * v.cantidad +"</p> <i id='eliminarprod' onclick='eliminarp("+v.id+")' class='fas fa-trash' style='color: whitesmoke'></i></section>";
            const fd1 = [];
            for(const [k, v] of mcart.entries()){
                fd1.push(v.precio);
            }
            total1 = fd1.reduce((a, b) => parseInt(a) + parseInt(b), 0);
            console.log("Total:"+total1)
        }
    document.getElementById("cont-cart").innerHTML += "<button class='checkout' onclick='pagar()'>Realizar Pedido</button>"
}

function eliminarp(id){
    sessionStorage.removeItem(id);
    mcart.delete(""+ id +"");
    load();
}

let pasarela_activa = false;
function pagar(){
    if(localStorage.getItem("usr_status") === "yes"){
        var pagar = document.getElementById("p-cont2");
        var closep = document.getElementById("pagar_close");
        if(pasarela_activa === false){
            pagar.style.left = "0";
            closep.style.left = "40vw";
            console.log("TRUE");
            pasarela_activa = true;
        }else{
            pagar.style.left = "-900vw";
            closep.style.left = "-900vw";
            pasarela_activa = false;
        }
    }else{
        alert("Logeate para poder realizar la compra");
    }
}
























function generar_compra()
{
    
    for(const [k,v] of mcart.entries())
    {
        fetch_async_compra(k);
    }
    
}














function fetch_async_compra(id)
{
    const data = new FormData();
    data.set("id", id);
    
    
    fetch('update_bd.php', 
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
        console.log(texto);
        load_shop();
    })
    .catch(function(err) 
    {
        console.log(err);
    });
} 