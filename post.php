<?php

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

if($nombre === '' || $apellido==='' || $correo==='' || $direccion==='' || $telefono===''){
    echo json_encode('error');
}else{
    echo json_encode('Correcto: <br>Nombre:'.$nombre.'<br>Apellido:'.$apellido. '<br>Correo:'.$correo. '<br>Direccion:'.$direccion. '<br>Telefono:'.$telefono);
}




