<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');  // Memuat URL helper
        $this->load->model('Poli_model');  // Memuat model Poli
        $this->load->model('Dokter_model');  // Memuat model Dokter

        // Periksa session login
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function index() {
        // Menampilkan dashboard admin
        $data['dokter'] = $this->Dokter_model->get_all_dokter(); // Menambahkan data dokter
        $this->load->view('dashboard', $data);
    }

    // Fungsi untuk memuat konten Kelola Pasien
    public function load_kelola_pasien() {
        $this->load->model('Pasien_model');
        $data['pasien'] = $this->Pasien_model->get_all_pasien();
        $this->load->view('kelola_pasien', $data);
    }

    // Fungsi untuk memuat konten Kelola Poli
    public function load_kelola_poli() {
        $data['poli'] = $this->Poli_model->get_all_poli();
        $this->load->view('kelola_poli', $data);
    }

    public function load_kelola_obat() {
        $this->load->model('Obat_model');
        $data['obat'] = $this->Obat_model->get_all_obat();
        $this->load->view('kelola_obat', $data);
    }

    // Fungsi untuk memuat konten Kelola Dokter
    public function load_kelola_dokter() {
        $data['dokter'] = $this->Dokter_model->get_all_dokter(); // Mengambil semua data dokter
        $this->load->view('kelola_dokter', $data);
    }
}