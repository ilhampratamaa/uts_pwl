<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController 
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        if(!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }
        
        // Check if user is regular user (level 2)
        if($this->session->get('level') != '2') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function userDashboard(): string
    {
        $data = [
            'judul' => 'Dashboard User',
            'page' => 'v_dashboard_user',
            'username' => $this->session->get('username')
        ];
        return view('v_template_front_end', $data);
    }
}