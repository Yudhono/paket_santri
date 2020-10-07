<?php namespace App\Models;

use CodeIgniter\Model;

class KategoriPaketModel extends Model
{
    protected $table;

    public function __construct() {

        parent::__construct();
        
        $db = \Config\Database::connect();
        
        $this->table = $this->db->table('kategori_paket');
    }

    public function get_kategori()
    {
        return $this->table->get()->getResultArray();
    }

    public function insert_kategori($data)
    {
        return $this->table->insert($data);
    }

    public function edit_kategori($id)
    {
        return $this->table->where('id_kategori', $id)->get()->getRowArray();
    }

    public function update_kategori($data, $id)
    {
        $this->table->set($data);
        $this->table->where('id_kategori', $id);
        return $this->table->update(); 
    }

    public function delete_kategori($id)
    {
        $this->table->where('id_kategori', $id);
        return $this->table->delete();
    }
}