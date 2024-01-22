<?php include 'conexion.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anaconda</title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Regístrate</h2>
                        <form action="registropro.php" method="post" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="NombreCompleto"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" placeholder="Nombre y Apellidos" id="NombreCompleto" name="NombreCompleto" required />
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" placeholder="Nombre de Usuario" id="username" name="username" required />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" placeholder="Email" id="Email" name="Email" required />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" placeholder="Contraseña" id="password" name="password" required />
                                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <label for="repetircontra"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" placeholder="Repetir la Contraseña" id="repetircontra" name="repetircontra" required />
                                <span toggle="#repetircontra" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div>


                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Acepto todas las declaraciones en <a href="#" class="term-service">Términos de servicio</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" class="form-submit" value="Registrate" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/imagen1.png" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var passwordToggle = document.querySelectorAll(".toggle-password");

            passwordToggle.forEach(function(toggle) {
                toggle.addEventListener("click", function() {
                    var passwordField = document.querySelector(toggle.getAttribute("toggle"));

                    // Cambia entre "text" y "password" para alternar la visibilidad de la contraseña
                    passwordField.type = passwordField.type === "password" ? "text" : "password";

                    // Cambia el icono del ojo
                    toggle.classList.toggle("zmdi-eye");
                    toggle.classList.toggle("zmdi-eye-off");
                });
            });
        });




        document.addEventListener("DOMContentLoaded", function() {
            var form = document.getElementById("register-form");

            form.addEventListener("submit", function(event) {
                var password = document.getElementById("password").value;
                var repetircontra = document.getElementById("repetircontra").value;

                if (password !== repetircontra) {
                    alert("Las contraseñas no coinciden");
                    event.preventDefault(); // Evita que el formulario se envíe si las contraseñas no coinciden
                }
            });
        });


        function showAlert() {
            // Crear un elemento de alerta de Bootstrap
            var alertElement = document.createElement("div");
            alertElement.classList.add("alert", "alert-success", "mt-4", "text-center");
            alertElement.innerHTML = "<strong>Registro exitoso. Ya puedes iniciar sesión.</strong>";

            // Agregar el elemento de alerta al cuerpo del documento
            document.body.appendChild(alertElement);

            // Redirigir después de un breve retraso (puedes ajustar el tiempo según tu preferencia)
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 1000); // Redirige después de 3 segundos (3000 milisegundos)
        }
    </script>



</body>

</html>