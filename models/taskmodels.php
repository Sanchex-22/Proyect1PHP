<?php
    require_once('database/db_models.php');

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
            
            $consulta->close();  // Cierra la consulta
            $this->_db->close();

            return $res;
        }
        
        public function eliminar_task($id){
            $taskId = $this->_db->real_escape_string($id);
            $sql = "DELETE FROM Tareas WHERE cod = '$taskId'";
            if ($this->_db->query($sql) === TRUE) {
                echo "La tarea fue eliminada con éxito";
            } else {
                echo "Error al eliminar la tarea: " . $this->_db->error;
            }
            
        }
    }

?>