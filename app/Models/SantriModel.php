<?php namespace App\Models;

use CodeIgniter\Model;

class SantriModel extends Model
{
    protected $table;

    public function __construct() {

        parent::__construct();
        
        $db = \Config\Database::connect();
        
        $this->table = $this->db->table('data_santri');
    }

    public function get_santri_asrama(){
        $this->table->join('data_asrama', 'data_asrama.id_asrama = data_santri.id_asrama');
        $this->table->select('data_asrama.nama_asrama as nama_asrama');
        $this->table->select('data_santri.NIS as NIS');
        $this->table->select('data_santri.nama_santri as nama_santri');
        $this->table->select('data_santri.alamat as alamat');
        $this->table->select('data_santri.total_paket_diterima as total_paket_diterima');

        return $this->table->get()->getResultArray();
    }
    
    public function get_santri()
    {
        return $this->table->get()->getResultArray();
    }

    public function insert_santri($data)
    {
        return $this->table->insert($data);
    }

    public function edit_santri($id)
    {
        $this->table->join('data_asrama', 'data_asrama.id_asrama = data_santri.id_asrama');
        $this->table->select('data_asrama.nama_asrama as nama_asrama');
        $this->table->select('data_santri.NIS as NIS');
        $this->table->select('data_santri.nama_santri as nama_santri');
        $this->table->select('data_santri.alamat as alamat');
        $this->table->select('data_santri.total_paket_diterima as total_paket_diterima');
        $this->table->select('data_santri.id_asrama as id_asrama');

        return $this->table->where('NIS', $id)->get()->getRowArray();
    }

    public function update_santri($data, $id)
    {
        $this->table->set($data);
        $this->table->where('NIS', $id);
        return $this->table->update(); 
    }

    public function delete_santri($id)
    {
        $this->table->where('NIS', $id);
        return $this->table->delete();
    }
}