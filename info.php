<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>블랙아머</title>
    <link rel="stylesheet" href="/css/info.css" tpye="text/css" />

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

      <!-- 정보 -->
      <div id="info">
        <div>
          <div>
            <input
              id="id"
              type="text"
              placeholder="아이디"
              maxlength="10"
              disabled
            />
            <input
              id="name"
              type="tel"
              placeholder="닉네임"
              maxlength="13"
              disabled
            />
          </div>
          <div>
            <input
              id="pass"
              type="text"
              placeholder="현재 비밀번호"
              maxlength="15"
            />
          </div>
          <div>
            <input
              id="pass2"
              type="text"
              placeholder="새 비밀번호"
              maxlength="15"
            />
          </div>
          <div>
            <input
              id="pass3"
              type="text"
              placeholder="새 비밀번호 확인"
              maxlength="15"
            />
          </div>

          <div id="btn">
            <button type="button" id="registration">확인</button>
            <button
              type="button"
              id="cancle"
              onclick="location.href='index.php'"
            >
              취소
            </button>
          </div>
        </div>
      </div>
      <!-- 정보 -->
      <?php
        include 'footer.php';
      ?>
     
    </div>
    <!-- //wrap -->
    <!-- 
     <script src="js/index.js"></script> -->
    <script>
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
      const userIds2 = getCookie("userId");
      const id = document.querySelector("#id");
      const nickname = document.querySelector("#name");

      fetch("/backend/selectMyNickname.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          id: userIds2,
        }),
      })
        .then((res) => res.json())
        .then((data) => {
          id.value = userIds2;
          nickname.value = data[0]["user_nickname"];

          const registration = document.querySelector("#registration");

          registration.addEventListener("click", () => {
            if (document.querySelector("#pass2").value.length < 8) {
              alert("비밀번호가 8자리 이상이여야 합니다.");
              return false;
            }

            if (
              document.querySelector("#pass2").value !=
                document.querySelector("#pass3").value ||
              document.querySelector("#pass2").value == ""
            ) {
              alert("새로운 비밀번호가 일치하지 않습니다.");
              return false;
            }

            fetch("/backend/updatePassword.php", {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              body: JSON.stringify({
                id: userIds2,
                pass: document.querySelector("#pass").value,
                newPass: document.querySelector("#pass3").value,
              }),
            })
              .then((res) => res.json())
              .then((data) => {
                console.log(data);
                if (data["state"] == "ok") {
                  alert("비밀번호가 변경되었습니다.");
                  self.location.href ="index.php";
                } else {
                  alert("기존 비밀번호가 틀립니다.");
                }
              });
          });
        });
    </script>
  </body>
</html>
