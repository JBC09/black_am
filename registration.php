<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>블랙아머</title>
    <link rel="stylesheet" href="/css/registration.css" tpye="text/css" />

    <script
      src="https://kit.fontawesome.com/dd244c30e3.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
  </head>
  <body>
    <!-- wrap -->
    <div id="wrap">
      <!-- header -->
      <?php
        include 'header.php';
      ?>
      <!-- //header -->

      <!-- container -->
      <!-- <div id="container">
        <div>
          <h2>사기피해사례 검색</h2>
          <div class="box">
            <input
              tpye="text"
              placeholder="연락처 또는 계좌번호, 이름으로 검색해 보세요."
              maxlength="20"
            />
            <button type="button" onclick="location.href='search.html'">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>

          <h3>
            블랙아머는 범죄피해 방지 및 범죄피해자 보호를 위해 2006년부터
            운영되고 있습니다.
          </h3>
        </div>
      </div> -->

      <!-- 등록 -->
      <div id="info">
        <div>
          <div>
            <select id="type" onchange="changeType()">
              <option value="none"  id="only" selected>타입(필수선택)</option>
              <option value="통장협박•계좌신고">통장협박•계좌신고</option>
              <option value="3자사기">3자사기</option>
              <option value="작업베팅•양빵">작업베팅•양빵</option>
              <option value="배당하락">배당하락</option>
              <option value="해킹(프로그램)">해킹(프로그램)</option>
              <option value="꽁머니충">꽁머니충</option>
              <option value="기타">기타</option>
            </select>
          </div>
          <div>
            <input id="name" type="text" placeholder="이름" maxlength="10" 
    
            />
            <input
              id="tel"
              oninput="inputNum1(this.id)"
              type="tel"
              placeholder="전화번호"
              maxlength="13"
            />
          </div>
          <div>
            <select id="bank">
              <option value="none" selected>은행명(가나다 순)</option>
              <option value="경남은행">경남은행</option>
              <option value="광주은행">광주은행</option>
              <option value="국민은행">국민은행</option>
              <option value="기업은행">기업은행</option>
              <option value="농협(단위농협)">농협(단위농협)</option>
              <option value="농협은행(중앙회)">농협은행(중앙회)</option>
              <option value="대구은행">대구은행</option>
              <option value="부산은행">부산은행</option>
              <option value="산림조합중앙회">산림조합중앙회</option>
              <option value="수협은행">수협은행</option>
              <option value="신한은행">신한은행</option>
              <option value="신협은행">신협은행</option>
              <option value="우리은행">우리은행</option>
              <option value="우체국">우체국</option>
              <option value="저축은행">저축은행</option>
              <option value="전북은행">전북은행</option>
              <option value="제주은행">제주은행</option>
              <option value="카카오뱅크">카카오뱅크</option>
              <option value="케이뱅크">케이뱅크</option>
              <option value="카카오뱅크">카카오뱅크</option>
              <option value="하나은행">하나은행</option>
              <option value="한국씨티은행">한국씨티은행</option>
              <option value="SC제일은행">SC제일은행</option>
              <option value="기타">기타</option>
            </select>
            <input
              id="account"
              oninput="inputNum2(this.account)"
              type="tel"
              placeholder="계좌번호"
              maxlength="18"
            />
          </div>
          <div>
            <input id="id" type="text" placeholder="아이디" maxlength="10" />
            <input
              id="ip"
              oninput="inputNum3(this.ip)"
              type="text"
              placeholder="아이피"
              maxlength="15"
            />
          </div>
          <div>
            <input id="content" type="text" placeholder="내용" maxlength="60" value=""/>
          </div>

          <div id="btn">
            <button type="button" id="registration">등록</button>
            <button
              type="button"
              id="cancle"
              onclick="location.href='index.php'";
            >
              취소
            </button>
          </div>
        </div>
      </div>
      <!-- 등록 -->
      <?php
        include 'footer.php';
      ?>
    </div>
    <!-- //wrap -->
