<?php
// session_start();

use \projet\classes\Database\Functions;
use \projet\classes\Database\Connexion_exec;
// function autoload classes //
require '../controllers/Autoloader.php';
\projet\Autoloader::register();

if (isset($_GET['p'])) :
  $p = $_GET['p'];
else :
  $p = 'loginuser';
endif;
ob_start();
if ($p === 'loginadmin') :
  Connexion_exec::Cnx('admin', 'loginadmin');
  require '../models/admin/loginadmin.php';
elseif ($p === 'loginuser') :
  Connexion_exec::Cnx('user', 'loginuser');
  require '../models/user/loginuser.php';
elseif ($p === 'inscription') :
  Functions::submit('user');
  require '../models/user/inscription.php';
// else :
//   require '../models/user/404.php';
endif;
$login = ob_get_clean();
require '../models/template/login.php';