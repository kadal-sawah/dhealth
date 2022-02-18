<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Alkes extends BaseController
{
    public function index()
    {
        $render = [];
        $render['titleContent'] = 'Master Alat Kesehatan';

        return view('pages/alkes/index', $render);

    }
}
