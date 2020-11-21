<?php

Final class Administrador{
private $id; 
private $email_administrador;
private $passwd;  

public function __construct($email_administrador,$passwd){
    $this->email_administrador=$email_administrador; 
    $this->$passwd=$passwd; 
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
 * Get the value of email__administrador
 */ 
public function getEmail_administrador()
{
return $this->email_administrador;
}

/**
 * Set the value of email__administrador
 *
 * @return  self
 */ 
public function setEmail_administrador($email_administrador)
{
$this->email_administrador = $email_administrador;

return $this;
}

/**
 * Get the value of passwd
 */ 
public function getPasswd()
{
return $this->passwd;
}

/**
 * Set the value of passwd
 *
 * @return  self
 */ 
public function setPasswd($passwd)
{
$this->passwd = $passwd;

return $this;
}
}
?>