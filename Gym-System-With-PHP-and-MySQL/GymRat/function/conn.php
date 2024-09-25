<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "gymrats";
$conn = new mysqli($server,$username,$password,$database);
if($conn->connect_error){
        die("Conexion fallida: ".$conn->connect_error);
    }