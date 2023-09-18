<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class UserController extends BaseController
{

    public function profile($page = 'profile')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException("not found file " . $page);
        }
        $data['title'] = ucfirst($page);
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
    public function create()
    {
        return view('pages/create_user');
    }
    public function store()
    {
        $page = 'create_user';
        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
            'title' => ''
        ];
        return view('templates/header', $data)
            . view('pages/profile')
            . view('templates/footer');
    }

}