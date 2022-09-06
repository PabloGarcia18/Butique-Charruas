function load_shop()
{
    const market = document.querySelector(".celda_market");
    
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

