<html>
    <div class="sdv">
        <form id="search-form" method="POST" name="form1" id="buscar_fetch">  
            <input type="text" class="Search" name="busqueda" placeholder="Buscar Vino" onkeypress="buscar_shop()"> 
            <i class="fa fa-search" id="busqueda" onclick="buscar_shop()"></i>
        </form>
    </div>
</html>
<style>
#busqueda{
  color: black;
  font-size: 1.29rem;
  cursor: pointer;
  transition: all ease-in-out .4s;
}
.Search{
    top: 0;
    width: 60%;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid 1px darkgray;
    background: none;
    height: 30px;
    font-size: 1.5rem;
    font-family: Neutra-Text;
    transition: all ease-in-out 1s;
}
.Search:focus{
    outline: none;
    border-bottom: solid 1px brown;
}
.sdv{
    position: relative;
    z-index: 4;
    width: 20vw;
    height: 35px;
    transition: all ease-in-out 1s;
}
</style>