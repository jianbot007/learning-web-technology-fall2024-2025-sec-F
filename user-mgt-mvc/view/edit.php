<?php

include('../model/usermodel.php');


session_start();


if (isset($_REQUEST['id'])) {
    $ID_to_edit = $_REQUEST['id'];

 
    $user = getUser($ID_to_edit); 
    
    if ($user) {
        $_SESSION['idedit'] = $ID_to_edit; 
        ?>
        <html>
        <head>
            <title>Edit User</title>
        </head>
        <body>
            <h2>Edit User</h2>
            <form method="post" action="../controller/update.php">
                Username: <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" /> <br>
                Password: <input type="password" name="password" value="<?= htmlspecialchars($user['password']) ?>" /> <br>
                Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" /> <br>
                <input type="submit" name="submit" value="Update" />
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "User not found!";
    }
} else {
    echo "Invalid request!";
}
?>
