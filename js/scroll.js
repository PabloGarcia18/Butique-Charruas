window.onscroll = function() {
    var navbar = document.querySelector('nav');
    var contacto = document.querySelector('.nav-contacto');
    var nosotros = document.querySelector('.nav-nosotros');
    var vinos = document.querySelector('.nav-vinos');
    var experiencias = document.querySelector('.nav-expe');
    var logo = document.querySelector('.nav-logo')
    var flecha = document.querySelector('.arrow')
    // pageYOffset or scrollY
    if (window.screen.width < 501){
      return true;
    }else{
      if (window.pageYOffset > 0) {
      navbar.classList.add('scrolled');
      contacto.style.display = "unset";
      nosotros.style.display = "unset";
      experiencias.style.display = "unset";
      logo.style.display = "unset";
      vinos.style.display = "unset";
      logo.style.opacity = "1";
      contacto.style.opacity = "1";
      nosotros.style.opacity = "1";
      vinos.style.opacity = "1";
      experiencias.style.opacity = "1";
        
      logo.style.top = "-3px";
      contacto.style.top = "0";
      nosotros.style.top = "0";
      vinos.style.top = "0";
      experiencias.style.top = "0";
      flecha.style.opacity = "0";
      flecha.style.display = "none";
      //user.stlye.animation = "hideopacity 0.7s";
      //basket.stlye.animation = "hideopacity 0.7s";
      //logo.style.animation = "showopaccity 0.7s"
      } else {
        navbar.classList.remove('scrolled');
        
        //user.style.opacity = "1";
        //basket.style.opacity = "1";
        logo.style.opacity = "0";
        contacto.style.opacity = "0";
        nosotros.style.opacity = "0";
        vinos.style.opacity = "0";
        experiencias.style.opacity = "0";
        flecha.style.opacity = "1";
        flecha.style.display = "unset";
        setTimeout(setnone, 500);
        //logo.stlye.animation = "hideopacity 0.7s";
      }
    }
    
  }
  function setnone(){
    var contacto = document.querySelector('.nav-contacto');
    var nosotros = document.querySelector('.nav-nosotros');
    var vinos = document.querySelector('.nav-vinos');
    var experiencias = document.querySelector('.nav-expe');
    var logo = document.querySelector('.nav-logo')
    console.log("SeNonte")
    contacto.style.display = "none";
    nosotros.style.display = "none";
    experiencias.style.display = "none";
    logo.style.display = "none";
    vinos.style.display = "none";
  }
  
  function scroll(){
    var navbar = document.querySelector('nav');
    var contacto = document.querySelector('.nav-contacto');
    var nosotros = document.querySelector('.nav-nosotros');
    var vinos = document.querySelector('.nav-vinos');
    var experiencias = document.querySelector('.nav-expe');
    var logo = document.querySelector('.nav-logo')
    var flecha = document.querySelector('.arrow')
      
    navbar.classList.add('scrolled');
    contacto.style.display = "unset";
    nosotros.style.display = "unset";
    experiencias.style.display = "unset";
    logo.style.display = "unset";
    vinos.style.display = "unset";
    logo.style.opacity = "1";
    contacto.style.opacity = "1";
    nosotros.style.opacity = "1";
    vinos.style.opacity = "1";
    experiencias.style.opacity = "1";
    logo.style.top = "-3px";
    contacto.style.top = "0";
    nosotros.style.top = "0";
    vinos.style.top = "0";
    experiencias.style.top = "0";
    flecha.style.opacity = "0";
    flecha.style.display = "none";
  }