<form action="" method="POST" enctype="multipart/form-data" class="p-3 rounded bg-light">
    <div class="form-group row ">
        <div class="col">
            <input type="text" class="form-control" placeholder="Producto" name="producto" id="" required>
        </div>   
    </div>
    <div class="form-group row">
        <div class="col-5">
            <input type="number" class="form-control" placeholder="valor" name="valor" id="" required>
        </div>
        <div class="col-5">
            <input type="number" class="form-control" placeholder="cantidad" name="cantidad" required id="">
        </div>
        <div class="col-2">
            <label for="img" class="btn btn-danger"><i class="fas fa-upload"></i></label>
            <input type="file" name="imagen" id="img" class="d-none" required>
        </div>  
    </div>
    <input class="btn btn-danger" name="subirProducto" type="submit" value="Registrar">
</form>
<?php
    $registrarProdcuto = Controlador::CrearProducto();
?>
<?php if($registrarProdcuto == "registrado"):?>   
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Producto Registrado',
            showConfirmButton: false,
            timer: 1500
        })
        if (window.history.replaceState) {
            window.history.replaceState(null,null,window.location.href)
        }
    </script>
<?php endif;?>