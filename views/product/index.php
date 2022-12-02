<html>
	<head>
		<title>Книги | АДМИН </title>
	</head>
	<body>
		<h1>Книги</h1>
		<a href='/login/logout'> Одјави се </a> <br />

		<a href='/product/create'> Додади книга </a>
		<table>
			<tr><th>Наслов</th><th>Цена</th><th></th></tr>
			<?php   
					foreach($data['items'] as $item){
						echo "<tr><td>$item->title</td><td><tr><td>$item->price</td><td>
						<a href = 'product/detail/$item->product_id'> Детали</a>
						<a href = 'product/edit/$item->product_id'> Уреди</a>
						<a href = 'product/delete/$item->product_id'> Избриши</a>
						<a href = 'product/addPicture/$item->product_id'> Додади слика</a>
						</td></tr>";
					}
			?>
		</table>
	</body>
</html>