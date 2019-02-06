<?php
class Login_model extends CI_model{

    private $table ='user';
    // define your primary key 
    private $pk = 'user_id';
    private $username = 'username';
    private $password = 'password';
    private $salt = 'salt';
    private $is_active = 'is_active';

    public function __construct()
    {

        $this->load->database();

    }
    
    // create
    public function create($data, $params = [])
    {
        return $this->db->insert($this->table, $data);
    }
    
    // update by pk
    public function update($pk, $data, $params = [])
    {
        return $this->db->set($data)->where($this->username, $pk)->update($this->table);
    
    }
    
        // delete
    public function delete($pk, $params = [])
    {
        return $this->db->where($this->username, $pk)->delete($this->table);
    }

    public function find($pk, $params = [])
    {
      return $this->db->select('*')->from($this->table)->where($this->getPkField(), $pk)->get()->row();
    }

    public function get($param)
    {
      return $this->db->select('*')->from($this->table)->where($this->username, $param)->get()->row();
    }

    public function get_password($param)
    {
      return $this->db->select($this->password)->from($this->table)->where($this->username, $param)->get()->row();
    }

    public function get_salt($param)
    {
        return $this->db->select($this->salt)->from($this->table)->where($this->username, $param)->get()->row();
    }

    public function get_is_active($param)
    {
      return $this->db->select($this->is_active)->from($this->table)->where($this->username, $param)->get()->row();
    }
}
?>