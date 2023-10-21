# Proyect1PHP


# Instrucciones para Configurar la Base de Datos

Para que la aplicación funcione correctamente, necesitas configurar una base de datos MySQL y crear las tablas necesarias. Sigue los siguientes pasos:

1. **El archivo db_connection contiene:**
    ```dbconncetion
        define('DB_HOST','localhost');
        define('DB_USER','root');
        define('DB_PASS','{TU CONTRASEÑA}');
        define('DB_NAME','checktask');
    ```

2. **Crear la Base de Datos:**

   ```sql
    CREATE DATABASE IF NOT EXISTS checktask;

    use checktask;

    create table IF NOT EXISTS Tareas(

    cod INT not null AUTO_INCREMENT,
    Titulo CHAR(20) not null,
    Descripcion VARCHAR (100) not null,
    Estado CHAR (10) not null,
    CHECK (Estado = 'Por Hacer' or 'En Progreso' or 'Terminada'),
    Fecha_Compromiso DATETIME not null,
    Etiqueta CHAR (10),
    primary key (cod)
    );

    create table IF NOT EXISTS Usuarios(
    cod_user INT NOT NULL AUTO_INCREMENT,
    User_Name VARCHAR (10) NOT NULL,
    password VARCHAR (10) NOT NULL,
    primary key (cod_user)
    );

   ```
