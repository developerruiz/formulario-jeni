  <?php 
  include ("conexion.php");
  
  $nombre = $_POST["nombre"];
  $email=$_POST["email"];
  $oficina=$_POST["oficina"];
  $contraseña=$_POST["contraseña"];
  
  $insertar = "INSERT INTO tb_usuarios(nombre, email, oficina, contraseña) VALUES
  ('$nombre','$email','$oficina','$contraseña')";

  $resultado = mysqli_query($conexion, $insertar);

  if ($resultado) {
    echo "<script>alert('registro de usuario exitoso'); window.location='/soypacosantos/usuarios.php'</script>";
  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }
  