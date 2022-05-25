<?php
  
  session_start();
  include("connect_mysql.php");
    
  $tel =$_POST['tel'];
  $password =$_POST['password'];
  $status = $_POST['check'];

  if(empty($tel) || empty($password) ||empty($status)){
    echo "<script>location.href='login.php';alert('กรุณากรอกข้อมูลให้ครบ');</script>";
    }

    else {

  if($status == "driver"){//driver login
    $query = "SELECT * FROM driver WHERE Driver_Tel = '".$_POST['tel']."' and Driver_Password = '".$_POST['password']."'";
    $select = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($select)==1){
      $result = $conn->query($query);
      while($row = $result->fetch_assoc()) {
        $_SESSION['Driver_ID'] = $row["Driver_ID"];
        $_SESSION['Driver_Name'] = $row["Driver_Name"];
        $_SESSION['Driver_Tel'] = $row["Driver_Tel"];
        $_SESSION['Driver_Address'] = $row["Driver_Address"];
        $_SESSION['Driver_WorkPlace'] = $row["Driver_WorkPlace"];
        $_SESSION['ATK_ID'] = $row["ATK_ID"];
        $_SESSION['Vaccine_ID'] = $row["Vaccine_ID"];
        $_SESSION['Licence_ID'] = $row["Licence_ID"];
        $_SESSION['Problem_ID'] = $row["Problem_ID"];
      }
      include ("check.php");
    }

    else{
        echo "<script>location.href='login.php';alert('Wrong Password Driver');</script>";
        }
  }



    else{//Custumer login
      
    $query = "SELECT * FROM customer WHERE Customer_tel = '".$_POST['tel']."' and Customer_Password = '".$_POST['password']."'";
    $select = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($select)==1){
      $result = $conn->query($query);
      while($row = $result->fetch_assoc()) {
        $_SESSION['Customer_ID'] = $row["Customer_ID"];
        $_SESSION['Customer_Name'] = $row["Customer_Name"];
        $_SESSION['Customer_Address'] = $row["Customer_Address"];
        $_SESSION['Customer_Tel'] = $row["Customer_Tel"];
        $_SESSION['Customer_Birth'] = $row["Customer_Birth"];
        $_SESSION['Customer_Gender'] = $row["Customer_Gender"];
        $_SESSION['Customer_Email'] = $row["Customer_Email"];
        $_SESSION['Payment_ID'] = $row["Payment_ID"];
      }
      include ("check.php");
    }

    else{
        echo "<script>location.href='login.php';alert('Wrong Password User');</script>";
        }
  }


}
    
  // Close connection
  mysqli_close($conn);
  ?>