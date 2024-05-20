<?php

include_once "../templates/header.php"; ?>

<h1 class="text-center">Ingresar Visitantes</h1>
<div class="row justify-content-center">
    <form action="../../controladores/clientes/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="vis_nombre">Nombre del visitante</label>
                <input type="text" name="vis_nombre" id="vis_nombre" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="vis_apellido">Apellidos del Visitante</label>
                <input type="text" name="vis_apellido" id="vis_apellido" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="vis_procedencia">Lugar de Procedencia</label>
                <input type="tex" name="vis_procedencia" id="vis_procedencia" class="form-control" placeholder="Ej. Las Flores, Guatemala" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="vis_fechaingreso">Fecha y hora de ingreso</label>
                <input type="datetime" name="vis_fechaingreso" id="vis_fechaingreso"  class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="vis_fechasalida">Fecha y hora de Salida</label>
                <input type="datetime" name="vis_fechasalida" id="vis_fechasalida"  class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-info w-100">Guardar Vistante</button>
            </div>
        </div>
    </form>
</div>

<?php include_once "../templates/footer.php";