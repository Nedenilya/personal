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
		
		<form action="/anketa/nanny/3" method="post" class="reg-form">
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
								<input type="radio" name="r1" value="Да" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
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

						<div class="input-radio center row mb">
							<p class="input-radio__title">Уход за ребёнком</p>

							<label class="label-radio center">
								<input type="radio" name="r2" value="Да" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
								</span>
							</label>

							<label class="label-radio center">
								<input type="radio" name="r2" value="Нет" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Нет</span>
								</span>
							</label>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">С каким возрастом вы работали?</p>
								<label class="wrapper-login01">
									<input name="r3" value="Груднички (до 1 года)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Груднички (до 1 года)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r4" value="Дети (от 1 до 3 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дети (от 1 до 3 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r5" value="Дошкольники (от 4 до 6 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дошкольники (от 4 до 6 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r6" value="Младшая школа (от 7 до 10 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Младшая школа (от 7 до 10 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r7" value="Подростки (от 10 до 18 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Подростки (от 10 до 18 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r8" value="Пожилые люди" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Пожилые люди</span>
								</label>
								<label class="wrapper-login01">
									<input name="r9" value="Домашные животные" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Домашные животные</span>
								</label>
								<label class="wrapper-login01">
									<input name="r10" value="Особые потребности" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Особые потребности</span>
								</label>
							</div>
						</div>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Навыки обучения иностранным языкам</p>

							<label class="label-radio center">
								<input type="radio" name="r11" value="Да" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
								</span>
							</label>

							<label class="label-radio center">
								<input type="radio" name="r11" value="Нет" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Нет</span>
								</span>
							</label>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">Каким языкам вы можете обучать детей?</p>
								<label class="wrapper-login01">
									<input name="r12" value="Английский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Английский</span>
								</label>
								<label class="wrapper-login01">
									<input name="r13" value="Французский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Французский</span>
								</label>
								<label class="wrapper-login01">
									<input name="r14" value="Немецкий" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Немецкий</span>
								</label>
								<label class="wrapper-login01">
									<input name="r15" value="Итальянский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Итальянский</span>
								</label>
								<label class="wrapper-login01">
									<input name="r16" value="Испанский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Испанский</span>
								</label>
								<label class="wrapper-login01">
									<input name="r17" value="Китайский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Китайский</span>
								</label>
								<label class="wrapper-login01">
									<input name="r18" value="Японский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Японский</span>
								</label>
							</div>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">Какой возраст вы сможете обучать?</p>
								<label class="wrapper-login01">
									<input name="r19" value="Дети (от 1 до 3 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дети (от 1 до 3 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r20" value="Дошкольники (от 4 до 6 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дошкольники (от 4 до 6 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r21" value="Младшая школа (от 7 до 10 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Младшая школа (от 7 до 10 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r22" value="Подростки (от 10 до 18 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Подростки (от 10 до 18 лет)</span>
								</label>
							</div>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">Ваш уровень владения языком</p>
								<label class="wrapper-login01">
									<input name="lvl" value="Начальный уровень" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Начальный уровень</span>
								</label>
								<label class="wrapper-login01">
									<input name="lvl" value="Средний уровень" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Средний уровень</span>
								</label>
								<label class="wrapper-login01">
									<input name="lvl" value="Продвинутый уровень" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Продвинутый уровень</span>
								</label>
							</div>
						</div>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Работа по дому</p>

							<label class="label-radio center">
								<input type="radio" name="r23" value="Да" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
								</span>
							</label>

							<label class="label-radio center">
								<input type="radio" name="r23" value="Нет" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Нет</span>
								</span>
							</label>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">Виды работ по дому</p>
								<label class="wrapper-login01">
									<input name="r24" value="Домашние дела" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Домашние дела</span>
								</label>
								<label class="wrapper-login01">
									<input name="r25" value="Приготовление ед" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Приготовление еды</span>
								</label>
								<label class="wrapper-login01">
									<input name="r26" value="Сервировка стола" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Сервировка стола</span>
								</label>
								<label class="wrapper-login01">
									<input name="r27" value="Садоводство" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Садоводство</span>
								</label>
								<label class="wrapper-login01">
									<input name="r28" value="Уход за гардеробом" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Уход за гардеробом</span>
								</label>
							</div>
						</div>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Приготовление еды</p>

							<label class="label-radio center">
								<input type="radio" name="r29" value="Да" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
								</span>
							</label>

							<label class="label-radio center">
								<input type="radio" name="r29" value="Нет" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Нет</span>
								</span>
							</label>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">Блюда какой кухни вы умеете готовить?</p>
								<label class="wrapper-login01">
									<input name="r30" value="Русская кухня" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Русская кухня</span>
								</label>
								<label class="wrapper-login01">
									<input name="r31" value="Европейская кухня" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Европейская кухня</span>
								</label>
								<label class="wrapper-login01">
									<input name="r32" value="Арабская кухня" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Арабская кухня</span>
								</label>
								<label class="wrapper-login01">
									<input name="r33" value="Китайская кухня" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Китайская кухня</span>
								</label>
								<label class="wrapper-login01">
									<input name="r34" value="Вегетарианская кухня" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Вегетарианская кухня</span>
								</label>
								<label class="wrapper-login01">
									<input name="r35" value="Другая" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Другая</span>
								</label>
							</div>
						</div>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Навыки массажа</p>

							<label class="label-radio center">
								<input type="radio" name="r36" value="Да" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
								</span>
							</label>

							<label class="label-radio center">
								<input type="radio" name="r36" value="Нет" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Нет</span>
								</span>
							</label>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">Виды массажа</p>
								<label class="wrapper-login01">
									<input name="r37" value="Классический" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Классический</span>
								</label>
								<label class="wrapper-login01">
									<input name="r38" value="Тайский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Тайский</span>
								</label>
								<label class="wrapper-login01">
									<input name="r39" value="Китайский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Китайский</span>
								</label>
								<label class="wrapper-login01">
									<input name="r40" value="Балийский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Балийский</span>
								</label>
								<label class="wrapper-login01">
									<input name="r41" value="Индийский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Индийский</span>
								</label>
								<label class="wrapper-login01">
									<input name="r42" value="Другие виды" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Другие виды</span>
								</label>
							</div>
						</div>

						<button class="cont-form__btn two" type="submit">Продолжить<img src="/user_tpl/img/form-icon/f-btn.svg" alt=""></button>
					</div>
				</div>
			</div>
		</form>

	</div>

	<div class="footer reg">
		<div class="container">
			<div class="footer-cont">
				<a href="/" class="footer-cont__logo">
					<img src="/user_tpl/img/footer-section/logo-footer.svg" alt="">
				</a>

				<div class="footer-cont__link-block">
					<a href="javascript:;" id="f1" class="link-block__link">Помощь</a>
					<a href="question.html" class="link-block__link">Часто задаваемые вопросы</a>
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