/*! jquery.cookie v1.4.1 | MIT */
// !function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?a(require("jquery")):a(jQuery)}(function(a){function b(a){return h.raw?a:encodeURIComponent(a)}function c(a){return h.raw?a:decodeURIComponent(a)}function d(a){return b(h.json?JSON.stringify(a):String(a))}function e(a){0===a.indexOf('"')&&(a=a.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return a=decodeURIComponent(a.replace(g," ")),h.json?JSON.parse(a):a}catch(b){}}function f(b,c){var d=h.raw?b:e(b);return a.isFunction(c)?c(d):d}var g=/\+/g,h=a.cookie=function(e,g,i){if(void 0!==g&&!a.isFunction(g)){if(i=a.extend({},h.defaults,i),"number"==typeof i.expires){var j=i.expires,k=i.expires=new Date;k.setTime(+k+864e5*j)}return document.cookie=[b(e),"=",d(g),i.expires?"; expires="+i.expires.toUTCString():"",i.path?"; path="+i.path:"",i.domain?"; domain="+i.domain:"",i.secure?"; secure":""].join("")}for(var l=e?void 0:{},m=document.cookie?document.cookie.split("; "):[],n=0,o=m.length;o>n;n++){var p=m[n].split("="),q=c(p.shift()),r=p.join("=");if(e&&e===q){l=f(r,g);break}e||void 0===(r=f(r))||(l[q]=r)}return l};h.defaults={},a.removeCookie=function(b,c){return void 0===a.cookie(b)?!1:(a.cookie(b,"",a.extend({},c,{expires:-1})),!a.cookie(b))}});

// control-panel

var contr = document.getElementById('contr');
if (contr) {
	var pos_cont = document.getElementById('pos_cont');

	contr.onclick = function() {
		pos_cont.style.display = 'flex';
	}
}

jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $("#pos_cont"); // тут указываем ID элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0) { // и не по его дочерним элементам
			div.hide(); // скрываем его
		}
	});
});

// control-panel end

$("#btn-one").click(function(){
	$("#links").toggleClass("expand");
	$("#arrow-quest1").toggleClass("rotate");
	$("#quest-item00000001").toggleClass("b-color");
});

$("#btn-two").click(function(){
	$("#links-two").toggleClass("expand");
	$("#arrow-quest2").toggleClass("rotate");
	$("#quest-item2").toggleClass("b-color");
});

$("#btn-three").click(function(){
	$("#links-three").toggleClass("expand");
	$("#arrow-quest3").toggleClass("rotate");
	$("#quest-item3").toggleClass("b-color");
});

$("#btn-four").click(function(){
	$("#links-four").toggleClass("expand");
	$("#arrow-quest4").toggleClass("rotate");
	$("#quest-item4").toggleClass("b-color");
});

$("#btn-five").click(function(){
	$("#links-five").toggleClass("expand");
	$("#arrow-quest5").toggleClass("rotate");
	$("#quest-item5").toggleClass("b-color");
});

$("#btn-six").click(function(){
	$("#links-six").toggleClass("expand");
	$("#arrow-quest6").toggleClass("rotate");
	$("#quest-item6").toggleClass("b-color");
});

$("#btn-seven").click(function(){
	$("#links-seven").toggleClass("expand");
	$("#arrow-quest7").toggleClass("rotate");
	$("#quest-item7").toggleClass("b-color");
});

$("#btn-eight").click(function(){
	$("#links-eight").toggleClass("expand");
	$("#arrow-quest8").toggleClass("rotate");
	$("#quest-item8").toggleClass("b-color");
});



$("#prem-one").click(function(){
	$("#premStrTwo").toggleClass("block");
	$("#prem-one").toggleClass("hover");
});

$("#prem-two").click(function(){
	$("#premStrThree").toggleClass("block");
	$("#prem-two").toggleClass("hover");
});

$("#prem-three").click(function(){
	$("#premStrFour").toggleClass("block");
	$("#prem-three").toggleClass("hover");
});


$("#loginTwo").click(function(){
	$("#logMob").toggleClass("activeTwo");
});

var burger = document.getElementById('burger');
if (burger) {
	var mobMenu = document.getElementById('mobMenu');
	var exitMob = document.getElementById('exitMob');
	var block = document.getElementById('block');

	burger.onclick = function() {
		mobMenu.style.display = 'flex';
		block.style.display = 'block';
	}

	exitMob.onclick = function() {
		mobMenu.style.display = 'none';
		block.style.display = 'none';
	}
}

jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $("#mobMenu"); // тут указываем ID элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0) { // и не по его дочерним элементам
			div.hide(); // скрываем его
		}
	});
});

jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $("#block"); // тут указываем ID элемента
		if (div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0) { // и не по его дочерним элементам
			div.hide(); // скрываем его
		}
	});
});



//  popap one

var popOne = document.getElementById('popOne');
if (popOne) {
	var popapOne = document.getElementById('popapOne');
	var exit = document.getElementById('exit');

	popOne.onclick = function() {
		popapOne.style.display = 'flex';
	}

	exit.onclick = function() {
		popapOne.style.display = 'none';
	}
}

var popOne1 = document.getElementById('popOne1');
if (popOne1) {
	var popapOne = document.getElementById('popapOne');
	var exit = document.getElementById('exit');

	popOne1.onclick = function() {
		popapOne.style.display = 'flex';
	}

	exit.onclick = function() {
		popapOne.style.display = 'none';
	}
}

var f1 = document.getElementById('f1');
if (f1) {
	var popapOne = document.getElementById('popapOne');
	var exit = document.getElementById('exit');

	f1.onclick = function() {
		popapOne.style.display = 'flex';
	}

	exit.onclick = function() {
		popapOne.style.display = 'none';
	}
}

jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $("#popapOne"); // тут указываем ID элемента
		if (div.is(e.target)) { // и не по его дочерним элементам
			div.hide(); // скрываем его
	}
});
});

// popap one end


//  popap two

var popTwo = document.getElementById('popTwo');
if (popTwo) {
	var popapThree = document.getElementById('popapThree');
	var exitThree = document.getElementById('exitThree');

	popTwo.onclick = function() {
		popapOne.style.display = 'none';
		popapThree.style.display = 'flex';
	}

	exitThree.onclick = function() {
		popapThree.style.display = 'none';
	}
}

var n1 = document.getElementById('n1');
if (n1) {
	var popapTwo = document.getElementById('popapTwo');
	var exitTwo = document.getElementById('exitTwo');

	n1.onclick = function() {
		popapOne.style.display = 'none';
		popapTwo.style.display = 'flex';
	}

	exitTwo.onclick = function() {
		popapTwo.style.display = 'none';
	}
}

var n3 = document.getElementById('n3');
if (n3) {
	var popapTwo = document.getElementById('popapTwo');
	var exitTwo = document.getElementById('exitTwo');

	n3.onclick = function() {
		popapOne.style.display = 'none';
		popapTwo.style.display = 'flex';
	}

	exitTwo.onclick = function() {
		popapTwo.style.display = 'none';
	}
}

jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $("#popapTwo"); // тут указываем ID элемента
		if (div.is(e.target)) { // и не по его дочерним элементам
			div.hide(); // скрываем его
	}
});
});

// popap two end


//  popap three

var popThree = document.getElementById('popThree');
if (popThree) {
	var popapTwo = document.getElementById('popapTwo');
	var exitTwo = document.getElementById('exitTwo');

	popThree.onclick = function() {
		popapOne.style.display = 'none';
		popapTwo.style.display = 'flex';
	}

	exitTwo.onclick = function() {
		popapTwo.style.display = 'none';
	}
}


var n2 = document.getElementById('n2');
if (n2) {
	var popapThree = document.getElementById('popapThree');
	var exitThree = document.getElementById('exitThree');

	n2.onclick = function() {
		popapOne.style.display = 'none';
		popapThree.style.display = 'flex';
	}

	exitThree.onclick = function() {
		popapThree.style.display = 'none';
	}
}

var n4 = document.getElementById('n4');
if (n4) {
	var popapThree = document.getElementById('popapThree');
	var exitThree = document.getElementById('exitThree');

	n4.onclick = function() {
		popapOne.style.display = 'none';
		popapThree.style.display = 'flex';
	}

	exitThree.onclick = function() {
		popapThree.style.display = 'none';
	}
}


jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $("#popapThree"); // тут указываем ID элемента
		if (div.is(e.target)) { // и не по его дочерним элементам
			div.hide(); // скрываем его
	}
});
});


var commentLink = document.getElementById('commentLink');
if (commentLink) {
	var FormComm = document.getElementById('FormComm');
	var comExit = document.getElementById('comExit');

	commentLink.onclick = function() {
		FormComm.style.display = 'block';
	}

	comExit.onclick = function() {
		FormComm.style.display = 'none';
	}
}

jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $("#FormComm"); // тут указываем ID элемента
		if (!div.is(e.target)) { // и не по его дочерним элементам
			div.hide(); // скрываем его
	}
});
});


var Linknig = document.getElementById('Linknig');
if (Linknig) {
	var nigative = document.getElementById('nigative');
	var comExit = document.getElementById('comExit');

	Linknig.onclick = function() {
		nigative.style.display = 'block';
	}

	comExit.onclick = function() {
		nigative.style.display = 'none';
	}
}

jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $("#nigative"); // тут указываем ID элемента
		if (!div.is(e.target)) { // и не по его дочерним элементам
			div.hide(); // скрываем его
	}
});
});


var link11 = document.getElementById('link11');
if (link11) {
	var block12 = document.getElementById('block12');
	var block13 = document.getElementById('block13');
	var block14 = document.getElementById('block14');
	var panel = document.getElementById('panel');

	link11.onclick = function() {
		panel.style.display = 'block';
		block12.style.display = 'none';
		block13.style.display = 'none';
		block14.style.display = 'none';
	}
}

var link12 = document.getElementById('link12');
if (link12) {
	var block12 = document.getElementById('block12');
	var block13 = document.getElementById('block13');
	var block14 = document.getElementById('block14');
	var panel = document.getElementById('panel');

	link12.onclick = function() {
		panel.style.display = 'none';
		block12.style.display = 'flex';
		block13.style.display = 'none';
		block14.style.display = 'none';
	}
}

var link13 = document.getElementById('link13');
if (link13) {
	var block12 = document.getElementById('block12');
	var block13 = document.getElementById('block13');
	var block14 = document.getElementById('block14');
	var panel = document.getElementById('panel');

	link13.onclick = function() {
		panel.style.display = 'none';
		block12.style.display = 'none';
		block13.style.display = 'flex';
		block14.style.display = 'none';
	}
}

var link14 = document.getElementById('link14');
if (link14) {
	var block12 = document.getElementById('block12');
	var block13 = document.getElementById('block13');
	var block14 = document.getElementById('block14');
	var panel = document.getElementById('panel');

	link14.onclick = function() {
		panel.style.display = 'none';
		block12.style.display = 'none';
		block13.style.display = 'none';
		block14.style.display = 'flex';
	}
}
// popap three end

var mobLink1 = document.getElementById('mobLink1');
if (mobLink1) {
	var block12 = document.getElementById('block12');
	var block13 = document.getElementById('block13');
	var block14 = document.getElementById('block14');
	var panel = document.getElementById('panel');

	mobLink1.onclick = function() {
		panel.style.display = 'block';
		block12.style.display = 'none';
		block13.style.display = 'none';
		block14.style.display = 'none';
	}
}

var mobLink2 = document.getElementById('mobLink2');
if (mobLink2) {
	var block12 = document.getElementById('block12');
	var block13 = document.getElementById('block13');
	var block14 = document.getElementById('block14');
	var panel = document.getElementById('panel');

	mobLink2.onclick = function() {
		panel.style.display = 'none';
		block12.style.display = 'flex';
		block13.style.display = 'none';
		block14.style.display = 'none';
	}
}

var mobLink3 = document.getElementById('mobLink3');
if (mobLink3) {
	var block12 = document.getElementById('block12');
	var block13 = document.getElementById('block13');
	var block14 = document.getElementById('block14');
	var panel = document.getElementById('panel');

	mobLink3.onclick = function() {
		panel.style.display = 'none';
		block12.style.display = 'none';
		block13.style.display = 'flex';
		block14.style.display = 'none';
	}
}

var mobLink4 = document.getElementById('mobLink4');
if (mobLink4) {
	var block12 = document.getElementById('block12');
	var block13 = document.getElementById('block13');
	var block14 = document.getElementById('block14');
	var panel = document.getElementById('panel');

	mobLink4.onclick = function() {
		panel.style.display = 'none';
		block12.style.display = 'none';
		block13.style.display = 'none';
		block14.style.display = 'flex';
	}
}


$(function() {
	$(".block-top__pos").on("click", ".block-top__option", function(e) {
		$(".option-mod", e.delegateTarget).toggleClass("active");
		e.preventDefault();
	})
});

$(".block-link__link").click(function(){
  $("#link13").addClass("active");
  block12.style.display = 'none';
  block13.style.display = 'flex';
});

// const googleTranslateConfig = {
//     lang: "ru",
// };
// let i = 0;

