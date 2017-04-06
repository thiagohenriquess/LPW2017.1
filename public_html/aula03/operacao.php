<link rel="StyleSheet" type="text/css" href="../css/style.css">
<?php
  class Operacao{
    var $result;
    public function repete($multiplicador,$formato){
      for($i = 1; $i <= 100; $i++){
        $result = $i * $multiplicador;
        echo "$result"."$formato";
      }
    }
    public function pingpongploc($formato){
      for($i = 1; $i <= 100; $i++){
        if($i%3 ==0 or $i%5 == 0){
          if($i%3 ==0 and $i%5 == 0){
            echo "$i. <a class=ploc>ploc</a>"."$formato";
          }
          elseif ($i%3==0) {
            echo "$i. <a class=ping>ping</a>"."$formato";
          }
          else {
            echo "$i. <a class=pong>pong</a>"."$formato";
          }
        }
        else {
          echo "$i. ok"."$formato";
        }
      }
    }
  }
?>
