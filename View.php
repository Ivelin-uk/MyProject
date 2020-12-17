<?php
    spl_autoload_register();
    class View{
        public $request;

        function __construct(Request $request){
            $this->request = $request;
        }

        public function render($data = null){      
            include 'views/partials/header.php';
            include 'views/main/' . $this->request->actionName . '.php';
            include 'views/partials/footer.php';
        }
    }
?>