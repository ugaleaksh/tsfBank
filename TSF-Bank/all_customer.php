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
    <link rel="stylesheet" href="css\style_cstm.css">
	        <link rel="stylesheet" href="css/style.css">
    <title>ALL CUSTOMERS</title>
</head>
<body>
<nav class="navbar  h-nav ">
                <ul class="navlist v-class">
                    <div class="logo"><img src="images\tranferbank.jpeg" alt="logo"></div>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="cstmlist.php">All Customers</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="transfermoney.php">Transfer Money</a></li>
                    <li><a href="history.php">Transaction History</a></li>
                
                </ul>
                <div class="burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                
            </nav>
    <div class="list">
        <h1>ALL CUSTOMERS</h1>
        <table>
            <table class="transferhistory" border="6" align="center" cellspacing="25">
               <tr>
                    <th class="table-h"><h2>Acc No</th>
                    <th class="table-h"><h2>NAME</th>
                    <th class="table-h"><h2>EMAIL</th>
                    <th class="table-h"><h2>BALANCE</th>
                    <th class="table-h"><h2>TRANSFER</h2></th>
                </tr>
                <?php
                        error_reporting(0);
                        include("connect.php");
                        $query = "SELECT * FROM customer";
                        $data = mysqli_query($conn,$query);
                        $total = mysqli_num_rows($data);
                       
                        if($total!=0)
                        {
                            $result = mysqli_fetch_assoc($data);
                            while($result=mysqli_fetch_assoc($data)){
                                echo "
                                <tr>
                                <td>".$result['accno']."</td>
                                <td>".$result['name']."</td>
                                <td>".$result['email']."</td>
                                <td>".$result['balance']."</td>
                                <td><a href='transfermoney.php'><input type = 'submit' value = 'send money'
                                id = 'sendmoney' ></td>
                                </tr>";
                            }
                            
                        }
                        else
                        {
                            echo "no records found!";
                        }
        ?>
        </table>
       
    </div>
   
  <footer class="copyright">
		<section class="about" id="about">
             <section class="about-right"><h4><center>
            Copyright &copy; Akshay Ugale GRIPAUG21 The Sparks Foundation.
            </h4>
	</section>
	</section>
    </footer> 
</body>

</html>