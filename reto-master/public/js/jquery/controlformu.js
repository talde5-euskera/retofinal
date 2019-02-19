function validaForm(){
    // Campos de texto
    // Valilador de nombre
    if($("#nombre").val() != ""){
        var espacios = 0;
        for (var i = 0 ; i <= $("#nombre").val().length ; i++) {
            if ($("#nombre").val().substr(i,1) == "1" || $("#nombre").val().substr(i,1) == "2" || $("#nombre").val().substr(i,1) == "3" || $("#nombre").val().substr(i,1) == "4" || $("#nombre").val().substr(i,1) == "5" || $("#nombre").val().substr(i,1) == "6" || $("#nombre").val().substr(i,1) == "7" || $("#nombre").val().substr(i,1) == "8" || $("#nombre").val().substr(i,1) == "9" ) {
                
                alert("No se permiten numeros en un nombre");
                $("#nombre").focus();
                return false;
            }
        }

    }else{

        alert("El campo Nombre no puede estar vacío.");
        $("#nombre").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
        return false;
    }

    
    if($("#direccion").val() == ""){
        alert("El campo Dirección no puede estar vacío.");
        $("#direccion").focus();
        return false;
    }

    // Checkbox
    if(!$("#mayor").is(":checked")){
        alert("Debe confirmar que es mayor de 18 años.");
        return false;
    }

    return true; // Si todo está correcto
}

$(document).ready(function () {

    
    $("#botonprueba").click( function() {
        if(validaForm()){ 
            alert("FUNCIONA");

        }// Primero validará el formulario.
        else{
            alert("mentira")
        }
    }); // Con esto establecemos la acción por defecto de nuestro botón de enviar.
        
});