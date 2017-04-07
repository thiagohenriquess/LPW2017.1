<html>
<head><title>Aula 04 - PingPongPloc com Função</title></head>
<body>
	<?php
		echo "PingPongPloc<br><br>";
		include 'operacao.php';
		$operacao = new Operacao();
		$operacao->pingpongploc(3,5,"<br>");
	?>
</body>
</html>
