<?php
    require_once('/dabatase/db_models.php');

    class users extends modelsCredentials{
        protected $username;
        protected $password;

        public function __construct()
        {
            parent::__construct();
        }
    }

?>