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
    <title>Transaction History</title>
    <link rel="stylesheet" href="css/style_cstm.css">
<link rel="stylesheet" href="css/style.css">
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
            
<div class="list">
        <h1>TRANSACTION HISTORY</h1>
        <table>
            <table class="transferhistory" border="6" align="center" cellspacing="20">
                <tr>
		   
                    <th class="table-h"><h2>Acc No</th>
                    <th class="table-h"><h2>NAME</th>
                    <th class="table-h"><h2>AMOUNT</th>
                    <th class="table-h"><h2>REMARK</th>
                    <th class="table-h"><h2>TRANSFERED TO</th>
                </tr>
<?php
                        error_reporting(0);
                        include("connect.php");
                        $query = "SELECT * FROM transferhistory";
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
                                <td>".$result['balance']."</td>
                                <td>".$result['remark']."</td>
                                <td>".$result['transfer']."</td>
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
    </div>
   
    <footer class="copyright">
            <h4><center>
            Copyright &copy; Akshay Ugale GRIPAUG21 The Sparks Foundation.
    </footer> 
</body>
</html>