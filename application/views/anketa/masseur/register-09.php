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

	<div class="mob-menu reg" id="mobMenu">
		<a href="javascript:;" class="exit-mob" id="exitMob"><img src="/user_tpl/img/exit-mob.svg" alt=""></a>
		<div class="header-cont__services-link">
			<a href="javascript:;" id="popOne1" class="header-cont__servlink">Помощь</a>
			<a href="question.html" class="header-cont__servlink">Часто задаваемые вопросы</a>
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
				<div class="header-cont__header-right">
					<div class="header-cont__language desctop reg">
						<img src="/user_tpl/img/one-section/en.png" alt="en" data-google-lang="en" class="language__img">
			<img src="/user_tpl/img/one-section/ru.png" alt="ru" data-google-lang="ru" class="language__img">
			<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
					</div>

					<div class="header-cont__services-link desctop reg">
						<a href="javascript:;" id="popOne" class="header-cont__servlink">Помощь</a>
						<a href="question.html" class="header-cont__servlink">Часто задаваемые вопросы</a>
					</div>


					<div class="header-cont__entrance-block reg">
						<a href="login.html" class="header-cont__entrancelink"><img src="/user_tpl/img/login-icon.svg" alt="">Профиль</a>
						<!-- <a href="#" class="header-cont__entrancelink prem">Купить премиум</a> -->
					</div>

					<!-- <a href="javascript:;" class="vhod"><img src="/user_tpl/img/vhod.svg" alt=""></a> -->
					<a href="javascript:;" class="burger-two" id="burger"><img src="/user_tpl/img/burger-2.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>

	<div class="reg-two">
		
		<form action="/anketa/masseur/2" method="post" class="reg-form">
			<div class="history-block">
				<p class="history-block__text active">Расскажите о себе</p>
				<div class="history-block__img"><img src="/user_tpl/img/form-icon/f-arrow.svg" alt=""></div>
				<p class="history-block__text active">Заполните анкету</p>
				<div class="history-block__img"><img src="/user_tpl/img/form-icon/f-arrow.svg" alt=""></div>
				<p class="history-block__text">Укажите опыт работы</p>
			</div>

			<div class="cont-form">
				<div class="cont-form__item">
					<div class="cont-form__number active"><p>1</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title active">Тип занятости</p>

						<div class="input-radio">
							<label class="label-radio">
								<input name="r1" value="Полная занятость" type="radio" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Полная занятость</span>
									<span class="label-radio__text">С проживанием/без проживания у работодателя.</span>
								</span>
							</label>

							<label class="label-radio">
								<input name="r1" value="Частичная занятость" type="radio" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Частичная занятость</span>
									<span class="label-radio__text">Подходит, если вы находитесь недалеко от работодателя.</span>
								</span>
							</label>
						</div>

						<div class="block-checkbox">

							<div class="block-check">
								<label class="wrapper-login01">
									<input name="r2" value="В массажном кабинете" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">В массажном кабинете</span>
								</label>
								<label class="wrapper-login01">
									<input name="r3" value="У себя дома" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">У себя дома</span>
								</label>
								<label class="wrapper-login01">
									<input name="r4" value="У клиента дома" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">У клиента дома</span>
								</label>
							</div>
						</div>

						<button class="cont-form__btn" type="submit">Продолжить<img src="/user_tpl/img/form-icon/f-btn.svg" alt=""></button>
					</div>
				</div>

				<div class="cont-form__item">
					<div class="cont-form__number"><p>2</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Условия работы</p>
					</div>
				</div>

				<div class="cont-form__item">
					<div class="cont-form__number"><p>3</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Объявление</p>
					</div>
				</div>

				<div class="cont-form__item">
					<div class="cont-form__number"><p>4</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Ваши навыки</p>
					</div>
				</div>
			</div>
		</form>

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

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="/user_tpl/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>


</body>
</html>