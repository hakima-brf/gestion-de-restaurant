<?php  include('partials/menu.php')?>
    <div class="main">
        <h1>tacos orders</h1>

        <table>
            <tr>
                <th>name</th>
                <th>phone</th>
                <th>address</th>
                <th>quantity</th>
                <th>cheese</th>
                <th>toppings</th>
                <th>bun</th>
                <th>sauce</th>
                <th>protein</th>
                <th>restau</th>
                <th>action</th>

                

            </tr>
           


            <?php 
       $sql="SELECT * FROM tacos";

       $conn = mysqli_connect('localhost', 'root', '','food') or die(mysqli_connect_error());
       
        $res = mysqli_query($conn, $sql) or die('Error: ' . mysqli_error($conn));

        if($res==True){
            $count=mysqli_num_rows($res);

            if($count>0){
                while($rows=mysqli_fetch_assoc($res)){
                    $name=$rows['name'];
                    $phone=$rows['phone'];
                    $adress=$rows['address'];
                    $quantity=$rows['quantity'];
                    $cheese=$rows['cheese'];
                    $toppings=$rows['toppings'];
                    $bun=$rows['bun'];
                    $sauce=$rows['sauce'];
                    $protein=$rows['protein'];
                    $restau=$rows['restau'];
                    
                      ?>
                      
                      <tr>
                      <td><?php echo $name;?></td>
                      <td><?php echo $phone;?></td>
                      <td><?php echo $adress;?></td>
                      <td><?php echo $quantity;?></td>
                      <td><?php echo $cheese;?></td>
                      <td><?php echo $toppings;?></td>
                      <td><?php echo $bun;?></td>
                      <td><?php echo $sauce;?></td>
                      <td><?php echo $protein;?></td>
                      <td><?php echo $restau;?></td>
                      <td ><span id="ok" class="btn">is delivered</span></td>
                      
      
                  </tr>
                  <?php 

                }
            }
        }
    ?>
            
    </div>
    
    <?php  include('partials/footer.php')?>