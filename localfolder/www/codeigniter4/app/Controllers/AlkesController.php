<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Alkes;

class AlkesController extends BaseController
{
    public function __construct()
    {
        $this->request = service('request');
        $this->table = new Alkes();
    }

    public function index()
    {
        $render = [];
        $render = [ 
            'titleContent' => 'Master Alat Kesehatan',
            'data'         => $this->table->get()->getResult('array'),
        ];
        return view('pages/alkes/index', $render);
    }

    public function store(){
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
