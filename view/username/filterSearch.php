<?php
require('C:\xampp\htdocs\phppoo\model\usernameModel.php');

$usernameModel = new usernameModel();
// $data = $usernameModel->getAllById(0);
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $data = $usernameModel->getAllById($id);
} else {
    $data = $usernameModel->getAllById(0);
}
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
<form action="http://localhost/phppoo/view/username/filterSearch.php" method="post">
    <label for="id">Enter ID:</label>
    <input type="text" id="id" name="id">
    <input type="submit" value="Submit">
</form>

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
    </tr>
    <?php foreach($data as $row): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nome']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>