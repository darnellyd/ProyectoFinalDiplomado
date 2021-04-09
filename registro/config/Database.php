<?php 

class Database{
    public $host='localhost'; // Servidor
    public $user= 'root'; // usuario de phpMyadmin
    public $pass= ''; //Contraseña de phpMyadmin
    public $db= 'tienda1';//base de datos
    public $conexion;

    function connectToDatabase(){
        $this->conexion = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if (mysqli_connect_error()){
            echo 'Error de conexión'. mysqli_connect_error();
        }

        return $this->conexion;
    }

}

?>