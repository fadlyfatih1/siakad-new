<?php

class Pembayaran extends CI_Controller
{
    public function index()
    {
        // Path ke file PDF
        $filePath = FCPATH . 'uploads/kwitansi.pdf';

        // Periksa apakah file ada
        if (file_exists($filePath)) {
            // Set header untuk mengirimkan file PDF ke browser
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="' . basename($filePath) . '"');
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');

            // Baca dan kirim konten file PDF ke browser
            @readfile($filePath);
            exit;
        } else {
            show_404(); // Tampilkan halaman 404 jika file tidak ditemukan
        }
    }
}
