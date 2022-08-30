<?php
    if($_POST['id'] == 'server') {
        if($_POST['pw'] == '1234') {
            echo 'Login Succeed';
        }else {
            echo 'Password Wrong';
        }
    }else {
        echo 'ID Wrong';
    }

?>