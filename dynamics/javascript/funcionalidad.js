document.addEventListener("DOMContentLoaded", function (){

window.addEventListener("load", ()=>{
    sumar = document.getElementById("sumar");
    restar = document.getElementById("restar");
    enviar = document.getElementById("enviar");

    
    // sumar.addEventListener("click", ()=>{
    
    // })
    // restar.addEventListener("click", ()=>{

    // })


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