// function TranslateInit() {
//     let code = TranslateGetCode();
//     // Находим флаг с выбранным языком для перевода и добавляем к нему активный класс
//     $('[data-google-lang="' + code + '"]').addClass('language__img_active');

//     if (code == googleTranslateConfig.lang) {
//         // Если язык по умолчанию, совпадает с языком на который переводим
//         // То очищаем куки
//         TranslateClearCookie();
//     }

//     // Инициализируем виджет с языком по умолчанию
//     new google.translate.TranslateElement({
//         pageLanguage: googleTranslateConfig.lang,
//     });

//     // Вешаем событие  клик на флаги
// }

// $('[data-google-lang]').click(function () {
// 		// alert($(this).attr("data-google-lang"));
//         TranslateSetCookie($(this).attr("data-google-lang"));
//         // Перезагружаем страницу
//         window.location.reload();
//     });

// function TranslateGetCode() {
//     // Если куки нет, то передаем дефолтный язык
//     let lang = ($.cookie('googtrans') != undefined && $.cookie('googtrans') != "null") ? $.cookie('googtrans') : googleTranslateConfig.lang;
//     return lang.substr(-2);
// }

// function TranslateClearCookie() {
//     $.cookie('googtrans', null);
// }

// function TranslateSetCookie(code) {
// 	// TranslateClearCookie();
//     // Записываем куки /язык_который_переводим/язык_на_который_переводим
//     $.cookie('googtrans', "/auto/" + code);
// }

/*!***************************************************
 * google-translate.js v1.0.3
 * https://Get-Web.Site/
 * author: Vitalii P.
 *****************************************************/

const googleTranslateConfig = {
    /* Original language */
    lang: "ru",
    /* The language we translate into on the first visit*/
    /* Язык, на который переводим при первом посещении */
    // langFirstVisit: 'en',
    /* Если скрипт не работает на поддомене, 
    раскомментируйте и
    укажите основной домен в свойстве domain */
     domain: "beget.tech" 
};

function TranslateInit() {

    // if (googleTranslateConfig.langFirstVisit && !Cookies.get('googtrans')) {
    //     // Если установлен язык перевода для первого посещения и куки не назначены
    //     TranslateCookieHandler("/auto/" + googleTranslateConfig.langFirstVisit);
    // }

    let code = TranslateGetCode();
    // Находим флаг с выбранным языком для перевода и добавляем к нему активный класс
    if (document.querySelector('[data-google-lang="' + code + '"]') !== null) {
        document.querySelector('[data-google-lang="' + code + '"]').classList.add('language__img_active');
    }

    if (code == googleTranslateConfig.lang) {
        // Если язык по умолчанию, совпадает с языком на который переводим
        // То очищаем куки
        TranslateCookieHandler(null, googleTranslateConfig.domain);
    }

    // Инициализируем виджет с языком по умолчанию
    new google.translate.TranslateElement({
        pageLanguage: googleTranslateConfig.lang,
    });

    // Вешаем событие  клик на флаги
    TranslateEventHandler('click', '[data-google-lang]', function (e) {
        TranslateCookieHandler("/" + googleTranslateConfig.lang + "/" + e.getAttribute("data-google-lang"), googleTranslateConfig.domain);
        // Перезагружаем страницу
        window.location.reload();
    });
}

function TranslateGetCode() {
    // Если куки нет, то передаем дефолтный язык
    let lang = (Cookies.get('googtrans') != undefined && Cookies.get('googtrans') != "null") ? Cookies.get('googtrans') : googleTranslateConfig.lang;
    return lang.match(/(?!^\/)[^\/]*$/gm)[0];
}

function TranslateCookieHandler(val, domain) {
    // Записываем куки /язык_который_переводим/язык_на_который_переводим
    Cookies.set('googtrans', val);
    Cookies.set("googtrans", val, {
        domain: "." + document.domain,
    });

    if (domain == "undefined") return;
    // записываем куки для домена, если он назначен в конфиге
    Cookies.set("googtrans", val, {
        domain: domain,
    });

    Cookies.set("googtrans", val, {
        domain: "." + domain,
    });
}

function TranslateEventHandler(event, selector, handler) {
    document.addEventListener(event, function (e) {
        let el = e.target.closest(selector);
        if (el) handler(el);
    });
}





if ($(".about-str__link")) {
$(".about-str__link").click(function(e){
	e.preventDefault();
	$(".about-cont").addClass("active");
	$(".d-none").addClass("active");
	$(".about-str__link").addClass("active");
});
}

