<?php

namespace App\Controllers;

use App\Services\ViewService;
use App\Services\EmailService;
use CodeIgniter\Controller;

class Home extends BaseController
{
    protected $viewService;
    protected $emailService;

    public function __construct()
    {
        $this->viewService = new ViewService();
        $this->emailService = new EmailService();
    }

    public function index()
    {
        $viewsCode = 'home_' . date('m_Y');
        $this->viewService->increaseViewByCode($viewsCode);

        $data = [
            'meta_title' => 'TechWave',
            'meta_description' => 'TechWave',
            'meta_keywords' => 'TechWave Tech Art tech and art tech&art tech-art Tech-art IT website site techwave tech-art new media tech&art AI artificial intelligence'
        ];

        return view('header', $data)
            . view('home')
            . view('footer');
    }

    public function contact()
    {
        $request = service('request');
        $postData = $request->getPost();

        // Validation rules
        $rules = [
            'name'    => 'required|trim',
            'email'   => 'required|trim|valid_email',
            'phone'   => 'required|trim',
            'message' => 'required|trim'
        ];

        if (!$this->validate($rules)) {
            return $this->response
                ->setJSON([
                    'text' => 'Error',
                    'type' => 'Error at parsing the fields'
                ])
                ->setStatusCode(500);
        }

        // Check for honeypot field
        if (!empty($postData["ff_name"])) {
            return $this->response
                ->setJSON([
                    'text' => 'Error',
                    'type' => 'Spam detected'
                ])
                ->setStatusCode(400);
        }

        $this->emailService->sendEmail(
            $postData['message'],
            "mike.topor@yahoo.com",
            $postData['email'],
            $postData['name'],
            $postData['phone']
        );
        return redirect()->to('');
    }
}
