<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function construct()
    {
        parent::construct();
        // Load model atau library jika diperlukan
    }

    public function index()
    {
        $this->load->view('user'); // Mengarahkan ke view 'home'
    }
}