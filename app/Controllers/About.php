<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data['meta_title'] = 'TechWave';
        $data['meta_description'] = 'about TechWave';
        $data['meta_keywords'] = 'about TechWave we transform businesses in art professional developers and artists Cluj-Napoca tech-art new media tech&art';
        echo view('header', $data);
        echo view('about');
        echo view('footer');

    }
}