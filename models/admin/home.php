<?php

use projet\classes\Database\Utulisateur;
/////////////////////////////////////////////////////////////// a refaire /////////////

if (isset($_SESSION['admin']['id'])) :
  $title = 'Liste des utulisateurs';
  // var_dump($_SESSION);
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

      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $utulisateurs = new Utulisateur;
      $rows =  $utulisateurs->select('societe');
      if ($rows) :
        foreach ($rows as $index => $row) :
      ?>
    <tr>
      <th scope="row"><?= $index + 1 ?></th>
      <td><?= $row['id'] ?></td>
      <td><?= $row['nom'] ?></td>
      <td><?= $row['adress'] ?></td>
      <td><?= $row['mail'] ?></td>
      <td><a class="btn btn-sm btn-primary" href="admin.php?p=edit&id=<?= $row['id'] ?>"> <i
            class="fas fa-user-edit "></i> Edit</a> &nbsp;
        <a class="btn btn-sm btn-danger" href="admin.php?p=home&del=<?= $row['id'] ?> "><i
            class="fas fa-user-minus "></i> Delet</a></td>
    </tr>
    <?php endforeach;
      endif; ?>
  </tbody>
</table>
</i></a>
<!-- fin de la liste -->
<?php

else :
  header('location: login.php?p=loginadmin');
endif;
?>