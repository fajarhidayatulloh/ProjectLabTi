<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_absen extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('m_login','m_absen'));
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
            $this->data['data']			= $this->m_absen->AmbilAbsen();
			$this->data['breadcrumb'] = array('Beranda' => 'welcome','Data Absen'=>'data-absen'); 
			$this->template->load('template','data-absen/data_absen',$this->data);
		}
	}

	public function input(){
		if($this->session->userdata('level') != 1){
            redirect('login');
        }else{
        	$this->load->model('m_login');
            $user = $this->session->userdata('username');
            $this->data['level'] 		= $this->session->userdata('level');        
            $this->data['pengguna'] 	= $this->m_login->data($user);
			$this->data['breadcrumb'] 	= array('Beranda' => 'welcome','Data Absen'=>'data-absen',
											  'Input Absen'=>'input'); 
			$this->template->load('template','data-absen/input_absen',$this->data);
		}
	}

	public function proses(){
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('nip','NIP','trim|required');
			$this->form_validation->set_rules('tgl_absen','Tanggal Masuk','trim|required');
			$this->form_validation->set_rules('status','Status Masuk','trim|required');
			$nip 						=$this->input->post('nip');
			$tgl_masuk 					=$this->input->post('tgl_masuk');
			$jam_masuk 					=$this->input->post('jam_masuk');
			$st_masuk 					=$this->input->post('st_masuk');
			$data=array(
						'nip'				 	=>$nip,
						'tanggal_absen'				=>$tgl_masuk,
						'jam_masuk'				=>$jam_masuk,
						'status'				=>$st_masuk
						
						);
					
			$this->m_absen->input($data);
					echo "<script>
		                            alert('Input Data Absen Berhasil Diinput');
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
		    $this->data['data']=$this->m_absen->editAbsensi($id)->row_array();
		    $this->template->load('template','data-absen/edit_absen',$this->data);
		}
	}


	public function update(){
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('nip','NIP','trim|required');
			$this->form_validation->set_rules('tanggal_absen','Tanggal Masuk','trim|required');
			$this->form_validation->set_rules('status','Status Masuk','trim|required');
			$this->form_validation->set_rules('jam_masuk','Status Masuk','trim|required');
			$id 						=$this->input->post('id');
			$nip 						=$this->input->post('nip');
			$tgl_masuk 					=$this->input->post('tgl_masuk');
			$jam_masuk 					=$this->input->post('jam_masuk');
			$st_masuk 					=$this->input->post('st_masuk');
			$data=array(
						'nip'				 	=>$nip,
						'tanggal_absen'			=>$tgl_masuk,
						'jam_masuk'				=>$jam_masuk,
						'status'				=>$st_masuk
						
						);
					
			$this->m_absen->updateData($id,$data);
					echo "<script>
		                            alert('Data Absen Berhasil Diupdate');
		                        </script>";
		    $this->index();
		}
	}

	public function delete(){
		$id= $this->uri->segment(3);
	    $this->m_absen->delete($id);
	        echo '<script>
	                alert("Data berhasil  dihapus")
	              </script>';
	    $this->index();
	}



}
