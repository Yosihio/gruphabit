<?php
 if(isset($_POST['email'])) {
     $email_to = "sadow_04@hotmail.com";
     $email_subject = "dannylo9891@gmail.com";
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
     $prioritycase = $_POST['prioritycase'];
     $asunto = $_POST['asunto']; 
     $message = $_POST['message']; 
     $error_message = "";
 
 $headers = 'From: '.$email."\r\n".
 'Reply-To: '.$email."\r\n" .
 'X-Mailer: PHP/' . phpversion();
  mail($email_to, $email_subject, $email_message, $headers);  
 ?>
 <meta  />
 <body>
 <h2>Me comunicare con usted lo antes posible. ahora sera redireccionado a la pagina principal. Muchas Gracias.</h2>
 <?php 
 echo $email_to;
 echo $email_subject;
 echo $email_message;
 echo $headers;
 ?>
 </body>
 <?php
 }
 ?>