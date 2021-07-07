<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<div class="block-404">
		<p class="block-404__arror">404</p>
		<p class="block-404__text">Страница не доступна</p>
		<a href="/" class="block-404__link">На главную</a>
	</div>

	<style>
		.block-404 {
			padding-top: 180px;
			display: flex;
			align-items: center;
			width: 100%;
			height: 100%;
			background: #fff;
			flex-direction: column;
			min-height: 80vh;
		}

		.block-404__arror {
			font-size: 250px;
			font-weight: bold;
			line-height: 190px;
			margin: 0;
			margin-bottom: 20px;
			color: #122360;
		}

		.block-404__text {
			font-size: 36px;
			line-height: 44px;
			color: #e1b87c;
			margin: 0;
			margin-bottom: 40px;
		}

		.block-404__link {
			text-decoration: none;
			width: 270px;
			height: 60px;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 25px;
			background: #e1b87c;
			color: #fff;
			font-size: 24px;
			line-height: 30px;
			transform: opacity .2s;
		}

		.block-404__link:hover {
			opacity: .7;
		}

		@media (max-width: 575px) {
			.block-404__arror {
				font-size: 150px;
				line-height: 100px;
			}

			.block-404__text {
				font-size: 24px;
				line-height: 30px;
			}

			.block-404__link {
				width: 250px;
				height: 45px;
				font-size: 16px;
				line-height: 20px;
			}
		}
	</style>

</body>
</html>