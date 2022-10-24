<html>
    <div class="sdv">
        <form id="search-form" method="POST" name="form1" id="buscar_fetch">  
            <input type="text" class="Search" name="busqueda" onkeypress="buscar_shop()">
            <button><i class="fa fa-search" id="busqueda"></i></button>
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
    width: 100%;
    height: 40px;
    font-size: 1.5rem;
    font-family: Neutra-Text;
    transition: all ease-in-out 1s;
}
.sdv{
    position: fixed;
    z-index: 4;
    width: 100%;
    height: 35px;
    transition: all ease-in-out 1s;
    top: 52px;
}
.sdv button{
    position: absolute;
    top: 7px;
    right: 0.6rem;
    width: 35px;
    height: 35px;
    background: transparent;
    border: none;
}
</style>