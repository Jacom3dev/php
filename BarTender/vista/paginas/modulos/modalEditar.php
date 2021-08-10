<div class="modal fade" id="modalActulizar<?php echo $value['id']?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar</h5>
                <button class="close" data-dismiss="modal" aria-label="cerrar">
                    <span aria-hidden="true" class="text-danger">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" class="p-3 ">
                    <div class="form-group row ">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto" name="producto" value="<?php echo $value['nombre'];?>">
                        </div>   
                    </div>
                    <div class="form-group row">
                        <div class="col-5">
                            <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                            <input type="number" class="form-control" placeholder="valor" name="valor"  value="<?php echo $value['precio'];?>">
                        </div>
                        <div class="col-5">
                            <input type="number" class="form-control" placeholder="cantidad" name="cantidad" value="<?php echo $value['cantidad'];?>">
                        </div>  
                    </div>
                    <div class="d-flex justify-content-between">
                        <input class="btn btn-warning" name="editarProducto" type="submit" value="Actualizar">
                        <button class="btn btn-primary" data-dismiss="modal" aria-label="cerrar">Cancelar</button>
                    </div>
                    
                </form>
                <?php 
                     $actulizar = Controlador::EditarProducto();

                ?>
                    <?php if($actulizar == "actualizado"):?>   
                    <script>
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'actualizado',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            if (window.history.replaceState) {
                                window.history.replaceState(null,null,window.location.href)
                            }
                            window.location = "administracion"
                    </script>

                <?php endif;?>
            </div>
        </div>
    </div>
</div>