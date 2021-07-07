<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	textarea{
		height: 400px !important;
		width: 1100px !important;
		margin-bottom: 20px;
		border-radius: 10px;
	}

	form{
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.submit{
		width: 200px;
		height: 30px;
		border-radius: 10px;
		margin: 0 auto;
	}

	.edit-box{
		border: 2px solid gray;
		display: flex;
		flex-direction: column;
		align-items: center;
	}
</style>
<body>
<!-- <div contenteditable><?=$data.''?></div><br> -->
<?php 
$data = '';
$i = 0;
$j = 0;$k = 0;
foreach ($anketas as $anketa) {
	foreach ($anketa as $filename) {
		$j++;$k++;
		$data = file_get_contents($filename).'';
		$data = str_replace('<', '&lt;', $data);
		$data = str_replace('>', '&gt;', $data);
		?>
<div class="edit-box">
<h3><?=$anketas_names[$i]?> Шаг: <?=$j?><h3>
<form action="/admin/anketas/employer" method="post">
	<textarea name="data"><?=$data?></textarea>
	<input type="hidden" name="filename" value="<?=$filename?>">
	<input class="submit" type="submit" value="Сохранить">
</form>
</div>
		<?		
		if ($k == 35) {
			exit;
		}
	}
	$i++;
	$j = 0;
}
?>
</body>
</html>