<script>
  $(document).ready(function () {
  /* 블랙타입 */
  $("#type").change(function () {
    $(this).css("color", `black`);
  });
  /* 블랙타입 */

  /* 은행명 */
  $("#bank").change(function () {
    var result = $("#bank option:selected").val();
    if (result == "none") {
      $("#bank").css("color", `#a2a5ac`);
    } else {
      $("#bank").css("color", `black`);
    }
  });
  /* 은행명 */

  /* 상단 바로가기 */
  $(".good, #baro_rap")
    .mouseenter(function () {
      $("#baro").stop().slideDown();
      //	$(this).addClass('on');
    })
    .mouseleave(function () {
      $("#baro").stop().slideUp();
    });
  /* 상단 바로가기 */

  /* 햄버거메뉴 */
  $(".hammenu1").click(function () {
    if ($(".hammenu1>p").hasClass("white")) {
      $(".hammenu1>p").removeClass("white");
    } else {
      $(".hammenu1>p").removeClass("white");
      $(".hammenu1>p").addClass("white");
    }

    $(".menu1").toggle();
    $(".material-symbols-outlined").eq(0).toggleClass(`direction`);
  });

  $(".hammenu2").click(function () {
    if ($(".hammenu2>p").hasClass("white")) {
      $(".hammenu2>p").removeClass("white");
    } else {
      $(".hammenu2>p").removeClass("white");
      $(".hammenu2>p").addClass("white");
    }

    $(".menu2").toggle();
    $(".material-symbols-outlined").eq(1).toggleClass(`direction`);
  });

  $(".hammenu3").click(function () {
    if ($(".hammenu3>p").hasClass("white")) {
      $(".hammenu3>p").removeClass("white");
    } else {
      $(".hammenu3>p").removeClass("white");
      $(".hammenu3>p").addClass("white");
    }

    $(".menu3").toggle();
    $(".material-symbols-outlined").eq(2).toggleClass(`direction`);
  });

  $(".hammenu4").click(function () {
    if ($(".hammenu4>p").hasClass("white")) {
      $(".hammenu4>p").removeClass("white");
    } else {
      $(".hammenu4>p").removeClass("white");
      $(".hammenu4>p").addClass("white");
    }

    $(".menu4").toggle();
    $(".material-symbols-outlined").eq(3).toggleClass(`direction`);
  });

  $(".hammenu5").click(function () {
    if ($(".hammenu5>p").hasClass("white")) {
      $(".hammenu5>p").removeClass("white");
    } else {
      $(".hammenu5>p").removeClass("white");
      $(".hammenu5>p").addClass("white");
    }

    $(".menu5").toggle();
    $(".material-symbols-outlined").eq(4).toggleClass(`direction`);
  });
  /* 햄버거메뉴*/
});







const names = document.querySelector('#name');
const onlyKorean = function() {
  const pattern = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;
  this.value = this.value.replace(pattern, '');
};
names.addEventListener('keyup', onlyKorean);

function inputNum1(id) {
  var element = document.getElementById("tel");
  element.value = element.value.replace(/[^0-9]/gi, "");
}
function inputNum2(account) {
  var element = document.getElementById("account");
  element.value = element.value.replace(/[^0-9]/gi, "");
}
function inputNum3(ip) {
  var element = document.getElementById("ip");
  element.value = element.value.replace(/[^0-9.]/gi, "");
}

const post = document.querySelector("#registration");



function getCookie(name) {
  var cookieArray = document.cookie.split("; ");
  for (var i = 0; i < cookieArray.length; i++) {
    var cookie = cookieArray[i].split("=");
    if (cookie[0] === name) {
      return cookie[1];
    }
  }
  return null; // 해당하는 쿠키가 없을 경우
}

function changeType(e) {
  const type = document.getElementById("type").value;
  const only = document.getElementById("only");
  if(type != "none"){
    only.style.display = "none";    
  }

  }


post.addEventListener("click", () => {
  // 각 입력 필드의 값을 가져와 변수에 할당합니다.
  const name = document.getElementById("name").value;
  const id = document.getElementById("id").value;
  const phone = document.getElementById("tel").value;
  const account = document.getElementById("account").value;
  const ip = document.getElementById("ip").value;
  const content = document.getElementById("content").value;
  const type = document.getElementById("type").value;
  const bank = document.getElementById("bank").value;


  if(type == "none"){
    alert("타입을 선택해주세요.");
    return false;
  }
  let count = 0;

  // 빈 데이터 체크
  if (!name) {
    count += 1;
  }

  if (!id) {
    count += 1;
  }

  if (!phone) {
    count += 1;
  }

  if (!account) {
    count += 1;
  }

  if (!ip) {
    count += 1;
  }

  if (!content) {
    count += 1;
  }



  
  // 이제 count 변수를 사용하여 빈 데이터 여부를 확인할 수 있어요.
  if (count > 4) {
    // 빈 데이터가 있을 경우 처리할 내용 추가
    alert("타입 외 2개 이상 입력해주세요.");
    return false;
  }

  let data = {
    PostUserId: getCookie("userId"),
    userId: id,
    userNm: name,
    userNumber: phone,
    userBank: bank,
    userAccount: account,
    userIp: ip,
    desc: content,
    date: new Date(),
    type: type,
  };

  // Fetch API를 사용하여 서버에 데이터를 전송합니다.
  fetch("/backend/blackInsert.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data["state"] == "ok") {
        alert("등록이 완료되었습니다.");
        self.location.href = "index.php";
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});

</script>

  </body>
</html>
