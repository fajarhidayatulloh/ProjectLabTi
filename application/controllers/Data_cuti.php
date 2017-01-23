<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_cuti extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('m_login','m_cuti'));
		$this->user     	= $this->session->userdata('username');
        $this->id_pengguna  = $this->session->userdata('id_user');
        $this->load->library('form_validation');
	}

	public function index(){
		if($this->session->userdata('level') != 1){
            redirect('login');
        }else{
        	$this->load->model('m_login');
            $user = $this->session->userdata('username');
			$this->data['title']		= 'Aplikasi Sistem Informasi Pegawai';
            $this->data['level'] 		= $this->session->userdata('level');        
            $this->data['pengguna'] 	= $this->m_login->data($user);
            $this->data['data']			= $this->m_cuti->AmbilCuti();
			$this->data['breadcrumb'] = array('Beranda' => 'home','Data Cuti'=>'data-cuti'); 
			$this->template->load('template','data-cuti/data_cuti',$this->data);
		}
	}

	public function input(){
		if($this->session->userdata('level') != 1){
            redirect('login');
        }else{
        	$this->load->model('m_login');
            $user = $this->session->userdata('username');
			$this->data['title']		= 'Aplikasi Sistem Informasi Pegawai';
            $this->data['level'] 		= $this->session->userdata('level');        
            $this->data['pengguna'] 	= $this->m_login->data($user);
			$this->data['breadcrumb'] = array('Beranda' => 'home','Data Cuti'=>'data-cuti',
											  'Input Data Cuti'=>'input'); 
			$this->template->load('template','data-cuti/input_cuti',$this->data);
		}
	}

	public function proses(){
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('nip','NIP','trim|required');
			$this->form_validation->set_rules('mulai_cuti','Mulai Cuti','trim|required');
			$this->form_validation->set_rules('selesai_cuti','Selesai Cuti','trim|required');
			$nip 						=$this->input->post('nip');
			$mulai_cuti 				=$this->input->post('mulai_cuti');
			$selesai_cuti 				=$this->input->post('selesai_cuti');
			$data=array(
						'nip'				 	=>$nip,
						'mulai_cuti'			=>$mulai_cuti,
						'selesai_cuti'			=>$selesai_cuti,
						
						);
					
			$this->m_cuti->input($data);
					echo "<script>
		                            alert('Data Cuti Berhasil Diinput');
		                        </script>";
		    $this->index();
		}
	}

	public function edit(){
		if($this->session->userdata('level') != 1){
            redirect('login');
        }else{
			$user = $this->session->userdata('username');
			$this->data['pengguna']=$this->m_login->data($this->user);
			$id= $this->uri->segment(3);
		    $this->data['data']=$this->m_cuti->editCuti($id)->row_array();
		    $this->template->load('template','data-cuti/edit_cuti',$this->data);
		}
	}


	public function update(){
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('nip','NIP','trim|required');
			$this->form_validation->set_rules('mulai_cuti','Mulai Cuti','trim|required');
			$this->form_validation->set_rules('selesai_cuti','Selesai Cuti','trim|required');
			$id 							=$this->input->post('id');
			$nip 							=$this->input->post('nip');
			$mulai_cuti 					=$this->input->post('mulai_cuti');
			$selesai_cuti 					=$this->input->post('selesai_cuti');
			$data=array(
						'nip'				 	=>$nip,
						'mulai_cuti'			=>$mulai_cuti,
						'selesai_cuti'			=>$selesai_cuti,
						
						);
					
			$this->m_cuti->updateData($id,$data);
					echo "<script>
		                    alert('Data Cuti Berhasil Diupdate');
		                  </script>";
		    $this->index();
		}
	}

	public function delete(){
		$id= $this->uri->segment(3);
	    $this->m_cuti->delete($id);
	        echo '<script>
	                alert("Data berhasil  dihapus")
	              </script>';
	    $this->index();
	}
}
