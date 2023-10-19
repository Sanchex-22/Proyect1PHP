<?php
    require_once('/dabatase/db_models.php');

    class users extends modelsCredentials{
        protected $cod_user;
        protected $username;

        public function __construct()
        {
            parent::__construct();
        }

        public function consultar_usuario(){
            $instruccion ="Select*from users";

            $consulta=$this->_db->query($instruccion);
            $res=$consulta->fetch_all(MYSQLI_ASSOC);

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