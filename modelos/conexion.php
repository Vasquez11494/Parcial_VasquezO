<?php

abstract class Conexion
{

    protected static $conexion = null;

    protected static function conectar(): PDO
    {
        try {
            self::$conexion = new PDO("informix:host=192.168.73.71; service=1526; database=curso_656751; server=MV015_tcp; protocol=onsoctcp", "656751", "656751");
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "No hay conexion ala Base de Datoss <br>";
            echo $e->getMessage();
            self::$conexion = null;
            exit;
        }
        return self::$conexion;
    }
    public static function verificarConexion()
    {
        if (self::conectar()) {
            echo "¡Conexión establecida!";
        } else {
            echo "No se pudo establecer conexión.";
        }
    }
    public function ejecutar($sql)
    {
        $conexion = self::conectar();
        $sentencia = $conexion->prepare($sql);
        $resultado = $sentencia->execute();
        self::$conexion = null;

        return [
            "resultado" => $resultado,
        ];

    }

}
Conexion::verificarConexion();