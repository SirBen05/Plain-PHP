<?php
  require_once 'config/paths.php';
  $url = isset($_GET['url'])? $_GET['url'] : null;
  $url = rtrim($url, '/');
  $url = explode('/',$url);
  $page = "";
  if(($url[0])=='index.php'){   // Jeigu url tuščias
    $page = 'main';
  } else {
    if( file_exists('views/pages/'.$url[0].'.php') ||   
        file_exists('views/pages/'.$url[0].'/index.php'))
    {
      $page = $url[0];          // Jeigu egzistuoja kelias iki failo arba direktorijos
    } else{
      $page = 'error';          // Jeigu nerasta failo arba direktorijos
    }
  }
  session_start();
  require 'views/common/template.php';
