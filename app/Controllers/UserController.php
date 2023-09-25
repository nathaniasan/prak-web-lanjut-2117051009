<?php

namespace App\Controllers;

use App\Models\UserModel;

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
    public function store()
    {
        $userModel = new UserModel();

        if (
            !$this->validate([
                'nama' => 'required|is_unique[user.nama]'
            ])
        ) {
            // mengirim notifikasi pesan kesalahan
            $validation = \Config\Services::validation();

            return redirect()->to('/user/create')->withInput()->with('validation', $validation);
        }

        $userModel->saveUser($datas =
            [
                'nama' => $this->request->getVar('nama'),
                'id_kelas' => $this->request->getVar('kelas'),
                'npm' => $this->request->getVar('npm'),
            ]); {
        }
        $page = 'create_user';
        // $data yang mau dikirimkan dan ditampilkan ke page profil setelah create
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

    public function create()
    {
        session();
        $data = [
            'title' => 'Home Profile',

        ];

        // metthod ini digunakan untuk menampilkan dropdown kelas
        $kelas = [
            [
                'id' => 1,
                'nama_kelas' => 'A'
            ],
            [
                'id' => 2,
                'nama_kelas' => 'B'
            ],
            [
                'id' => 3,
                'nama_kelas' => 'C'
            ],
            [
                'id' => 4,
                'nama_kelas' => 'D'
            ],
        ];
        $data = [
            'kelas' => $kelas,
            'validation' => \Config\Services::validation()

        ];

        return view('pages/create_user', $data);
    }

}