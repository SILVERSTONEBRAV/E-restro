<html>
    <head>
    </head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        
        background-position: center;
        font-family: sans-serif;
    }
    .a{
        top: 80px;
        background-color: #fff;
        margin-right: 20px;
        height: 60px;
        width: 60px;
        border-radius: 30px;
        justify-content: center;
        align-items: center;
    }
    .menu-bar{
        width: 100%;
        background-color: red;
        text-align: center;
        text-decoration: none;
    }
    .menu-bar ul{
        display: inline-flex;
        list-style: none;
        color: #fff;
    }
    .menu-bar ul li{
        width: 140px;
        margin: 20px;
        padding: 15px;
    }
    
    .menu-bar ul li a{
        text-decoration: none;
        color: #fff;
    }
    .active, .menu-bar ul li:hover {
        background: rgb(100, 10, 10);
        border-radius: 3px;       
    }
    .menu-bar .fa{
        margin-right: 8px;

    }
    .sub-menu{
        display: none;
    }
    .menu-bar ul li:hover .sub-menu{
        display: block;
        position: absolute;
        background-color: red;
        margin-top: 15px;
        margin-left: -15px;

    }
    .menu-bar ul li:hover .sub-menu ul{
        display: block;
        margin: 10px;
    }
    .menu-bar ul li:hover .sub-menu ul li{
        width: 150px;
        padding: 10px;
        border-bottom: 1px dotted #fff;
        background: transparent;
        border-radius: 0;
        text-align: left;

    }
    .menu-bar ul li:hover .sub-menu ul li:last-child{
        border-bottom: none;
    }
    .menu-bar ul li:hover .sub-menu ul li a:hover{
        color: #b2ff00;
    }

    </style>
<body>
    <div class="menu-bar">
    <ul>
    <li class="active"><i class="fa fa-home" aria-hidden="true"></i><a href="#">Home</a></li>
    <li><i class="fa fa-cutlery" aria-hidden="true"></i><a href="#">Categories</a>
<div class="sub-menu">
    <ul>
        <li><i class="fa fa-coffee" aria-hidden="true"></i><a href="breakfast.php">Breakfast</a></li>
        <li><i class="fa fa-gift" aria-hidden="true"></i><a href="lunch.php">Lunch</a></li>
        <li><i class="fa fa-bed" aria-hidden="true"></i><a href="supper.php">Supper</a></li>
        <li><i class="fa fa-shopping-basket" aria-hidden="true"></i><a href="snacks.php">Snacks</a></li>       

    </ul>
</div>

</li>
    <li><i class="fa fa-spinner" aria-hidden="true"></i><a href="recipes.php">Recipes</a></li>
    <li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="contacts.php">Contacts</a></li>
    <li><i class="fa fa-power-off" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
    <li><i class="fa fa-user" aria-hidden="true"></i><a href="profile.php">Profile</a></li>
    </ul>
</div>

</div>
<a href=""><img src=""></a>
</body>
</html>