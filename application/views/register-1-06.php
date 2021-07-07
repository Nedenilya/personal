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
		
		<form action="/register/employee/6" method="post" class="reg-form">
			<div class="history-block">
				<p class="history-block__text active">Расскажите о себе</p>
				<div class="history-block__img"><img src="/user_tpl/img/form-icon/f-arrow.svg" alt=""></div>
				<p class="history-block__text">Заполните анкету</p>
				<div class="history-block__img"><img src="/user_tpl/img/form-icon/f-arrow.svg" alt=""></div>
				<p class="history-block__text">Укажите опыт работы</p>
			</div>

			<div class="cont-form">
				<div class="cont-form__item active">
					<div class="cont-form__number active-true"><p>1</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Личные данные<img src="/user_tpl/img/form-icon/form-like.svg" alt=""></p>
					</div>
				</div>

				<div class="cont-form__item active">
					<div class="cont-form__number active-true"><p>2</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Загрузка фотографии<img src="/user_tpl/img/form-icon/form-like.svg" alt=""></p>
					</div>
				</div>

				<div class="cont-form__item">
					<div class="cont-form__number active"><p>3</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title active">Уровень образования</p>

						<div class="block-input select">
							<select name="education" id="" class="block-input__select">
								<option value="Высшее">Высшее</option>
								<option value="Среднее">Среднее</option>
								<option value="Нет образования">Нет образования</option>
							</select>
							<p class="block-input__text">Уровень образования</p>
						</div>
						<div class="block-input select">
							<select name="religion" id="" class="block-input__select">
								<option value="Нет религии">Выберите религию</option>
								<option value="Христианство">Христианство</option>
								<option value="Ислам">Ислам</option>
								<option value="Индуизм">Индуизм</option>
								<option value="Буддизм">Буддизм</option>
								<option value="Нет религии">Нет религии</option>
							</select>
							<p class="block-input__text">Религия</p>
						</div>
						<div class="block-input select">
							<input type="text" class="block-input__select" name="lang" list="citynames">
								<datalist id="citynames">
