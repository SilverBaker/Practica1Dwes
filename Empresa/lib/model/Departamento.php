<?php

class Departamento{
    private $codDept;
    private $nombre;
    private $jefe;
    private $presupuesto;
    private $ciudad;
    
    public function __construct($codDept, $nombre, $jefe, $presupuesto, $ciudad) {
        $this->codDept = $codDept;
        $this->nombre = $nombre;
        $this->jefe = $jefe;
        $this->presupuesto = $presupuesto;
        $this->ciudad = $ciudad;
    }
    
    public function getCodDept() {
        return $this->codDept;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getJefe() {
        return $this->jefe;
    }

    public function getPresupuesto() {
        return $this->presupuesto;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function setCodDept($codDept): void {
        $this->codDept = $codDept;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setJefe($jefe): void {
        $this->jefe = $jefe;
    }

    public function setPresupuesto($presupuesto): void {
        $this->presupuesto = $presupuesto;
    }

    public function setCiudad($ciudad): void {
        $this->ciudad = $ciudad;
    }



    
}