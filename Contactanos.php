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
    <title>Contáctanos</title>
</head>

<body>

    <header id="nav"></header>

    <main class="wrapper">
        <div class="container-cards">
            <!-- Tarjetas de contacto -->
            <!-- ... (Contenido de las tarjetas) ... -->
        </div>

        <div class="container-info-form">
            <form class="form" id="frmContact" method="POST" action="ContactoController.php">
                <h2>Formulario de Contacto</h2>
                <div class="container-info-personal">
                    <div class="container-input">
                        <label for="name">Nombre completo<span class="text-danger">*</span></label>
                        <input class="form-control" name="name" type="text" id="name" placeholder="Escribe tu nombre completo" required>
                    </div>
                </div>
                <div class="container-info-contacto">
                    <div class="container-input container-input-contacto">
                        <label for="email">Correo<span class="text-danger">*</span></label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="example@gmail.com" required>
                    </div>
                    <div class="container-input">
                        <label for="phone">Teléfono</label>
                        <input class="form-control" type="text" id="phone" name="phone" placeholder="1234-5678">
                    </div>
                </div>
                <div class="container-input">
                    <label for="message">Mensaje<span class="text-danger">*</span></label>
                    <textarea name="message" placeholder="Escribe tu mensaje" id="message" class="txtarea" required></textarea>
                </div>
                <div class="container-input submit-container">
                    <input type="submit" class="submit form-control" value="Enviar">
                </div>
            </form>

            <div class="container-map">
                <!-- Mapa -->
            </div>
        </div>
    </main>

    <div id="footer"></div>

    <script src="js/footer.js"></script>
    <script src="js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    document.getElementById('frmContact').addEventListener('submit', function (e) {
        e.preventDefault(); // Evita el comportamiento predeterminado del formulario
        
        // Obtener los datos del formulario
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const message = document.getElementById('message').value;

        // Validar que todos los campos obligatorios están completos
        if (!name || !email || !message) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Por favor completa todos los campos obligatorios',
            });
            return;
        }

        // Hacer una llamada AJAX para enviar los datos al servidor
        const formData = new FormData();
        formData.append('name', name);
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('message', message);

        fetch('ContactoController.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: '¡Enviado!',
                    text: data.message,
                });

                // Limpiar el formulario
                document.getElementById('frmContact').reset();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: data.message,
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Hubo un problema al enviar tu mensaje.',
            });
        });
    });
</script>


</body>

</html>
