<?php
    require_once('/dabatase/db_models.php');

    class task extends modelsCredentials{
        protected $title;
        protected $description;
        protected $status;
        protected $datetime;
        protected $label;
        protected $flag;
        protected $type;
        protected $user_id;

        public function __construct()
        {
            parent::__construct();
        }

        public function consultar_task(){
            $instruccion ="Select*from Tareas"

            $consulta=$this->_db->query($instruccion);
            $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

            if(!$resultado){

            }
            else{
                return $resultado;
            }
        }
    }

?>