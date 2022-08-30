<?php
    $a = 'abc123';
    $b = 'pw';
    echo " 매번 변경되는 암호화 결과 : ".crypt($a)."<br/>";
    echo " 암호화 결과가 일정 : ".crypt($a, $b)."<br/>";
?>