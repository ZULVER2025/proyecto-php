<?php

require_once 'config/database.php';

class usuario{
   
   public $db;
   
   public function _construct(){
    $this->db = database::conectar();
   }

   public $id_usuario;
   public $nombre;
   public $apellido;
   public $email;
   public $password;
   public $rol;
   public $imagen;

   function getId_usuario(){
    return $this->id_usuario;
 }

 function getNombre(){
    return $this->nombre;

 }

 function getApellido(){
    return $this->apellido;

 }

 function getEmail(){
   return $this->getEmail;

 }

 function getPassword(){
    return $this->password;


 } 

 function getRol(){
    return $this->rol;

 }

 function getImagen(){
    return $this->imagen;

}

function setId_usuario(){
    return $this->getId_usuario = $id_usuario;

}


function setNombre(){
    $this->nombre = $nombre;


}

function setApellido(){}

}



 



 





}