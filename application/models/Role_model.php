<?php
class Role_model extends CI_Model{
    private $table ='role';
    // define your primary key 
    private $pk = 'role_id';
    private $role_name = 'role_name';
    private $description = 'description';

    private $attributes = [
        'role_id' => '',
        'role_name' => '',
        'decription' => '',
    ];

    public function __construct()
    {
        $this->load->database();
    }

    public function getAttributes()
    {
        return $this->attributes;
    }
    
    // create
    public function create($data, $params = [])
    {
        return $this->db->insert($this->table, $data);
    }

    // update by pk
    public function update($pk, $data, $params = [])
    {
      return $this->db->set($data)->where($this->pk, $pk)->update($this->table);

    }

    // delete
    public function delete($pk, $params = [])
    {
        return $this->db->where($this->pk, $pk)->delete($this->table);
    }

    //query
    public function all($params = [])
    {
      return $this->db->select('*')->from($this->table)->result();
    }
  
    // find by primary key
    public function find($pk, $params = [])
    {
      return $this->db->select('*')->from($this->table)->where($this->pk, $pk)->get()->row();
    }

    public function get_role_name($pk)
    {
      return $this->db->select($this->role_name)->from($this->table)->where($this->pk, $pk)->get()->row();
    }

    public function get_description($pk)
    {
      return $this->db->select($this->description)->from($this->table)->where($this->pk, $pk)->get()->row();
    }

}
?>