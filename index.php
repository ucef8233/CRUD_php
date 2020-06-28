<?php
// function autoload classes //
require 'classes/Autoloader.php';
Autoloader::register();
Functions::delet();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5ef935a943.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="jumbotron">
          <div class="my-4">
            <h4 class="mb-4 d-inline">Employée </h4> &nbsp;
            <a href="add.php" class="btn btn-success"> Add employée <i class="fas fa-id-badge"></i></a>
          </div>
          <!-- liste des employée -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">adress</th>
                <th scope="col">mail</th>
                <th scope="col">date d'inscription</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $utulisateurs = new Utulisateur;
              $rows =  $utulisateurs->select();
              foreach ($rows as $index => $row) :
              ?>
                <tr>
                  <th scope="row"><?= $index + 1 ?></th>
                  <td><?= $row['id'] ?></td>
                  <td><?= $row['nom'] ?></td>
                  <td><?= $row['adress'] ?></td>
                  <td><?= $row['mail'] ?></td>
                  <td><?= $row['date_integration'] ?></td>
                  <td><a class="btn btn-sm btn-primary" href="edit.php?id=<?= $row['id'] ?>"> <i class="fas fa-user-edit "></i> Edit</a> &nbsp;
                    <a class="btn btn-sm btn-danger" href="index.php?del=<?= $row['id'] ?> "><i class="fas fa-user-minus "></i> Delet</a></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <!-- fin de la liste -->
        </div>
      </div>
    </div>
  </div>


</body>

</html>