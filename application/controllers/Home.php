<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('m_login','m_pengumuman'));
			$this->user     = $this->session->userdata('username');
            $this->id_pengguna  = $this->session->userdata('id_user');
            $this->load->library('form_validation');
		}

		function index(){
			if($this->session->userdata('level') != 1){
            	redirect('login');
        	}else{
        		$this->load->model('m_login');
                $user = $this->session->userdata('username');
				$this->data['title']		= 'Aplikasi Sistem Informasi Pegawai';
                $this->data['level'] 		= $this->session->userdata('level');        
                $this->data['pengguna'] 	= $this->m_login->data($user);
                $this->data['informasi']	= $this->m_pengumuman->AmbilInformasi();
                $this->data['berita']		= $this->m_pengumuman->AmbilBerita();
                $this->data['breadcrumb'] 	= array('Beranda' => 'home');
                $this->template->load('template','admin/dashboard',$this->data);
          	}
        }

        function profile(){
        	if(isset($_POST['submit'])){
				$nama 				=$this->input->post('nama');
				$userid 			=$this->input->post('nip');
				$alamat				=$this->input->post('alamat');
				$email				=$this->input->post('email');
				$data=array(
					'nama'				=>$nama,
					'nip'				=>$nip,
					'alamat'			=>$alamat,
					'email' 			=>$email
					);
				$this->m_login->updateData($data);
				$this->data['message']='Data Telah Berhasil diubah';
	            $this->template->load('template','admin/profile',$this->data);
        	}else{
				$user = $this->session->userdata('username');
				$this->data['title']	 		= 'Akun Saya';
				$this->data['level'] 			= $this->session->userdata('level');
				$this->data['pengguna'] 		= $this->m_login->data($user);
				$this->template->load('template','dashboard/profile',$this->data);
			}
        }
    }
 ?>`