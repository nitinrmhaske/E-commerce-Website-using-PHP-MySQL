<?php
if(isset($_POST['Category']))
{
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $db="ecom";

    $conn = mysqli_connect($server,$username,$password,$db);
    //mysqli_select_db($conn,$db);

    if(!$conn)
    {
        die("connection to this database failed");
    }

    $category=$_POST['Category'];
    $name=$_POST['name'];
    $mname=$_POST['Mname'];
    $speci=$_POST['Speci'];
    $ratings=$_POST['Ratings'];
    $price=$_POST['price'];

    $sql = "INSERT INTO `ecom`.`products` (`category`, `name`, `mname`, `speci`, `ratings`, `price`) VALUES ('$category', '$name', '$mname', '$speci', '$ratings', '$price');";
       // $result = mysqli_query($conn,$query1);
    if($conn->query($sql) == true)
    {
        echo "Data Has Been Saved into Database";
        header("refresh:2,url=admin.php");
    }
    else{
        echo "error: $conn->error";
    }
    $conn->close();

        
       
}
?>








<html>
<head>
    <title>Ecom.com</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body>
    <div class="input_box">
        <form action="#" method="post">
            <h3>Enter Data to be inserted in Database</h3>
            <div class="textbox"><input type="text" name="Category" id="Category" placeholder="Category"><br>
            <input type="text" name="name" id="name" placeholder="Company Name"><br>
            <input type="text" name="Mname" id="Mname" placeholder="Model Name"><br>
            <input type="text" name="Speci" id="Speci" placeholder="Specifications"><br>
            <input type="text" name="Ratings" id="Ratings" placeholder="Ratings"><br>
            <input type="text" name="price" id="price" placeholder="Price in Rupees"><br>
            </div>
            <button class="btn">Submit</button>
            
        </form>
        </div>

        <div class="menu">
        <ul>
            <li><a href="http://localhost/dbproject/mobiles.php"><i class="fa fa-mobile" ></i>mobiles</a>
                <div class="menu1">
                    <ul>
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">OnePlus</a></li>
                        <li><a href="#">Realme</a></li>
                        <li><a href="#">Xiaomi</a></li>
                        <li><a href="#">Oppo</a></li>
                        <li><a href="#">Vivo</a></li>
                        <li><a href="#">Micromax</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="http://localhost/dbproject/laptops.php"><i class="fa fa-laptop" ></i>Laptops</a>
                <div class="menu1">
                    <ul>
                        <li><a href="#">Macbook</a></li>
                        <li><a href="#">Asus</a></li>
                        <li><a href="#">Dell</a></li>
                        <li><a href="#">Acer</a></li>
                        <li><a href="#">Lenovo</a></li>
                        <li><a href="#">HP</a></li>
                        <li><a href="#">Avita</a></li>
                    </ul>
                </div>  
            </li>
            <li><a href="http://localhost/dbproject/camera.php"><i class="fa fa-camera" ></i>Camera</a>
                <div class="menu1">
                    <ul>
                        <li><a href="#">Nikon</a></li>
                        <li><a href="#">Canon</a></li>
                        <li><a href="#">Sony</a></li>
                        <li><a href="#">GoPro</a></li>
                        
                    </ul>
                </div>
            </li>
            <li><a href="http://localhost/dbproject/television.php"><i class="fa fa-television"></i>TV</a>
                <div class="menu1">
                    <ul>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">LG</a></li>
                        <li><a href="#">Nokia</a></li>
                        <li><a href="#">MI</a></li>
                        <li><a href="#">Vu</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="http://localhost/dbproject/air_conditioner.php"><i class="fa fa-snowflake"></i>AC</a>
                <div class="menu1">
                    <ul>
                        <li><a href="#">Sharp</a></li>
                        <li><a href="#">LG</a></li>
                        <li><a href="#">Mitstubishi</a></li>
                        <li><a href="#">Blue Star</a></li>
                        <li><a href="#">Hitachi</a></li>
                        <li><a href="#">Haier</a></li>
                        <li><a href="#">Samsung</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><i class="fa fa-user"></i>About Us</a>
                <div class="menu1">
                    <ul>
                        <li><a href="#">Misson</a></li>
                        <li><a href="#">Vision</a></li>
                        <li><a href="#">Team</a></li>
                        
                    </ul>
                </div>
            </li>
        </ul>
        </div>
        



        
    </body>
</html>