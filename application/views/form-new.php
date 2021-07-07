<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">

	<!-- slick slider -->
	<link rel="stylesheet" href="/user_tpl/css/library/slick.css">
	<link rel="stylesheet" href="/user_tpl/css/library/slick-theme.css">
	<!-- слайдер -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<!-- style -->
	<link rel="stylesheet" href="/user_tpl/css/main.css">
	<link rel="stylesheet" href="/user_tpl/css/media.css">

	<title>personal</title>
</head>
<body>
	<div class="shadow" id="block"></div>
	<div class="mob-menu" id="mobMenu">
		<a href="javascript:;" class="exit-mob" id="exitMob"><img src="/user_tpl/img/exit-mob.svg" alt=""></a>
		<div class="header-cont__services-link">
			<a href="#" id="popOne1" class="header-cont__servlink">Помощь</a>
			<a href="pages/faq" class="header-cont__servlink">Часто задаваемые вопросы</a>
		</div>

		<div class="header-cont__language">
			<img src="/user_tpl/img/one-section/en.png" alt="en" data-google-lang="en" class="language__img">
			<img src="/user_tpl/img/one-section/ru.png" alt="ru" data-google-lang="ru" class="language__img">
			<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
		</div>

		<div class="header-cont__entrance-block">
			<a href="/pages/login" class="header-cont__entrancelink">Войти</a>
			<a href="#" id="reg" class="header-cont__entrancelink popOne1Open">Регистрация</a>
		</div>
	</div>

	<div class="header">
		<div class="container">
			<div class="header-cont">
				<div class="header-cont__header-left">
					<a href="javascript:;" class="burger" id="burger"><img src="/user_tpl/img/burger.svg" alt=""></a>
					<a href="/" class="header-cont__logo">
						<img src="/user_tpl/img/one-section/logo.svg" alt="">
					</a>
				</div>
				<div class="header-cont__header-right">
					<div class="header-cont__language desctop">
						<img src="/user_tpl/img/one-section/en.png" alt="en" data-google-lang="en" class="language__img">
						<img src="/user_tpl/img/one-section/ru.png" alt="ru" data-google-lang="ru" class="language__img">
						<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
					</div>

					<div class="header-cont__services-link desctop">
						<a href="javascript:;" id="popOne" class="header-cont__servlink">Помощь</a>
						<a href="/pages/faq" class="header-cont__servlink">Часто задаваемые вопросы</a>
					</div>

					<div class="header-cont__entrance-block desctop">
						<a href="/pages/login" class="header-cont__entrancelink">Войти</a>
						<a href="#" id="reg" class="header-cont__entrancelink popOne1Open">Регистрация</a>
					</div>

					<a href="javascript:;" class="vhod"><img src="/user_tpl/img/vhod.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>

	<div class="form-new">
		<div class="container">
			<form action="" class="new-form">
				<p class="form-new-title">Заказ услуги</p>
				<p class="form-new-text">Свободный менеджер сервиса перезвонит Вам в указанном промежутке времени и все подробно расскажет.</p>

				<div class="form-block-input">
					<label for="i1"><span class="star">*</span> Ваше имя:</label>
					<input id="i1" type="text" name="userName" placeholder="Введите Ваше имя (как к Вам обращаться)">
				</div>
				<div class="form-block-input">
					<label for="i2"><span class="star">*</span> Телефон:</label>
					<input id="i2" type="tel" name="userTel" placeholder="Введите номер Вашего мобильного телефона">
				</div>
				<div class="form-block-input">
					<label for="i3">E-mail:</label>
					<input id="i3" type="email" name="userEmail" placeholder="Введите адрес электронной почты">
				</div>
				<div class="form-block-input two">
					<label for="i4">В какое время можно позвонить?</label>
					<div class="page-input">
						<label for="i4">Не ранее</label>
						<input id="i4" type="time" name="userTime" value="10:00" min="00:01" max="24:00">
					</div>
					<div class="page-input">
						<label for="i5">и не позднее</label>
						<input id="i5" type="time" name="userTimeTwo" value="20:00" min="00:01" max="24:00">
					</div>
				</div>
				<div class="form-block-input">
					<label for="i6">Какая услуга Вас интересует?</label>
					<select name="" id="i6">
						<option value="">Индивидуальный подбор на полный день</option>
						<option value="">Индивидуальный подбор на неполный день</option>
						<option value="">ВИП-пакет</option>
						<option value="">Проверка персонала</option>
						<option value="">Мне нужна помощь в выборе услуги</option>
					</select>
				</div>
				<div class="form-block-input">
					<label for="i7">Комментарий (вопрос): <span>(не обязательно)</span></label>
					<textarea id="i7" name="" placeholder="Опишите ваш вопрос (комментарий)"></textarea>
				</div>

				<label>
					<input type="checkbox">
					<span class="star">*</span> Я ознакомился (ознакомилась) и принимаю условия <a href="/application/views/politic-person.php" target="_blank">Политики в области обработки персональных данных.</a>
				</label>
				<label>
					<input type="checkbox">
					<span class="star">*</span> Я ознакомился (ознакомилась) и принимаю условия <a href="/application/views/new-cookie.php" target="_blank">Политики использования cookie-файлов.</a>
				</label>
				<button>Отправить</button>
				<p class="form-text-new"><span class="star">*</span> Отмеченные звездочкой поля обязательны для заполнения</p>
			</form>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="footer-cont">
				<a href="/" class="footer-cont__logo">
					<img src="/user_tpl/img/footer-section/logo-footer.svg" alt="">
				</a>

				<div class="footer-cont__link-block">
					<a href="javascript:;" id="f1" class="link-block__link">Помощь</a>
					<a href="pages/faq" class="link-block__link">Часто задаваемые вопросы</a>
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

	<!-- popap windows -->
	<style type="text/css">.popap{display: block;}</style>
	<form action="#" class="block-bg cls" id="popapOne">
		<div class="popap-one">
			<a href="javascript:;" class="popap-one__exit" id="exit"><img src="/user_tpl/img/exit.svg" alt=""></a>
			<p class="popap-one__title">Чем вам помочь?</p>

			<div class="popap-one__quest-block">
				<p class="quest-block__quest">Я ищу работу</p>
				<p class="quest-block__text">Разместите своё резюме для быстрого поиска работы</p>

				<a href="javascript:;" id="popTwo" class="quest-block__link one"><label for="anm1"></label><input type="radio" id="anm1" name="anm1">Найти работу</a>
			</div>

			<div class="popap-one__quest-block">
				<p class="quest-block__quest">Я ищу помощника</p>
				<p class="quest-block__text">Найдите помощника для своей семьи по любой специальности</p>

				<a href="/register/" id="popThree" class="quest-block__link"><label for="anm2"></label><input type="radio" id="anm2" name="anm1">Найти помощника</a>
			</div>
		</div>
	</form>

	<div class="block-bg" id="popapTwo">
		<div class="popap-two">
			<a href="javascript:;" id="exitTwo" class="popap-two__exit"><img src="/user_tpl/img/exit.svg" alt=""></a>
			<p class="popap-two__title">Какой помощник вам требуется?</p>

			<div class="block-item">
				<a href="/register/index/nanny" class="block-item__item one">
					<span class="block-item__img-block"></span>

					<span class="block-item__position">Няня-помощница</span>
				</a>

				<a href="/register/index/housekeeper" class="block-item__item two">
					<span class="block-item__img-block"></span>

					<span class="block-item__position">Домработница</span>
				</a>

				<a href="/register/index/teacher" class="block-item__item three">
					<span class="block-item__img-block"></span>

					<span class="block-item__position">Преподаватель</span>
				</a>

				<a href="/register/index/masseur" class="block-item__item five">
					<span class="block-item__img-block"></span>

					<span class="block-item__position">Массажист</span>
				</a>

				<a href="/register/index/nurse" class="block-item__item six">
					<span class="block-item__img-block"></span>

					<span class="block-item__position">Сиделка</span>
				</a>

				<div class="block-item__item four" style="opacity: 0;">
					<!-- <span class="block-item__img-block"></span>

						<span class="block-item__position">Репетитор</span> -->
					</div>
				</div>

				<p class="popap-two__quest">Уже есть аккаунт?</p>
				<a href="/auth/login" class="popap-two__link">Войти</a>
			</div>
		</div>

		<div class="block-bg" id="popapThree">
			<div class="popap-two">
				<a href="javascript:;" id="exitThree" class="popap-two__exit"><img src="/user_tpl/img/exit.svg" alt=""></a>
				<p class="popap-two__title">Кем вы хотите работать?</p>

				<div class="block-item">
					<a href="/register/index/nanny/employee" class="block-item__item one">
						<span class="block-item__img-block"></span>

						<span class="block-item__position">Няня-помощница</span>
					</a>

					<a href="/register/index/housekeeper/employee" class="block-item__item two">
						<span class="block-item__img-block"></span>

						<span class="block-item__position">Домработница</span>
					</a>

					<a href="/register/index/teacher/employee" class="block-item__item three">
						<span class="block-item__img-block"></span>

						<span class="block-item__position">Преподаватель</span>
					</a>

					<a href="/register/index/masseur/employee" class="block-item__item five">
						<span class="block-item__img-block"></span>

						<span class="block-item__position">Массажист</span>
					</a>

					<a href="/register/index/nurse/employee" class="block-item__item six">
						<span class="block-item__img-block"></span>

						<span class="block-item__position">Сиделка</span>
					</a>

					<div class="block-item__item four" style="opacity: 0;">
					<!-- <span class="block-item__img-block"></span>

						<span class="block-item__position">Репетитор</span> -->
					</div>
				</div>

				<p class="popap-two__quest">Уже есть аккаунт?</p>
				<a href="/auth/" class="popap-two__link">Войти</a>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- <script src="/user_tpl/js/library/slick.min.js"></script> -->
		<!-- <script src="/user_tpl/js/slider.js"></script> -->
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script src="/user_tpl/js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
		<script type="text/javascript">
			$('document').ready(function(){

				$('.popOne1Open').click(function(){
					$('#popapOne').css({'display':'flex'});
					return false;
				});
				$('#exit').click(function(){
					$('#popapOne').css({'display':'none'});
				});

			});

			// якорь

			const anchors = document.querySelectorAll('a[href*="#"]')

			for (let anchor of anchors) {
				anchor.addEventListener('click', function (e) {
					e.preventDefault()

					const blockID = anchor.getAttribute('href').substr(1)

					document.getElementById(blockID).scrollIntoView({
						behavior: 'smooth',
						block: 'start'
					})
				})
			}
		</script>
	</body>
	</html>