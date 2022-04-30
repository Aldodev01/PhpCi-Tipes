<?php 


defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model{
    private $table = 'data_siswa';

    public function rules(){
      return [ 
          [
            'field' => 'nama_siswa',
            'label' => 'nama_siswa',
            'rules'=> 'trim|required'
          ],
          [
             'field' => 'nis',
             'label' => 'nis',
             'rules' => 'trim|required',
          ],
          [
            'field' => 'kelas',
            'label' => 'kelas',
            'rules' => 'trim|required',
         ],
         [
            'field' => 'tanggal_lahir',
            'label' => 'tanggal_lahir',
            'rules' => 'trim|required',
         ],
         [
            'field' => 'tempat_lahir',
            'label' => 'tempat_lahir',
            'rules' => 'trim|required',
         ],
         [
            'field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'trim|required',
         ],
         [
            'field' => 'jenis_kelamin',
            'label' => 'jenis_kelamin',
            'rules' => 'trim|required',
         ],
    ];
    }


    public function getById($id){
        return $this->db->get_where($this->table,['id' => $id]);
    }

    public function getAll(){
        $this->db->from($this->table);
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function insertDataSiswa($data){
        $this->db->insert('data_siswa', $data);
    }
}






?>