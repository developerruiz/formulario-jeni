<?php 

include ("conexion.php");
$id_usuario = $_GET["id"];
$eliminarUsuario="DELETE FROM tb_usuarios WHERE id_usuario = '$id_usuario'";

$resultado = mysqli_query($conexion, $eliminarUsuario);

if ($eliminarUsuario) {
	header("Location: usuarios.php");
}else{
	echo"<script>alert('error no se puede usuario');</script>";
}
