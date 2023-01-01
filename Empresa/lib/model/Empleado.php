<?php

class Empleado {
    
    private $codEmpleado;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $departamento;

    
    /**
     * @param type $codEmpleado
     * @param type $nombre
     * @param type $apellido1
     * @param type $apellido2
     * @param type $departamento
     */
    public function __construct($codEmpleado, $nombre, $apellido1, $apellido2, $departamento) {
        $this->codEmpleado = $codEmpleado;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->departamento = $departamento;
    }
    
    public function __destruct() {
        ;
    }
    
    public function getCodEmpleado() {
        return $this->codEmpleado;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido1() {
        return $this->apellido1;
    }

    public function getApellido2() {
        return $this->apellido2;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setCodEmpleado($codEmpleado): void {
        $this->codEmpleado = $codEmpleado;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido1($apellido1): void {
        $this->apellido1 = $apellido1;
    }

    public function setApellido2($apellido2): void {
        $this->apellido2 = $apellido2;
    }

    public function setDepartamento($departamento): void {
        $this->departamento = $departamento;
    }
    
}
