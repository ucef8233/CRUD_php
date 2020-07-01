<?php

use projet\classes\Database\Utulisateur;
/////////////////////////////////////////////////////////////// a refaire /////////////
if (isset($_SESSION['utulisateurs']['id'])) :
  setcookie('utulisateur', $_SESSION['utulisateurs']['id'], time() + 60 * 160 + 24);
elseif (isset($_SESSION['id_google'])) :
  setcookie('utulisateur', $_SESSION['id_google'], time() + 60 * 160 + 24);
endif;



if (isset($_SESSION['utulisateurs']['id']) || isset($_SESSION['id_google'])) :
  $title = 'Liste des utulisateurs';
?>

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
      $rows =  $utulisateurs->select('utulisateurs');
      if ($rows) :
        foreach ($rows as $index => $row) :
      ?>
    <tr>
      <th scope="row"><?= $index + 1 ?></th>
      <td><?= $row['id'] ?></td>
      <td><?= $row['nom'] ?></td>
      <td><?= $row['adress'] ?></td>
      <td><?= $row['mail'] ?></td>
      <td><?= $row['date_integration'] ?></td>
      <td><a class="btn btn-sm btn-primary" href="utulisateurs.php?p=edit&id=<?= $row['id'] ?>"> <i
            class="fas fa-user-edit "></i> Edit</a> &nbsp;
        <a class="btn btn-sm btn-danger" href="utulisateurs.php?p=home&del=<?= $row['id'] ?> "><i
            class="fas fa-user-minus "></i> Delet</a></td>
    </tr>
    <?php endforeach;
      endif; ?>
  </tbody>
</table>
<a href="utulisateurs.php?p=add" class="btn btn-success float-right mr-5"> Add employée <iclass="fas fa-id-badge">
    </i></a>
<!-- fin de la liste -->
<?php

else :
  header('location: utulisateurs.php?p=login');
endif;
?>