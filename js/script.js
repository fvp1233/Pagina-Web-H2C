const enviarEmail = async (nombre_form, email_form, telefono_form, message) => {
  // Inicializa EmailJS con el User ID proporcionado
  emailjs.init("I4iZB6xgm0vnvYrms");

  // Definir los parámetros del template
  const templateParams = {
    nombre: nombre_form,
    telefono: telefono_form,
    correo: email_form,
    mensaje: message,
  };

  try {
    // Enviar el correo utilizando EmailJS
    const response = await emailjs.send('service_1bc1muh', 'template_6d1l0mb', templateParams);
    console.log('Correo enviado exitosamente:', response.status, response.text);
    return response.status === 200;
  } catch (error) {
    console.error('Error al enviar el correo:', error);
    throw error;
  }
};

const validate = async (e) => {
  e.preventDefault(); // Evita el comportamiento predeterminado del formulario

  // Obtener los datos del formulario
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const message = document.getElementById('message').value;

  // Validar que todos los campos obligatorios están completos
  if (!name) {
    return Swal.fire({
      icon: 'error',
      title: 'Campos vacíos',
      text: 'Ingresa tu nombre',
    });
  }
  if (!email) {
    return Swal.fire({
      icon: 'error',
      title: 'Campos vacíos',
      text: 'Ingresa tu correo',
    });
  }
  if (!phone) {
    return Swal.fire({
      icon: 'error',
      title: 'Campos vacíos',
      text: 'Ingresa tu teléfono',
    });
  }
  if (!message) {
    return Swal.fire({
      icon: 'error',
      title: 'Campos vacíos',
      text: 'Ingresa tu mensaje',
    });
  }

  try {
    // Intentar enviar el correo
    const respuesta = await enviarEmail(name, email, phone, message);
    if (respuesta) {
      Swal.fire({
        icon: 'success',
        title: '¡Enviado!',
        text: 'Tu mensaje ha sido enviado con éxito',
      }).then(() =>{
        // Recargar la página después de que el usuario cierra el mensaje de éxito
        window.location.reload();
      })
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Hubo un problema al enviar el mensaje. Inténtalo de nuevo.',
      });
    }
  } catch (error) {
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Ocurrió un error inesperado. Inténtalo más tarde.',
    });
  }
};

// Agregar el listener para validar el formulario al enviarlo
let form = document.getElementById('frmContact');
form.addEventListener('submit', validate);
