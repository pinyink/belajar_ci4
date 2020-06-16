<?php
namespace App\Models;

use CodeIgniter\Model;

/**
 *
 */
class ModelPenduduk extends Model
{

  function __construct()
  {
    $this->db = db_connect();
  }

  public function datas($where)
  {
    $table = $this->db->table("penduduk");
    $table->select("nik, nama, tempat_lahir, date_format(tanggal_lahir, '%d-%m-%Y') tanggal_lahir, alamat, jk");
    $table->where($where);
    return $table->get();
  }

  public function simpan($data)
  {
    $table = $this->db->table("penduduk");
    $table->insert($data);
    return $this->db->affectedRows();
  }

  public function updateData($id, $data)
  {
    $table = $this->db->table("penduduk");
    $table->where('nik', $id);
    $table->update($data);
    return $this->db->affectedRows();
  }

  public function deleteData($nik)
  {
    $table = $this->db->table("penduduk");
    $table->where('nik', $nik);
    $table->delete();
    return $this->db->affectedRows();
  }
}
