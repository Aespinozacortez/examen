<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="loginForm">
    <input type="hidden" name="r" value="ctrlpass">

        <div class="col-md-6">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control" required aria-labelledby="passwordLabel">
        </div>
        <p id="mensajeError"></p>
        <div class="col-md-6">
            <button type="button" onclick="validatePassword()">Continuar</button>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function inscripcio(pass) {
    var pass = $("#password").val();
                $.ajax({
                    url: "index.php?r=accessinscripcio",
                    method: "GET",
                    data: { pass: pass },
                    success: function (data) {
                        window.location = "index.php?r=seeinscripcio";        },
                    error: function (error) {
                        $("#mensajeError").html("Contrasenya incorrecta.");
                        // Muestra el div
                        $("#mensajeError").show();
                    }
                });
            }
    </script>
</body>
</html>


