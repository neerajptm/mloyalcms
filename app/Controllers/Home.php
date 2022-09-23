<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = array();
        $data['title'] = "Home page";
        echo view('front/inc/header',$data);
        echo view('front/homepg',$data);
        echo view('front/inc/footer',$data);
    }
}
