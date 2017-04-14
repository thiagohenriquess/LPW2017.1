<html>
<head><title>Aula 05 - PingPongPloc Até N</title></head>
<body>
  <form  method="GET">
    Vai até quanto?<br>
    <input type="text" name="N">
    <input type="submit">
  </form>
	<?php
    if (is_numeric($_GET['N'])){
      $N = $_GET['N'];
    }
    else {
      echo "Insira um número<br><br>";
    }
		echo "PingPongPloc<br><br>";
		include 'operador.php';
		$operacao = new Operacao();
		$operacao->pingpongploc(3,5,$N,"<br>");
	?>
</body>
</html>
