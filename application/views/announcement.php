<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">

	<!-- style -->
	<link rel="stylesheet" href="/user_tpl/css/library/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="/user_tpl/css/library/bootstrap/bootstrap-datetimepicker.min.css" />
	<link rel="stylesheet" href="/user_tpl/css/main.css">
	<link rel="stylesheet" href="/user_tpl/css/media.css">

	<title>personal</title>
</head>
<body>

	<div class="mob-menu two" id="mobMenu">
		<a href="javascript:;" class="exit-mob" id="exitMob"><img src="/user_tpl/img/exit-mob.svg" alt=""></a>

		<ul class="control-menu  three">
			<li class="control-menu__item"><a href="" class="control-menu__link"><img src="/user_tpl/img/form-icon/c-1.svg" alt="">Панель управления</a></li>
			<li class="control-menu__item"><a href="" class="control-menu__link"><span class="active"></span><img src="/user_tpl/img/form-icon/c-2.svg" alt="">Новые кандидаты</a></li>
			<li class="control-menu__item"><a href="" class="control-menu__link"><span class="active"></span><img src="/user_tpl/img/form-icon/c-3.svg" alt="">Сообщения</a></li>
			<li class="control-menu__item"><a href="" class="control-menu__link"><img src="/user_tpl/img/form-icon/c-4.svg" alt="">Избранные профили</a></li>
			<li class="control-menu__item"><a href="/pages/logout" class="control-menu__link exit"><img src="/user_tpl/img/exit-mod.svg" alt="">Выйти</a></li>
		</ul>

		<div class="header-cont__services-link">
			<a href="javascript:;" id="popOne1" class="header-cont__servlink">Помощь</a>
			<a href="/pages/faq" class="header-cont__servlink">Часто задаваемые вопросы</a>
		</div>

		<div class="block-ic">
			<a href="#" class="control-login"><img src="/user_tpl/img/form-icon/control-login.svg" alt=""></a>
			<a href="#" class="sms"><img src="/user_tpl/img/form-icon/sms.svg" alt=""><span></span></a>
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
					<!-- <a href="/" class="b-left__link"><img src="/user_tpl/img/arrowleft-btn.svg" alt=""></a> -->
					<a href="javascript:;" class="burger" id="burger"><img src="/user_tpl/img/burger.svg" alt=""></a>
					<a href="/pages/home" class="header-cont__logo">
						<img src="/user_tpl/img/one-section/logo.svg" alt="">
					</a>
				</div>
				<div class="header-cont__header-right">
					<div class="header-cont__language desctop reg employer">
						<img src="/user_tpl/img/one-section/en.png" alt="en" data-google-lang="en" class="language__img">
			<img src="/user_tpl/img/one-section/ru.png" alt="ru" data-google-lang="ru" class="language__img">
			<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
					</div>

					<div class="header-cont__services-link desctop reg employer">
						<a href="javascript:;" id="popOne" class="header-cont__servlink">Помощь</a>
						<a href="/pages/faq" class="header-cont__servlink">Часто задаваемые вопросы</a>
					</div>

					<a href="#" class="control-login"><img src="/user_tpl/img/form-icon/control-login.svg" alt=""></a>
					<a href="#" class="sms"><img src="/user_tpl/img/form-icon/sms.svg" alt=""><span></span></a>

					<div class="header-cont__entrance-block reg employer">
						<a href="javascript:;" class="header-cont__entrancelink" id="loginTwo"><img src="/user_tpl/img/login-icon.svg" alt="">Профиль</a>
						<!-- <a href="/pages/premium" class="header-cont__entrancelink prem">Купить премиум</a> -->
					</div>

					<!-- <a href="javascript:;" class="vhod"><img src="/user_tpl/img/vhod.svg" alt=""></a> -->
					<!-- <a href="javascript:;" class="burger-two employer" id="burger"><img src="/user_tpl/img/burger-2.svg" alt=""></a> -->
				</div>
			</div>
		</div>
	</div>

	<ul class="control-menu mod" id="logMob">
		<li class="control-menu__item"><a href="" class="control-menu__link"><img src="/user_tpl/img/form-icon/c-1.svg" alt="">Панель управления</a></li>
		<li class="control-menu__item"><a href="" class="control-menu__link"><span class="active"></span><img src="/user_tpl/img/form-icon/c-2.svg" alt="">Новые кандидаты</a></li>
		<li class="control-menu__item"><a href="" class="control-menu__link"><span class="active"></span><img src="/user_tpl/img/form-icon/c-3.svg" alt="">Сообщения</a></li>
		<li class="control-menu__item"><a href="" class="control-menu__link"><img src="/user_tpl/img/form-icon/c-4.svg" alt="">Избранные профили</a></li>
		<li class="control-menu__item"><a href="/pages/logout" class="control-menu__link exit"><img src="/user_tpl/img/exit-mod.svg" alt="">Выйти</a></li>
	</ul>
