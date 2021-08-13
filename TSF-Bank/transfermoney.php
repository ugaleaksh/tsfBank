
<?php  
include("connect.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_transfer.css">
<link rel="stylesheet" href="css/style.css">
    <title>TRANSFER MONEY</title>
</head>
<body>
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
            
<form class="form-bg" action="trans.php" method="POST">
                <h1> TRANSFER MONEY </h1><br>
                <div id="user">
                    <h2 class="name">Account No</h2>
                        <input type="text" name="accno" placeholder="60115800***" required>
                </div>

                <div>
                    <h2 class="name">Name</h2>
                        <input type="text" name="name" placeholder="Akshay Ugale"  required>
                </div>
                <div>
                    <h2 class="name">Amount</h2>
                        <input type="number" name="balance" placeholder="25000" required>
                </div>
                <div>
                    <h2 class="name">Remark</h2>
                        <input type="text" name="remark" placeholder="eg. friend" required>
                </div>

                <div>
                        <h2 class="name">Transfer to</h2>
                        <select name="transfer" required>
			    <option value="Akshay Ugale"><h3>Akshay Ugale</option>
                            <option selected hidden value=""><h3>user name</option>
                            <option value="Sunny Gaikwad"><h3>Sunny Gaikwad</option>
                            <option value="Gayu Chimne"><h3>Gayu Chimne</option>
                            <option value="Monika Chavan"><h3>Monika Chavan</option>
                            <option value="Namdev Karle"><h3>Namdev Karle</option>
                            <option value="Pavan chavan"><h3>Pavan Chavan</option>
                            <option value="Prashant Dhere"><h3>Prashant Dhere</option>
                            <option value="Prasad Sawant"><h3>Prasad Sawant</option>
                            <option value="Gauri Deshmukh"><h3>Gauri Deshmukh</option>
                           
                        </select>
                    
                </div>

                <div class="send-money">
                    <button type="submit" name="submit">SEND MONEY</button>
                </div>
            </form>
            
            
            
            <footer class="copyright">
            <h4>
            Copyright &copy; Akshay Ugale GRIPAUG21 The Sparks Foundation.
            </h4>
    </footer> 
</body>
</html>
