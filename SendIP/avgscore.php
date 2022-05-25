<?php
    include "connect_mysql.php";
    session_start();
    $sql = "SELECT Driver.Driver_ID, Driver.Driver_Name, AVG(Review.Review_Score) AS AvgOfReview_Score FROM Driver INNER JOIN( Review INNER JOIN Trip ON Review.Review_ID = Trip.Review_ID ) ON Driver.Driver_ID = Trip.Driver_ID GROUP BY Driver.Driver_ID, Driver.Driver_Name";
    $result = $conn->query($sql);
    ?>