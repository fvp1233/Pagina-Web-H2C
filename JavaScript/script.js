function sweet(e){
    e.preventDefault()


    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const message = document.getElementById("message").value.trim();


    if(!name){
        Swal.fire({
            title: "Error",
            text: "Ingresa tu nombre",
            icon: "warning"
          });
          return;
    }
    if(!email){
        Swal.fire({
            title: "Error",
            text: "Ingresa tu email",
            icon: "warning"
          });
          return;
    }
    if(!phone){
        Swal.fire({
            title: "Error",
            text: "Ingresa tu numero de telefono",
            icon: "warning"
          });
          return;
    }
    if(!message){
        Swal.fire({
            title: "Error",
            text: "Ingresa tu mensaje",
            icon: "warning"
          });
          return;
    }

    Swal.fire({
        title: "Exito",
        text: "Su mensaje ha sido enviado",
        icon: "success"
      }).then(() => {
        e.target.submit();
      })
}

const form = document.getElementById("frmContact");

form.addEventListener("submit", sweet);
