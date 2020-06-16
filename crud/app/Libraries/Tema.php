<?php namespace App\Libraries;
/**
 *
 */
class Tema
{
  public function loadView($value='')
  {
    $data = [];
    echo view("tema/content");
  }
}
