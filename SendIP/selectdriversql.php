<?php
    include "connect_mysql.php";
    $sql = "SELECT Driver.Driver_ID, Driver.Driver_Name, ATK.ATK_DetectDate FROM ATK INNER JOIN Driver ON ATK.ATK_ID = Driver.ATK_ID";
    $result = $conn->query($sql);
    ?>