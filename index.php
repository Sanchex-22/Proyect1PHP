<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 1</title>
</head>
<body>
    <Nav>
        <ul>
            <li>Home</li>
            <li>Task</li>
        </ul>
    </Nav>
    <div>
        <h1>Tareas</h1>
        <table>
            <tr>
                <th>titulo</th>
                <th>texto</th>
                <th>categorias</th>
                <th>fecha</th>
                <th>imagen</th>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </table>
        <?php
            if($nfilas>0){
                print ("<>")

            }
        ?>
    </div>
    <footer>copyright</footer>
</body>
</html>