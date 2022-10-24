function load_shop()
{
    const market = document.getElementById("celda_market");
    
    fetch('load_market.php')
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
        market.innerHTML = " ";
        market.innerHTML = texto;
    })
    .catch(function(err) 
    {
        console.log(err);
    });
}

document.addEventListener("DOMContentLoaded", function(event) {
    load_shop();
});
function buscar_shop()
{   
    const vino_b = document.querySelector(".Search");
    const market2 = document.getElementById("celda_market");

    const formbusqueda = new FormData();

    formbusqueda.set("filtro_nombre", vino_b.value);
    fetch('load_market.php',
    {
        method: 'POST',
        body: formbusqueda
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
        market2.innerHTML = " ";
        market2.innerHTML = texto;
    })
    .catch(function(err) 
    {
        console.log(err);
    });
}
