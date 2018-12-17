window.onload=function(){
    document.getElementById("name").focus()
    var formulario=document.forms[0]
    document.forms[0].elements.name.focus()
    document.formulario.onsubmit=function(evento){
        evento.preventDefault()
        if(document.getElementById('name').value.length ===0){
            alert("El campo no puede quedar vacio")
            document.getElementById("name").focus()
            return false
        }

        if(document.getElementById('email').value===""){
            alert("El campo no puede quedar vacio")
            document.getElementById("email").focus()
            return false
        }
        if(document.getElementById('password').value===""){
            alert("El campo no puede quedar vacio")
            document.getElementById("password").focus()
            return false
        }
        if(document.getElementById("password").checked != true){
            alert("El campo no puede quedar vacio")
            document.getElementById("password-confirm").focus()
            return false
        }
        alert("Gracias por enviarnos tus datos")
        formulario.submit
    }








}



























