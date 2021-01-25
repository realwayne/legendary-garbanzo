<?php
  session_start();
  if (!isset($_SESSION['counter'])) {  
    $_SESSION['counter'] = 1;  
  } else {  
    $_SESSION['counter']++;  
  }   
?>

<h1>Hello</h1>
<p>You have visited this page 
  <?php 
    if ($_SESSION["counter"]>=10){
      header("Location: congratulations.php");
    }else if($_SESSIO["counter"]==5){
      echo("You sure visit alot"); 
    }else{
      echo($_SESSION["counter"]); 
    }
  ?>
</p>
<p><a href="?reset=true">Reset</a></p>
