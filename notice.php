<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>블랙아머</title>
    <link rel="stylesheet" href="css/notice.css" tpye="text/css" />

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

      <!-- 등록 -->
      <div id="tab">
        <div class="inner">
          <ul id="t_btn">
            <li>공지사항</li>
            <li onclick="self.location.href='notice2.php'">자료실</li>
          </ul>
          <div id="t_con">
            <div id="tab1">
              <table id="big">
                <thead>
                  <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>등록일자</th>
                    <th>조회</th>
                  </tr>
                </thead>
                <tbody id="bigBody"></tbody>
              </table>

              <!-- //paging -->
              <div class="paging">
                <a  id="left"
                  ><span class="material-symbols-outlined"
                    >chevron_left</span
                  ></a
                >
                <a href="#" id="one">1</a>
                <a href="#" id="two">2</a>
                <a href="#" id="there">3</a>
                <a href="#" id="four">4</a>
                <a href="#" id="five">5</a>
                <a href="#" id="six">6</a>
                <a href="#" id="seven">7</a>
                <a href="#" id="eight">8</a>
                <a href="#" id="nine">9</a>
                <a href="#" id="ten">10</a>

                <a id="right"
                  ><span class="material-symbols-outlined"
                    >chevron_right</span
                  ></a
                >

                <!--<button-->
                <!--  type="button"-->
                <!--  id="write"-->
                <!--  onclick="self.location.href = 'writeComm.php'"-->

                <!--  글쓰기-->
                <!--</button>-->
              </div>
              <!-- //paging -->
            </div>

            <div id="tab2">
              <table id="big">
                <thead>
                  <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>등록일자</th>
                    <th>조회</th>
                  </tr>
                </thead>
                <tbody id="bigBody3">
                  <tr>
                    <td>7</td>
                    <td>와이파이 드라이버</td>
                    <td>관리자</td>
                    <td>2023-11-19</td>
                    <td>1120</td>
                  </tr>

                  <tr>
                    <td>6</td>
                    <td>텔레그램</td>
                    <td>관리자</td>
                    <td>2023-11-11</td>
                    <td>388</td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>카카오톡</td>
                    <td>관리자</td>
                    <td>2023-11-02</td>
                    <td>616</td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>윈도우10</td>
                    <td>관리자</td>
                    <td>2023-11-29</td>
                    <td>998</td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>vpn</td>
                    <td>관리자</td>
                    <td>2023-10-22</td>
                    <td>53</td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>포토샵</td>
                    <td>관리자</td>
                    <td>2023-10-12</td>
                    <td>334</td>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>엑셀</td>
                    <td>관리자</td>
                    <td>2023-09-21</td>
                    <td>21</td>
                  </tr>
                </tbody>
              </table>

              <!-- //paging -->
              <!-- <div class="paging">
                <a href="#" id="left"
                  ><span class="material-symbols-outlined"
                    >chevron_left</span
                  ></a
                >
                <a href="#" id="one">1</a>
                <a href="#" id="two">2</a>
                <a href="#" id="there">3</a>
                <a href="#" id="four">4</a>
                <a href="#" id="five">5</a>
                <a href="#" id="right"
                  ><span class="material-symbols-outlined"
                    >chevron_right</span
                  ></a> -->

              <!--<button-->
              <!--  type="button"-->
              <!--  id="write"-->
              <!--  onclick="self.location.href = 'writeComm.php'"-->

              <!--  글쓰기-->
              <!--</button>-->
              <!-- </div> -->
              <!-- //paging -->
            <!-- </div> -->
