const search = document.querySelector("#search");
const userId = getCookie("userId");

const filter = document.querySelector("#filter");
const log = document.querySelector("#log");
const login = document.querySelector("#login");
const sign = document.querySelector("#sign");

const urlString = window.location.href;
const big_tbody = document.querySelector("#big_tbody");
const small_tbody = document.querySelector("#small_tbody");

const big = document.querySelector("#big");
const small = document.querySelector("#small");

const info = document.querySelector("#info");

// 특정 파라미터 가져오기
const url = new URL(urlString);
const parameterValue = url.searchParams.get("state");
if (parameterValue == "ok") {
  alert("등록이 완료되었습니다.");
  self.location.href = "/notice.html";
}

info.style.opacity = 0;

const arr = [];

info;
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

search.addEventListener("click", () => {
  if (userId == null) {
    alert("로그인 후 검색기능을 사용할 수 있습니다.");
    return false;
  } else {
    if (log.value == "") {
      alert("검색 데이터를 입력해주세요.");
      return false;
    }

    let filterValues;

    if (isNaN(log.value[0])) {
      filterValues = "name";
    } else if (
      log.value[0] == "0" &&
      log.value[1] == "1" &&
      log.value[2] == "0"
    ) {
      filterValues = "number";
    } else {
      filterValues = "account";
    }
    fetch("/backend/searchLog.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        userId: userId,
        userNm: "정찬빈",
        keyword: filterValues,
        history: log.value,
        date: new Date(),
      }),
    })
      .then((res) => res.json())
      .then((data) => {});

    fetch("/backend/blackList.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        search: log.value,
        filter: filterValues,
      }),
    })
      .then((res) => res.json())
      .then((data) => {
        alert(`검색결과 데이터 건수 ${data.length}건입니다.`);
        if (data.length == 0) {
          info.style.opacity = 0;
          self.location.reload();
          return false;
        }

        info.style.opacity = 1;

        big_tbody.innerHTML = "";
        small_tbody.innerHTML = "";

        console.log(data);
        data.forEach((element) => {
          arr.push(0);
          const big_data = `
          <tr>
          <td class="transparent"></td>
        </tr>
        <tr>
          <td>${element["black_name"]}</td>
          <td>${element["black_bank"]}</td>
          <td>${element["black_account"]}</td>
          <td>${element["black_number"]}</td>
          <td>${element["black_userId"]}</td>
          <td>${element["black_ip"]}</td>
          <td>${element["black_date"]}</td>
          <td>${element["post_userId"]}</td>
          <td id="${element["pk"]}" class="confirmed">
            <span class="material-symbols-outlined">
              local_fire_department </span
            >&nbsp; 
            <span id="confirmed_${element["pk"]}">  ${element["cc"]}</span>
          </td>
          <td>   ${element["check_number"]}</td>
        </tr>
        <tr>
          <td colspan="10" class="popo">
            ${element["black_desc"]}
          </td>
        </tr>

        <tr>
          <td class="transparent"></td>
        </tr>`;

          const small_data = `
        <tr>
        <td class="transparent"></td>
      </tr>
        <td>
        ${element["black_name"]}<br /><br />
        ${element["black_bank"]}<br /><br />
        ${element["black_userId"]}
      </td>
      <td>
      ${element["black_number"]}<br /><br />
      ${element["black_account"]}<br /><br />
      ${element["black_ip"]}
      </td>
      <td>
      ${element["black_date"]}<br /><br />
        ${element["post_userId"]}<br /><br />
        ${element["ckeck_number"]}
      </td>
      <td>
        <span class="material-symbols-outlined">
          local_fire_department </span
        >&nbsp; 
        <span  id="${element["pk"]}" class="confirmed">
        <span id="confirmed_${element["pk"]}">  ${element["cc"]}</span>
        </span>
       
      </td>
    </tr>

    <tr>
      <td colspan="10" class="popo">
      ${element["black_desc"]}
      </td>
    </tr>

    <tr>
    <td class="transparent"></td>
  </tr>
    `;

          big_tbody.innerHTML += big_data;
          small_tbody.innerHTML += small_data;
        });

        let confirmed = document.querySelectorAll(".confirmed");
        confirmed.forEach((element, i) => {
          element.addEventListener("click", () => {
            fetch("/backend/confirmed.php", {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              body: JSON.stringify({
                pk: element.id,
                userId: getCookie("userId"),
              }),
            })
              .then((res) => res.json())
              .then((data) => {
                let datas = document.querySelector(`#confirmed_${element.id}`);
                if (data["state"] == "add") {
                  datas.textContent = parseInt(datas.textContent) + 1;
                } else {
                  datas.textContent -= 1;
                }
              });
          });
        });
      });
  }
});
