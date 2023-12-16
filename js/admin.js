const user_request = document.querySelector("#user_request");
const black_request = document.querySelector("#black_request");

const userData_div = document.querySelector("#userData");
const blackData_div = document.querySelector("#blackData");

const userIdSpan = document.querySelector("#user_id_span");
const userNameSpan = document.querySelector("#user_name_span");
const userCompanySpan = document.querySelector("#user_company_span");
const userUrlSpan = document.querySelector("#user_url_span");
const userTelegramSpan = document.querySelector("#user_telegram_span");

const add = document.querySelector("#add");

let user_Data;
let black_Data;

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

if (getCookie("userId")) {
  fetch("/backend/isAdmin.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      userId: getCookie("userId"),
    }),
  })
    .then((res) => res.json())
    .then((data) => {
      if (data["state"] != "ok") {
        alert("관리자 권한이 없습니다.");
        self.location.href = "./index.php";
      }
    });
} else {
  alert("관리자 권한이 없습니다.");
  self.location.href = "./index.php";
}

fetch("/backend/notCheckUser.php")
  .then((res) => res.json())
  .then((data) => {
    if (data.length == 0) {
      user_request.innerHTML = "<h2>유저 요청 데이터 없음</h2>";
    }
    user_Data = data;

    data.forEach((element, i) => {
      const userdata = `
        <div id="user${i}" class="userbox">
        <h3>${element["user_id"]}</h3>

        <div>
          <button class="ok" id="ok${i}">수락</button>
          <button class="no" id="no${i}">거부</button>
        </div>
      </div>
        `;
      user_request.innerHTML += userdata;
    });

    const ok_list = document.querySelectorAll(".ok");
    const no_list = document.querySelectorAll(".no");
    const userbox = document.querySelectorAll(".userbox");

    userbox.forEach((element) => {
      element.addEventListener("click", () => {
        let id = element.id.substring(4);

        userIdSpan.textContent = user_Data[id]["user_id"];
        userNameSpan.textContent = user_Data[id]["user_nickname"];
        userCompanySpan.textContent = user_Data[id]["user_company"];
        userUrlSpan.textContent = user_Data[id]["user_url"];
        userTelegramSpan.textContent = user_Data[id]["user_telegram"];
        userData_div.style.display = "block";
        blackData_div.style.display = "none";
      });
    });

    ok_list.forEach((element) => {
      element.addEventListener("click", () => {
        const user = document.querySelector(`#user${element.id.substring(2)}`);
        user.style.display = "none";
        fetch("/backend/responseSignup.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({
            userId: user_Data[element.id.substring(2)]["user_id"],
            key: "user",
          }),
        })
          .then((res) => res.json())
          .then((data) => {
            console.log(data);
          });
      });
    });

    no_list.forEach((element) => {
      element.addEventListener("click", () => {
        if (confirm("정말로 거부하시겠습니까?")) {
          const user = document.querySelector(
            `#user${element.id.substring(2)}`
          );
          user.style.display = "none";

          fetch("/backend/deleteRequest.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              userId: user_Data[element.id.substring(2)]["user_id"],
              key: "user",
            }),
          })
            .then((res) => res.json())
            .then((data) => {
              console.log(data);
            });
        }
      });
    });
  });

fetch("/backend/memberList.php")
  .then((res) => res.json())
  .then((data) => {
    if (data.length == 0) {
      black_request.innerHTML = "<h2>유저목록 없음</h2>";
    }
    black_Data = data;

    data.forEach((element, i) => {
      const userdata = `
      <div id="black${i}" class="blackBox">
      <h3>${element["user_id"]}</h3>

    </div>
      `;
      black_request.innerHTML += userdata;
    });
  });

const logData = document.querySelector("#logData");
const download = document.querySelector("#download");

download.addEventListener("click", () => {
  self.location.href = `/backend/excel.php?search=${filter.value}&start=${start.value}&end=${end.value}`;
});

const blackList = document.querySelector("#blackList");

fetch("/backend/adminBlackList.php")
  .then((res) => res.json())
  .then((data) => {
    data.forEach((element) => {
      blackList.innerHTML += `
      <div>
        <h3>글쓴이 아이디 : <span id="write_id_span">${element["post_userId"]}</span></h3>
        <h3>블랙 아이디 : <span id="black_id_span">${element["black_userId"]}</span></h3>
        <h3>블랙 닉네임 : <span id="black_name_span">${element["black_name"]}</span></h3>
        <h3>블랙 전화번호 : <span id="black_number_span">${element["black_number"]}</span></h3>
        <h3>블랙 은행 및 계좌 : <span id="user_bank_span">${element["black_bank"]} ${element["black_account"]}</span></h3>
        <h3>블랙 IP : <span id="black_ip_span">${element["black_ip"]}</span></h3>
        <h3>블랙 설명 : <span id="black_desc_span">${element["black_desc"]}</span></h3>
        <h3>등록 날짜 : <span id="date_span">${element["black_date"]}</span></h3>
      </div>
      `;
    });
  });
