<?php

namespace App\Controllers;

class Anexe extends BaseController
{

    public function gdpr()
    {
        $data['meta_title'] = 'TechWave';
        $data['meta_description'] = 'TechWave';
        $data['meta_keywords'] = 'TechWave Tech Art tech and art tech&art tech-art Tech-art IT website site techwave tech-art new media tech&art AI artificiall intelligence';
        echo view('header', $data);
        echo view('gdpr');
        echo view('footer');

    }
}