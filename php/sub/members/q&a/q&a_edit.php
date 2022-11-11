<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 수정</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/members/q&a/g&a_edit.css">
    <script type="text/javascript" src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../../js/common/basic.js"></script>
    <script type="text/javascript">

        function formCheck(){
            var pwd = document.getElementById("pwd")
            if(!pwd.value){
                var err = document.getElementById("err_pwd")
                err.innerHTML = "\* 비밀번호를 입력해주세요."
                pwd.focus();
                return false;
            }

            if(pwd.value){
                window.open("show_write.html")
            }
        }
    </script>
</head>
<body>
    <?php include "../../../common/header.php" ?>
    <main class="main">
        <section class="content1">
            <h1>INFO</h1>
            <p>질문을 남겨주시면 친절하고 신속한 답변드리겠습니다.</p>
            <div class="lnb">
                <button class="tit_btn tit1" type="button" onclick="location.href='../notice/notice.php'">NOTICE</button>
                <button class="tit_btn tit2" type="button" onclick="location.href='q&a.php'">Q&A</button>
            </div>
        </section>

        <div class="correct">
            <form name="formCheck" action="" method="post" onsubmit="return formCheck()">
                <fieldset>
                    <legend class="blind">비밀번호 입력</legend>
                    <div class="input_box">
                        <label for="pwd" class="title_pwd">비밀번호</label>
                        <span class="text_wrap">
                            <input type="password" id="pwd" class="pwd">
                            <span id="err_pwd" class="err_txt" ></span>
                        </span>
                    </div>
                    <div class="btn_box">
                        <button class="btn_1" type="submit">확인</button>
                        <button class="btn_2" type="button">취소</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>   
    <?php include "../../../common/footer.php" ?>
</body>
</html>