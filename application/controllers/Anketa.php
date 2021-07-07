<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anketa extends CI_Controller {

	var $data = array();

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('auth_model');
		//die('<pre>This:<br />'.print_r($this, true).'</pre>');

		
	}
	public function index($type = null)
	{
		switch ($type) {
			case 'nanny':
				{$this->db->set('work_type', 'Няня-помощница');$this->session->worktype = 'Няня-помощница';}
				break;
			case 'housekeeper':
				{$this->db->set('work_type', 'Домработница'); $this->session->worktype = 'Домработница';}
				break;
			case 'teacher':
				{$this->db->set('work_type', 'Преподаватель'); $this->session->worktype = 'Преподаватель';}
				break;
			case 'masseur':
				{$this->db->set('work_type', 'Массажист'); $this->session->worktype = 'Массажист';}
				break;
			case 'nurse':
				{$this->db->set('work_type', 'Сиделка'); $this->session->worktype = 'Сиделка';}
				break;
		}
		$this->session->mode = 'employer';
		$code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);

		
		$this->db->set('code', $code);
		$this->db->set('userid', $this->session->user['id']);
		$this->db->insert('employer_anketa');
		$anketa = $this->db->where('code', $code)->get('employer_anketa')->result_array();
		foreach ($anketa as $a) {
			$this->session->parentid = $a['id'];
		}
		$this->load->view('announcement/anketa-1.php');
	}

	public function create($step = null)
	{
		switch ($step) {
			case '0':
			{
				$this->load->view('announcement/anketa-1.php');
				break;
			}
			case '1':
			{
				//$user = $this->db->get('employer_anketa_child')->result_array();
				//$this->db->where('userid', $this->session->user['id'])->delete('employer_anketa_child');
				if(isset($_POST['3_year']))
				{
					//$this->db->set('id', $user['id']+1);
					$this->db->set('parentid', $this->session->parentid);
					$this->db->set('userid', $this->session->user['id']);
					$this->db->set('3_year', $_POST['3_year']);
					$this->db->set('3_6_year', $_POST['3_6_year']);
					$this->db->set('7_year', $_POST['7_year']);
					$this->db->insert('employer_anketa_child');
				}
				$this->load->view('announcement/anketa-2.php');
				break;
			}
			case '2':
			{
				//$type = $this->db->get('employer_anketa_type')->result_array();
				//$this->db->where('userid', $this->session->user['id'])->delete('employer_anketa_type');
				if(isset($_POST['r1']))
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
					$this->load->view('announcement/anketa-3.php');	
				}
				break;
			}
			case '3':
			{
				$schedule = $this->db->get('employer_anketa_schedule')->result_array();
				//$this->db->where('userid', $this->session->user['id'])->delete('employer_anketa_schedule');
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
				$this->load->view('announcement/anketa-4.php');
				break;
			}
			case '4':
			{
				if(isset($_POST))
				{
					//$this->db->where('userid', $this->session->user['id'])->delete('employer_anketa_announcement');
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
				$this->load->view('announcement/anketa-5.php');
				break;
			}
			case 'final':
			{
				//$this->db->where('userid', $this->session->user['id'])->delete('employer_anketa_ideal');
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
	}


	public function nanny($step = null)
	{
		switch ($step) {
			case '1':
			{
				$this->load->view('/anketa/nanny/register-09.php');
				break;
			}
			case '2':
			{
				if(isset($_POST))
				{
					$code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
					$this->db->set('userid', $this->session->user['id'])->set('code', $code)->insert('employee_anketa');
					$this->session->anketaid = $this->db->query('select id from employee_anketa where code='.$code)->result_array();
					$this->db->set('employement_type', $_POST['r1']); 
					$this->db->set('type', 'nanny');
					$tmpl = '';
					for($i = 2; $i < 7; $i++) {
						if(isset($_POST['r'.$i]))$tmpl .= $_POST['r'.$i].' | ';

					}
					$this->db->set('employement_type_2', $tmpl);
					$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
				}
				$this->load->view('/anketa/nanny/register-10.php');
				break;
			}
			case '3':
			{
				if (isset($_POST)) 
				{
					$this->db->set('med_education', $_POST['r1']);
					$this->db->set('baby_care', $_POST['r2']);
					$tmp = '';
					
					for($i = 3; $i < 11; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';

					$this->db->set('baby_care_exp', $tmp);
					$this->db->set('lang_teach', $_POST['r11']);
					
					$tmp = '';
					for($i = 12; $i < 19; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';
					
					for($i = 0; $i < count(explode(',', $_POST['another_lang'])); $i++){
						$tmp .= explode(',', $_POST['another_lang'])[$i].' | ';
					}

					$this->db->set('teaching_lang', $tmp);

					$tmp = '';
					for($i = 19; $i < 23; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';

					$this->db->set('teaching_lang_age', $tmp);
					$this->db->set('lang_lvl', $_POST['lvl']);
					$this->db->set('house_work', $_POST['r23']);

					$tmp = '';
					for($i = 24; $i < 29; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';

					$this->db->set('house_work_type', $tmp);
					$this->db->set('cooking', $_POST['r29']);

					$tmp = '';
					for($i = 30; $i < 36; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';

					$this->db->set('cooking_kichen', $tmp);
					$this->db->set('massage', $_POST['r36']);

					$tmp = '';
					for($i = 37; $i < 43; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';

					$this->db->set('massage_type', $tmp);
					$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
				}
				$this->load->view('/anketa/nanny/register-14.php');
				break;
			}
		}
	}

	public function housekeeper($step = null)
	{
		switch ($step) {
			case '1':
			{
				$this->load->view('/anketa/housekeeper/register-09.php');
				break;
			}
			case '2':
			{
				if(isset($_POST))
				{
					$code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
					$this->db->set('userid', $this->session->user['id'])->set('code', $code)->insert('employee_anketa');
					$this->session->anketaid = $this->db->query('select id from employee_anketa where code='.$code)->result_array();
					$this->db->set('employement_type', $_POST['r1']); 
					$this->db->set('type', 'housekeeper');
					$tmpl = '';
					for($i = 2; $i < 15; $i++)
						if(isset($_POST['r'.$i]))$tmpl .= $_POST['r'.$i].' | ';
					$this->db->set('employement_type_2', $tmpl);
					$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
				}
				$this->load->view('/anketa/housekeeper/register-10.php');
				break;
			}
			case '3':
			{
				if (isset($_POST)) 
				{
					// $this->db->set('med_education', $_POST['r1']);
					$this->db->set('housekeeper_work_exp', $_POST['r2']);

					$tmp = '';
					for($i = 3; $i < 14; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';
					$this->db->set('housekeeper_work_type', $tmp);

					$this->db->set('cooking', $_POST['r14']);

					$tmp = '';
					for($i = 15; $i < 21; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';

					$this->db->set('cooking_kichen', $tmp);

					$this->db->set('extra_skill', $_POST['r21']);

					$tmp = '';
					for($i = 22; $i < 25; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';

					$this->db->set('housekeeper_extra_skill_type', $tmp);
					$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
				}
				$this->load->view('/anketa/housekeeper/register-14.php');
				break;
			}
			
		}
	}

	public function teacher($step = null)
	{
		switch ($step) {
			case '1':
			{
				$this->load->view('/anketa/teacher/register-09.php');
				break;
			}
			case '2':
			{
				if(isset($_POST))
				{
					$code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
					$this->db->set('userid', $this->session->user['id'])->set('code', $code)->insert('employee_anketa');
					$this->session->anketaid = $this->db->query('select id from employee_anketa where code='.$code)->result_array();
					$this->db->set('employement_type', $_POST['r1']); 
					$this->db->set('type', 'teacher');
					$tmpl = '';
					for($i = 2; $i < 15; $i++)
						if(isset($_POST['r'.$i]))$tmpl .= $_POST['r'.$i].' | ';
					$this->db->set('employement_type_2', $tmpl);
					$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
				}
				$this->load->view('/anketa/teacher/register-10.php');
				break;
			}
			case '3':
			{
				if(isset($_POST))
				{
					$tmp = '';
					for($i = 1; $i < 8; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';

					for($i = 0; $i < count(explode(',', $_POST['another_lang'])); $i++){
						$tmp .= explode(',', $_POST['another_lang'])[$i].' | ';
					}
					$this->db->set('teaching_lang', $tmp);
					$this->db->set('lang_lvl', $_POST['lang_lvl']);
					$this->db->set('teacher_wish_work', $_POST['wish_work']);
					$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
				}
				$this->load->view('/anketa/teacher/register-14.php');
				break;
			}
		}
	}

	public function masseur($step = null)
	{
		switch ($step) {
			case '1':
			{
				$this->load->view('/anketa/masseur/register-09.php');
				break;
			}
			case '2':
			{
				if(isset($_POST))
				{
					$code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
					$this->db->set('userid', $this->session->user['id'])->set('code', $code)->insert('employee_anketa');
					$this->session->anketaid = $this->db->query('select id from employee_anketa where code='.$code)->result_array();
					$this->db->set('employement_type', $_POST['r1']); 
					$this->db->set('type', 'masseur');
					$tmpl = '';
					for($i = 2; $i < 5; $i++)
						if(isset($_POST['r'.$i]))$tmpl .= $_POST['r'.$i].' | ';
					$this->db->set('employement_type_2', $tmpl);
					$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
				}
				$this->load->view('/anketa/masseur/register-10.php');
				break;
			}
			case '3':
			{
				if (isset($_POST)) 
				{
					$this->db->set('med_education', $_POST['r1']);
					$tmp = '';
					for($i = 2; $i < 4; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';
					$this->db->set('massage_sex', $tmp);
					$tmp = '';
					for($i = 4; $i < 17; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';
					$this->db->set('massage_type', $tmp);
					$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
				}
				$this->load->view('/anketa/masseur/register-14.php');
				break;
			}
		}
	}

	public function nurse($step = null)
	{
		switch ($step) {
			case '1':
			{
				$this->load->view('/anketa/nurse/register-09.php');
				break;
			}
			case '2':
			{
				if(isset($_POST))
				{
					$code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
					$this->db->set('userid', $this->session->user['id'])->set('code', $code)->insert('employee_anketa');
					$this->session->anketaid = $this->db->query('select id from employee_anketa where code='.$code)->result_array();
					$this->db->set('employement_type', $_POST['r1']); 
					$this->db->set('type', 'nurse');
					$tmpl = '';
					for($i = 2; $i < 6; $i++)
						if(isset($_POST['r'.$i]))$tmpl .= $_POST['r'.$i].' | ';
					$this->db->set('employement_type_2', $tmpl);
					$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
				}
				$this->load->view('/anketa/nurse/register-10.php');
				break;
			}
			case '3':
			{
				if (isset($_POST)) 
				{
					$this->db->set('med_education', $_POST['r1']);
					$tmp = '';
					for($i = 2; $i < 9; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';
					$this->db->set('nurse_med_procedure', $tmp);

					$tmp = '';
					for($i = 9; $i < 13; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';
					$this->db->set('nurse_man_category', $tmp);

					$tmp = '';
					for($i = 13; $i < 16; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';
					$this->db->set('nurse_for', $tmp);

					$tmp = '';
					for($i = 16; $i < 26; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';
					$this->db->set('nurse_diagnos_exp', $tmp);
					$this->db->set('extra_skill', $_POST['r26']);

					$tmp = '';
					for($i = 27; $i < 33; $i++)
						if(isset($_POST['r'.$i]))$tmp .= $_POST['r'.$i].' | ';
					$this->db->set('nurse_tasks', $tmp);

					$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
				}
				$this->load->view('/anketa/nurse/register-14.php');
				break;
			}
		}
	}

	public function working_conditions($mode = null)
	{
		if (isset($_POST)) 
		{
			$this->db->set('residence', $_POST['r1']);
			$this->db->set('hour_earning', $_POST['hour_earning']);
			$this->db->set('mounth_earning', $_POST['mounth_earning']);$v = '';
			foreach ($_POST['day'] as $val)
				$v .= $val.' | ';
			$this->db->set('day_off', $v);
			$this->db->set('employer_location', $_POST['r2']);
			$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
		}
		$this->load->view('/anketa/'.$mode.'/register-11.php');		
	}

	public function announcement($mode = null)
	{
		if(isset($_POST))
		{
			$this->db->set('article', $_POST['article']);
			$this->db->set('description', $_POST['description']);
			$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
			$this->db->where('userid', $this->session->user['id'])->set('description', $_POST['description'])->update('employee');;
		}
		$this->load->view('/anketa/'.$mode.'/register-13.php');	
	}

	public function experience($mode = null)
	{
		if(isset($_POST))
		{
			$this->db->set('experience', $_POST['experience']);
			
			$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
		}
		$this->load->view('/anketa/'.$mode.'/register-15.php');	
	}

	public function work_experience($mode = null)
	{
		if(isset($_POST))
		{			
			$this->db->set('work_experience', $_POST['r1']);

			$tmp = '';
			for($i = 0; $i < count($_POST['country']); $i++)
				if(isset($_POST['country'][$i]))$tmp .= $_POST['country'][$i].' | ';
			$this->db->set('country', $tmp);

			$tmp = '';
			for($i = 0; $i < count($_POST['country_experience']); $i++)
				if(isset($_POST['country_experience'][$i]))$tmp .= $_POST['country_experience'][$i].' | ';
			$this->db->set('country_experience', $tmp);

			$tmp = '';
			for($i = 0; $i < count($_POST['employers']); $i++)
				if(isset($_POST['employers'][$i]))$tmp .= $_POST['employers'][$i].' | ';
			$this->db->set('employers', $tmp);

			$tmp = '';
			for($i = 0; $i < count($_POST['nationalty']); $i++)
				if(isset($_POST['nationalty'][$i]))$tmp .= $_POST['nationalty'][$i].' | ';
			$this->db->set('nationalty', $tmp);

			$tmp = '';
			for($i = 0; $i < count($_POST['duties']); $i++)
				if(isset($_POST['duties'][$i]))$tmp .= $_POST['duties'][$i].' | ';
			$this->db->set('duties', $tmp);
			

			$tmp = '';
			$tmp2 = '';
			for($i = 2; $i < 10; $i++)
				if(isset($_POST['r'.$i]))
				{
					$tmp .= $_POST['r'.$i][0];
					for($j = 1; $j < count($_POST['r'.$i]); $j++)
						if(isset($_POST['r'.$i][$j]))$tmp .= ' @ '.$_POST['r'.$i][$j];

					$tmp2 .= ' | '.$tmp;
					$tmp = '';
				}
					
			$this->db->set('work_experience_child_exp', $tmp2);

			$this->db->where('id', $this->session->anketaid[0]['id'])->update('employee_anketa');
		}
		$this->load->view('/anketa/'.$mode.'/register-16.php');	
	}
}
?>