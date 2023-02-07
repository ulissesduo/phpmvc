<?php
    class UsernameModel{
        private $PDO;
        public function __construct()
        {
            // call database
            require('C:\xampp\htdocs\phppoo\config\db.php'); 
            // instance of db object
            $con = new db();
            $this->PDO = $con->connection();
        }   
        // FUNCIONOOOOOOOOOOOOOOOOOOUUUUUUUUUUU
        public function create($name) {
            $sql = "INSERT INTO username (nome) VALUES ('$name')";
            // $result = $this->$con->query($sql);
            $result = $this->PDO->query($sql);
            if (!$result) {
            //   echo "Error: " . $this->$con->error;
                echo "Error: " . $this->PDO->error;
              return false;
            }
            return true; 
        }
        
        public function getAll(){
            //sql query
            $sql = "SELECT * FROM username";
            $result = $this->PDO->query($sql);
            $stmt = $this->PDO->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function getAllById($id){
            //sql query
            $sql = "SELECT * FROM username WHERE id=:id";
            $stmt = $this->PDO->prepare($sql);
            $stmt->execute(array(':id'=>$id));
            return $stmt->fetchAll();
        }

        public function delete($id){
            $sql = "DELETE FROM username WHERE id = :id";
            $stmt = $this->PDO->prepare($sql);
            $stmt->bindParam(':id', $id);
            if ($stmt->execute()) {
                // header('Location: http://localhost/phppoo/view/username/index.php');
                return true;
            } else {
                return false;
            }
        }

    }

?>