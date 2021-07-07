<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Chat extends CI_Controller {

	var $data = array();

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('auth_model');
		//die('<pre>This:<br />'.print_r($this, true).'</pre>');

		

	}

	public function create_chat()
	{
		if(isset($_POST))
		{
			if($this->session->mode == 'employer')
			{
				$this->db->set('employerid', $this->session->user['id']);
				$this->db->set('employeeid', $_POST['userid']);
				$this->db->insert('chat');
			}else if($this->session->mode == 'employee')
			{
				$this->db->set('employerid', $_POST['userid']);
				$this->db->set('employeeid', $this->session->user['id']);
				$this->db->insert('chat');
			}

			$echo = '';
		}
		echo $this->update_chats();
	}

	public function update_chats()
	{
		if(isset($_POST))
		{
			$echo = '';
			if($_POST['mode'] == 'employer')
			{
				$chats = array();$ind = 0;
				$chatid = array();

				$id = $this->db->where('employerid', $this->session->user['id'])->select('employeeid')->get('chat')->result_array();
				$chid = $this->db->where('employerid', $this->session->user['id'])->select('chatid')->get('chat')->result_array();
				foreach ($id as $i)
				{
					$chats[$ind] = $this->db->where('userid', $i['employeeid'])->get('employee')->result_array();
					$ind++;
				}
				$idc = 0;
				if(isset($chats) and count($chats) > 0)
					foreach ($chats as $item) {
						foreach ($item as $i) {
							$echo .= '<a style="border-bottom: 1px solid grey;" href="javascript:;" onclick="$(\'#chatid-inp\').attr(\'value\', $(this).attr(\'name\')); return;" name="'.$chid[$idc]['chatid'].'" class="block-left__chat" id="typed-chat-'.$chid[$idc]['chatid'].'">
									<span class="block-img"><img src="/'.$i['profile_image'].'" alt=""></span>
									<span class="block-info">
										<span class="block-info__name">'.$i['name'].'</span>
									</span>
								</a>';
							$idc++;//<span class="block-info__text">Добрый день. Мне важен</span>
						}
					}
				else
					$echo = '<h3 style="margin: 0 auto; color: grey;">У вас пока нет чатов</h3>';
			}else if($_POST['mode'] == 'employee')
			{
				$chats = array();$ind = 0;
				$chatid = array();
				$id = $this->db->where('employeeid', $this->session->user['id'])->select('employerid')->get('chat')->result_array();
				$chid = $this->db->where('employeeid', $this->session->user['id'])->select('chatid')->get('chat')->result_array();
				foreach ($id as $i)
				{
					$chats[$ind] = $this->db->where('id', $i['employerid'])->get('users')->result_array();
					$ind++;
				}

				$idc = 0;
				if(isset($chats) and count($chats) > 0)
					foreach ($chats as $item) {
						foreach ($item as $i) {
							$echo .= '<a style="border-bottom: 1px solid grey;" href="javascript:;" onclick="$(\'#chatid-inp\').attr(\'value\', $(this).attr(\'name\')); return;" name="'.$chid[$idc]['chatid'].'" class="block-left__chat active" id="typed-chat-'.$chid[$idc]['chatid'].'">
									<span class="block-info">
										<span class="block-info__name">'.$i['sname'].'</span>
									</span>
								</a>';
							$idc++;//<span class="block-info__text">Добрый день. Мне важен</span>
						}
					}
				else
					$echo = '<h3 style="margin: 0 auto; color: grey;">У вас пока нет чатов</h3>';
			}
		}
		echo $echo;
	}

	public function message($chatid = null)
	{
		$this->data['messages'] = $this->db->where('chatid', $chatid)->get('chat_messages')->result_array();
		$this->load->view('employer-profil.php', $this->data);
	}

	public function send_message()
	{
		if(isset($_POST['act'])) {$act = $_POST['act'];}
		if(isset($_POST['var1'])) {$var1 = $_POST['var1'];}
		if(isset($_POST['var2'])) {$var2 = $_POST['var2'];}
		if(isset($_POST['chatid'])) {$chatid = $_POST['chatid'];}
		if(isset($_POST['mode'])) {$this->session->mode = $_POST['mode'];}

		switch($_POST['act']) {//В зависимости от значения act вызываем разные функции
			case 'load': 
				$echo = $this->load($chatid); //Загружаем сообщения
			break;
			
			case 'send': 
				if(isset($var1) and strlen($var1) > 0) {
					$echo = $this->send($var1, $chatid); //Отправляем сообщение
				}else{return;}
			break;
		}

		echo $echo;//Выводим результат работы кода
	}

	public function send($message, $chatid) {
			$message = htmlspecialchars($message);//Заменяем символы ‘<’ и ‘>’на ASCII-код
			$message = trim($message); //Удаляем лишние пробелы
			$message = addslashes($message); //Экранируем запрещенные символы
			$this->db->set('text', $message);
			$this->db->set('time', time());
			$this->db->set('from', $this->session->mode);
			$this->db->set('chatid', $chatid);
			$this->db->insert('chat_messages');
		return $this->load($chatid); //Вызываем функцию загрузки сообщений
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


}


?>