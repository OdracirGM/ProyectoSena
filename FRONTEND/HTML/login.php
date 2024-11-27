<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>JM IMPORTACIONES</title>
    <link rel="stylesheet" type="text/css" href="library/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="library/css/bootstrap.css"/>
</head>
<body>
    
    <div class="container p-5 my-5 bg-dark text-white">
        <form method="POST" class="">
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="uname" placeholder="Ingresa Usuario" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>

                <!-- <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div> -->

            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="pwd" placeholder="Ingresa Contraseña" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                <!--
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div> -->
            </div>
            <div class="form-check mb-3">
                <!--
                <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                <label class="form-check-label" for="myCheck">Acepto los terminos y condiciones</label>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Check this checkbox to continue.</div> -->
            </div>
            <button class= "btn btn-outline-light btn-dark" type= "submit">Iniciar Sesión</button>
            <?php
                if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
                    require_once "./php/main.php";
                    require_once "./php/iniciar_sesion.php";
                }
?>
      </form>
    </div>

    <script src="library/js/bootstrap.min.js"></script>
</body>



</html>