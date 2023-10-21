<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas PHP</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../css/edit_task.css">
</head>
<body>
    <Nav class="navbar">
        <ul class="nav-izq"><img src="#" alt="logo"></ul>
        <ul class="nav-der">
            <li><a href="../index.php">Home</a></li>
            <li><a href="dashboard.php">Task</a></li>
        </ul>
    </Nav>
    <div class="login">
        <h1>Edit Tarea</h1>
        <form class="formulario" action="" method="post">
            <label for="user">titulo</label>
            <input type="text" name="titulo" id="">

            <label for="pass">descripcion</label>
            <input type="text" name="descripcion" id="">

            <button class="login-btn">Editar</button>
        </form>
        <?php
        ?>
    </div>
</body>
</html>