if ($(".link-personal")) {
	$(".link-personal").click(function(e){
		e.preventDefault();
		$(".new1-form1").addClass("active");
	})
}

if ($(".link-jobs")) {
	$(".link-jobs").click(function(e){
		e.preventDefault();
		$(".new1-form2").addClass("active");
	})
}

if ($(".exit-new1")) {
	$(".exit-new1").click(function(e){
		e.preventDefault();
		$(".new1-form1").removeClass("active");
		$(".new1-form2").removeClass("active");
	})
}


$(function() {
	$(".block-text-item").on("click", ".new3-link", function(e) {
		$(".new3-text", e.delegateTarget).toggleClass("active");
		e.preventDefault();

		$(this).toggleClass('active');
	})
});

if ($('.new5-slider')) {
	new Swiper('.new5-slider', {
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		},

		loop: true,

		autoplay: {
			delay: 1500
		},

		speed: 1000,

		// centeredSlides: true,

		initialSlide: 1,

		slidesPerView: 3,

		spaseBetween: 20,

		breakpoints: {
			1025: {
				slidesPerView: 3,
			},	
			1110: {
				slidesPerView: 3,
			},
			768: {
				slidesPerView: 2,
			},
			575: {
				slidesPerView: 1,
			},
			320: {
				slidesPerView: 1,
			}
		},
	});
}

$(function() {
	$(".new8-item").on("click", ".new8-link-text", function(e) {
		$(".new8-block-text", e.delegateTarget).toggleClass("active");
		e.preventDefault();

		$('.no-active-link8',  e.delegateTarget).toggleClass('active');
		$('.active-link8',  e.delegateTarget).toggleClass('active');
	})
});

/*!***************************************************
 * google-translate.js v1.0.3
 * https://Get-Web.Site/
 * author: Vitalii P.
 *****************************************************/

const googleTranslateConfig = {
    /* Original language */
    lang: "ru",
    /* The language we translate into on the first visit*/
    /* Язык, на который переводим при первом посещении */
    // langFirstVisit: 'en',
    /* Если скрипт не работает на поддомене, 
    раскомментируйте и
    укажите основной домен в свойстве domain */
     domain: "beget.tech" 
};

function TranslateInit() {

    // if (googleTranslateConfig.langFirstVisit && !Cookies.get('googtrans')) {
    //     // Если установлен язык перевода для первого посещения и куки не назначены
    //     TranslateCookieHandler("/auto/" + googleTranslateConfig.langFirstVisit);
    // }

    let code = TranslateGetCode();
    // Находим флаг с выбранным языком для перевода и добавляем к нему активный класс
    if (document.querySelector('[data-google-lang="' + code + '"]') !== null) {
        document.querySelector('[data-google-lang="' + code + '"]').classList.add('language__img_active');
    }

    if (code == googleTranslateConfig.lang) {
        // Если язык по умолчанию, совпадает с языком на который переводим
        // То очищаем куки
        TranslateCookieHandler(null, googleTranslateConfig.domain);
    }

    // Инициализируем виджет с языком по умолчанию
    new google.translate.TranslateElement({
        pageLanguage: googleTranslateConfig.lang,
    });

    // Вешаем событие  клик на флаги
    TranslateEventHandler('click', '[data-google-lang]', function (e) {
        TranslateCookieHandler("/" + googleTranslateConfig.lang + "/" + e.getAttribute("data-google-lang"), googleTranslateConfig.domain);
        // Перезагружаем страницу
        window.location.reload();
    });
}

function TranslateGetCode() {
    // Если куки нет, то передаем дефолтный язык
    let lang = (Cookies.get('googtrans') != undefined && Cookies.get('googtrans') != "null") ? Cookies.get('googtrans') : googleTranslateConfig.lang;
    return lang.match(/(?!^\/)[^\/]*$/gm)[0];
}

function TranslateCookieHandler(val, domain) {
    // Записываем куки /язык_который_переводим/язык_на_который_переводим
    Cookies.set('googtrans', val);
    Cookies.set("googtrans", val, {
        domain: "." + document.domain,
    });

    if (domain == "undefined") return;
    // записываем куки для домена, если он назначен в конфиге
    Cookies.set("googtrans", val, {
        domain: domain,
    });

    Cookies.set("googtrans", val, {
        domain: "." + domain,
    });
}

function TranslateEventHandler(event, selector, handler) {
    document.addEventListener(event, function (e) {
        let el = e.target.closest(selector);
        if (el) handler(el);
    });
}