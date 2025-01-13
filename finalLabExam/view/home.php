<?php
session_start();
?>
<html>
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome Home! <?php echo $_SESSION["username"] ?></h1>
        
        <a href="../controller/logout.php">logout</a>
        
</body>
</html>


