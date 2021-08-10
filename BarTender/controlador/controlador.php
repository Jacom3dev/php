<?php

class Controlador{
    static public function CrearProducto(){
        if (isset($_POST['subirProducto'])) {
            $check = @getimagesize($_FILES['imagen']['tmp_name']);
            if ($check !== false){
                $tabla = "productos";
                $datos = array("producto"=>$_POST['producto'],
                               "valor"=>$_POST['valor'],
                               "cantidad"=>$_POST['cantidad'],
                               "nombreImagen"=>$_FILES['imagen']['name'],
                                "uploaded"=>$_FILES['imagen']['tmp_name']);
                
                $respuesta = Modelo::CrearProducto($tabla,$datos);
                return $respuesta;
            } else {
                return  "El archivo no es una imagen o el archivo es muy pesado";
               
            }
                          
        }
    }

    static public function TraerInfo($tabla){
        $respuesta = Modelo::TraerInfo($tabla,null,null);
        return $respuesta;
    }
    static public function EditarProducto(){
        if (isset($_POST['editarProducto'])) {
            $tabla = "productos";
            $datos = array("id"=>$_POST['id'],
                            "producto"=>$_POST['producto'],
                            "valor"=>$_POST['valor'],
                            "cantidad"=>$_POST['cantidad']);
                
            $respuesta = Modelo::EditarProducto($tabla,$datos);
            return $respuesta;
        }
    }

    static public function EliminarProducto($tabla){
        if (isset($_POST['eliminarProducto'])) {

            $respuesta = Modelo::EliminarProducto($tabla,$_POST['id']);
            return $respuesta;
        }
        
    }

    static public function Login(){
       if (isset($_POST['login'])) {
           if (!empty($_POST['usuario'] ||  !empty($_POST['password']))) {
                $tabla = "administrador";
                $columna = "usuario";
                $respuesta = Modelo::TraerInfo($tabla,$columna,$_POST['usuario']);

                if ($respuesta !== false) {
                    if ($respuesta['usuario'] == $_POST['usuario'] && $respuesta['pass'] == $_POST['password']) {
                        $_SESSION['ingreso'] = 'ok';
                        echo '
                        <script>
                            window.location = "administracion"
                        </script>
                        ';
                    }else {
                        return  'noExiste';
                    }
                }else {
                    return  'noExiste';
                }
           }else {
               return "vacios";
           }
            
       }
    }
}