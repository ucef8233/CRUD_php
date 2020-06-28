<?php

use \projet\HTML\Form;
use \projet\Autoloader;
use \projet\Database\Functions;
// function autoload classes //
require '../classes/Autoloader.php';
Autoloader::register();
Functions::edit();
$result = Functions::edit();
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
          <h4 class="mb-4">Edit User</h4>
          <!-- Modiffier des employer  -->
          <form action="" method="post">
            <?= Form::getInput('id', 'hidden', $result['id']) ?>
            <?php
            foreach (Form::editForm() as list($a, $b, $c, $d)) :
              echo  Form::getForm($a, $b, $c, $d);
            endforeach;
            echo Form::getInput('submit', 'submit', 'submit');
            ?>

          </form>
          <!-- fin d'ajout des employées  -->
        </div>
      </div>
    </div>
  </div>


</body>

</html>