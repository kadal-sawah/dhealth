<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Obat extends BaseController
{
    public function index()
    {
        $render = [];
        $render['titleContent'] = 'Master Obat';

        return view('pages/obat/index', $render);
    }
}
