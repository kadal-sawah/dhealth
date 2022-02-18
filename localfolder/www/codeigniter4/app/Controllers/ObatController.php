<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Obat;

class ObatController extends BaseController
{

    public function index()
    {
        $table = new Obat();

        $render = [];
        $render['titleContent'] = 'Master Obat';
        print_r($table->get());
        exit(1);
        return view('pages/obat/index', $render);
    }
}
