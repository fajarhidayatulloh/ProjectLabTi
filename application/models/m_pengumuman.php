<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    class M_pengumuman extends CI_Model{

        public $table = 'tbl_peng';
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

        public function AmbilPengumuman(){
            $this->db->select('*');
            $this->db->from($this->table);
            $query = $this->db->get();
            return $query;
        }

        public function ambilInformasi(){
            $query="SELECT * FROM tbl_peng WHERE kategori='Informasi'";
            return $this->db->query($query);
        }

         public function ambilBerita(){
            $query="SELECT * FROM tbl_peng WHERE kategori='Berita'";
            return $this->db->query($query);
        }

        public function editPengumuman($id){
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where('id',$id);
            $query = $this->db->get();
            return $query;
        }

         public function updateData($id, $data){
            $this->db->where('id',$id);
            $this->db->update($this->table,$data);
        }

        public function delete($id){
            $this->db->where('id',$id);
            $this->db->delete($this->table);
        }


    }
?>