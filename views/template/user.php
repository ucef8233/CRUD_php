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

  <nav class="navbar navbar-expand-md navbar-dark mb-5 bg-success">
    <a class="navbar-brand" href="user.php?p=home">Projet</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarCollapse">
      <ul class="navbar-nav ">
        <?php if ($_SESSION) : ?>

          <li class="nav-item mx-5">
            <a class="nav-link" href="user.php?p=logout">logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item ">
            <a class="nav-link" href="user.php?p=login">login</a>
          </li>

        <?php endif; ?>
      </ul>
    </div>
  </nav>
  <div class=" container mt-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="jumbotron">
          <div class="my-4">
            <h4 class="mb-4  text-center mx-auto"><?= $title  ?></h4>&nbsp;
          </div>
          <?= $contente ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>