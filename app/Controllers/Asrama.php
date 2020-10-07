<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AsramaModel;

class Asrama extends Controller
{
    
    protected $AsramaModel;
    
    protected $request;

    public function __construct() {

        // Mendeklarasikan class ProductModel menggunakan $this->ProductModel
        $this->AsramaModel = new AsramaModel();
        // Mendeklarasikan service request menggunakan $this->request
        $this->request = \Config\Services::request();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }

	public function index()
	{
        // Memanggil function get_product() di dalam ProductModel dan menampungnya di variabel array product
        $data['asrama'] = $this->AsramaModel->get_asrama();
        // Mengirim data ke dalam view
        return view('Admin/Indexasrama', $data);
    }
    
    public function create()
    {
        return view('Admin/Admininputasrama');
    }

    public function store()
    {
        // Mengambil value dari form dengan method POST
        $nama_as = $this->request->getPost('nama_asrama');
        $ged = $this->request->getPost('gedung');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nama_asrama' => $nama_as,
            'gedung' => $ged
        ];

        /* 
        Membuat variabel simpan yang isinya merupakan memanggil function 
        insert_product dan membawa parameter data 
        */
        $simpan = $this->AsramaModel->insert_asrama($data);

        // Jika simpan berhasil, maka ...
        if($simpan)
        {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Data asrama berhasil ditambahkan');
            // Redirect halaman ke product
            return redirect()->to(base_url('asrama')); 
        }
    }

    public function edit($id)
	{
        // Memanggil function edit_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel array product
        $data['asrama'] = $this->AsramaModel->edit_asrama($id);
        // Mengirim data ke dalam view
        return view('Admin/editasrama', $data);
    }

    public function update($id)
    {
        // Mengambil value dari form dengan method POST
        $nama_as = $this->request->getPost('nama_asrama');
        $ged = $this->request->getPost('gedung');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nama_asrama' => $nama_as,
            'gedung' => $ged
        ];

        /* 
        Membuat variabel ubah yang isinya merupakan memanggil function 
        update_product dan membawa parameter data beserta id
        */
        $ubah = $this->AsramaModel->update_asrama($data, $id);
        
        // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Data berhasil diupdate');
            // Redirect ke halaman product
            return redirect()->to(base_url('asrama')); 
        }
    }

    public function delete($id)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $hapus = $this->AsramaModel->delete_asrama($id);

        // Jika berhasil melakukan hapus
        if($hapus)
        {
             // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('asrama'));
        }
    }

}
