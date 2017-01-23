<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_gaji extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('m_login','m_gaji','m_pegawai'));
		$this->user     	= $this->session->userdata('username');
        $this->id_pengguna  = $this->session->userdata('id_user');
        $this->load->library('form_validation');
	}

	public function index(){
		if($this->session->userdata('level') != 1){
            redirect('login');
        }else{
            $user = $this->session->userdata('username');
            $this->data['level'] 		= $this->session->userdata('level');        
            $this->data['pengguna'] 	= $this->m_login->data($user);
            $this->data['data']			= $this->m_gaji->AmbilGaji();
			$this->data['breadcrumb'] 	= array('Beranda' => 'home','Data Gaji'=>'data-gaji'); 
			$this->template->load('template','data-gaji/data_gaji',$this->data);
		}
	}

	public function input(){
		if($this->session->userdata('level') != 1){
            redirect('login');
        }else{
            $user = $this->session->userdata('username');
            $this->data['level'] 		= $this->session->userdata('level');        
            $this->data['pengguna'] 	= $this->m_login->data($user);
            $this->data['getjab']		= $this->m_gaji->ambilJabatan();
			$this->data['getpddk']		= $this->m_gaji->ambilPendidikan();  
			$this->data['getstp']		= $this->m_gaji->ambilstp(); 
			$this->data['getstk']		= $this->m_gaji->ambilstk(); 
			$this->data['breadcrumb'] = array('Beranda' => 'home','Data Gaji'=>'data-gaji',
											  'Input Data Gaji'=>'input'); 
			$this->template->load('template','data-gaji/input_gaji',$this->data);
		}
	}

	public function proses(){
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('nip','NIP','trim|required');
			$this->form_validation->set_rules('jum_anak','Tanggal Masuk','trim|required');
			$this->form_validation->set_rules('id_jab','No KTP','trim|required');
			$this->form_validation->set_rules('id_statusk','No HP','trim|required');
			$this->form_validation->set_rules('id_statusp','NPWP','trim|required');
			$nip 						=$this->input->post('nip');
			$jum_anak 					=$this->input->post('jum_anak');
			$jabatan 					=$this->input->post('jabatan');
			$statusk 					=$this->input->post('statusk');
			$statusp 					=$this->input->post('statusp');
			$data=array(
						'nip'				 	=>$nip,
						'id_jab'				=>$jabatan,
						'jum_anak'				=>$jum_anak,
						'id_statusk'			=>$statusk,
						'id_statusp'			=>$statusp
						
						);
					
					$this->m_gaji->input($data);
						echo "<script>
		                            alert('Data Gaji Berhasil Diinput');
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
		    $this->data['data']			=$this->m_gaji->editGaji($id)->row_array();
		    $this->data['getjab']		= $this->m_pegawai->editJabatan()->row_array();
			$this->data['getstp']		= $this->m_pegawai->editstp()->row_array(); 
			$this->data['getstk']		= $this->m_pegawai->editstk()->row_array(); 
		    $this->template->load('template','data-gaji/edit_gaji',$this->data);
		}
	}

	public function update(){
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('nip','NIP','trim|required');
			$this->form_validation->set_rules('jum_anak','Tanggal Masuk','trim|required');
			$this->form_validation->set_rules('id_jab','No KTP','trim|required');
			$this->form_validation->set_rules('id_statusk','No HP','trim|required');
			$this->form_validation->set_rules('id_statusp','NPWP','trim|required');
			$id 						=$this->input->post('id');
			$nip 						=$this->input->post('nip');
			$jum_anak 					=$this->input->post('jum_anak');
			$jabatan 					=$this->input->post('jabatan');
			$statusk 					=$this->input->post('statusk');
			$statusp 					=$this->input->post('statusp');
			$data=array(
						'nip'				 	=>$nip,
						'id_jab'				=>$jabatan,
						'jum_anak'				=>$jum_anak,
						'id_statusk'			=>$statusk,
						'id_statusp'			=>$statusp
						
						);
					
					$this->m_gaji->updateData($id,$data);
						echo "<script>
		                            alert('Data Gaji Berhasil Diupdate');
		                        </script>";
		            $this->index();
		}
	}

	public function printt(){
		if($this->session->userdata('level') != 1){
            redirect('login');
        }else{
            $user = $this->session->userdata('username');
            $this->data['level'] 		= $this->session->userdata('level');        
            $this->data['pengguna'] 	= $this->m_login->data($user);
			$this->data['data']			= $this->m_gaji->AmbilGaji();
			$this->data['breadcrumb'] = array('Beranda' => 'home','Data Gaji'=>'data-gaji',
												  'Print Data Gaji'=>'print'); 
			$this->template->load('template','data-gaji/print',$this->data);
		}
	}
}
