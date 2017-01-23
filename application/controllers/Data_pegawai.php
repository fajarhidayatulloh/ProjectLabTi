<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pegawai extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('m_login','m_pegawai'));
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
			$this->data['breadcrumb'] 	= array('Beranda' => 'home','Data Pegawai'=>'data-pegawai'); 

			$this->data['data']			= $this->m_pegawai->ambilPegawai();
			$this->template->load('template','data-pegawai/data_pegawai',$this->data);
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
			$this->data['breadcrumb'] = array('Dashboard' => 'welcome','Data Pegawai'=>'data-pegawai',
											  'Input Pegawai'=>'input');
			$this->data['getjab']		= $this->m_pegawai->ambilJabatan();
			$this->data['getagama']		= $this->m_pegawai->ambilAgama(); 
			$this->data['getpddk']		= $this->m_pegawai->ambilPendidikan();  
			$this->data['getstp']		= $this->m_pegawai->ambilstp(); 
			$this->data['getstk']		= $this->m_pegawai->ambilstk(); 
			$this->template->load('template','data-pegawai/input_pegawai',$this->data);
		}
	}

	public function proses(){
		if($this->session->userdata('level') != 1){
            	redirect('login');
        	}else{
				if(isset($_POST['submit'])){
					$this->form_validation->set_rules('nip','NIP','trim|required');
				$this->form_validation->set_rules('nama','Nama','trim|required');
				$this->form_validation->set_rules('tmpt_lahir','Tempat Lahir','trim|required');
				$this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','trim|required');
				$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','trim|required');
				$this->form_validation->set_rules('alamat','Alamat','trim|required');
				$this->form_validation->set_rules('tgl_masuk','Tanggal Masuk','trim|required');
				$this->form_validation->set_rules('jum_anak','Jumlah Anak','trim|required');
				$this->form_validation->set_rules('nohp','No HP','trim|required');
				$this->form_validation->set_rules('id_pndidik','Pendidikan','trim|required');
				$id 						=$this->input->post('id');
				$nama 						=$this->input->post('nama');
				$nip 						=$this->input->post('nip');
				$t_lahir 					=$this->input->post('t_lahir');
				$tgl_lahir					=$this->input->post('tgl_lahir');
				$jk 						=$this->input->post('jk');
				$alamat 					=$this->input->post('alamat');
				$tgl_masuk 					=$this->input->post('tgl_masuk');
				$jabatan 					=$this->input->post('jabatan');
				$nohp 						=$this->input->post('nohp');
				$agama 						=$this->input->post('agama');
				$pendidikan 				=$this->input->post('pendidikan');
				$statusk 					=$this->input->post('statusk');
				$statusp 					=$this->input->post('statusp');
				$jum_anak 						=$this->input->post('jum_anak');
				$data=array(
					'nama' 					=>$nama,
					'nip'				 	=>$nip,
					'tmpt_lahir'			=>$t_lahir,
					'tgl_lahir'				=>$tgl_lahir,
					'jenis_kelamin'			=>$jk,
					'alamat'				=>$alamat,
					'tgl_masuk'				=>$tgl_masuk,
					'id_jab'				=>$jabatan,
					'nohp'					=>$nohp,
					'id_agm'				=>$agama,
					'id_pndidik'			=>$pendidikan,
					'jum_anak'				=>$jum_anak,
					'id_statusk'			=>$statusk,
					'id_statusp'			=>$statusp
						
					);
					
					$this->m_pegawai->input($data);
						echo "<script>
		                            alert('Input Data Pegawai Berhasil Diinput');
		                        </script>";
		            $this->index();
		        }
		    }
	}

	public function lihat(){
		if($this->session->userdata('level') != 1){
            	redirect('login');
        }else{
            $user = $this->session->userdata('username');     
            $this->data['pengguna'] 	= $this->m_login->data($user);
			$this->data['breadcrumb'] = array('Beranda' => 'home','Data Pegawai'=>'data-pegawai',
											  'Lihat Data Pegawai'=>'read');
			$id=$this->uri->segment(3);
			$this->data['read']=$this->m_pegawai->readData($id)->row_array();
			$this->template->load('template','data-pegawai/lihat_pegawai',$this->data);
		}
	}

	public function edit(){
		if($this->session->userdata('level') != 1){
            	redirect('login');
        }else{
			$user = $this->session->userdata('username');
			$this->data['pengguna']=$this->m_login->data($this->user);
			$id= $this->uri->segment(3);
		    $this->data['data']=$this->m_pegawai->editPegawai($id)->row_array();
		    $this->data['getjab']		= $this->m_pegawai->editJabatan()->row_array();
			$this->data['getagama']		= $this->m_pegawai->editAgama()->row_array(); 
			$this->data['getpddk']		= $this->m_pegawai->editPendidikan()->row_array(); 
			$this->data['getstp']		= $this->m_pegawai->editstp()->row_array(); 
			$this->data['getstk']		= $this->m_pegawai->editstk()->row_array(); 
		    $this->template->load('template','data-pegawai/edit_pegawai',$this->data);
		}
	}

	public function update(){
		
		if(isset($_POST['submit'])){
				$this->form_validation->set_rules('nip','NIP','trim|required');
				$this->form_validation->set_rules('nama','Nama','trim|required');
				$this->form_validation->set_rules('tmpt_lahir','Tempat Lahir','trim|required');
				$this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','trim|required');
				$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','trim|required');
				$this->form_validation->set_rules('alamat','Alamat','trim|required');
				$this->form_validation->set_rules('tgl_masuk','Tanggal Masuk','trim|required');
				$this->form_validation->set_rules('jum_anak','Jumlah Anak','trim|required');
				$this->form_validation->set_rules('nohp','No HP','trim|required');
				$this->form_validation->set_rules('id_pndidik','Pendidikan','trim|required');
				$id 						=$this->input->post('id');
				$nama 						=$this->input->post('nama');
				$nip 						=$this->input->post('nip');
				$t_lahir 					=$this->input->post('t_lahir');
				$tgl_lahir					=$this->input->post('tgl_lahir');
				$jk 						=$this->input->post('jk');
				$alamat 					=$this->input->post('alamat');
				$tgl_masuk 					=$this->input->post('tgl_masuk');
				$jabatan 					=$this->input->post('jabatan');
				$nohp 						=$this->input->post('nohp');
				$agama 						=$this->input->post('agama');
				$pendidikan 				=$this->input->post('pendidikan');
				$statusk 					=$this->input->post('statusk');
				$statusp 					=$this->input->post('statusp');
				$jum_anak 						=$this->input->post('jum_anak');
				$data=array(
					'nama' 					=>$nama,
					'nip'				 	=>$nip,
					'tmpt_lahir'			=>$t_lahir,
					'tgl_lahir'				=>$tgl_lahir,
					'jenis_kelamin'			=>$jk,
					'alamat'				=>$alamat,
					'tgl_masuk'				=>$tgl_masuk,
					'id_jab'				=>$jabatan,
					'nohp'					=>$nohp,
					'id_agm'				=>$agama,
					'id_pndidik'			=>$pendidikan,
					'jum_anak'				=>$jum_anak,
					'id_statusk'			=>$statusk,
					'id_statusp'			=>$statusp
						
					);
					
				$this->m_pegawai->updateData($id,$data);
					echo "<script>
		                  alert('Data Pegawai Berhasil Diupdate');
		                  </script>";
		        $this->index();
		}
	}

	public function delete(){
		$id= $this->uri->segment(3);
	    $this->m_pegawai->delete($id);
	        echo '<script>
	                alert("Data berhasil  dihapus")
	              </script>';
	    $this->index();
	}


}
