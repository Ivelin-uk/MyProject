<?php
    spl_autoload_register();
    class Request
    {
        public $controllerName;
        public $actionName;
        public $params;

        public function __construct(string $controllerName, 
                                    string $actionName, 
                                    array $params       
        ){
            $this->controllerName = $controllerName;
            $this->actionName = $actionName;
            $this->params = $params;
        }
    }
?>