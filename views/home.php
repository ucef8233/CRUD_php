<?php
$title = 'Liste des utulisateurs';

use projet\Database\Utulisateur;
// function autoload classes //
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
    $rows =  $utulisateurs->select();
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
          <td><a class="btn btn-sm btn-primary" href="index.php?p=<?= $row['id'] ?>"> <i class="fas fa-user-edit "></i> Edit</a> &nbsp;
            <a class="btn btn-sm btn-danger" href="index.php?del=<?= $row['id'] ?> "><i class="fas fa-user-minus "></i> Delet</a></td>
        </tr>
    <?php endforeach;
    endif; ?>
  </tbody>
</table>
<a href="index.php?p=add" class="btn btn-success float-right mr-5"> Add employée <i class="fas fa-id-badge"></i></a>
<!-- fin de la liste -->