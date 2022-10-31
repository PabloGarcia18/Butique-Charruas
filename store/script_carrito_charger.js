let mcart = new Map();
let cant = localStorage.getItem("cantidad_cart");

if(!cant){
    console.log("No hay cantidades")
    localStorage.setItem("cantidad_cart", 0);
}else{
    load();
}

function load(){
    for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i)
        const cat = JSON.parse(localStorage.getItem(key));
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

    localStorage.setItem("cantidad_cart", total);

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
        
        localStorage.setItem(id, JSON.stringify(prod2))
        const cat = JSON.parse(localStorage.getItem(id));
        mcart.set(id, cat);
    }else{
        mcart.set(id, nuevo_producto);
        nuevo_producto.cantidad = parseInt(mcart.get(id).cantidad)+1;
        mcart.set(id, nuevo_producto);
        localStorage.setItem(id, JSON.stringify(nuevo_producto))
        const cat = JSON.parse(localStorage.getItem(id));
        mcart.set(id, cat);
    }
    load()
}
function mostrarcart(){
    document.getElementById("cont-cart").innerHTML = "";
    for(const [k, v] of mcart.entries())
        {
            document.getElementById("cont-cart").innerHTML += 
            "<section class='infop'> <div class='product_img' style=\"background-image: url("+ v.img +")\"></div> <p class='product_title'>" + v.nombre + "</p> <p class='product_cant'>x" + v.cantidad + "</p> <p class='product_price'>$"+ v.precio * v.cantidad +"</p> <i id='eliminarprod' onclick='eliminarp("+v.id+")' class='fas fa-trash' style='color: whitesmoke'></i></section>";
        }
    document.getElementById("cont-cart").innerHTML += "<button class='checkout' onclick='pagar()'>Realizar Pedido</button>"
}

function pagar(){
    fetch('pagar.php');
}

function eliminarp(id){
    localStorage.removeItem(id);
    mcart.delete(""+ id +"");
    load();
    
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