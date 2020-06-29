<?php

namespace projet\HTML;

class Error
{
  public static function error_cnx()
  {
    if (isset($_GET['p']) && isset($_GET['error'])) :
      if ($_GET['p'] == 'login' && $_GET['error'] == 'ko') :
        return ' <p class="bg-danger p-3 text-center mx-auto w-50">adress mail ou mots de pass incorrect</p>';
      endif;
    endif;
  }
}
