<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\libraries\Tema;

class Dashboard extends Controller
{
  public function index()
  {
    $data = [];
    $tema = new Tema();
    $tema->loadView('tema/content', $data);
  }
}
