<?php
    require_once('db_conection.php');

    class modelsCredentials{
        protected $_db;

        public function __construct()
        {
            $this->_db = new mysqli(DB_HOST, DB_USER, DB_NAME, DB_USER);

            if($this->_db->connect_errno){
                echo "error al conectar a la base de datos";
                return;
            }
        }
    }
?>