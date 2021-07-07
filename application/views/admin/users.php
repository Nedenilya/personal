<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
	<!-- style -->
	<link rel="stylesheet" href="/user_tpl/css/main.css">
	<link rel="stylesheet" href="/user_tpl/css/media.css">

	<title>admin</title>
</head>
<body>

	<div class="mob-menu reg" id="mobMenu">
		<a href="javascript:;" class="exit-mob" id="exitMob"><img src="/user_tpl/img/exit-mob.svg" alt=""></a>
		<div class="header-cont__services-link">
			<a href="javascript:;" id="popOne1" class="header-cont__servlink">Помощь</a>
			<a href="/pages/faq" class="header-cont__servlink">Часто задаваемые вопросы</a>
		</div>

		<div class="header-cont__language">
			<img src="/user_tpl/img/one-section/en.png" alt="en" data-google-lang="en" class="language__img">
			<img src="/user_tpl/img/one-section/ru.png" alt="ru" data-google-lang="ru" class="language__img">
			<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
		</div>
	</div>

	<div class="header">
		<div class="container">
			<div class="header-cont">
				<div class="header-cont__header-left">
					<a href="/" class="b-left__link"><img src="/user_tpl/img/arrowleft-btn.svg" alt=""></a>
					<!-- <a href="javascript:;" class="burger" id="burger"><img src="/user_tpl/img/burger.svg" alt=""></a> -->
					<a href="/" class="header-cont__logo">
						<img src="/user_tpl/img/one-section/logo.svg" alt="">
					</a>
				</div>
				<div>
					<a href="/admin/users/employee" style="font-size: 13px; font-weight: 400;">Работники</a>
				</div>
				<div>
					<a href="/admin/users/employer" style="font-size: 13px; font-weight: 400;">Работодатели</a>
				</div>
				<div>
					<a href="/admin/anketas/employee" style="font-size: 13px; font-weight: 400;">Анкеты соискателей</a>
				</div>
				<div>
					<a href="/admin/anketas/employer" style="font-size: 13px; font-weight: 400;">Анкеты работодателей</a>
				</div>
				<?php if($this->session->admin[0]['priv'] == 'admin'){ ?>
				<div>
					<a href="/admin/users/manager" style="font-size: 13px; font-weight: 400;">Менеджеры</a>
				</div>
				<?php }?>
				<div class="header-cont__header-right">
					<div class="header-cont__language desctop reg">
						<img src="/user_tpl/img/one-section/en.png" alt="en" data-google-lang="en" class="language__img">
			<img src="/user_tpl/img/one-section/ru.png" alt="ru" data-google-lang="ru" class="language__img">
			<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
					</div>
					<a href="javascript:;" class="burger-two" id="burger"><img src="/user_tpl/img/burger-2.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
	<div class="reg-block">
		<?php if($mode == 'employer'){ ?>
			<div style="padding: 10px 0 50px 0; font-size: 20px; font-weight: 600;">Работодатели</div>
		<?php }elseif($mode == 'employee'){ ?>
			<div style="padding: 10px 0 50px 0; font-size: 20px; font-weight: 600;">Соискатели</div>
		<?php }elseif($mode == 'manager'){ ?>
			<div style="padding: 10px 0 50px 0; font-size: 20px; font-weight: 600;">Менеджеры</div>
		<?php } ?>
		
