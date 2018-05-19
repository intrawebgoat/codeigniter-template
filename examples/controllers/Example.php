<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Example extends CI_Controller
{
    public function __Construct()
    {
        parent::__Construct();
        $this->template->title->set('Example');
    }

    public function login()
    {
        //code...
        $this->template->title->set_segment('Login');
        $this->template->render('login');
    }

    public function dashboard()
    {
        //code...
        $this->template->title->set_segment('Dashboard');
        $this->template->render('dashboard');
    }
}

