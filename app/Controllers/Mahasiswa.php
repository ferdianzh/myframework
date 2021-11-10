<?php

use Core\Controller;
use Core\Flasher;
use Models\MahasiswaModel;

class Mahasiswa extends Controller
{
    protected $mahasiswaModel;
    
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel;
    }

    public function index()
    {
        $data = [
            'judul' => 'Daftar Mahasiswa',
            'mhs'   => $this->mahasiswaModel->getAll(),
        ];
        
        return $this->view("mahasiswa/index", $data);
    }

    public function detail($id)
    {
        $data = [
            'judul' => 'Detail Mahasiswa',
            'mhs'   => $this->mahasiswaModel->where('id', $id)->get(),
        ];
        
        $this->view("templates/header", $data);
        $this->view("mahasiswa/detail", $data);
        $this->view("templates/footer");
    }

    public function add()
    {
        if ( $this->mahasiswaModel->save($_POST) > 0 ) {
            Flasher::setFlash("berhasil", "ditambahkan", "success");
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        } else {
            Flasher::setFlash("gagal", "ditambahkan", "danger");
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }

    public function delete($id)
    {
        if ( $this->mahasiswaModel->delete($id) > 0 ) {
            Flasher::setFlash("berhasil", "dihapus", "success");
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        } else {
            Flasher::setFlash("gagal", "dihapus", "danger");
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }
}