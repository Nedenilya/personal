<?php 
// define('RESTRICTED',1);
// include('Chat.php');
// 	if(isset($_POST['act'])) {$act = $_POST['act']; echo $act;}
// 		if(isset($_POST['var1'])) {$var1 = $_POST['var1'];}
// 		if(isset($_POST['var2'])) {$var2 = $_POST['var2'];}
// 		if(isset($_POST['chatid'])) {$chatid = $_POST['chatid'];}

// 		switch($_POST['act']) {//В зависимости от значения act вызываем разные функции
// 			case 'load': 
// 				$echo = Chat::load($chatid); //Загружаем сообщения
// 			break;
			
// 			case 'send': 
// 				if(isset($var1)) {
// 					$echo = Chat::send($var1, $chatid); //Отправляем сообщение
// 				}
// 			break;
// 		}

// 		echo $echo;//Выводим результат работы кода


	// function send($message, $chatid, $mode) {
	// 	$db = mysqli_connect("localhost", "root","", "ringuel_hr"); 
	// 		$message = htmlspecialchars($message);//Заменяем символы ‘<’ и ‘>’на ASCII-код
	// 		$message = trim($message); //Удаляем лишние пробелы
	// 		$message = addslashes($message); //Экранируем запрещенные символы
	// 		$time = time();
	// 		$id = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
	// 		$query = "insert into chat_messages (id, chatid, text, time, from) values ($id, $chatid, '$message', $time, '$mode');";
	// 		echo $query;
	// 		$res = mysqli_query($db, $query) or die(mysqli_error($db));
	// 		if($res) echo "------ok--------";else echo "error";

	// 	return load($chatid); //Вызываем функцию загрузки сообщений
	// }
	// function load($chatid = null) {
	// 	$echo = '';
	// 	$db = mysqli_connect("localhost","root","", "ringuel_hr"); 
	// 		$id = mysqli_query($db, 'select emploeeid from chat where chatid='.$chatid); 
	// 		$result = mysqli_query($db, 'select * from chat_messages join employee where chat_messages.chatid='.$chatid.' and employee.userid='.$id[0]['emploeid']); 
	// 		if($result) {
	// 			foreach($result as $item) {//Выводим их с помощью цикла
	// 				if($item['from'] == 'employee')
	// 					$echo .= '<div class="master-block">
	// 								<p class="master-block__text">'.$item['text'].'</p>
	// 								<img src="/'.$item['profile_image'].'" alt="">
	// 							</div>'; 
	// 				else if($item['from'] == 'employer')
	// 					$echo .= '<div class="klient-block">
	// 								<p class="klient-block__text">'.$item['text'].'</p>
	// 							</div>'; 
	// 			}
	// 		}
		
	// 	return $echo;//Возвращаем результат работы функции
	// }
 ?>