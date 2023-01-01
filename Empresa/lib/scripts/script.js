const tratarClick=(event)=>{
    if(event.target.id.slice(0,3)=="btn"){
        if(event.target.id.slice(4,).trim()=="lempl"){
            listaEmpleados.style.display="block"
            listaDepartamentos.style.display="none"

        }
        
        else{
            if(event.target.id.slice(4,).trim()=="ldep"){
                listaDepartamentos.style.display="block"
                listaEmpleados.style.display="none"

            }else{
                location.href ="../pages/"+event.target.id.slice(4,)+".php"
            }
        }
    }
}



document.addEventListener("click",tratarClick)