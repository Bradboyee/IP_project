<?php
    include "connect_mysql.php";
    session_start();
    $sql = "SELECT*FROM driver";
    $result = $conn->query($sql);
    ?>