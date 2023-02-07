<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //     // require('C:\xampp\htdocs\phppoo\config\db.php');
        require('C:\xampp\htdocs\phppoo\model\usernameModel.php');
    //     echo 'hah';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        echo $id;
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $usernameModel = new usernameModel();
        $usernameModel->delete($id);
      
        header("Location: http://localhost/phppoo/view/username/index.php");
      }
      


    // require('C:\xampp\htdocs\phppoo\controller\usernameController.php');

    // $controller = new UsernameController();
    // $controller->deletar();


    ?>


</body>
</html>