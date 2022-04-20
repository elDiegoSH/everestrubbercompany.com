$("#formulario").submit(function(event){
    event.preventDefault(); 
    enviar();
});
function enviar(){
    var datos = $("#formulario").serialize(); 
    $.ajax({
        type: "post",
        url:"formulario.php",
        data: datos,
        success: function(texto){
            if(texto=="exito"){
                correcto();
            }else{
                phperror(texto);
            }
        }
    })
}
function correcto(){
    $("#mensajeExito").removeClass("d-none");
    $("#mensajeError").addClass("d-none");
    formulario.reset();
}
function phperror(texto){
    $("#mensajeError").removeClass("d-none");
    $("#mensajeError").html(texto);
}

// *************************** //
// *************************** //
// ***  FORMULARIO FOOTER  *** //
// *************************** //
// *************************** //

$("#formulario2").submit(function(event){
    event.preventDefault(); 
    enviar2();
});
function enviar2(){
    var datos = $("#formulario2").serialize(); 
    $.ajax({
        type: "post",
        url:"formulario2.php",
        data: datos,
        success: function(texto){
            if(texto=="exito"){
                correcto2();
            }else{
                phperror2(texto);
            }
        }
    })
}
function correcto2(){
    $("#mensajeExito2").removeClass("d-none");
    $("#mensajeError2").addClass("d-none");
    formulario2.reset();
}
function phperror2(texto){
    $("#mensajeError2").removeClass("d-none");
    $("#mensajeError2").html(texto);
}