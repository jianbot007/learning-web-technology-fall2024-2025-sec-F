<?php
    session_start();
    if(isset($_SESSION['loginflag'])){
?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome Home! <?php echo $_SESSION['username']?></h1>
        
        <?php
        
        echo "Username : ". $_SESSION['username'];
        echo "<br>";
        echo "Blood Group : ".  $_SESSION['blood'];
        echo "<br>";
        echo "Email : " . $_SESSION['email']; 
        echo "<br>";
        ?>

        <a href="logout.php">Logout</a>
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>

