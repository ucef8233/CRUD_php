<?php

namespace projet\classes\HTML;

use projet\classes\Database\Functions;

class Form extends Functions
{

  public static function getForm($contenu, $name, $type, $value = '')
  {
    return '<div class="form-group">
    <label for="email">' . $contenu . '</label>
    <input value="' . $value . '" type="' . $type . '" name="' . $name . '" class="form-control" placeholder="Entrer le ' . $contenu . '"  required>
  </div>';
  }
  public static function getInput($name, $type, $value = '')
  {
    return '<input value="' . $value . '" type="' . $type . '" name="' . $name . '" class="btn btn-primary">
    ';
  }
  public static function editForm()
  {
    $form = [
      ['Nom', 'nom', 'text', self::edit()['nom']],
      ['Mail', 'email', 'email', self::edit()['mail']],
      ['Adress', 'adress', 'text', self::edit()['adress']]
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