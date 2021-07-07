<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	var $data = array();
	var $parentid;
	var $type;

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('auth_model');
		//die('<pre>This:<br />'.print_r($this, true).'</pre>');

	}

	public function index($type = null, $mode = null)
	{
		if (isset($this->session->lang))
		{
			$this->data['lang'] = $this->session->lang;
		}
		else $this->data['lang'] = array('tr'=>'RU', 'lang'=>'russian');
		$this->lang->load('all_lang', $this->data['lang']['lang']);

		if($mode != null and $mode == 'employee')
		{
			$this->session->mode = $mode;
			switch ($type) {
				case 'nanny':
					$this->session->worktype = 'Няня-помощница';
					break;
				case 'housekeeper':
					$this->session->worktype = 'Домработница';
					break;
				case 'teacher':
					$this->session->worktype = 'Преподаватель';
					break;
				case 'masseur':
					$this->session->worktype = 'Массажист';
					break;
				case 'nurse':
					$this->session->worktype = 'Сиделка';
					break;
			}
			$this->load->view('register-1-01.php');
			return;
		}else
		{
			$this->session->mode = 'employer';
			switch ($type) {
				case 'nanny':
					{$this->db->set('work_type', 'Няня-помощница');$this->session->work_type = 'nanny';$this->session->worktype = 'Няня-помощница';}
					break;
				case 'housekeeper':
					{$this->db->set('work_type', 'Домработница'); $this->session->work_type = 'housekeeper';$this->session->worktype = 'Домработница';}
					break;
				case 'teacher':
					{$this->db->set('work_type', 'Преподаватель');$this->session->work_type = 'teacher'; $this->session->worktype = 'Преподаватель';}
					break;
				case 'masseur':
					{$this->db->set('work_type', 'Массажист');$this->session->work_type = 'masseur'; $this->session->worktype = 'Массажист';}
					break;
				case 'nurse':
					{$this->db->set('work_type', 'Сиделка');$this->session->work_type = 'nurse'; $this->session->worktype = 'Сиделка';}
					break;
			}

			$code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);

			$this->db->set('code', $code);
			$this->db->insert('employer_anketa');
			$anketa = $this->db->where('code', $code)->get('employer_anketa')->result_array();
			foreach ($anketa as $a)
				$this->session->parentid = $a['id'];
			
			$this->load->view('employer/employer-register.php');
				
		}
	}

	public function change_lang()
	{
		if(isset($_POST))
			if (isset($this->session->lang))
			{
				$lang = $this->session->lang;
				if($_POST['type'] == 'ru')
					$lang = array('tr'=>'RU', 'lang'=>'russian');
				else if($_POST['type'] == 'en')
					$lang = array('tr'=>'EN', 'lang'=>'english');
			}
			else $lang = array('tr'=>'EN', 'lang'=>'english');

			$this->session->lang = $lang;
			redirect($_SERVER['HTTP_REFERER']);

	}

	public function step($mode = null, $step = null)
	{
		switch ($mode) 
		{
			case 'employer':
			{
				switch($step)
				{
					case '1':
					{
						if(isset($_POST['registration']))
						{
							$code = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
							$this->db->set('fname', $_POST['surname']);
							$this->db->set('sname', $_POST['name']);
							$this->db->set('mname', $_POST['thirdname']);
							$this->db->set('email', $_POST['mail']);
							$this->db->set('type', $mode);
							$this->db->set('pass', sha1($_POST['pass'])); 
							$this->db->set('status', 'uncomfirmed');
							$this->db->set('code', $code);
							$this->db->insert('users');					
							mail($_POST['mail'], 'Подтверждение почты', $code);
							$userdata = $this->db->where('code', $code)->where('email', $_POST['mail'])->get('users')->row_array();
							$this->session->user = $userdata;

							//setcookie("user_session", "qwe");

							$this->data['code'] = $code;
							$this->db->where('id', $this->session->parentid)->set('userid', $this->session->user['id'])->update('employer_anketa');

							$this->load->view('employer/employer-register-9.php', $this->data);
						}
						break;
					}
					case 'phone': 
					{
						if(isset($_POST['phone']))
						{
							$phone = $_POST['phone'];
							// Сперва поиск в базе пользователей
							// $phone = str_replace('+7', '', $_POST['phone']);
							// $phone = preg_replace("#[^0-9]#", '', $phone);
							// if (!preg_match("#^[0-9]{10}$#", $phone))
							// {
							// 	$this->data['error'] = 'Неверный формат ввода';
							// 	$this->data['phone'] = $_POST['phone'];
							// 	$this->load->view('employer/employer-phone.php', $this->data);
							// }else
							// {
								$code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
								require_once 'Sms.php';
 
								// Отправка SMS
								Sms::send($_POST['phone'], 'Код для подтверждение телефона: '.$code);
								 
								// Запрос баланса
								//echo Sms::getBalance();
								mail( '', '', 'Код подтверждения: '.$code);
								
								$this->db->where('id', $this->session->user['id'])->set('phone', $phone)->set('phone_code', $code)->update('users');

								$userdata = $this->db->where('phone', $phone)->where('token', $this->session->user['token'])->get('users')->row_array();
								$this->session->user = $userdata;
								$this->data['code'] = $code;
								$this->load->view('employer/employer-register-9-2.php', $this->data);
							//}
						}
						break;
					}
					case 'confirm_phone':
					{
						if(isset($_POST['code']))
						{
							//echo $this->session->user['id'];
							$userdata = $this->db->where('id', $this->session->user['id'])->get('users')->row_array();
								$this->session->user = $userdata;
								//echo $_POST['code'] .' '. $this->session->user['code'].' '.$this->session->user['id'];
							// if($_POST['code'] == $this->session->user['phone_code'])
							// {
								$this->db->where('id', $this->session->user['id'])->set('status', 'mail_phone_confirmed')->update('users');

								$this->load->view('employer/employer-address.php');
							// }else{
							// 	$this->load->view('employer/employer-register-9-2.php', $this->data);
							// }
						}
						
						break;
					}
					case 'confirm_mail':
					{
						if(isset($_POST['code']))
						{
							$userdata = $this->db->where('id', $this->session->user['id'])->get('users')->row_array();
							$this->session->user = $userdata;
							//if($this->session->user['code'] == $_POST['code'])
							//{
								$this->db->where('id', $this->session->user['id'])->set('status', 'mail_confirmed')->update('users');
								$this->load->view('employer/employer-phone.php');
							// }else{
							// 	$this->load->view('employer/employer-register-9.php');
							// }
						}
						break;
					}
				}
				break;
			}

		}
	}

	public function employee($step = null)
	{
		if(isset($step))
			switch ($step) {
				case '1':
				{
					$this->load->view('register-1-01.php');
					break;
				}
				case '2':
				{
					if(isset($_POST))
					{
						$code = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
						$this->db->set('fname', $_POST['surname']);
						$this->db->set('sname', $_POST['name']);
						$this->db->set('mname', $_POST['thirdname']);
						$this->db->set('email', $_POST['mail']);
						$this->db->set('type', 'employee');
						$this->db->set('pass', sha1($_POST['pass']));
						$this->db->set('status', 'unconfirmed');
						$this->db->set('code', $code);
						$this->db->insert('users');
						mail($_POST['mail'], 'Подтверждение почты', 'Код подтверждения почты '.$code);
						$userdata = $this->db->where('code', $code)->where('pass', sha1($_POST['pass']))->get('users')->row_array();
						$this->session->user = $userdata;

						$this->db->set('userid', $this->session->user['id']);
						$this->db->set('surname', $_POST['surname']);
						$this->db->set('name', $_POST['name']);
						$this->db->set('thirdname', $_POST['thirdname']);
						$this->db->set('email', $_POST['mail']);
						$this->db->set('pass', sha1($_POST['pass']));
						$this->db->set('work_type', $this->session->worktype);
						
						
						$this->db->insert('employee');
						$this->data['code'] = $code;
					}
					$this->load->view('register-1-02.php', $this->data);
					break;
				}
				case '3':
				{
					$this->load->view('register-1-04.php');
					break;
				}
				case '4':
				{
					if(isset($_POST))
					{
						$this->db->set('fname', $_POST['surname']);
						$this->db->set('sname', $_POST['name']);
						$this->db->set('mname', $_POST['thirdname']);
						$this->db->where('id', $this->session->user['id'])->update('users');

						$userdata = $this->db->where('fname', $_POST['surname'])->where('sname', $_POST['name'])->where('mname', $_POST['thirdname'])->get('users')->row_array();
						$this->session->user = $userdata;

						$this->db->set('sex', $_POST['sex']);
						$this->db->set('nationality', $_POST['nationality']);
						$this->db->set('birthday', $_POST['birthday']);
						$this->db->set('marital_status', $_POST['marital_status']);
						$this->db->set('metro', $_POST['metro']);
						$this->db->set('child_count', $_POST['child_count']);
						$this->db->set('surname', $_POST['surname']);
						$this->db->set('name', $_POST['name']);
						$this->db->set('thirdname', $_POST['thirdname']);
						$this->db->where('userid', $this->session->user['id'])->update('employee');
					}
					$this->load->view('register-1-05.php');
					break;
				}
				case '5':
				{
					if ((isset($_FILES)) && (count($_FILES)>0)) foreach($_FILES as $key => $item)
					{
						if (is_uploaded_file($item['tmp_name']))
						{
							$fname = sha1_file($item['tmp_name']);
							$ext = explode('.', $item['name']);
							$ext = end($ext);
							$fname .= '.'.$ext;
							if (!file_exists('images/employee')) mkdir('images/employee');
							if (!file_exists('images/employee/'.$key)) mkdir('images/employee/'.$key);
							move_uploaded_file($item['tmp_name'], 'images/employee/'.$key.'/'.$fname);
							
							$this->db->where('userid', $this->session->user['id'])->set('profile_image', 'images/employee/'.$key.'/'.$fname)->update('employee');
						}
					}
	                $this->load->view('register-1-06.php');
	                break;
				}
				case '6':
				{
					if(isset($_POST))
					{
						$this->db->set('education', $_POST['education']);
						$this->db->set('religion', $_POST['religion']);
						$this->db->set('lang', $_POST['lang']);
						$another_lang = '';
						$lan = array('en', 'du', 'fr', 'it', 'sp','ch', 'jp');
						foreach ($lan as $l) {
							if(isset($_POST[$l]))
							{
								$another_lang .= $_POST[$l].' ';
							}
						}
						$this->db->set('another_lang', $another_lang);
						$this->db->where('userid', $this->session->user['id'])->update('employee');	
						$this->load->view('register-1-07.php'); 
					}
					break;
				}
				case '7':
				{	
					if ((isset($_FILES)) && (count($_FILES)>0)) foreach($_FILES as $key => $item)
					{
						if (is_uploaded_file($item['tmp_name']))
						{
							$fname = sha1_file($item['tmp_name']);
							$ext = explode('.', $item['name']);
							$ext = end($ext);
							$fname .= '.'.$ext;
							if (!file_exists('images/employee')) mkdir('images/employee');
							if (!file_exists('images/employee/'.$key)) mkdir('images/employee/'.$key);
							move_uploaded_file($item['tmp_name'], 'images/employee/'.$key.'/'.$fname);

							$this->db->where('userid', $this->session->user['id'])->set('pasport_image', 'images/employee/'.$key.'/'.$fname)->set('regdate', date('d.m.yy'))->update('employee');
						}
					}
	                $this->load->view('register-1-08.php');
	                break;
				}
				case 'adress':
				{	
					if ($_POST['adress'])
					{
						$this->db->where('id', $this->session->user['id'])->set('address', $_POST['adress'])->update('users');
					}
	                $this->load->view('register-1-03.php');
	                break;
				}
				case 'confirm_mail':
				{
					// if(isset($_POST['code']))
					// {
						$userdata = $this->db->where('id', $this->session->user['id'])->get('users')->row_array();
						$this->session->user = $userdata;
						// if($this->session->user['code'] == $_POST['code'])
						// {
							$this->db->where('id', $this->session->user['id'])->set('status', 'mail_confirmed')->update('users');
							$this->load->view('register-phone.php');
						//}
					//}
					break;
				}
				case 'phone':
				{
					//if(isset($_POST['phone']))
					//{
						//$this->db->where('phone_code', $_POST['code'])->set('status', 'confirmed')->update('users');
						
					//}

					if(isset($_POST['phone']))
						{
							$phone = $_POST['phone'];
							// Сперва поиск в базе пользователей
							// $phone = str_replace('+7', '', $_POST['phone']);
							// $phone = preg_replace("#[^0-9]#", '', $phone);
							// if (!preg_match("#^[0-9]{10}$#", $phone))
							// {
							// 	$this->data['error'] = 'Неправильный номер телефона';
							// 	$this->data['phone'] = $_POST['phone'];
							// 	$this->load->view('register-phone.php', $this->data);
							// 	die();
							// }else
							// {
								$code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
								require_once 'Sms.php';
 
								// Отправка SMS
								Sms::send($_POST['phone'], 'Код для подтверждение телефона: '.$code);
								 
								// Запрос баланса
								//echo Sms::getBalance();
								mail( '', '', 'Код подтверждения: '.$code);
								
								$this->db->where('id', $this->session->user['id'])->set('phone', $phone)->set('phone_code', $code)->update('users');

								$userdata = $this->db->where('phone', $phone)->where('phone_code', $code)->get('users')->row_array();
								$this->session->user = $userdata;
								$this->data['code'] = $code;
							//}
							$this->data['mode'] = 'employee';
							$this->load->view('login-ok.php', $this->data);
						}
					
					break;
				}
				case 'confirm_phone':
				{
					// if(isset($_POST['code']))
					// {
						$userdata = $this->db->where('id', $this->session->user['id'])->get('users')->	row_array();
						$this->session->user = $userdata;
						// if($_POST['code'] == $this->session->user['phone_code'])
						// {
							$this->db->where('id', $this->session->user['id'])->set('status', 'mail_phone_confirmed')->update('users');

							$this->load->view('register-address.php');
						// }else
						// 	$this->load->view('login-ok.php', $this->data);
					//}
				}
					break;
			}
		else
			$this->load->view('register-1-01.php');
	}

	public function anketas($step = null, $type = null)
	{
		if(isset($_POST['address']))
		{
			$this->db->set('address', $_POST['address'])->where('id', $this->session->user['id'])->update('users');
			if($type == 'nanny')
				$this->load->view('employer/employer-register-10.php');
			else
				$this->load->view('employer/anketa/'.$this->session->work_type.'/'.$this->session->work_type.'-10.php');
		}
		else if(!isset($_POST['address']) and $type == null){
			$this->load->view('employer/employer-address.php');
		}

		if($type == 'nanny')
		switch ($step) 
		{
			case '0':
			{
				$this->load->view('/employer/employer-register-10.php');
				break;
			}
			case '1':
			{
				//$user = $this->db->get('employer_anketa_child')->result_array();
				if(isset($_POST['3_year']))
				{
					$this->db->set('parentid', $this->session->parentid);
					$this->db->set('userid', $this->session->user['id']);
					$this->db->set('3_year', $_POST['3_year']);
					$this->db->set('3_6_year', $_POST['3_6_year']);
					$this->db->set('7_year', $_POST['7_year']);
					$this->db->insert('employer_anketa_child');
				}
				$this->load->view('/employer/employer-register-11.php');
				break;
			}
			case '2':
			{
				//$type = $this->db->get('employer_anketa_type')->result_array();
				if(isset($_POST))
				{
					//$this->db->set('id', count($type));
					$this->db->set('parentid', $this->session->parentid);
					$this->db->set('userid', $this->session->user['id']);
					$this->db->set('employment_type', $_POST['r1']);

					$duties = '';

					if(isset($_POST['hour_nanny']))$duties .= $_POST['hour_nanny'];
					if(isset($_POST['shift_nanny']))$duties .=  ' | '.$_POST['shift_nanny'];
					if(isset($_POST['accompanying_nanny']))$duties .= ' | '.$_POST['accompanying_nanny'];
					if(isset($_POST['kindergarten_nanny']))$duties .= ' | '.$_POST['kindergarten_nanny'];
					if(isset($_POST['weekend_nanny']))$duties .= ' | '.$_POST['weekend_nanny'];

					$this->db->set('employer_duties', $duties);

					$this->db->insert('employer_anketa_type');
					$this->load->view('/employer/employer-register-12.php');	
				}
				break;
			}
			case '3':
			{
				if(isset($_POST['r1']))
				{
					//$this->db->set('id', count($schedule));
					$this->db->set('parentid', $this->session->parentid);
					$this->db->set('userid', $this->session->user['id']);
					$this->db->set('date_decided', $_POST['r1']);
					if(isset($_POST['c1']))$this->db->set('pn', $_POST['c1']);
					if(isset($_POST['c2']))$this->db->set('vt', $_POST['c2']);
					if(isset($_POST['c3']))$this->db->set('sr', $_POST['c3']);
					if(isset($_POST['c4']))$this->db->set('cht', $_POST['c4']);
					if(isset($_POST['c5']))$this->db->set('pt', $_POST['c5']);
					if(isset($_POST['c6']))$this->db->set('sb', $_POST['c6']);
					if(isset($_POST['c7']))$this->db->set('vs', $_POST['c7']);
					$this->db->set('start_time', $_POST['start']);
					$this->db->set('end_time', $_POST['end']);
					$this->db->set('start_date', $_POST['start_date']);
					$this->db->insert('employer_anketa_schedule');
				}
				$this->load->view('employer/employer-register-13.php');
				break;
			}
			case '4':
			{
				if(isset($_POST))
				{
					$i = 1;
					$this->db->set('parentid', $this->session->parentid);
					$this->db->set('userid', $this->session->user['id']);
					foreach ($_POST['day'] as $val) {
						$this->db->set('restday'.$i, $val);
						$i++;
					}
					if(isset($_POST['r1']))$this->db->set('location', $_POST['r1']);
					if(isset($_POST['r2']))$this->db->set('residence', $_POST['r2']);
					if(isset($_POST['sqr']))$this->db->set('square', $_POST['sqr']);
					if(isset($_POST['article']))$this->db->set('article', $_POST['article']);
					if(isset($_POST['description']))$this->db->set('description', $_POST['description']);
					if(isset($_POST['nationality']))$this->db->set('national', $_POST['nationality']);
					if(isset($_POST['metro']))$this->db->set('metro', $_POST['metro']);
					if(isset($_POST['get_type']))$this->db->set('get_type', $_POST['get_type']);
					if(isset($_POST['time_to_get']))$this->db->set('time_to_get', $_POST['time_to_get']);
					if(isset($_POST['phone']))$this->db->set('telephone', $_POST['phone']);
					if(isset($_POST['is_num_visible']))$this->db->set('is_num_visible', $_POST['is_num_visible']);
					$this->db->set('work_type', $this->session->worktype);
					$this->db->insert('employer_anketa_announcement');
				}
				$this->load->view('employer/employer-register-14.php');
				break;
			}
			case 'final':
			{
				if(isset($_POST))
				{
					$fields = array('nationality', 'sex', 'education', 'earning', 'period', 'lang_experience_1', 'lang_experience_2', 'lang_experience_3', 'lang_experience_4', 'lang_experience_5', 'lang_experience_6', 'lang_experience_7', 'lang_experience_8', 'age', 'med_education', 'child_care', 'care_experience_1', 'care_experience_2', 'care_experience_3', 'care_experience_4', 'care_experience_5', 'care_experience_6', 'care_experience_7', 'care_experience_8', 'learn_eng', 'child_learn_lang_1', 'child_learn_lang_2', 'child_learn_lang_3', 'child_learn_lang_4', 'child_learn_lang_5', 'child_learn_lang_6', 'child_learn_lang_7','child_learn_lang_age_1', 'child_learn_lang_age_2', 'child_learn_lang_age_3', 'child_learn_lang_age_4', 'lang_lvl', 'homework', 'homework_type_1', 'homework_type_2', 'homework_type_3', 'homework_type_4', 'homework_type_5', 'cooking', 'kichen_1', 'kichen_2', 'kichen_3', 'kichen_4', 'kichen_5', 'kichen_6', 'massage', 'massage_type_1', 'massage_type_2', 'massage_type_3', 'massage_type_4', 'massage_type_5', 'massage_type_6');

					$this->db->set('parentid', $this->session->parentid);
					$this->db->set('userid', $this->session->user['id']);
					foreach ($fields as $f)
					{
						if(isset($_POST[$f]))
							$this->db->set($f, $_POST[$f]);
					}
					$this->db->insert('employer_anketa_ideal');
					$this->data['announcement'] = $this->db->where('userid', $this->session->user['id'])->get('employer_anketa_announcement')->result_array();
					redirect('/pages/home');
					$this->load->view('employer/employer-profil.php', $this->data);
				}
				break;
			}
		}
		if($type != 'nanny')
		switch ($step) {
			case '0':
			{
				$this->load->view('/employer/anketa/'.$type.'/'.$type.'-10.php');
				break;
			}
			case '1':
			{
				if(isset($_POST))
				{
					$this->db->set('parentid', $this->session->parentid);
					$this->db->set('userid', $this->session->user['id']);
					$this->db->set('3_year', $_POST['3_year']);
					$this->db->set('3_6_year', $_POST['3_6_year']);
					$this->db->set('7_year', $_POST['7_year']);
					$this->db->insert('employer_anketa_child');
				}
				$this->load->view('employer/anketa/'.$type.'/'.$type.'-11.php');
				break;
			}
			case '2':
			{
				if(isset($_POST))
				{
					$this->db->set('parentid', $this->session->parentid);
					$this->db->set('userid', $this->session->user['id']);
					$this->db->set('employment_type', $_POST['r1']);

					$duties = '';

					for($i = 2; $i < 10; $i++)
						if(isset($_POST['r'.$i]))$duties .= $_POST['r'.$i].' | ';

					$this->db->set('employer_duties', $duties);
					$this->db->insert('employer_anketa_type');
				}
				$this->load->view('employer/anketa/'.$type.'/'.$type.'-12.php');
				break;
			}
			case '3':
			{
				if(isset($_POST))
				{
					$this->db->set('parentid', $this->session->parentid);
					$this->db->set('userid', $this->session->user['id']);
					$this->db->set('date_decided', $_POST['r1']);
					if(isset($_POST['c1']))$this->db->set('pn', $_POST['c1']);
					if(isset($_POST['c2']))$this->db->set('vt', $_POST['c2']);
					if(isset($_POST['c3']))$this->db->set('sr', $_POST['c3']);
					if(isset($_POST['c4']))$this->db->set('cht', $_POST['c4']);
					if(isset($_POST['c5']))$this->db->set('pt', $_POST['c5']);
					if(isset($_POST['c6']))$this->db->set('sb', $_POST['c6']);
					if(isset($_POST['c7']))$this->db->set('vs', $_POST['c7']);
					
					$this->db->set('start_time', $_POST['start']);
					$this->db->set('end_time', $_POST['end']);
					$this->db->set('start_date', $_POST['start_date']);

					$this->db->insert('employer_anketa_schedule');
				}
				$this->load->view('employer/anketa/'.$type.'/'.$type.'-13.php');
				break;
			}
			case '4':
			{
				if(isset($_POST))
				{
					$i = 1;
					$this->db->set('parentid', $this->session->parentid);
					$this->db->set('userid', $this->session->user['id']);
					foreach ($_POST['day'] as $val) {
						$this->db->set('restday'.$i, $val);
						$i++;
					}
					if(isset($_POST['r1']))$this->db->set('location', $_POST['r1']);
					if(isset($_POST['r2']))$this->db->set('residence', $_POST['r2']);
					if(isset($_POST['r3']))$this->db->set('square', $_POST['r3']);
					if(isset($_POST['r4']))$this->db->set('med_education', $_POST['r4']);
					if(isset($_POST['r5']) && isset($_POST['r6']))$this->db->set('massage', $_POST['r5'].' | '.$_POST['r6']);

					$duties_h = '';
					for($i = 11; $i < 24; $i++)
						if(isset($_POST['r'.$i]))$duties_h .= $_POST['r'.$i].' | ';
					$this->db->set('duties_h', $duties_h);

					$additional_h = '';
					for($i = 24; $i < 30; $i++)
						if(isset($_POST['r'.$i]))$additional_h .= $_POST['r'.$i].' | ';
					$this->db->set('additional_h', $additional_h);

					$ill = '';
					for($i = 1; $i < 12; $i++)
						if(isset($_POST['ill'.$i]))$ill .= $_POST['ill'.$i].' | ';
					$this->db->set('ill', $ill);

					$age = '';
					for($i = 1; $i < 5; $i++)
						if(isset($_POST['age'.$i]))$age .= $_POST['age'.$i].' | ';
					$this->db->set('age', $age);

					$category = '';
					for($i = 1; $i < 7; $i++)
						if(isset($_POST['c'.$i]))$category .= $_POST['c'.$i].' | ';
					$this->db->set('category', $category);

					if(isset($_POST['article']))$this->db->set('article', $_POST['article']);
					if(isset($_POST['description']))$this->db->set('description', $_POST['description']);
					if(isset($_POST['nationality']))$this->db->set('national', $_POST['nationality']);
					if(isset($_POST['metro']))$this->db->set('metro', $_POST['metro']);
					if(isset($_POST['get_type']))$this->db->set('get_type', $_POST['get_type']);
					if(isset($_POST['time_to_get']))$this->db->set('time_to_get', $_POST['time_to_get']);
					if(isset($_POST['phone']))$this->db->set('telephone', $_POST['phone']);
					if(isset($_POST['is_num_visible']))$this->db->set('is_num_visible', $_POST['is_num_visible']);
					$this->db->set('work_type', $this->session->worktype);
					$this->db->insert('employer_anketa_announcement');
				}
				$this->load->view('employer/anketa/'.$type.'/'.$type.'-14.php');
				break;
			}
			case 'final':
			{
				if(isset($_POST))
				{
					$fields = array('nationality', 'sex', 'education', 'earning', 'period', 'lang_experience_1', 'lang_experience_2', 'lang_experience_3', 'lang_experience_4', 'lang_experience_5', 'lang_experience_6', 'lang_experience_7', 'lang_experience_8', 'age', 'med_education', 'child_care', 'care_experience_1', 'care_experience_2', 'care_experience_3', 'care_experience_4', 'care_experience_5', 'care_experience_6', 'care_experience_7', 'care_experience_8', 'learn_eng', 'child_learn_lang_1', 'child_learn_lang_2', 'child_learn_lang_3', 'child_learn_lang_4', 'child_learn_lang_5', 'child_learn_lang_6', 'child_learn_lang_7','child_learn_lang_age_1', 'child_learn_lang_age_2', 'child_learn_lang_age_3', 'child_learn_lang_age_4', 'lang_lvl', 'homework', 'homework_type_1', 'homework_type_2', 'homework_type_3', 'homework_type_4', 'homework_type_5', 'cooking', 'kichen_1', 'kichen_2', 'kichen_3', 'kichen_4', 'kichen_5', 'kichen_6', 'massage', 'massage_type_1', 'massage_type_2', 'massage_type_3', 'massage_type_4', 'massage_type_5', 'massage_type_6');

					if(isset($_POST['nationality']))$this->db->set('nationality', $_POST['nationality']);
					if(isset($_POST['exp']))$this->db->set('exp', $_POST['exp']);
					if(isset($_POST['old_exp']))$this->db->set('old_exp', $_POST['old_exp']);
					if(isset($_POST['sex']))$this->db->set('sex', $_POST['sex']);
					if(isset($_POST['education']))$this->db->set('education', $_POST['education']);
					if(isset($_POST['earning']))$this->db->set('earning', $_POST['earning']);
					if(isset($_POST['period']))$this->db->set('period', $_POST['period']);

					$this->db->set('parentid', $this->session->parentid);
					$this->db->set('userid', $this->session->user['id']);
					foreach ($fields as $f)
					{
						if(isset($_POST[$f]))
							$this->db->set($f, $_POST[$f]);
					}
					$this->db->insert('employer_anketa_ideal');
					$this->data['announcement'] = $this->db->where('userid', $this->session->user['id'])->get('employer_anketa_announcement')->result_array();
					redirect('/pages/home');
					$this->load->view('employer/employer-profil.php', $this->data);
				}
				break;
			}
		}
	}

	public function confirm_mail($token)
	{
		$users = $this->db->where('token', $token)->get('users')->row_array();
		if($users)
			$this->db->where('token', $token)->set('status', 'completed')->update('users');
		else
			echo 'error';
	}
}

?>