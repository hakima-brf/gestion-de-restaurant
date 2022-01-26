<?php  include('partials/menu.php');?>
    <div class="main">
        <h1>drinks orders</h1>
        
        <table>
            <tr>
                <th>name</th>
                <th>phone</th>
                <th>address</th>
                <th>cola</th>
                <th>pepsi</th>
                <th>mangue</th>
                <th>pomme</th>
                <th>fraise</th>
                <th>orange</th>
                <th>action</th>
                

            </tr>
           


            <?php 
       $sql="SELECT * FROM drink";

       $conn = mysqli_connect('localhost', 'root', '','food') or die(mysqli_connect_error());
       
        $res = mysqli_query($conn, $sql) or die('Error: ' . mysqli_error($conn));

        if($res==True){
            $count=mysqli_num_rows($res);

            if($count>0){
                while($rows=mysqli_fetch_assoc($res)){
                    $name=$rows['name'];
                    $phone=$rows['phone'];
                    $adress=$rows['adress'];
                    $cola=$rows['cola'];
                    $pepsi=$rows['pepsi'];
                    $mangue=$rows['mangue'];
                    $pomme=$rows['pomme'];
                    $fraise=$rows['fraise'];
                    $orange=$rows['orange'];
                    
                      ?>
                      
                      <tr>
                      <td><?php echo $name;?></td>
                      <td><?php echo $phone;?></td>
                      <td><?php echo $adress;?></td>
                      <td><?php echo $cola;?></td>
                      <td><?php echo $pepsi;?></td>
                      <td><?php echo $mangue;?></td>
                      <td><?php echo $pomme;?></td>
                      <td><?php echo $fraise;?></td>
                      <td><?php echo $orange;?></td>
                      <td ><span id="ok" class="btn">is delivered</span></td>
                      
      
                  </tr>
                  <?php 

                }
            }
        }
    ?>
            
        </table>

    </div>
    
    
    <?php  include('partials/footer.php')?>

   