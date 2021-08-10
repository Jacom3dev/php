<?php 
    if (!isset($_SESSION['ingreso'])) {
        echo '
        <script>
            window.location = "alegirPedido";
        </script>
       ';
        return;
    }else {
        if ($_SESSION['ingreso'] != 'ok') {
            echo '
                <script>
                    window.location = "alegirPedido";
                </script>
            ';
            return;
        }
    }
?>
<div class="row mt-5 justify-content-between">
    <div class="col-12 col-md-5">
        <h4 class="text-center">Registro de Productos</h4>
        <?php include "modulos/registroProductos.php"; ?>
    </div>
    <div class="col-12 col-md-7">
        <?php include "modulos/tablaProductos.php"; ?>
    </div>
</div>
