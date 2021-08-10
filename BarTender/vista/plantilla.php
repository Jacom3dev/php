<?php  
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- estilos css -->
    <link rel="stylesheet" href="vista/assets/css/styles.css">    
    <!-- Font awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"  crossorigin="anonymous"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Crud</title>
</head>
<body>
    <?php  
        include "paginas/modulos/menu.php";
    ?>

    <div class="container">
        <?php
        if (isset($_GET['pagina'])) {
            if ($_GET['pagina']=="pedidos" || $_GET['pagina'] == "login" ||$_GET['pagina'] == "administracion" || $_GET['pagina'] == "salir" ||$_GET['pagina'] == "ventas" ) {
                include "paginas/".$_GET['pagina'].".php";
            }else {
                include "paginas/error404.php";
            }
        }else {
            include "paginas/pedidos.php";
        }
            
        ?>
    </div>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>