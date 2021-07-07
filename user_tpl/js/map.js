ymaps.ready(init);

function init() {
    // Подключаем поисковые подсказки к полю ввода.
    var suggestView = new ymaps.SuggestView('suggest')

    var myMap = new ymaps.Map('map', {
        center: [55.763163, 37.558546],
        zoom: 11,
        controls: []
    });

    var searchControl = new ymaps.control.SearchControl({
        options: {
          provider: 'yandex#search',
          position: {
          	top: -40 // уберём поисковую панель за край карты
          } 
        }
    });
	myMap.controls.add(searchControl);

	suggestView.events.add('select', function () { // поиск по выбору саджеста
		Search()
	})

	$("#suggest").keyup(function(event){ // поиск по Enter
		if(event.keyCode == 13){
			Search()
		}
	});

    $('#button').bind('click', function () { // поиск по кнопке
		Search()
	});

	function Search () { // Непосредственно поиск в панели
		var request = $('#suggest').val();
		searchControl.search(request);
    }

}