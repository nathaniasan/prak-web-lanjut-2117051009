<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\UserModel;

use CodeIgniter\Exceptions\PageNotFoundException;

class UserController extends BaseController
{
    public $kelasModel;
    public $userModel;
    public function __construct()
    {

        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
        $kelas =  $this->kelasModel->getKelas();

        
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
    public function store()
    {
        $userModel = new UserModel();

        //validasi input
        if (
            !$this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tidak Boleh Kosong'
                    ]
                ],
                'npm' => [
                    'rules' => 'required|is_unique[user.npm]',
                    'errors' => [
                        'required' => 'Tidak Boleh Kosong',
                        'is_unique' => 'NPM Sudah Terpakai'
                    ]
                ]
            ])
        ) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
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
            'title' => 'Profile'
        ];
        return view('templates/header', $data)
            . view('pages/profile')
            . view('templates/footer');
    }

    public function create()
    {
        session();

        $kelasModel = new KelasModel();
        $kelas = $kelasModel->getKelas();

        // metthod ini digunakan untuk menampilkan dropdown kelas

        $data = [
            'kelas' => $kelas,
            'validation' => \Config\Services::validation(),
            'title' => 'Create User'
        ];

        return view('pages/create_user', $data);
    }

}