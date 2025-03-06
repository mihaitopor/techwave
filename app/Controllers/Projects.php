<?php

namespace App\Controllers;

use App\Services\ViewService;
use CodeIgniter\Controller;

class Projects extends BaseController
{
    protected $viewService;

    public function __construct()
    {
        $this->viewService = new ViewService();
    }

    public function index()
    {
        return $this->renderPage('projects', 'TechWave', 'TechWave projects', 'about TechWave we transform businesses in art professional developers and artists artists Cluj-Napoca tech-art new media tech&art');
    }

    public function theprofile()
    {
        return $this->renderPage('theprofile', 'Cheres Ioana', 'Cheres Ioana', 'Cheres Ioana artist developer Tech Art tech and art tech&art tech-art Tech-art artists Cluj-Napoca tech-art new media tech&art AI artificial intelligence ai&art ai art');
    }

    public function therapy()
    {
        return $this->renderPage('therapy', 'Bianca Varvara', 'Bianca Varvara therapy website', 'Bianca Varvara, Techwave, Website, Therapy');
    }

    public function srrom()
    {
        return $this->renderPage('srrom', 'SRROM by Techwave', 'SRROM', 'SRROM, Techwave');
    }

    public function cartoon()
    {
        return $this->renderPage('cartoon', 'Cartoon generation', 'Cartoon generation', 'Cartoon generation AI art Artificial intelligence artist developer Tech Art tech and art tech&art tech-art Tech-art artists Cluj-Napoca tech-art new media tech&art AI artificial intelligence ai&art ai art');
    }

    public function mindbugs_platform()
    {
        return $this->renderPage('mindbugs_platform', 'Mindbugs', 'Mindbugs platform AI Art Exhibition', 'Mindbugs AI art Artificial intelligence artist developer Tech Art tech and art tech&art tech-art Tech-art artists Cluj-Napoca tech-art new media tech&art AI artificial intelligence ai&art ai art');
    }

    public function transparency()
    {
        return $this->renderPage('transparency', 'Transparency', 'AI Art Exhibition', 'Mindbugs AI art Artificial intelligence artist developer Tech Art tech and art tech&art tech-art Tech-art artists Cluj-Napoca tech-art new media tech&art AI artificial intelligence ai&art ai art');
    }

    public function mindbugs_app()
    {
        return $this->renderPage('mindbugs_app', 'Mindbugs', 'Mindbugs', 'Mindbugs AI art Artificial intelligence artist developer Tech Art tech and art tech&art tech-art Tech-art artists Cluj-Napoca tech-art new media tech&art AI artificial intelligence ai&art ai art');
    }

    public function massage_administration()
    {
        return $this->renderPage('massage_administration', 'Administration platform', 'Techwave administration platform', 'Mindbugs AI art Artificial intelligence artist developer Tech Art tech and art tech&art tech-art Tech-art artists Cluj-Napoca tech-art new media tech&art AI artificial intelligence ai&art ai art');
    }

    public function massage_administration_ro()
    {
        return $this->renderPage('massage_administration_ro', 'Platforma Administrare', 'Platforma administrare techwave', 'Mindbugs AI art Artificial intelligence artist developer Tech Art tech and art tech&art tech-art Tech-art artists Cluj-Napoca tech-art new media tech&art AI artificial intelligence ai&art ai art');
    }

    public function kg()
    {
        return $this->renderPage('kg', 'MindBugs Discovery', 'MindBugs Discovery', 'Mindbugs AI art Artificial intelligence artist developer Tech Art tech and art tech&art tech-art Tech-art artists Cluj-Napoca tech-art new media tech&art AI artificial intelligence ai&art ai art');
    }

    public function mihai()
    {
        return $this->renderPage('mihai', 'Mihai Topor', 'Mihai Topor', 'Mihai Topor developer techwave php codeigniter artists Cluj-Napoca tech-art new media tech&art');
    }

    public function ioana()
    {
        return $this->renderPage('ioana', 'Cheres Ioana', 'Cheres Ioana', 'Cheres Ioana artist developer Tech Art tech and art tech&art tech-art Tech-art artists Cluj-Napoca tech-art new media tech&art AI artificial intelligence');
    }

    private function renderPage($view, $title, $description, $keywords)
    {
        $viewsCode = $view . '_' . date('m_Y');
        $this->viewService->increaseViewByCode($viewsCode);

        $data = [
            'meta_title' => $title,
            'meta_description' => $description,
            'meta_keywords' => $keywords
        ];

        return view('header', $data)
            . view($view)
            . view('footer');
    }
}
