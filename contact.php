<?php
 if(isset($_POST['email'])) {
     $email_to = "newpage@grupo-habitat.com";
     $email_subject = "Empresa Interesada";
     function died($error) {

         echo "Disculpas, pero ha ocurrido un(os) error(es) con lo datos del formulario. ";
         echo "El o los errores son los siguientes.<br /><br />";
         echo $error."<br /><br />";
         echo "Por favor corrija los errores.<br /><br />";
         die();
     }

     if(!isset($_POST['name']) ||
         !isset($_POST['email']) ||
         !isset($_POST['website']) ||
         !isset($_POST['telephone']) ||
         !isset($_POST['message'])) {
         died('Disculpas, pero ha ocurrido un(os) error(es) al enviar el formulario.');       
     }
     $name = $_POST['name'];
     $email = $_POST['email'];
     $website = $_POST['website'];
     $telephone = $_POST['telephone'];
     $message = $_POST['message']; 
     $error_message = "";
 
 $headers = 'From: '.$email."\r\n".
 'Reply-To: '.$email."\r\n" .
 'X-Mailer: PHP/' . phpversion();
  mail($email_to, $email_subject, $message, $headers);  
 ?>
 <meta/>
 <body>
 <h2>Me comunicare con usted lo antes posible. ahora sera redireccionado a la pagina principal. Muchas Gracias.</h2>

 </body>
 <?php
 }
 ?>