<?php

class About {
    public function index($nama = 'Zahra', $pekerjaan = 'Mahasiswa') {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page() {
        echo 'About/page';
    }
}