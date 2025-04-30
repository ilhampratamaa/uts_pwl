<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        if(!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }
    }

    public function homeDashboard(): string
    {
        if($this->session->get('level') != '2') {
            return redirect()->to('/login');
        }

        $data = [
            'judul' => 'Home',
            'page' => 'v_home',
            'username' => $this->session->get('username')
        ];   
        return view('v_template_front_end', $data);
    }
}