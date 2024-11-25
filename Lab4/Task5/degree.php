<?php


if (isset($_POST['submit'])) {
    if (isset($_POST['check_list']) && count($_POST['check_list']) >= 2) {
        echo "Valid Selection";
    } else {
        echo "Invalid : Please select at least 2 options.";
    }
}
?>