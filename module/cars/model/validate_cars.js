function validate_NBast(texto) {
    if (texto.length > 0) {
        var reg = /^[0-9]{9}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_Marca(texto) {
    if (texto.length > 0) {
        var reg = /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_Modelo(texto) {
    if (texto.length > 0) {
        var reg = /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_TComb() {
    var radios = document.getElementsByName("TComb");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;
    }

    //if (!formValid) alert("Tienes que seleccionar alguna opción!");
    return formValid;
}

function validate_Caballos(texto) {
    if (texto.length > 0) {
        var reg = /^[0-9]{1,4}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_Kilometros(texto) {
    if (texto.length > 0) {
        var reg = /^[0-9]{1,7}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_Matricula(texto) {
    if (texto.length > 0) {
        var reg = /^[0-9]{4} [A-Z]{3}$/;
        return reg.test(texto);
    }
    return false;
}

$(function () {
    $("#datepicker").datepicker({
        dateFormat: "dd/mm/yy",
        minDate: "-20Y",
        maxDate: "+0D",
        changeMonth: true,
        changeYear: true
    });
});


function validate_js(control) {
    // console.log('hola validate js');
    // return true;

    var check = true;

    var v_NBast = document.getElementById('NBast').value;
    var v_Marca = document.getElementById('Marca').value;
    var v_Modelo = document.getElementById('Modelo').value;
    var v_Caballos = document.getElementById('Caballos').value;
    var v_Kilometros = document.getElementById('Kilometros').value;
    var v_Matricula = document.getElementById('Matricula').value;

    var r_NBast = validate_NBast(v_NBast);
    var r_Marca = validate_Marca(v_Marca);
    var r_Modelo = validate_Modelo(v_Modelo);
    var r_TComb = validate_TComb();
    var r_Caballos = validate_Caballos(v_Caballos);
    var r_Kilometros = validate_Kilometros(v_Kilometros);
    var r_Matricula = validate_Matricula(v_Matricula);

    if (!r_NBast) {
        document.getElementById('error_NBast').innerHTML = " * El numero de bastidor introducido no es valido";
        check = false;
    } else {
        document.getElementById('error_NBast').innerHTML = "";
    }
    if (!r_Marca) {
        document.getElementById('error_Marca').innerHTML = " * La Marca introducida no es valido";
        check = false;
    } else {
        document.getElementById('error_Marca').innerHTML = "";
    }
    if (!r_Modelo) {
        document.getElementById('error_Modelo').innerHTML = " * El Modelo introducida no es valida";
        check = false;
    } else {
        document.getElementById('error_Modelo').innerHTML = "";
    }
    if (!r_TComb) {
        document.getElementById('error_Modelo').innerHTML = " * No ha seleccionado Modelo";
        check = false;
    } else {
        document.getElementById('error_Modelo').innerHTML = "";
        check = true;
    }
    if (!r_TComb) {
        document.getElementById('error_TComb').innerHTML = " * No has seleccionado tipo de combustible";
        check = false;
    } else {
        document.getElementById('error_TComb').innerHTML = "";
    }
    if (!r_Caballos) {
        document.getElementById('error_Caballos').innerHTML = " * Los caballos que ha introducido no son correctos";
        check = false;
    } else {
        document.getElementById('error_Caballos').innerHTML = "";
    }
    if (!r_Kilometros) {
        document.getElementById('error_Kilometros').innerHTML = " * No has introducido ningun Kilometro";
        check = false;
    } else {
        document.getElementById('error_Kilometros').innerHTML = "";
    }
    if (!r_Matricula) {
        document.getElementById('error_Matricula').innerHTML = " * La Matricula introducida no es valida";
        check = false;
    } else {
        document.getElementById('error_Matricula').innerHTML = "";
    }
    if (check) {
        if (control == "update") {
            document.getElementById('update').submit();
            document.getElementById('update').action = "index.php?page=controller_cars&op=update";
        }
        if (control == "create") {
            document.getElementById('create').submit();
            document.getElementById('create').action = "index.php?page=controller_cars&op=create";
        }
    }
}

function loadContentModal() {
    $('#table_crud').DataTable();
    $(".car").on("click", function () {
        var id = this.getAttribute('id');

        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'module/cars/controller/controller_cars.php?op=read_modal&ID=' + id,
            //////
        }).done(function (data) {
            $('<div></div>').attr('id', 'detailsCars', 'type', 'hidden').appendTo('#modalcontent');
            $('<div></div>').attr('id', 'Div1').appendTo('#modalcontent');

            $('#Div1').html(function () {
                var content = "";
                for (row in data) {
                    content += '<br><span>' + row + ': <span id =' + row + '>' + data[row] + '</span></span>';
                }// end_for
                //////
                return content;
            });
            //////
            showModal(Nombre = data.Marca + " " + data.Modelo, data.ID);
            //////
        }).fail(function () {
            window.location.href = 'index.php?page=error503';
        });
    });
}// end_loadContentModal

function showModal(Nombre, id) {
    $("#modalcontent").show();
    $("#modalcontent").dialog({
        title: Nombre,
        width: 850,
        height: 500,
        resizable: "false",
        modal: "true",
        hide: "fold",
        show: "fold",
        buttons: {
            Update: function () {
                window.location.href = 'index.php?page=controller_cars&op=update&ID=' + id;
            },
            Delete: function () {
                window.location.href = 'index.php?page=controller_cars&op=delete&ID=' + id;
            }
        }// end_Buttons
    }); // end_Dialog
}// end_showModal

$(document).ready(function () {
    loadContentModal();
});