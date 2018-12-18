window.onload=function(){

  document.getElementById("name").focus()
  var formulario=document.forms[0]
  document.forms[0].elements.name.focus()
  document.formulario.onsubmit=function(evento){
      evento.preventDefault()
      if(document.getElementById('name').value.length ===0){
          alert("El campo no lo puede dejar en blanco")
          document.getElementById("name").focus()
          return false
      }

      if(document.getElementById('nombre').value===""){
          alert("El campo no lo puede dejar en blanco")
          document.getElementById("nombre").focus()
          return false
      }
      if(document.getElementById('apellido').value===""){
          alert("El campo no lo puede dejar en blanco")
          document.getElementById("apellido").focus()
          return false
      }
     
      alert("Gracias por enviarnos tus datos")
      formulario.submit
  }

  
      


  
}




















    


  









































