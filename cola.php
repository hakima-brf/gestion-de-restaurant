
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="cola.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <title>Textarea element</title>
    <!-- Include in <head> to load fonts from Google -->
    <link href='https://fonts.googleapis.com/css?family=Permanent+Marker:400' rel='stylesheet' type='text/css'>
  </head>
  <body>
  <div class="menu">
      <div class="menu1">
        <img src="jus.jfif"  id="logo">
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
      
      
        
        <h1>Choose your drinks !</h1>
        
       
					
        
        <div class="grid" style="display: flex;
        flex-wrap: wrap;
        margin-left: -8px;
        margin-right: -8px;">

           
            <section class="coca" style="
        
        flex-basis: 25%;

        padding-left: 8px;
        padding-right: 8px;">
              <img src="cocasmall.jpg" alt="cola" id="jus">
              <label for="amount" >How many ones would you like?</label>
              <input   type="text" name="amount" id="amount"   pattern=[0-9]{1,2}  >
            </section>
         
        
            <section class="pepsi" style="
        /* There will be 4 cards per row */
        flex-basis: 25%;

        padding-left: 8px;
        padding-right: 8px;">
                <img src="pepsi.jpg" alt="pepsi" id="jus">
              <label for="amount1">How many ones would you like?</label>
              <input type="text" name="amount1" id="amount1"   pattern=[0-9]{1,2}  >
            </section>
        
     
            <section class="mangue" style="
        /* There will be 4 cards per row */
        flex-basis: 25%;

        padding-left: 8px;
        padding-right: 8px;">
                <img src="mangue.jpg" alt="mangue" id="jus">
              <label for="amount2" >How many ones would you like?</label>
              <input type="text" name="amount2" id="amount2"   pattern=[0-9]{1,2}  >
            </section>
        
       
            <section class="straw" style="
        /* There will be 4 cards per row */
        flex-basis: 25%;

        padding-left: 8px;
        padding-right: 8px;">
                <img src="straw.jpg" alt="strawbery" id="jus">
              <label for="amount3">How many ones would you like?</label>
              <input type="text" name="amount3" id="amount3"   pattern=[0-9]{1,2}  >
            </section>
      
      
            <section class="pomme" style="
        /* There will be 4 cards per row */
        flex-basis: 25%;

        padding-left: 8px;
        padding-right: 8px;">
                <img src="pomme.jpg" alt="pomme" id="jus">
              <label for="amount4">How many ones would you like?</label>
              <input type="text" name="amount4" id="amount4"   pattern=[0-9]{1,2}  >
            </section>
        
       
            <section class="orange" style="
        /* There will be 4 cards per row */
        flex-basis: 25%;

        padding-left: 8px;
        padding-right: 8px;">
                <img src="orrage.jpg" alt="orange" id="jus">
              <label for="amount5">How many ones would you like?</label>
              <input type="text" name="amount5" id="amount5"   pattern=[0-9]{1,2}  >
            </section>
        
    </div>
        <hr>
        <div class="rest">
            <section class="extra-info">
                <label for="extra">Anything else you want to add?</label>
                <br>
                <br>
                <textarea id="extra" name="extra" rows="3" cols="40"></textarea>
              </section>
              <hr>
      
              
        </div>
        
     
      </div>
    </div>
    
              
              
        
        
      
    
    
    
  <div style="flex: 0;">
    <div class="check">
    
    <h1>check</h1> 
    <hr>
    <h2>Add your favorite jus</h2>
    <h3 id='send'> get price</h3>
   
    <p id="para">montant total = <span id="chekmoney"> 00.00</span> $</p>
    <div class="info">
    <h1 id="hello"> order now!</h1>

    <section class="name">
        <label for="name"> what is your name?</label>
        <input type="text"  name="name" id="name" required>
      </section>
      <br>
      <br>
      <section class="addresse">
      <label for="adresse"> what is your adresse?</label>
      <input type="text"  name="addresse" id="addresse" required>
    </section>
    <br>
    

    <section class="nbrphone">
      <label for="nbrphone" > what is your nbr phone?</label>
      <input type="text" name="nbrphone" id="nbrphone"  required pattern=[0-9]{10}  required>
    </section>
    <br>
    <br>
    <section class="resto">
      <label for="resto" > choose a restorant </label>
      
      <input type="text"  id="resto" name="resto">
    </section>
    <section class="submition">
      <input type="submit" value=" confirm the order " class="sub" name="confirmer" >
    </section>

     
        <h1>
          we wish you a good day
        </h1>
      
      
        
  
      
     
    </div>
    
  
  
  </div>
  </div>
</div>

     
</form>

 
</section>

    
    <div class="hero">
      <h1>ENJOY YOUR DRINKS </h1>
      <p>contact us for more information</p>
      <a class="btn" href="#">contact us</a>
    </div>
    <script src="cola.js"></script>
  </body>
</html>

<?php 

  if(isset($_POST['confirmer'])){
    $amount=$_POST['amount']; 
    $amount1=$_POST['amount1'];
    $amount2=$_POST['amount2'];
    $amount3=$_POST['amount3'];
    $amount4=$_POST['amount4'];
    $amount5=$_POST['amount5'];
    $nbr=$_POST['nbrphone'];
    $adress=$_POST['addresse'];
    $name=$_POST['name'];
    



    $sql="INSERT INTO drink SET
    phone='$nbr',
    name='$name', 
    adress='$adress',
    cola='$amount',
    pepsi='$amount1',
    mangue='$amount2',
    pomme='$amount3',
    fraise='$amount4',
    orange='$amount5'
    
    
    
    
    ";

    
    
    $conn = mysqli_connect('localhost', 'root', '','food') or die(mysqli_connect_error());
    
    
    
    $res = mysqli_query($conn, $sql) or die('Error: ' . mysqli_error($conn));
    
    
   
  }
  
?>