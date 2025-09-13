<?php

class database{
    public static function connectar(){
        $conexion = new mysqli("localhost","root","","tienda3");
        $conexion->query("SET NAMES 'utf-8'");
    }
}