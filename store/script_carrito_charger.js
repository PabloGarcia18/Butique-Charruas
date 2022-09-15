let map_productos_carrito = new Map();

function carrito_charger(id, nombre, precio)
{
    const carrito = document.querySelector("#carrito_content");
    carrito.innerHTML += "<p>producto: " + nombre + ". cantidad: 1. precio: " + precio + "</p>";
    let nuevo_producto = 
    {
        nombre: nombre,
        precio: precio
    }

    map_productos_carrito.set(id, nuevo_producto);
}

function generar_compra()
{
    for(const [k,v] of map_productos_carrito.entries())
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