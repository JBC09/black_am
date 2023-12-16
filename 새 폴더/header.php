<header>

  <style>
.dark-mode-button .noTransition:before {
  position: absolute;
  content: "";
  height: 22px;
  width: 22px;
  left: 0px;
  top: -5px;
  background-image: url("../img/sun.svg");
  background-size: 24px;
  background-position: center;
  background-color: white;
  background-repeat: no-repeat;
  -webkit-transition: 0s;
  border-radius: 20px;
  transition: 0s;
  box-shadow: 1px 1px 3px #eaeaea;
}
    </style>
  <div id="tap">
    <label class="dark-mode-button">
      <input type="checkbox" id="mode" />
      <span class="onoff-switch"></span>
    </label>
    <button id="login" type="button">로그인</button>
    <button id="sign" type="button" onclick="location.href='sign.php'">
      회원가입
    </button>
  </div>
  <div id="up">
    <a href="index.php"><h1>블랙아머</h1></a>
    <ul class="menu">
      <li><a href="registration.php">블랙등록</a></li>
      <li><a href="notice.php">게시판</a></li>
      <li><a href="rank.php">블랙통계</a></li>
      <li class="good"><a href="#">바로가기</a></li>
    </ul>

    <!--햄버거메뉴-->
    <div id="hamberger">
      <input type="checkbox" id="icon" />
      <label for="icon">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <div id="ham">
        <ul id="hamyo">
          <div onclick="location.href='registration.php';">
            <li>블랙등록</li>
          </div>
          <div onclick="location.href='notice.php';">
            <li>게시판</li>
          </div>
          <div onclick="location.href='rank.php';">
            <li>블랙통계</li>
          </div>
        </ul>

        <div class="hammenu1" id="hamline1">
          <p>스코어</p>
          <span class="material-symbols-outlined">arrow_drop_down</span>
        </div>
        <ul class="menu1">
          <div onclick="window.open(`https://www.flashscore.co.kr/`)">
            <li>FLASHSCORE</li>
          </div>
          <div onclick="window.open(`https://betsapi.com/`)">
            <li>BetsAPI</li>
          </div>
          <div onclick="window.open(`https://www.sofascore.com/`)">
            <li>Sofascore</li>
          </div>
          <div onclick="window.open(`https://m.aiscore.com/`)">
            <li>AiScore</li>
          </div>
          <div onclick="window.open(`https://www.espn.com/`)">
            <li>ESPN</li>
          </div>
        </ul>

        <div class="hammenu2" id="hamline2">
          <p>배당사</p>
          <span class="material-symbols-outlined">arrow_drop_down</span>
        </div>
        <ul class="menu2">
          <div onclick="window.open(`https://www.oddsportal.com/`)">
            <li>오즈포탈</li>
          </div>
          <div onclick="window.open(`https://www.bet365.com/`)">
            <li>bet365</li>
          </div>
          <div onclick="window.open(`https://sports.bwin.com/`)">
            <li>bwin</li>
          </div>
          <div onclick="window.open(`https://www.pinnacle.com/`)">
            <li>피나클</li>
          </div>
        </ul>

        <div class="hammenu3" id="hamline3">
          <p>미니게임</p>
          <span class="material-symbols-outlined">arrow_drop_down</span>
        </div>
        <ul class="menu3">
          <div onclick="window.open(`https://ntry.com/`)">
            <li>엔트리</li>
          </div>
          <div onclick="window.open(`https://bepick.net`)">
            <li>베픽</li>
          </div>
          <div onclick="window.open(`https://named.com/`)">
            <li>네임드</li>
          </div>
          <div onclick="window.open(`https://nextgames.co.kr/`)">
            <li>넥스트</li>
          </div>
          <div onclick="window.open(`https://lotusogm.com/`)">
            <li>로투스</li>
          </div>
        </ul>

        <div class="hammenu4" id="hamline4">
          <p>가상축구</p>
          <span class="material-symbols-outlined">arrow_drop_down</span>
        </div>
        <ul class="menu4">
          <div onclick="window.open(`https://black-365.com/soccer`)">
            <li>블랙칩365</li>
          </div>
          <div onclick="window.open(`https://vet3.com/soccer`)">
            <li>V스포츠</li>
          </div>
        </ul>

        <div class="hammenu5" id="hamline5">
          <p>기타</p>
          <span class="material-symbols-outlined">arrow_drop_down</span>
        </div>
        <ul class="menu5">
          <div onclick="window.open(`https://www.coupop.co.kr/`)">
            <li>쿠팝</li>
          </div>
          <div onclick="window.open(`https://www.sureman.com/`)">
            <li>슈어맨</li>
          </div>
          <div onclick="window.open(`https://www.miricanvas.com/`)">
            <li>미리캔버스</li>
          </div>
          <div onclick="window.open(`https://ip.pe.kr/`)">
            <li>내아이피주소</li>
          </div>
          <div onclick="window.open(`https://fast.com/`)">
            <li>인터넷 속도측정</li>
          </div>
        </ul>
      </div>
    </div>
    <!--햄버거메뉴-->
  </div>
  <!--가로가기-->
  <div id="baro">
    <div id="baro_rap">
      <dl>
        <dt>스코어</dt>
        <dd onclick="window.open(`https://www.flashscore.co.kr/`)">
          FLASHSCORE
        </dd>
        <dd onclick="window.open(`https://betsapi.com/`)">BetsAPI</dd>
        <dd onclick="window.open(`https://www.sofascore.com/`)">SofaScore</dd>
        <dd onclick="window.open(`https://m.aiscore.com/`)">AiScore</dd>
        <dd onclick="window.open(`https://www.espn.com/`)">ESPN</dd>
      </dl>
      <dl>
        <dt>배당사</dt>
        <dd onclick="window.open(`https://www.oddsportal.com/`)">오즈포탈</dd>
        <dd onclick="window.open(`https://www.bet365.com/`)">Bet365</dd>
        <dd onclick="window.open(`https://sports.bwin.com/`)">bwin</dd>
        <dd onclick="window.open(`https://www.pinnacle.com/`)">피나클</dd>
      </dl>
      <dl>
        <dt>미니게임</dt>
        <dd onclick="window.open(`https://ntry.com/`)">엔트리</dd>
        <dd onclick="window.open(`https://bepick.net`)">베픽</dd>
        <dd onclick="window.open(`https://named.com/`)">네임드</dd>
        <dd onclick="window.open(`https://nextgames.co.kr/`)">넥스트</dd>
        <dd onclick="window.open(`https://lotusogm.com/`)">로투스</dd>
      </dl>
      <dl>
        <dt>가상축구</dt>
        <dd onclick="window.open(`https://black-365.com/soccer`)">블랙칩365</dd>
        <dd onclick="window.open(`https://vet3.com/soccer`)">V스포츠</dd>
      </dl>
      <dl>
        <dt>기타</dt>
        <dd onclick="window.open(`https://fast.com/`)">인터넷 속도측정</dd>
        <dd onclick="window.open(`https://ip.pe.kr/`)">내아이피주소</dd>
        <dd onclick="window.open(`https://www.miricanvas.com/`)">미리캔버스</dd>
        <dd onclick="window.open(`https://www.sureman.com/`)">슈어맨</dd>
        <dd onclick="window.open(`https://www.coupop.co.kr/`)">쿠팝</dd>
      </dl>
    </div>
  </div>

  <script>

    let filterss = "win16|win32|win64|mac|macintel";
    if(0 > filterss.indexOf(navigator.platform.toLowerCase())){
        self.location.href = "mobile.html";
    }else{
        console.log("Client platform : PC");
    }

    $(document).ready(function () {
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

    const mode = document.querySelector("#mode");

    function white() {
      document.querySelector("body").style.backgroundColor = "#f6f6f6";
      document.querySelector("#tap").style.backgroundColor = "white";
      document.querySelectorAll(".num").forEach((element) => {
          element.style.color = "#7367f0";
        });


      if(window.location.pathname == "/index.php" || window.location.href == "https://vv-ca.com/"){
        document.querySelector("#container").style.backgroundColor = "#f6f6f6";
        document.querySelector("#info").style.backgroundColor = "#f6f6f6";
        document.querySelector("#container h2").style.color = "black";
        document.querySelector("#container h3").style.color = "black";
    
        document.querySelectorAll("th").forEach((element) => {
          element.style.color = "#7367f0";
        });
      }
      if(window.location.pathname == "/registration.php"){  
        document.querySelector("#info").style.backgroundColor = "#f6f6f6";
      }
      if(window.location.pathname == "/notice.php" || window.location.pathname == "/notice2.php"){
        
        document.querySelector("#tab").style.backgroundColor = "#f6f6f6";
   
        document.querySelectorAll("#t_btn li").forEach((element) => {
          element.style.color = "black";
        });

        document.querySelectorAll("th").forEach((element) => {
          element.style.color = "black";
        });
      
      }
      
      if(window.location.pathname == "/rank.php" || window.location.pathname == "/rank2.php" || window.location.pathname == "/rank3.php"){
        document.querySelector("#tab").style.backgroundColor = "#f6f6f6";
        document.querySelectorAll("th").forEach((element) => {
          element.style.color = "#7367f0";
        });
        document.querySelectorAll("#t_btn li").forEach((element) => {
          element.style.color = "black";
        });
      }

      if(window.location.pathname == "/info.php"){
        document.querySelector("#info").style.backgroundColor = "#f6f6f6";
      }

      if(window.location.pathname == "/noticeView.php" || window.location.pathname == "/fileDetail.php"){
        
        document.querySelector("#view").style.backgroundColor = "#f6f6f6";
      }
    }




    function black() {
      document.querySelector("body").style.backgroundColor = "#121212";
      document.querySelector("#tap").style.backgroundColor = "#121212";
      document.querySelectorAll(".num").forEach((element) => {
          element.style.color = "#7367F0";
      });


      if(window.location.pathname == "/index.php" || window.location.href == "https://vv-ca.com/"){
        document.querySelector("#container").style.backgroundColor = "#1E1E1E";
        document.querySelector("#info").style.backgroundColor = "#1E1E1E";
        document.querySelector("#container h2").style.color = "white";
        document.querySelector("#container h3").style.color = "white";
        document.querySelectorAll("th").forEach((element) => {
          element.style.color = "white";
        });
      }
      if(window.location.pathname == "/registration.php"){  
        document.querySelector("#info").style.backgroundColor = "#1E1E1E";
      }

      if(window.location.pathname == "/notice.php" || window.location.pathname == "/notice2.php"){
        
        document.querySelector("#tab").style.backgroundColor = "#1E1E1E";
        document.querySelectorAll("th").forEach((element) => {
          element.style.color = "white";
        });

        document.querySelectorAll("#t_btn li").forEach((element) => {
          element.style.color = "white";
        });
      }

      if(window.location.pathname == "/rank.php" || window.location.pathname == "/rank2.php" || window.location.pathname == "/rank3.php"){
        document.querySelector("#tab").style.backgroundColor = "#1E1E1E";
        document.querySelectorAll("th").forEach((element) => {
          element.style.color = "white";
        });
        document.querySelectorAll("#t_btn li").forEach((element) => {
          element.style.color = "white";
        });
      }
      if(window.location.pathname == "/info.php"){
        document.querySelector("#info").style.backgroundColor = "#1E1E1E";
      }

      if(window.location.pathname == "/noticeView.php" || window.location.pathname == "/fileDetail.php"){
        
        document.querySelector("#view").style.backgroundColor = "#1E1E1E";
      }


    }



    const switchs = document.querySelector(".dark-mode-button .onoff-switch");
    window.onload = function () {
      if (getCookie("mode") == null) {
        white();
        mode.checked = false;
      } else {
        switchs.style.transition = "0s";
        switchs.classList.add("noTransition");
        mode.checked = true;
        black();
        setTimeout(() => {
          switchs.style.transition = "0.4s";
        switchs.classList.remove("noTransition");
        }, 100);
      }
    };

    mode.addEventListener("click", () => {
      if (getCookie("mode") == null) {
        black();
        let endDay = new Date();
        endDay.setDate(endDay.getDate() + 7);
        document.cookie = `mode='dark'; expires=${endDay}; path=/`;
      } else {
        white();
        const currentDate = new Date().toUTCString();
        document.cookie = "mode" + "=; expires=" + currentDate + "; path=/";
      }
    });

    const userIds = getCookie("userId");

    if (userIds != null) {
      fetch("/backend/selectMyNickname.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          id: userIds,
        }),
      })
        .then((res) => res.json())
        .then((data) => {
            login.textContent = data[0]["user_nickname"];
        })
      sign.textContent = "로그아웃";

      login.addEventListener("click", () => {
        self.location.href = "info.php";
      });

      sign.addEventListener("click", () => {
        const currentDate = new Date().toUTCString();
        document.cookie = "userId" + "=; expires=" + currentDate + "; path=/";
        alert("로그아웃 되었습니다.");
        location.reload();
      });

      if (window.location.pathname.substr(0,6) ==  "/admin") {

        fetch("/backend/isAdmin.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({
            userId: userIds,
          }),
        })
        .then((res) => res.json())
        .then((data) => {
            if(data["state"] == "ok"){
              
            }
            else if(data["state"]  == "ok2"){
                if(window.location.pathname == "/adminLog.php"){
                  alert("로그 권한이 없습니다.");
                  self.location.href = "index.php";
                }
            }
            else{
              alert("관리자 권한이 없습니다.");
              self.location.href = "index.php";
            }
        })
      }

    } else {

      if (window.location.pathname.substr(0,6) ==  "/admin") {
        alert("관리자 권한이 없습니다.");
              self.location.href = "index.php";
      }
      login.addEventListener("click", () => {
        self.location.href = "login.php";
      });

      sign.addEventListener("click", () => {
        self.location.href = "sign.php";
      });


      if ("/rank.php" == window.location.pathname || "/registration.php" == window.location.pathname || "/info.php" == window.location.pathname || "/notice.php" == window.location.pathname) {
        alert("로그인을 먼저 해주세요.");
        self.location.href = "login.php";
      }
    }
  </script>
  <!--가로가기-->
</header>
