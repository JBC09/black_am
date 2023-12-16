const post = document.querySelector("#post");

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

post.addEventListener("click", () => {
  // 각 입력 필드의 값을 가져와 변수에 할당합니다.
  const name = document.getElementById("name").value;
  const id = document.getElementById("id").value;
  const phone = document.getElementById("phone").value;
  const bank = document.getElementById("bank").value;
  const account = document.getElementById("account").value;
  const ip = document.getElementById("ip").value;
  const content = document.getElementById("content").value;

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
  } else {
    // 빈 데이터가 없을 경우 처리할 내용 추가
    console.log("데이터가 모두 채워져 있습니다.");
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
        self.location.href = "index.html";
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});
