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

        $data = [
            'judul' => 'Home',
            'page' => 'v_home',
        ];   
        return view('v_template_front_end', $data);
    }
}
