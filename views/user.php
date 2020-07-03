<?php
// require '../classes/Autoloader.php';
session_start();

use \projet\classes\Database\Connexion_exec;
use \projet\classes\Database\Functions;
// function autoload classes //
require '../controllers/Autoloader.php';
\projet\Autoloader::register();

if (isset($_GET['p'])) :
  $p = $_GET['p'];
else :
  $p = 'home';
endif;


ob_start();
if ($p === 'home') :
  require '../models/user/home.php';

elseif ($p === 'logout') :
  require '../models/user/logout.php';
elseif ($p === 'callback') :
  require '../controllers/gcallback.php';
else :
  require '../models/user/404.php';
endif;
$contente = ob_get_clean();
require '../models/template/user.php';