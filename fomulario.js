const formulario = document.getElementById('formulario');/*elecciona el elemento del formulario por su ID y lo almacena en la variable formulario*/
const inputs = document.querySelectorAll('#formulario input'); /*Selecciona todos los elementos <input> dentro del formulario y los almacena en la variable inputs*/


/*contiene expresiones regulares para validar diferentes tipos de datos*/
const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, números, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 dígitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{7,14}$/ // 7 a 14 números.
}

const campos = {
    /*todos los campos se establecen en false, lo que indica que no están validados. Estos valores cambiarán 
    a true una vez que los campos cumplan con las expresiones regulares de validación*/
    usuario: false,
    nombre: false,
    password: false,
    correo: false,
    telefono: false
}

/*Declara una función llamada validarFormulario que toma un evento e como parámetro*/
const validarFormulario = (e) => {
    switch (e.target.name) /*Usa un switch para determinar qué campo de formulario se está validando*/
     {
        case "usuario":
            /*Si el campo es de tipo "usuario", llama a la función validarCampo pasando la expresión regular correspondiente*/
            validarCampo(expresiones.usuario, e.target, 'usuario');
            break;
            /*Si el campo es de tipo "nombre", llama a la función validarCampo*/
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
            break;
            /*Si el campo es de tipo "password", primero llama a la función validarCampo para validar 
            la contraseña con la expresión regular correspondiente*/
        case "password":
            validarCampo(expresiones.password, e.target, 'password');
            validarPassword2();
            break;
            /*Si el campo es de tipo "password2" (confirmación de contraseña),
             solo llama a la función validarPassword2*/
        case "password2":
            validarPassword2();
            break;
            /*Si el campo es de tipo "correo", llama a la función validarCampo para validar la dirección de correo electrónico*/
        case "correo":
            validarCampo(expresiones.correo, e.target, 'correo');
            break;
            /*Si el campo es de tipo "telefono", llama a la función validarCampo para validar
             el número de teléfono con la expresión regular correspondiente.*/
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
            break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo_${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo_${campo} .formulario_input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo_${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo_${campo} .formulario_input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}



const validarPassword2 = () => {
    const inputPassword1 = document.getElementById('password');
    const inputPassword2 = document.getElementById('password2');

    if (inputPassword1.value !== inputPassword2.value) {
        document.getElementById(`grupo_password2`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo_password2`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo_password2 i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo_password2 i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo_password2 .formulario_input-error`).classList.add('formulario__input-error-activo');
        campos['password'] = false;
    } else {
        document.getElementById(`grupo_password2`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo_password2`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo_password2 i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo_password2 i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo_password2 .formulario_input-error`).classList.remove('formulario__input-error-activo');
        campos['password'] = true;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
    e.preventDefault();

    const terminos = document.getElementById('terminos');
    if (campos.usuario && campos.nombre && campos.password && campos.correo && campos.telefono && terminos.checked) {
        formulario.reset();
        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
        }, 5000);
        document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
            icono.classList.remove('formulario__grupo-correcto');
        });
    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }
});
