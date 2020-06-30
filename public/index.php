<?php

// require '../classes/Autoloader.php';
use \projet\Database\Functions;
use \projet\Database\Connexion_exec;
// function autoload classes //
require '../classes/Autoloader.php';
\projet\Autoloader::register();

if (isset($_GET['p'])) :
  $p = $_GET['p'];
else :
  $p = 'login';
endif;

ob_start();
if ($p === 'login') :
  Connexion_exec::Cnx('utulisateurs');
  require '../views/admin/login.php';
elseif ($p === 'add') :
  Functions::submit('utulisateurs');
  require '../views/admin/add.php';
elseif ($p === 'home') :
  Functions::delet();
  require '../views/admin/home.php';
elseif ($p === 'logout') :
  require '../views/admin/logout.php';
else :
  Functions::edit();
  require '../views/admin/edit.php';
endif;
$contente = ob_get_clean();
require '../views/template/default.php';
