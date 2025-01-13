<?php
include('../model/usermodel.php');
?>

<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
    <h2>User List </h2>
    <a href="AdminHome.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>
    <form method="GET" action="">
        <input type="text" name="search" placeholder="Search users by username"  value="" />
        <button type="submit">Search</button>
    <table border="1"> 
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone No</th>

            <th>Action</th>
        </tr>
        
        <?php   
        $users = getAllUser(); 
        
    
        if (!empty($users)) {
            foreach ($users as $user) {
        ?>
            <tr>
                <td><?php echo ($user['id']); ?></td>
                <td><?php echo ($user['username']); ?></td>
                <td><?php echo ($user['email']); ?></td>
                <td><?php echo ($user['phone']); ?></td>
                <td>
                    <a href='../view/edit.php?id=<?php echo $user['id']; ?>'>EDIT</a> |
                    <a href='../controller/delete.php?id=<?php echo $user['id']; ?>'>DELETE</a> 
                </td>
            </tr>

        <?php
            }
        } else {
            echo "<tr><td colspan='4'>No users found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
