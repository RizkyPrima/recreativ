<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        // data yang dikirim ke view
        $data = [
            'title' => 'Recreativ — Creative Services',
        ];

        echo view('layout/header', $data);
        echo view('home', $data);
        echo view('layout/footer', $data);
    }

    public function contact()
    {
        $request = service('request');
        $session = session();

        $name = $request->getPost('name');
        $email = $request->getPost('email');
        $message = $request->getPost('message');

        if (empty($name) || empty($email) || empty($message)) {
            $session->setFlashdata('error', 'Mohon lengkapi semua field.');
            return redirect()->back()->withInput();
        }

        // TODO: simpan ke DB / kirim email. Untuk demo kita simpan flash dan redirect
        $session->setFlashdata('success', 'Terima kasih, pesan telah terkirim. Kami akan menghubungi Anda.');
        return redirect()->to('/');
    }
}
