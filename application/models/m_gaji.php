<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    class M_gaji extends CI_Model{

        public $table = 'gaji';
        public function __construct(){

        }

        public function input($data){
            $query = $this->db->insert($this->table, $data);
            if($query){
                return true;
            } else {
                return false;
            }
        }

        public function AmbilGaji(){
            $query="SELECT pegawai.id,pegawai.nip,pegawai.nama,pegawai.jum_anak,pegawai.id_statusk,pegawai.id_statusp,jabatan.n_jab,jabatan.gapok,jabatan.tunj_jab, tbl_statusk.nmstatusk,tbl_statusp.nmstatusp FROM pegawai JOIN jabatan on pegawai.id_jab=jabatan.id_jab JOIN tbl_statusk on pegawai.id_statusk=tbl_statusk.id_statusk JOIN tbl_statusp on pegawai.id_statusp=tbl_statusp.id_statusp";
            return $this->db->query($query);
        }

        public function editGaji($id){
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where('id_gaji',$id);
            $query = $this->db->get();
            return $query;
        }

         public function updateData($id, $data){
            $this->db->where('id_gaji',$id);
            $this->db->update($this->table,$data);
        }

        public function delete($id){
            $this->db->where('id_gaji',$id);
            $this->db->delete($this->table);
        }

        public function ambilJabatan(){
            $this->db->select('*');
            $this->db->from('jabatan');
            $query = $this->db->get();
            return $query;
        }

        public function ambilPendidikan(){
            $this->db->select('*');
            $this->db->from('tbl_pendidikan');
            $query = $this->db->get();
            return $query;
        }

        public function ambilstk(){
            $this->db->select('*');
            $this->db->from('tbl_statusk');
            $query = $this->db->get();
            return $query;
        }

        public function ambilstp(){
            $this->db->select('*');
            $this->db->from('tbl_statusp');
            $query = $this->db->get();
            return $query;
        }


    }
?>