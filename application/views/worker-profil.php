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
						<!-- <a href="#" class="header-cont__entrancelink prem">Купить премиум</a> -->
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
if(isset($anketa))
	foreach ($anketa as $item) {
 ?>
	<div class="profil-rabotnika">
		<div class="container">
			<div class="profil-left">
				<div class="block-one">
					<div class="img-block"><img width="180" height="180" src="/<?=$item['profile_image'];?>" alt=""></div>
					<div class="block-info">
						<p class="block-info__name"><?=$item['name'];?> <?=$item['thirdname'];?><img src="/user_tpl/img/like-name.svg" alt=""></p>
						<p class="block-info__position"><?=$item['type'];?></p>
						<p class="block-info__city"><img src="/user_tpl/img/map-icon.svg" alt="">Московская обл.</p>
						<p class="block-info__city"><img src="/user_tpl/img/metro.svg" alt=""><?=$item['metro'];?></p>
						<div class="block-price">
							<p class="block-price__text"><?=$item['hour_earning']?> ₽<span>/ час</span></p>
							<p class="block-price__text"><?=$item['mounth_earning']?> ₽<span>/ месяц</span></p>
						</div>

						<!-- <p class="block-info__pos">В сети 23 августа</p> -->
					</div>
				</div>

				<div class="block-two">
					<p class="block-two__title">Краткая информация</p>

					<div class="block-info">
						<div class="info-item">
							<p class="info-item__title">Возраст</p>
							<p class="info-item__text"><?=$item['birthday']?> лет</p>
						</div>

						<div class="info-item">
							<p class="info-item__title">Опыт работы</p>
							<p class="info-item__text"><?=$item['experience']?></p>
						</div>

						<div class="info-item">
							<p class="info-item__title">Тип занятости</p>
							<p class="info-item__text"><img src="/user_tpl/img/keys.svg" alt=""><?=$item['employement_type']?></p>
						</div>

						<div class="info-item">
							<p class="info-item__title">Дата регистрации</p>
							<p class="info-item__text"><?=$item['regdate'];?></p>
						</div>
					</div>

					<p class="block-two__text"><?=$item['description']?></p>
				</div>

				<div class="block-three">
					<p class="block-three__title"><img src="/user_tpl/img/keys-2.svg" alt="">Тип занятости</p>
<?php 
foreach (explode(' | ', $item['employement_type_2']) as $it)
{
	if(strlen($it) > 3){
 ?>
					<p class="block-three__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$it?></p>
<?php }} ?>
				</div>

				<div class="block-four">
					<p class="block-four__title"><img src="/user_tpl/img/new-img-1.svg" alt="">Личные данные</p>

					<div class="block-left">
						<div class="left-item">
							<p class="left-item__text">Пол</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['sex'];?></p>
						</div>

						<div class="left-item">
							<p class="left-item__text">Гражданство</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['nationality'];?></p>
						</div>

						<div class="left-item">
							<p class="left-item__text">Национальность</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['nationality'];?></p>
						</div>
					</div>

					<div class="block-left">
						<div class="left-item">
							<p class="left-item__text">Религия</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['religion'];?></p>
						</div>

						<div class="left-item">
							<p class="left-item__text">Родной язык</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['lang'];?></p>
						</div>
						
						<div class="left-item">
							<p class="left-item__text">Другие языки</p>
							<p class="left-item__text dots"></p>
							<p class="left-item__text pol"><?=$item['another_lang'];?></p>
						</div>
					</div>
				</div>

				<div class="block-five">
					<div class="five-left">
						<p class="five-left__title"><img src="/user_tpl/img/new-img-2.svg" alt="">Уровень образования</p>

						<div class="five-item">
							<p class="five-item__text">Образование</p>
							<p class="five-item__text dots"></p>
							<p class="five-item__text"><?=$item['education'];?></p>
						</div>

						<!-- <div class="five-item">
							<p class="five-item__text">Пед. образование</p>
							<p class="five-item__text dots"></p>
							<p class="five-item__text two">Да</p>
						</div> -->

						<div class="five-item">
							<p class="five-item__text">Мед. образование</p>
							<p class="five-item__text dots"></p>
<?php if($item['med_education'] == 'Да' || $item['med_education'] == 'Есть'){ ?>
							<p class="five-item__text two">Да</p>
<?php }else {?>
	<p class="five-item__text two no">Нет</p>
<?php } ?>
						</div>

						<div class="five-item">
							<p class="five-item__text">Рекомендации</p>
							<p class="five-item__text dots"></p>
							<p class="five-item__text two">Да</p>
						</div>
					</div>

					<div class="five-left">
						<p class="five-left__title"><img src="/user_tpl/img/new-img-3.svg" alt="">Безопасность</p>

<?php 
		if($item['status'] == 'mail_phone_pasport_confirmed')echo '<p class="five-left__txt"><img src="/user_tpl/img/new-like.svg" alt="">Паспорт подтверждён</p>';
		else echo '<p class="five-left__txt"><img src="/user_tpl/img/new-img-4.svg" alt="">Паспорт не подтверждён</p>';
		if($item['status'] == 'mail_phone_confirmed' || $item['status'] == 'mail_phone_pasport_confirmed')echo '<p class="five-left__txt"><img src="/user_tpl/img/new-like.svg" alt="">Телефон подтверждён</p>';
		else echo '<p class="five-left__txt"><img src="/user_tpl/img/new-img-4.svg" alt="">Телефон не подтверждён</p>';
		if($item['status'] == 'mail_confirmed' || $item['status'] == 'mail_phone_confirmed' || $item['status'] == 'mail_phone_pasport_confirmed')echo '<p class="five-left__txt"><img src="/user_tpl/img/new-like.svg" alt="">Почта подтверждена</p>';
		else echo '<p class="five-left__txt"><img src="/user_tpl/img/new-img-4.svg" alt="">Почта не подтверждена</p>';
		echo '<p class="five-left__txt"><img src="/user_tpl/img/new-img-4.svg" alt="">Собеседование не пройдено</p>';
 ?>
					</div>
				</div>

				<div class="block-six">
					<p class="block-six__title"><img src="/user_tpl/img/new-img-5.svg" alt="">График работы</p>

<?php
	$d = explode(' | ', $item['day_off']);
	if(count($d) == 0){
		echo '<p class="block-six__text">Пока нет расписания</p>'; 
	}else
	{
	$days = array('Пн','Вт','Ср','Чт','Пт','Сб','Вс');
	for($i = 0; $i < count($days); $i++) {
 ?>
					<p class="block-six__day <?php if(!in_array($days[$i], $d)) echo 'v'; ?>"><?php echo $days[$i]; ?></p>
<?php 
	}
}
 ?>
				</div>

				<div class="seven-block">
					<p class="seven-block__title"><img src="/user_tpl/img/new-img-6.svg" alt="">Навыки няни-помощницы</p>
<?php 
if($item['baby_care'] == 'Да'){
	echo '<p class="seven-block__subTitle">Уход за детьми</p>';
	foreach (explode(' | ', $item['baby_care_exp']) as $b) {
		if(strlen($b) > 2){
 ?>
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$b?></p>
<?php 
}}}
 ?>

<?php 
if($item['house_work'] == 'Да'){
	echo '<p class="seven-block__subTitle">Работа по дому</p>';
	foreach (explode(' | ', $item['house_work_type']) as $h) {
		if(strlen($h) != 0){
 ?>
					
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$h?></p>
<?php 
}}}
 ?>

 <?php 
if($item['lang_teach'] == 'Да'){
	echo '<p class="seven-block__subTitle">Иностранные языки</p>';
	foreach (explode(' | ', $item['teaching_lang']) as $l) {
		if(strlen($l) != 0){
 ?>
					
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$l?></p>
<?php 
}}
	if(strlen($item['teaching_lang_age']) > 3){
		echo '<p class="seven-block__subTitle">Обучаемый возраст</p>';
		foreach (explode(' | ', $item['teaching_lang_age']) as $a) {
			if(strlen($a) != 0){
?>
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$a?></p>
<?php
}}}
echo '<p class="seven-block__subTitle">Уровень владения языка</p>'; 
echo '<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$item[\'lang_lvl\']?></p>';
}
 ?>

 <?php 
if($item['cooking'] == 'Да'){
	echo '<p class="seven-block__subTitle">Приготовление еды</p>';
	foreach (explode(' | ', $item['cooking_kichen']) as $с) {
		if(strlen($с) != 0){
 ?>
					
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$с?></p>
<?php 
}}}
 ?>

 <?php 
if($item['massage'] == 'Да'){
	echo '<p class="seven-block__subTitle">Массаж</p>';
	foreach (explode(' | ', $item['massage_type']) as $m) {
		if(strlen($m) != 0){
 ?>
					
					<p class="seven-block__text"><img src="/user_tpl/img/new-like.svg" alt=""><?=$m?></p>
<?php 
}}}
 ?>


					<a href="javascript:;" class="seven-block__link" id="linkSeven">Посмотреть все навыки</a>
				</div>

				<div class="eight-block">
					<p class="eight-block__title"><img src="/user_tpl/img/new-img-7.svg" alt="">Опыт работы</p>

					<p class="eight-block__text">Общий стаж работы</p>
					<p class="eight-block__schet"><?=$item['experience']?></p>

					<div class="eight-item">
						<div class="block-top">
							<p class="eight-item__number"><span></span></p>
							<a href="javascript:;" class="eight-item__link"><span>Филиппины</span> 5 лет<img src="/user_tpl/img/arrow-right.svg" alt=""></a>
						</div>
						<div class="block-cont">
							<div class="cont-item">
								<p class="cont-item__title">Работодатель #1</p>
								<p class="cont-item__city"><img src="/user_tpl/img/malaysia.svg" alt="">Малайзия</p>
								<p class="cont-item__text">Уход за детьми дошкольного возраста. Уборка по дому, приготовление еды.</p>

								<p class="cont-item__subTitle">Возраст, с которым работали</p>
								<p class="cont-item__li"><img src="/user_tpl/img/new-like.svg" alt="">Дошкольники (от 4 до 6 лет)</p>
								<p class="cont-item__li"><img src="/user_tpl/img/new-like.svg" alt="">Младшая школа (от 7 до 10 лет)</p>
							</div>

							<div class="cont-item">
								<p class="cont-item__title">Работодатель #2</p>
								<p class="cont-item__city"><img src="/user_tpl/img/malaysia.svg" alt="">Тайланд</p>
								<p class="cont-item__text">Уход за новорожденным ребенком с проживанием у работодателя. Мои обязанности – приготовление пищи, садоводство, уборка дома, уход за собакой, кошкой и мойка автомобилей.</p>

								<p class="cont-item__subTitle">Возраст, с которым работали</p>
								<p class="cont-item__li"><img src="/user_tpl/img/new-like.svg" alt="">Груднички (до 1 года)</p>
								<p class="cont-item__li"><img src="/user_tpl/img/new-like.svg" alt="">Дети (от 1 до 3 лет)</p>
								<p class="cont-item__li"><img src="/user_tpl/img/new-like.svg" alt="">Подростки (от 10 до 18 лет)</p>
								<p class="cont-item__li"><img src="/user_tpl/img/new-like.svg" alt="">Домашные животные</p>
							</div>
						</div>
					</div>

					<div class="eight-item">
						<div class="block-top">
							<p class="eight-item__number"><span></span></p>
							<a href="javascript:;" class="eight-item__link"><span>Филиппины</span> 5 лет<img src="/user_tpl/img/arrow-right.svg" alt=""></a>
						</div>
						<div class="block-cont">
							<div class="cont-item">
								<p class="cont-item__title">Работодатель #1</p>
								<p class="cont-item__city"><img src="/user_tpl/img/malaysia.svg" alt="">Малайзия</p>
								<p class="cont-item__text">Уход за детьми дошкольного возраста. Уборка по дому, приготовление еды.</p>

								<p class="cont-item__subTitle">Возраст, с которым работали</p>
								<p class="cont-item__li"><img src="/user_tpl/img/new-like.svg" alt="">Дошкольники (от 4 до 6 лет)</p>
								<p class="cont-item__li"><img src="/user_tpl/img/new-like.svg" alt="">Младшая школа (от 7 до 10 лет)</p>
							</div>
						</div>
					</div>
				</div>

				<div class="nine-block">
					<div class="block-title">
						<p class="nine-block__title"><img src="/user_tpl/img/new-img-8.svg" alt="">Отзывы работодателей <span>(3)</span></p>
						<div class="block-star">
							<img src="/user_tpl/img/star1.svg" alt="">
							<img src="/user_tpl/img/star1.svg" alt="">
							<img src="/user_tpl/img/star1.svg" alt="">
							<img src="/user_tpl/img/star1.svg" alt="">
							<img src="/user_tpl/img/star2.svg" alt="">
						</div>
					</div>
					<!-- <p class="nine-block__text">Что увидеть все отзывы, Вам нужно оформить <a href="#">Премиум-подписку.</a></p> -->
					

					<div class="comment-block">
						<div class="top-block">
							<div class="name-block">
								<p class="name-block__name">Александр</p>
								<p class="name-block__text">Сотрудничество с 24.07.2020 по 03.09.2020</p>
							</div>
							<div class="block-star">
								<img src="/user_tpl/img/star1.svg" alt="">
								<img src="/user_tpl/img/star1.svg" alt="">
								<img src="/user_tpl/img/star1.svg" alt="">
								<img src="/user_tpl/img/star1.svg" alt="">
								<img src="/user_tpl/img/star1.svg" alt="">
							</div>
						</div>

						<p class="comment-block__text">Понадобилась няня и домработница для ухода за маленьким ребёнком. Татьяна справилась и оправдала ожидания как надежный специалист. Работала у нас на протяжении 15 месяцев. Выполняла обязанности по присмотру за ребёнком, уборке дома, мытьё посуды, уходом за домашними животными.</p>
						<p class="comment-block__date">Отзыв от 7 сентября 2020</p>
					</div>

					<div class="comment-block">
						<div class="top-block">
							<div class="name-block">
								<p class="name-block__name">Иван</p>
								<p class="name-block__text">Сотрудничество с 05.10.2019 по 17.07.2020</p>
							</div>
							<div class="block-star">
								<img src="/user_tpl/img/star1.svg" alt="">
								<img src="/user_tpl/img/star1.svg" alt="">
								<img src="/user_tpl/img/star1.svg" alt="">
								<img src="/user_tpl/img/star1.svg" alt="">
								<img src="/user_tpl/img/star1.svg" alt="">
							</div>
						</div>

						<p class="comment-block__text">По моей оценке, чудесная няня! Рекомендую!</p>
						<p class="comment-block__date">Отзыв от 30 июля 2020</p>
					</div>

					<div class="comment-block">
						<div class="top-block">
							<div class="name-block">
								<p class="name-block__name">Анастасия</p>
								<p class="name-block__text">Сотрудничество с 11.07.2018 по 28.12.2018</p>
							</div>
							<div class="block-star">
								<img src="/user_tpl/img/star1.svg" alt="">
								<img src="/user_tpl/img/star1.svg" alt="">
								<img src="/user_tpl/img/star1.svg" alt="">
								<img src="/user_tpl/img/star2.svg" alt="">
								<img src="/user_tpl/img/star2.svg" alt="">
							</div>
						</div>

						<p class="comment-block__text"></p>
						<p class="comment-block__date">Отзыв от 18 февраля 2019</p>
					</div>
					<a href="javascript:;" id="commentLink" class="nine-block__link">Добавить отзыв</a>
				</div>
			</div>

			<div class="profil-right">
				<div class="block-one">
					<a href="#" class="block-one__link one">Написать сообщение</a>
					<a href="#" class="block-one__link two">Показать телефон</a>
				</div>

				<div class="block-two">
					<a href="/pages/favorite/add/<?=$item['userid']?>/<?=$aid?>" class="block-two__link one"><img src="/user_tpl/img/icon-serdce.svg" alt="">Добавить в избранное</a>
					<a href="#" class="block-two__link two" id="Linknig"><img src="/user_tpl/img/flag.svg" alt=""><span>Пожаловаться на этот профиль</span></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

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
					<a href="/pages/home" class="footer-cont__logo">
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