<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AsramaModel;
use App\Models\SantriModel;
use App\Models\KategoriPaketModel;
use App\Models\DataPaketModel;
use App\Models\AwalModel;

class Awal extends Controller
{
    
    protected $AsramaModel;
    protected $SantriModel;
    protected $KategoriPaketModel;
    protected $DataPaketModel;
    protected $AwalModel;
    
    protected $request;

    public function __construct() {

        
        $this->AsramaModel        = new AsramaModel();
        $this->SantriModel        = new SantriModel();
        $this->KategoriPaketModel = new KategoriPaketModel();
        $this->DataPaketModel     = new DataPaketModel();
        $this->AwalModel          = new AwalModel();
        
        $this->request = \Config\Services::request();
        
    }

	public function index()
	{
        $data['paket'] = $this->AwalModel->get_all();

        //print_r($data);
        return view('Admin/Adminindex', $data);
    }

}
