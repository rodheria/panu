window.onload=function(){
  
    var registerForm = document.querySelector("#formulario")
    registerForm.elements.name.focus()
    console.log(registerForm.elements.name)
    //console.log(registerForm)

    registerForm.addEventListener('submit', function (evento){ 
    
     
      // console.log(evento)
         
       if (!validateRegisterForm(evento)) {
         evento.preventDefault()
       }else{
         registerForm.submit
       }
     })


    /*registerForm.onsubmit = function (evento){ 
    
     
     // console.log(evento)
        
      if (!validateRegisterForm(evento)) {
        evento.preventDefault()
      }else{
        registerForm.submit
      }
    }*/
  
/*
    Array.from(registerForm.elements).forEach((elemento) => {
      elemento.addEventListener('keypress', validateRegisterForm);
    }) */

    function validateRegisterForm() {
    
      var { name, email, password,
      passwordConfirm } = registerForm.elements
       
      if (!validateName(name.value)) return false
      if (!validateEmail(email.value)) return false
      if (!validatePassword(password.value)) return false
      if (!validatePasswordConfirm(Password.value, passwordConfirm.value)) return false
           return true
      }



      function validateName(name) {
        
        if (name==="" || name.length <= 3){
          document.getElementById("error").innerHTML= "Ingrese un nombre de usuario válido"
          document.getElementById("error").classList.add("alert-danger")
          return false
        }else{
          document.getElementById("error").innerHTML = ""
          document.getElementById("error").classList.remove("alert-danger")
          registerForm.elements.email.focus()
          return true
        }
      }
      
      function validateEmail(email) {
        var re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
        if (re.test(email)) return true
    
        swal('Error', 'Ingrese un email válido', 'error')
        return false
      }
    
      function validatePassword(password) {
        const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
        var errorPassword = document.getElementById("errorPassword")
        
        if (re.test(password)){
          errorPassword.innerHTML = ""
          errorPassword.removeAttribute("class","alert-danger")
          return true
        }else{
          errorPassword.innerHTML = "Ingrese una contraseña válida"
          errorPassword.setAttribute("class","alert-danger")
          return false
          } 
        
            
      }
    
      function validatePasswordConfirm(password,confirm){
        if (password === confirm) return true
    
        swal('Error', 'Las contraseñas no son iguales', 'error')
        return false
      }
    
     
      
      
  }   

  











