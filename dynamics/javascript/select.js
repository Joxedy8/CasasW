document.addEventListener("DOMContentLoaded", ()=>{
    //Selecciona tu casa
    const sectionHal = document.getElementById("halCont");
    const sectionTepo = document.getElementById("tepoCont");
    const sectionAjo =  document.getElementById("ajoCont");
    function decision(casa){
        let datosForm=new FormData();
        datosForm.append('casa', casa);
        fetch("./pagPrincipal.php",{
            method:"POST",
            body:datosForm
        }).then((respuesta)=>{
            
            return respuesta.json();
        }).then((dataJSON)=>{
            console.log(dataJSON);
        });
    }

    sectionHal.addEventListener("click", ()=>{
        let casa = "halcón";
        console.log(casa);
        decision(casa);
    });
    sectionTepo.addEventListener("click", ()=>{
       let casa = "teporingo" ;
        console.log(casa);
        decision(casa);

    });
    sectionAjo.addEventListener("click", ()=>{
        let casa = "ajolote";
        console.log(casa);
        //decision(casa);
        window.location.href = `../php/pagPrincipal?casa=${casa}`;
    });
    


});