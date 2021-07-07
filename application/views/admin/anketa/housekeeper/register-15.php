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
		
		<form action="/anketa/work_experience/housekeeper" method="post" class="reg-form">
			<div class="history-block">
				<p class="history-block__text active">Расскажите о себе</p>
				<div class="history-block__img"><img src="/user_tpl/img/form-icon/f-arrow.svg" alt=""></div>
				<p class="history-block__text active">Заполните анкету</p>
				<div class="history-block__img"><img src="/user_tpl/img/form-icon/f-arrow.svg" alt=""></div>
				<p class="history-block__text active">Укажите опыт работы</p>
			</div>

			<div class="cont-form">
				<div class="cont-form__item active">
					<div class="cont-form__number active-true"><p>1</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Общий стаж работы<img src="/user_tpl/img/form-icon/form-like.svg" alt=""></p>
					</div>
				</div>

				<div class="cont-form__item">
					<div class="cont-form__number active"><p>2</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title active">Опыт работы</p>

						<div class="input-radio center row mb">

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

						<p class="info-block__text three">Расскажите, в каких странах вы работали.<br>Укажите вакансии и срок работы.</p>
<div class="block_to_add">
						<p class="info-block__sub"><span><img src="/user_tpl/img/form-icon/flag.svg" alt=""></span>Страна #1</p>

						<div class="block-input select">
							<select name="country[]" id="" class="block-input__select">
								<option value="Филиппины">Филиппины</option>
								<option value="Россия">Россия</option>
								<option value="Беларусь">Беларусь</option>
								<option value="Украина">Украина</option>
								<option value="Польша">Польша</option>
							</select>
							<p class="block-input__text">В какой стране работали?</p>
						</div>

						<div class="block-input select">
							<select name="country_experience[]" id="" class="block-input__select">
								<option value="1 год">1 год</option>
								<option value="3 года">3 года</option>
								<option value="5 лет">5 лет</option>
								<option value="10 лет">10 лет</option>
								<option value="Более 10 лет">Более 10 лет</option>
							</select>
							<p class="block-input__text">Общий стаж работы в стране</p>
						</div>

						<div class="info-block__input-block">
							<p class="input-block__text two">Количество работодателей в стране</p>
							<input type="text" name="employers[]" placeholder="2">
						</div>

						<div class="block-checkbox">

							<div class="block-check width">
								<p class="block-check__title">Работодатель #1</p>

								<div class="block-input select width">
									<select name="nationalty[]" id="" class="block-input__select">
										<option value="Русский">Русский</option>
										<option value="Беларус">Беларус</option>
										<option value="Поляк">Поляк</option>
										<option value="Украинец">Украинец</option>
									</select>
									<p class="block-input__text two">Национальность работодателя</p>
								</div>

								<div class="info-block__input-block textarea width">
									<p class="input-block__text">Ваши обязанности</p>
									<textarea name="duties[]">Уход за детьми дошкольного возраста. Уборка по дому, приготовление еды.</textarea>
								</div>

								<p class="block-check__title">С каким возрастом вы работали?</p>

								<label class="wrapper-login01">
									<input name="r2[]" value="Груднички (до 1 года)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Груднички (до 1 года)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r3[]" value="Дети (от 1 до 3 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дети (от 1 до 3 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r4[]" value="Дошкольники (от 4 до 6 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дошкольники (от 4 до 6 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r5[]" value="Младшая школа (от 7 до 10 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Младшая школа (от 7 до 10 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r6[]" value="Подростки (от 10 до 18 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Подростки (от 10 до 18 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r7[]" value="Пожилые люди" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Пожилые люди</span>
								</label>
								<label class="wrapper-login01">
									<input name="r8[]" value="Домашные животные" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Домашные животные</span>
								</label>
								<label class="wrapper-login01">
									<input name="r9[]" value="Особые потребности" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Особые потребности</span>
								</label>
							</div>
						</div>

						<div class="block-checkbox">

							<div class="block-check width">
								<p class="block-check__title"><span><img src="/user_tpl/img/form-icon/sum.svg" alt=""></span>Работодатель #2</p>

								<div class="block-input select width">
									<select name="nationalty2[]" id="" class="block-input__select">
										<option value="Русский">Русский</option>
										<option value="Беларус">Беларус</option>
										<option value="Поляк">Поляк</option>
										<option value="Украинец">Украинец</option>
									</select>
									<p class="block-input__text two">Национальность работодателя</p>
								</div>

								<div class="info-block__input-block textarea width">
									<p class="input-block__text">Ваши обязанности</p>
									<textarea name="duties[]">Уход за детьми дошкольного возраста. Уборка по дому, приготовление еды.</textarea>
								</div>

								<p class="block-check__title">С каким возрастом вы работали?</p>

								<label class="wrapper-login01">
									<input name="r2-2[]" value="Груднички (до 1 года)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Груднички (до 1 года)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r3-2[]" value="Дети (от 1 до 3 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дети (от 1 до 3 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r4-2[]" value="Дошкольники (от 4 до 6 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дошкольники (от 4 до 6 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r5-2[]" value="Младшая школа (от 7 до 10 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Младшая школа (от 7 до 10 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r6-2[]" value="Подростки (от 10 до 18 лет)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Подростки (от 10 до 18 лет)</span>
								</label>
								<label class="wrapper-login01">
									<input name="r7-2[]" value="Пожилые люди" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Пожилые люди</span>
								</label>
								<label class="wrapper-login01">
									<input name="r8-2[]" value="Домашные животные" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Домашные животные</span>
								</label>
								<label class="wrapper-login01">
									<input name="r9-2[]" value="Особые потребности" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Особые потребности</span>
								</label>
							</div>
						</div>
</div>
						<a href="#" class="cont-form__link"><img src="/user_tpl/img/form-icon/flag-2.svg" alt="">Добавить страну</a>

						<button class="cont-form__btn" type="submit">Завершить регистрацию</button>

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
	<script>
		autosize($('textarea'));
	</script>
	<script>
		const $block = $('.block_to_add').clone();

		$('.cont-form__link').click(function() {
			$(this).before($block.clone());
		});
	</script>
</body>
</html>