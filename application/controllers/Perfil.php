<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perfil extends CI_Controller
{
    public function Empresa()
    {
        $this->load->view('header');
        $this->load->view('perfil/PerfilEmpresa.php');
        $this->load->view('footer');
    }
}