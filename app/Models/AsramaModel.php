<?php namespace App\Models;

use CodeIgniter\Model;

class AsramaModel extends Model
{
    protected $table;

    public function __construct() {

        parent::__construct();
        
        $db = \Config\Database::connect();
        
        $this->table = $this->db->table('data_asrama');
    }

    public function get_asrama()
    {
        return $this->table->get()->getResultArray();
    }

    public function insert_asrama($data)
    {
        return $this->table->insert($data);
    }

    public function edit_asrama($id)
    {
        return $this->table->where('id_asrama', $id)->get()->getRowArray();
    }

    public function update_asrama($data, $id)
    {
        $this->table->set($data);
        $this->table->where('id_asrama', $id);
        return $this->table->update(); 
    }

    public function delete_asrama($id)
    {
        $this->table->where('id_asrama', $id);
        return $this->table->delete();
    }
}