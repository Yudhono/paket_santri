<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KategoriPaketModel;

class Kategori extends Controller
{
    
    protected $KategoriPaketModel;
    
    protected $request;

    public function __construct() {
        $this->KategoriPaketModel = new KategoriPaketModel();
        
        $this->request = \Config\Services::request();
    }

	public function index()
	{
        
        $data['kategori'] = $this->KategoriPaketModel->get_kategori();
        
        return view('Admin/Indexkategori', $data);
    }
    
    public function create()
    {
        return view('Admin/Admininputkategori');
    }

    public function store()
    {
        
        $nama_kat = $this->request->getPost('nama_kategori');

        $data = [
            'nama_kategori' => $nama_kat,
        ];

        $simpan = $this->KategoriPaketModel->insert_kategori($data);

        if($simpan)
        {
            session()->setFlashdata('success', 'Data kategori berhasil ditambahkan');
            
            return redirect()->to(base_url('kategori')); 
        }
    }

    public function edit($id)
	{
        $data['kategori'] = $this->KategoriPaketModel->edit_kategori($id);
        
        return view('Admin/editkategori', $data);
    }

    public function update($id)
    {
        $nama_kat = $this->request->getPost('nama_kategori');    

        $data = [
            'nama_kategori' => $nama_kat,
        ];

        $ubah = $this->KategoriPaketModel->update_kategori($data, $id);
        
        if($ubah)
        {
            session()->setFlashdata('info', 'Data berhasil diupdate');
            
            return redirect()->to(base_url('kategori')); 
        }
    }

    public function delete($id)
    {
        $hapus = $this->KategoriPaketModel->delete_kategori($id);

        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted kategori successfully');
            
            return redirect()->to(base_url('kategori'));
        }
    }

}
