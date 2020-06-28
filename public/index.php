<?php
// require '../classes/Autoloader.php';
use \projet\Autoloader;
use \projet\Database\Functions;
// function autoload classes //
require '../classes/Autoloader.php';
Autoloader::register();

if (isset($_GET['p'])) :
  $p = $_GET['p'];
else :
  $p = 'home';
endif;

ob_start();
if ($p === 'home') :
  Functions::delet();
  require '../views/home.php';
elseif ($p === 'add') :
  Functions::submit();
  require '../views/add.php';
else :
  Functions::edit();
  require '../views/edit.php';
endif;
$contente = ob_get_clean();
require '../views/template/default.php';
