<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href={{asset('css/estilos2.css')}}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>PAPELERIAS BUTTERFLY</title>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>BIENVENIDO A PAPELERIAS BUTTERFLY</h2>
                <p>Si ya tienes una cuenta, por favor inicia sesión aquí</p>
                <button class="sign-up-btn">Iniciar Sesión</button>
            </div>
        </div>
        <form action={{ route('register') }} class="formulario" method="POST">
        @csrf
            <h2 class="create-account">Crea tu cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle'></i>
                </div>
            </div>
            <p class="cuenta-gratis">Crea tu cuenta gratis</p>
            <input type="text" placeholder="Nombre de Usuario" name="Nombre" required>
            <input type="email" placeholder="Correo" name="Correo" required>
            <input type="password" placeholder="Contraseña" name="password" required>

            <!-- Selección de Rol -->
            <label for="Rol">Selecciona tu rol:</label>
            <select name="Rol" required>
                <option value="cliente">Cliente</option>
                <option value="proveedor">Proveedor</option>
            </select>

            <input type="submit" value="Registrate" name="registrar">
        </form>
    </div>

    <div class="container-form sign-in">
        <form action={{ route('login') }} class="formulario" method="POST">
        @csrf
            <h2 class="create-account">Iniciar Sesión</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle'></i>
                </div>
            </div>
            <p class="cuenta-gratis">¿Aún no tienes una cuenta?</p>
            <input type="email" placeholder="Correo" name="Correo" required>
            <input type="password" placeholder="Contraseña" name="password" required>
            <input type="submit" value="Iniciar Sesión" name="iniciar">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>BIENVENIDO DE NUEVO</h2>
                <p>Si aún no tienes una cuenta, por favor regístrate aquí</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>

    <script src={{asset('js/script.js')}}></script>
</body>

</html>
