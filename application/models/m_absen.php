<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    class M_absen extends CI_Model{

        public $table = 'absensi';
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

        public function AmbilAbsen(){
            $query="SELECT absensi.id_absensi,absensi.nip,absensi.tanggal_absen,absensi.jam_masuk,absensi.status, pegawai.nama FROM absensi JOIN pegawai on absensi.nip=pegawai.nip";
            return $this->db->query($query);
        }

        public function editAbsensi($id){
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where('id_absensi',$id);
            $query = $this->db->get();
            return $query;
        }

         public function updateData($id, $data){
            $this->db->where('id_absensi',$id);
            $this->db->update($this->table,$data);
        }

        public function delete($id){
            $this->db->where('id_absensi',$id);
            $this->db->delete($this->table);
        }


    }
?>