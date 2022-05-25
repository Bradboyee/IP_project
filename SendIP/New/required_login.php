<head>
        <title>Logout</title>
</head>
<?php
    session_start();
    
    if(! isset($_SESSION['driverid'])){
        header("Location: login.php");
    }

    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-60, '/');
    }
    session_unset();
    session_destroy();
    header("Location: login.php");
?>