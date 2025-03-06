<?php

namespace App\Controllers;

use App\Services\ViewService;

class Contact extends BaseController
{
    protected $viewService;

    public function __construct()
    {
        $this->viewService = new ViewService();
    }

    public function index()
    {
        $viewsCode = 'contact_' . date('m_Y');
        $this->viewService->increaseViewByCode($viewsCode);

        $data = [
            'meta_title' => 'TechWave',
            'meta_description' => 'TechWave contact',
            'meta_keywords' => 'TechWave contact web development websites Cluj-Napoca IT programming art tech tech-art new media tech&art'
        ];

        return view('header', $data)
            . view('contact');
    }
}
