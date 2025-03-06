<?php

namespace App\Controllers;

use App\Models\ViewsModel;
use App\Services\ViewService;

class Blog extends BaseController
{
    protected $vs;

    public function __construct()
    {
        $this->vs = new ViewService();
    }

    public function index()
    {
        $viewsCode = 'blog_' . date('m_Y');
        $this->vs->increaseViewByCode($viewsCode);

        $data = [
            'meta_title' => 'TechWave',
            'meta_description' => 'TechWave projects',
            'meta_keywords' => 'about TechWave we transform businesses in art professional developers and artists artists Cluj-Napoca tech-art new media tech&art'
        ];

        return view('header', $data)
            . view('blog')
            . view('footer');
    }

    public function blog_massage()
    {
        $viewsCode = 'blog_massage_' . date('m_Y');
        $this->vs->increaseViewByCode($viewsCode);

        $data = [
            'meta_title' => 'Custom administration platform for wellness industry',
            'meta_description' => 'Custom administration platform for wellness industry',
            'meta_keywords' => 'Custom administration platform, Massage salon management software, Appointment scheduling software for massage salons, Payment processing for massage salons, Wellness industry software, User-friendly massage salon software, Rapid massage salon software, Client management for massage salons, Automated reminders for massage salons, Integration with massage salon website'
        ];

        return view('header', $data)
            . view('blogs/blog_massage')
            . view('footer');
    }

    public function blog_synergy()
    {
        $viewsCode = 'blog_synergy_' . date('m_Y');
        $this->vs->increaseViewByCode($viewsCode);

        $data = [
            'meta_title' => 'MindBugs discovery - journalistic tool',
            'meta_description' => 'Ai4Media Media Blend',
            'meta_keywords' => 'Misinformation artificial intelligence, Propaganda Analysis, Fake News Detection, Correlation Discovery, Centrality Assessments, Narrative Examination, Subject-Specific Analysis, Data-driven Insights, Misinformation Identification, Web Analytics, Machine Learning, AI in Journalism, Digital Media Monitoring, Big Data Analysis, News Verification, Information Validation, Deceptive Content Tracing, News Network Decoding, Fact-checking Algorithms, Truth Verification, AI-Based Fact-Checking.'
        ];

        return view('header', $data)
            . view('blogs/blog_synergy')
            . view('footer');
    }
}
