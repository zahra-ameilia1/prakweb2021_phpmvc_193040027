<?php

class Mahasiswa extends Controller {
    public function index (){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        $this->view('templates/header');
        $this->view('mahasiswa/index');
        $this->view('templates/footer');
    }
}