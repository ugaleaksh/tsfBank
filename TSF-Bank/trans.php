<?php
include("connect.php");
error_reporting(0);
if(isset($_POST['submit'])){

    
    $ui =$_POST['accno'];
    $un =$_POST['name'];
    $am =$_POST['balance'];
    $pc =$_POST['remark'];
    $pn =$_POST['transfer'];
     if($ui!="" && $un!="" &&  $am!="" && $pc!="" && $pn!=""){

    $query = "INSERT INTO transferhistory VALUES('$ui','$un','$am','$pc','$pn')";
    $data = mysqli_query($conn,$query);


    if($data){
        echo '<script>alert("TRANSACTION SUCCESSFULL!");

        </SCRIPT>';
	header("location:history.php");

	
    }
}
    else{
        echo "failed to insert into db";
    }
}
?>