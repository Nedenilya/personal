<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	var $data = array();

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

		$users = $this->db->query('select * from employee where profile_image!=\'\'')->result_array();
		$this->data['status'] = array();
		foreach ($users as $item) {
			$res = $this->db->query('select status from users where id='.$item['userid'])->result_array();
			array_push($this->data['status'], $res);
		}
		$this->data['users'] = $users;


		$this->load->view('index.php', $this->data);
	}
}
