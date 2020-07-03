<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../models/assets/css/user.css">
  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="col-lg-8">
      <div class="panel profile-cover">
        <div class="profile-cover__img">
          <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" />
          <h3 class="h3"><?= $contente  ?></h3>
        </div>
        <div class="profile-cover__action">
          <a class=" btn btn-primary" href="user.php?p=logout"> logout</a>
        </div>
        <div class="profile-cover__info">
          <ul class="nav">

          </ul>
        </div>
      </div>
    </div>
  </div>
</body>

</html>