<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> <!-- Configuración de codificación de caracteres -->
    <title>Validación de Formulario con Javascript</title> <!-- Título de la página -->
    <link rel="stylesheet" href="CSS/validacion.css"> <!-- Enlace al archivo CSS -->
</head>
<body>
    <main>
        <h1>Formulario de Validación</h1> <!-- Título del formulario -->
        <form action="" class="formulario" id="formulario"> <!-- Inicio del formulario -->
            <!-- Grupo: Usuario -->
            <div class="formulario_grupo" id="grupo_usuario">
                <label for="usuario" class="formulario__label">Usuario</label> <!-- Etiqueta del campo usuario -->
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="katy123"> <!-- Campo de entrada para el usuario -->
                    <i class="formulario__validacion-estado fas fa-times-circle"></i> <!-- Icono de estado de validación -->
                </div>
                <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener números, letras y guion bajo.</p> <!-- Mensaje de error -->
            </div>

            <!-- Grupo: Nombre -->
            <div class="formulario_grupo" id="grupo_nombre">
                <label for="nombre" class="formulario__label">Nombre</label> <!-- Etiqueta del campo nombre -->
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Joes Do"> <!-- Campo de entrada para el nombre -->
                    <i class="formulario__validacion-estado fas fa-times-circle"></i> <!-- Icono de estado de validación -->
                </div>
                <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener números, letras y guion bajo.</p> <!-- Mensaje de error -->
            </div>

            <!-- Grupo: Contraseña -->
            <div class="formulario_grupo" id="grupo_password">
                <label for="password" class="formulario__label">Contraseña</label> <!-- Etiqueta del campo contraseña -->
                <div class="formulario__grupo-input">
                    <input type="password" class="formulario__input" name="password" id="password"> <!-- Campo de entrada para la contraseña -->
                    <i class="formulario__validacion-estado fas fa-times-circle"></i> <!-- Icono de estado de validación -->
                </div>
                <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p> <!-- Mensaje de error -->
            </div>

            <!-- Grupo: Contraseña 2 -->
            <div class="formulario_grupo" id="grupo_password2">
                <label for="password2" class="formulario__label">Repetir Contraseña</label> <!-- Etiqueta del campo repetir contraseña -->
                <div class="formulario__grupo-input">
                    <input type="password" class="formulario__input" name="password2" id="password2"> <!-- Campo de entrada para repetir la contraseña -->
                    <i class="formulario__validacion-estado fas fa-times-circle"></i> <!-- Icono de estado de validación -->
                </div>
                <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p> <!-- Mensaje de error -->
            </div>

            <!-- Grupo: Correo Electrónico -->
            <div class="formulario_grupo" id="grupo_correo"> <!-- Clase para el formulario-->
                <label for="correo" class="formulario__label">Correo Electrónico</label> <!-- Etiqueta del campo correo -->
                <div class="formulario__grupo-input">
                    <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@gmail.com"> <!-- Campo de entrada para el correo -->
                    <i class="formulario__validacion-estado fas fa-times-circle"></i> <!-- Icono de estado de validación -->
                </div>
                <p class="formulario__input-error">El correo solo puede contener letras, números, puntos, guiones y guion bajo.</p> <!-- Mensaje de error -->
            </div>

            <!-- Grupo: Teléfono -->
            <div class="formulario_grupo" id="grupo_telefono">
                <label for="telefono" class="formulario__label">Teléfono</label> <!-- Etiqueta del campo teléfono -->
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="55-----"> <!-- Campo de entrada para el teléfono -->
                    <i class="formulario__validacion-estado fas fa-times-circle"></i> <!-- Icono de estado de validación -->
                </div>
                <p class="formulario__input-error">El teléfono solo puede contener números y el máximo son 14 dígitos.</p> <!-- Mensaje de error -->
            </div>

            <!-- Grupo: Términos y Condiciones -->
            <div class="formulario_grupo" id="grupo_terminos">
                <label class="formulario__label">
                    <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos"> <!-- Checkbox de términos y condiciones -->
                    Acepto los Términos y Condiciones
                </label>
            </div>

            <div class="formulario_mensaje" id="formulario_mensaje"> <!-- Mensaje de error general -->
                <p><i class="fas fa-exclamation-triangle"></i><b>Error:</b> Llena el formulario de manera correcta. </p>
            </div>

            <div class="formulario_grupo formulario_grupo-btn-enviar"> <!-- Botón de enviar -->
                <button type="submit" class="formulario__btn">Enviar</button>
                <p class="formulario_mensaje-exito" id="formulario_mensaje-exito">Formulario enviado exitosamente!</p> <!-- Mensaje de éxito -->
            </div>
        </form>
    </main>

    <script src="JS/formulario.js"></script> <!-- Enlace al archivo JavaScript -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script> <!-- Enlace a FontAwesome -->
</body>
</html>