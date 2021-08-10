<nav class="navbar navbar-expand-md navbar-dark bg-danger py-3">
    <div class="container">
        <a href="pedidos" class="navbar-brand "><i class="fas fa-beer"></i> <span class="font-weight-bold">Bar</span>Tender</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbar" aria-expanded="false" aria-label="menu de navegacion">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="pedidos" class="nav-link text-dark">
                        Lista de Pedidos
                    </a>
                </li>
                <?php if (isset($_SESSION['ingreso'])):?> 
                    <li class="nav-item">
                        <a href="ventas" class="nav-link text-dark">Ventas</a>      
                    </li>
                    
                <?php endif;?>
            </ul>
            <?php if ($_GET['pagina'] == "administracion"):?> 
                <a href="salir" class="text-dark">Cerrar Sesion</a>
            <?php else:?> 
                <a href="login" class="btn bnt-primary"><i class="fas fa-user-cog"></i></a> 
            <?php endif;?>
            
        </div>
    </div>
</nav>