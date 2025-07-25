// Selecciona el formulario por su ID
const formulario = document.getElementById('formulario');
// Selecciona todos los inputs dentro del formulario
const inputs = document.querySelectorAll('#formulario input');

// Expresiones regulares para validar los campos del formulario
const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, números, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 dígitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // Formato de correo electrónico
    telefono: /^\d{7,14}$/ // 7 a 14 números.
}

// Estado de validación de cada campo
const campos = {
    usuario: false,
    nombre: false,
    password: false,
    correo: false,
    telefono: false
}

// Función para validar el formulario en base al evento recibido
const validarFormulario = (e) => {
    switch (e.target.name) {
        case "usuario":
            validarCampo(expresiones.usuario, e.target, 'usuario');
            break;
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
            break;
        case "password":
            validarCampo(expresiones.password, e.target, 'password');
            validarPassword2();
            break;
        case "password2":
            validarPassword2();
            break;
        case "correo":
            validarCampo(expresiones.correo, e.target, 'correo');
            break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
            break;
    }
}

// Función para validar cada campo individualmente
const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo_${campo} .formulario_input-error`).classList.remove('formulario_input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo_${campo} .formulario_input-error`).classList.add('formulario_input-error-activo');
        campos[campo] = false;
    }
}

// Función para validar que las contraseñas coincidan
const validarPassword2 = () => {
    const inputPassword1 = document.getElementById('password');
    const inputPassword2 = document.getElementById('password2');

    if (inputPassword1.value !== inputPassword2.value) {
        document.getElementById(`grupo_password2`).classList.add('formulario_grupo-incorrecto');
        document.getElementById(`grupo_password2`).classList.remove('formulario_grupo-correcto');
        document.querySelector(`#grupo_password2 i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo_password2 i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo_password2 .formulario_input-error`).classList.add('formulario_input-error-activo');
        campos['password'] = false;
    } else {
        document.getElementById(`grupo_password2`).classList.remove('formulario_grupo-incorrecto');
        document.getElementById(`grupo_password2`).classList.add('formulario_grupo-correcto');
        document.querySelector(`#grupo_password2 i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo_password2 i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo_password2 .formulario_input-error`).classList.remove('formulario_input-error-activo');
        campos['password'] = true;
    }
}

// Añade eventos de teclado y desenfoque a cada input
inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

// Evento para el envío del formulario
formulario.addEventListener('submit', (e) => {
    e.preventDefault();

    const terminos = document.getElementById('terminos');
    if (campos.usuario && campos.nombre && campos.password && campos.correo && campos.telefono && terminos.checked) {
        // Resetea el formulario después de enviarlo exitosamente
        formulario.reset();

        // Muestra mensaje de éxito
        document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');
        setTimeout(() => {
            document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');
        }, 5000);

        // Remueve las clases de validación de los iconos
        document.querySelectorAll('.formulario_grupo-correcto').forEach((icono) => {
            icono.classList.remove('formulario_grupo-correcto');
        });
    } else {
        // Muestra mensaje de error si el formulario no es válido
        document.getElementById('formulario_mensaje').classList.add('formulario_mensaje-activo');
    }
});
