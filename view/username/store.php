<?php
    // we need to use the function "guardar" to save the data. This function is on userController. Then, call this file
    // require_once("c://xamp/htdocs/phppoo/controller/usernameController.php");
    // require_once('C:\xampp\htdocs\phppoo\controller\usernameController.php');
    // $obj = new UsernameController();
    // $obj->guardar($_POST['nome']);




    // require_once('C:\xamp\htdocs\phppoo\controller\usernameController.php');
    require_once('C:\xampp\htdocs\phppoo\controller\usernameController.php');
    $obj = new UsernameController();
    // $obj->guardar($_POST['nome']);

    //Ok está aparecendo o valor na tela sim. Mas porque fica nullo depois nao da pra entender.
    
    // echo $_POST['nome'];

    // echo "to fora do if    ".isset($_POST['nome']);
    // if(isset($_POST['nome'])){
    //     echo "To no if";
    //     echo $_POST['nome'];
    //     $obj->guardar($_POST['nome']);
    //     echo "Fim do if";
    // }

?>