<?php
    require_once('/database/db_models.php');

    class task extends modelsCredentials{
        protected $cod;
        protected $titulo;
        protected $descripcion;
        protected $estado;
        protected $fecha_compromiso;
        protected $etiqueta;

        public function __construct()
        {
            parent::__construct();
        }

        public function consultar_task() {
            $instruccion = "Select * from Tareas";
            $consulta = $this->_db->query($instruccion);
            $res = $consulta->fetch_all(MYSQLI_ASSOC);
             // Cierra la conexión a la base de datos
        
            if (!$res) {
                echo "fallo al consultar tareas";
                $consulta->close();  // Cierra la consulta
                $this->_db->close();
            } else {
                return $res;
                $consulta->close();  // Cierra la consulta
                $this->_db->close();
            }
        }
    }

?>