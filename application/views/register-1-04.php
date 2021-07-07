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
						<a href="/auth/login" class="header-cont__entrancelink"><img src="/user_tpl/img/login-icon.svg" alt="">Профиль</a>
						<!-- <a href="#" class="header-cont__entrancelink prem">Купить премиум</a> -->
					</div>

					<!-- <a href="javascript:;" class="vhod"><img src="/user_tpl/img/vhod.svg" alt=""></a> -->
					<a href="javascript:;" class="burger-two" id="burger"><img src="/user_tpl/img/burger-2.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>

	<div class="reg-two">
		
		<form action="/register/employee/4" method="post" class="reg-form">
			<div class="history-block">
				<p class="history-block__text active">Расскажите о себе</p>
				<div class="history-block__img"><img src="/user_tpl/img/form-icon/f-arrow.svg" alt=""></div>
				<p class="history-block__text">Заполните анкету</p>
				<div class="history-block__img"><img src="/user_tpl/img/form-icon/f-arrow.svg" alt=""></div>
				<p class="history-block__text">Укажите опыт работы</p>
			</div>

			<div class="cont-form">
				<div class="cont-form__item">
					<div class="cont-form__number active"><p>1</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title active">Личные данные</p>
						<p class="info-block__text">Заполните как можно больше данных, чтобы найти подходящего работодателя.</p>

						<div class="info-block__input-block">
							<p class="input-block__text">Фамилия</p>
							<input name="surname" type="text" value="<?=$this->session->user['fname'];?>" placeholder="Введите фамилию">
						</div>
						<div class="info-block__input-block">
							<p class="input-block__text">Имя</p>
							<input name="name" type="text" value="<?=$this->session->user['sname'];?>" placeholder="Введите имя">
						</div>
						<div class="info-block__input-block">
							<p class="input-block__text">Отчество</p>
							<input name="thirdname" type="text" value="<?=$this->session->user['mname'];?>" placeholder="Введите отчество">
						</div>

						<div class="block-input select">
							<select name="sex" id="" class="block-input__select">
								<option value="Мужской">Мужской</option>
								<option value="Женский">Женский</option>
							</select>
							<p class="block-input__text">Пол</p>
						</div>
						<div class="block-input select">
							<input type="text" class="block-input__select" name="nationality" list="citynames">
								<datalist id="citynames">
									<option value="абадзехи                                           ">
