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
			<a href="pages/faq" class="header-cont__servlink">Часто задаваемые вопросы</a>
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

		<div class="header-cont__entrance-block reg employer">
			<a href="login.html" class="header-cont__entrancelink"><img src="/user_tpl/img/login-icon.svg" alt="">Профиль</a>
			<!-- <a href="#" class="header-cont__entrancelink prem">Купить премиум</a> -->
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
					<div class="header-cont__language desctop reg employer">
						<img src="/user_tpl/img/one-section/en.png" alt="en" data-google-lang="en" class="language__img">
			<img src="/user_tpl/img/one-section/ru.png" alt="ru" data-google-lang="ru" class="language__img">
			<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
					</div>

					<div class="header-cont__services-link desctop reg employer">
						<a href="javascript:;" id="popOne" class="header-cont__servlink">Помощь</a>
						<a href="pages/faq" class="header-cont__servlink">Часто задаваемые вопросы</a>
					</div>

					<a href="#" class="control-login"><img src="/user_tpl/img/form-icon/control-login.svg" alt=""></a>
					<a href="#" class="sms"><img src="/user_tpl/img/form-icon/sms.svg" alt=""><span></span></a>

					<div class="header-cont__entrance-block reg employer">
						<a href="login.html" class="header-cont__entrancelink"><img src="/user_tpl/img/login-icon.svg" alt="">Профиль</a>
						<!-- <a href="#" class="header-cont__entrancelink prem">Купить премиум</a> -->
					</div>

					<!-- <a href="javascript:;" class="vhod"><img src="/user_tpl/img/vhod.svg" alt=""></a> -->
					<a href="javascript:;" class="burger-two employer" id="burger"><img src="/user_tpl/img/burger-2.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>

	<div class="reg-two">
		
		<form action="/anketa/create/final" method="post" class="reg-form">

			<div class="cont-form">
				<div class="cont-form__item active">
					<div class="cont-form__number active-true"><p>1</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Мои дети <img src="/user_tpl/img/form-icon/form-like.svg" alt=""></p>
					</div>
				</div>

				<div class="cont-form__item active">
					<div class="cont-form__number active-true"><p>2</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Тип занятости<img src="/user_tpl/img/form-icon/form-like.svg" alt=""></p>
					</div>
				</div>

				<div class="cont-form__item active">
					<div class="cont-form__number active-true"><p>3</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Расписание<img src="/user_tpl/img/form-icon/form-like.svg" alt=""></p>
					</div>
				</div>

				<div class="cont-form__item active">
					<div class="cont-form__number active-true"><p>4</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Объявление<img src="/user_tpl/img/form-icon/form-like.svg" alt=""></p>
					</div>
				</div>

				<div class="cont-form__item">
					<div class="cont-form__number active"><p>5</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title active">Мой идеальный кандидат</p>
						<p class="input-radio__title">Основные пожелания</p>

						<div class="block-input select calen">
							<select name="nationality" id="" class="block-input__select">
								<option value="русская">русская</option>
								<option value="беларусская">беларусская</option>
								<option value="украйнская">украинская</option>
								<option value="польская">польская</option>
							</select>
							<p class="block-input__text">Национальность</p>
						</div>

						<div class="block-input select calen">
							<select name="sex" id="" class="block-input__select">
								<option value="Женский">Женский</option>
								<option value="Мужской">Мужской</option>
							</select>
							<p class="block-input__text">Пол</p>
						</div>

						<div class="block-input select calen">
							<select name="education" id="" class="block-input__select">
								<option value="Высшее">Высшее</option>
								<option value="Среднее">Среднее</option>
								<option value="Нет образования">Нет образования</option>
							</select>
							<p class="block-input__text">Минимальный уровень образования</p>
						</div>

						<div class="calendar-block">
							<div class="block-select">
								<div class="block-input select block-s one">
									<input type="text" name="earning" class="block-input__input" placeholder="45 тыс">
									<p class="block-input__text">Заработная плата (₽)</p>
								</div>

								<div class="block-input select block-s">
									<select name="period" id="" class="block-input__select">
										<option value="в месяц">в месяц</option>
										<option value="в неделю">в неделю</option>
										<option value="в день">в день</option>
										<option value="в час">в час</option>
									</select>
									<p class="block-input__text">Период</p>
								</div>
							</div>
						</div>

						<p class="input-radio__title">Навыки обучения иностранным языкам</p>

						<div class="block-checkbox">
							<p class="block-checkbox__title">С какими детьми кандидат должен иметь опыт работы</p>

							<div class="block-check">
								<label class="wrapper-login01">
									<input name="lang_experience_1" value="Груднички (до 1 года)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Груднички (до 1 года)</span>
								</label>
								<label class="wrapper-login01">
									<input name="lang_experience_2" value="Дети (от 1 до 3 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дети (от 1 до 3 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="lang_experience_3" value="Дошкольники (от 4 до 6 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дошкольники (от 4 до 6 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="lang_experience_4" value="Младшая школа (от 7 до 10 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Младшая школа (от 7 до 10 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="lang_experience_5" value="Подростки (от 10 до 18 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Подростки (от 10 до 18 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="lang_experience_6" value="Пожилые люди" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Пожилые люди</span>
								</label>
								<label class="wrapper-login01">
									<input name="lang_experience_7" value="Домашные животные" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Домашные животные</span>
								</label>
								<label class="wrapper-login01">
									<input name="lang_experience_8" value="Особые потребности" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Особые потребности</span>
								</label>
							</div>
						</div>

						<p class="input-radio__title">Возраст</p>

						<div class="block-input select calen">
							<select name="age" id="" class="block-input__select">
								<option value="От 18 до 25 лет">От 18 до 25 лет</option>
								<option value="От 25 до 35 лет">От 25 до 35 лет</option>
								<option value="От 35 до 45 лет">От 35 до 45 лет</option>
								<option value="От 45 до 55 лет">От 45 до 55 лет</option>
								<option value="От 55 лет">От 55 лет</option>
							</select>
							<p class="block-input__text">Желаемый возраст кандидата</p>
						</div>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Наличие медицинского образования</p>

							<label class="label-radio center">
								<input type="radio" name="med_education" value="yes" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
								</span>
							</label>

							<label class="label-radio center">
								<input type="radio" name="med_education" value="no" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Нет</span>
								</span>
							</label>
						</div>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Уход за ребёнком</p>

							<label class="label-radio center">
								<input type="radio" name="child_care" value="yes" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
								</span>
							</label>

							<label class="label-radio center">
								<input type="radio" name="child_care" value="no" class="label-radio__input">
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
									<input name="care_experience_1" value="Груднички (до 1 года)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Груднички (до 1 года)</span>
								</label>
								<label class="wrapper-login01">
									<input name="care_experience_2" value="Дети (от 1 до 3 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дети (от 1 до 3 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="care_experience_3" value="Дошкольники (от 4 до 6 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дошкольники (от 4 до 6 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="care_experience_4" value="Младшая школа (от 7 до 10 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Младшая школа (от 7 до 10 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="care_experience_5" value="Подростки (от 10 до 18 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Подростки (от 10 до 18 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="care_experience_6" value="Пожилые люди" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Пожилые люди</span>
								</label>
								<label class="wrapper-login01">
									<input name="care_experience_7" value="Домашные животные" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Домашные животные</span>
								</label>
								<label class="wrapper-login01">
									<input name="care_experience_8" value="Особые потребности" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Особые потребности</span>
								</label>
							</div>
						</div>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Навыки обучения иностранным языкам</p>

							<label class="label-radio center">
								<input value="yes" type="radio" name="learn_eng" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
								</span>
							</label>

							<label class="label-radio center">
								<input value="no" type="radio" name="learn_eng" class="label-radio__input">
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
									<input name="child_learn_lang_1" value="Английский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Английский</span>
								</label>
								<label class="wrapper-login01">
									<input name="child_learn_lang_2" value="Французский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Французский</span>
								</label>
								<label class="wrapper-login01">
									<input name="child_learn_lang_3" value="Немецкий" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Немецкий</span>
								</label>
								<label class="wrapper-login01">
									<input name="child_learn_lang_4" value="Итальянский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Итальянский</span>
								</label>
								<label class="wrapper-login01">
									<input name="child_learn_lang_5" value="Испанский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Испанский</span>
								</label>
								<label class="wrapper-login01">
									<input name="child_learn_lang_6" value="Китайский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Китайский</span>
								</label>
								<label class="wrapper-login01">
									<input name="child_learn_lang_7" value="Японский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Японский</span>
								</label>
							</div>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">Какой возраст вы сможете обучать?</p>
								<label class="wrapper-login01">
									<input name="child_learn_lang_age_1" value="Дети (от 1 до 3 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дети (от 1 до 3 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="child_learn_lang_age_2" value="Дошкольники (от 4 до 6 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дошкольники (от 4 до 6 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="child_learn_lang_age_3" value="Младшая школа (от 7 до 10 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Младшая школа (от 7 до 10 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="child_learn_lang_age_4" value="Подростки (от 10 до 18 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Подростки (от 10 до 18 лет)</span>
								</label>
							</div>
						</div>

						<div class="block-checkbox two">

							<div class="block-check">
								<p class="block-check__title">Ваш уровень владения языком</p>
								<label class="wrapper-login01">
									<input name="lang_lvl" value="Начальный уровень" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Начальный уровень</span>
								</label>
								<label class="wrapper-login01">
									<input name="lang_lvl" value="Средний уровень" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Средний уровень</span>
								</label>
								<label class="wrapper-login01">
									<input name="lang_lvl" value="Продвинутый уровень" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Продвинутый уровень</span>
								</label>
							</div>
						</div>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Работа по дому</p>

							<label class="label-radio center">
								<input value="yes" type="radio" name="homework" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
								</span>
							</label>

							<label class="label-radio center">
								<input value="no" type="radio" name="homework" class="label-radio__input">
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
									<input name="homework_type_1" value="Домашние дела" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Домашние дела</span>
								</label>
								<label class="wrapper-login01">
									<input name="homework_type_2" value="Приготовление еды" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Приготовление еды</span>
								</label>
								<label class="wrapper-login01">
									<input name="homework_type_3" value="Сервировка стола" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Сервировка стола</span>
								</label>
								<label class="wrapper-login01">
									<input name="homework_type_4" value="Садоводство" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Садоводство</span>
								</label>
								<label class="wrapper-login01">
									<input name="homework_type_5" value="Уход за гардеробом" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Уход за гардеробом</span>
								</label>
							</div>
						</div>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Приготовление еды</p>

							<label class="label-radio center">
								<input value="yes" type="radio" name="cooking" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
								</span>
							</label>

							<label class="label-radio center">
								<input value="no" type="radio" name="cooking" class="label-radio__input">
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
									<input name="kichen_1" value="Русская кухня" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Русская кухня</span>
								</label>
								<label class="wrapper-login01">
									<input name="kichen_2" value="Европейская кухня" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Европейская кухня</span>
								</label>
								<label class="wrapper-login01">
									<input name="kichen_3" value="Арабская кухня" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Арабская кухня</span>
								</label>
								<label class="wrapper-login01">
									<input name="kichen_4" value="Китайская кухня" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Китайская кухня</span>
								</label>
								<label class="wrapper-login01">
									<input name="kichen_5" value="Вегетарианская кухня" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Вегетарианская кухня</span>
								</label>
								<label class="wrapper-login01">
									<input name="kichen_6" value="Другая" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Другая</span>
								</label>
							</div>
						</div>

						<div class="input-radio center row mb">
							<p class="input-radio__title">Навыки массажа</p>

							<label class="label-radio center">
								<input value="yes" type="radio" name="massage" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Да</span>
								</span>
							</label>

							<label class="label-radio center">
								<input value="no" type="radio" name="massage" class="label-radio__input">
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
									<input name="massage_type_1" value="Классический" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Классический</span>
								</label>
								<label class="wrapper-login01">
									<input name="massage_type_2" value="Тайский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Тайский</span>
								</label>
								<label class="wrapper-login01">
									<input name="massage_type_3" value="Китайский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Китайский</span>
								</label>
								<label class="wrapper-login01">
									<input name="massage_type_4" value="Балийский массаж" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Балийский массаж</span>
								</label>
								<label class="wrapper-login01">
									<input name="massage_type_5" value="Индийский массаж" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Индийский массаж</span>
								</label>
								<label class="wrapper-login01">
									<input name="massage_type_6" value="Другие виды" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Другие виды</span>
								</label>
							</div>
						</div>

						<a href="#" class="cont-form__button">Предварительный просмотр</a>
						<button class="cont-form__btn" type="submit">Опубликовать объявление</button>
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