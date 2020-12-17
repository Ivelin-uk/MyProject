<?php
    spl_autoload_register();
    class StatisticController{

        public $view;
        public $repository;

        function __construct(View $view,Repository $repository) {
            $this->view = $view;
            $this->repository = $repository;
        }

        function home(){
            $this->view->render();
        }

        function task1(){
            $this->repository->task1();
            $this->view->render();
        }

        function task2(){
            $this->repository->task2();
            $this->view->render();
        }

        function task3(){
            $this->repository->task3();
            $this->view->render();
        }

        function task4(){
            $this->repository->task4();
            $this->view->render();
        }

        function task5(){
            $this->repository->task5();
            $this->view->render();
        }

        function task6($param = null){
            if($param != null){
                $this->repository->task6($param);
                $this->view->render();
            }else{
                $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
                $json = "";
                fwrite($myfile, $json);
                $this->view->render();
            }            
        }

        function task7(){
            $this->repository->task7();
            $this->view->render();
        }

        function task8(){
            $this->repository->task8();
            $this->view->render();
        }

        function task9(){
            $this->repository->task9();
            $this->view->render();
        }
    }
?>
