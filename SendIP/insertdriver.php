       <?php
  
        session_start();

        include("connect_mysql.php");
          
        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['name'];
        $tel =$_REQUEST['tel'];
        $address = $_REQUEST['address'];
        $workplace =  $_REQUEST['workplace'];
        $password =$_REQUEST['password'];
        $select = mysqli_query($conn, "SELECT * FROM driver WHERE Driver_Tel = '".$_POST['tel']."'");

        if(empty($tel) || empty($name) || empty($address) || empty($workplace) || empty($password)){
            echo "<script>location.href='registerdriver.php';alert('กรุณากรอกข้อมูลให้ครบ');</script>";
        }
        elseif(mysqli_num_rows($select)){
            echo "<script>location.href='registerdriver.php';alert('เบอร์โทรนี้ได้ใช้งานไปแล้ว');</script>";
        }

        else{
        
          
        $sql = "INSERT INTO driver (Driver_Name,Driver_Tel,Driver_Address,Driver_WorkPlace,Driver_Password) VALUES ('$name', 
            '$tel','$address','$workplace','$password')";
          
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