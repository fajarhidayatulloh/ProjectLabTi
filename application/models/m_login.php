<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    class M_login extends CI_Model{

        public $table = 'users';
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

        public function getPengguna($username, $password){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $query = $this->db->get();
            return $query;
        }

        public function data($username){
            $this->db->select('*');
            $this->db->where('username', $username);
            $query = $this->db->get('users');
            return $query->row();
        }
        
        function updateData($data,$id){
            
            $this->db->where('id_user',$id);
            $this->db->update('users',$data);
        }

        function updateProfile($id){
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where('id_user',$id);
            $query = $this->db->get();
            return $query;
        }
    }
?>