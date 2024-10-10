<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validar campos (agrega más validaciones según sea necesario)
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Por favor completa todos los campos obligatorios.']);
        exit;
    }

    // Aquí puedes enviar el correo o guardar los datos en la base de datos
    $to = "oscar.joyar@gmail.com"; // Cambia esto por tu correo
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $name\nEmail: $email\nTeléfono: $phone\nMensaje: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Tu mensaje ha sido enviado con éxito.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Hubo un problema al enviar tu mensaje.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido.']);
}
?>
