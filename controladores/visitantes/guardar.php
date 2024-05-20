<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

require "../../modelos/visitas.php";

$_POST['vis_nombre'] = htmlspecialchars($_POST['vis_nombre']);
$_POST['vis_apellido'] = htmlspecialchars($_POST['vis_apellido']);
$_POST['vis_procedencia'] = htmlspecialchars($_POST['vis_procedencia']);
$_POST['vis_fechaingreso'] = date('Y-m-d H:i', strtotime($_POST['vis_fechaingreso']));
$_POST['vis_fechasalida'] = date('Y-m-d H:i', strtotime($_POST['vis_fechasalida']));
$_POST['vis_motivo'] = htmlspecialchars($_POST['vis_motivo']);

if ($_POST['vis_nombre'] == '' || $_POST['vis_apellido'] == '' || $_POST['vis_procedencia'] == '' || $_POST['vis_fechaingreso'] == '' || $_POST['vis_fechasalida'] == '' || $_POST['vis_motivo'] == '') {
    // No Ingreso Datos
    $resultado = [
        'mensaje' => 'NO INGRESO DATOS DATOS',
        'codigo' => 2
    ];
} else {
    try {
        // REALIZAR CONSULTA
        $nuevavisita = new Visitas($_POST);
        $guardar = $nuevavisita->guardar();
        $resultado = [
            'mensaje' => 'CLINTE INGRESADO CORRECTAMENTE',
            'codigo' => 1
        ];
    } catch (PDOException $de) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR AL INGRESAR DATOS A LA BASE DE DATOS',
            'detalle' => $de->getMessage(),
            'codigo' => 0
        ];
    } catch (Exception $e) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR EN LA EJECUCIÓN',
            'detalle' => $e->getMessage(),
            'codigo' => 0
        ];
    }
}

$alertas = ['danger', 'success', 'warning'];
echo "<pre>";
print_r($nuevavisita);
echo "</pre>";
include_once '../../vistas/templates/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-lg-6 alert alert-<?= $alertas[$resultado['codigo']] ?>" role="alert">
        <?= $resultado['mensaje'] ?>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <a href="../../vistas/visitantes/index.php" class="btn btn-primary w-100 " >Volver al formulario</a>
    </div>
</div>


<?php include_once '../../vistas/templates/footer.php'; ?>