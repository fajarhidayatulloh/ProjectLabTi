<?php  defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller{
		function __construct(){
			parent::__construct();
            $this->load->model(array('m_login','m_pengumuman'));
            $this->load->library('form_validation');
		}

		public function index(){
			$session = $this->session->userdata('Login');
            if($session != 'berhasil'){
                $this->data['message']='Anda Belum Login';
                $this->data['informasi']    = $this->m_pengumuman->AmbilInformasi();
                $this->data['berita']       = $this->m_pengumuman->AmbilBerita();
                $this->load->view('form_login',$this->data);
            }else{
                redirect('home');
            }
		}

		public function login_form(){
			$this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|md5');
            $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
            if($this->form_validation->run()==FALSE){
                $this->load->view('form_login');
            }else{
            	$username = $this->input->post('username');
                $password = $this->input->post('password');
                $cek= $this->m_login->getPengguna($username, $password,1);
                if($cek->num_rows() == 1){
                	foreach ($cek->result() as $c) {
                        $data_user['Login']       	= 'berhasil';
                        $data_user['username']    	= $c->username;
                        $data_user['id_user']       = $c->id_user;
                        $data_user['nama']          = $c->nama;
                        $data_user['level']       	= $c->level;        
                    }
                    if($data_user['level']==1){
                        $this->session->set_userdata($data_user);
                        redirect('home');
                    }else{
                    	
                        $this->data['message']='Username atau Password Yang Diinput Tidak Sesuai!!!';
                        $this->data['informasi']    = $this->m_pengumuman->AmbilInformasi();
                        $this->data['berita']       = $this->m_pengumuman->AmbilBerita();
                        $this->load->view('form_login',$this->data);     
                    }
                }else{
                    
                    $this->data['message']='Username atau Password Yang Diinput Tidak Sesuai!!!';
                    $this->data['informasi']    = $this->m_pengumuman->AmbilInformasi();
                    $this->data['berita']       = $this->m_pengumuman->AmbilBerita();
                    $this->load->view('form_login',$this->data);
                }
            } 
		}

		public function logout(){
            $this->session->sess_destroy();
            redirect('login');
        }
	}
?>