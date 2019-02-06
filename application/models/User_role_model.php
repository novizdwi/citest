<?php
class User_role_model extends CI_model{
    private $table ='user_role';
    // define your primary key 
    private $pk = 'id';
    private $user_id = 'user_id';
    private $role_id = 'role_id';
    private $valid_from = 'valid_from'; 
    private $valid_to = 'valid_to';
    
    private $attributes = [
        'id' => '',
        'user_id' => '',
        'role_id' => '',
        'valid_from' => '',
        'valid_to' => '',
    ];

    public function __construct()
    {
    $this->load->database();
    }

    public function getAttributes()
    {
        return $this->attributes;
    }
    
    public function all($params = [])
    {
      return $this->db->select('*')->from($this->table)->result();
    }
  
    // find by primary key
    public function find($pk, $params = [])
    {
      return $this->db->select('*')->from($this->table)->where($this->pk, $pk)->get()->row();
    }

    public function get_role_id($pk)
    {
      return $this->db->select($this->role_id)->from($this->table)->where($this->pk, $pk)->get()->row();
    }
}
?>