<?php 
// var_dump($announcement);
if(isset($announcement) && count($announcement) > 0)
{
	foreach ($announcement as $item) 
	{
 ?>
	<div class="profil-rabotnika">
		<div class="container">
			<div class="profil-left">
				<div class="block-one">
					<div class="img-block new"><img src="/user_tpl/img/new-icon.svg" alt=""></div>
					<div class="block-info">
						<p class="block-info__name"><?=$item['article'];?></p>
						<p class="block-info__position"><?=$item['work_type'];?></p>
						<p class="block-info__city"><img src="/user_tpl/img/map-icon.svg" alt=""><?=$item['location'];?></p>
						<p class="block-info__city"><img src="/user_tpl/img/metro.svg" alt=""><?=$item['metro'];?></p>
						<div class="block-price">
							<p class="block-price__text"><?=$item['earning'];?> ₽<span>/ <?=$item['period'];?></span></p>
						</div>
					</div>
				</div>

				<div class="block-two">
					<p class="block-two__title">Краткая информация</p>

					<div class="block-info">
						<div class="info-item">
							<?php if($item['3_year'] > 0)
							{ ?>
								<p class="info-item__title">Дети до 3 лет</p>
								<p class="info-item__text"><?=$item['3_year'];?></p> 
							<?php
							}
							if($item['3_6_year']>0){
							?>
							 	<p class="info-item__title">Дети от 3 до 6 лет</p>
								<p class="info-item__text"><?=$item['3_6_year'];?></p> 
							<?php
							}
							if($item['7_year']>0){
							?>
								<p class="info-item__title">Дети от 7 лет</p>
								<p class="info-item__text"><?=$item['7_year'];?></p> 
							<?php 
							}
							?>
						</div>

						<div class="info-item">
							<p class="info-item__title">Тип занятости</p>
							<p class="info-item__text"><img src="/user_tpl/img/keys.svg" alt="">
								<?php foreach ($type as $t) echo $t['employment_type'];?>
							</p>
						</div>
					</div>

					<p class="block-two__text"><?=$item['description'];?></p>
				</div>

				<div class="block-three">
					<p class="block-three__title"><img src="/user_tpl/img/keys-2.svg" alt="">Обязанности</p>
<?php 
if(isset($type))	
	foreach ($type as $t) {
		for($i = 0; $i < count(explode('|',$t['employer_duties'])); $i++){
			if(strlen(explode('|',$t['employer_duties'])[$i]) > 1){
?>
							<p class="block-three__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=explode('|',$t['employer_duties'])[$i];?></p>
<?php   
			}
		}
	}
?>
					
				</div>

				<div class="block-four">
					<p class="block-four__title"><img src="/user_tpl/img/icon-info.svg" alt="">Информация о работодателе</p>

					<div class="block-left">
						<div class="left-item">
							<p class="left-item__text">Национальность</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['national']?></p>
						</div>

						<div class="left-item">
							<p class="left-item__text">Проживает</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['residence']?></p>
						</div>

						<div class="left-item">
							<p class="left-item__text">Площадь жилья</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['square']?> м2</p>
						</div>
					</div>

					<div class="block-left">
						<div class="left-item new">
							<p class="left-item__text">Ближайшее метро</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['metro']?></p>
						</div>

						<div class="left-item new">
							<p class="left-item__text">На чём добираться</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['get_type']?></p>
						</div>
						
						<div class="left-item new">
							<p class="left-item__text">Сколько добираться</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['time_to_get']?></p>
						</div>
					</div>
				</div>


				<div class="block-six">
					<p class="block-six__title"><img src="/user_tpl/img/new-img-5.svg" alt="">График работы</p>
<?php 
if(isset($schedule))
{
	$name = array('pn', 'vt', 'sr', 'cht', 'pt', 'sb', 'vs');
	$days = array('Пн','Вт','Ср','Чт','Пт','Сб','Вс');
	$i = 0;
	foreach ($schedule as $s) {
		if($s['date_decided'] != 'Я определился с датой начала'){
?>
					<p class="block-six__text">Пока нет расписания</p>
<?php
break;}
			foreach ($name as $n) {
 ?>
					<p class="block-six__day <?php if(strlen($s[$n]) == 0) echo 'v'; ?>"><?php if(strlen($s[$n]) != 0) echo $s[$n]; else echo $days[$i];?></p>

<?php 
			$i++;
		}
	}
}
 ?>
					

				</div>

				<div class="seven-block">
					<p class="seven-block__title"><img src="/user_tpl/img/new-img-6.svg" alt="">Идеальный кандидат</p>

					<!-- <p class="seven-block__subTitle">Уход за детьми</p>
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt="">Дети (от 1 до 3 лет)</p>
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt="">Дошкольники (от 4 до 6 лет)</p>
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt="">Младшая школа (от 7 до 10 лет)</p>

					<p class="seven-block__subTitle">Работа по дому</p>
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt="">Уборка детской комнаты</p>
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt="">Приготовление еды</p>
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt="">Приготовление еды</p>

					<a href="javascript:;" class="seven-block__link" id="linkSeven">Посмотреть все навыки</a> -->

					<div class="block-four">

						<div class="block-left">
							<div class="left-item">
								<p class="left-item__text">Национальность</p>
								<p class="left-item__text dots"></p>
								<p class="left-item__text pol"><?=$item['nationality']?></p>
							</div>

							<div class="left-item">
								<p class="left-item__text">Пол</p>
								<p class="left-item__text dots"></p>
								<p class="left-item__text pol"><?=$item['sex']?></p>
							</div>

							<div class="left-item">
								<p class="left-item__text">Возраст</p>
								<p class="left-item__text dots"></p>
								<p class="left-item__text pol"><?=$item['age']?></p>
							</div>
						</div>

						<div class="block-left">
							<div class="left-item">
								<p class="left-item__text">Мед. образование</p>
								<p class="left-item__text dots"></p>
								<p class="left-item__text pol"><?=$item['med_education']?></p>
							</div>

							<div class="left-item">
								<p class="left-item__text">Зарплата</p>
								<p class="left-item__text dots"></p>
								<p class="left-item__text pol"><?=$item['earning']?> руб/<?=$item['period']?></p>
							</div>

							<div class="left-item">
								<p class="left-item__text">Мин. образование</p>
								<p class="left-item__text dots"></p>
								<p class="left-item__text pol"><?=$item['education']?></p>
							</div>
						</div>
					</div>

					<p class="seven-block__subTitle">С каким возрастом вы работали?</p>
<?php  
for($i = 1; $i < 9; $i++){
	if(strlen($item['care_experience_'.$i]) > 5)
	{
?>				
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$item['care_experience_'.$i]?></p>

<?php } } 
if($item['learn_eng'] == 'yes'){
?>

					<p class="seven-block__subTitle">Каким языкам вы можете обучать детей?</p>
<?php  
for($i = 1; $i < 8; $i++){
	if(strlen($item['child_learn_lang_'.$i]) > 3)
	{
?>							
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$item['child_learn_lang_'.$i]?></p>
<?php } } }
if($item['homework'] == 'yes'){
?>

					<p class="seven-block__subTitle">Ваш уровень владения языком</p>
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$item['lang_lvl']?></p>

					<p class="seven-block__subTitle">Виды работ по дому</p>
<?php  
for($i = 1; $i < 6; $i++){
	if(strlen($item['homework_type_'.$i]) > 3)
	{
?>		
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$item['homework_type_'.$i]?></p>
<?php } } }
if($item['cooking'] == 'yes'){
?>

					<p class="seven-block__subTitle">Блюда какой кухни вы умеете готовить?</p>
<?php  
for($i = 1; $i < 7; $i++){
	if(strlen($item['kichen_'.$i]) > 3)
	{
?>	
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$item['kichen_'.$i]?></p>
<?php } } }
if($item['massage'] == 'yes'){
?>

					<p class="seven-block__subTitle">Виды массажа</p>
<?php  
for($i = 1; $i < 7; $i++){
	if(strlen($item['massage_type_'.$i]) > 3)
	{
?>	
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$item['massage_type_'.$i]?></p>
<?php } } }?>


					<a href="#" class="seven-block__link">Показать все навыки</a>
				</div>
			</div>

			<div class="profil-right">
				<div class="block-one">
					<a href="#" class="block-one__link one">Написать сообщение</a>
					<a href="#" class="block-one__link two">Показать телефон</a>
				</div>

				<div class="block-two">
					<a href="/pages/favorite/new/<?=$item['userid']?>/<?=$item['parentid']?>" class="block-two__link one"><img src="/user_tpl/img/icon-serdce.svg" alt="">Добавлено в избранное</a>
					<a href="#" class="block-two__link two" id="Linknig"><img src="/user_tpl/img/flag.svg" alt=""><span>Пожаловаться на этот профиль</span></a>
				</div>
			</div>
		</div>
	</div>
<?php
		break; 
	}
}else{
	redirect($_SERVER['HTTP_REFERER']);
}
 ?>

	<!-- popap windows -->

	<form action="#" class="comment-form" id="FormComm">
		<p class="comment-form__title">Добавить отзыв</p>
		<a href="lavascript:;" class="comment-form__link" id="comExit"><img src="/user_tpl/img/exit-img.svg" alt=""></a>

		<div class="form-group">
			<p class="form-group__text">Дата начала сотрудничества</p>
			<div class="input-group date" id="datetimepicker1">
				<input type="text" class="form-control" placeholder="Выберите дату" />
				<span class="input-group-addon">
					<span class="glyphicon-calendar glyphicon"></span>
				</span>
			</div>
		</div>

		<div class="form-group">
			<p class="form-group__text">Дата окончания сотрудничества</p>
			<div class="input-group date" id="datetimepicker2">
				<input type="text" class="form-control" placeholder="Выберите дату" />
				<span class="input-group-addon">
					<span class="glyphicon-calendar glyphicon"></span>
				</span>
			</div>
		</div>

		<div class="block-pop">
			<p class="block-pop__text">Надежность</p>
			<div class="block-star">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
			</div>
		</div>
		<div class="block-pop">
			<p class="block-pop__text">Инициативность</p>
			<div class="block-star">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
			</div>
		</div>
		<div class="block-pop">
			<p class="block-pop__text">Взаимопонимание</p>
			<div class="block-star">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
			</div>
		</div>
		<div class="block-pop">
			<p class="block-pop__text">Пунктуальность</p>
			<div class="block-star">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
				<img src="/user_tpl/img/star2.svg" alt="">
			</div>
		</div>

		<div class="block-textarea">
			<p class="block-textarea__text">Комментарий</p>
			<textarea name="comment" placeholder="Введите дополнительную информацию о специалисте. Это поможет другим людям сделать правильный выбор."></textarea>
		</div>

		<button>Опубликовать отзыв</button>

	</form>

	<form action="#" class="form-nigative" id="nigative">
		<p class="form-nigative__title">Пожаловаться</p>
		<a href="lavascript:;" class="form-nigative__link" id="comExit"><img src="/user_tpl/img/exit-img.svg" alt=""></a>
		<div class="block-select">
			<p class="block-select__text">Причина жалобы</p>
			<select class="form-select">
				<option>Некорректные контакты</option>
				<option>Некорректные контакты</option>
				<option>Некорректные контакты</option>
			</select>
		</div>

		<div class="block-textarea">
			<p class="block-textarea__text">Сообщение</p>
			<textarea name="negative" placeholder="Введите дополнительную информацию о специалисте. Это поможет другим людям сделать правильный выбор."></textarea>
		</div>

		<button>Отправить жалобу</button>
	</form>

	<form action="#" class="block-bg" id="popapOne">
		<div class="popap-one">
			<a href="javascript:;" class="popap-one__exit" id="exit"><img src="/user_tpl/img/exit.svg" alt=""></a>
			<p class="popap-one__title">Чем вам помочь?</p>

			<div class="popap-one__quest-block">
				<p class="quest-block__quest">Я ищу работу</p>
				<p class="quest-block__text">Разместите своё резюме для быстрого поиска работы</p>

				<a href="javascript:;" id="2" class="quest-block__link one"><label for="anm1"></label><input type="radio" id="anm1" name="anm1">Найти работу</a>
			</div>

			<div class="popap-one__quest-block">
				<p class="quest-block__quest">Я ищу помощника</p>
				<p class="quest-block__text">Найдите помощника для своей семьи по любой специальности</p>

				<a href="javascript:;" id="3" class="quest-block__link"><label for="anm2"></label><input type="radio" id="anm2" name="anm1">Найти помощника</a>
			</div>
		</div>
	</form>

	<div class="block-bg" id="popapTwo">
		<div class="popap-two">
			<a href="javascript:;" id="exitTwo" class="popap-two__exit"><img src="/user_tpl/img/exit.svg" alt=""></a>
			<p class="popap-two__title">Какой помощник вам требуется?</p>

			<div class="block-item">
				<a href="#" class="block-item__item one">
					<span class="block-item__img-block"></span>

					<span class="block-item__position">Няня-помощница</span>
				</a>

				<a href="#" class="block-item__item two">
					<span class="block-item__img-block"></span>

					<span class="block-item__position">Домработница</span>
				</a>

				<a href="#" class="block-item__item three">
					<span class="block-item__img-block"></span>

					<span class="block-item__position">Преподаватель</span>
				</a>

				<a href="#" class="block-item__item five">
					<span class="block-item__img-block"></span>

					<span class="block-item__position">Массажист</span>
				</a>

				<a href="#" class="block-item__item six">
					<span class="block-item__img-block"></span>

					<span class="block-item__position">Сиделка</span>
				</a>

				<div class="block-item__item four" style="opacity: 0;">
					<!-- <span class="block-item__img-block"></span>

						<span class="block-item__position">Репетитор</span> -->
					</div>
				</div>

				<p class="popap-two__quest">Уже есть аккаунт?</p>
				<a href="login.html" class="popap-two__link">Войти</a>
			</div>
		</div>

		<div class="block-bg" id="popapThree">
			<div class="popap-two">
				<a href="javascript:;" id="exitThree" class="popap-two__exit"><img src="/user_tpl/img/exit.svg" alt=""></a>
				<p class="popap-two__title">Кем вы хотите работать?</p>

				<div class="block-item">
					<a href="#" class="block-item__item one">
						<span class="block-item__img-block"></span>

						<span class="block-item__position">Няня-помощница</span>
					</a>

					<a href="#" class="block-item__item two">
						<span class="block-item__img-block"></span>

						<span class="block-item__position">Домработница</span>
					</a>

					<a href="#" class="block-item__item three">
						<span class="block-item__img-block"></span>

						<span class="block-item__position">Преподаватель</span>
					</a>

					<a href="#" class="block-item__item five">
						<span class="block-item__img-block"></span>

						<span class="block-item__position">Массажист</span>
					</a>

					<a href="#" class="block-item__item six">
						<span class="block-item__img-block"></span>

						<span class="block-item__position">Сиделка</span>
					</a>

					<div class="block-item__item four" style="opacity: 0;">
					<!-- <span class="block-item__img-block"></span>

						<span class="block-item__position">Репетитор</span> -->
					</div>
				</div>

				<p class="popap-two__quest">Уже есть аккаунт?</p>
				<a href="login.html" class="popap-two__link">Войти</a>
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="footer-cont">
					<a href="/" class="footer-cont__logo">
						<img src="/user_tpl/img/footer-section/logo-footer.svg" alt="">
					</a>

					<div class="footer-cont__link-block">
						<a href="/" class="link-block__link">Помощь</a>
						<a href="/" class="link-block__link">Часто задаваемые вопросы</a>
						<a href="/" class="link-block__link">+7 (925) 852-34-22</a>
						<a href="/" class="link-block__link">mybesthelper@mail.ru</a>
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

		<script src="/user_tpl/js/library/bootstrap/moment-with-locales.min.js"></script>
		<script src="/user_tpl/js/library/bootstrap/bootstrap.min.js"></script>
		<script src="/user_tpl/js/library/bootstrap/bootstrap-datetimepicker.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
		<script type="text/javascript">
			$(function () {
				$('#datetimepicker1').datetimepicker({
					locale: 'ru',
					stepping:10,
					format: 'DD.MM.YYYY',
					defaultDate: moment('01.11.2020').format('DD.MM.YYYY'),
					daysOfWeekDisabled:[0,6]
				});
				$('#datetimepicker2').datetimepicker({
					locale: 'ru'
				});
			});
		</script>

		<script type="text/javascript">
			$(function () {
				$('#datetimepicker3').datetimepicker({
					locale: 'ru',
					stepping:10,
					format: 'DD.MM.YYYY',
					defaultDate: moment('01.11.2020').format('DD.MM.YYYY'),
					daysOfWeekDisabled:[0,6]
				});
				$('#datetimepicker3').datetimepicker({
					locale: 'ru'
				});
			});
		</script>
		<script src="/user_tpl/js/main.js"></script>

	</body>
	</html>