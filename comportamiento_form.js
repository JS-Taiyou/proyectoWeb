indice = 0;


$(document).ready(function () {
    $("#buscar").hide();
    $("#1").click(function () {
        $("#alergia").show();
    });
    $("#0").click(function () {
        $("#alergia").hide();
    });
    $("#f").click(function () {
        $("#emblact").show();
    });
    $("#m").click(function () {
        $("#emblact").hide();
    });

    $("#enf").change(function () {
        val = $("#enf").val();
        if (val === "d") {
            $("#diabetes").show();
            $("#hipert").hide();
            $("#asma").hide();
        } else if (val === "h") {
            $("#diabetes").hide();
            $("#hipert").show();
            $("#asma").hide();
        }
        else if (val === "a") {
            $("#diabetes").hide();
            $("#hipert").hide();
            $("#asma").show();
        }
    });

    $("#reg").click(function () {
        if (this.checked) {
            $(".pagina0").children().hide();
            $("#siguiente").hide();
            $("#r").show();
            $("#curp").show();
            $("#buscar").show();
        } else {
            $(".pagina0").children().show();
            $("#buscar").hide();
            $("#siguiente").show();
        }
    })


});

function verificar() {
    valor = true;

    $(".pagina".concat(indice).concat(' > .input-group > input:visible')).each(function () {
        if (this.value === "") {
            valor = false;
        }
    });
    $(".pagina".concat(indice).concat(' > .input-group > select:visible')).each(function () {
        if (this.value === "") {
            valor = false;
        }
    });

    return valor;


}

function avanzar() {
    $(".pagina".concat(indice)).addClass('hidden');
    indice += 1;
    $(".pagina".concat(indice)).removeClass('hidden');
}


$("#siguiente").click(function () {
    if (indice >= 0 && indice <= 1) {
        if (verificar()) {
            if (indice === 0) {
                if ($("#edad").val() < 18)
                    alert("El beneficio es sólo para mayores de edad");
                else {
                    avanzar();
                    $("#anterior").removeClass('hidden');
                    $("#titulo").text('Evaluación de riesgos');
                }
            } else if (indice === 1) {
                if ($("#emb").val() === "n") {
                    avanzar();
                    $("#siguiente").addClass('hidden');
                    $("#guardar").removeClass('hidden');
                    $("#titulo").text("Aprobación de medicamentos");
                } else {
                    alert("El beneficio no aplica durante embarazo o lactancia");
                }
            }
        } else
            alert("Todos los campos deben ser rellenados")


    }
});

$("#anterior").click(function () {
    $(".pagina".concat(indice)).addClass('hidden');
    indice -= 1;
    if (indice === 1) {
        $("#siguiente").removeClass('hidden');
        $("#guardar").addClass('hidden');
        $("#titulo").text('Evaluación de riesgos');
    }
    $(".pagina".concat(indice)).removeClass('hidden');
    if (indice === 0) {
        $("#anterior").addClass('hidden');
        $("#titulo").text('Datos generales');
    }

});

$("#guardar").click(function () {
    if (verificar())
        $.post("formulario.php", $("#formulario").serialize());
});


$("#buscar").click(function () {
    if (verificar())
        $.post("formulario.php", {registrado: "1", curp: $("#curp").val()});
});