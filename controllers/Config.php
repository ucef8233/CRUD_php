<?php

namespace projet;

require_once "GoogleApi/vendor/autoload.php";
class Config
{
  public  function configGoogle()
  {
    $gClient = new \Google_Client();
    $gClient->setClientId("646342099462-r4h4gaaash5sg1lj4to55ma2jd6g0eo3.apps.googleusercontent.com");
    $gClient->setClientSecret("L9MfQlF9kMHj_v2bBCzZgBMm");
    $gClient->setRedirectUri("http://localhost/CRUD_PHP/views/utulisateurs.php?p=callback");
    // $gClient->addScope("email");
    // $gClient->addScope("profile");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
    return $gClient;
  }
}