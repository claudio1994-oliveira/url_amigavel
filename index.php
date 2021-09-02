<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		//phpinfo();
            //define(DADOS, array('nome'=>'Claudio', 'sobrenome'=>'oliveira'));


        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

			$url = array_filter(explode('//',$url));
			
			$file = $url[0].'.php';

			if(is_file($file)){
				include $file;
			}else{
				include '404.php';
			}			
		?>
	</body>
</html>