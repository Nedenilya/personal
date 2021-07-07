<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	var $data = array();

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('auth_model');
		//die('<pre>This:<br />'.print_r($this, true).'</pre>');


	}

	public function index()
	{
		die('test');
	}

	public function faq()
	{
		$this->load->view('question_view.php');
	}

	public function premium()
	{
		$this->load->view('premium-one.php');
	}

	public function login()
	{
		$this->load->view('login.php');
	}

	public function my_anketa($id)
	{
		//$this->data['anketa'] = $this->db->where('id', $id)->get('employee_anketa')->result_array();
		//$this->data['employee'] = $this->db->where('userid', $this->session->user['id'])->get('employee')->result_array();
		//$this->data['employee_status'] = $this->db->query('select status from users where id='.$id)->result_array();
		$this->data['anketa'] = $this->db->query('select * from employee_anketa join employee join users where employee_anketa.id='.$id.' and employee.userid='.$this->session->user['id'].' and users.id='.$this->session->user['id'])->result_array();
		$this->load->view('worker-profil.php', $this->data);
	}

	public function home()
	{
		if(!isset($this->session->user))
			redirect('/pages/login');
 
		$this->data['announcement'] = $this->db->where('userid', $this->session->user['id'])->get('employer_anketa_announcement')->result_array();
		
		$this->data['employee'] = $this->db->get('employee')->result_array();

		$favoritesid = $this->db->query('select employeeid from liked where mode=\'employer\' and employerid='.$this->session->user['id'])->result_array();

		$anketaid = $this->db->query('select anketaid from liked where mode=\'employer\' and employerid='.$this->session->user['id'])->result_array();

		$this->data['favorites'] = array();
		if($favoritesid)
			foreach ($favoritesid as $i) {
				$data = $this->db->where('userid', $i['employeeid'])->get('employee')->result_array();
				if($data)
					array_push($this->data['favorites'], $data);
			}

		$this->data['anketa2'] = array();
		foreach ($anketaid as $item) {
			$data2 = $this->db->where('id', $item['anketaid'])->get('employee_anketa')->result_array();
			if($data2)
				array_push($this->data['anketa2'], $data2);
		}

		$this->data['status'] = $this->db->query('select status from users')->result_array();
		$this->data['anketa'] = array();
		foreach ($this->data['employee'] as $item) {
			$data2 = $this->db->where('userid', $item['userid'])->get('employee_anketa')->result_array();
			if($data2)
				array_push($this->data['anketa'], $data2);
		}
		// var_dump($this->data['anketa2']);
		// var_dump($this->data['anketa']);

		$chats = array();$ind = 0;
		$chatid = array();

		$id = $this->db->where('employerid', $this->session->user['id'])->select('employeeid')->get('chat')->result_array();
		$chid = $this->db->where('employerid', $this->session->user['id'])->select('chatid')->get('chat')->result_array();
		foreach ($id as $i)
		{
			$chats[$ind] = $this->db->where('userid', $i['employeeid'])->get('employee')->result_array();
			$ind++;
		}

		$this->data['chats'] = $chats;
		$this->data['chatid'] = $chid;

		$this->load->view('employer/employer-profil.php', $this->data);	
	}

	public function announcement($id = null)
	{
		$this->data['announcement'] = $this->db->query('select * from employer_anketa_announcement join employer_anketa_ideal join employer_anketa_child where employer_anketa_announcement.parentid='.$id.' and employer_anketa_ideal.parentid='.$id.' and employer_anketa_child.parentid='.$id)->result_array();

		$this->data['ideal'] = $this->db->query('select * from employer_anketa_ideal where parentid='.$id)->result_array();

		$this->data['child'] = $this->db->query('select * from employer_anketa_child where parentid='.$id)->result_array();
		
		$this->data['type'] = $this->db->query('select * from employer_anketa_type where parentid='.$id)->result_array();

		$this->data['schedule'] = $this->db->query('select * from employer_anketa_schedule where parentid='.$id)->result_array();

		$this->load->view('announcement.php', $this->data);
	}

	public function worker($id = null, $aid = null)
	{
		if(!isset($this->session->user))
			redirect('/');
		if($id != null && $aid != null)
		{
			$this->data['anketa'] = $this->db->query('select * from employee_anketa join employee join users where employee_anketa.id='.$aid.' and employee.userid='.$id.' and users.id='.$id)->result_array();
			$this->data['employee'] = $this->db->where('userid', $id)->get('employee')->result_array();
			$this->data['employee_status'] = $this->db->query('select status from users where id='.$id)->result_array();

			$this->data['aid'] = $aid;
			$this->load->view('worker-profil.php', $this->data);
			return;
		}
		$chats = array();$ind = 0;
		$chatid = array();
		$this->data['employee'] = $this->db->where('userid', $this->session->user['id'])->get('employee')->result_array();

		$this->data['employer_anketa'] = array();
		$this->data['employer'] = $this->db->where('type', 'employer')->get('users')->result_array();
		foreach ($this->data['employer'] as $item) {
			$data = $this->db->query('select * from users join employer_anketa where users.id='.$item['id'].' and employer_anketa.userid='.$item['id'])->result_array();
			if($data){
				$this->data['announcement'] = $this->db->query('select * from employer_anketa_announcement join employer_anketa_ideal join employer_anketa_child where employer_anketa_announcement.parentid='.$data[0]['id'].' and employer_anketa_ideal.parentid='.$data[0]['id'].' and employer_anketa_child.parentid='.$data[0]['id'])->result_array();
				if($this->data['announcement'] || count($this->data['announcement']) > 0){
					$data = $this->db->query('select * from users join employer_anketa_announcement join employer_anketa_ideal join employer_anketa where users.id='.$item['id'].' and employer_anketa.userid='.$item['id'].' and employer_anketa_announcement.parentid='.$data[0]['id'].' and employer_anketa_ideal.parentid='.$data[0]['id'].'')->result_array();
					array_push($this->data['employer_anketa'], $data);
				}
			}
		}

		
		$favoritesid = $this->db->query('select employerid from liked where mode=\'employee\' and employeeid='.$this->session->user['id'])->result_array();

		$anketaid = $this->db->query('select anketaid from liked where mode=\'employee\' and employeeid='.$this->session->user['id'])->result_array();

		$this->data['favorites'] = array();
		$i = 0;
		if($favoritesid)
			foreach ($favoritesid as $item) {
				$data = $this->db->query('select * from users join employer_anketa_announcement join employer_anketa_ideal join employer_anketa where users.id='.$item['employerid'].' and employer_anketa.userid='.$item['employerid'].' and employer_anketa_announcement.parentid='.$anketaid[$i]['anketaid'].' and employer_anketa_ideal.parentid='.$anketaid[$i]['anketaid'].'')->result_array();
				
				//var_dump($data);
				//echo '<br><br>select * from users join employer_anketa_announcement join employer_anketa_ideal join employer_anketa where users.id='.$item['employerid'].' and employer_anketa.userid='.$item['employerid'].' and employer_anketa_announcement.parentid='.$anketaid[$i]['anketaid'].' and employer_anketa_ideal.parentid='.$anketaid[$i]['anketaid'].'<br><br>';
				if($data)
					array_push($this->data['favorites'], $data[0]);
				$i++;
			}



		$this->data['employee_status'] = $this->db->query('select status from users where id='.$this->session->user['id'])->result_array();
		$this->data['anketa'] = $this->db->where('userid', $this->session->user['id'])->get('employee_anketa')->result_array();
		$id = $this->db->where('employeeid', $this->session->user['id'])->select('employerid')->get('chat')->result_array();
		$chid = $this->db->where('employeeid', $this->session->user['id'])->select('chatid')->get('chat')->result_array();
		foreach ($id as $i)
		{
			$chats[$ind] = $this->db->where('id', $i['employerid'])->get('users')->result_array();
			$ind++;
		}

		$this->data['chats'] = $chats;
		$this->data['chatid'] = $chid;
		$this->load->view('employee-profil.php', $this->data);
	}


	public function favorite($mode = '', $id = null, $aid = null){
		if($mode == 'add' && $id != null && $aid != null){
			$this->db->set('employerid', $this->session->user['id']);
			$this->db->set('employeeid', $id);
			$this->db->set('anketaid', $aid);
			$this->db->set('mode', 'employer');
			$this->db->insert('liked');
			redirect($_SERVER['HTTP_REFERER']);
		}
		if($mode == 'new' && $id != null && $aid != null){
			$this->db->set('employerid', $id);
			$this->db->set('employeeid', $this->session->user['id']);
			$this->db->set('anketaid', $aid);
			$this->db->set('mode', 'employee');
			$this->db->insert('liked');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function delete($id = null){
		if($id != null){
			$this->db->where('anketaid', $id)->where('employerid', $this->session->user['id'])->delete('liked');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function del($id = null){
		if($id != null){
			$this->db->where('anketaid', $id)->where('employeeid', $this->session->user['id'])->delete('liked');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function logout(){
		$this->session->user = null;
		unset($this->session->user);
		redirect('/');
	}
}
?>