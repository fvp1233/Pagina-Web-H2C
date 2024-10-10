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
            <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1938.148842845115!2d-89.22535586500415!3d13.700411845236907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63312117a8fceb%3A0x4bb696aef6a52ad0!2sCoagro%20S.A.%20de%20C.V.!5e0!3m2!1ses!2ssv!4v1725469012574!5m2!1ses!2ssv"
                    style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>

    <div id="footer"></div>

    <script src="js/footer.js"></script>
    <script src="js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

    <script>
  /*  document.getElementById('frmContact').addEventListener('submit', function (e) {
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
        formData.append('name', 'Daniel');
        formData.append('email', 'daniel_granados@ricaldone.edu.sv');
        formData.append('phone', '3333333');
        formData.append('message', 'mensajeee');

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
    });*/
</script>

<script>

const enviarEmail = async (nombre_form, email_form, telefono_form, message) => {
    console.warn(nombre_form, email_form, telefono_form, message);
    
    emailjs.init("I4iZB6xgm0vnvYrms"); // Reemplaza con tu User ID de EmailJS
 
    const templateParams = {
        nombre: nombre_form,
        telefono: telefono_form,
        correo: email_form,
        mensage: message,   
    };
 
    try {
        const response = await emailjs.send('service_1bc1muh', 'template_6d1l0mb', templateParams);
        console.log('Correo enviado exitosamente:', response.status, response.text);
        if (response.status !== 200) {
            throw new Error('Error al enviar el correo');
        }
        return true;
    } catch (error) {
        console.error('Error al enviar el correo:', error);
        throw error;
    }
}


document.getElementById('frmContact').addEventListener('submit', async function (e) {
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

        const respuesta = await enviarEmail(name, email, phone, message);

        try {
            if (repuesta){
            Swal.fire({
                    icon: 'success',
                    title: '¡Enviado!',
                    text: data.message,
                });
        }else{
            Swal.fire({
                    icon: 'error',
                    title: 'dsadsadsa!',
                    text: data.message,
                });
        }
        } catch (error) {
            
        }
        

        /*
        // Hacer una llamada AJAX para enviar los datos al servidor
        const formData = new FormData();
        formData.append('name', 'Daniel');
        formData.append('email', 'daniel_granados@ricaldone.edu.sv');
        formData.append('phone', '3333333');
        formData.append('message', 'mensajeee');*/

        
    });
 
 
 
    
</script>


</body>

</html>