<option value="абаза                                              ">
<option value="абазины                                            ">
<option value="абжуйцы                                            ">
<option value="абхазы                                             ">
<option value="аварал                                             ">
<option value="аварцы                                             ">
<option value="австрийцы                                          ">
<option value="агинцы                                             ">
<option value="агул шуй                                           ">
<option value="агулар                                             ">
<option value="агульцы                                            ">
<option value="агулы                                              ">
<option value="адай                                               ">
<option value="аджарели                                           ">
<option value="аджарцы                                            ">
<option value="адыгейцы                                           ">
<option value="адыгэ (с родным языком адыгейским)                 ">
<option value="адыгэ (с родным языком кабардинским)               ">
<option value="адыгэ (с родным языком черкесским)                 ">
<option value="азербайджанлы                                      ">
<option value="азербайджанлылар                                   ">
<option value="азербайджанцы                                      ">
<option value="айсоры                                             ">
<option value="аккинцы                                            ">
<option value="алабугатские татары                                ">
<option value="алаи                                               ">
<option value="албанцы                                            ">
<option value="алеуты                                             ">
<option value="алжирцы                                            ">
<option value="алтай-кижи                                         ">
<option value="алтайцы                                            ">
<option value="алтына куманды                                     ">
<option value="алутальу                                           ">
<option value="алюторцы                                           ">
<option value="амгун бэйенин                                      ">
<option value="американцы                                         ">
<option value="анатри                                             ">
<option value="ангагинас                                          ">
<option value="англичане                                          ">
<option value="андал                                              ">
<option value="андии                                              ">
<option value="андийцы                                            ">
<option value="анкалгакку                                         ">
<option value="анкалын                                            ">
<option value="анкальын                                           ">
<option value="апокваямыл                                         ">
<option value="апсуа                                              ">
<option value="апукинцы                                           ">
<option value="араби                                              ">
<option value="арабы                                              ">
<option value="арабы ОАЭ                                          ">
<option value="арабы среднеазиатские                              ">
<option value="аравийцы                                           ">
<option value="арамеи                                             ">
<option value="аргын                                              ">
<option value="армяне                                             ">
<option value="армяне донские                                     ">
<option value="армяне крымские                                    ">
<option value="арнауты                                            ">
<option value="арчи                                               ">
<option value="арчиб                                              ">
<option value="арчинцы                                            ">
<option value="аршиштиб                                           ">
<option value="асори                                              ">
<option value="ассирийцы                                          ">
<option value="ассурайя                                           ">
<option value="астраханские татары                                ">
<option value="атали                                              ">
<option value="атурая                                             ">
<option value="аукштайты                                          ">
<option value="ауховцы                                            ">
<option value="афганцы                                            ">
<option value="ахвалал                                            ">
<option value="ахвахцы                                            ">
<option value="ахтинцы                                            ">
<option value="ашвалъ                                             ">
<option value="ашватл                                             ">
<option value="ашкеназ                                            ">
<option value="ашхаруа                                            ">
<option value="ашхарцы                                            ">
<option value="багвалалы                                          ">
<option value="багвалинцы                                         ">
<option value="багулав                                            ">
<option value="багулалы                                           ">
<option value="баджавидж                                          ">
<option value="баджуведж                                          ">
<option value="баджувцы                                           ">
<option value="баджуйцы                                           ">
<option value="балкарцы                                           ">
<option value="балуч                                              ">
<option value="бани исроил                                        ">
<option value="бараба                                             ">
<option value="барабинцы                                          ">
<option value="баряат                                             ">
<option value="бахрейнцы                                          ">
<option value="башкиры                                            ">
<option value="башкиры-тептяри                                    ">
<option value="башкорт                                            ">
<option value="башкурт                                            ">
<option value="бежитинцы                                          ">
<option value="бежтинцы                                           ">
<option value="беларусы                                           ">
<option value="белорусы                                           ">
<option value="белуджи                                            ">
<option value="бенгали                                            ">
<option value="бенгальцы                                          ">
<option value="бепся                                              ">
<option value="берш                                               ">
<option value="бесермяне                                          ">
<option value="бесленеевцы (с родным языком адыгейским)           ">
<option value="бесленеевцы (с родным языком кабардино-черкесским) ">
<option value="бесленеи                                           ">
<option value="бешермяне                                          ">
<option value="бжедуги                                            ">
<option value="бзыбцы                                             ">
<option value="бойки                                              ">
<option value="болгары                                            ">
<option value="большие дэрбэты                                    ">
<option value="ботлихцы                                           ">
<option value="бохарлы                                            ">
<option value="брещуки                                            ">
<option value="бузавы                                             ">
<option value="буйхади                                            ">
<option value="буковинцы                                          ">
<option value="буряад                                             ">
<option value="буряты                                             ">
<option value="бухарские евреи                                    ">
<option value="бухарцы                                            ">
<option value="ваду                                               ">
<option value="вадьякко                                           ">
<option value="вадьялайн                                          ">
<option value="венгры                                             ">
<option value="вепсы                                              ">
<option value="вепся                                              ">
<option value="верховинцы                                         ">
<option value="ветлужские марийцы                                 ">
<option value="вирьял                                             ">
<option value="вогулы                                             ">
<option value="водь                                               ">
<option value="войкыпал'о                                         ">
<option value="волохь                                             ">
<option value="восточные (уральские) марийцы                      ">
<option value="вотяки                                             ">
<option value="воямпольцы                                         ">
<option value="вудмурт                                            ">
<option value="вулугуни                                           ">
<option value="вутла мари                                         ">
<option value="вьет ньгой                                         ">
<option value="вьетнамцы                                          ">
<option value="гагаузы                                            ">
<option value="гай                                                ">
<option value="галга                                              ">
<option value="гантляло                                           ">
<option value="гванал                                             ">
<option value="гибдиди                                            ">
<option value="гиляки                                             ">
<option value="гинухцы                                            ">
<option value="годоберинцы                                        ">
<option value="голендры                                           ">
<option value="голландцы                                          ">
<option value="гольды                                             ">
<option value="горные марийцы                                     ">
<option value="горские евреи                                      ">
<option value="греки                                              ">
<option value="греки-ромеи                                        ">
<option value="греки-урумы                                        ">
<option value="греки-эллины                                       ">
<option value="грекос                                             ">
<option value="грузинские евреи                                   ">
<option value="грузины                                            ">
<option value="гунзал                                             ">
<option value="гунзибцы                                           ">
<option value="гурбат                                             ">
<option value="гуцулы                                             ">
<option value="гьенози                                            ">
<option value="гъинухъес                                          ">
<option value="дагестанские евреи                                 ">
<option value="даг-чуфут                                          ">
<option value="дарган                                             ">
<option value="дарганти                                           ">
<option value="даргинцы                                           ">
<option value="дейч                                               ">
<option value="денг                                               ">
<option value="дербеты                                            ">
<option value="деткиль                                            ">
<option value="дживут бухари                                      ">
<option value="джуги                                              ">
<option value="джугут                                             ">
<option value="джуфут                                             ">
<option value="джухут                                             ">
<option value="дигор                                              ">
<option value="дигорон                                            ">
<option value="дигорцы                                            ">
<option value="дидойцы                                            ">
<option value="дойч                                               ">
<option value="долган                                             ">
<option value="долганы                                            ">
<option value="дом                                                ">
<option value="донские армяне                                     ">
<option value="дудки                                              ">
<option value="дулган                                             ">
<option value="дунгане                                            ">
<option value="дэрбеты                                            ">
<option value="дэрбэты                                            ">
<option value="большие дэрбэты                                    ">
<option value="малые дюрбеты                                      ">
<option value="дянь                                               ">
<option value="евреи                                              ">
<option value="евреи бухарские                                    ">
<option value="евреи горские                                      ">
<option value="евреи грузинские                                   ">
<option value="евреи дагестанские                                 ">
<option value="евреи крымские                                     ">
<option value="евреи среднеазиатские                              ">
<option value="евреи татские                                      ">
<option value="египтяне                                           ">
<option value="езды                                               ">
<option value="езиды                                              ">
<option value="ёгэн                                               ">
<option value="жагайбайлы                                         ">
<option value="жаппас                                             ">
<option value="жемайты                                            ">
<option value="заболотные татары                                  ">
<option value="затундренные крестьяне                             ">
<option value="зыряне                                             ">
<option value="ибдиди                                             ">
<option value="иври                                               ">
<option value="идари                                              ">
<option value="идери                                              ">
<option value="иди                                                ">
<option value="иезиды                                             ">
<option value="ижемцы                                             ">
<option value="ижора                                              ">
<option value="ижорцы                                             ">
<option value="изури                                              ">
<option value="изьватас                                           ">
<option value="илийцы                                             ">
<option value="илкан                                              ">
<option value="илэ                                                ">
<option value="имак'лъит                                          ">
<option value="ингерманландцы                                     ">
<option value="ингилой                                            ">
<option value="ингилойцы                                          ">
<option value="ингрикот                                           ">
<option value="ингры                                              ">
<option value="ингуши                                             ">
<option value="индигирщики                                        ">
<option value="индийцы хиндиязычные                               ">
<option value="инкерилайнен                                       ">
<option value="инхокваринцы                                       ">
<option value="иорданцы                                           ">
<option value="иракцы                                             ">
<option value="иранцы                                             ">
<option value="ирон                                               ">
<option value="иронцы                                             ">
<option value="испанцы                                            ">
<option value="исроэл                                             ">
<option value="итальянцы                                          ">
<option value="ительмены                                          ">
<option value="ительмень                                          ">
<option value="итэнмьи                                            ">
<option value="иезиды                                             ">
<option value="йеменцы                                            ">
<option value="йыхбы                                              ">
<option value="кабардей                                           ">
<option value="кабардинцы                                         ">
<option value="кабган                                             ">
<option value="казанлы                                            ">
<option value="казанские татары                                   ">
<option value="казахи                                             ">
<option value="казахи степские                                    ">
<option value="казахи туратинские                                 ">
<option value="кайтаги                                            ">
<option value="каитагцы                                           ">
<option value="калмаки                                            ">
<option value="калмыки                                            ">
<option value="калпак                                             ">
<option value="каменцы                                            ">
<option value="каменщики                                          ">
<option value="камчадалы (с родным языком ительменским)           ">
<option value="камчадалы (с родным языком русским)                ">
<option value="канинские поморы                                   ">
<option value="кантага ях                                         ">
<option value="капучины                                           ">
<option value="карагасы                                           ">
<option value="карагасы томские                                   ">
<option value="карагаши                                           ">
<option value="карагинцы                                          ">
<option value="караимы                                            ">
<option value="карай                                              ">
<option value="кара-кайтаги                                       ">
<option value="каракалпаки                                        ">
<option value="караногайцы                                        ">
<option value="каран'ыныльо                                       ">
<option value="каратаи                                            ">
<option value="каратинцы                                          ">
<option value="карачаевцы                                         ">
<option value="карачай                                            ">
<option value="карачайлыла (карачайлы)                            ">
<option value="карелы                                             ">
<option value="карийские (нукратские) татары                      ">
<option value="каролпак                                           ">
<option value="карпатороссы                                       ">
<option value="картвели                                           ">
<option value="карымы                                             ">
<option value="карьяла                                            ">
<option value="карьялайзет                                        ">
<option value="карьялани                                          ">
<option value="карьяляйн                                          ">
<option value="касимовские татары                                 ">
<option value="катарцы                                            ">
<option value="качинцы                                            ">
<option value="кашгарцы                                           ">
<option value="кванадинцы                                         ">
<option value="кванадлетцы                                        ">
<option value="кваннал                                            ">
<option value="кемгуи                                             ">
<option value="керей                                              ">
<option value="кереки                                             ">
<option value="кержаки                                            ">
<option value="кето                                               ">
<option value="кеты                                               ">
<option value="киргизы                                            ">
<option value="кирди                                              ">
<option value="китайцы                                            ">
<option value="кожла марий                                        ">
<option value="койбалы                                            ">
<option value="колымские                                          ">
<option value="колымчане                                          ">
<option value="коми (с родным языком коми)                        ">
<option value="коми (с родным языком коми-пермяцким)              ">
<option value="коми войтыр                                        ">
<option value="коми йоз                                           ">
<option value="коми морт (с родным языком коми)                   ">
<option value="коми морт (с родным языком коми-пермяцким)         ">
<option value="коми отир                                          ">
<option value="коми-ижемцы                                        ">
<option value="коми-зыряне                                        ">
<option value="коми-пермяки                                       ">
<option value="корейцы                                            ">
<option value="коре сарам                                         ">
<option value="коряки                                             ">
<option value="крестьяне затундренные                             ">
<option value="крещенцы                                           ">
<option value="крещеные                                           ">
<option value="крымские армяне                                    ">
<option value="крымские евреи                                     ">
<option value="крымские ногаи                                     ">
<option value="крымские татары                                    ">
<option value="крымчаки                                           ">
<option value="кряшены                                            ">
<option value="куаннал                                            ">
<option value="кубанды                                            ">
<option value="кубачинцы                                          ">
<option value="кубинцы                                            ">
<option value="кувейтцы                                           ">
<option value="кудайраг                                           ">
<option value="кударцы                                            ">
<option value="кумандинцы                                         ">
<option value="куманды                                            ">
<option value="кумук                                              ">
<option value="кумыки                                             ">
<option value="кундровцы                                          ">
<option value="курд                                               ">
<option value="курдакско-саргатские татары                        ">
<option value="курды                                              ">
<option value="курмандж                                           ">
<option value="курык марий                                        ">
<option value="кърым татарлар                                     ">
<option value="кызыл                                              ">
<option value="кызыльцы                                           ">
<option value="кыпчак (с родным языком алтайским)                 ">
<option value="кыпчак (с родным языком казахским)                 ">
<option value="кыргыз                                             ">
<option value="кюрегу                                             ">
<option value="кюринцы                                            ">
<option value="лазы                                               ">
<option value="лак                                                ">
<option value="лаки                                               ">
<option value="лаккучу                                            ">
<option value="лакцы                                              ">
<option value="ламут                                              ">
<option value="ламут-наматкан                                     ">
<option value="лао хуйхуй                                         ">
<option value="лаппи                                              ">
<option value="латвиетис                                          ">
<option value="латвиеши                                           ">
<option value="латгальцы                                          ">
<option value="латгалиетис                                        ">
<option value="латыши                                             ">
<option value="лезги                                              ">
<option value="лезгины                                            ">
<option value="лезгияр                                            ">
<option value="лемки                                              ">
<option value="ленские старожилы                                  ">
<option value="лесные марийцы                                     ">
<option value="летувис                                            ">
<option value="летувник                                           ">
<option value="летувяй                                            ">
<option value="ливанцы                                            ">
<option value="ливвикёй                                           ">
<option value="ливвики                                            ">
<option value="ливгиляйне                                         ">
<option value="ливийцы                                            ">
<option value="литвин (с родным языком белорусским)               ">
<option value="литвин (с родным языком литовским)                 ">
<option value="литвяк (с родным языком белорусским)               ">
<option value="литвяк (с родным языком литовским)                 ">
<option value="литовцы                                            ">
<option value="лопари                                             ">
<option value="лугово-восточные марийцы                           ">
<option value="луговые марийцы                                    ">
<option value="луораветлан                                        ">
<option value="лыгъоравэтлъан                                     ">
<option value="лыгъоравэтлят                                      ">
<option value="людики                                             ">
<option value="людиникат                                          ">
<option value="люли                                               ">
<option value="лююдикёй                                           ">
<option value="лююдилайне (с родным языком вепсским)              ">
<option value="лююдилайне (с родным языком карельским)            ">
<option value="маарулал                                           ">
<option value="мавританцы                                         ">
<option value="мавры                                              ">
<option value="маду                                               ">
<option value="мадьяр                                             ">
<option value="мазанг                                             ">
<option value="майминцы                                           ">
<option value="малкарцы                                           ">
<option value="малкъарлыла (малкъарлы)                            ">
<option value="малые дэрбэты                                      ">
<option value="мамхеги                                            ">
<option value="мангуны                                            ">
<option value="манегры                                            ">
<option value="манси                                              ">
<option value="мар                                                ">
<option value="маргали                                            ">
<option value="мари                                               ">
<option value="марий                                              ">
<option value="марийцы                                            ">
<option value="марийцы ветлужские                                 ">
<option value="марийцы восточные (уральские)                      ">
<option value="марийцы горные                                     ">
<option value="марийцы лесные                                     ">
<option value="марийцы лугово-восточные                           ">
<option value="марийцы луговые                                    ">
<option value="марийцы уральские (восточные)                      ">
<option value="марковцы                                           ">
<option value="марокканцы                                         ">
<option value="махмеги                                            ">
<option value="махмеговцы                                         ">
<option value="мегрелы                                            ">
<option value="мегьебор                                           ">
<option value="мезенцы                                            ">
<option value="меннонитен                                         ">
<option value="меннониты                                          ">
<option value="меньдси                                            ">
<option value="месхетинцы-турки                                   ">
<option value="мещеряки                                           ">
<option value="мижерь                                             ">
<option value="мингрелы                                           ">
<option value="мишари                                             ">
<option value="мишэр                                              ">
<option value="моансь                                             ">
<option value="могади                                             ">
<option value="мокша                                              ">
<option value="молдаване                                          ">
<option value="молдовень                                          ">
<option value="монголы                                            ">
<option value="мораване                                           ">
<option value="мордва                                             ">
<option value="мордва-мокша                                       ">
<option value="мордва-эрзя                                        ">
<option value="мордвины                                           ">
<option value="мордовцы                                           ">
<option value="мугат                                              ">
<option value="мультони                                           ">
<option value="мурчен                                             ">
<option value="мых абдыр                                          ">
<option value="мэнэ                                               ">
<option value="мюхадар                                            ">
<option value="на бэйенин                                         ">
<option value="навукагмит                                         ">
<option value="нагайбаки                                          ">
<option value="нагайбэклэр                                        ">
<option value="найман (с родным языком алтайским)                 ">
<option value="найман (с родным языком казахским)                 ">
<option value="нанай                                              ">
<option value="нанайцы                                            ">
<option value="нани (с родным языком нанайским)                   ">
<option value="нани (с родным языком ороч-ским)                   ">
<option value="нани (с родным языком ульч-ским)                   ">
<option value="нахада                                             ">
<option value="нганасаны                                          ">
<option value="негды                                              ">
<option value="негидальцы                                         ">
<option value="немцы                                              ">
<option value="немцы-меннониты                                    ">
<option value="ненач                                              ">
<option value="ненцы                                              ">
<option value="ненэй ненэц                                        ">
<option value="ненэйне                                            ">
<option value="ненэчэ                                             ">
<option value="нещанг                                             ">
<option value="нибах                                              ">
<option value="нивах                                              ">
<option value="нивух                                              ">
<option value="нивхгу                                             ">
<option value="нивхи                                              ">
<option value="нихондзин                                          ">
<option value="ногаи крымские                                     ">
<option value="ногай (с родным языком казахским)                  ">
<option value="ногай (с родным языком ногайским)                  ">
<option value="ногай-карагаш                                      ">
<option value="ногайцы                                            ">
<option value="нохчий                                             ">
<option value="нугай татар                                        ">
<option value="нукратские (карийские) татары                      ">
<option value="нымыланы                                           ">
<option value="нымылгын                                           ">
<option value="ньигвнгун                                          ">
<option value="ня                                                 ">
<option value="нясихагил                                          ">
<option value="обские старожилы                                   ">
<option value="овен                                               ">
<option value="овон                                               ">
<option value="одморт                                             ">
<option value="одмурт                                             ">
<option value="озбак                                              ">
<option value="озбек                                              ">
<option value="ойраты                                             ">
<option value="окморт                                             ">
<option value="олёты                                              ">
<option value="олык марий                                         ">
<option value="олюторцы                                           ">
<option value="оманцы                                             ">
<option value="омоки                                              ">
<option value="оре куманды                                        ">
<option value="ороки (ульта)                                      ">
<option value="ороч (с родным языком орочским)                    ">
<option value="ороч (с родным языком ульта)                       ">
<option value="ороч (с родным языком эвенским)                    ">
<option value="орочель                                            ">
<option value="орочёл                                             ">
<option value="орочён (с родным языком орочским)                  ">
<option value="орочён (с родным языком ульта)                     ">
<option value="орочён (с родным языком эвенкийским)               ">
<option value="орочён (с родным языком эвенским)                  ">
<option value="орочи                                              ">
<option value="орочисэл                                           ">
<option value="орум                                               ">
<option value="осетины                                            ">
<option value="осетины-дигорцы                                    ">
<option value="осетины-иронцы                                     ">
<option value="османы                                             ">
<option value="остяки (с родным языком кетским)                   ">
<option value="остяки (с родным языком мансийским)                ">
<option value="остяки (с родным языком селькупским)               ">
<option value="остяки (с родным языком хантыйским)                ">
<option value="палестинцы (с родным языком арабским)              ">
<option value="параба                                             ">
<option value="парс                                               ">
<option value="патаны                                             ">
<option value="пахтуны                                            ">
<option value="пашенные                                           ">
<option value="пермяки                                            ">
<option value="персы                                              ">
<option value="полуверцы                                          ">
<option value="поляки                                             ">
<option value="поляци                                             ">
<option value="поморы                                             ">
<option value="поморы канинские                                   ">
<option value="понтиос                                            ">
<option value="португальцы                                        ">
<option value="походчане                                          ">
<option value="пуштуны                                            ">
<option value="пэ-бай                                             ">
<option value="пян хасова                                         ">
<option value="ром                                                ">
<option value="рома                                               ">
<option value="ромеи                                              ">
<option value="ромеос                                             ">
<option value="ромеюс                                             ">
<option value="ромынь                                             ">
<option value="рум                                                ">
<option value="румей                                              ">
<option value="румыны                                             ">
<option value="русины                                             ">
<option value="русские                                            ">
<option value="русско-устьинцы                                    ">
<option value="рутул                                              ">
<option value="рутульцы                                           ">
<option value="рухни рушанцы                                      ">
<option value="рушони                                             ">
<option value="рыхен                                              ">
<option value="саами                                              ">
<option value="саамы                                              ">
<option value="савакот                                            ">
<option value="сагай                                              ">
<option value="сагайцы                                            ">
<option value="сартулы                                            ">
<option value="сасигнан                                           ">
<option value="саудовцы                                           ">
<option value="саха (с родным языком долганским)                  ">
<option value="саха (с родным языком якутским)                    ">
<option value="сваны                                              ">
<option value="селькупы                                           ">
<option value="семейские                                          ">
<option value="сербы                                              ">
<option value="сето                                               ">
<option value="сету                                               ">
<option value="сибир татарлар                                     ">
<option value="сибирские татары                                   ">
<option value="сиренигмит                                         ">
<option value="сирийцы                                            ">
<option value="словаки                                            ">
<option value="сойоны                                             ">
<option value="сойоты (с родным языком бурятским)                 ">
<option value="сойоты (с родным языком тувинским)                 ">
<option value="селькуп                                            ">
<option value="сомату                                             ">
<option value="среднеазиатские арабы                              ">
<option value="среднеазиатские евреи                              ">
<option value="среднеазиатские цыгане                             ">
<option value="старожилы ленские                                  ">
<option value="старожилы обские                                   ">
<option value="степские казахи                                    ">
<option value="суданцы                                            ">
<option value="суомалайсет                                        ">
<option value="суоми                                              ">
<option value="сурайя                                             ">
<option value="суссе кум                                          ">
<option value="сэрвы                                              ">
<option value="табасаран                                          ">
<option value="табасаранцы                                        ">
<option value="табасараны                                         ">
<option value="табын                                              ">
<option value="тавгийцы                                           ">
<option value="тавоктарош                                         ">
<option value="тадар                                              ">
<option value="тадар-кижи (с родным языком кумандинским)          ">
<option value="тадар-кижи (с родным языком телеутским)            ">
<option value="тадар-кижи (с родным языком хакасским)             ">
<option value="тадар-кижи (с родным языком шорским)               ">
<option value="таджики                                            ">
<option value="тазы                                               ">
<option value="талыши                                             ">
<option value="талышон                                            ">
<option value="тама                                               ">
<option value="таланта                                            ">
<option value="таранчи                                            ">
<option value="тарлик                                             ">
<option value="тарские татары                                     ">
<option value="тат (с родным языком крым-скотатарским)            ">
<option value="тат (с родным языком татским)                      ">
<option value="татар                                              ">
<option value="татары                                             ">
<option value="татары алабугатские                                ">
<option value="татары астраханские                                ">
<option value="татары заболотные                                  ">
<option value="татары казанские                                   ">
<option value="татары карийские (нукратские)                      ">
<option value="татары касимовские                                 ">
<option value="татары крымские                                    ">
<option value="татары курдакско-саргатские                        ">
<option value="татары нукратские (каринские)                      ">
<option value="татары сибирские                                   ">
<option value="татары тарские                                     ">
<option value="татары тевризские                                  ">
<option value="татары-тептяри                                     ">
<option value="татары тобольские                                  ">
<option value="татары тюменско-тюринские                          ">
<option value="татары чулымские                                   ">
<option value="татары юртовские                                   ">
<option value="татары ясколбинские                                ">
<option value="татские евреи                                      ">
<option value="таты-азербайджанцы                                 ">
<option value="таты-иудаисты                                      ">
<option value="таты-мусульмане                                    ">
<option value="таулу                                              ">
<option value="тевризские татары                                  ">
<option value="теленгиты                                          ">
<option value="телесы                                             ">
<option value="телеуты                                            ">
<option value="темиргоевцы                                        ">
<option value="тептяри (с родным языком башкирским)               ">
<option value="тептяри (с родным языком татарским)                ">
<option value="тептяри-башкиры                                    ">
<option value="тептяри-татары                                     ">
<option value="терюхане                                           ">
<option value="тиндалы                                            ">
<option value="тиндии                                             ">
<option value="тиндинцы                                           ">
<option value="тлибишинцы                                         ">
<option value="тлиссинцы                                          ">
<option value="тоболик                                            ">
<option value="тобольские                                         ">
<option value="татары                                             ">
<option value="тоджик                                             ">
<option value="тоджинцы                                           ">
<option value="томские карагасы                                   ">
<option value="тонгус                                             ">
<option value="торгоуты                                           ">
<option value="торгуты                                            ">
<option value="торкара                                            ">
<option value="тофа                                               ">
<option value="тофалары                                           ">
<option value="трухмены                                           ">
<option value="туалаг                                             ">
<option value="туальцы                                            ">
<option value="туба                                               ">
<option value="туба-кижи                                          ">
<option value="тубалары                                           ">
<option value="тубере куманды                                     ">
<option value="тува                                               ">
<option value="тувинцы                                            ">
<option value="тувинцы-тоджинцы                                   ">
<option value="туга                                               ">
<option value="тумал                                              ">
<option value="тунгусы (с родным языком эвенкийским)              ">
<option value="тунгусы (с родным языком эвенским)                 ">
<option value="тунисцы                                            ">
<option value="тураминцы                                          ">
<option value="туратинские казахи                                 ">
<option value="тургэхал                                           ">
<option value="турки                                              ">
<option value="турки-батумцы                                      ">
<option value="турки-месхетинцы                                   ">
<option value="турки-османы                                       ">
<option value="турки-сухумцы                                      ">
<option value="туркмены                                           ">
<option value="туха                                               ">
<option value="тыва                                               ">
<option value="тыва-кижи                                          ">
<option value="тюменско-тюринские татары                          ">
<option value="тюрк (с родным языком азербайджанским)             ">
<option value="тюрк (с родным языком турецким)                    ">
<option value="тюрк (с родным языком туркменским)                 ">
<option value="тюрк (с родным языком узбекским)                   ">
<option value="тюрки чулымские                                    ">
<option value="уак                                                ">
<option value="угбуган                                            ">
<option value="угбуганти                                          ">
<option value="уди                                                ">
<option value="удины                                              ">
<option value="удморт                                             ">
<option value="удмурты                                            ">
<option value="удэ (с родными языками китайским и русским)        ">
<option value="удэ (с родным языком удэгейским)                   ">
<option value="удэгейцы                                           ">
<option value="удэхе                                              ">
<option value="удэхейцы                                           ">
<option value="узбеки                                             ">
<option value="уйгуры                                             ">
<option value="уйльта                                             ">
<option value="укморт                                             ">
<option value="украинцы                                           ">
<option value="ульта                                              ">
<option value="ульча (с родным языком ульта)                      ">
<option value="ульча (с родным языком ульчским)                   ">
<option value="ульчи                                              ">
<option value="уназигмит                                          ">
<option value="унан'ах                                            ">
<option value="унанган                                            ">
<option value="уральские (восточные) марийцы                      ">
<option value="урбуган                                            ">
<option value="урмей                                              ">
<option value="урморт                                             ">
<option value="уртморт                                            ">
<option value="урум                                               ">
<option value="ути                                                ">
<option value="фараоны                                            ">
<option value="фарс                                               ">
<option value="финны                                              ">
<option value="финны-ингерманландцы                               ">
<option value="франк                                              ">
<option value="французы                                           ">
<option value="хаас                                               ">
<option value="хааш                                               ">
<option value="хай                                                ">
<option value="хайдаг                                             ">
<option value="хакасы                                             ">
<option value="халдеи                                             ">
<option value="халха                                              ">
<option value="халха-монголы халхасцы                             ">
<option value="хальмг                                             ">
<option value="хамниганы                                          ">
<option value="хамшены                                            ">
<option value="хамшецы                                            ">
<option value="хангайцы                                           ">
<option value="хангук сарам                                       ">
<option value="хандеяры                                           ">
<option value="ханти                                              ">
<option value="ханты                                              ">
<option value="хантых                                             ">
<option value="хантэ                                              ">
<option value="хань                                               ">
<option value="ханьжэнь                                           ">
<option value="хванал                                             ">
<option value="хваршал                                            ">
<option value="хваршинцы                                          ">
<option value="хваршины                                           ">
<option value="хемшилы                                            ">
<option value="хемшины                                            ">
<option value="хинатбы                                            ">
<option value="хинди                                              ">
<option value="хиндиязычные индийцы                               ">
<option value="хиндустанцы                                        ">
<option value="хновцы                                             ">
<option value="хойбал                                             ">
<option value="хойты                                              ">
<option value="хонгодоры                                          ">
<option value="хорваты                                            ">
<option value="хоринцы                                            ">
<option value="хошеуты                                            ">
<option value="хошуты                                             ">
<option value="хуани                                              ">
<option value="хугни                                              ">
<option value="хуй                                                ">
<option value="хуйцзу                                             ">
<option value="хунзалис                                           ">
<option value="хунзалы                                            ">
<option value="хунуни                                             ">
<option value="хуфидж                                             ">
<option value="хуфцы                                              ">
<option value="хызыл                                              ">
<option value="цахуры                                             ">
<option value="цезы                                               ">
<option value="цонголы                                            ">
<option value="цунтинцы                                           ">
<option value="цыгане                                             ">
<option value="цыгане среднеазиатские                             ">
<option value="чаан                                               ">
<option value="чаваш                                              ">
<option value="чавчу                                              ">
<option value="чавчувены                                          ">
<option value="чавчыв                              ">
<option value="чалканцы                            ">
<option value="чамалалы                            ">
<option value="чамалинцы                           ">
<option value="чаны                                ">
<option value="чаты                                ">
<option value="чаучу                               ">
<option value="челканцы                            ">
<option value="черемисы                            ">
<option value="черкесогаи                          ">
<option value="черкесы                             ">
<option value="черногорцы                          ">
<option value="чехи                                ">
<option value="чеченцы                             ">
<option value="чеченцы-аккинцы                     ">
<option value="чжунго жэнь                         ">
<option value="чосон сарам                         ">
<option value="чуванцы                             ">
<option value="чуваши                              ">
<option value="чудь                                ">
<option value="чукчи                               ">
<option value="чулымские татары                    ">
<option value="чулымские тюрки                     ">
<option value="чулымцы                             ">
<option value="чумыль-куп                          ">
<option value="чуфут                               ">
<option value="чухари                              ">
<option value="чухонцы                             ">
<option value="шалганы                             ">
<option value="шапсуги                             ">
<option value="шапсыг                              ">
<option value="шведы                               ">
<option value="шекты                               ">
<option value="шелькуп                             ">
<option value="шешкум                              ">
<option value="шкарауа                             ">
<option value="шкипетары                           ">
<option value="шор-кижи                            ">
<option value="шорцы                               ">
<option value="шугнанцы                            ">
<option value="шугни                               ">
<option value="шугнони                             ">
<option value="эбраэли                             ">
<option value="эбэн                                ">
<option value="эвен                                ">
<option value="эвенк                               ">
<option value="эвенки                              ">
<option value="эвены                               ">
<option value="эвон                                ">
<option value="эвримейсет                          ">
<option value="эвын                                ">
<option value="эвэн                                ">
<option value="эвэс                                ">
<option value="эзды                                ">
<option value="элеты                               ">
<option value="элканбэйэ                           ">
<option value="эллинос                             ">
<option value="элутыл'у                            ">
<option value="элькан дэйнин                       ">
<option value="энцы                                ">
<option value="эньчо                               ">
<option value="энэтэ                               ">
<option value="эрзя                                ">
<option value="эскимосы                            ">
<option value="эстонцы                             ">
<option value="эстонцы-сету                        ">
<option value="эсты                                ">
<option value="этели                               ">
<option value="эуштинцы                            ">
<option value="ээсти                               ">
<option value="ээстилане                           ">
<option value="юген                                ">
<option value="юги                                 ">
<option value="юкагиры                             ">
<option value="юпагыт                              ">
<option value="юпит                                ">
<option value="юртовские татары                    ">
<option value="якуты (саха)                        ">
<option value="якутяне                             ">
<option value="ямские                              ">
<option value="японцы                              ">
<option value="ясколбинские татары                 ">
<option value="яушта                               ">
<option value="яхолшу                              ">
<option value="яхуди                               ">
<option value="яхудои махали                       ">
								</datalist>
							<p class="block-input__text">Национальность</p>
						</div>
						<div class="block-input select">
							<input name="birthday" type="date" id="" class="block-input__select">
							<p class="block-input__text">Дата рождения</p>
						</div>
						<div class="block-input select">
							<select name="marital_status" id="" class="block-input__select">
								<option value="Замужем">Замужем</option>
								<option value="Не замежем">Не замежем</option>
								<option value="Женат">Женат</option>
								<option value="Не женат">Не женат</option>
							</select>
							<p class="block-input__text">Семейное положение</p>
						</div>
						<div class="block-input select">
							<select name="metro" id="" class="block-input__select">
								<option value="Авиамоторная             ">Авиамоторная             </option>
