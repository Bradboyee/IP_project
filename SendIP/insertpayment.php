<?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        session_start();
        include("connect_mysql.php");
          
        // Taking all 5 values from the form data(input)
        $bankname = $POST['bankname'];
        $bankno =$_POST['bankno'];
        $accname = $_POST['accname'];

          
        $sql = "INSERT INTO payment (Mobilebanking_BankName, Mobilebanking_AccID, Mobilebanking_Accname) VALUES ('$bankname', 
            '$bankno','$accname')";
            //update foreign key
          
        if($conn->query($sql) === TRUE){
            $last_id = $conn->insert_id;
            $_SESSION['Payment_ID'] = $last_id;
            $update = "UPDATE customer SET Payment_ID = '$last_id' WHERE Customer_ID = '".$_SESSION["Customer_ID"]."' ";
            if ($conn->query($update) === TRUE){
                include "check.php";
            }
            else{
                echo "<script>location.href='payment.php';alert('Update Error');</script>";
            }
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
                Header("Location: login.php");
        }
 
          
        // Close connection
        mysqli_close($conn);
?>