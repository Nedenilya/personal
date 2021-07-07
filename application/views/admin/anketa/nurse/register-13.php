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
			<p class="language-text">Сменить язык сайта</p>
			<a href="#" class="header-cont__en">
				<img src="/user_tpl/img/one-section/en.png" alt="">
			</a>
			<a href="#" class="header-cont__ru active">
				<img src="/user_tpl/img/one-section/ru.png" alt="">
			</a>
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
						<a href="#" class="header-cont__en">
							<img src="/user_tpl/img/one-section/en.png" alt="">
						</a>
						<a href="#" class="header-cont__ru active">
							<img src="/user_tpl/img/one-section/ru.png" alt="">
						</a>
					</div>

					<div class="header-cont__services-link desctop reg">
						<a href="javascript:;" id="popOne" class="header-cont__servlink">Помощь</a>
						<a href="question.html" class="header-cont__servlink">Часто задаваемые вопросы</a>
					</div>


					<div class="header-cont__entrance-block reg">
						<a href="login.html" class="header-cont__entrancelink"><img src="/user_tpl/img/login-icon.svg" alt="">Профиль</a>
						<a href="#" class="header-cont__entrancelink prem">Купить премиум</a>
					</div>

					<!-- <a href="javascript:;" class="vhod"><img src="/user_tpl/img/vhod.svg" alt=""></a> -->
					<a href="javascript:;" class="burger-two" id="burger"><img src="/user_tpl/img/burger-2.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>

	<div class="reg-two">
		
		<form action="/anketa/nurse/3" method="post" class="reg-form">
			<div class="history-block">
				<p class="history-block__text active">Расскажите о себе</p>
				<div class="history-block__img"><img src="/user_tpl/img/form-icon/f-arrow.svg" alt=""></div>
				<p class="history-block__text active">Заполните анкету</p>
				<div class="history-block__img"><img src="/user_tpl/img/form-icon/f-arrow.svg" alt=""></div>
				<p class="history-block__text">Укажите опыт работы</p>
			</div>

			<div class="cont-form">
				<div class="cont-form__item active">
					<div class="cont-form__number active-true"><p>1</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Тип занятости<img src="/user_tpl/img/form-icon/form-like.svg" alt=""></p>
					</div>
				</div>

				<div class="cont-form__item active">
					<div class="cont-form__number active-true"><p>2</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Условия работы<img src="/user_tpl/img/form-icon/form-like.svg" alt=""></p>
					</div>
				</div>

				<div class="cont-form__item active">
					<div class="cont-form__number active-true"><p>3</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Объявление<img src="/user_tpl/img/form-icon/form-like.svg" alt=""></p>
					</div>
				</div>

				<div class="cont-form__item">
					<div class="cont-form__number active"><p>4</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title active">Ваши навыки</p>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Наличие медицинского образования</p>

							<label class="label-radio center">
								<input type="radio" name="r1" value="Есть" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Есть</span>
								</span>
							</label>

							<label class="label-radio center">
								<input type="radio" name="r1" value="Нет" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Нет</span>
								</span>
							</label>
						</div>

						<div class="block-checkbox two">
							<p class="block-checkbox__title">Медицинские процедуры</p>

							<div class="block-check">
								<p class="block-check__title">Какие мед. процедуры вы выполняли?</p>
								<label class="wrapper-login01">
									<input name="r2" value="Инъекции и капельницы" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Инъекции и капельницы</span>
								</label>
								<label class="wrapper-login01">
									<input name="r3" value="Гигиена больного" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Гигиена больного</span>
								</label>
								<label class="wrapper-login01">
									<input name="r4" value="Лечебный массаж" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Лечебный массаж</span>
								</label>
								<label class="wrapper-login01">
									<input name="r5" value="Внутримышечные инъекции" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Внутримышечные инъекции</span>
								</label>
								<label class="wrapper-login01">
									<input name="r6" value="Послеоперационный уход" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Послеоперационный уход</span>
								</label>
								<label class="wrapper-login01">
									<input name="r7" value="Обработка ран и перевязка" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Обработка ран и перевязка</span>
								</label>
								<label class="wrapper-login01">
									<input name="r8" value="Уход за лежачими больными" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Уход за лежачими больными</span>
								</label>
							</div>
						</div>

						<div class="block-checkbox two">
							<p class="block-checkbox__title two">Категории людей</p>

							<div class="block-check">
								<p class="block-check__title">С каким возрастом вы работали?</p>
								<label class="wrapper-login01">
									<input name="r9" value="до 6 лет" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">до 6 лет</span>
								</label>
								<label class="wrapper-login01">
									<input name="r10" value="от 6 до 18 лет" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">от 6 до 18 лет</span>
								</label>
								<label class="wrapper-login01">
									<input name="r11" value="от 18 до 55 лет" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">от 18 до 55 лет</span>
								</label>
								<label class="wrapper-login01">
									<input name="r12" value="старше 55 лет" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">старше 55 лет</span>
								</label>
							</div>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">Вы готовы работать сиделкой для:</p>
								<label class="wrapper-login01">
									<input name="r13" value="Пожилого человека" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Пожилого человека</span>
								</label>
								<label class="wrapper-login01">
									<input name="r14" value="Больного человека" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Больного человека</span>
								</label>
								<label class="wrapper-login01">
									<input name="r15" value="Человека с ограниченными возможностями" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Человека с ограниченными возможностями</span>
								</label>
							</div>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">Опыт работы с больными по диагнозам:</p>
								<label class="wrapper-login01">
									<input name="r16" value="Аутизм" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Аутизм</span>
								</label>
								<label class="wrapper-login01">
									<input name="r17" value="Болезнь Альцгеймера" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Болезнь Альцгеймера</span>
								</label>
								<label class="wrapper-login01">
									<input name="r18" value="ДЦП (постинсультная реабилитация)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">ДЦП (постинсультная реабилитация)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r19" value="Инфаркт (постинфарктная реабилитация)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Инфаркт (постинфарктная реабилитация)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r20" value="Онкология" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Онкология</span>
								</label>
								<label class="wrapper-login01">
									<input name="r21" value="Болезнь Паркинсона" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Болезнь Паркинсона</span>
								</label>
								<label class="wrapper-login01">
									<input name="r22" value="Психические расстройства" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Психические расстройства</span>
								</label>
								<label class="wrapper-login01">
									<input name="r23" value="Разные травмы (ампутации)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Разные травмы (ампутации)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r24" value="Сахарный диабет" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Сахарный диабет</span>
								</label>
								<label class="wrapper-login01">
									<input name="r25" value="Эпилепсия" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Эпилепсия</span>
								</label>
							</div>
						</div>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Дополнительные навыки</p>

							<label class="label-radio center">
								<input type="radio" name="r26" value="Есть" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Есть</span>
								</span>
							</label>

							<label class="label-radio center">
								<input type="radio" name="r26" value="Нет" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Нет</span>
								</span>
							</label>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">Задания, которые вы готовы выполнять:</p>
								<label class="wrapper-login01">
									<input name="r27" value="Приготовление еды" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Приготовление еды</span>
								</label>
								<label class="wrapper-login01">
									<input name="r28" value="Уборка" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Уборка</span>
								</label>
								<label class="wrapper-login01">
									<input name="r29" value="Стирка и глажка" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Стирка и глажка</span>
								</label>
								<label class="wrapper-login01">
									<input name="r30" value="Покупка продуктов и медикаментов" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Покупка продуктов и медикаментов</span>
								</label>
								<label class="wrapper-login01">
									<input name="r31" value="Прогулки" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Прогулки</span>
								</label>
								<label class="wrapper-login01">
									<input name="r32" value="Разовые поручения" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Разовые поручения</span>
								</label>
							</div>
						</div>

						<button class="cont-form__btn two" type="submit">Продолжить<img src="/user_tpl/img/form-icon/f-btn.svg" alt=""></button>
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
	<script src="/user_tpl/js/textarea/autosize.js"></script>
	<script src="/user_tpl/js/main.js"></script>

	</body>
	</html>