<?php
    require_once('database/db_models.php');

    class users extends modelsCredentials{
        protected $cod_user;
        protected $username;
        protected $password;

        public function __construct()
        {
            parent::__construct();
        }

        public function autenticar($username, $password) {
            $username = $this->_db->real_escape_string($username); // Para prevenir inyección de SQL
            $password = $this->_db->real_escape_string($password);
    
            $sql = "SELECT * FROM usuarios WHERE user_name='$username' AND password='$password'";
            $result = $this->_db->query($sql);
    
            if ($this->_db->error) {
                die("Error en la consulta: " . $this->_db->error);
            }
    
            if ($result->num_rows == 1) {
                return true;
            } else {
                return false;
            }
        }
    }

?>