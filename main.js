var codigo, estado, poblacion, ciudad;
var ciud, p, est, pob;
$(document).ready(function () {

    var fila, opcion;
    var ciudad_id;

    $('#tabla').DataTable({
        "lengthMenu": [
            [10, 20, 50, -1],
            [10, 20, 50, "All"]
        ]
    });

    $("#buttonGuardar").click(function (e) {
        var valid = this.form.checkValidity();
        if (valid) {
            e.preventDefault();var ciudad = $('#ciudad').val();
            var codigo = $('#pais').val();
            var distrito = $('#distrito').val();
            var poblacion = $('#poblacion').val();
            switch (opcion) {
                case 1:
                    var ciudad = $('#ciudad').val();
                    var pais = $('#pais').val();
                    var distrito = $('#distrito').val();
                    var poblacion = $('#poblacion').val();
                    $.ajax({
                        type: 'POST',
                        url: 'BD/altas.php',
                        datatype: "json",
                        data: { ciudad: ciudad, pais: pais, distrito: distrito, poblacion: poblacion },
                        success: function (data) {
                            Swal.fire(
                                'Guardado!',
                                data,
                                'success'
                            )
                        },
                        error: function (data) {
                            Swal.fire(
                                'Error!',
                                'Hubo un error al guardar',
                                'error'
                            )
                        }
                    });
                    break;

                case 2:
                    $.ajax({
                        type: 'POST',
                        url: 'editar.php',
                        datatype: "json",
                        data: { ciudad_id: ciudad_id, ciudad: ciudad, codigo: codigo, estado: estado, poblacion: poblacion },
                        success: function (data) {
                            Swal.fire(
                                'Guardado!',
                                data,
                                'success'
                            )
                        },
                        error: function (data) {
                            Swal.fire(
                                'Error!',
                                'Hubo un error al guardar',
                                'error'
                            )
                        }
                    });
                    break;
            }

            $('#modalCRUD').modal('hide');
        }


    });

    //Nuevo
    $("#btnNuevo").click(function () {
        opcion = 1;
        $("#formCiudad").trigger("reset");
        $(".modal-title").text("Alta de Ciudad");
        $('#modalCRUD').modal('show');
    });

    //Editar
    $(document).on("click", "#btnEditar", function () {
        opcion = 2;
        fila = $(this).closest("tr");
        ciudad_id = parseInt(fila.find('td:eq(0)').text());
        ciudad = fila.find('td:eq(1)').text();
        var pais = fila.find('td:eq(2)').text();
        //alert(`${codigo} ${estado}`);
        $('#ciudad').val(ciudad);
        $('#pais').val(codigo);
        $('#distrito').val(estado);
        $('#poblacion').val(poblacion);
        $(".modal-title").text("Editar Ciudad");
        $('#modalCRUD').modal('show');

    });



});

function traerDatos(Vcodigo, Vestado, Vpoblacion) {
    codigo = Vcodigo;
    estado = Vestado;
    poblacion = Vpoblacion;
}