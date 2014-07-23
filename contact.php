<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['telephone'];
$website = $_POST['website'];
$message = $_POST['message'];
$formcontent=" De: $name \n Telefono: $phone \n Website: $website \n Mensaje: $message";
$recipient = "newpage@grupo-habitat.com";
$subject = "Nuevo contacto de Sitio web";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Gracias" . " " . "<meta http-equiv='refresh' content='3;index.php' />
<link rel='stylesheet' type='text/css' href='style.css' />
<body>
<h2>Me comunicare con usted lo antes posible. ahora sera redireccionado a la pagina principal. Muchas Gracias.</h2>
</body>";
?>