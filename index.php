<html>
    <head>
    <title> Mealify</title>
    </head>
    <link rel="shortcut icon" type="x-icon" href="Admin/assets/images/brand/images.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&family=Quintessential&display=swap" rel="stylesheet">
    <style>
        body{
            background: url(Users/assets/images/brand/background.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: 100%;
            image-resolution: 1280px;

        }
       
     nav
{
    flex: 1;
    text-align: right;
    
}
nav ul 
{
    display: inline-block;
    list-style: none;

}
nav ul li
{    text-decoration: none;
    padding: 3px;
    max-width: 150vh;
    top: 1%;
    height: 35px;
    background: linear-gradient(orange,purple);
    display:inline-block;
    font-size: 22px;
    align-items: center;
    line-height: 35px;
    border-radius: 20px;
    margin: 15px;
    border: 3px deepskyblue solid;
}
nav ul li a
{
    text-decoration: none;
    font-size: 25px;
    color: deepskyblue;
    
    font-weight: bolder;
} 

.title{
    position: relative;
    background: linear-gradient(90deg,#ff0000,#ff0000,#ff0000);
    background-size: 98%;
    font-size: 54px;
    color: maroon;
    opacity: none;
    background-repeat: no-repeat;
    -webkit-text-fill-color: rgba(255, 255, 255, 0);
    -webkit-background-clip: text;
    font-family: 'Quintessential', serif;
    align-items: center;
    display: flex;
    justify-content: center;
    list-style: none;
    height: 70vh;
}


.flex-container{
    width: auto;
    height: 35px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    font-family: sans-serif;
    margin-top: 20px;
}

.flex-box{
            text-decoration: none;
            height: 50px;
            background: red;
            border: 5px solid deepskyblue;
            padding: 5px;
            line-height: 35px;
            max-width: 300vh;
            font-size: 25px;
            cursor: pointer;
            margin: 30px;
            align-items: center;
            margin-left: 50px;
            margin-top: 10px;
            font-weight: bold;
            border-radius: 20px;
            position: relative;
        }
        .flex-box::before{
            content:" " ;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 0;
            background-color: deepskyblue;
            transition: all .5s;
            margin: 0;


        }
        .flex-box::after{
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 0;
            background-color: deepskyblue;
            transition: all .5s;
        }
        .flex-box:hover::before{
            width: 20%;

        }
        .flex-box:hover::after{
            width: 20%;
        } 
.flex-box a {
    text-decoration: none;
    font-weight: bolder;
    color: black;

}    
.social-links{
    font-size: 30px;
    background: darkgray;
    display: flex;
    align-items: center;
    height: 40px;
    margin-top: 7%;
    width: auto;
    position: absolute;
    margin-left: 300px;
    color: default;
    border-radius: 17px;
    text-decoration: none;

}  
.social-links a{
    text-decoration: none;

}
.fa-brands{
    align-items: center;
    display: flex;
    margin: 50px;
    justify-content: center;
    height: 40px;
    width: auto;
    color: blue;
    


}
.fa-x-twitter{
    color: black;

}
.fa-whatsapp{
    color: green;
}
.fa-facebook{
    color: blue;
}
.fa-instagram{
    color: magenta;
}
.fa-tiktok{
    color: black;
}
.fa-linkedin{
    color: black;
}

    </style>
    <body>
        
       <div class="content-wrapper">
        <div class="title">
        <h1>E-Restaurant</h1>
        </div>
        <div class="flex-container">
        <div class="flex-box"><ul1><a href="Admin/">Admin Login</a></ul1>
       </div> 
        <div class="flex-box"><ul1><a href="Users/">Customer Login</a></ul1>
       </div>
    </div>
       </div>
       <footer>
 </div>  
        <div class="social-links">
        <a href="https://twitter.com/BravSilverstone"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="https://wa.me/+254795615179"><i class="fa-brands fa-whatsapp"></i></a> 
       <a href="https://www.facebook.com/profile.php?id=100078706453765"><i class="fa-brands fa-facebook"></i></a>
       <a href="https://www.instagram.com/s.i.l.v.e.r.s.t.o.n.e_b.r.a.v?igsh=YzljYTk1ODg3Zg=="><i class="fa-brands fa-instagram"></i></a>
       <a href="https://vm.tiktok.com/ZM69gdpWY/"><i class="fa-brands fa-tiktok"></i></a>
       <a href="https://www.linkedin.com/in/bravine-munialo-8b04bb242"><i class="fa-brands fa-linkedin"></i></a>
    </div>
    
</footer>
        
        
    </body>
</html>