document.addEventListener("DOMContentLoaded", function (){

window.addEventListener("load", ()=>{
     let verPass = document.getElementById("verPass");
    let contraseña = document.getElementById("contraseña");
    let sumar = document.getElementById("sumar");
    let restar = document.getElementById("restar");
    let enviar = document.getElementById("enviar");
    let a = 1;
    verPass.addEventListener("click", ()=>{
        if(a==1){
            contraseña.type = "text";
            a--;
        }else{
            contraseña.type = "password";
            a++;
        }
    })
    
      sumar.addEventListener("click", ()=>{
    
   
     })
       
     restar.addEventListener("click", ()=>{

            
     })

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

});
