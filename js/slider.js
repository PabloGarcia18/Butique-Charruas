function slider(c){
    var btn1 = document.getElementById("v1");
    var btn2 = document.getElementById("v2");
    var intro1 = document.getElementById("intro1");
    var intro2 = document.getElementById("intro2");
    
    if (c == 1){
        if (btn1.style.backgroundColor == "whitesmoke"){
            console.log("Esta en este slider!");
        }else{
            console.log("No esta en el Slider!");
            btn1.style.backgroundColor = "whitesmoke";
            btn2.style.backgroundColor = "#867d8f";
            btn1.style.cursor = "default";
            btn2.style.cursor = "pointer";
            intro1.style.display = "unset";
            intro2.style.display = "none";
            //intro1.classList.remove('hidden');
            //intro2.classList.add('hidden');
            intro1.play();
            intro1.currentTime = 0;
            intro2.pause();
            intro2.currentTime = 0;
        }
    }else{
        if (btn2.style.backgroundColor == "whitesmoke"){
            console.log("Esta en este slider!");
        }else{
            console.log("No esta en el Slider!");
            btn1.style.backgroundColor = "#867d8f";
            btn2.style.backgroundColor = "whitesmoke";
            btn1.style.cursor = "pointer";
            btn2.style.cursor = "default";
            intro1.style.display = "none";
            intro2.style.display = "unset";
            //intro1.classList.add('hidden');
            //intro2.classList.remove('hidden');
            intro2.play();
            intro2.currentTime = 0;
            intro1.pause();
            intro1.currentTime = 0;
        }
    }
}
