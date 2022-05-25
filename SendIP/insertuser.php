        <?php

        include("connect_mysql.php");
          
        // Taking all 5 values from the form data(input)
        $email =  $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $name = $_REQUEST['name'];
        $password =$_REQUEST['password'];
        $birthday =$_REQUEST['birthday'];
        $tel =$_REQUEST['tel'];
        $gender =$_REQUEST['check'];
        $check =mysqli_query($conn,"SELECT * FROM customer WHERE customer_tel = '".$_POST['tel']."'");

        if(empty($email) || empty($address) || empty($name) || empty($password) || empty($birthday) || empty($tel) || empty($gender)){
            echo "<script>location.href='registeruser.php';alert('กรุณากรอกข้อมูลให้ครบ');</script>";
        }
        elseif(mysqli_num_rows($check)){
            echo "<script>location.href='registeruser.php';alert('เบอร์โทรนี้ได้ใช้งานไปแล้ว');</script>";
        }
        else{

          
        $sql = "INSERT INTO customer (	Customer_Name,Customer_Address,Customer_Tel,Customer_Birth,Customer_Gender,Customer_Email,Customer_Password	) VALUES ('$name', 
            '$address','$tel','$birthday','$gender','$email','$password')";
          
        if(mysqli_query($conn, $sql)){
            echo "<script>location.href='login.php';alert('สมัครสมาชิกสำเร็จ');</script>";
  
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }
 
          
        // Close connection
        mysqli_close($conn);
        ?>