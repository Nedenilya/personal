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
			<a href="/pages/faq" class="header-cont__servlink">Часто задаваемые вопросы</a>
		</div>

		<div class="block-ic">
			<a href="#" class="control-login"><img src="/user_tpl/	form-icon/control-login.svg" alt=""></a>
			<a href="#" class="sms"><img src="/user_tpl/img/form-icon/sms.svg" alt=""><span></span></a>
		</div>

		<div class="header-cont__language">
			<img src="/user_tpl/img/one-section/en.png" alt="en" data-google-lang="en" class="language__img">
			<img src="/user_tpl/img/one-section/ru.png" alt="ru" data-google-lang="ru" class="language__img">
			<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
		</div>

		<div class="header-cont__entrance-block reg employer">
			<a href="/pages/login" class="header-cont__entrancelink"><img src="/user_tpl/img/login-icon.svg" alt="">Профиль</a>
			<!-- <a href="/pages/premium" class="header-cont__entrancelink prem">Купить премиум</a> -->
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
						<a href="/pages/faq" class="header-cont__servlink">Часто задаваемые вопросы</a>
					</div>

					<a href="#" class="control-login"><img src="/user_tpl/img/form-icon/control-login.svg" alt=""></a>
					<a href="#" class="sms"><img src="/user_tpl/img/form-icon/sms.svg" alt=""><span></span></a>

					<div class="header-cont__entrance-block reg employer">
						<a href="/pages/login" class="header-cont__entrancelink"><img src="/user_tpl/img/login-icon.svg" alt="">Профиль</a>
						<!-- <a href="/pages/premium" class="header-cont__entrancelink prem">Купить премиум</a> -->
					</div>

					<!-- <a href="javascript:;" class="vhod"><img src="/user_tpl/img/vhod.svg" alt=""></a> -->
					<a href="javascript:;" class="burger-two employer" id="burger"><img src="/user_tpl/img/burger-2.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>

	<div class="reg-two">
		
		<form action="/register/anketas/4/teacher" method="post" class="reg-form">

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

				<div class="cont-form__item">
					<div class="cont-form__number active"><p>4</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title active">Объявление</p>

						<div class="cont-form__output-block">
							<p class="output-block__title">Выходной день</p>

							<div class="block-input select block_to_add">
								<select name="day[]" id="" class="block-input__select height">
									<option value="Понедельник">Понедельник</option>
									<option value="Вторник">Вторник</option>
									<option value="Среда">Среда</option>
									<option value="Четверг">Четверг</option>
									<option value="Пятница">Пятница</option>
									<option value="Суббота">Суббота</option>
									<option value="Воскресенье">Воскресенье</option>
								</select>
							</div>

							<a href="javascript:;" class="output-block__link"><img src="/user_tpl/img/form-icon/plus.svg" alt="">Добавить выходной день</a>
						</div>

						<div class="input-radio two mb">
							<p class="input-radio__title">Местонахождение работодателя</p>

							<label class="label-radio center">
								<input name="r1" value="Москва" type="radio" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Москва</span>
								</span>
							</label>

							<label class="label-radio center">
								<input name="r1" value="Московская обл." type="radio" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Московская обл.</span>
								</span>
							</label>

							<label class="label-radio center">
								<input name="r1" value="Рассматриваю оба варианта" type="radio" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">Рассматриваю оба варианта</span>
								</span>
							</label>
						</div>

						<div class="input-radio two mb">
							<p class="input-radio__title">Вы проживаете</p>

							<label class="label-radio center">
								<input name="r2" value="В квартире" type="radio" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">В квартире</span>
								</span>
							</label>

							<label class="label-radio center">
								<input name="r2" value="В доме" type="radio" class="label-radio__input">
								<span class="label-radio__fake"></span>

								<span class="label-radio__text-block">
									<span class="label-radio__title">В доме</span>
								</span>
							</label>
						</div>


						

						<p class="output-block__title">Текст объявления</p>
						<div class="info-block__input-block width">
							<p class="input-block__text two">Заголовок объявления (до 60 симв)</p>
							<input name="article" type="text" placeholder="Преподаватель">
						</div>

						<div class="info-block__input-block textarea">
							<p class="input-block__text">Описание</p>
							<textarea name="description" placeholder="Мы ищем преподавателя."></textarea>
						</div>

						<div class="block-checkbox">

							<div class="block-check">
								<p class="block-check__title">Формат обучения:</p>
								<label class="wrapper-login01">
									<input name="c1" value="Выезд к ученику" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Выезд к ученику</span>
								</label>
								<label class="wrapper-login01">
									<input name="c2" value="У репетитора" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">У репетитора</span>
								</label>
								<label class="wrapper-login01">
									<input name="c3" value="Дистанцинно (skype)" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Дистанцинно (skype)</span>
								</label>
								<label class="wrapper-login01">
									<input name="c4" value="Школа" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Школа</span>
								</label>
								<label class="wrapper-login01">
									<input name="c5" value="Детский сад" class="checkbox-login01" type="checkbox">
									<span class="style-login01"></span>
									<span class="text-login01">Детский сад</span>
								</label>
							</div>
						</div>


						<div class="cont-form__output-block">
							<p class="output-block__title">Национальность</p>

							<div class="block-input select">
								<input type="text" class="block-input__select height" name="nationality" list="citynames">
								<datalist id="citynames">
									<option value="Филиппинец">
								  	<option value="Русский">
								  	<option value="Беларус">
								  	<option value="Украинец">
								  	<option value="Поляк">
								</datalist>
							</div>
						</div>

						<div class="cont-form__output-block">
							<p class="output-block__title">Ближайшее метро</p>

							<div class="block-input select">
								<select name="metro" id="" class="block-input__select height">
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
							</div>
						</div>

						<p class="output-block__title">Расстояние до метро</p>
						<div class="block-input select">
							<select name="get_type" id="" class="block-input__select">
								<option value="На общественном транспорте">На общественном транспорте</option>
								<option value="Пешком">Пешком</option>
							</select>
							<p class="block-input__text">На чём добираться</p>
						</div>

						<div class="block-input select">
							<select name="time_to_get" id="" class="block-input__select">
								<option value="От 5 до 10 минут">От 5 до 10 минут</option>
								<option value="От 10 до 20 минут">От 10 до 20 минут</option>
								<option value="От 20 до 30 минут">От 20 до 30 минут</option>
								<option value="От 30 минут">От 30 минут</option>
							</select>
							<p class="block-input__text">Сколько добираться</p>
						</div>

						<p class="output-block__title">Номер телефона</p>
						<div class="info-block__input-block">
							<p class="input-block__text">Номер телефона</p>
							<input name="phone" type="text" placeholder="+7 987 654-32-10">
						</div>

						<div class="input-radio two mb">
							<label class="wrapper-login01">
								<input name="is_num_visible" value="true" class="checkbox-login01" type="checkbox">
								<span class="style-login01"></span>
								<span class="label-radio__title" style="line-height: 34px !important;">Сделать номер видимым для всех</span>
							</label>
						</div>

						<div class="cont-form__attention-block">
							<div class="attention-block__img"><img src="/user_tpl/img/form-icon/attention.svg" alt=""></div>
							<div class="attention-block__block-text">
								<p class="attention-block__title">Внимание!</p>
								<p class="attention-block__text">Сделайте ваш номер телефона видимым для всех кандидатов. Обратите внимание, что кандидаты, с которыми вы уже связались, смогут увидеть ваш номер, независимо от того, выберете ли вы эту опцию или нет.</p>
							</div>
						</div>
						
						<button class="cont-form__btn" type="submit">Продолжить<img src="/user_tpl//user_tpl/img/form-icon/f-btn.svg" alt=""></button>
					</div>
				</div>

				<div class="cont-form__item">
					<div class="cont-form__number"><p>4</p></div>
					<div class="cont-form__info-block">
						<p class="info-block__title">Мой идеальный кандидат</p>
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
				<a href="/pages/login" class="popap-two__link">Войти</a>
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
				<a href="/pages/login" class="popap-two__link">Войти</a>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="/user_tpl/js/textarea/autosize.js"></script>
		<script src="/user_tpl/js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
		<script>
			autosize($('textarea'));
		</script>

		<script>
			const $block = $('.block_to_add').clone();

			$('.output-block__link').click(function() {
				$(this).before($block.clone());
			});
		</script>

	</body>
	</html>