<option value="Академическая            ">Академическая            </option>
<option value="Александровский сад      ">Александровский сад      </option>
<option value="Алексеевская             ">Алексеевская             </option>
<option value="Алтуфьево                ">Алтуфьево                </option>
<option value="Аннино                   ">Аннино                   </option>
<option value="Арбатская                ">Арбатская                </option>
<option value="Автозаводская            ">Автозаводская            </option>
<option value="Алма-Атинская            ">Алма-Атинская            </option>
<option value="Аэропорт                 ">Аэропорт                 </option>
<option value="Бабушкинская             ">Бабушкинская             </option>
<option value="Багратионовская          ">Багратионовская          </option>
<option value="Баррикадная              ">Баррикадная              </option>
<option value="Бауманская               ">Бауманская               </option>
<option value="Беговая                  ">Беговая                  </option>
<option value="Белорусская              ">Белорусская              </option>
<option value="Беляево                  ">Беляево                  </option>
<option value="Бибирево                 ">Бибирево                 </option>
<option value="Библиотека Ленина        ">Библиотека Ленина        </option>
<option value="Битцевский парк          ">Битцевский парк          </option>
<option value="Борисово                 ">Борисово                 </option>
<option value="Боровицкая               ">Боровицкая               </option>
<option value="Ботанический сад         ">Ботанический сад         </option>
<option value="Братиславская            ">Братиславская            </option>
<option value="Бульвар Дмитрия Донского ">Бульвар Дмитрия Донского </option>
<option value="Бульвар Рокоссовского    ">Бульвар Рокоссовского    </option>
<option value="Бульвар адмирала Ушакова ">Бульвар адмирала Ушакова </option>
<option value="Бунинская Аллея          ">Бунинская Аллея          </option>
<option value="ВДНХ                     ">ВДНХ                     </option>
<option value="Варшавская               ">Варшавская               </option>
<option value="Владыкино                ">Владыкино                </option>
<option value="Волгоградский проспект   ">Волгоградский проспект   </option>
<option value="Волжская                 ">Волжская                 </option>
<option value="Волоколамская            ">Волоколамская            </option>
<option value="Воробьевы горы           ">Воробьевы горы           </option>
<option value="Водный стадион           ">Водный стадион           </option>
<option value="Войковская               ">Войковская               </option>
<option value="Выставочная              ">Выставочная              </option>
<option value="Выхино                   ">Выхино                   </option>
<option value="Деловой центр            ">Деловой центр            </option>
<option value="Дмитровская              ">Дмитровская              </option>
<option value="Добрынинская             ">Добрынинская             </option>
<option value="Достоевская              ">Достоевская              </option>
<option value="Дубровка                 ">Дубровка                 </option>
<option value="Динамо                   ">Динамо                   </option>
<option value="Домодедовская            ">Домодедовская            </option>
<option value="Жулебино                 ">Жулебино                 </option>
<option value="Зябликово                ">Зябликово                </option>
<option value="Измайловская             ">Измайловская             </option>
<option value="Калужская                ">Калужская                </option>
<option value="Кантемировская           ">Кантемировская           </option>
<option value="Каховская                ">Каховская                </option>
<option value="Каширская                ">Каширская                </option>
<option value="Киевская                 ">Киевская                 </option>
<option value="Киевская                 ">Киевская                 </option>
<option value="Китай-город              ">Китай-город              </option>
<option value="Кожуховская              ">Кожуховская              </option>
<option value="Комсомольская            ">Комсомольская            </option>
<option value="Коньково                 ">Коньково                 </option>
<option value="Котельники               ">Котельники               </option>
<option value="Коломенская              ">Коломенская              </option>
<option value="Краснопресненская        ">Краснопресненская        </option>
<option value="Красносельская           ">Красносельская           </option>
<option value="Красные ворота           ">Красные ворота           </option>
<option value="Крестьянская застава     ">Крестьянская застава     </option>
<option value="Кропоткинская            ">Кропоткинская            </option>
<option value="Красногвардейская        ">Красногвардейская        </option>
<option value="Крылатское               ">Крылатское               </option>
<option value="Кузнецкий мост           ">Кузнецкий мост           </option>
<option value="Кузьминки                ">Кузьминки                </option>
<option value="Кунцевская               ">Кунцевская               </option>
<option value="Курская                  ">Курская                  </option>
<option value="Кутузовская              ">Кутузовская              </option>
<option value="Ленинский проспект       ">Ленинский проспект       </option>
<option value="Лермонтовский проспект   ">Лермонтовский проспект   </option>
<option value="Лесопарковая             ">Лесопарковая             </option>
<option value="Лубянка                  ">Лубянка                  </option>
<option value="Люблино                  ">Люблино                  </option>
<option value="Марксистская             ">Марксистская             </option>
<option value="Марьина роща             ">Марьина роща             </option>
<option value="Марьино                  ">Марьино                  </option>
<option value="Медведково               ">Медведково               </option>
<option value="Международная            ">Международная            </option>
<option value="Менделеевская            ">Менделеевская            </option>
<option value="Митино                   ">Митино                   </option>
<option value="Молодежная               ">Молодежная               </option>
<option value="Мякинино                 ">Мякинино                 </option>
<option value="Нагатинская              ">Нагатинская              </option>
<option value="Нагорная                 ">Нагорная                 </option>
<option value="Нахимовский Проспект     ">Нахимовский Проспект     </option>
<option value="Новогиреево              ">Новогиреево              </option>
<option value="Новокосино               ">Новокосино               </option>
<option value="Новокузнецкая            ">Новокузнецкая            </option>
<option value="Новослободская           ">Новослободская           </option>
<option value="Новоясеневская           ">Новоясеневская           </option>
<option value="Новые Черёмушки          ">Новые Черёмушки          </option>
<option value="Октябрьская              ">Октябрьская              </option>
<option value="Октябрьское Поле         ">Октябрьское Поле         </option>
<option value="Орехово                  ">Орехово                  </option>
<option value="Отрадное                 ">Отрадное                 </option>
<option value="Охотный ряд              ">Охотный ряд              </option>
<option value="Павелецкая               ">Павелецкая               </option>
<option value="Парк Культуры            ">Парк Культуры            </option>
<option value="Парк Победы              ">Парк Победы              </option>
<option value="Партизанская             ">Партизанская             </option>
<option value="Первомайская             ">Первомайская             </option>
<option value="Перово                   ">Перово                   </option>
<option value="Петровско-Разумовская    ">Петровско-Разумовская    </option>
<option value="Печатники                ">Печатники                </option>
<option value="Пионерская               ">Пионерская               </option>
<option value="Планерная                ">Планерная                </option>
<option value="Площадь Ильича           ">Площадь Ильича           </option>
<option value="Площадь Революции        ">Площадь Революции        </option>
<option value="Полежаевская             ">Полежаевская             </option>
<option value="Полянка                  ">Полянка                  </option>
<option value="Пражская                 ">Пражская                 </option>
<option value="Преображенская площадь   ">Преображенская площадь   </option>
<option value="Пролетарская             ">Пролетарская             </option>
<option value="Проспект Вернадского     ">Проспект Вернадского     </option>
<option value="Проспект Мира            ">Проспект Мира            </option>
<option value="Профсоюзная              ">Профсоюзная              </option>
<option value="Пушкинская               ">Пушкинская               </option>
<option value="Пятницкое шоссе          ">Пятницкое шоссе          </option>
<option value="Речной вокзал            ">Речной вокзал            </option>
<option value="Рижская                  ">Рижская                  </option>
<option value="Римская                  ">Римская                  </option>
<option value="Румянцево                ">Румянцево                </option>
<option value="Рязанский проспект       ">Рязанский проспект       </option>
<option value="Савеловская              ">Савеловская              </option>
<option value="Саларьево                ">Саларьево                </option>
<option value="Свиблово                 ">Свиблово                 </option>
<option value="Севастопольская          ">Севастопольская          </option>
<option value="Семеновская              ">Семеновская              </option>
<option value="Серпуховская             ">Серпуховская             </option>
<option value="Славянский бульвар       ">Славянский бульвар       </option>
<option value="Смоленская               ">Смоленская               </option>
<option value="Сокол                    ">Сокол                    </option>
<option value="Сокольники               ">Сокольники               </option>
<option value="Спартак                  ">Спартак                  </option>
<option value="Спортивная               ">Спортивная               </option>
<option value="Сретенский бульвар       ">Сретенский бульвар       </option>
<option value="Строгино                 ">Строгино                 </option>
<option value="Студенческая             ">Студенческая             </option>
<option value="Сухаревская              ">Сухаревская              </option>
<option value="Сходненская              ">Сходненская              </option>
<option value="Таганская                ">Таганская                </option>
<option value="Текстильщики             ">Текстильщики             </option>
<option value="Теплый стан              ">Теплый стан              </option>
<option value="Тверская                 ">Тверская                 </option>
<option value="Театральная              ">Театральная              </option>
<option value="Тимирязевская            ">Тимирязевская            </option>
<option value="Третьяковская            ">Третьяковская            </option>
<option value="Тропарёво                ">Тропарёво                </option>
<option value="Трубная                  ">Трубная                  </option>
<option value="Тульская                 ">Тульская                 </option>
<option value="Тургеневская             ">Тургеневская             </option>
<option value="Тушинская                ">Тушинская                </option>
<option value="Улица 1905 года          ">Улица 1905 года          </option>
<option value="Улица Горчакова          ">Улица Горчакова          </option>
<option value="Улица Скобелевская       ">Улица Скобелевская       </option>
<option value="Улица Старокачаловская   ">Улица Старокачаловская   </option>
<option value="Улица академика Янгеля   ">Улица академика Янгеля   </option>
<option value="Университет              ">Университет              </option>
<option value="Филевский парк           ">Филевский парк           </option>
<option value="Фили                     ">Фили                     </option>
<option value="Царицыно                 ">Царицыно                 </option>
<option value="Фрунзенская              ">Фрунзенская              </option>
<option value="Цветной бульвар          ">Цветной бульвар          </option>
<option value="Черкизовская             ">Черкизовская             </option>
<option value="Чертановская             ">Чертановская             </option>
<option value="Чеховская                ">Чеховская                </option>
<option value="Чистые пруды             ">Чистые пруды             </option>
<option value="Чкаловская               ">Чкаловская               </option>
<option value="Шаболовская              ">Шаболовская              </option>
<option value="Шипиловская              ">Шипиловская              </option>
<option value="Шоссе Энтузиастов        ">Шоссе Энтузиастов        </option>
<option value="Щелковская               ">Щелковская               </option>
<option value="Щукинская                ">Щукинская                </option>
<option value="Электрозаводская         ">Электрозаводская         </option>
<option value="Юго-Западная             ">Юго-Западная             </option>
<option value="Южная                    ">Южная                    </option>
<option value="Ясенево                  ">Ясенево                  </option>
							</select>
							<p class="block-input__text">Метро проживания</p>
						</div>

						<div class="info-block__input-block">
							<p class="input-block__text">Количество собственных детей</p>
							<input name="child_count" type="text" placeholder="Введите количество">
						</div>

						<div class="cont-form__attention-block">
							<div class="attention-block__img"><img src="/user_tpl/img/form-icon/attention.svg" alt=""></div>
							<div class="attention-block__block-text">
								<p class="attention-block__title">Внимание!</p>
								<p class="attention-block__text">Перед продолжением проверьте правильность введённых данных.</p>
							</div>
						</div>

						<button class="cont-form__btn" type="submit">Продолжить<img src="/user_tpl/img/form-icon/f-btn.svg" alt=""></button>
					</div>
				</div>

				<div class="cont-form__item">
					<div class="cont-form__number"><p>2</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Загрузка фотографии</p>
					</div>
				</div>

				<div class="cont-form__item">
					<div class="cont-form__number"><p>3</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Уровень образования</p>
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