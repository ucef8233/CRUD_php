<?php
// function autoload classes //

use \projet\HTML\Form;
use \projet\Autoloader;
use \projet\Database\Functions;

require '../classes/Autoloader.php';
Autoloader::register();
Functions::submit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>

  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="jumbotron">
          <h4 class="mb-4">Add User</h4>
          <!-- ajouter des employer  -->
          <form action="" method="POST">
            <?php
            foreach (Form::addForm() as list($a, $b, $c)) :
              echo  Form::getForm($a, $b, $c);
            endforeach;
            ?>
            <?= Form::getInput('submit', 'submit', 'submit') ?>
          </form>
          <!-- fin d'ajout des employées  -->
        </div>
      </div>
    </div>
  </div>


</body>

</html>