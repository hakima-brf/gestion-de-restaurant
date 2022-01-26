
<?php 


  if(isset($_POST['confirmer'])){
    $nbr=$_POST['nbrphone'];
    $adress=$_POST['addresse'];
    $name=$_POST['name'];
    $quantity=$_POST['amount'];
    $protein=$_POST['patty'];
    $sauce="";
    $bun="";
    $cheese="";
    $toppings="";
    $price=$_POST['chekmoney'];

    if(!empty($_POST['sauce'])) {
      // Counting number of checked checkboxes.
      //$checked_count = count((array)$_POST['sauce']);
      //echo "You have selected following ".$checked_count." option(s): <br/>";
      // Loop to store and display values of individual checked checkbox.
      //foreach(($_POST['sauce'] )as $selected) {
      //echo "<p>".$selected ."</p>";
      //}
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

    
    
    
  

    $sql="INSERT INTO burger SET
    phone='$nbr',
    name='$name',
    address='$adress',
    sauce='$sauce',
    bun='$bun',
    cheese='$cheese',
    toppings='$toppings',
    quantity='$quantity',
    protein='$protein',
    price='$price'
    
    
   

    
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
