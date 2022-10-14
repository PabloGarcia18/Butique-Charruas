let mcart = new Map();
var cant = 0
function carrito_charger(id, nombre, precio)
{
    const carrito = document.querySelector("#cont-cart");
    const amount = document.querySelector(".count");
    cant = cant + 1;
    
    amount.innerHTML = "" + cant + "";
    if(cant > 0){
        amount.style.opacity = "1";
    }else{
        amount.style.opacity = "0";
    }
    let nuevo_producto = 
        {
            nombre: nombre,
            precio: precio,
            cantidad: 0,
        }
    if(mcart.has(id)){
        n = parseInt(mcart.get(id).cantidad)+1;

        let prod2 = 
        {
            nombre: nombre,
            precio: precio,
            cantidad: n,
        }
        
        mcart.set(id, prod2);
        
        mostrarcart();
    }else{
        mcart.set(id, nuevo_producto);
        nuevo_producto.cantidad = parseInt(mcart.get(id).cantidad)+1;
        mostrarcart();
        mcart.set(id, nuevo_producto);
    }
}
function mostrarcart(){
    document.getElementById("cont-cart").innerHTML = "";
    for(const [k, v] of mcart.entries())
        {
            
            document.getElementById("cont-cart").innerHTML += "<p>producto: " + v.nombre + ". cantidad:" + v.cantidad +". precio: " + v.precio + "</p>";
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