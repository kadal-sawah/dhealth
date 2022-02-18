<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Obat;
use CodeIgniter\API\ResponseTrait;

class ObatController extends BaseController
{

    use ResponseTrait;

    public function __construct()
    {
        $this->request = service('request');
        $this->table = new Obat();

    }

    public function index()
    {
        $render = [];
        $render = [ 
            'titleContent' => 'Master Obat',
            'data'         => $this->table->get()->getResult('array'),
        ];
        return view('pages/obat/index', $render);
    }

    public function store(){
        $table = new Obat();
        $payload = $this->request->getPost();
        $this->table->insert($payload);
        return redirect()->back();
    }

    public function delete($id){
        $this->table->where('id',$id);
        $this->table->delete();
        return redirect()->back();
    }
}