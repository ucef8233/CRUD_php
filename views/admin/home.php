<?php

use projet\Database\Utulisateur;
/////////////////////////////////////////////////////////////// a refaire /////////////

// session_start();
if ($_SESSION['utulisateurs']['password']) :
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
            <td><a class="btn btn-sm btn-primary" href="utulisateurs.php?p=edit&id=<?= $row['id'] ?>"> <i class="fas fa-user-edit "></i> Edit</a> &nbsp;
              <a class="btn btn-sm btn-danger" href="utulisateurs.php?p=home&del=<?= $row['id'] ?> "><i class="fas fa-user-minus "></i> Delet</a></td>
          </tr>
      <?php endforeach;
      endif; ?>
    </tbody>
  </table>
  <a href="utulisateurs.php?p=add" class="btn btn-success float-right mr-5"> Add employée <i class="fas fa-id-badge"></i></a>
  <!-- fin de la liste -->
<?php
else :
  header('location: utulisateurs.php?p=login');
endif;
?>