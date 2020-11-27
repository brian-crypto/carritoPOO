<?php
require_once "conexion.php";
class Producto{
    private $idProducto;
    private $nombre;
    private $precio;
    private $presentacion;
    private $stock;
    public function __construct($nombre=null,$precio=null,$presentacion=null,$stock=null,$idProducto=null){
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->presentacion=$presentacion;
        $this->stock=$stock;
        $this->idProducto=$idProducto;
    }

    public function setIdProducto($idProducto){
        $this->idProducto=$idProducto;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setPrecio($precio){
        $this->precio=$precio;
    }
    public function setPresentacion($presentacion){
        $this->presentacion=$presentacion;
    }
    public function setStock($stock){
        $this->stock=$stock;
    }

    public function getIdProducto(){
        return $this->idProducto;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function getPresentacion(){
        return $this->presentacion;
    }
    public function getStock(){
        return $this->stock;
    }
    
    public static function mostrarProductos(){
        try{
            $conex=new Conexion();
            $conexion=$conex->Conexion();
            $sql="SELECT * FROM productos";
            $stmt=$conexion->prepare($sql);
            $stmt->execute();
            $row=$stmt->fetchAll();
            return $row;
        }catch(Exception $e){
            echo "ERROR".$e->getMessage();
        }finally{
            $conexion=null;
        }
    }

    public function eliminarProductos(){
        try{
            $conex=new Conexion();
            $conexion=$conex->Conexion();
            $sql="DELETE FROM productos WHERE idProducto=?";
            $stmt=$conexion->prepare($sql);
            $stmt->bindParam(1,$this->idProducto,PDO::PARAM_INT);
            $stmt->execute();
        }catch(Exception $e){
            echo "ERROR".$e->getMessage();
        }finally{
            $conexion=null;
        }
    }

    public function guardarProducto(){
        try{
            $conex=new Conexion();
            $conexion=$conex->Conexion();
            $sql="INSERT INTO productos(Nombre,Precio,Presentacion,Stock) VALUES (?,?,?,?)";
            $stmt=$conexion->prepare($sql);
            $stmt->bindParam(1,$this->nombre,PDO::PARAM_STR);
            $stmt->bindParam(2,$this->precio,PDO::PARAM_STR);
            $stmt->bindParam(3,$this->presentacion,PDO::PARAM_STR);
            $stmt->bindParam(4,$this->stock,PDO::PARAM_INT);
            $stmt->execute();
        }catch(Exception $e){
            echo "ERROR".$e->getMessage();
        }finally{
            $conexion=null;
        }
    }

    public function mostrarProductosUnico(){
        try{
            $conex=new Conexion();
            $conexion=$conex->Conexion();
            $sql="SELECT * FROM productos WHERE idProducto=?";
            $stmt=$conexion->prepare($sql);
            $stmt->bindParam(1,$this->idProducto,PDO::PARAM_INT);
            $stmt->execute();
            $row=$stmt->fetch();
            return $row;
        }catch(Exception $e){
            echo "ERROR".$e->getMessage();
        }finally{
            $conexion=null;
        }
    }

    public function editarProducto(){
        try{
            $conex=new Conexion();
            $conexion=$conex->Conexion();
            $sql="UPDATE productos SET Nombre=?,Precio=?,Presentacion=?,Stock=? WHERE idProducto=?";
            $stmt=$conexion->prepare($sql);
            $stmt->bindParam(1,$this->nombre,PDO::PARAM_STR);
            $stmt->bindParam(2,$this->precio,PDO::PARAM_STR);
            $stmt->bindParam(3,$this->presentacion,PDO::PARAM_STR);
            $stmt->bindParam(4,$this->stock,PDO::PARAM_INT);
            $stmt->bindParam(5,$this->idProducto,PDO::PARAM_INT);
            $stmt->execute();
        }catch(Exception $e){
            echo "ERROR".$e->getMessage();
        }finally{
            $conexion=null;
        }
    }
    
}

?>