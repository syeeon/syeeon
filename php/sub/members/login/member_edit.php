<?php
include '../../inc/session.php';

$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];

include '../../inc/dbcon.php';

$sql = "select * from members where idx = '$login_idx';";

$send = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($send);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css">
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/join/join.css">
    <script type="text/javascript" src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../../js/common/basic.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="../../../../js/sub/join.js"></script>
</head>
<body>
<?php include "../../../common/header.php" ?>
    <main id="main" class="main">
        <section class="join_box">
            <section class="content1">
                <h1>EDIT ACCOUNT</h1>
            </section>
            <section class="content2">
                <form name="" action="insert.php" method="post" onsubmit="return formCheck()">
                    <fieldset>
                        <legend class="blind">정보수정</legend>
                            <h2 class="title">회원 정보</h2>
                                <div class="input_box">
                                <input type="hidden" name="idx" value="<?php echo $array["login_idx"]; ?>">
                                    <label for="u_name" class="c_title">이름</label>
                                     <p><?php echo $login_name; ?></p>
                                </div>
                
                                <div class="input_box">
                                    <label for="u_id" class="c_title">아이디</label>
                                    <span class="text_wrap">
                                        <input type="text" id="u_id" name="u_id" class="txt_box">
                                        <button type="button" class="chk_btn" onclick="idCheck()">중복 확인</button>
                                        <br><span class="exp">아이디는 4~12자만 입력이 가능합니다.</span>
                                        <span id="err_id" class="err_txt"></span>
                                    </span>
                                </div>

                                <div class="input_box">
                                    <label for="pwd" class="c_title">비밀번호</label>
                                    <span class="text_wrap">
                                        <input type="text" id="pwd" name="pwd" class="txt_box">
                                        <span class="exp">비밀번호는 4~16자로 입력해 주세요.</span>
                                        <span id="err_pwd" class="err_txt"></span>
                                    </span>
                                </div>


                                <div class="input_box">
                                    <label for="pwd_chk" class="c_title">비밀번호 확인</label>
                                    <span class="text_wrap">
                                        <input type="text" id="pwd_chk" name="pwd_chk" class="txt_box">
                                        <span id="err_pwd_chk" class="err_txt"></span>
                                    </span>
                                </div>
                                
                                <div class="input_box">
                                    <label for="mobile" class="c_title">연락처</label>
                                    <span class="text_wrap">
                                        <input type="text" id="mobile" name="mobile" class="txt_box">
                                        <span class="exp">" - " 없이 숫자만 입력해주세요.</span>
                                        <span id="err_mobile" class="err_txt"></span>
                                    </span>
                                </div>

                                <div class="input_box">
                                    <label for="address1" class="c_title">우편번호</label>
                                    <input type="text"  id="sample6_postcode" name="sample6_postcode" placeholder="우편번호" size="8px" class="short_txt_box">
                                    <button type="button" class="chk_btn" onclick="sample6_execDaumPostcode()" value="우편번호 찾기">우편번호 검색</button>
                                </div>

                                <div class="input_box"> 
                                    <label for="sample6_address" class="c_title">기본주소</label>
                                    <input type="text" id="sample6_address" placeholder="주소" name="sample6_address" class="txt_box">
                                </div>
                                <div class="input_box">
                                    <label for="sample6_detailAddress" class="c_title">상세주소</label>
                                    <input type="text" id="sample6_detailAddress" name="sample6_detailAddress"  placeholder="상세주소" class="txt_box">
                                </div>


                                <div class="input_box">
                                    <label for="email_id" class="c_title">이메일</label>
                                    <span class="text_wrap">
                                        <input type="text" id="email_id" name="email_id" size="12" class="txt_box"> @
                                        <input type="text" id="email_dns" name="email_dns" size="12" class="txt_box">
                                        <select  id="email_sel" onchange="change_email()" class="txt_box">
                                            <option value="">직접입력</option>
                                            <option value="naver.com" class="box" >네이버</option>
                                            <option value="hanmail.net">다음</option>
                                            <option value="gmail.com">구글</option>
                                        </select>
                                        <span id="err_email" class="err_txt"></span>
                                    </span>
                                </div>

                                <div class="input_box">
                                    <label for="birth" class="c_title">생년월일</label>
                                    <input type="text" id="birth" name="birth" maxlength="8" placeholder="YYYY-MM-DD">
                                </div>
            </section>
           
                <div class="button_wrop">
                    <button class="accept" type="submit">수정하기</button>
                    <button class="cancel" type="reset">취소</button>
                </div>
                    </fieldset>
                </form>
        </section>                    
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>