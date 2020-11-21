<?php
Class Inscripcion{
 //Atributos
private $id;
private $pago; 
private $dorsal; 
private $edicion; 
private $participante; 
private $categoria; 
public function __construct($pago,$edicion){
    $this->pago=$pago;
    $this->edicion=$edicion;
}

/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}

/**
 * Get the value of pago
 */ 
public function getPago()
{
return $this->pago;
}

/**
 * Set the value of pago
 *
 * @return  self
 */ 
public function setPago($pago)
{
$this->pago = $pago;

return $this;
}

/**
 * Get the value of dorsal
 */ 
public function getDorsal()
{
return $this->dorsal;
}

/**
 * Set the value of dorsal
 *
 * @return  self
 */ 
public function setDorsal($dorsal)
{
$this->dorsal = $dorsal;

return $this;
}

/**
 * Get the value of edicion
 */ 
public function getEdicion()
{
return $this->edicion;
}

/**
 * Set the value of edicion
 *
 * @return  self
 */ 
public function setEdicion($edicion)
{
$this->edicion = $edicion;

return $this;
}

/**
 * Get the value of participante
 */ 
public function getParticipante()
{
return $this->participante;
}

/**
 * Set the value of participante
 *
 * @return  self
 */ 
public function setParticipante($participante)
{
$this->participante = $participante;

return $this;
}

/**
 * Get the value of categoria
 */ 
public function getCategoria()
{
return $this->categoria;
}

/**
 * Set the value of categoria
 *
 * @return  self
 */ 
public function setCategoria($categoria)
{
$this->categoria = $categoria;

return $this;
}
}