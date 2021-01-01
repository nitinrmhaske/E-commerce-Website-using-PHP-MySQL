<?php
    include_once('connection.php');
    $q="select * from products where category='laptop' and category is not null and name is not null and mname is not null and speci is not null and ratings is not null and price is not null limit 0,50;";
    $result=mysqli_query($conn,$q);
?>

<html>
    <title>
        All Laptops
    </title>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" href="style2.css"> 

<body>
    <div class="table-box">
    <table>
        
        <h2 align="center" >All Laptops</h2>
        <div class="table-row table-head">
        <t>
        <div class="table-cell"><p>Category</p></div>
        <div class="table-cell"><p>Company Name</p></div>
        <div class="table-cell"><p>Model Name</p></div>
        <div class="table-cell"><p>Specifications</p></div>
        <div class="table-cell"><p>Ratings</p></div>
        <div class="table-cell"><p>Price</p></div>
        </t>
        </div>

        <?php
            while($rows=$row = $result -> fetch_assoc())
            {
        ?>      
                <div class="table-row">
                <t>
                    <div class="table-cell"><p><?php echo $rows['category']; ?></p></div>
                    <div class="table-cell"><p><?php echo $rows['name']; ?></p></div>
                    <div class="table-cell"><p><?php echo $rows['mname']; ?></p></div>
                    <div class="table-cell"><p><?php echo $rows['speci']; ?></p></div>
                    <div class="table-cell"><p><?php echo $rows['ratings']; ?></p></div>
                    <div class="table-cell"><p><?php echo $rows['price']; ?></p></div>
                </t>  
                </div>
        <?php        
            }
        ?>

    </table>
    </div>
</body>
</html>