<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AsramaModel;
use App\Models\SantriModel;
use App\Models\KategoriPaketModel;
use App\Models\DataPaketModel;

class Paket extends Controller
{
    
    protected $AsramaModel;
    protected $SantriModel;
    protected $KategoriPaketModel;
    protected $DataPaketModel;
    
    protected $request;

    public function __construct() {

        $this->AsramaModel        = new AsramaModel();
        $this->SantriModel        = new SantriModel();
        $this->KategoriPaketModel = new KategoriPaketModel();
        $this->DataPaketModel     = new DataPaketModel();
        
        $this->request = \Config\Services::request();
        
    }

	public function index()
	{
        $data['paket'] = $this->DataPaketModel->get_paket_all();

        //print_r($data);
        return view('Admin/IndexPaket', $data);
    }
    
    public function create()
    {
        $data = array();
        $data['asrama']     = $this->AsramaModel->get_asrama();
        $data['santri']     = $this->SantriModel->get_santri();
        $data['kategori']   = $this->KategoriPaketModel->get_kategori();

        return view('Admin/Admininputpaket', $data);
    }

    public function store()
    {
        $id_paket               = $this->request->getPost('id_paket');
        $nama_paket             = $this->request->getPost('nama_paket');
        $tanggal_diterima       = $this->request->getPost('tanggal_diterima');
        $id_kategori            = $this->request->getPost('id_kategori');
        $NIS                    = $this->request->getPost('NIS');
        $id_asrama              = $this->request->getPost('id_asrama');
        $pengirim_paket         = $this->request->getPost('pengirim_paket');
        $isi_paket_yg_disita    = $this->request->getPost('isi_paket_yg_disita');
        $status_paket           = $this->request->getPost('status_paket');

        $data = [
            'id_paket'              => $id_paket,
            'nama_paket'            => $nama_paket,
            'tanggal_diterima'      => $tanggal_diterima,
            'id_kategori'           => $id_kategori,
            'NIS'                   => $NIS,
            'id_asrama'             => $id_asrama,
            'pengirim_paket'        => $pengirim_paket,
            'isi_paket_yg_disita'   => $isi_paket_yg_disita,
            'status_paket'          => $status_paket,

        ];

        $simpan = $this->KategoriPaketModel->insert_paket($data);

        if($simpan)
        {
            session()->setFlashdata('success', 'Data paket berhasil ditambahkan');

            return redirect()->to(base_url('paket')); 
        }
    }

    public function edit($id_paket)
	{
        $data = array();
        $data['asrama']     = $this->AsramaModel->get_asrama();
        $data['santri']     = $this->SantriModel->get_santri();
        $data['kategori']   = $this->KategoriPaketModel->get_kategori();
        $data['paket']      = $this->DataPaketModel->edit_paket($id_paket);
        
        return view('Admin/editpaket', $data);
    }

    public function update($id_paket)
    {
        
        $id_paket               = $this->request->getPost('id_paket');
        $nama_paket             = $this->request->getPost('nama_paket');
        $tanggal_diterima       = $this->request->getPost('tanggal_diterima');
        $id_kategori            = $this->request->getPost('id_kategori');
        $NIS                    = $this->request->getPost('NIS');
        $id_asrama              = $this->request->getPost('id_asrama');
        $pengirim_paket         = $this->request->getPost('pengirim_paket');
        $isi_paket_yg_disita    = $this->request->getPost('isi_paket_yg_disita');
        $status_paket           = $this->request->getPost('status_paket');

        $data = [
            'id_paket'              => $id_paket,
            'nama_paket'            => $nama_paket,
            'tanggal_diterima'      => $tanggal_diterima,
            'id_kategori'           => $id_kategori,
            'NIS'                   => $NIS,
            'id_asrama'             => $id_asrama,
            'pengirim_paket'        => $pengirim_paket,
            'isi_paket_yg_disita'   => $isi_paket_yg_disita,
            'status_paket'          => $status_paket,

        ];

        $ubah = $this->DataPaketModel->update_paket($data, $id_paket);
        
        if($ubah)
        {
            session()->setFlashdata('info', 'Data berhasil diupdate');
         
            return redirect()->to(base_url('paket')); 
        }
    }

    public function delete($id_paket)
    {
        $hapus = $this->DataPaketModel->delete_paket($id_paket);

        if($hapus)
        {
            session()->setFlashdata('warning', 'Data paket Berhasil Dihapus');
            
            return redirect()->to(base_url('paket'));
        }
    }

}
