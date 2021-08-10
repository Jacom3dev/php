<div class="modal fade" id="modalEliminar<?php echo $value['id']?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body  rounded py-3">
                <form action="" method="POST" enctype="multipart/form-data" class="p-3 ">
                   <h3 class="text-center">Eliminar Producto</h3>
                   <p class="text-center">¿ desea eliminar el Producto ?</p>
                   <input type="hidden" name="id" value="<?php echo $value['id'];?>">
                    <div class=" d-flex justify-content-center btn-group" role="group" aria-label="Basic example">
                        <input class="btn btn-primary" name="eliminarProducto" type="submit" value="Eliminar">
                        <button class="btn btn-secondary" data-dismiss="modal" aria-label="cerrar">Cancelar</button>
                    </div>
                </form>
                <?php 
                    $eliminar = Controlador::EliminarProducto("productos");
                ?>
                    <?php if($eliminar == "Eliminado"):?>   
                    <script>
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Eliminado',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            if (window.history.replaceState) {
                                window.history.replaceState(null,null,window.location.href)
                            }
                            setTimeout(() => {
                                window.location = "administracion"
                            }, 2000);
                            
                    </script>

                <?php endif;?>
            </div>
        </div>
    </div>
</div>