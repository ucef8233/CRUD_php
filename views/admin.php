<?php
session_start();
// require '../classes/Autoloader.php';
use \projet\classes\Database\Functions;
use \projet\classes\Database\Connexion_exec;


// function autoload classes //
require '../controllers/Autoloader.php';
\projet\Autoloader::register();

if (isset($_GET['p'])) :
  $p = $_GET['p'];

else :
  $p = 'home';
endif;


ob_start();
if ($p === 'add') :
  Functions::submit('admin');
  require '../models/admin/add.php';
elseif ($p === 'home') :
  Functions::delet();
  require '../models/admin/home.php';
elseif ($p === 'logout') :
  require '../models/admin/logout.php';
elseif ($p === 'edit') :
  Functions::edit();
  require '../models/admin/edit.php';
else :
  require '../models/template/404.php';
endif;
$contente = ob_get_clean();
require '../models/template/admin.php';