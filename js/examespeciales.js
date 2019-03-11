/* function validarMatricula() {

    var pattern = '/[0-9]/';
    var matricula = document.getElementById("imatricula").value;
    document.getElementById("estatus").innerHTML=pattern.test(rfc);
    return pattern.test(matricula);
    
} */

function valida_usuario() {
    var js_matricula = document.getElementById("imatricula").value.trim();
    var js_nombre = document.getElementById("inombre").value.trim();
    var js_correo = document.getElementById("icorreo").value.trim();
    var js_telefono = document.getElementById("itelefono").value.trim();
    var js_grado = document.getElementById("sgrado").value.trim();
    var js_plan = document.getElementById("splan").value.trim();
    var js_carrera = document.getElementById("scarrera").value.trim();
    var js_materias = document.getElementById("smaterias").value.trim();
    var js_estatus = document.getElementById("sestatus").value.trim();


    //alert(js_rfc);
    if(js_matricula.length==0){
        alert("Error: campo Matricula no debe estar vacío");
        return false;
    }
    else if(js_nombre==0){
        alert("Error: campo Nombre no debe estar vacío");
        return false;
    }
    else if(js_correo==0){
        alert("Error: campo Correo no debe estar vacío");
        return false;
    }
    else if(js_telefono==0){
        alert("Error: campo Telefono no debe estar vacío");
        return false;
    }
    else if(js_grado==0){
        alert("Error: campo Grado no debe estar vacío");
        return false;
    }
    else if(js_plan==0){
        alert("Error: campo Plan no debe estar vacío");
        return false;
    }
    else if(js_carrera==0){
        alert("Error: campo Carrera no debe estar vacío");
        return false;
    }
    else if(js_materias==0){
        alert("Error: campo Materias no debe estar vacío");
        return false;
    }
    else if(js_estatus==0){
        alert("Error: campo Status no debe estar vacío");
        return false;
    }
}