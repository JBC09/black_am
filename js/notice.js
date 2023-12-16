$(document).ready(function () {
  // 탭
  $("#t_btn li").first().addClass("line");
  $("#t_btn li").click(function () {
    $("#t_btn li").removeClass("line");
    $(this).addClass("line");
    var t = $(this).index();
    $("#t_con>div").hide();
    $("#t_con>div").eq(t).show();
  });
});

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

const urlString = window.location.href;
const url = new URL(urlString);
let id = url.searchParams.get("id");

if (id == null) {
  id = 1;
}

const one = document.querySelector("#one");
const two = document.querySelector("#two");
const there = document.querySelector("#there");
const four = document.querySelector("#four");
const five = document.querySelector("#five");

const left = document.querySelector("#left");
const right = document.querySelector("#right");

const check = parseInt(id / 5);

left.addEventListener("click", () => {
  if (one.textContent > 5) {
    one.textContent -= 5;
    two.textContent -= 5;
    there.textContent -= 5;
    four.textContent -= 5;
    five.textContent -= 5;
  } else {
    alert("이전 페이지가 없습니다.");
  }
});

right.addEventListener("click", () => {
  if (five.style.display == "none") {
    alert("다음페이지가 없습니다.");
    return false;
  }
  one.textContent = parseInt(one.textContent) + 5;
  two.textContent = parseInt(two.textContent) + 5;
  there.textContent = parseInt(there.textContent) + 5;
  four.textContent = parseInt(four.textContent) + 5;
  five.textContent = parseInt(five.textContent) + 5;
});

// 기존 코드
one.textContent = 5 * check + 1;
two.textContent = 5 * check + 2;
there.textContent = 5 * check + 3;
four.textContent = 5 * check + 4;
five.textContent = 5 * check + 5;

one.addEventListener("click", () => {
  self.location.href = `./notice.php?id=${one.textContent}`;
});

// two에 대한 이벤트 리스너 추가
two.addEventListener("click", () => {
  self.location.href = `./notice.php?id=${two.textContent}`;
});

// there에 대한 이벤트 리스너 추가
there.addEventListener("click", () => {
  self.location.href = `./notice.php?id=${there.textContent}`;
});

// four에 대한 이벤트 리스너 추가
four.addEventListener("click", () => {
  self.location.href = `./notice.php?id=${four.textContent}`;
});

// five에 대한 이벤트 리스너 추가
five.addEventListener("click", () => {
  self.location.href = `./notice.php?id=${five.textContent}`;
});

// const main = document.querySelector("#main");
const bigBody = document.querySelector("#bigBody");
const bigBody3 = document.querySelector("#bigBody3");

function truncateText(text, maxLength) {
  if (text.length > maxLength) {
    return text.substring(0, maxLength) + "...";
  } else {
    return text;
  }
}

fetch("/backend/communityList.php", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
  },
  body: JSON.stringify({
    id: (id -= 1),
  }),
})
  .then((res) => res.json())
  .then((data) => {
    if (data.length == 0) {
      alert("존재하지 않는 페이지입니다.");
      history.go(-1);
    }
    data.forEach((element, i) => {
      let boxData = `
        <tr class="post" id="post${element["pk"]}">
            <td>${i + 1}</td>
            <td>${element["title"]}</td>
            <td>${element["user_id"]}</td>
            <td>${element["date"]}</td>
            <td>${element["count"]}</td>
        </tr>
    `;

      bigBody.innerHTML += boxData;
    });

    const posts = document.querySelectorAll(".post");
    posts.forEach((element) => {
      element.addEventListener("click", () => {
        const id = element.id.substring(4);

        self.location.href = `./detail.php?id=${id}`;
      });
    });
  });

fetch("/backend/noticeList.php")
  .then((res) => res.json())
  .then((data) => {
    data.forEach((element, i) => {
      let boxData = `
      <tr class="post2" id="post${element["pk"]}">
          <td>${i + 1}</td>
          <td>${element["title"]}</td>
          <td>관리자</td>
          <td>${element["date"]}</td>
          <td>${element["count"]}</td>
      </tr>
  `;

      bigBody3.innerHTML += boxData;
    });

    const posts = document.querySelectorAll(".post2");
    posts.forEach((element) => {
      element.addEventListener("click", () => {
        const ids = element.id.substring(4);

        self.location.href = `./noticeDetail.php?id=${ids}`;
      });
    });
  });

fetch("/backend/commCount.php")
  .then((res) => res.json())
  .then((data) => {
    let count = data[0]["count"];
    console.log(count);
    if (count % 5 == 0) {
      count = parseInt(count / 5);
      if (count < 2) {
        two.style.display = "none";
      }
      if (count < 3) {
        there.style.display = "none";
      }
      if (count < 4) {
        four.style.display = "none";
      }
      if (count < 5) {
        five.style.display = "none";
      }
    } else {
      count = parseInt(count / 5);
      if (count < 1) {
        two.style.display = "none";
      }
      if (count < 2) {
        there.style.display = "none";
      }
      if (count < 3) {
        four.style.display = "none";
      }
      if (count < 4) {
        five.style.display = "none";
      }
    }
  });

// search_btn.addEventListener("click", () => {
//   fetch("/backend/communityList.php", {
//     method: "POST",
//     headers: {
//       "Content-Type": "application/json",
//     },
//     body: JSON.stringify({
//       search: search.value,
//     }),
//   })
//     .then((res) => res.json())
//     .then((data) => {
//       if (data.length == 0) {
//         alert("검색 데이터가 없습니다.");
//         return false;
//       }
//       main.innerHTML = "";

//       data.forEach((element) => {
//         let boxData = `
//           <div class="post" id="post${element["pk"]}">
//               <img src="/img/${element["img"]}" alt="게시물 이미지" />
//               <h2>${truncateText(element["title"], 35)}</h2>
//            </div>
//       `;

//         main.innerHTML += boxData;
//       });

//       const posts = document.querySelectorAll(".post");
//       posts.forEach((element) => {
//         element.addEventListener("click", () => {
//           const id = element.id.substring(4);
//           self.location.href = `./detail.php?id=${id}`;
//         });
//       });
//     });
// });
