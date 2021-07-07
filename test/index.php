<?php 

$user_id = 172;

function getdata(){
	$echo = '';	//   имя сервера,  имя пользователя,  пароль к бд,   имя бд
	$db = new mysqli('localhost',  'nedenilya_test',  'Test123',     'nedenilya_test');
	// $db = new mysqli('localhost',  'root',  '',     'test');
	$res = $db->query('select * from table1');
	while ($row = $res->fetch_assoc()){
		$echo .= '
			<tr>
				<td>'.$row['id'].'</td>
				<td>'.$row['userid'].'</td>
				<td>'.$row['row2'].'</td>
			</tr>
		';
	}
	echo $echo.'|';
}

if(isset($_POST['get'])){
	getdata();
}

if(isset($_POST['id'])){
	$db = new mysqli('localhost', 'nedenilya_test', 'Test123', 'nedenilya_test');
	$db->query('delete from table1 where userid='.$user_id);
}

if(isset($_POST['row']) and isset($_POST['userid'])){
	add();
}

function add(){
	$db = new mysqli('localhost', 'nedenilya_test', 'Test123', 'nedenilya_test');
	// $db = new mysqli('localhost', 'root', '', 'test');

	$res1 = $db->query('select * from table1');
	while ($row = $res1->fetch_assoc()){
		if($_POST['userid'] == $row['userid']){
			echo "Пользователь с таким id уже добавлен<br>
			<input type=\"button\" id=\"close\" value=\"Отменить\">	
			<script>$('#close').on('click', function(){
		$('.modal').css('display', 'none');
	});</script>";
			exit;
		}
	}

	$res = $db->query('INSERT INTO `table1`(`userid`, `row2`) VALUES (
		'.$_POST['userid'].',
		\''.$_POST['row'].'\'
	)');
	echo "success";
}

if(isset($_POST['check'])){
	$db = new mysqli('localhost', 'nedenilya_test', 'Test123', 'nedenilya_test');
	// $db = new mysqli('localhost', 'root', '', 'test');

	$res1 = $db->query('select * from table1');
	while ($row = $res1->fetch_assoc()){
		if($_POST['check'] == $row['userid']){
			echo "true";
			exit;
		}
	}
	echo "false";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<style type="text/css">
	.modal{
		position: absolute;
		display: none;
		width: 100%;
		height: 100vh;
		top: 0;
		left: 0;
		background: rgba(255, 255, 255, .7);
	}

	.box{
		margin: 0 auto;
		margin-top: 10%;
		border: 2px solid gray;
		width: 200px;
		height: 200px;
		background: white;
		align-items: center;
		padding: 30px;
	}

	.btns{
		display: flex;
	}

</style>
<body>
	<div>
		<p>Ваш ID: <?=$user_id?></p><br>
		<div class="btns">
			<input type="button" id="add" value="Добавить">
			<input type="button" id="add-2" value="Откликнулся">
			<input type="button" id="delete" value="Удалить запись">
		</div>

		<div class="modal">
			<div class="box">
				<label for="q1">user id</label><br><input name="q1" type="text" id="userid">
				<label for="q2">comment</label><input name="q2" type="text" id="row">
				<input type="button" id="submit" value="Добавить"><br>
				<spam class="alert"></span><br>
			</div>
		</div>
	</div>
	<div>
		<table border="1">
			<thead>
				<tr>
					<td>id</td>
					<td>user id</td>
					<td>row2</td>
				</tr>
			</thead>
			<tbody id="body">
				<?php 
				$db = new mysqli('localhost',  'nedenilya_test',  'Test123',     'nedenilya_test');
				// $db = new mysqli('localhost',  'root',  '',     'test');
				$res = $db->query('select * from table1');
				while ($row = $res->fetch_assoc()){
					echo '
						<tr>
							<td>'.$row['id'].'</td>
							<td>'.$row['userid'].'</td>
							<td>'.$row['row2'].'</td>
						</tr>
					';
				}
				 ?>
			</tbody>
		</table>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

	$('#add').on('click', function(){
		$('.modal').css('display', 'block');
		$('#close').css('display', 'none');
	});
	

	$('#submit').on('click', function(){
		$.post('index.php', {
			'userid' : $('#userid').val(),
			'row' : $('#row').val()
		}).done(function(data){
			if(data.includes('success')){
				$('.modal').css('display', 'none');
				start();
			}
			else{
				$('.alert').html(data);
			}
			return false;
		});
	});

	$('#delete').on('click', function(){
		$.post('index.php', {
			'id' : '<?=$user_id?>'
		}).done(function(data){
			start();
			return false;
		});
	});

function start(){
	$.post('index.php', {
			'check' : '<?=$user_id?>'
	}).done(function(data){
		if(data == 'true'){
			$('#add-2').css('display', 'block');
			$('#delete').css('display', 'block');
			$('#add').css('display', 'none');
		}else{
			$('#add-2').css('display', 'none');
			$('#add').css('display', 'block');
			$('#delete').css('display', 'none');
		}
		return false;
	});
	
	$.post('index.php', {
		'get' : '1'
	}).done(function(data){
		$('#body').html(data.split('|')[0]);
		return false;
	});	
}
start();
</script>
</html>