<?php
// require '../classes/Autoloader.php';
session_start();

use \projet\classes\Database\Connexion_exec;
use \projet\classes\Database\Functions;
// function autoload classes //
require '../classes/Autoloader.php';
\projet\classes\Autoloader::register();

if (isset($_GET['p'])) :
  $p = $_GET['p'];
else :
  $p = 'login';
endif;


ob_start();
if ($p === 'login') :
  Connexion_exec::Cnx('user');
  require '../models/user/login.php';
elseif ($p === 'home') :
  require '../models/user/home.php';
elseif ($p === 'inscription') :
  Functions::submit('user');
  require '../models/user/inscription.php';
elseif ($p === 'logout') :
  require '../models/user/logout.php';
else :
  require '../models/template/404.php';
endif;
$contente = ob_get_clean();
require '../models/template/user.php';