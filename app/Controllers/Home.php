<?php

namespace App\Controllers;
date_default_timezone_set('Asia/Kolkata');

use App\Models\User;


class Home extends BaseController
{
    public function __construct(){        
       
        $this->remote_addr = $_SERVER['REMOTE_ADDR'];
        $this->security = \Config\Services::security();

        $route_uri_arr = explode('/',$_SERVER['REQUEST_URI']);
        $route_uri_arnew = (array_values(array_filter($route_uri_arr)));
        $this->rtout = '';
        if(count($route_uri_arnew) > 2){
            $rtoutm0 = explode("?",$route_uri_arnew[2]);
            $this->rtout  = $rtoutm0[0];
        }
    }
    public function index()
    {
        $data = array();
        $data['title'] = "Home page";
        echo view('front/inc/header',$data);
        echo view('front/homepg',$data);
        echo view('front/inc/footer',$data);
    }

    public function login(){
        $session = session();
        $validation =  \Config\Services::validation();
        $data = array();
        $loggedin = session('loggedin');        
        $data['loggedin'] = $loggedin;
        $dispmsg = $this->request->getGet('msg');  
        $data['dispmsg'] = $dispmsg;
        $data['validation'] = $validation;
        
        $data['rtout'] = $this->rtout;        
           
        $session->destroy();
        $data['redirect_url'] = base_url().'/dashboard';
        if(isset($_SERVER['HTTP_REFERER'])){
            $data['redirect_url'] = $_SERVER['HTTP_REFERER'];
        }
        echo view('front/inc/header',$data);
        echo  view('front/login',$data);
        echo view('front/inc/footer',$data);
        
    }

    function validate_login(){
        $session = session();
        $uid = trim($this->request->getPost('uid'));
        $pwd = trim($this->request->getPost('pwd'));

        $usermodel = new User();
        $udata = $usermodel->get_user_by_uid($uid);
        print_r($udata);
        if($udata){
            $uidDb = $udata[0]['uid'];
            $pwdDb = $udata[0]['pwd'];
            $active = $udata[0]['active'];

            if(md5($uid) === $uidDb){
                $newdata = $udata;
                $newdata['loggedin'] = 1;
                $session->set($newdata);
            }
        }
    }
}
