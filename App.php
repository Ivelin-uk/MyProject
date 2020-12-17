<?php
    spl_autoload_register();
    Class App{

        public $request;
        public $db;

        function __construct(Request $request,PDO $db){
            $this->request = $request;
            $this->db = $db;
        }

        function start(){
       
            
            $view = new View($this->request);
            $reposity = new Repository($this->db);
            $appControler = new StatisticController($view,$reposity);
            $param = $this->request->params[0];
            call_user_func_array(
                array($appControler,$this->request->actionName),
                array($param)
            );
        }
    }
?>