<?php namespace App\Libraries;
/**
 *
 */
class Tema
{
  public function loadView($content, $data = [])
  {
    $data['judul'] = 'Admin Dashboard Codeigniter 4';
    echo view($content, $data);
  }
}
