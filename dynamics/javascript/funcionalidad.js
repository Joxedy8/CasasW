window.addEventListener("click", ()=>{
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

    function cambiarCasa(){
        hidden = document.getElementById("casa");
        hidden.value = this.innerText;
    }

})
