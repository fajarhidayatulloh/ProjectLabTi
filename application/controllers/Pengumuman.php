<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('m_login','m_pengumuman'));
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
            $this->data['data']			= $this->m_pengumuman->AmbilPengumuman();
			$this->data['breadcrumb'] = array('Beranda' => 'home','Data Pengumuman'=>'pengumuman'); 
			$this->template->load('template','pengumuman/data_pengumuman',$this->data);
		}
	}

	public function input(){
		if($this->session->userdata('level') != 1){
            redirect('login');
        }else{
            $user = $this->session->userdata('username');
            $this->data['level'] 		= $this->session->userdata('level');        
            $this->data['pengguna'] 	= $this->m_login->data($user);
			$this->data['breadcrumb'] 	= array('Beranda' => 'home','Data Pengumuman'=>'pengumuman',
											  'Input Pengumuman'=>'input'); 
			$this->template->load('template','pengumuman/input_pengumuman',$this->data);
		}
	}

	public function proses(){
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('kategori','Kategori','trim|required');
			$this->form_validation->set_rules('pengumuman','Input Pengumuman','trim|required');
			$kategori 						=$this->input->post('kategori');
			$pengumuman 						=$this->input->post('pengumuman');
			$data=array(
						'kategori'				=>$kategori,
						'pengumuman'			=>$pengumuman,
						'tgl_pengumuman'		=>gmdate("Y-m-d")
						
						);
					
			$this->m_pengumuman->input($data);
					echo "<script>
		                            alert('Pengumuman Berhasil Diinput');
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
		    $this->data['data']=$this->m_pengumuman->editPengumuman($id)->row_array();
		    $this->template->load('template','pengumuman/edit_pengumuman',$this->data);
		}
	}


	public function update(){
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('kategori','Kategori','trim|required');
			$this->form_validation->set_rules('pengumuman','Input Pengumuman','trim|required');
			$kategori 						=$this->input->post('kategori');
			$pengumuman 						=$this->input->post('pengumuman');
			$data=array(
						'kategori'				=>$kategori,
						'pengumuman'			=>$pengumuman,
						'tgl_pengumuman'		=>gmdate("Y-m-d")
						
						);
			$this->m_pengumuman->updateData($id,$data);
					echo "<script>
		                            alert('Pengumuman Berhasil Diupdate');
		                        </script>";
		    $this->index();
		}
	}

	public function delete(){
		$id= $this->uri->segment(3);
	    $this->m_pengumuman->delete($id);
	        echo '<script>
	                alert("Data berhasil  dihapus")
	              </script>';
	    $this->index();
	}



}
