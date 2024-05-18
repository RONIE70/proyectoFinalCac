
        document.getElementById("miFormulario").addEventListener("submit",function(event)
        {
            event.preventDefault();

            var nombre=document.getElementById("nombre").value;
            var apellido=document.getElementById("apellido").value;
            var email=document.getElementById("email").value;
            var nombreError=document.getElementById("nombreError");
            var apellidoError=document.getElementById("apellidoError");
            var emailError=document.getElementById("emailError");
            var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            nombreError.textContent="";
            apellidoError.textContent="";
            emailError.textContent="";
        
            if(nombre.trim()==="")
            {
                nombreError.textContent="Complete el campo con su nombre";
                return;
            }

            if(apellido.trim()==="")
            {
                apellidoError.textContent="Complete el campo con su apellido";
                return;
            }

            if(!regexEmail.test(email))
            {
                emailError.textContent="No has ingresado un mail";
                return ;
            }
            alert("EL formulario se envio con exito");
        });
   