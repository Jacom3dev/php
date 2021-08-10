<?php  
   if (isset($_SESSION['ingreso'])) {
        if ($_SESSION['ingreso'] == 'ok') {
            echo '
                <script>
                    window.location = "administracion";
                </script>
            ';
            return;
        }
   }
?>
<div class="row justify-content-center">
    <div class="col-12 col-md-5">
        <form action="" class="bg-light px-3 py-1 rounded mt-5 border-bottom" method="POST">
            <h2 class="text-center text-danger pb-3">Login</h2>
            <div class="form-gruop row">
                <div class="col">
                    <label for="usuario">Nombre de usuario:</label>
                    <input type="text" id="usuario" name="usuario" value="admin" class="form-control">
                </div>   
            </div>
            <div class="form-gruop row">
                <div class="col">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" value="admin" class="form-control">
                </div>   
            </div>
            <div class="form-group row">
                <div class="col">
                    <button type="submit" name="login" class="btn btn-danger mt-3 btn-block">Login</button> 
                </div>
            </div>
        </form>
        <?php 
            $login = Controlador::Login();
        ?>
        <?php if($login == "noExiste"):?>   
            <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Datos incorrectos',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    if (window.history.replaceState) {
                        window.history.replaceState(null,null,window.location.href)
                    }
            </script>
        <?php endif;?>
        <?php if($login == "vacios"):?>   
            <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Rellene todos los campos correctamente',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    if (window.history.replaceState) {
                        window.history.replaceState(null,null,window.location.href)
                    }
            </script>
        <?php endif;?>

    </div>
</div>