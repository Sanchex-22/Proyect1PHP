<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas PHP</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <Nav class="navbar">
        <ul class="nav-izq"><img src="#" alt="logo"></ul>
        <ul class="nav-der">
            <li><a href="#">Home</a></li>
            <li><a href="pages/dashboard.php">Task</a></li>
        </ul>
    </Nav>
    <div class="login">
        <h1>Login</h1>
        <form class="formulario" action="" method="post">
            <label for="user">Usuario</label>
            <input type="text" id="username" name="username" required>

            <label for="pass">Contraseña</label>
            <input type="text" id="password" name="password" required>

            <input class="login-btn" type="submit" value="Iniciar Sesión">
        </form>
        
        <?php
        session_start();
        
        // Verificar si el usuario y contraseña son correctos (aquí puedes agregar tu lógica de autenticación)
        $correct_username = "usuario"; // Cambia esto al nombre de usuario correcto
        $correct_password = "contrasena"; // Cambia esto a la contraseña correcta
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
        
            if ($username == $correct_username && $password == $correct_password) {
                // Iniciar sesión y redirigir a la página de inicio
                $_SESSION["username"] = $username;
                header("Location: home.php");
                exit();
            } else {
                echo "Usuario o contraseña incorrectos. Inténtalo de nuevo.";
            }
        }
        ?>
        
    </div>
</body>
</html>