<option value="Аари                          ">
<option value="Абазинский                    ">
<option value="Абхазский                     ">
<option value="Авадхи                        ">
<option value="Аварский                      ">
<option value="Авестийский                   ">
<option value="Агульский                     ">
<option value="Аджа                          ">
<option value="Адыгейский                    ">
<option value="Азербайджанский               ">
<option value="Аймарский                     ">
<option value="Айнский                       ">
<option value="Акан‎                          ">
<option value="Аккадский                     ">
<option value="Алабамский                    ">
<option value="Албанский                     ">
<option value="Алгонквинский                 ">
<option value="Алеманнский                   ">
<option value="Алеутский                     ">
<option value="Алтайский                     ">
<option value="Алуне‎                         ">
<option value="Алюторский                    ">
<option value="Амара‎                         ">
<option value="Амбай‎                         ">
<option value="Амбонезский                   ">
<option value="Амхарский                     ">
<option value="Анакалангу‎                    ">
<option value="Ангика‎                        ">
<option value="Английский                    ">
<option value="Англо-нормандский             ">
<option value="Англо-шотландский             ">
<option value="Андийский                     ">
<option value="Арабский                      ">
<option value="Аравакский                    ">
<option value="Арагонский                    ">
<option value="Арамейский                    ">
<option value="Арапахо‎                       ">
<option value="Арауканский                   ">
<option value="Аргуни‎                        ">
<option value="Армянский                     ">
<option value="Арумынский                    ">
<option value="Арчинский                     ">
<option value="Ассамский                     ">
<option value="Ассанский                     ">
<option value="Ассирийский                   ">
<option value="Астурийский                   ">
<option value="Ауджила‎                       ">
<option value="Афарский                      ">
<option value="Африкаанс‎                     ">
<option value="Ахвахский                     ">
<option value="Ачехский                      ">
<option value="Баварский диалект‎             ">
<option value="Багвалинский                  ">
<option value="Бактрийский                   ">
<option value="Балийский                     ">
<option value="Бамбара‎                       ">
<option value="Банджарский                   ">
<option value="Баскский                      ">
<option value="Бацбийский                    ">
<option value="Башкирский                    ">
<option value="Бежтинский                    ">
<option value="Белорусский                   ">
<option value="Белуджский                    ">
<option value="Бемба‎                         ">
<option value="Бенгальский                   ">
<option value="Берберский                    ">
<option value="Бикольский                    ">
<option value="Билин‎                         ">
<option value="Бирманский                    ">
<option value="Биса‎                          ">
<option value="Бислама‎                       ">
<option value="Бишнуприя-манипури‎            ">
<option value="Болгарский                    ">
<option value="Боснийский                    ">
<option value="Ботлихский                    ">
<option value="Бо‎                            ">
<option value="Брауи‎                         ">
<option value="Бретонский                    ">
<option value="Бугийский                     ">
<option value="Будухский                     ">
<option value="Букмол‎                        ">
<option value="Булгарский                    ">
<option value="Бундели‎                       ">
<option value="Бурятский                     ">
<option value="Бухидский                     ">
<option value="Бходжпури‎                     ">
<option value="Ваи‎                           ">
<option value="Валлийский                    ">
<option value="Валлонский                    ">
<option value="Варайский                     ">
<option value="Венгерский                    ">
<option value="Венда‎                         ">
<option value="Венетский                     ">
<option value="Вепсский                      ">
<option value="Верхнелужицкий                ">
<option value="Вилямовский                   ">
<option value="Водский                       ">
<option value="Волапюк‎                       ">
<option value="Волоф‎                         ">
<option value="Восточнобонтокский            ">
<option value="Восточнофризский              ">
<option value="Выруский                      ">
<option value="Вьетнамский                   ">
<option value="Гавайский                     ">
<option value="Гагаузский                    ">
<option value="Гаитянский креольский         ">
<option value="Галисийский                   ">
<option value="Гань‎                          ">
<option value="Генуэзский диалект‎            ">
<option value="Гинухский                     ">
<option value="Годоберинский                 ">
<option value="Гонгду‎                        ">
<option value="Горани‎                        ">
<option value="Горномарийский                ">
<option value="Готский                       ">
<option value="Гренландский                  ">
<option value="Греческий                     ">
<option value="Грузинский                    ">
<option value="Гуаньхуа‎                      ">
<option value="Гуарани‎                       ">
<option value="Гуджарати‎                     ">
<option value="Гунзибский                    ">
<option value="Гхадамесский                  ">
<option value="Гэльский (шотландский)        ">
<option value="Даргинский                    ">
<option value="Дари‎                          ">
<option value="Датский                       ">
<option value="Дзонг-кэ‎                      ">
<option value="Дивехи‎                        ">
<option value="Диери‎                         ">
<option value="Димли‎                         ">
<option value="Догри‎                         ">
<option value="Долганский                    ">
<option value="Древнеанглийский              ">
<option value="Древнеармянский               ">
<option value="Древнебретонский              ">
<option value="Древневерхненемецкий          ">
<option value="Древнегреческий               ">
<option value="Древнееврейский               ">
<option value="Древнеисландский              ">
<option value="Древнеперсидский              ">
<option value="Древнепрусский                ">
<option value="Древнерусский                 ">
<option value="Древнескандинавский           ">
<option value="Дунганский                    ">
<option value="Египетский                    ">
<option value="Жемайтский                    ">
<option value="Зазаки‎                        ">
<option value="Западнофламандский            ">
<option value="Зулу‎                          ">
<option value="Ибанский                      ">
<option value="Иврит‎                         ">
<option value="Игбо‎                          ">
<option value="Идиш‎                          ">
<option value="Идо‎                           ">
<option value="Ижорский                      ">
<option value="Илоканский                    ">
<option value="Инари-саамский                ">
<option value="Ингушский                     ">
<option value="Индонезийский                 ">
<option value="Интерлингва‎                   ">
<option value="Интерлингве‎                   ">
<option value="Инуктитут‎                     ">
<option value="Инупиак‎                       ">
<option value="Ирландский                    ">
<option value="Исландский                    ">
<option value="Испанский                     ">
<option value="Истророманский                ">
<option value="Истрорумынский                ">
<option value="Итальянский                   ">
<option value="Ительменский                  ">
<option value="Йоруба‎                        ">
<option value="Кабардино-черкесский          ">
<option value="Кабильский                    ">
<option value="Кабувердьяну‎                  ">
<option value="Казахский                     ">
<option value="Калмыцкий                     ">
<option value="Каннада‎                       ">
<option value="Капампанганский               ">
<option value="Караимский                    ">
<option value="Каракалпакский                ">
<option value="Каратинский                   ">
<option value="Карачаево-балкарский          ">
<option value="Карельский                    ">
<option value="Каталанский                   ">
<option value="Кашмири‎                       ">
<option value="Кашубский                     ">
<option value="Кваньяма‎                      ">
<option value="Квенский                      ">
<option value="Квенья‎                        ">
<option value="Кемак‎                         ">
<option value="Кетский                       ">
<option value="Кечуа‎                         ">
<option value="Киконго‎                       ">
<option value="Кикуйю‎                        ">
<option value="Киньяруанда‎                   ">
<option value="Киргизский                    ">
<option value="Кирибатский                   ">
<option value="Кирунди‎                       ">
<option value="Китайский                     ">
<option value="Классический науатль‎          ">
<option value="Клингонский                   ">
<option value="Кокборок‎                      ">
<option value="Колтта-саамский               ">
<option value="Коми-зырянский                ">
<option value="Коми-пермяцкий                ">
<option value="Коми‎                          ">
<option value="Конкани‎                       ">
<option value="Коптский                      ">
<option value="Корейский                     ">
<option value="Корнский                      ">
<option value="Корсиканский                  ">
<option value="Корякский                     ">
<option value="Коса‎                          ">
<option value="Кри‎                           ">
<option value="Крызский                      ">
<option value="Крымскотатарский              ">
<option value="Крымчакский                   ">
<option value="Куллуи‎                        ">
<option value="Кумыкский                     ">
<option value="Курдский                      ">
<option value="Курманджи‎                     ">
<option value="Кхмерский                     ">
<option value="Къхонг‎                        ">
<option value="Ладинский                     ">
<option value="Лазский                       ">
<option value="Лакота‎                        ">
<option value="Лакский                       ">
<option value="Лаосский                      ">
<option value="Латгальский                   ">
<option value="Латинский                     ">
<option value="Латышский                     ">
<option value="Лезгинский                    ">
<option value="Леки‎                          ">
<option value="Ливский                       ">
<option value="Лидепла‎                       ">
<option value="Ликийский                     ">
<option value="Лимбургский                   ">
<option value="Лингала‎                       ">
<option value="Литовский                     ">
<option value="Логлан‎                        ">
<option value="Ложбан‎                        ">
<option value="Ломбардский                   ">
<option value="Лувийский                     ">
<option value="Луганда‎                       ">
<option value="Люксембургский                ">
<option value="Магахи‎                        ">
<option value="Мадурский                     ">
<option value="Мазендеранский                ">
<option value="Макасарский                   ">
<option value="Македонский                   ">
<option value="Малагасийский                 ">
<option value="Малайский                     ">
<option value="Малаялам‎                      ">
<option value="Мальтийский                   ">
<option value="Мамбай‎                        ">
<option value="Мангаревский                  ">
<option value="Мандинго‎                      ">
<option value="Мандинка‎                      ">
<option value="Мансийский                    ">
<option value="Маньчжурский                  ">
<option value="Маори‎                         ">
<option value="Маратхи‎                       ">
<option value="Марийский                     ">
<option value="Маршалльский                  ">
<option value="Масайский                     ">
<option value="Мегрельский                   ">
<option value="Меру‎                          ">
<option value="Микенский                     ">
<option value="Микмак‎                        ">
<option value="Минангкабау‎                   ">
<option value="Минь-дун‎                      ">
<option value="Мирандский                    ">
<option value="Могаукский                    ">
<option value="Мокшанский                    ">
<option value="Молдавский                    ">
<option value="Монгольский                   ">
<option value="Море                          ">
<option value="Мэнский                       ">
<option value="Навахо‎                        ">
<option value="Нанайский                     ">
<option value="Науатль‎                       ">
<option value="Науру‎                         ">
<option value="Нгаджу‎                        ">
<option value="Нганасанский                  ">
<option value="Ндонга‎                        ">
<option value="Неаполитанский                ">
<option value="Неварский                     ">
<option value="Негидальский                  ">
<option value="Немецкий                      ">
<option value="Ненецкий                      ">
<option value="Непальский                    ">
<option value="Нивхский                      ">
<option value="Нидерландский                 ">
<option value="Нидерландский средневековый‎   ">
<option value="Нижнелужицкий                 ">
<option value="Нижненемецкий                 ">
<option value="Ниуафооу‎                      ">
<option value="Ниуэ‎                          ">
<option value="Новиаль‎                       ">
<option value="Ногайский язык‎                ">
<option value="Норвежский                    ">
<option value="Нормандский                   ">
<option value="Норфолкский                   ">
<option value="Носу‎                          ">
<option value="Нюнорск‎                       ">
<option value="Оджибва‎                       ">
<option value="Окинавский                    ">
<option value="Окситанский                   ">
<option value="Ория‎                          ">
<option value="Орокский                      ">
<option value="Оромо‎                         ">
<option value="Орочский                      ">
<option value="Осетинский                    ">
<option value="Оскский                       ">
<option value="Османский                     ">
<option value="Палау‎                         ">
<option value="Пали‎                          ">
<option value="Пангасинанский                ">
<option value="Панджаби‎                      ">
<option value="Папьяменту‎                    ">
<option value="Педи‎                          ">
<option value="Пенсильванско-немецкий        ">
<option value="Персидский                    ">
<option value="Печенежский                   ">
<option value="Пикардский                    ">
<option value="Полабский                     ">
<option value="Польский                      ">
<option value="Португальский                 ">
<option value="Прагерманский                 ">
<option value="Праиндоевропейский            ">
<option value="Праславянский                 ">
<option value="Пушту‎                         ">
<option value="Пьемонтский                   ">
<option value="Рапануйский                   ">
<option value="Раротонга‎                     ">
<option value="Ретороманский                 ">
<option value="Рипуарский                    ">
<option value="Романшский                    ">
<option value="Румынский                     ">
<option value="Русинский                     ">
<option value="Русский                       ">
<option value="Рутульский                    ">
<option value="Саамский (кильдинский)        ">
<option value="Самоанский                    ">
<option value="Санго‎                         ">
<option value="Санскрит‎                      ">
<option value="Сантали‎                       ">
<option value="Сардинский                    ">
<option value="Сванский                      ">
<option value="Свати‎                         ">
<option value="Себуано‎                       ">
<option value="Северносаамский               ">
<option value="Севернофризский               ">
<option value="Северноюкагирский             ">
<option value="Селькупский                   ">
<option value="Сербохорватский               ">
<option value="Сербский язык‎                 ">
<option value="Сесото‎                        ">
<option value="Сефардский                    ">
<option value="Сибирскотатарский             ">
<option value="Силезский                     ">
<option value="Сингальский                   ">
<option value="Синдарин‎                      ">
<option value="Синдхи‎                        ">
<option value="Сиреникский                   ">
<option value="Сирийский                     ">
<option value="Сицилийский                   ">
<option value="Словацкий                     ">
<option value="Словенский                    ">
<option value="Словио‎                        ">
<option value="Словянски                     ">
<option value="Сога‎                          ">
<option value="Сольресоль‎                    ">
<option value="Сомалийский                   ">
<option value="Сонинке‎                       ">
<option value="Сорани‎                        ">
<option value="Сранан-тонго‎                  ">
<option value="Среднеанглийский              ">
<option value="Среднеармянский               ">
<option value="Среднебретонский              ">
<option value="Средневерхненемецкий          ">
<option value="Среднефранцузский             ">
<option value="Старославянский               ">
<option value="Старофранцузский              ">
<option value="Старофризский                 ">
<option value="Суахили‎                       ">
<option value="Сунданский                    ">
<option value="Табасаранский                 ">
<option value="Тагальский                    ">
<option value="Таджикский                    ">
<option value="Таитянский                    ">
<option value="Тайский                       ">
<option value="Талышский                     ">
<option value="Тамашек‎                       ">
<option value="Тамильский                    ">
<option value="Таос‎                          ">
<option value="Татарский                     ">
<option value="Татский                       ">
<option value="Телугу‎                        ">
<option value="Тетум‎                         ">
<option value="Тибетский                     ">
<option value="Тигре‎                         ">
<option value="Тигринья‎                      ">
<option value="Тиндинский                    ">
<option value="Ток-писин‎                     ">
<option value="Токелау‎                       ">
<option value="Токипона‎                      ">
<option value="Токодеде‎                      ">
<option value="Тонга‎                         ">
<option value="Тофаларский                   ">
<option value="Тсвана‎                        ">
<option value="Тсонга                        ">
<option value="Тувалу‎                        ">
<option value="Тувинский                     ">
<option value="Тулу‎                          ">
<option value="Тупи‎                          ">
<option value="Турецкий                      ">
<option value="Туркменский                   ">
<option value="Тхо‎                           ">
<option value="Убыхский                      ">
<option value="Угаритский                    ">
<option value="Удинский                      ">
<option value="Удмуртский                    ">
<option value="Удэгейский                    ">
<option value="Узбекский                     ">
<option value="Уйгурский                     ">
<option value="Украинский                    ">
<option value="Ульчский                      ">
<option value="Умбрский                      ">
<option value="Урду‎                          ">
<option value="Урумский                      ">
<option value="Фарерский                     ">
<option value="Фиджийский                    ">
<option value="Фиджийский хинди‎              ">
<option value="Финский                       ">
<option value="Фон                           ">
<option value="Французский                   ">
<option value="Фризский                      ">
<option value="Фриульский                    ">
<option value="Фула‎                          ">
<option value="Хазарский                     ">
<option value="Хакасский                     ">
<option value="Хакка‎                         ">
<option value="Хантыйский                    ">
<option value="Хауса‎                         ">
<option value="Хваршинский                   ">
<option value="Хеттский                      ">
<option value="Хилигайнон‎                    ">
<option value="Хиналугский                   ">
<option value="Хинди‎                         ">
<option value="Хопи‎                          ">
<option value="Хорватский                    ">
<option value="Цахурский                     ">
<option value="Цезский                       ">
<option value="Центральный науатль‎           ">
<option value="Церковнославянский            ">
<option value="Цыганский                     ">
<option value="Чагатайский                   ">
<option value="Чамалинский                   ">
<option value="Чамикуро‎                      ">
<option value="Чаморро‎                       ">
<option value="Чви‎                           ">
<option value="Черногорский                  ">
<option value="Чероки‎                        ">
<option value="Чеченский                     ">
<option value="Чешский                       ">
<option value="Чжуанский                     ">
<option value="Чиа-чиа‎                       ">
<option value="Чоктавский                    ">
<option value="Чувашский                     ">
<option value="Чукотский                     ">
<option value="Чхаттисгархи‎                  ">
<option value="Шайенский                     ">
<option value="Шведский                      ">
<option value="Шерпский                      ">
<option value="Шипибо‎                        ">
<option value="Шона‎                          ">
<option value="Шорский                       ">
<option value="Шошонский                     ">
<option value="Шумерский                     ">
<option value="Эвенкийский                   ">
<option value="Эвенский                      ">
<option value="Эве‎                           ">
<option value="Эдо‎                           ">
<option value="Эмилиано-романьольский        ">
<option value="Эрзянский                     ">
<option value="Эсперанто‎                     ">
<option value="Эстонский                     ">
<option value="Эстремадурский                ">
<option value="Этрусский                     ">
<option value="Южнокурдский                  ">
<option value="Южноминьский диалект‎          ">
<option value="Южноюкагирский                ">
<option value="Юкатекский                    ">
<option value="Юэ‎                            ">
<option value="Яванский                      ">
<option value="Ягнобский                     ">
<option value="Якутский                      ">
<option value="Яо‎                            ">
<option value="Японский                      ">
								</datalist>
							<p class="block-input__text">Родной язык</p>
						</div>

						<div class="block-checkbox">
							<p class="block-checkbox__title">Другие языки</p>

							<div class="block-check">
								<label class="wrapper-login01">
									<input name="en" value="Английский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Английский</span>
								</label>
								<label class="wrapper-login01">
									<input name="du" value="Немецкий" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Немецкий</span>
								</label>
								<label class="wrapper-login01">
									<input name="fr" value="Французский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Французский</span>
								</label>
								<label class="wrapper-login01">
									<input name="it" value="Итальянский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Итальянский</span>
								</label>
								<label class="wrapper-login01">
									<input name="sp" value="Испанский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Испанский</span>
								</label>
								<label class="wrapper-login01">
									<input name="ch" value="Китайский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Китайский</span>
								</label>
								<label class="wrapper-login01">
									<input name="jp" value="Японский" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Японский</span>
								</label>
							</div>
						</div>

						<button class="cont-form__btn" type="submit">Продолжить<img src="/user_tpl/img/form-icon/f-btn.svg" alt=""></button>
					</div>
				</div>

				<div class="cont-form__item">
					<div class="cont-form__number"><p>4</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Завершение</p>
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
		<script src="/user_tpl/js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

	</body>
	</html>