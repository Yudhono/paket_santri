<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AsramaModel;
use App\Models\SantriModel;

class Santri extends Controller
{
    
    protected $AsramaModel;
    protected $SantriModel;
    
    protected $request;

    public function __construct() {

        $this->AsramaModel = new AsramaModel();
        $this->SantriModel = new SantriModel();
        
        $this->request = \Config\Services::request();
        
    }

	public function index()
	{
        $data['santri'] = $this->SantriModel->get_santri_asrama();

        return view('Admin/IndexSantri', $data);
    }
    
    public function create()
    {
        $data_asrama['asrama'] = $this->AsramaModel->get_asrama();

        return view('Admin/Admininputsantri', $data_asrama);
    }

    public function store()
    {
        $NIS                    = $this->request->getPost('NIS');
        $nama_santri            = $this->request->getPost('nama_santri');
        $alamat                 = $this->request->getPost('alamat');
        $id_asrama              = $this->request->getPost('id_asrama');
        $total_paket_diterima   = $this->request->getPost('total_paket_diterima');

        $data = [
            'NIS'                   => $NIS,
            'nama_santri'           => $nama_santri,
            'alamat'                => $alamat,
            'id_asrama'             => $id_asrama,
            'total_paket_diterima'  => $total_paket_diterima,

        ];

        $simpan = $this->SantriModel->insert_santri($data);

        if($simpan)
        {
            session()->setFlashdata('success', 'Data santri berhasil ditambahkan');

            return redirect()->to(base_url('santri')); 
        }
    }

    public function edit($NIS)
	{
        $data = array();
        $data['asrama'] = $this->AsramaModel->get_asrama();
        $data['santri'] = $this->SantriModel->edit_santri($NIS);
        
        return view('Admin/editsantri', $data);
    }

    public function update($NIS)
    {
        
        $NIS                    = $this->request->getPost('NIS');
        $nama_santri            = $this->request->getPost('nama_santri');
        $alamat                 = $this->request->getPost('alamat');
        $id_asrama              = $this->request->getPost('id_asrama');
        $total_paket_diterima   = $this->request->getPost('total_paket_diterima');

        $data = [
            'NIS'                   => $NIS,
            'nama_santri'           => $nama_santri,
            'alamat'                => $alamat,
            'id_asrama'             => $id_asrama,
            'total_paket_diterima'  => $total_paket_diterima,

        ];

        $ubah = $this->SantriModel->update_santri($data, $NIS);
        
        if($ubah)
        {
            session()->setFlashdata('info', 'Data berhasil diupdate');
         
            return redirect()->to(base_url('santri')); 
        }
    }

    public function delete($NIS)
    {
        $hapus = $this->SantriModel->delete_santri($NIS);

        if($hapus)
        {
            session()->setFlashdata('warning', 'Data Santri Berhasil Dihapus');
            
            return redirect()->to(base_url('santri'));
        }
    }

}
