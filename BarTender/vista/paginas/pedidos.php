<div class="row mt-3 justify-content-center flex-wrap">
    <?php
        $info = Controlador::TraerInfo("productos");
    ?>
    
    <?php foreach($info as $key =>$value): ?>
        <div class="col-11 col-sm-6 col-lg-4 mt-2">
            <div class="card p-3 w-100" style="width: 18rem;">
                <img class="card-img-top img-productos2" src="vista/assets/img/imgProductos/<?php echo $value['imagen']; ?>"  alt="<?php echo $value['nombre']; ?>" alt="Card image cap">
                <div class="card-body d-flex  justify-content-center">
                    <button class="btn btn-primary ">Agregar al Pedido</button>
                </div>
            </div>
        </div>
    <?php endforeach ; ?>
    
</div>

<div class="row">
    <div class="col">
        <div class="table">
            
        </div>
    </div>
</div>