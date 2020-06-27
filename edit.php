<?php
// function autoload classes //
function __autoload($class)
{
  require_once "classes/$class.php";
}
$function = new Functions;
$function->edit();
$result = $function->edit();
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
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom" aria-describedby="emailHelp" placeholder="Entrer le nom" value="<?= $result['nom'] ?>" required>
            </div>
            <!-- <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Entrer le mot de pass" value="<?= $result['password'] ?>" required>
            </div> -->
            <div class="form-group">
              <label for="email">Mail</label>
              <input type="email" name="email" class="form-control" placeholder="Entrer le mail" value="<?= $result['mail'] ?>" required>
            </div>
            <div class="form-group">
              <label for="adress">adress postal</label>
              <input type="text" name="adress" class="form-control" placeholder="Entrer l'adress postale" value="<?= $result['adress'] ?>" required>
            </div>
            <input type="submit" name="submit" class="btn btn-primary">
          </form>
          <!-- fin d'ajout des employées  -->
        </div>
      </div>
    </div>
  </div>


</body>

</html>