<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 검색 결과</title>
    <style type="text/css">
        body,input,button{font-size: 20px;}
        .id_txt{font-weight: bold; color: blue;}
    </style>
    <script type="text/javascript">
        function return_id(){
            opener.document.getElementById("u_id").value = "admin";
            window.close();
        };
    </script>
</head>
<body>
    <p>
        입력하신 "admin"은 사용할 수 있는 ID입니다.
    </p>
    <p>
        <a href="#" onclick="return_id()">사용하기</a>
        <a href="#" onclick="history.back()">다시 검색</a>
    </p>
</body>
</html>