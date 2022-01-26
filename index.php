<?php  include('partials/menu.php')?>
    <div class="main">

    <?php 

  if(isset($_SESSION['login'])){
     echo $_SESSION ['login'];
     unset($_SESSION ['login']);


  }
?>
        <h1>welcom!</h1>
        <br>
        <br>
        <h2>see the orders and manage them here in categories or all</h2>
        
    </div>
    
    <?php  include('partials/footer.php')?>
    