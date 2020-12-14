<?php include "includes/header.php";?>

<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col-10">
            <h2>Ciudades</h2>
        </div>
        <div class="col-2">
            <!-- Button trigger modal -->
            <button id="btnNuevo" type="button" class="btn btn-success" class="btn btn-primary" data-toggle="modal"><i
                    class="far fa-plus-square"></i>&nbsp;AGREGAR</button>
        </div>
    </div>
    <table id="tabla" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php include "includes/select_ciudad.php";?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<?php include "modal.php";?>

<?php include "includes/footer.php";?>