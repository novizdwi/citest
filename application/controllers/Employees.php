<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    private $data = [
		'viewBag' => [
			'title' => 'Employee',
			'viewPath'=> 'employee',
			'contentPath' => '',
		],
	];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Employees_model');
		$this->login_lib->cek_session();

	}

	public function index()
	{
		// determine the viewname
		$this->data['viewBag']['contentPath'] = 'index';
		$Models = $this->Employees_model->all();

		$this->data['Models'] = $Models;

		// load view
		$this->load->view('employee/index', $this->data);
	}

	public function add(){
		$this->load->view('employee/add');
	}

	public function delete($id){
		
		$this->Employees_model->delete($id);

		redirect('/employee');
	}

	public function insert(){
		$emp_no = $this->Employees_model->get_new_id();
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$gender = $this->input->post('gender');
		$hire_date = $this->input->post('hire_date');
		
		$data = [
			'emp_no' => $emp_no,
			'first_name' => $first_name,
			'last_name' => $last_name,
			'gender' => $gender,
			'hire_date' => $hire_date,
		];

		$this->Employees_model->create($data);

		redirect('/employee');
	}

	public function edit($id){
		$Models = $this->Employees_model->find($id);
		$this->data['Models']= $Models;

		
		$this->load->view('employee/edit', $this->data);
	}

	public function update($id){
		$emp_no = $id;
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$gender = $this->input->post('gender');
		$hire_date = $this->input->post('hire_date');
		
		$data = [
			'emp_no' => $emp_no,
			'first_name' => $first_name,
			'last_name' => $last_name,
			'gender' => $gender,
			'hire_date' => $hire_date,
		];

		$this->Employees_model->update($emp_no, $data);
		redirect('/employee');
	}

	public function all()
	{
		$Models = $this->Employees_model->all('with_relation');
		echo json_encode($Models);
	}

	public function view($pk)
	{
		$Model = $this->Employees_model->getByPk($pk);
		echo json_encode($Model);
	}

}

?>