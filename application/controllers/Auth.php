<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	var $data = array();

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('auth_model');
		//die('<pre>This:<br />'.print_r($this, true).'</pre>');

	}


	public function index()
	{
		$this->load->view('login.php');
	}

	public function login()
	{
		if(isset($_POST))
		{
			$res = $this->db->where('email', $_POST['mail'])->where('pass', sha1($_POST['pass']))->get('users')->row_array();
			if($res)
			{
				$userdata = $this->db->where('email', $_POST['mail'])->where('pass', sha1($_POST['pass']))->get('users')->row_array();
				$this->session->user = $userdata;

				$this->data['logining'] = true;
				//echo '<script>document.cookie = "user_session='.$this->session->user['id'].'";</script>';
				if($this->session->user['type'] == 'employee')
					redirect('/pages/worker');
				else
					redirect('/pages/home');
			}else{
				$this->load->view('login.php');	
			}
		}else{
			$this->load->view('login.php');
		}
	}
}

?>