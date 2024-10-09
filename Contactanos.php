<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/H2C_HR (1) (1).png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styleContactos.css">
    <link rel="stylesheet" href="css/menuFooter.css">
    <title>Contactanos</title>
</head>

<body>


    <header id="nav"></header>




    <main class="wrapper">
        <div class="container-cards">
            <div class="card">
                <div class="container-img-card">
                    <img src="img/ubicacion.png" alt="">
                </div>
                <h2>Nuestra Oficina Principal</h2>
                <p>Nos encontramos en una de las mejores zonas del país, céntrico y accesible, puedes encontrarnos a 2
                    minutos del monumento de el salvador del mundo.</p>
            </div>
            <div class="card">
                <div class="container-img-card">
                    <img src="img/Telefono.png" alt="">
                </div>
                <h2>Número de Telefono</h2>
                <p>Puedes contactarnos a través del numero +503 2510-8403.</p>
            </div>
            <div class="card">
                <div class="container-img-card">
                    <img src="img/gmail.png" alt="">
                </div>
                <h2>Representante</h2>
                <p>Jennifer Alfaro es la representante de nuestro equipo de programación y encargada del proyecto,
                    puedes comunicarte con ella mediante el correo 20210182@ricaldone.edu.sv.</p>
            </div>
            <div class="card">
                <div class="container-img-card">
                    <img src="img/gmail.png" alt="">
                </div>
                <h2>Correo Electronico</h2>
                <p>A través del correo ventas@h2cgroup.com puedes contactar a la empresa con la cual nos hemos asociado
                    para nuestro proyecto.</p>
            </div>
        </div>
        <div class="container-info-form">
            <form class="form" id="frmContact" method="POST" action="">
                <h2>Formulario de Contacto</h2>
                <div class="container-info-personal">
                    <div class="container-input">
                        <label for="name">Nombre completo<span class="text-danger">*</span></label>
                        <input class="form-control" name="name" type="text" id="name" placeholder="Escribe tu nombre completo">
                    </div>
                </div>
                <div class="container-info-contacto">
                    <div class="container-input container-input-contacto">
                        <label for="email">Correo<span class="text-danger">*</span></label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="example@gmail.com">
                    </div>
                    <div class="container-input">
                        <label for="phone">Telefono</label>
                        <input class="form-control" type="text" id="phone" name="phone" placeholder="1234-5678">
                    </div>
                </div>
                <div class="container-input">
                    <label for="message">Mensaje<span class="text-danger">*</span></label>
                    <textarea name="message" placeholder="Escribe tu mensaje" id="message" name="message" class="txtarea"></textarea>
                </div>
                <div class="container-input submit-container">
                    <input type="submit" class="submit form-control">
                </div>
            </form>
            <div class="container-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1938.148842845115!2d-89.22535586500415!3d13.700411845236907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63312117a8fceb%3A0x4bb696aef6a52ad0!2sCoagro%20S.A.%20de%20C.V.!5e0!3m2!1ses!2ssv!4v1725469012574!5m2!1ses!2ssv"
                    style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>


    <div id="footer"></div>
    
    <?php

// send_mail.php
use vendor\PHPMailer\PHPMailer\test;
use vendor\PHPMailer\PHPMailer\Exception;
use vendor\composer;


require 'vendor/autoload.php';
$mail = new PHPMailer(true); $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true)
);$mail->SMTPDebug = 2; $mail->IsSMTP();$mail->SMTPAuth = true;$mail->SMTPSecure = 'tls';$mail->Host = 'smtp.gmail.com';$mail->Port = 587; $mail->CharSet = 'UTF-8';$mail->Username ='h2cnoreply@gmail.com'; $mail->Password = 'de r w j v b b v e r ft p e n b​'; $mail->setFrom('h2cnoreply@gmail.com', 'Mi nombre');$mail->AddAddress('jose.merino9108@gmail.com'); $mail->SMTPKeepAlive = true;  $mail->Mailer = "smtp"; 

    $mail->isHTML(true); $mail->Subject = 'PRUEBA 6';$mail->Body    = 'This is the HTML message body <b>in bold!</b>';$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
  echo 'Error al enviar email';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Mail enviado correctamente';
}
?>

</body>




</html>