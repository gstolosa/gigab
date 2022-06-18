<html>
<body>
  <?php
  if(isset($_POST["destino"]) && !empty($_post["$destino"]))
{
  $to = "gabrielgiusti@yahoo.com.ar";
  $subject = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  $mensaje = $_post["Mensaje"]
  Mail($to, $nombre, $apellido, $email, $mensaje);
  echo "correo enviado";
}else{ echo "problemas al enviar";
}
  ?>


</body>
</html>
