<?php
    
    include('connection.php');

    if(isset($_POST["name"], $_POST["password"])) 
    {     

        $uname=$_POST['name'];
        $pass=$_POST['password'];

        $sql="select * from owner where user='".$uname."'AND pass='".$pass."'limit 1";

        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1)
        {
            header("Location: http://localhost/dbproject/admin.php"); /* Redirect browser */
            //echo "good";
            exit();
        }
        else{
            echo "incorrect username or password";
        }
}
    
    

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="login-box">
  <form action="" method="post">
    <h1>Login</h1>
    <div class="textbox">
      <i class="fas fa-user"></i>
      <input type="text" name="name" id="name" placeholder="Username">
    </div>

    <div class="textbox">
      <i class="fas fa-lock"></i>
      <input type="password" name="password" id="password" placeholder="Password">
    </div>

    <button class="btn">sign in</button>
  </form>
</div>
  </body>
</html>
