<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = array();
        return view('front/inc/header',$data);
        return view('front/homepg',$data);
        return view('front/inc/footer',$data);
    }
}
