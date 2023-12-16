<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>블랙아머 : 로그인</title>

    <link rel="stylesheet" href="/css/stylelogin.css" tpye="text/css" />
  </head>
  <body>
    <div>
      <div id="logo">
        <a href="index.php"><span>블랙아머</span></a>
      </div>

      <div id="inner">
        <div>
          <input type="text" placeholder="아이디" maxlength="20" id="id" />
          <!-- <input tpye="text" placeholder="연락처 또는 계좌번호, 이름으로 검색해 보세요." maxlength="20"> -->
        </div>
        <div>
          <input
            type="password"
            placeholder="비밀번호"
            maxlength="20"
            id="pass"
          />

          <!-- <input tpye="text" placeholder="연락처 또는 계좌번호, 이름으로 검색해 보세요." maxlength="20"> -->
        </div>

        <div id="keep">
          <form action="#">
            <!--label태그는 체크박스를 누르지 않아도 연결된 체크박스를 체크해줌-->
            <label for="chk">
              <input type="checkbox" id="chk" checked />
              <!--실제로는 글자를 기울이는 태그, 퍼블리셔들이 아이콘담을 때 많이 사용-->
              <i class="circle"></i>
              <span class="text">로그인 상태 유지</span>
            </label>
          </form>
        </div>

        <div id="btn">
          <button type="button" id="btnlogin">로그인</button>
          <button type="button" id="btnpass" onclick="location.href='sign.php'">
            회원가입
          </button>
        </div>
      </div>

          <div id="footer">
                <div id="sasa">
                <span id="soso">Copyright ⓒ 2023 블랙아머. All Rights Reserved.</span>
                <a></a>
                </div>
            </div>
    </div>

    <script>

let filterss = "win16|win32|win64|mac|macintel";
    if(0 > filterss.indexOf(navigator.platform.toLowerCase())){
        self.location.href = "mobile.html";
    }else{
        console.log("Client platform : PC");
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

      const userId = document.querySelector("#id");
      const password = document.querySelector("#pass");
      const btnlogin = document.querySelector("#btnlogin");

      window.onload = function () {
        if (getCookie("mode") == null) {
          document.querySelector("body").style.backgroundColor = "white";
          document.querySelector("#inner").style.backgroundColor = "#f6f6f6";

          document.querySelector("#logo span").style.color = "transparent";
          const inputs = document.querySelectorAll("input");

          inputs.forEach((element) => {
            element.style.color = "black";
            element.style.border = "1px solid #777777";
          });
        } else {
          document.querySelector("body").style.backgroundColor = "#1E1E1E";
          document.querySelector("#inner").style.backgroundColor = "#f6f6f6";

          document.querySelector("#logo span").style.color = "transparent";
          const inputs = document.querySelectorAll("input");

          inputs.forEach((element) => {
            element.style.color = "black";
            element.style.border = "1px solid #777777";
          });
        }

        
        document.querySelector("#id").style.borderBottom = "none";
      };

      btnlogin.addEventListener("click", () => {
        fetch("/backend/login.php", {
          method: "post",
          headers: {
            "Content-Type": " application/json",
          },
          body: JSON.stringify({
            userId: userId.value,
            userPw: password.value,
          }),
        })
          .then((res) => res.json())
          .then((data) => {
            if (data["state"] == "not_check_user") {
              alert("아직 승인이 되지 않은 회원입니다.");
              return false;
            } else if (data["state"] == "ok") {
          
         
              let endDay = new Date();

              if (document.getElementById("chk").checked) {
                alert("정상적으로 로그인이 되었습니다. (로그인 상태 유지 - 7일)");
                endDay.setDate(endDay.getDate() + 7);
                document.cookie = `userId=${userId.value}; expires=${endDay}; path=/`;
              } else {
                alert("정상적으로 로그인이 되었습니다.");
        
                document.cookie = `userId=${userId.value}; path=/`;
              }
              

              
              self.location.href = "index.php";
            }else if(data["state"] == "password_error"){
              alert("비밀번호가 맞지 않습니다.");
            }
            
            else {
              alert("없는 회원입니다.");
              console.log(data["state"]);
            }
          });
      });
    </script>
  </body>
</html>
