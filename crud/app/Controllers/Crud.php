<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Tema;
use App\models\ModelPenduduk;

class Crud extends Controller
{

  public function index()
  {
    // $db = \Config\Database::connect();
    $tema = new Tema();
    $tema->loadView();
  }

  public function view()
  {
    $penduduk = new ModelPenduduk();
    $data = [
      'data' => $penduduk->datas([])->getResult()
    ];
    echo view('crud/view', $data);
    // print_r($data);
  }

  public function tambah()
  {
    helper('form');
    echo view('crud/tambah');
  }

  public function simpan()
  {
    $data = [
      'nik' => $this->request->getpost('nik'),
      'nama' => $this->request->getpost('nama'),
      'tempat_lahir' => $this->request->getpost('tempat'),
      'tanggal_lahir' => date('Y-m-d', strtotime($this->request->getpost('tanggal'))),
      'alamat' => $this->request->getpost('alamat'),
      'jk' => $this->request->getpost('jk')
    ];

    $penduduk = new ModelPenduduk();
    $query = $penduduk->simpan($data);
    if ($query >= 1) {
      return redirect()->to('view');
    }
  }

  public function edit($nik)
  {
    helper('form');
    $penduduk = new ModelPenduduk();
    $query = $penduduk->datas(['nik' => $nik])->getRow();
    $data = [
      'data' => $query
    ];
    echo view('crud/edit', $data);
  }

  public function update()
  {
    $data = [
      'nik' => $this->request->getpost('nik'),
      'nama' => $this->request->getpost('nama'),
      'tempat_lahir' => $this->request->getpost('tempat'),
      'tanggal_lahir' => date('Y-m-d', strtotime($this->request->getpost('tanggal'))),
      'alamat' => $this->request->getpost('alamat'),
      'jk' => $this->request->getpost('jk')
    ];
    $id = $this->request->getpost('nik_awal');
    $penduduk = new ModelPenduduk();
    $query = $penduduk->updateData($id, $data);
    if ($query >= 1) {
      return redirect()->to('/crud/view');
    }
  }

  public function delete($nik)
  {
    $penduduk = new ModelPenduduk();
    $query = $penduduk->deleteData($nik);
    if ($query >= 1) {
      return redirect()->to('/crud/view');
    }
  }
}
