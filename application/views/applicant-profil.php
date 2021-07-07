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

	<title>personal</title>
</head>
<body>

	<div class="mob-menu two" id="mobMenu">
		<a href="javascript:;" class="exit-mob" id="exitMob"><img src="/user_tpl/img/exit-mob.svg" alt=""></a>

		<ul class="control-menu  three">
			<li class="control-menu__item"><a href="javascript:;" class="control-menu__link" id="mobLink1"><img src="/user_tpl/img/form-icon/c-1.svg" alt="">Панель управления</a></li>
			<li class="control-menu__item"><a href="javascript:;" class="control-menu__link" id="mobLink3"><span class="active"></span><img src="/user_tpl/img/form-icon/c-3.svg" alt="">Сообщения</a></li>
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
					<a href="/" class="header-cont__logo">
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
		<li class="control-menu__item"><a href="javascript:;" class="control-menu__link" id="link111"><img src="/user_tpl/img/form-icon/c-1.svg" alt="">Панель управления</a></li>
		<li class="control-menu__item"><a href="javascript:;" class="control-menu__link" id="link131"><span class="active"></span><img src="/user_tpl/img/form-icon/c-3.svg" alt="">Сообщения</a></li>
		<li class="control-menu__item"><a href="/pages/logout" class="control-menu__link exit"><img src="/user_tpl/img/exit-mod.svg" alt="">Выйти</a></li>
	</ul>

	<div class="control-block">
		<ul class="control-menu two">
			<div>
				<li class="control-menu__item"><a href="javascript:;" class="control-menu__link" id="link11"><img src="/user_tpl/img/form-icon/c-1.svg" alt="">Панель управления</a></li>
				<li class="control-menu__item"><a href="javascript:;" class="control-menu__link" id="link13"><span class="active"></span><img src="/user_tpl/img/form-icon/c-3.svg" alt="">Сообщения</a></li>
			</div>
			<a href="#" class="search-control"><img src="/user_tpl/img/search-control.svg" alt=""><span>Найти помощника</span></a>
		</ul>

		<div class="panel-block" id="panel" style="display: block;">
			<p class="control-block__title">Здравствуйте, <?=$this->session->user['sname']?></p>

			<!-- <p class="control-block__text">Здесь вы можете управлять <a href="/pages/premium">Премиум-подпиской</a></p> -->

			<div class="control-item">
				<div class="control-item__item">
					<div class="block-text">
						<p class="control-item__title">Премиум-подписка</p>
						<p class="control-item__text">Вы можете находить кандидатов на работу бесплатно.</p>
						<p class="control-item__text">Однако только пользователи с Премиум-подпиской могут связываться с ними напрямую.</p>
						<p class="control-item__text">Откройте для себя все преимущества.</p>
					</div>
					<!-- <a href="/pages/premium" class="control-item__link">Купить Премиум-подписку</a> -->
				</div>
				<div class="control-item__item">
					<div class="block-text">
						<p class="control-item__title">Часто задаваемые вопросы</p>
						<p class="control-item__text">Мы собрали для вас ответы на вопросы по разным темам:</p>
						<p class="control-item__text">Порядок подачи объявления, Проверка специалистов, Платежи и выплаты, Премиум-доступ, и другие темы.</p>
					</div>
					<a href="/pages/faq" class="control-item__link">Открыть ответы на вопросы </a>
				</div>
			</div>
		</div>

		<div class="kandidat-block" id="block12">
		
		</div>

	<div class="chat-block" id="block13">
			<div class="block-left" id="block-left">
