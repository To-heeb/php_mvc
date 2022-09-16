<?php

class Pages extends Controller
{


    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome',
        ];

        $this->view('inc/header', $data);
        $this->view('pages/index', $data);
        $this->view('inc/footer', $data);
    }

    public function about()
    {
        $data = ['title' => 'About Us'];

        $this->view('pages/about', $data);
    }
}
