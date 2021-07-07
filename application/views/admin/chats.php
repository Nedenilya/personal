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
					<a href="/admin/anketa" style="font-size: 13px; font-weight: 400;">Анкеты</a>
				</div>
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
	
	<div class="chat-block" id="block13" style="display: flex;">
		<div class="block-left" id="block-left">
		
		</div>

		<div class="block-right">
			<div id="block-top" class="block-top">

			</div>
				<input type="text" id="chatid-inp" name="chatid" style="display: none;">
		</div>
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
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="/user_tpl/js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
		<!-- <script src="/user_tpl/js/main.js"></script> -->
		<script type="text/javascript">
			$('document').ready(function(){
				update_chat();
			});


			var chat__container = document.getElementById('block-left'); 
			var scr = document.getElementById('onclickscript'); 

			var userid = document.getElementById('create_chat');
	
			function update_chat()
			{
				$.post('/admin/update_chats',{ 
					'mode': '<?=$mode?>',
					'userid': '<?=$userid?>'
				}).done(function (data) { 
					chat__container.innerHTML = data;
				});
			}
		</script>
		<script type="text/javascript">

			var chat__container = document.getElementById('block-left'); 
			var messages__container = document.getElementById('block-top'); 
			var interval = null;

			var userid = document.getElementById('create_chat');

			var chatidf = document.getElementById('chatid-inp');

			function send_request(act) {
				var var1 = null;
				var var2 = null;
				if(act == 'send') {
					var1 = messageInput.value;
				}
				
				$.post('/admin/send_message',{
					'act': act,
					'var1': var1,
					'var2': var2,
					'chatid': chatidf.value,
					'mode': '<?=$mode?>',
					'userid': '<?=$userid?>'
				}).done(function (data) {
					messages__container.innerHTML = data;
					if(act == 'send') {
						messageInput.value = '';
					}
				});
			}

			function update() {
				send_request('load');
			}
			interval = setInterval(update,500);

		</script>
	</body>
	</html>