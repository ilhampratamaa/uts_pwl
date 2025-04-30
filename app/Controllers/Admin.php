<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController 
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        if(!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }
        
        // Check if user is admin (level 1)
        if($this->session->get('level') != '1') {
            return redirect()->to('/login');
        }
    }

    public function adminDashboard(): string
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'v_dashboard',
            'username' => $this->session->get('username')
        ];
        return view('v_template_back_end', $data);
    }
}