<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION["username"])) {
    header("Location: ../index.php");
    exit();
}

$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas PHP</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../index.css">
</head>
<body>

    <Nav class="navbar">
        <ul class="nav-izq"><img src="#" alt="logo"></ul>
        <ul class="nav-der">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Task</a></li>
        </ul>
    </Nav>
    <div class="dashboard">
        <h1>Tareas</h1>
        <button class="create-btn" id="redireccionarBtn">New Task</button>
        <table>
            <tr>
                <th>#</th>
                <th>title</th>
                <th>description</th>
                <th>status</th>
                <th>option</th>
            </tr>
            <!--Esto seria lo que hay que mapear-->
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="eliminate-btn">Eliminate</button>
                </td>
            </tr>

            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="eliminate-btn">Eliminate</button>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>Mate</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="eliminate-btn">Eliminate</button>
                </td>
            </tr>

        </table>
        <?php
        
        ?>
    </div>
    <script src="redirect.js"></script>

    <footer>copyright</footer>
</body>
</html>