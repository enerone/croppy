<?php namespace Larabook\Registration;

class TipocultivoCommand {


    private $titulo;
    private $descripcion;
    private $imagen;

    function __construct($titulo, $descripcion, $imagen) {


        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
    }