
<?php
  require_once('config/config.php');
  

  $sql = "SELECT * FROM m_products  ORDER BY `m_products`.`prod_code` DESC ";
  $all_m_products = $mysqli->query($sql);
  ?> 
    <title> Mealify</title>
    </head>
    <link rel="shortcut icon" type="x-icon" href="Admin/assets/images/brand/images.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            background: url(assets/images/brand/background.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        main{
            max-width: 1500px;
            width: 95%;
            margin: 30px auto;
            display: flex;
            justify-content: space-between;
            margin: auto;
        }
        .header{
            width: 100%;
            height: 80px;
            background-color: red;


        }
        .search{
            margin-left: 300px;
            width: 300px;
            background-color: #fff;
            height: 45px;
            border-radius: 45px;
            display: flex;
            align-items: center;
            justify-content: space-between; 
            padding: 15px;
        }
        .search input{
            width: 440px;
            border: none;
            outline: none;
            height: 40px;
        }
        .cart{
            margin-left: 400px;
            display: flex;
            background-color: #fff;
            justify-content: space-between;
            align-items: center;
            padding: 7px 10px;
            border-radius: 3px;
            width: 80px;
            font-size: 18px;

        }
        .cart p{
            
            height: 22px;
            width: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 50%;
            background-color: red;
            color: #fff;

        }
        .card{
            width: 240px;
            display: inline-block;
            text-align: center;
            height: 400px;
            border: 1px solid lightgrey;
            margin: 13px;


        }
        .card .image{
            height: 50%;
            margin-bottom: 20px;

        }
        .card .image img{
            width: 100%;
            height: 100%;
            object-fit: cover;

        }
        .card .caption{
            margin-top: 20px;
            padding-left: 1rem;
            text-align: left;
            line-height: 3em;
            height: 25%;

        }
        .card .caption p{
            font-size: 18px;
            
        }
        del{
            text-decoration: line-through;
        }
        .card .caption .rate{
            display: flex;

        }
        .card .caption .rate i{
            color: gold;
            margin-left: 2px;
        }
        .card a{
            width: 50%;
        }
        .card button{
            border: 2px solid black;
            padding: 15px;
            width: 50%;
            cursor: pointer;
            margin-left: 50px;
            margin-top: 2em;
            font-weight: bold;
            position: relative;
        }
        .card button::before{
            content:" " ;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 0;
            background-color: black;
            transition: all .5s;
            margin: 0;


        }
        .card button::after{
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 0;
            background-color: black;
            transition: all .5s;
        }
        .card button:hover::before{
            width: 30%;

        }
        .card button:hover::after{
            width: 30%;
        }


        

    </style>
    <body>
        <?php
        require_once('partials/head.php');
        ?>
<div class="top-bar">
    
</div>
    <div class="header">
    <div class="search"> 
       <input type="search" placeholder="Search">
       <i class="fa fa-search" aria-hidden="true"></i> 
    
    <div class="cart">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    <p>0</p>
 
   </div>
   
 
   </div>
    </div>   
    <?php
        while($row = mysqli_fetch_assoc($all_m_products)){
        ?>
   <div class="card">
    <div class="image">
        <img src="<?php echo $row["prod_img"]; ?>">
       
    </div>
    <div class="caption">
        <p class="rate">
       <i><iconify-icon icon="material-symbols:star"></iconify-icon></i>
       <i><iconify-icon icon="material-symbols:star"></iconify-icon></i>
       <i><iconify-icon icon="material-symbols:star"></iconify-icon></i>
       <i><iconify-icon icon="material-symbols:star"></iconify-icon></i>
       <i><iconify-icon icon="material-symbols:star"></iconify-icon></i>

        </p>
        <p class="product_name"><?php echo $row["prod_name"]; ?></p>
        <p class="price"><b>Ksh.<?php echo $row["prod_price"]; ?></b></p>
        <p class="discount"><del><b>Ksh.<?php echo $row["prod_discount"]; ?></b></del></p>
    </div>
    <button class="add">Add to cart</button>
   </div>
    <?php
    }
    ?>
    </body>
</html>