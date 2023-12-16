$(document).ready(function () {
  /* 확정 카운트 */
  function addScore() {
    if (fire == false) {
      cnt--;
      $score.html(cnt);
    } else if (fire == true) {
      cnt++;
      $score.html(cnt);
    }
  }

  $(".material-symbols-outlined").click(function () {
    if (fire == false) {
      $(this).css(`color`, `red`);
      fire = true;
      addScore();
    } else if (fire == true) {
      $(this).css(`color`, `black`);
      fire = false;
      addScore();
    }
  });

  /* 확정 카운트 */

  // 탭
  $("#t_btn li").first().addClass("line");
  $("#t_btn li").click(function () {
    $("#t_btn li").removeClass("line");
    $(this).addClass("line");
    var t = $(this).index();
    $("#t_con>div").hide();
    $("#t_con>div").eq(t).show();
  });
  // 탭

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

var fire = false;
var $score = $(`.score`);
var cnt = 0;

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
    self.location.href = "login.html";
  });
}

const big_check = document.querySelector("#big_check");
const small_check = document.querySelector("#small_check");

const big_confirmed = document.querySelector("#big_confirmed");
const small_confirmed = document.querySelector("#small_confirmed");

fetch("/backend/rank.php", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
  },
  body: JSON.stringify({
    type: "check",
  }),
})
  .then((res) => res.json())
  .then((data) => {
    data.forEach((element, i) => {
      const big_data = `
          <td>${element["black_name"]}</td>
          <td>${element["black_bank"]}</td>
          <td>${element["black_account"]}</td>
          <td>${element["black_number"]}</td>
          <td>${element["black_userId"]}</td>
          <td>${element["black_ip"]}</td>
          <td>${element["black_date"]}</td>
          <td>${element["post_userId"]}</td>
        <td id="${
          element["pk"]
        }" class="confirmed"><span class="material-symbols-outlined">local_fire_department
            </span><br><span class="score" id="confirmed_${element["pk"]}">${
        element["cc"]
      }</span>
        </td>
        <td>${element["check_number"]}</td>
        <td>${i + 1}</td>
      </tr>
      <tr>
      <td colspan='2' class="popo">${element["black_desc"]}</td>
      <td colspan='9' class="papa">${element["black_content"]}</td>
      </tr>
        `;
      big_check.innerHTML += big_data;

      const small_data = `
      <tr>
            <td>${element["black_name"]}<br><br>
            ${element["black_bank"]}<br><br>
            ${element["black_userId"]}
            </td>
            <td>${element["black_number"]}<br><br>
            ${element["black_account"]}<br><br>
            ${element["black_ip"]}
            </td>
            <td>${element["black_date"]}<br><br>
            ${element["post_userId"]}<br><br>
            ${element["check_number"]}
            </td>
            <td><span class="coco">${i + 1}</span><br>
            <span <span id="${
              element["pk"]
            }" class="material-symbols-outlined confirmed" >
            local_fire_department
            </span><br>  <span  id="confirmed_${element["pk"]}" class="score">${
        element["cc"]
      }</span>
            </td>
        </tr>

        <tr>
        <td colspan='2' class="popo">${element["black_desc"]}</td>
        <td colspan='9' class="papa">${element["black_content"]}</td>
        </tr>
      `;
      small_check.innerHTML += small_data;
    });

    let confirmed = document.querySelectorAll(".confirmed");
    confirmed.forEach((element) => {
      element.addEventListener("click", () => {
        console.log(element.id);
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

fetch("/backend/rank.php", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
  },
  body: JSON.stringify({
    type: "confirmed",
  }),
})
  .then((res) => res.json())
  .then((data) => {
    data.forEach((element, i) => {
      const big_data = `
          <td>${element["black_name"]}</td>
          <td>${element["black_bank"]}</td>
          <td>${element["black_account"]}</td>
          <td>${element["black_number"]}</td>
          <td>${element["black_userId"]}</td>
          <td>${element["black_ip"]}</td>
          <td>${element["black_date"]}</td>
          <td>${element["post_userId"]}</td>
          <td id="${
            element["pk"]
          }" class="confirmed2"><span class="material-symbols-outlined">local_fire_department
              </span><br><span class="score" id="confirmed2_${element["pk"]}">${
        element["cc"]
      }</span>
        <td>${element["check_number"]}</td>
        <td>${i + 1}</td>
      </tr>
      <tr>
          <td colspan='2' class="popo">${element["black_desc"]}</td>
          <td colspan='9' class="papa">${element["black_content"]}</td>
      </tr>
        `;
      big_confirmed.innerHTML += big_data;

      const small_data = `
      <tr>
            <td>${element["black_name"]}<br><br>
            ${element["black_bank"]}<br><br>
            ${element["black_userId"]}
            </td>
            <td>${element["black_number"]}<br><br>
            ${element["black_account"]}<br><br>
            ${element["black_ip"]}
            </td>
            <td>${element["black_date"]}<br><br>
            ${element["post_userId"]}<br><br>
            ${element["check_number"]}
            </td>
            
            <td><span class="coco">${i + 1}</span><br>
            <span id="${
              element["pk"]
            }" class="confirmed2 material-symbols-outlined">
            local_fire_department
            </span><br><span class="score">${element["confirmed"]}</span>
            </td>
        </tr>

        <tr>
        <td colspan='2' class="popo">${element["black_desc"]}</td>
        <td colspan='9' class="papa">${element["black_content"]}</td>
        </tr>
      `;
      small_confirmed.innerHTML += small_data;
    });

    let confirmed = document.querySelectorAll(".confirmed2");
    confirmed.forEach((element) => {
      element.addEventListener("click", () => {
        console.log(element.id);
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
            let datas = document.querySelector(`#confirmed2_${element.id}`);
            if (data["state"] == "add") {
              datas.textContent = parseInt(datas.textContent) + 1;
            } else {
              datas.textContent -= 1;
            }
          });
      });
    });
  });

fetch("/backend/rank.php", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
  },
  body: JSON.stringify({
    type: "any",
  }),
})
  .then((res) => res.json())
  .then((data) => {
    data.forEach((element) => {
      const big_tbody = document.querySelector("#big_tbody");
      const small_tbody = document.querySelector("#small_tbody");
      const big_data = `
              
      <td>${element["black_name"]}</td>
      <td>${element["black_bank"]}</td>
      <td>${element["black_account"]}</td>
      <td>${element["black_number"]}</td>
      <td>${element["black_userId"]}</td>
      <td>${element["black_ip"]}</td>
      <td>${element["black_date"]}</td>
      <td>${element["post_userId"]}</td>
      <td id="${element["pk"]}" class="confirmed3"><span class="material-symbols-outlined">local_fire_department
          </span><br><span class="score" id="confirmed3_${element["pk"]}">${element["cc"]}</span>
    <td>${element["check_number"]}</td>
  </tr>
  <tr>
      <td colspan='2' class="popo">${element["black_desc"]}</td>
      <td colspan='9' class="papa">${element["black_content"]}</td>
  </tr>`;

      const small_data = `

      <tr>
      <td>${element["black_name"]}<br><br>
      ${element["black_bank"]}<br><br>
      ${element["black_userId"]}
      </td>
      <td>${element["black_number"]}<br><br>
      ${element["black_account"]}<br><br>
      ${element["black_ip"]}
      </td>
      <td>${element["black_date"]}<br><br>
      ${element["post_userId"]}<br><br>
      ${element["check_number"]}
      </td>
    
      <span id="${element["pk"]}" class="confirmed3 material-symbols-outlined">
      local_fire_department
      </span ><br><span class="score" id="confirmed3_${element["pk"]}">${element["cc"]}</span>
      </td>
  </tr>

  <tr>
  <td colspan='2' class="popo">${element["black_desc"]}</td>
  <td colspan='9' class="papa">${element["black_content"]}</td>
  </tr>
              
                `;
      big_tbody.innerHTML += big_data;
      small_tbody.innerHTML += small_data;
    });

    let confirmed = document.querySelectorAll(".confirmed3");
    confirmed.forEach((element) => {
      element.addEventListener("click", () => {
        console.log(element.id);
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
            let datas = document.querySelector(`#confirmed3_${element.id}`);
            if (data["state"] == "add") {
              datas.textContent = parseInt(datas.textContent) + 1;
            } else {
              datas.textContent -= 1;
            }
          });
      });
    });
  });
