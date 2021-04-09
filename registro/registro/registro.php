<?php 

include_once('config/config.php');
include('../config/Database.php');


class registro{
    public $conexion;

    function_construct()
    {
        $db = new Database();
        $this->Conexion = $db->ConnectToDatabase();
    }

    function save($params){
        $nombre = $params['nombre'];
        $email = $params['email'];
        $celular = $params['celular'];
        $soliciteSuCotizacion = $params['mensaje'];

        $insert = "INSERT INTO registro VALUES (NULL,'$nombre' ,  '$email' , $celular , '$mensaje')";
        return mysqli_query($this->conexion, $insert);
    }

    function getAll(){
        $sql = "SELECT * FROM registro";
        return mysqli_query($this->conexion, $sql);
    }
}

?>