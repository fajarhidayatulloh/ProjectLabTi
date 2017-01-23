<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    class M_pegawai extends CI_Model{

        public $table = 'pegawai';
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

        public function ambilPegawai(){
            $query="SELECT  pegawai.id, pegawai.nip, pegawai.nama, pegawai.tmpt_lahir, pegawai.tgl_lahir,pegawai.jenis_kelamin, pegawai.jum_anak,
                    pegawai.alamat,pegawai.tgl_masuk,pegawai.nohp,jabatan.n_jab, tbl_agama.nmagama,tbl_pendidikan.nmpndidik,
                    tbl_statusk.nmstatusk,tbl_statusp.nmstatusp 
                    FROM pegawai JOIN jabatan on pegawai.id_jab =jabatan.id_jab
                    JOIN tbl_agama ON pegawai.id_agm = tbl_agama.id_agm
                    JOIN tbl_pendidikan ON pegawai.id_pndidik = tbl_pendidikan.id_pndidik
                    JOIN tbl_statusk ON pegawai.id_statusk =tbl_statusk.id_statusk
                    JOIN tbl_statusp ON pegawai.id_statusp=tbl_statusp.id_statusp";
            return $this->db->query($query);
        }

        public function readData($id){
            $query="SELECT  pegawai.nip, pegawai.nama, pegawai.tmpt_lahir, pegawai.tgl_lahir,pegawai.jenis_kelamin,pegawai.alamat,pegawai.tmpt_lahir,pegawai.tgl_lahir,pegawai.tgl_masuk,pegawai.jum_anak,pegawai.nohp,jabatan.n_jab, tbl_agama.nmagama,tbl_pendidikan.nmpndidik,tbl_statusk.nmstatusk,tbl_statusp.nmstatusp FROM pegawai JOIN jabatan on pegawai.id_jab =jabatan.id_jab
                JOIN tbl_agama ON pegawai.id_agm = tbl_agama.id_agm
                JOIN tbl_pendidikan ON pegawai.id_pndidik = tbl_pendidikan.id_pndidik
                JOIN tbl_statusk ON pegawai.id_statusk =tbl_statusk.id_statusk
                JOIN tbl_statusp ON pegawai.id_statusp=tbl_statusp.id_statusp 
                    WHERE pegawai.id='$id'";
            return $this->db->query($query);
        }

        public function updateData($id, $data){
            $this->db->where('id',$id);
            $this->db->update($this->table,$data);
        }

        public function editPegawai($id){
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where('id',$id);
            $query = $this->db->get();
            return $query;
        }

        public function delete($id){
            $this->db->where('id',$id);
            $this->db->delete($this->table);
        }

        public function ambilJabatan(){
            $this->db->select('*');
            $this->db->from('jabatan');
            $query = $this->db->get();
            return $query;
        }

        public function ambilAgama(){
            $this->db->select('*');
            $this->db->from('tbl_agama');
            $query = $this->db->get();
            return $query;
        }

        public function ambilPendidikan(){
            $this->db->select('*');
            $this->db->from('tbl_pendidikan');
            $query = $this->db->get();
            return $query;
        }

        public function ambilBank(){
            $this->db->select('*');
            $this->db->from('tbl_bank');
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

        public function editJabatan(){
            $query="SELECT pegawai.id_jab, jabatan.id_jab,jabatan.n_jab FROM pegawai JOIN jabatan ON pegawai.id_jab=jabatan.id_jab";
            return $this->db->query($query);
        }

        public function editAgama(){
            $query="SELECT pegawai.id_agm, tbl_agama.id_agm,tbl_agama.nmagama FROM pegawai JOIN tbl_agama ON pegawai.id_agm=tbl_agama.id_agm";
            return $this->db->query($query);
        }

        public function editPendidikan(){
            $query="SELECT pegawai.id_pndidik, tbl_pendidikan.id_pndidik,tbl_pendidikan.nmpndidik FROM pegawai JOIN tbl_pendidikan ON pegawai.id_pndidik=tbl_pendidikan.id_pndidik";
            return $this->db->query($query);
        }

        public function editstk(){
            $query="SELECT pegawai.id_statusk, tbl_statusk.id_statusk,tbl_statusk.nmstatusk FROM pegawai JOIN tbl_statusk ON pegawai.id_statusk=tbl_statusk.id_statusk";
            return $this->db->query($query);
        }

        public function editstp(){
            $query="SELECT pegawai.id_statusp, tbl_statusp.id_statusp,tbl_statusp.nmstatusp FROM pegawai JOIN tbl_statusp ON pegawai.id_statusp=tbl_statusp.id_statusp";
            return $this->db->query($query);
        }

        



    }
?>