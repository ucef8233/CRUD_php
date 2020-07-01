<?php
session_start();
// require '../classes/Autoloader.php';
use \projet\Database\Functions;
use \projet\Database\Connexion_exec;
// function autoload classes //
require '../classes/Autoloader.php';
\projet\Autoloader::register();

if (isset($_GET['p'])) :
  $p = $_GET['p'];
// elseif ($p === 'login' && (isset($_SESSION['utulisateurs']['password']) || isset($_SESSION['id_google']))) :
//   $p = 'home';
else :
  $p = 'home';
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
elseif ($p === 'edit') :
  Functions::edit();
  require '../views/admin/edit.php';
elseif ($p === 'callback') :
  require '../views/admin/g-callback.php';
else :
  require '../views/template/404.php';
endif;
$contente = ob_get_clean();
require '../views/template/default.php';
// elseif ($p === 'ko') :
//   header('location: utulisateurs.php?p=login&error=ko');