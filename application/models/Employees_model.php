<?php
class Employees_model extends CI_model
{
    private $table ='employees';
    // define your primary key 
    private $pk = 'emp_no';
    private $birth_date = 'birth_date';
    private $first_name = 'first_name';
    private $last_name  = 'last_name';
    private $gender = 'gender';
    private $hire_date = 'hire_date';

    private $attributes = [
        'birth_date' => '',
        'first_name' => '',
        'last_name' => '',
        'gender' => '',
        'hire_date' => '',
    ];
    
    public function __construct()
    {
    $this->load->database();
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    
  // table getter
  public function getTable()
  {
    return $this->table;
  }

  // pk Field Getter
  public function getPkField()
  {
    return $this->pk;
  }
  
  public function get_new_id(){
    $query = $this->db->select_max('emp_no')->from($this->table)->get()->row();
    if (!empty($query)) {
      return (int) $query->emp_no + 1;
    }
    else
    {
      return 1;
    }
  }

  // get all
  public function all($params = [])
  {
    // limit
    return $this->db->select('*')->from($this->table)->limit(100)->order_by('emp_no','desc')->get()->result();
  }

  // find by primary key
  public function find($pk, $params = [])
  {
    return $this->db->select('*')->from($this->table)->where($this->getPkField(), $pk)->get()->row();
  }

  // create
  public function create($data, $params = [])
  {
    return $this->db->insert($this->table, $data);
  }

  // update by pk
  public function update($pk, $data, $params = [])
  {
    // check is the data is dirty or clean
    //$outp = $this->database_library->isClean([ $this->getPkField() => $pk ], $data, $this->getTable());

    //if ($outp === false) {
      // when data is not clean perform update
      return $this->db->set($data)->where($this->getPkField(), $pk)->update($this->table);
    //} 

   // return $outp;
  }

  // delete
  public function delete($pk, $params = [])
  {
    return $this->db->where($this->getPkField(), $pk)->delete($this->getTable());
  }

}

?>