
indice = 0;
$(document).ready(function(){
    $("#1").click(function(){
        $("#alergia").show();
    });
    $("#0").click(function(){
        $("#alergia").hide();
    });
});

$("#siguiente").click(function(){
    if(indice >= 0 && indice <=1){
        $(".pagina".concat(indice)).addClass('hidden');
        indice += 1;
        if(indice === 1){
            $("#anterior").removeClass('hidden');
            $("#titulo").text('Evaluación de riesgos');
        }
        $(".pagina".concat(indice)).removeClass('hidden');
        if(indice === 2){
            $("#siguiente").addClass('hidden');
            $("#guardar").removeClass('hidden');
            $("#titulo").text("Aprobación de medicamentos");
        }
    }
});

$("#anterior").click(function () {
        $(".pagina".concat(indice)).addClass('hidden');
        indice -= 1;
        if(indice === 1){
            $("#siguiente").removeClass('hidden');
            $("#guardar").addClass('hidden');
            $("#titulo").text('Evaluación de riesgos');
        }
        $(".pagina".concat(indice)).removeClass('hidden');
        if(indice === 0){
            $("#anterior").addClass('hidden');
            $("#titulo").text('Datos generales');
        }

});

$("#guardar").click(function () {
    console.log($( "#formulario" ).serialize());
});