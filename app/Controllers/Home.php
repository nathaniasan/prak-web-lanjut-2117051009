<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function nama($nama = "", $kelas = "", $npm = ""): string
    {
        $data = [
            'title' => 'profilku',
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        return view('templates/header', $data)
            . view('pages/profile')
            . view('templates/footer');
    }
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
}