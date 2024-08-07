<?php

namespace App;

class Receta {
    public $id;
    public $titulo;
    public $descripcion;
    public $ingredientes;
    public $instrucciones;
    public $imagen;
    public $usuario_id;
    public $categoria_id;
    public $fecha_creacion;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->ingredientes = $args['ingredientes'] ?? '';
        $this->instrucciones = $args['instrucciones'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->usuario_id = $args['usuario_id'] ?? '';
        $this->categoria_id = $args['categoria_id'] ?? '';
        $this->fecha_creacion = $args['fecha_creacion'] ?? '';
    }
}