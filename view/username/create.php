<?php

    require('C:\xampp\htdocs\phppoo\view\head\head.php');
    // when i run the index.php the page head.php appear. This behaviour is caused by this require statement

?>

<!-- <form action="store.php" method="post" autocomplete="off"> -->
<form action="http://localhost/phppoo/view/username/store.php" method="post" autocomplete="off">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
</form>



<?php

    require('C:\xampp\htdocs\phppoo\view\head\footer.php');
    // when i run the index.php the page footer.php appear. This behaviour is caused by this require statement even in separated files...

?>