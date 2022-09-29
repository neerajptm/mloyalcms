<?php

namespace App\Controllers;
date_default_timezone_set('Asia/Kolkata');

use App\Models\Lbackend_model;
use App\Models\Post;


class Lbackend extends BaseController
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

    public function index(){
        $session = session();
        $loggedin = session('loggedin');
        $validation =  \Config\Services::validation();
        $data = array();
        if(!$loggedin){
            return redirect()->to(base_url() . '/login');
        }
        $dispmsg = $this->request->getGet('msg');  
        $data['dispmsg'] = $dispmsg;
        $data['validation'] = $validation;
        $dispflashmsg = session('dispflashmsg');
        $data['dispflashmsg'] = $dispflashmsg;

        $uid = session('uid');
        $lbkndmodel = new Lbackend_model();
        $postmodel = new Post();
        $frmd = array();
        $fromData = $lbkndmodel->getData($uid);
        if($fromData){
            $frmd = $fromData[0];
        }
        
        $data['frmd'] = $frmd;

        $data['rtout'] = $this->rtout;   

        $allPosts = $postmodel->getPostByUid($uid);
        $data['allPosts'] = $allPosts;

        $data['title'] = "Backend Dashboard";
        echo view('front/inc/header',$data);
        
        if($frmd){
            echo view('front/bkndbroadUpdt',$data);
        }else {
            echo view('front/bkndbroad',$data);
        }
        
        echo view('front/inc/footer',$data);
    }

    public function lBacendfrmsave(){
        $session = session();
        $loggedin = session('loggedin');
        if(!$loggedin){
            return redirect()->to(base_url() . '/login');
        }
    }

    public function createNewPost(){
        $session = session();
        $loggedin = session('loggedin');
        $validation =  \Config\Services::validation();
        if(!$loggedin){
            return redirect()->to(base_url() . '/login');
        }

        $dispmsg = $this->request->getGet('msg');  
        $data['dispmsg'] = $dispmsg;
        $data['validation'] = $validation;
        $dispflashmsg = session('dispflashmsg');
        $data['dispflashmsg'] = $dispflashmsg;

        $data['rtout'] = $this->rtout;   

        $data['title'] = "Backend Dashboard";
        echo view('front/inc/header',$data);
        echo view('front/newpostc.php',$data);
        echo view('front/inc/footer',$data);
    }

    public function savenPost(){
        $session = session();
        $loggedin = session('loggedin');
        $validation =  \Config\Services::validation();
        if(!$loggedin){
            return redirect()->to(base_url() . '/login');
        }

        $dispmsg = $this->request->getGet('msg');  
        $data['dispmsg'] = $dispmsg;
        $data['validation'] = $validation;
        $dispflashmsg = session('dispflashmsg');
        $data['dispflashmsg'] = $dispflashmsg;

        $inputs = $this->validate([
            'postname' => 'required',
            'editor' => 'required'
        ]);

        if (!$inputs) {
            echo view('front/inc/header',$data);
            echo  view('front/newpostc',$data);
            echo view('front/inc/footer',$data);
        }else {
            $postmodel = new Post();
            $postname = $this->request->getPost('postname');
            $postdesc = $this->request->getPost('editor');
            $insData = array();
            $insData['slug'] = strtolower(str_replace(' ','-',$postname));
            $insData['uid'] = session('uid');
            $insData['post_name'] = $postname;
            $insData['html'] = $postdesc;
            $insData['created'] = date("Y-m-d H:i:s");
            $insData['updated'] = date("Y-m-d H:i:s");
            $isinserted =  $postmodel->AddPost($insData);
            if($isinserted){
                $session->setFlashdata('dispflashmsg','Post Created Successfully');
                return redirect()->to(base_url() . '/posts');
            }else {
                $session->setFlashdata('dispflashmsg','Unable to create new post');
                return redirect()->to(base_url() . '/posts');
            }
        }


        
    }

    public function bkendUpdt(){
        $session = session();
        $loggedin = session('loggedin');
        $validation =  \Config\Services::validation();
        if(!$loggedin){
            return redirect()->to(base_url() . '/login');
        }

        $dispmsg = $this->request->getGet('msg');  
        $data['dispmsg'] = $dispmsg;
        $data['validation'] = $validation;
        $dispflashmsg = session('dispflashmsg');
        $data['dispflashmsg'] = $dispflashmsg;

        $inputs = $this->validate([
            'campid' => 'required',
            'selpostbanner' => 'required',
            'selpostmobinp' => 'required',
            'selpostdisbanner' => 'required',
            'selpostshopnow' => 'required',
            'pid' => 'required',
            
        ]);

        if (!$inputs) {
            echo view('front/inc/header',$data);
            echo  view('front/newpostc',$data);
            echo view('front/inc/footer',$data);
        }else {
            $lbkndmodel = new Lbackend_model();
            $campid = $this->request->getPost('campid');
            $selpostbanner = $this->request->getPost('selpostbanner');
            $selpostmobinp = $this->request->getPost('selpostmobinp');
            $selpostdisbanner = $this->request->getPost('selpostdisbanner');
            $selpostshopnow = $this->request->getPost('selpostshopnow');
            // print_r($selpostshopnow);die;
            $pid = $this->request->getPost('pid');
            $pid = base64_decode($pid);
            $uid = session('uid');
            $insData = array();
            $insData['campaign_id'] = $campid;
            $insData['banner_post_id'] = $selpostbanner;
            $insData['mobile_input_post_id'] = $selpostmobinp;
            $insData['discount_post_id'] = $selpostdisbanner;
            $insData['shop_now_post_id'] = implode('|',$selpostshopnow);
            $insData['updated'] = date("Y-m-d H:i:s");
            $isiupdated =  $lbkndmodel->UpdtbkndData($insData, $pid, $uid);
            if($isiupdated){
                $session->setFlashdata('dispflashmsg','Updated Successfully');
                return redirect()->to(base_url() . '/');
            }else {
                $session->setFlashdata('dispflashmsg','Unable to Update data');
                return redirect()->to(base_url() . '/');
            }
        }


        
    }

    public function hometemplate($uid){
        $data = array();
        $lbkndmodel = new Lbackend_model();
        $fromData = $lbkndmodel->getData($uid);
        // print_r($fromData);die;

        if($fromData){
            $frmd = $fromData[0];
            $campaign_id = $frmd->campaign_id;
            $banner_post_id = $frmd->banner_post_id;
            $mobile_input_post_id = $frmd->mobile_input_post_id;
            $discount_post_id = $frmd->discount_post_id;
            $shop_now_post_id = $frmd->shop_now_post_id;
            $created = $frmd->created;
            $updated = $frmd->updated;


            $postmodel = new Post();
            $bannerPost = $postmodel->getPostById($banner_post_id);
            // print_r($bannerPost);die;
            $mobile_input_post_d = $postmodel->getPostById($mobile_input_post_id);
            $discount_post = $postmodel->getPostById($discount_post_id);
            $shop_now_post_id_Arr = explode('|',$shop_now_post_id);
            $shopnowData = array();
            foreach($shop_now_post_id_Arr as $shpnowId){
                $shop_now_post_data =  $postmodel->getPostById($shpnowId);
                $shop_now_post_data = (Array)$shop_now_post_data;
                // print_r($shop_now_post_data);die;
                array_push($shopnowData, $shop_now_post_data);
            }

            // print_r($shopnowData);die;

            $data['campaign_id'] = $campaign_id;
            $data['brand_logo'] = session('brand_logo');
            $data['bannerPost'] = $bannerPost;
            $data['mobile_input_post_d'] = $mobile_input_post_d;
            $data['discount_post'] = $discount_post;
            $data['shopnowData'] = $shopnowData;
            
            $data['title'] = $uid;
            echo view('dsb/inc/header',$data);
            echo view('dsb/homepg',$data);
            echo view('dsb/inc/footer',$data);
        }

        

        
    }

    public function allPosts(){
        $session = session();
        $loggedin = session('loggedin');
        $validation =  \Config\Services::validation();
        $data = array();
        if(!$loggedin){
            return redirect()->to(base_url() . '/login');
        }
        $dispmsg = $this->request->getGet('msg');  
        $data['dispmsg'] = $dispmsg;
        $data['validation'] = $validation;
        $dispflashmsg = session('dispflashmsg');
        $data['dispflashmsg'] = $dispflashmsg;

        $uid = session('uid');
        
        $postmodel = new Post();
        
        $data['rtout'] = $this->rtout;   

        $allPosts = $postmodel->getPostByUid($uid);
        $data['allPosts'] = $allPosts;

        $data['title'] = "Backend Dashboard All Posts";
        echo view('front/inc/header',$data);
        echo view('front/allposts',$data);        
        echo view('front/inc/footer',$data);
    }

    public function updtPosts($postid){
        $session = session();
        $loggedin = session('loggedin');
        $validation =  \Config\Services::validation();
        if(!$loggedin){
            return redirect()->to(base_url() . '/login');
        }
        $postmodel = new Post();
        $pid = base64_decode($postid);
        $postData = $postmodel->getPostById($pid);

        if($postData){
            $dispmsg = $this->request->getGet('msg');  
            $data['dispmsg'] = $dispmsg;
            $data['validation'] = $validation;
            $dispflashmsg = session('dispflashmsg');
            $data['dispflashmsg'] = $dispflashmsg;

            $data['rtout'] = $this->rtout;   
            $data['postData'] = $postData;   

            $data['title'] = "Backend Dashboard";
            echo view('front/inc/header',$data);
            echo view('front/editpost.php',$data);
            echo view('front/inc/footer',$data);
        }else {
            $session->setFlashdata('dispflashmsg','Post not found');
            return redirect()->to(base_url() . '/posts');
        }

        
    }

    public function updatePost(){
        $session = session();
        $loggedin = session('loggedin');
        $validation =  \Config\Services::validation();
        if(!$loggedin){
            return redirect()->to(base_url() . '/login');
        }

        $dispmsg = $this->request->getGet('msg');  
        $data['dispmsg'] = $dispmsg;
        $data['validation'] = $validation;
        $dispflashmsg = session('dispflashmsg');
        $data['dispflashmsg'] = $dispflashmsg;

        $inputs = $this->validate([
            'postname' => 'required',
            'editor' => 'required',
            'pid' => 'required'            
        ]);

        if (!$inputs) {
            echo view('front/inc/header',$data);
            echo  view('front/newpostc',$data);
            echo view('front/inc/footer',$data);
        }else {
            $postmodel = new Post();
            $postname = $this->request->getPost('postname');
            $editor = $this->request->getPost('editor');
            $pid = $this->request->getPost('pid');
            $pid = base64_decode($pid);
            $uid = session('uid');
            $insData = array();
            $insData['post_name'] = $postname;
            $insData['html'] = $editor;
            $insData['updated'] = date("Y-m-d H:i:s");
            $isiupdated =  $postmodel->UpdtPostData($insData, $pid, $uid);
            if($isiupdated){
                $session->setFlashdata('dispflashmsg','Updated Successfully');
                return redirect()->to(base_url() . '/posts');
            }else {
                $session->setFlashdata('dispflashmsg','Unable to Update data');
                return redirect()->to(base_url() . '/posts');
            }
        }

    }

    public function Logout(){
        $session = session();
        $session->destroy();
        $session->setFlashdata('dispflashmsg','Logged out');
        return redirect()->to(base_url() . '/login');
    }
}