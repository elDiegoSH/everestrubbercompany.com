$("#formulario2").submit(function(event){
    event.preventDefault(); 
    enviar();
});
function enviar(){
    var datos = $("#formulario2").serialize(); 
    $.ajax({
        type: "post",
        url:"formulario2.php",
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

