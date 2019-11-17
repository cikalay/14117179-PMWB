<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {
    public function index()
		$this->load->view('Tugas');
    }
    
    public function biografi() {
        $this->load->view('biografi');
    }
}