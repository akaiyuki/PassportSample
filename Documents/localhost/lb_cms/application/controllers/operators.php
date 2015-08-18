<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/REST_Controller.php';

class Operators extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		error_reporting(E_ERROR | E_WARNING | E_PARSE);

		$this->load->model('operators_model');
		$data['operators'] = $this->operators_model->view();
		//die(print_r($data, true));
		$this->load->view('operators/operators', $data);
	}
	public function add()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$_POST['email'] = $_POST['username'];
			$this->load->model('operators_model');
			$this->operators_model->add($_POST);
		}
		$this->load->view('operators/add');
	}
	public function edit($id='')
	{
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->load->model('operators_model');
			$this->operators_model->edit($id, $_POST);
		}
		$data['id'] = $id;
		$this->load->model('operators_model');
		$data['operators'] = $this->operators_model->get_id($id); 
		$this->load->view('operators/edit', $data);
	}
	public function delete($id)
	{
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->load->model('operators_model');
			$this->operators_model->delete($id);
		}
		$data['id'] = $id;
		$this->load->model('operators_model');
		$data['operators'] = $this->operators_model->get_id($id);
		$this->load->view('operators/delete', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */