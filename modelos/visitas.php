<?php

require "conexion.php";

class  Visitas extends Conexion {
    public $vis_codigo;
    public $vis_nombre;
    public $vis_apellido;
    public $vis_procedencia;
    public $vis_fechaingreso;
    public $vis_fechasalida; 
    public $vis_motivo;

    public function __construct($args = [])
    {
        $this->vis_codigo = $args['vis_codigo'] ?? null ;
        $this->vis_nombre = $args['vis_nombre'] ?? '' ;
        $this->vis_apellido = $args['vis_apellido'] ?? '' ;
        $this->vis_procedencia = $args ['vis_procedencia'] ?? '' ;
        $this->vis_fechaingreso = $args ['vis_fechaingreso'] ?? null ;
        $this->vis_fechasalida = $args ['vis_fechasalida'] ?? null ;
        $this->vis_motivo = $args['vis_motivo'] ?? '' ;
    }

    public function guardar(){
        $sql = "INSERT into visita (vis_nombre, vis_apellido, vis_procedencia, vis_fechaingreso, vis_fechasalida) values ('$this->vis_nombre','$this->vis_apellido','$this->vis_procedencia','$this->vis_fechaingreso','$this->vis_fechasalida')";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }
}