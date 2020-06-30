<?php
// require '../classes/Autoloader.php';
session_start();

use \projet\Database\Connexion_exec;
use \projet\Database\Functions;
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
  Connexion_exec::Cnx('user');
  require '../views/user/login.php';
elseif ($p === 'home') :
  require '../views/user/home.php';
elseif ($p === 'inscription') :
  Functions::submit('user');
  require '../views/user/inscription.php';
elseif ($p === 'logout') :
  require '../views/user/logout.php';
else :
  require '../views/template/404.php';
endif;
$contente = ob_get_clean();
require '../views/template/user.php';
