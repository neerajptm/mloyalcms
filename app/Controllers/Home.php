<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = array();
        return view('inc/header',$data);
        return view('homepg',$data);
        return view('inc/footer',$data);
    }
}
