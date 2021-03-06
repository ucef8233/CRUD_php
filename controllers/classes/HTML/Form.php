<?php

namespace projet\classes\HTML;

use projet\classes\Database\Functions;

class Form extends Functions
{

  public static function getForm($contenu, $name, $type, $value = '')
  {
    return ' <div class="input-field col s12">
    <label for="' . $name . '">' . $contenu . '</label>
    <input value="' . $value . '" type="' . $type . '" name="' . $name . '" class="form-control" placeholder="Entrer le ' . $contenu . '"  required>
  </div>';
  }
  public static function getInput($name, $type, $value = '')
  {
    return ' <div class="col s12 my-5 right-align m-t-sm"><input value="' . $value . '" type="' . $type . '" name="' . $name . '" class="btn btn-primary"></div>
    ';
  }
  public static function editForm()
  {
    $form = [
      ['Nom', 'nom', 'text', self::edit('societe')['nom']],
      ['Mail', 'email', 'email', self::edit('societe')['mail']],
      ['Adress', 'adress', 'text', self::edit('societe')['adress']]
    ];
    return $form;
  }
  public static function addForm()
  {
    $form = [
      ['Nom', 'nom', 'text'],
      ['Password', 'password', 'password'],
      ['Mail', 'email', 'email'],
      ['Adress', 'adress', 'text']
    ];
    return $form;
  }
  public static function addLogin()
  {
    $form = [
      ['Mail', 'email', 'email'],
      ['Password', 'password', 'password'],
    ];
    return $form;
  }
}