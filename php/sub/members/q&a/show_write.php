<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css">
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/members/q&a/show_write.css">
</head>
<body>
    <?php include "../../../common/header.php" ?>
    <main class="main">
        <section class="content1">
            <h1>INFO</h1>
            <p>질문을 남겨주시면 친절하고 신속한 답변드리겠습니다.</p>
            <div class="lnb">
                <button class="tit_btn tit1" type="button" onclick="location.href='../notice/notice.html'">NOTICE</button>
                <button class="tit_btn tit2" type="button" onclick="location.href='q&a.html'">Q&A</button>
            </div>
        </section>

        <div class="write_wrap">
            <div class="write_box">
                <form name="write" action="post" method="post">
                        <table>
                            <caption class="blind">게시글 보기</caption>
                            <thead>
                                <tr class="write_title">
                                    <th>문의사항입니다.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="td_line">
                                    <td class="icon1">glsy1150</td>
                                    <td class="icon2">202-10-11</td>
                                    <td class="icon3">7</td>
                                </tr>
                                <tr class="tb_line"></tr>
                                <tr class="content">
                                    <td>제품 배송 언제 오나요?</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn_left">
                            <button class="riv">수정</button>
                            <button class="del">삭제</button>
                        </div>
                        <div class="btn_right">
                            <br><button class="btn btn_1" type="button">글 작성</button>
                            <button class="btn btn_2" type="button" onclick="location.href='q&a.php'">목록보기</button>
                        </div>
                </form>
            </div>
        </div>

        <div class="btm_wrap">
            <div class="btm_box">
                <table>
                    <caption class="blind">게시글 목록</caption>
                    <thead>
                        <tr class="btm_title">
                            <th class="btn_con">CONTENT</th>
                            <th class="btn_sub">NAME</th>
                            <th class="btn_sub">DATE</th>
                            <th class="btn_sub">HITS</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr class="btm_val">
                                <td>문의사항입니다</td>
                                <td>glsy1150</td>
                                <td>2022-10-11</td>
                                <td>7</td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>