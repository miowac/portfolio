console.log ("hola");
let nombre = document.getElementById("nombre");
let correo = document.getElementById("correo");
let telefono = document.getElementById("telefono");
let mensaje = document.getElementById("mensaje");
let btnEnviar = document.getElementById("btnEnviar");

function quitarClaseError(){
let x = document.querySelectorAll(".form-control, .form-select");
let i;
for (i = 0; i < x.length; i++) { x[i].classList.remove('is-invalid');}
}


function enviar() {
    quitarClaseError();

    if (nombre.value === "") {
        alert("Por favor, escriba su nombre");
        nombre.classList.add('is-invalid');
        nombre.focus();
        return;
    }

    if (correo.value === "") {
        alert("Por favor, escriba su correo");
        correo.classList.add('is-invalid');
        correo.focus();
        return;
    }

    const correo_valido = correo => {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo);  
    }

    if (!correo_valido(correo.value)){
        alert("Por favor, escriba un correo electronico valido");
        correo.classList.add('is-invalid');
        correo.focus();
        return;
    }
    if (telefono.value === "") {
        alert("Por favor, escriba su telefono");
        telefono.classList.add('is-invalid');
        telefono.focus();
        return;
    }
    if (mensaje.value === "") {
        alert("Por favor, escriba un mensaje");
        mensaje.classList.add('is-invalid');
        mensaje.focus();
        return;
    }

    alert(nombre.value+", Gracias por contactarse, nos comunicaremos a la brevedad.");
    reset_campos();
} 
function reset_campos() {
    nombre.value = "";
    correo.value = "";
    telefono.value = "";
    mensaje.value = "";
}
btnEnviar.addEventListener('click', enviar);


