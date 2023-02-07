<?php

require('C:\xampp\htdocs\phppoo\model\usernameModel.php');
// require('C:\xampp\htdocs\phppoo\controller\usernameController.php');

$usernameModel = new UsernameModel();
$data = $usernameModel->getAll();


// $controller = new UsernameController();
// $controller->delete();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
    </tr>
    <?php foreach($data as $row): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nome']; ?></td>
        <td><a href="http://localhost/phppoo/view/username/delete.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>