<?php 
if(isset($users) && count($users)>0){
	if($mode == 'employer') {
?>
			<table>
                <thead>
                    <tr>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>E-mail</th>
                        <th>Телефон</th>
                        <th>Тип</th>
                        <th>Адрес</th>
                    </tr>
                </thead>
                <tbody>  
<?php }else if($mode == 'employee'){ ?>
			<table>
				<thead>
                    <tr>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>E-mail</th>
                        <th>Телефон</th>
                        <th>Тип</th>
                        <th>Адрес</th>
                        <th>Управление</th>
                    </tr>
                </thead>
                <tbody> 
<?php }else if($mode == 'manager'){ ?>
	<form action="/admin/createmanager" method="post">
		<label for="name">Имя</label>
		<input type="text" name="name">
		<label for="pass">Пароль</label>
		<input type="text" name="pass">
		<label for="email">Почта</label>
		<input type="text" name="email">
		<label for="access">Доступ</label>
		<input type="text" name="access" value="0">

		<input type="submit" value="Создать менеджера">
	</form>	
	<br><br>
			<table>
				<thead>
                    <tr>
                        <th>Имя</th>
                        <th>E-mail</th>
                        <th>Доступ</th>
                        <th>Управление</th>
                    </tr>
                </thead>
                <tbody> 
<?php
}
if($mode == 'manager')
	foreach($users as $item)
	{
?>

					<tr>
						<form method="post" action="/admin/save/<?=$item['id']?>">
	                        <td>
	                        	<input type="text" name="name" class="input-user input_client_<?=$item['id']?>" value="<?=$item['name']?>" disabled="disabeld">
	                        </td>
	                        <td>
	                        	<input type="text" name="email" class="input-user input_client_<?=$item['id']?>" value="<?=$item['email']?>" disabled="disabeld">
	                        </td>
	                        <td>
	                        	<input type="text" name="access" class="input-user input_client_<?=$item['id']?>" value="<?=$item['access']?>">
	                        </td>
	                        <td>
	                        	<input type="submit" name="mail" class="input-user" value="Сохранить">
	                        </td>
	                    </form>
                    </tr>
                </tbody>
        </table>

<?php
}
else
foreach($users as $item)
{
?>
                    <tr>
                        <td>
                        	<input type="text" name="thirdname" class="input-user input_client_<?=$item['id']?>" value="<?=$item['fname']?>" disabled="disabeld">
                        </td>
                        <td>
                        	<input type="text" name="name" class="input-user input_client_<?=$item['id']?>" value="<?=$item['sname']?>" disabled="disabeld">
                        </td>
                        <td>
                        	<input type="text" name="surname" class="input-user input_client_<?=$item['id']?>" value="<?=$item['mname']?>" disabled="disabeld">
                        </td>
                        <td>
                        	<input type="text" name="mail" class="input-user input_client_<?=$item['id']?>" value="<?=$item['email']?>" disabled="disabeld">
                        </td>
                        <td>
                        	<input type="text" name="phone" class="input-user input_client_<?=$item['id']?>" value="<?=$item['phone']?>" disabled="disabeld">
                        </td>
                        <td>
                        	<input type="text" name="type" class="input-user input_client_<?=$item['id']?>" value="<?=$item['type']?>" disabled="disabeld">
                        </td>
                        <td>
                        	<input type="text" name="address" class="input-user input_client_<?=$item['id']?>" value="<?=$item['address']?>" disabled="false">
                        </td>
<?php if($mode == 'employer'){ ?>
                       <!--  <td data-label="<?=$this->lang->line('management')?>">
                        	<a href="#" class="btn edit_user" data-id="<?=$item['id']?>" style="width:45%;float:left;">Редактировать</a>
                        	<a href="#" class="btn delete_user" data-type="client" data-id="<?=$item['id']?>" style="width:45%;float:left;margin-left:15px;"><img src="/user_tpl/img/exit-1.svg" alt=""> <?=$this->lang->line('remove')?> </a>
                        </td> -->
<?php }else if($mode == 'employee'){ 
	if($this->session->admin[0]['access'] == '1'){?>
						<td data-label="<?=$this->lang->line('management')?>">
                        	<a href="/admin/passport/<?=$item['id']?>" class="btn" data-id="<?=$item['id']?>" style="width:45%;float:left;">Паспорт</a>
      					</td>
                        </td>
<?php }} ?>
						<td data-label="<?=$this->lang->line('management')?>">
                        	<a href="/admin/chat/<?=$mode?>/<?=$item['id']?>" class="btn" data-id="<?=$item['id']?>" style="width:45%;float:left;">Чаты</a>
      					</td>
                    </tr>
<?php } ?>
                </tbody>
        </table>
<?php } ?>
    </div>

	<div class="footer reg">
		<div class="container">
			<div class="footer-cont">
				<a href="/" class="footer-cont__logo">
					<img src="/user_tpl/img/footer-section/logo-footer.svg" alt="">
				</a>

				<div class="footer-cont__link-block">
					<a href="javascript:;" id="f1" class="link-block__link">Помощь</a>
					<a href="/pages/faq" class="link-block__link">Часто задаваемые вопросы</a>
					<a href="tel:79258523422" class="link-block__link">+7 (925) 852-34-22</a>
					<a href="mailto:mybesthelper@mail.ru" class="link-block__link">mybesthelper@mail.ru</a>
				</div>

				<div class="footer-cont__soc-block">
					<a href="/" class="soc-block__link"><img src="/user_tpl/img/footer-section/telegram.svg" alt=""></a>
					<a href="/" class="soc-block__link"><img src="/user_tpl/img/footer-section/viber.svg" alt=""></a>
					<a href="/" class="soc-block__link"><img src="/user_tpl/img/footer-section/whatsapp.svg" alt=""></a>
					<a href="/" class="soc-block__link"><img src="/user_tpl/img/footer-section/facebook.svg" alt=""></a>
					<a href="/" class="soc-block__link"><img src="/user_tpl/img/footer-section/inst.svg" alt=""></a>
					<a href="/" class="soc-block__link"><img src="/user_tpl/img/footer-section/vk.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="/user_tpl/js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

	</body>
	</html>