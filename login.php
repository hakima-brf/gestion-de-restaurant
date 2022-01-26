<?php  include('partials/menu.php');?>

<div class="login">

<?php 
session_start();

  if(isset($_SESSION['login'])){
      echo $_SESSION['login'];
      
  }
?>
    
    <form  method="post">
    <h1>login</h1>
    <br>
    <section>
        <label > username</label>
        <br><br>
        <input type="text" name="username" placeholder="username">
    </section>
    <br>
    <section>
        <label > password</label>
        <br><br>
        <input type="password" name="password" placeholder="password">
    </section>
    <section>
        <br><br>
       
        <input type="submit" name="submit" placeholder="submit" id="sublog">
    </section>
    </form>
</div>

<?php  include('partials/footer.php')?>

<?php 

    if(isset($_POST['submit'])){
       

        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="SELECT * FROM login WHERE username='$username'AND pass='$password'
        ";
        
        $conn = mysqli_connect('localhost', 'root', '','food') or die(mysqli_connect_error());
       
        $res = mysqli_query($conn, $sql) or die('Error: ' . mysqli_error($conn));
        
        $count=mysqli_num_rows($res);
        if($count==1){

            
            $_SESSION['login']=" try again";
            
            header("location: http://localhost/prosite/home/index.php");
        }
        else{
            
            
            header("location: http://localhost/prosite/home/login.php");
            
        }

    
    }
?>