<!-- <?php 
$idc = 0;
if(isset($chats))
	foreach ($chats as $item) {
		foreach ($item as $i) {
 ?>
				<a href="javascript:;" name="<?php if(isset($chatid[$idc]['chatid'])) echo $chatid[$idc]['chatid']?>" class="block-left__chat active" id="typed-chat-<?php if(isset($chatid[$idc]['chatid'])) echo $chatid[$idc]['chatid']?>">
					<span class="block-img"><img src="/<?php if(isset($i['profile_image'])) echo $i['profile_image'];?>" alt=""></span>
					<span class="block-info">
						<span class="block-info__name"><?php if(isset($i['sname'])) echo $i['sname'];?></span>
						<span class="block-info__text" id="msg-priview">Добрый день. Мне важен</span>
					</span>
				</a>
<?php $idc++; }} ?> -->
			</div>

			<div class="block-right">
				<div id="block-top" class="block-top">

					<!-- <div class="master-block">
						<p class="master-block__text">У меня есть более 10-ти лет опыта работы с детками, как с грудничками, так и с детками постарше (от 4-х месяцев до 12-ти лет). Чаще работала именно с маленькими детками. Главное найти подход к ребёнку и заинтересовать его, у меня это хорошо получается.</p>
						<img src="/user_tpl/img/profil-1.png" alt="">
					</div>

					<div class="klient-block">
						<p class="klient-block__text">Отлично. У нас 2 ребёнка. Первому 8 месяцев, второму уже 2 года. Ищем кандидата, который кроме ухода за детьми сможет заниматься уборкой дома, приготовлением еды для детей, а также стиркой и глажкой детского белья.</p>
						<p class="klient-block__text">Спасибо за отклик!</p>
					</div> -->
				</div>

				<form action="/chat/send_message" method="post" id="form-chat" class="form-chat">
					<input type="text" id="chatid-inp" name="chatid" style="display: none;">
					<textarea name="message" id="message" placeholder="Напишите сообщение..."></textarea>
					<button type="submit" name="">Отправить<img src="/user_tpl/img/btn-chat.svg" alt=""></button>
				</form>
			</div>
		</div>

		<div class="kandidat-block two" id="block14">
			
		</div>
	</div>



	<!-- popap windows -->

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
						<a href="/pages/faq" class="link-block__link">Помощь</a>
						<a href="/pages/faq" class="link-block__link">Часто задаваемые вопросы</a>
						<a href="tel:+7 (925) 852-34-22" class="link-block__link">+7 (925) 852-34-22</a>
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

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="/user_tpl/js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
		<script type="text/javascript">

$('document').ready(function(){
	update_chat();
	$('#link111').click(function(){
		$('#panel').css({'display' : 'block'});
		$('#block13').css({'display' : 'none'});
		return false;
	});
	$('#link131').click(function(){
		$('#block13').css({'display' : 'block'});
		$('#panel').css({'display' : 'none'});
		return false;
	});
			var chat__container = document.getElementById('block-left'); 
			var scr = document.getElementById('onclickscript'); 

			var userid = document.getElementById('create_chat');
			function create_chat()
			{
				$.post('/chat/create_chat',{ 
					'userid': userid.value
				}).done(function (data) { 
					chat__container.innerHTML = data;
					update_chat();
				});
			}
			function update_chat()
			{
				$.post('/chat/update_chats',{ 
					'data': '0'
				}).done(function (data) { 
					chat__container.innerHTML = data;
				});
			}
		</script>
		<script type="text/javascript">

			var messages__container = document.getElementById('block-top'); 
			//Контейнер сообщений — скрипт будет добавлять в него сообщения

			var interval = null; //Переменная с интервалом подгрузки сообщений

			var chatidf = document.getElementById('chatid-inp');
			var sendForm = document.getElementById('form-chat'); //Форма отправки
			var messageInput = document.getElementById('message');

			function send_request(act) {//Основная функция
				//Переменные, которые будут отправляться
				var var1 = null;
				var var2 = null;
				if(act == 'send') {
			//Если нужно отправить сообщение, то получаем текст из поля ввода
					var1 = messageInput.value;
				}
				
				$.post('/chat/send_message',{ //Отправляем переменные
					'act': act,
					'var1': var1,
					'var2': var2,
					'chatid': chatidf.value,
					'mode': 'employee'
				}).done(function (data) { 
					//Заносим в контейнер ответ от сервера
					messages__container.innerHTML = data;
					if(act == 'send') {
						//Если нужно было отправить сообщение, очищаем поле ввода
						messageInput.value = '';
					}
				});
			}

			function update() {
				send_request('load');
			}
			interval = setInterval(update,100);

			sendForm.onsubmit = function () {
				send_request('send');
				return false; //Возвращаем ложь, чтобы остановить классическую отправку формы
			};

		</script>
	</body>
	</html>