<?php
require_once __DIR__ . '/join.php';
define('DEBUG', true);


    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];

    echo "<h3> → 폼에 입력된 정보를 POST 방식으로 웹브라우저에 출력 ←</h3>";
    echo "<hr>";
    echo "아이디......<b>$id</b> <br />";
    echo "비밀번호......<b>$pw</b> <br />";
    echo "이 름......<b>$name</b> <br />";
    echo "이메일......<b>$email1@$email2</b> <br />";
    echo "<hr>";
?>