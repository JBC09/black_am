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

console.log(getCookie("userId"));

if (!getCookie("userId")) {
  alert("로그인 후 사용가능합니다.");
  history.go(-1);
}

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

const login = document.querySelector("#login");
const userId = getCookie("userId");
if (userId != null) {
  login.textContent = "로그아웃";
  login.addEventListener("click", () => {
    const currentDate = new Date().toUTCString();
    document.cookie = "userId" + "=; expires=" + currentDate + "; path=/";
    alert("로그아웃 되었습니다.");
    location.reload();
  });
} else {
  login.addEventListener("click", () => {
    self.location.href = "login.php";
  });
}

post.addEventListener("click", () => {
  // 각 입력 필드의 값을 가져와 변수에 할당합니다.
  const name = document.getElementById("name").value;
  const id = document.getElementById("id").value;
  const phone = document.getElementById("tel").value;
  const bank = document.getElementById("bank").value;
  const account = document.getElementById("account").value;
  const ip = document.getElementById("ip").value;
  const content = document.getElementById("content").value;
  const type = document.getElementById("type").value;

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

  if (!bank) {
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
  if (count > 5) {
    // 빈 데이터가 있을 경우 처리할 내용 추가
    alert("2개 이상 입력해주세요.");
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
