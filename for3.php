<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome">
    <title>php에서 for문을 이용하여 게시판만들기</title>
</head>
<body>
    <h1> > 게시판 목록 보기 </h1>
    <table border="1" width="600">
        <tr bgcolor="##ccccc" align="center">
            <th>번호</th>
            <th>제목</th>
            <th>글쓴이</th>
            <th>날짜</th>
        </tr>
        <?php
            $num = 1;
            $name = array('권OO','김OO','남OO','노OO','박OO','손OO');
            $date = '2021/10/01';
            for($i = 0; $i <= 5; $i++) {
                $title = "게시판 제목" . $num;
                echo("<tr>
                            <td width='50' align='center'>$num</td>
                            <td>$title</td>
                            <td width='50'>$name[$i]</td>
                            <td width='80'>$date</td>
                       </tr>");
                $num++;
            }
        ?>
    </table>
</body>
</html>