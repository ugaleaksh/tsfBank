<!DOCTYPE html>
<?php  
include("connect.php");
error_reporting(0);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    
        <title>TSF bank</title>
    </head>
    <body class="background" id="home">
            <nav class="navbar  h-nav ">
                <ul class="navlist v-class">
                    <div class="logo"><img src="images\tranferbank.jpeg" alt="logo"></div>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="all_customer.php">All Customers</a></li>
                   
                    <li><a href="transfermoney.php">Transfer Money</a></li>
                    <li><a href="history.php">Transaction History</a></li>
                
                </ul>
                <div class="burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                
            </nav>
            <section class= " firstsection" >
                <div class="box-main">
                    <div class="firsthalf">
                        <p class="text-big">Welcome, to TSF Bank!</p>
                        
                    </div>
                </div>
            </section><hr>
            
            <br>
        
        <section >
            <div class="one-t" >
                <img id="transfermoney" height ="300px" width="300px" src="images\transfer.jpg" alt="Transfer money">
                    <div><a href="transfermoney.php"><button class="main-button">Transfer Money</button></a></div>
            </div>
            <div class="one-t">
                <img id="history" height ="300px" width="300px" src="images\history.jpg" alt="Transfer list">
                    <div><a href="history.php"><button class="main-button">View Transfer History</button></a></div>
            </div>
            <div clas="one-t">
                <img sid="customerlist" height ="300px" width="300px" src="images\user.jpg" alt="customerr list">
                     <div><a href="all_customer.php"><button class="main-button">show customers </button></a></div>
            </div>
            <br>
        </section>
        <br><br><br><br>
        <hr>

       
    
        <footer class="copyright">
		<section class="about" id="about">
                   
 	
           <h4><center> Copyright &copy: Akshay Ugale, GRIPAUG21 The Sparks Foundation.</center></h4>
            
        </footer>   
        <script src="js/resp.js"></script>
    </body>
</html>
