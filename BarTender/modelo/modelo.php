<?php 
require_once "conexion.php";
class Modelo {
    public static function CrearProducto($tabla,$datos){
        $carpeta_destino = 'vista/assets/img/imgProductos/';
		$archivo_subido = $carpeta_destino . $datos['nombreImagen'];
		move_uploaded_file($datos['uploaded'], $archivo_subido);

        $statement = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, precio, cantidad,imagen) VALUES (:nombre, :precio, :cantidad,:imagen)");
        $statement->bindParam(':nombre',$datos['producto'],PDO::PARAM_STR);
        $statement->bindParam(':precio',$datos['valor'],PDO::PARAM_INT);
        $statement->bindParam(':cantidad',$datos['cantidad'],PDO::PARAM_INT);
        $statement->bindParam(':imagen',$datos['nombreImagen'],PDO::PARAM_STR);
        if ($statement->execute()) {
            return "registrado";
        }
        
    }
    public static function TraerInfo($tabla,$columna,$valor){
        if ($columna == null || $valor == null) {
            $statement = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $statement->execute();
            return $statement->fetchAll();   
        }else {
            
            $statement = Conexion::conectar()->prepare("SELECT *  FROM $tabla where $columna = :$columna");
            $statement->bindParam(':'.$columna,$valor,PDO::PARAM_STR);
            $statement->execute();
            return $statement->fetch();
        }
        
    }

    static public function EditarProducto($tabla,$datos){
        $id = $datos['id'];
        $statement = Conexion::conectar()->prepare("UPDATE $tabla set nombre = :nombre,precio = :precio, cantidad = :cantidad WHERE id = $id");
        $statement->bindParam(":nombre",$datos['producto'],PDO::PARAM_STR);
        $statement->bindParam(":precio",$datos['valor'],PDO::PARAM_INT);
        $statement->bindParam(":cantidad",$datos['cantidad'],PDO::PARAM_INT);

        if ($statement->execute()) {
            return "actualizado";
        }
    }
    static public function EliminarProducto($tabla,$id){
        $statement = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        $statement->bindParam(":id",$id,PDO::PARAM_INT);

        if ($statement->execute()) {
            return "Eliminado";
        }
    }
}