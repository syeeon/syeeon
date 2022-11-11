<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../css/sub/product/pay.css"> 
    <script type="text/javascript" src="../../../js/common/jquery-3.6.1.min.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script type="text/javascript" src="../../../js/common/basic.js"></script>
    <script type="text/javascript" src="../../../js/sub/pay.js"></script>
    <title>결제하기</title>
</head>
<body>
    <?php include "../../common/header.php" ?>
    <main id="main" class="main">
        <section class="cart">
            <h1>Check Out</h1>
            <p>주문서를 작성하시고 결제를 진행해주세요. </p>
        </section>
        <section class="cartbox_wrap">
            <a class="return" href="shop.php">Return to shop</a>
            <h2 class="cart_title">Cart</h2>
            <ul class="cart_box">
                <li>
                    <div class="img_box">
                        <img src="../../../img/sub/shop/n1.png" alt="레저렉션 아로마틱 핸드 워시">
                    </div>
                    <div class="cart_txt">
                        <span class="list">레저렉션 아로마틱 핸드 워시</span>
                        <span class="list">DOWN</span>
                        <input type="text" class="up_down list" value="**">
                        <span class="list">UP</span>
                        <button type="reset" class="del list">Remove</button>
                        <span class="list">46,000KRW</span>
                    </div>
                </li>
            </ul>
            <span class="price">
                <span>
                    <label>소계</label>
                    <span>46,000</span>
                </span>
                <span><label>배송비</label><span>0</span></span>
                <span><label>TATAL</label><span>46,000KRW</span></span>
            </span>
        <section class="content2">
            <form name="formCheck" action="glsy1150@naver.com" method="get" onsubmit="return formCheck()">
                <fieldset>
                    <legend class="blind">주문자 정보</legend>
                        <h2 class="title">주문자 정보</h2>
                            <div class="input_box">
                                <label for="u_name" class="c_title">이름</label>
                                <span class="text_wrap">
                                    <input type="text" id="u_name" name="u_name" class="txt_box">
                                    <span id="err_name" class="err_txt"></span>
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
                                <label for="email" class="c_title">이메일</label>
                                <span class="text_wrap">
                                    <input type="text" id="email" name="email" class="txt_box"> @
                                    <input type="text" id="email_dns" name="email_dns" class="txt_box">
                                    <select  id="email_sel" onchange="change_email()" class="txt_box">
                                        <option value="">직접입력</option>
                                        <option value="naver.com" class="box" >네이버</option>
                                        <option value="hanmail.net">다음</option>
                                        <option value="gmail.com">구글</option>
                                    </select>
                                    <span id="err_email" class="err_txt"></span>
                                </span>
                            </div>

                            <div>
                                <input type="checkbox" id=to class="to">
                                <label for="to">위 정보와 같음</label>
                            </div>

                            <div class="input_box">
                                <label for="u_name" class="c_title">이름</label>
                                <span class="text_wrap">
                                    <input type="text" id="u_name" name="u_name" class="txt_box">
                                    <span id="err_name" class="err_txt"></span>
                                </span>
                            </div>
                            <div class="input_box">
                                <label for="sample6_postcode" class="c_title">우편번호</label>
                                <input type="text"  id="sample6_postcode" placeholder="우편번호" class="short_txt_box"  >
                                <button type="button" class="chk_btn" onclick="sample6_execDaumPostcode()" value="우편번호 찾기">우편번호 검색</button>
                            </div>

                            <div class="input_box"> 
                                <label for="sample6_address" class="c_title">기본주소</label>
                                <input type="text" id="sample6_address" placeholder="주소" class="txt_box">
                            </div>
                            <div class="input_box">
                                <label for="sample6_detailAddress" class="c_title">상세주소</label>
                                <input type="text" id="sample6_detailAddress" placeholder="상세주소" class="txt_box">
                            </div>

                            <div class="input_box phone">
                            <label for="mobile" class="c_title">연락처 1</label>
                            <input type="text" id="mobile" name="mobile" class="txt_box">
                            <br><span class="exp">" - " 없이 숫자만 입력해주세요.</span>
                            <br><span id="err_mobile" class="err_txt"></span>
                            </div>
                            <div class="input_box phone">
                                <label for="mobile" class="c_title">연락처 2</label>
                                <input type="text" id="mobile" name="mobile" class="txt_box">
                                <br><span class="exp">" - " 없이 숫자만 입력해주세요.</span>
                                <br><span id="err_mobile" class="err_txt"></span>
                            </div>
            
                            <div class="service_wrap">
                                <p>무료 선물 포장</p>
                                <input type="checkbox" id="service" class="service">
                                <label for="service">무료 선물 포장하기</label>
                                <p>(무료 포장 서비스를 원하실 경우 체크박스를 선택해주세요. <br>
                                    선물 포장은 이솝의 시그니처 패턴 종이봉투 포장 서비스를 제공하며, 본품 구매 수량 당 개별 선물 포장 서비스가 제공됩니다.)</p>
                            </div>
            
            <section class="pay_wrap">
                <h2 class="title">결제선택</h2>
                <div class="pay_box">
                    <p>결제방법</p>
                    <span>
                        <input type="radio" id="card_pay" name="pay_method" class="card_pay">
                        <label for="card_pay">카드 결제</label>
                    </span>
                    
                    <span>
                        <input type="radio" id= "phone_pay" name="pay_method" class="phone_pay">
                        <label for="phone_pay">휴대폰 결제</label>
                    </span>
                    
                    <span>
                        <input type="radio" id="kko_pay" name="pay_method" class="kko_pay">
                        <label for="kko_pay">카카오페이</label>
                    </span>
                    
                    <span>
                        <input type="radio" id="toss" name="pay_method" class="toss">
                        <label for="toss">토스</label>
                    </span>

                    <span class="imagine_wrap">
                        <input type="radio" id="imagine" name="pay_method" class="imagine" onchange="imagine()">
                        <label for="imagine">가상계좌</label>
                    </span>
                    
                    <span class="send_wrap">
                        <input type="radio" id="send" name="pay_method" class="send">
                        <label for="send">에스크로(실시간 계좌이체)</label>
                    </span>
                    
                    <div class="bill_wrap">
                        <input type="radio" id="bil_chk" name="bil" class="send">
                        <label for="bil_chk">현금영수증 신청</label>
                        <input type="radio" id="none" name="bil" class="none" checked>
                        <label for="none">신청안함</label>
                    </div>
                    
                    <div class="pay_name_wrap">
                        <label for="pay_name">예금주명</label>
                        <br><input type="text" id="pay_name" class="pay_name">
                    </div>
                    
                    <span class="">
                        <input type="radio" id="pers" name="cash_bill" class="">
                        <label for="pers">개인</label>
                    </span>
                    
                    <span class="">
                        <input type="radio" id="busine" name="cash_bill" class="">
                        <label for="busine">사업자</label>
                    </span>

                    <div>
                        <label for="cash_nu">핸드폰번호</label>
                        <br><input type="text" id= "cash_nu" name="cash_nu" class="">
                    </div>
                    
                </div>
                <span class="last_chk">
                    <span><label>상품합계금액</label> <span>46,000원</span></span>
                    <span><label>할인금액</label> <span>-0원</span></span>
                    <span><label>배송비</label> <span>0원</span></span>
                    <span><label>최종결제금액</label> <span>46,000원</span></span>
                    <button type="submit" class="btn" onclick="#">결제하기 </button>
                </span>
            </fieldset>
        </section>
        </form>
        </section>
    </main>
    <?php include "../../common/footer.php" ?>
</body>
</html>