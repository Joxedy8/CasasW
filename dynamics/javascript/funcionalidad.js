document.addEventListener("DOMContentLoaded", function (){
    let verPass = document.getElementById("verPass");
    let contraseña = document.getElementById("contraseña");
    let sumar = document.getElementById("sumar");
    let restar = document.getElementById("restar");
    let enviar = document.getElementById("enviar");
    let a = 1;
    //Ver o no la contraseña
    verPass.addEventListener("click", ()=>{
        if(a==1){
            contraseña.type = "text";
            a--;
        }else{
            contraseña.type = "password";
            a++;
        }
    })
    
    //Seguridad
    enviar.addEventListener("click", ()=>{
        fetch("../php/seguridad.php")
        .then((respuesta)=>{
            return respuesta.json();
        }).then((datosJSON)=>{
            console.log(datosJSON);
        })
    })


    sumar.addEventListener("click", ()=>{
        fetch("../php/sumar.php")
        .then((respuesta)=>{
            return respuesta.json();
        }).then((datosJSON)=>{
            console.log()
        })
    })
    restar.addEventListener("click", ()=>{
        fetch("../php/restar.php")       
    })

    //Selecciona tu casa
    const sectionHal = document.getElementById("sectionHalcones");
    const sectionTepo = document.getElementById("sectionTeporingos");
    const sectionAjo =  document.getElementById("sectionAjolotes");

    sectionAjo.addEventListener("click", function (){
        hidden = document.getElementById("casa");
        hidden.value = this.innerText; 
    });

    sectionTepo.addEventListener("click", function (){
        hidden = document.getElementById("casa");
        hidden.value = this.innerText; 
    });

    sectionHal.addEventListener("click", function (){
        chidden = document.getElementById("casa");
        hidden.value = this.innerText; 
    });
});