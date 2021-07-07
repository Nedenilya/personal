<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $data = array();

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('auth_model');
		//die('<pre>This:<br />'.print_r($this, true).'</pre>')
	}

	public function index($type = null)
	{
		if(!isset($this->session->admin) && !isset($this->session->manager))
			$this->load->view('/admin/login.php');
		else
			redirect('/admin/users/employer');
	}

	public function login()
	{
		if(isset($_POST))
		{
			$res = array();
			if($_POST['type'] == 'a'){
				$res = $this->db->where('email', $_POST['mail'])->where('pass',sha1($_POST['pass']))->where('priv', 'admin')->get('admins')->result_array();
			}elseif($_POST['type'] == 'm'){
				$res = $this->db->where('email', $_POST['mail'])->where('pass',sha1($_POST['pass']))->where('priv', 'manager')->get('admins')->result_array();
			}
			if($res && count($res) == 1)
			{
				$this->session->admin = $res;
				redirect('/admin/users/employer');
			}else
			{
				$this->load->view('/admin/login.php');
			}
		}
	}

	public function users($mode = null)
	{
		if($this->session->admin[0]['priv'] == 'manager'){
			$res = $this->db->where('email', $this->session->admin[0]['email'])->where('pass', $this->session->admin[0]['pass'])->where('priv', 'manager')->get('admins')->result_array();
			$this->session->admin = $res;
		}
		$this->data['mode'] = $mode;
		switch ($mode) {
			case 'employer':
			{
				$this->data['users'] = $this->db->where('type', 'employer')->get('users')->result_array();
				break;
			}
			case 'employee':
			{	
				$this->data['users'] = $this->db->where('type', 'employee')->get('users')->result_array();
				break;
			}
			case 'manager':
			{	
				$this->data['users'] = $this->db->where('priv', 'manager')->get('admins')->result_array();
				break;
			}
		}
		$this->load->view('/admin/users.php', $this->data);
	}

	public function save($id = null){
		if($id != null){
			$this->db->set('access', $_POST['access']);
			$this->db->where('id', $id)->update('admins');
		}
		redirect('/admin/users/manager');
	}

	public function createmanager(){
		if(isset($_POST)){
			$this->db->set('name', $_POST['name']);
			$this->db->set('email', $_POST['email']);
			$this->db->set('pass', sha1($_POST['pass']));
			$this->db->set('access', $_POST['access']);
			$this->db->set('priv', 'manager');
			$this->db->set('phone', '');
			$this->db->insert('admins');
		}
		redirect('/admin/users/manager');
	}

	public function passport($id = null)
	{
		if($id != null)
		{
			$this->data['id'] = $id;
			$passport = $this->db->query('select pasport_image, profile_image from employee where userid='.$id)->result_array();
			if(strlen($passport[0]['pasport_image']) > 5 and strlen($passport[0]['profile_image']) > 5)
				$this->data['image'] = $passport;
			else
				$this->data['error'] = 'Паспорт отсутствует';
			$this->load->view('/admin/passport.php', $this->data);
		}
	}

	public function anketa()
	{
		$this->load->view('/admin/anketa/nanny/register-09.php');
	}

	public function chat($mode = null, $userid = null)
	{
		if ($userid != null) 
		{
			// $chid = $this->db->where($mode.'id', $userid)->select('chatid')->get('chat')->result_array();

			$this->data['mode'] = $mode;
			$this->data['userid'] = $userid;
			// if($mode == 'employer')
			// {
			// 	$id = $this->db->query('select employeeid from chat where chatid='.$chatid)->result_array(); 
			// 	$result = $this->db->query('select * from chat_messages join employee where chat_messages.chatid='.$chatid.' and employee.userid='.$id[0]['employeeid'])->result_array(); 
			// }else if($mode == 'employee')
			// {
			// 	$id = $this->db->query('select employerid from chat where chatid='.$chatid)->result_array(); 
			// 	$result = $this->db->query('select * from chat_messages join users where chat_messages.chatid='.$chatid.' and users.id='.$id[0]['employerid'])->result_array(); 
			// }

			// $this->data['chat'] = $result;
			$this->load->view('/admin/chats.php', $this->data);
		}  
	}

	public function update_chats($id = null)
	{
		if(isset($_POST))
		{
			$echo = '';
			if($_POST['mode'] == 'employer')
			{
				$chats = array();$ind = 0;
				$chatid = array();

				$id = $this->db->where($_POST['mode'].'id', $_POST['userid'])->select('employeeid')->get('chat')->result_array();
				$chid = $this->db->where($_POST['mode'].'id', $_POST['userid'])->select('chatid')->get('chat')->result_array();
				foreach ($id as $i)
				{
					$chats[$ind] = $this->db->where('userid', $i['employeeid'])->get('employee')->result_array();
					$ind++;
				}
				$idc = 0;
				if(isset($chats) and count($chats) > 0)
					foreach ($chats as $item) {
						foreach ($item as $i) {
							$echo .= '<a href="javascript:;" onclick="$(\'#chatid-inp\').attr(\'value\', $(this).attr(\'name\')); return;" name="'.$chid[$idc]['chatid'].'" class="block-left__chat" id="typed-chat-'.$chid[$idc]['chatid'].'">
									<span class="block-info">
										<span class="block-info__name">'.$i['name'].'</span>
										<span class="block-info__text">Добрый день. Мне важен</span>
									</span>
								</a>';
							$idc++;
						}
					}
				else
					$echo = '<h3 style="margin: 0 auto; color: grey;">У данного пользователя пока нет чатов</h3>';
			}else if($_POST['mode'] == 'employee')
			{
				$chats = array();$ind = 0;
				$chatid = array();
				$id = $this->db->where('employeeid', $_POST['userid'])->select('employerid')->get('chat')->result_array();
				$chid = $this->db->where('employeeid', $_POST['userid'])->select('chatid')->get('chat')->result_array();
				foreach ($id as $i)
				{
					$chats[$ind] = $this->db->where('id', $i['employerid'])->get('users')->result_array();
					$ind++;
				}

				$idc = 0;
				if(isset($chats) and count($chats) > 0)
					foreach ($chats as $item) {
						foreach ($item as $i) {
							$echo .= '<a href="javascript:;" onclick="$(\'#chatid-inp\').attr(\'value\', $(this).attr(\'name\')); return;" name="'.$chid[$idc]['chatid'].'" class="block-left__chat active" id="typed-chat-'.$chid[$idc]['chatid'].'">
									<span class="block-info">
										<span class="block-info__name">'.$i['sname'].'</span>
										<span class="block-info__text">Добрый день. Мне важен</span>
									</span>
								</a>';
							$idc++;
						}
					}
				else
					$echo = '<h3 style="margin: 0 auto; color: grey;">У вас пока нет чатов</h3>';
			}
		}
		echo $echo;
	}

	public function send_message()
	{
		if(isset($_POST['act'])) {$act = $_POST['act'];}
		if(isset($_POST['var1'])) {$var1 = $_POST['var1'];}
		if(isset($_POST['var2'])) {$var2 = $_POST['var2'];}
		if(isset($_POST['chatid'])) {$chatid = $_POST['chatid'];}
		if(isset($_POST['mode'])) {$this->session->mode = $_POST['mode'];}
		if(isset($_POST['userid'])) {$userid = $_POST['userid'];}

		switch($_POST['act']) {//В зависимости от значения act вызываем разные функции
			case 'load': 
				$echo = $this->load($chatid); //Загружаем сообщения
			break;
			
		}

		echo $echo;//Выводим результат работы кода
	}

	public function load($chatid = null) {
		$echo = "";
		if($chatid == null)
			return '<h3 style="margin: 0 auto; color: grey;">Выберите чат</h3>';
		if($this->session->mode == 'employer')
		{
			$id = $this->db->query('select employeeid from chat where chatid='.$chatid)->result_array(); 
			$result = $this->db->query('select * from chat_messages join employee where chat_messages.chatid='.$chatid.' and employee.userid='.$id[0]['employeeid'])->result_array(); 
		}else if($this->session->mode == 'employee')
		{
			$id = $this->db->query('select employerid from chat where chatid='.$chatid)->result_array(); 
			$result = $this->db->query('select * from chat_messages join users where chat_messages.chatid='.$chatid.' and users.id='.$id[0]['employerid'])->result_array(); 
		}

			if($result && $this->session->mode == 'employer') {
				foreach($result as $item) {//Выводим их с помощью цикла
					if($item['from'] == 'employee')
						$echo .= '<div class="master-block">
									<p class="master-block__text">'.$item['text'].'</p>
									<img src="/'.$item['profile_image'].'" alt="">
								</div>'; 
					else if($item['from'] == 'employer')
						$echo .= '<div class="klient-block">
									<p class="klient-block__text">'.$item['text'].'</p>
								</div>'; 
				}
			}else if ($result && $this->session->mode == 'employee') {
				foreach($result as $item) {//Выводим их с помощью цикла
					if($item['from'] == 'employee')
						$echo .= '<div class="klient-block">
									<p class="klient-block__text">'.$item['text'].'</p>
								</div>'; 
					else if($item['from'] == 'employer')
						$echo .= '<div class="master-block">
									<p class="master-block__text">'.$item['text'].'</p>
								</div>'; 
				}
			}
		
		return $echo;//Возвращаем результат работы функции
	}

	public function confirm($id = null)
	{
		if($id != null)
		{
			$this->db->where('id', $id)->set('status', 'mail_phone_pasport_confirmed')->update('users');
			redirect('/admin/users/employee');
		}
	}


	public function anketas($mode = 'employer'){
		if($mode == 'employee'){
			$anketas = ['housekeeper', 'masseur', 'nanny', 'nurse', 'teacher'];
			$anketasru = ['Домработница', 'Массажист', 'Няня', 'Сиделка', 'Репетитор'];
			$files = ['register-09.php', 'register-10.php', 'register-11.php', 'register-13.php', 'register-14.php', 'register-15.php', 'register-16.php'];
			
			if(isset($_POST['data']) && isset($_POST['filename'])){
				file_put_contents($_POST['filename'], $_POST['data']);
			}

			$this->data['anketas'] = array();
			$this->data['anketas_names'] = $anketasru;
			foreach ($anketas as $anketa) {
				$this->data[$anketa] = array();
				foreach ($files as $file){
					if(file_exists('application/views/anketa/'.$anketa.'/'.$file))
						array_push($this->data[$anketa.''], 'application/views/anketa/'.$anketa.'/'.$file);
				}
				array_push($this->data['anketas'], $this->data[$anketa.'']);
			}

			$this->load->view('/admin/anketas/index2', $this->data);
		}elseif($mode == 'employer'){
			$anketas = ['housekeeper', 'masseur', 'nanny', 'nurse', 'teacher'];
			$anketasru = ['Домработница', 'Массажист', 'Няня', 'Сиделка', 'Репетитор'];

			if(isset($_POST['data']) && isset($_POST['filename'])){
				file_put_contents($_POST['filename'], $_POST['data']);
			}

			$this->data['anketas'] = array();
			$this->data['anketas_names'] = $anketasru;
			foreach ($anketas as $anketa) {
				$this->data[$anketa] = array();
				for ($i = 10; $i < 15; $i++){
					if(file_exists('application/views/employer/anketa/'.$anketa.'/'.$anketa.'-'.$i.'.php'))
						array_push($this->data[$anketa.''], 'application/views/employer/anketa/'.$anketa.'/'.$anketa.'-'.$i.'.php');
				}
				array_push($this->data['anketas'], $this->data[$anketa.'']);
			}

			$this->load->view('/admin/anketas/index', $this->data);
		}
	}

}
?>