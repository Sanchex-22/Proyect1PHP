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
    </Nav>
    <div class="login">
        <h1>Login</h1>
        <form class="formulario" action="" method="post">
            <label for="user">Usuario</label>
            <input type="text" id="username" name="username" required>

            <label for="pass">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <input class="login-btn" type="submit" value="Iniciar Sesión">
        </form>
        
        <?php
        session_start();
        if (isset($_SESSION["username"])) {
            header("Location: dashboard.php");
            exit();
        }
        require_once('database/db_models.php'); // Asegúrate de incluir el archivo de conexión aquí
        require_once('models/user_models.php'); // Incluye la nueva clase

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $auth = new users();
            if ($auth->autenticar($username, $password)) {
                $_SESSION["username"] = $username;
                header("Location: dashboard.php");
                exit();
            } else {
                echo "Usuario o contraseña incorrectos. Inténtalo de nuevo.";
            }
        }
        ?>


        
    </div>

</body>
</html>