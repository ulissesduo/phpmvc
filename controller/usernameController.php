<?php
    class UsernameController{
        private $model;

        public function __construct()
        {
            require('C:\xampp\htdocs\phppoo\model\usernameModel.php');
            $this->model = new UsernameModel();
            $this->create();
        }

        public function create()
        {
            $name = $_POST['name'];
            $result = $this->model->create($name);
            if ($result) {

                header('Location: index.php');
            }
            else{
                echo $result;
                echo $name;
                // header("location: edit.php");
            }
        }
        
        public function read(){
            $model = $this->model('C:\xampp\htdocs\phppoo\model\usernameModel.php');
            $data = $model->getData();
            $this->view('C:\xampp\htdocs\phppoo\view\username\index.php', $data);
        }
  
        public function readById($id) {
            $model = $this->model('C:\xampp\htdocs\phppoo\model\usernameModel.php');
            $data = $model->getAllById($id);
            $this->view('C:\xampp\htdocs\phppoo\view\username\index.php', $data);
        }
        public function deletar(){
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                
                $usernameModel = new usernameModel();
                $usernameModel->delete($id);
              
                header("Location: http://localhost/phppoo/view/username/index.php");
            }
        }
    }

?>