<!-- 
            <div id="tab3">
              <table id="big">
                <thead>
                  <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>날짜</th>
                    <th>조회</th>
                  </tr>
                </thead>
                <tbody id="bigBody3"> -->
                  <!-- <tr>
                    <td>4</td>
                    <td>블랙등록 안내</td>
                    <td>관리자</td>
                    <td>2023-10-29</td>
                    <td>998</td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>크롬이용안내</td>
                    <td>관리자</td>
                    <td>2023-09-18</td>
                    <td>530</td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>블랙아머 이용수칙</td>
                    <td>관리자</td>
                    <td>2023-06-12</td>
                    <td>334</td>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>블랙아머 오픈안내</td>
                    <td>관리자</td>
                    <td>2023-04-21</td>
                    <td>210</td>
                  </tr> -->
                </tbody>
              </table>

              <!-- //paging -->
              <!-- <div class="paging">
                <a href="#"
                  ><span class="material-symbols-outlined"
                    >keyboard_double_arrow_left</span
                  ></a
                >
                <a href="#"
                  ><span class="material-symbols-outlined"
                    >chevron_left</span
                  ></a
                >
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <strong>5</strong>
                <a href="#">6</a>
                <a href="#">7</a>
                <a href="#">8</a>
                <a href="#">9</a>
                <a href="#"
                  ><span class="material-symbols-outlined"
                    >chevron_right</span
                  ></a
                >
                <a href="#"
                  ><span class="material-symbols-outlined"
                    >keyboard_double_arrow_right</span
                  ></a
                >
                <button type="button" id="write">글쓰기</button>
              </div> -->
            </div>
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

        const bigBody3 = document.querySelector("#bigBody3");

        fetch("/backend/fileNoticeList.php")
          .then((res) => res.json())
          .then((data) => {  
             bigBody3.innerHTML = ''
            data.forEach((element,i) => {
     
              let smallData = `
                  <tr onclick="self.location.href='fileDetail.php?id=${element[0]}'">
                  
                    <td>${i+1}</td>
                    <td>${element[2]}</td>
                    <td>${element[1]}</td>
                    <td>${element[5]}</td>
                    <td>${element[6]}</td>
                  </tr>
                  `


              bigBody3.innerHTML+= smallData;
            });
          })
        

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

        // References for numbers 6 to 10
        const six = document.querySelector("#six");
        const seven = document.querySelector("#seven");
        const eight = document.querySelector("#eight");
        const nine = document.querySelector("#nine");
        const ten = document.querySelector("#ten");


        const left = document.querySelector("#left");
        const right = document.querySelector("#right");

        const check = parseInt(id / 10);

        left.addEventListener("click", () => {
          if(url.searchParams.get("id") == 1 || url.searchParams.get("id") == null){
            alert("그 전 페이지가 존재하지 않습니다.");
            return false;
          }
          self.location.href=`notice.php?id=${parseInt(url.searchParams.get("id"))-1}`  
        });

        right.addEventListener("click", () => { 
          const idx = parseInt(url.searchParams.get("id") == null ? 1 :url.searchParams.get("id") )+1;
   
          self.location.href=`notice.php?id=${parseInt(idx)}`;  
        });

        const elementIds = ["one", "two", "there", "four", "five", "six", "seven", "eight", "nine", "ten"];

        // check+1에 해당하는 ID의 요소에 배경색을 적용합니다.
        const targetId = elementIds[id % 10 -1] ;

        if (targetId) {
            const targetElement = document.querySelector(`#${targetId}`);
            targetElement.style.backgroundColor = 'rgb(115, 103, 240)'; // 원하는 배경색으로 변경하세요
            targetElement.style.color = "white";
        }



        // 기존 코드
        one.textContent =check * 10 +1;
        two.textContent = check * 10 +2;
        there.textContent = check * 10 +3;
        four.textContent = check * 10 +4;
        five.textContent =check * 10 +5;

   
        
        // Setting text content for numbers 6 to 10
        six.textContent = check * 10 + 6;
        seven.textContent = check * 10 + 7;
        eight.textContent = check * 10 + 8;
        nine.textContent = check * 10 + 9;
        ten.textContent = check * 10 + 10;

        for (let i = 0; i < elementIds.length; i++) {
            const element = document.querySelector(`#${elementIds[i]}`);

            element.addEventListener("click", () => {
                self.location.href = `./notice.php?id=${element.textContent}`;
            });
        }
        // const main = document.querySelector("#main");
        const bigBody = document.querySelector("#bigBody");
        // const bigBody3 = document.querySelector("#bigBody3");

        function truncateText(text, maxLength) {
          if (text.length > maxLength) {
            return text.substring(0, maxLength) + "...";
          } else {
            return text;
          }
        }


        fetch("/backend/noticeLimit.php", {
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
            if(data.length == 0){
              alert("해당 페이지는 존재하지 않습니다.")
              history.go(-1);
            }
           
            data.forEach((element, i) => {
          
              let boxData = `
          <tr class="post" id="post${element["pk"]}">
              <td>${i + 1}</td>
              <td>${element["title"]}</td>
              <td>관리자</td>
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

                self.location.href = `./noticeView.php?id=${id}`;
              });
            });
          })
          .catch(()=>{
            alert("해당 페이지는 존재하지 않습니다.")
            history.go(-1);
          })

        // fetch("/backend/noticeList.php")
        //   .then((res) => res.json())
        //   .then((data) => {
        //     data.forEach((element, i) => {
        //       let boxData = `
        //       <tr class="post2" id="post${element["pk"]}">
        //           <td>${i + 1}</td>
        //           <td>${element["title"]}</td>
        //           <td>관리자</td>
        //           <td>${element["date"]}</td>
        //           <td>${element["count"]}</td>
        //       </tr>
        //   `;

        //       bigBody.innerHTML += boxData;
        //     });

        //     const posts = document.querySelectorAll(".post2");
        //     posts.forEach((element) => {
        //       element.addEventListener("click", () => {
        //         const ids = element.id.substring(4);

        //         self.location.href = `./noticeDetail.php?id=${ids}`;
        //       });
        //     });
        //   });

        fetch("/backend/commCount.php")
          .then((res) => res.json())
          .then((data) => {
            const checks = parseInt(id / 10);

            let count = data[0]["count"] - checks * 100;

            console.log(count);
            if (count % 10 == 0) {
              count = parseInt(count / 10);
              for (let i = 2; i <= 10; i++) {
                const element = document.getElementById(`${elementIds[i-1]}`);
                if (count < i) {
                  element.style.display = "none";
                }
              }
            } else {
              count = parseInt(count / 10);
              for (let i = 1; i <= 9; i++) {
                const element = document.getElementById(`${elementIds[i]}`);
                if (count < i) {
                  element.style.display = "none";
                }
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
    </script>
  </body>
</html>
