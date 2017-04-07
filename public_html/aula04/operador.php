<link rel="StyleSheet" type="text/css" href="css/style.css">
<?php
  class Operacao{
    var $result;
     
	public function pingpongploc($ping,$pong,$formato){
      for($i = 1; $i <= 100; $i++){
        if($i%$ping ==0 or $i%$pong == 0){
          if($i%$ping ==0 and $i%$pong == 0){
            echo "$i. <a class=ploc>ploc</a>"."$formato";
          }
          elseif ($i%$ping==0) {
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
