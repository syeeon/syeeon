<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/members/q&a/q&a.css">
    <script type="text/javascript" src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../../js/common/basic.js"></script>
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
        <section class="table_wrap">
            <table class="table">
                <caption class="blind">문의사항</caption>
                <thead>
                    <div class="title">
                        <th class="table_s">번호</th>
                        <th class="table_l">제목</th>
                        <th class="table_s">작성자</th>
                        <th class="table_m">문의날짜</th>
                        <th class="table_s">문의상태</th>
                    </div>
                </thead>
                <tbody>
                    <tr>
                        <td>5086</td>
                        <td class="tb_left">배송문의</td>
                        <td>sy****</td>
                        <td>2022.09.01</td>
                        <td><button type="button">답변대기</button></td>
                    </tr>
                    <tr>
                        <td>5085</td>
                        <td class="tb_left">배송문의</td>
                        <td>lo******</td>
                        <td>2022.09.01</td>
                        <td><button type="button">답변대기</button></td>
                    </tr>
                    <tr>
                        <td>5084</td>
                        <td class="tb_left">배송문의</td>
                        <td>th*****</td>
                        <td>2022.09.01</td>
                        <td><button type="button">답변완료</button></td>
                    </tr>
                    <tr>
                        <td>5083</td>
                        <td class="tb_left">배송문의</td>
                        <td>pi**</td>
                        <td>2022.08.31</td>
                        <td><button type="button">답변완료</button></td>
                    </tr>
                    <tr>
                        <td>5082</td>
                        <td class="tb_left">배송문의</td>
                        <td>su****</td>
                        <td>2022.08.31</td>
                        <td><button type="button">답변완료</button></td>
                    </tr>
                    <tr>
                        <td>5081</td>
                        <td class="tb_left">배송문의</td>
                        <td>dy****</td>
                        <td>2022.08.31</td>
                        <td><button type="button">답변완료</button></td>
                    </tr>
                    <tr>
                        <td>5080</td>
                        <td class="tb_left">배송문의</td>
                        <td>nh****</td>
                        <td>2022.08.31</td>
                        <td><button type="button">답변완료</button></td>
                    </tr>
                    <tr>
                        <td>5079</td>
                        <td class="tb_left">배송문의</td>
                        <td>ka*****</td>
                        <td>2022.08.30</td>
                        <td><button type="button">답변완료</button></td>
                    </tr>
                    <tr>
                        <td>5078</td>
                        <td class="tb_left">배송문의</td>
                        <td>ks***</td>
                        <td>2022.08.30</td>
                        <td><button type="button">답변완료</button></td>
                    </tr>
                    <tr>
                        <td>5077</td>
                        <td class="tb_left">배송문의</td>
                        <td>au*****</td>
                        <td>2022.08.30</td>
                        <td><button type="button">답변완료</button></td>
                    </tr>
                </tbody>
            </table>
        
            <div class="page_btn">
                <button class="btn" type="button">1</button>
                <button class="btn"  type="button">2</button>
                <button class="btn"  type="button">3</button>
                <button class="btn"  type="button">4</button>
                <button class="btn"  type="button">5</button>
                <button class="btn"  type="button">6</button>
                <button class="btn"  type="button">7</button>
                <button class="btn"  type="button">8</button>
                <button class="btn"  type="button">9</button>
                <button class="btn"  type="button">10</button>
            </div>
            <section class="bottom_btn">
                <select class="btn1" name="select" id="select">
                    <option value="" selected>선택</option>
                    <option value="">이름</option>
                    <option value="">제목</option>
                    <option value="">내용</option>
            </select>      

            <form name="" action="" method="" class="btn2">
                <fieldset>
                    <legend class="blind">검색</legend>
                    <input type="text">
                    <button type="button">검색</button>
                </fieldset>
            </form>
        </section>
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>