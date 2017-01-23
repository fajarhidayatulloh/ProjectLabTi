<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    class M_cuti extends CI_Model{

        public $table = 'tbl_cuti';
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

        public function AmbilCuti(){
            $query="SELECT tbl_cuti.id_cuti,tbl_cuti.nip,tbl_cuti.mulai_cuti,tbl_cuti.selesai_cuti, pegawai.nama FROM tbl_cuti JOIN pegawai on tbl_cuti.nip=pegawai.nip";
            return $this->db->query($query);
        }

        public function editCuti($id){
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where('id_cuti',$id);
            $query = $this->db->get();
            return $query;
        }

         public function updateData($id, $data){
            $this->db->where('id_cuti',$id);
            $this->db->update($this->table,$data);
        }

        public function delete($id){
            $this->db->where('id_cuti',$id);
            $this->db->delete($this->table);
        }
    }
?>