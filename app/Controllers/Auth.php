<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Login',
        ];
        return view('v_login', $data);
    }

    public function Login() 
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!!'
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!!'
                ]
            ],
        ])) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $level = $this->request->getPost('level');
            
            // Set session data
            $session = session();
            
            if ($username == 'admin' && $password == '123' && $level == '1') {
                // Admin login successful
                $session->set([
                    'username' => $username,
                    'level' => $level,
                    'logged_in' => true
                ]);
                return redirect()->to('/admin');
            } elseif ($username == 'user' && $password == '456' && $level == '2') {
                // User login successful
                $session->set([
                    'username' => $username,
                    'level' => $level,
                    'logged_in' => true
                ]);
                return redirect()->to('/home');
            } else {
                // Invalid credentials
                $session->setFlashdata('error', 'Username, password, atau level salah');
                return redirect()->to('/login')->withInput();
            }

        } else {
            return redirect()->to('/login')->withInput();
        }
    }
    
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}