<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="pizza.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <title>Textarea element</title>
    <!-- Include in <head> to load fonts from Google -->
    <link href='https://fonts.googleapis.com/css?family=Permanent+Marker:400' rel='stylesheet' type='text/css'>
  </head>
  <body>
  <div class="menu">
      <div class="menu1">
      <img src="pizzaicon.png"  id="logo">
      <ul>
          <li><a href="home.php">home</a></li>
          <li><a href="pizza.php"> pizza</a></li>
          <li ><a  id="burger" href="burger.php">burger</a></li>
          <li><a href="tacos.php">tacos</a></li>
          <li><a href="cola.php">drinks</a></li>
      </ul>
      </div>

  </div>
    
    <section id="overlay">
      <div class="welcome">
      
      <h1 class="wel">WELCOME!</h1>
    </div>
      <hr>
      <form  method="post">
      <div style="display: flex;">
        <div style="flex: 1;">
      <div class="bach">
      
        
        <h1>Create a pizza!</h1>
        
					
        
        <section class="patties">
          <span>How many patties would you like?</span>
          <input type="text" name="amount" id="amount"  required pattern=[0-9]{1,2}  required>
        </section>
        <hr>
        <section class="cooked">
          <label for="doneness">How do you want your patty cooked</label>
          <br>
          <span>Rare</span>
          <input type="range" name="doneness" id="doneness" value="3" min="1" max="5">
          <span>Well-Done</span>
        </section>
        <hr>
        <section class="toppings">
          <span>What toppings would you like?</span>
          <br>
          <input type="checkbox" name="topping[]" id="pepperoni" value="pepperoni">
          <label for="pepperoni">pepperoni</label>
          <input type="checkbox" name="topping[]" id="spinach" value="spinach">
          <label for="spinach">spinach</label>
          <input type="checkbox" name="topping[]" id="Mushroom" value="Mushroom">
          <label for="Mushroom">Mushroom</label>
          <input type="checkbox" name="topping[]" id="anchoivies" value="anchoivies">
          <label for="anchoivies">anchoivies</label>
          <input type="checkbox" name="topping[]" id="jelapeno" value="jelapeno">
          <label for="jelapeno">jelapeno</label>
          <input type="checkbox" name="topping[]" id="supreme" value="supreme">
          <label for="supreme">supreme</label>
          <input type="checkbox" name="topping[]" id="sausage" value="sausage">
          <label for="sausage">sausage</label>
          <input type="checkbox" name="topping[]" id="peppers" value="peppers">
          <label for="peppers">peppers</label>
          <input type="checkbox" name="topping[]" id="onion" value="onion">
          <label for="onion">onion</label>
        </section>
        <hr>
        <section class="cheesy">
          <span>Would you like to add cheese?</span>
          <br>
          <label><input type="checkbox" name="cheese[]" id="Yes" value="Yes">
          Yes</label>
          
        </section>
        <hr>
        <section class="bun-type">
          
          <span>What type of bun would you like?</span>
          <br>
          <input type="checkbox" name="bun[]" id="potato" value="potato">
          <label for="potato">potato</label>
          <input type="checkbox" name="bun[]" id="prezel" value="prezel">
          <label for="prezel">prezel</label>
          <input type="checkbox" name="bun[]" id="sesame" value="sesame">
          <label for="sesame">sesame</label>
        </section>
        <hr>
        <section class="sauce-selection">
          
          <span>What type of sauce would you like?</span>
          <br>
          <input type="checkbox" name="sauce[]" id="ketchup" value="ketchup">
          <label for="ketchup">ketchup</label>
          <input type="checkbox" name="sauce[]" id="mayo" value="mayo">
          <label for="mayo">mayo</label>
          <input type="checkbox" name="sauce[]" id="mustard" value="mustard">
          <label for="mustard">mustard</label>
        </section>
        <hr>
        <section class="extra-info">
          <label for="extra">Anything else you want to add?</label>
          <br>
          <textarea id="extra" name="extra" rows="3" cols="40"></textarea>
        </section>
        <hr>

        
        
      </div>
    </div>
    
    
  <div style="flex: 0;">
    <div class="check">
    <h1>check</h1> 
    <hr>
    <h2>Add components and make your burger delicious</h2>
    <h3 id='send'> get price</h3>
    <p id="para">montant total = <span id="chekmoney"> 00.00</span> $</p>
    <div class="info">
    <h1 id="hello"> order now!</h1>
        <section class="name">
          <label for="name"> what is your name?</label>
          <input type="text"  name="name" id="name" required>
        </section>
        <section class="addresse">
        <label for="adresse"> what is your adresse?</label>
        <input type="text"  name="adresse" id="adresse" required>
      </section>
      <section class="nbrphone">
        <label for="nbrphone" > what is your nbr phone?</label>
        <input type="text" name="nbrphone" id="nbrphone"  required pattern=[0-9]{10}  required>
      </section>
      
    <br>
    
    <section class="resto">
      <label for="resto" > choose a restorant </label>
      
      <input type="text"  id="resto" name="resto">
    </section>
    <section class="submition">
      <input type="submit" value=" confirm the order " class="sub" name="confirmer" >
    </section>

  </div>
  
  
  </div>
  </div>
</div>
     
</form>
  
</section>
    
    <div class="hero">
      <h1>ENJOY YOUR MEAL </h1>
      <p>contact us for more information</p>
      <a class="btn" href="#">contact us</a>
    </div>
    <script src="pizza.js"></script>
  </body>
</html>

<?php 


  if(isset($_POST['confirmer'])){
    $nbr=$_POST['nbrphone'];
    $adress=$_POST['adresse'];
    $name=$_POST['name'];
    $quantity=$_POST['amount'];
    $sauce="";
    $bun="";
    $cheese="";
    $toppings="";
    $restau=$_POST['resto'];
    

    if(!empty($_POST['sauce'])) {
      
      $sauce=implode(" + ",$_POST['sauce'] );
    }
    if(!empty($_POST['bun'])){
      $bun=implode(" + ",$_POST['bun']);

    }
    if(!empty($_POST['cheese'])){
      $cheese=implode(" + ",$_POST['cheese']);
    }
    if(!empty($_POST['toppings'])){
      $toppings=implode(" + ",$_POST['toppings']);
    }

    
    
    
  

    $sql="INSERT INTO pizza SET
    phone='$nbr',
    name='$name',
    address='$adress',
    sauce='$sauce',
    bun='$bun',
    cheese='$cheese',
    toppings='$toppings',
    quantity='$quantity',
    restau='$restau'
    
    
    
   

    
    ";
    
    
    $conn = mysqli_connect('localhost', 'root', '','food') or die(mysqli_connect_error());
    
    echo "conn";
    
    $res = mysqli_query($conn, $sql) or die('Error: ' . mysqli_error($conn));
    
    if($res==TRUE){
      echo $sql;
    }
    else{
      echo " no conn";
    }
  
  }

?>