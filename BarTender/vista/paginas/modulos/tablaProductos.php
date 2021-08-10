<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Imagen</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $info = Controlador::TraerInfo("productos");
        ?>

        <?php if (count($info)>=1):?>
            <?php foreach($info as $key =>$value): ?>
                <tr>
                    <th><?php echo $value['id']; ?></th>
                    <td><img src="vista/assets/img/imgProductos/<?php echo $value['imagen']; ?>" class="img-productos" alt="<?php echo $value['nombre']; ?>"></td>
                    <td><?php echo $value['nombre']; ?></td>
                    <td><?php echo $value['precio']; ?></td>
                    <td><?php echo $value['cantidad']; ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalActulizar<?php echo $value['id']?>"><i class="fad fa-pencil"></i></button>
                            <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modalEliminar<?php echo $value['id']?>"><i class="fas fa-trash-alt"></i></i></button>
                        </div>
                    </td>
                </tr>           
                <?php
                    include "modalEditar.php";
                    include "modalEliminar.php";
                ?> 
            <?php endforeach ; ?>
        <?php else:?>
            <h3 class="text-center">No Hay Productos</h3>
        <?php endif;?>
        

    </tbody>
</table>