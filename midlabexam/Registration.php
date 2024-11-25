<?php

if(isset($_POST['submit'])){

?>

<html>
<head>
    <title>Signup</title>
</head>
<body>

    <form method="post" action="Regi_check.php" enctype="">
        <fieldset>
        <legend>Signup</legend>    
        <fieldset>
            <legend>Name</legend>
            <input type="text" name="username" value="" placeholder=""/><hr>   
        </fieldset>
        <fieldset>
            <legend>Email</legend>
            <input type="text" name="email" value="" placeholder=""/><hr>     
        </fieldset>
        <fieldset>
            <legend>Password</legend>
                <input type="Password" name="password" value="" placeholder=""/><hr>
        </fieldset>
        <fieldset style="width: 50%;">
        <legend>BLOOD GROUP</legend>
            <table>
                <tr>
                    <td colspan="3">
                        <select name="blood">
                            <option value="" disabled selected>Select Group</option>                            
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="Other">Other</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
             </table>  
    </fieldset>
    <br>
    <br>
    <input type="submit" name="submit" value="Submit" />
    </fieldset>
</form>
</body>
</html>

<?php
}
else {
    header('location: login.html');
}
?>