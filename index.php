<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>블랙아머</title>
    <link rel="stylesheet" href="/css/search.css" tpye="text/css" />

    <script
      src="https://kit.fontawesome.com/dd244c30e3.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link
      href="//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css"
      rel="stylesheet"
      type="text/css"
    />
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
      <div id="container">
        <div>
          <h2>사기피해사례 검색</h2>
          <div class="box">
            <!-- <select id="filter">
              <option value="name">이름</option>
              <option value="userID">아이디</option>
              <option value="number">전화번호</option>
              <option value="account">계좌번호</option>
            </select> -->
            <input
              tpye="text"
              id="log"
              placeholder="연락처 또는 계좌번호, 이름으로 검색해 보세요."
              maxlength="30"
            />
            <button type="button" id="search">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>

          <h3>
            블랙아머는 범죄피해 방지 및 범죄피해자 보호를 위해 2006년부터
            운영되고 있습니다.
          </h3>
        </div>
      </div>

      <div id="info">
        <table id="big">
          <thead id="big_thead">
            <tr>
              <th>이름</th>
              <th>은행명</th>
              <th>계좌번호</th>
              <th>전화번호</th>
              <th>아이디</th>
              <th>아이피</th>
              <th>등록일자</th>
              <th>작성자</th>
              <th>확정</th>
              <th>조회수</th>
            </tr>
          </thead>
          <tbody id="big_tbody">
          
          </tbody>
        </table>

        <table id="small">
          <thead id="small_thead">
            <tr>
              <th>
                이름<br />
                은행명<br />
                아이디
              </th>
              <th>
                전화번호<br />
                계좌번호<br />
                아이피
              </th>
              <th>
                등록일자<br />
                작성자<br />  
                조회수
              </th>
              <th>확정<br /></th>
            </tr>
          </thead>
          <tbody id="small_tbody">
            <!-- <tr>
              <td>
                김병만<br /><br />
                농협<br /><br />
                soso1212
              </td>
              <td>
                01023568956<br /><br />
                3925623894523<br /><br />
                109.210.330.119
              </td>
              <td>
                2023-10-02<br /><br />
                제우스<br /><br />
                112
              </td>
              <td>
                <span class="material-symbols-outlined">
                  local_fire_department </span
                >&nbsp;533
              </td>
            </tr>

            <tr>
              <td colspan="4" class="popo">
                양빵,작업베팅,통협,3자사기 가입하고 협박함
              </td>
            </tr>

            <tr>
              <td>
                류현진<br /><br />
                국민<br /><br />
                fastgogo
              </td>
              <td>
                01023568956<br /><br />
                443565443123445<br /><br />
                111.222.334.233
              </td>
              <td>
                2023-03-23<br /><br />
                쥬라기<br /><br />
                112
              </td>
              <td>
                <span class="material-symbols-outlined">
                  local_fire_department </span
                >&nbsp;0
              </td>
            </tr>
            <tr class="detail">
              <td colspan="4">양빵 사무실</td>
            </tr>

            <tr>
              <td>
                손병삼<br /><br />
                신한<br /><br />
                koreamonster
              </td>
              <td>
                01023568956<br /><br />
                110333912112121297744<br /><br />
                110.231.342.444
              </td>
              <td>
                2023-08-14<br /><br />
                우든코스터<br /><br />
                112
              </td>
              <td>
                <span class="material-symbols-outlined">
                  local_fire_department </span
                >&nbsp;1
              </td>
            </tr>
            <tr>
              <td colspan="4">악질 다막힘 절대 받으면 안됨</td>
            </tr> -->
          </tbody>
        </table>
      </div>

      <?php

      include 'footer.php';
      ?>
    </div>
    <!-- //wrap -->

    <script>
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

      info.style.display = "none";

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

      let nickname;

      fetch("/backend/selectMyNickname.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          id: userId,
        }),
      })
        .then((res) => res.json())
        .then((data) => {
            nickname = data[0]["user_nickname"]
        });


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
          } else  {
            filterValues = "number";
          } 
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
              const big_tbody = document.querySelector("#big_tbody");
              const small_tbody = document.querySelector("#small_tbody");

       

              info.style.display = "block";
              big_tbody.innerHTML = "";
              small_tbody.innerHTML = "";

              if (data.length == 0) {
                alert(`검색된 데이터가 없습니다.`);
                big_data = `

                <tr>
                          <td class="transparent"></td>
                        </tr>


                 <tr>
                    <td>•</td>
                    <td>•</td>
                    <td>•</td>
                    <td>•</td>
                    <td>•</td>
                    <td>•</td>
                    <td>•</td>
                    <td>•</td>
                    <td><span class="material-symbols-outlined">local_fire_department
                        </span><br><span class="score">•</span>
                    </td>
                    <td>•</td>
                  </tr>
                  <tr>
                      <td colspan='2' class="popo">•</td>
                      <td colspan='8' class="papa">•</td>
                  </tr>
                `;

                small_data = `
                <td>
                •<br /><br />
                •<br /><br />
                •
                  </td>
                  <td>
                  •<br /><br />
                  •<br /><br />
                  •
                  </td>
                  <td>
                  •<br /><br />
                  •<br /><br />
                  •
                  </td>
                  <td>
                    <span class="material-symbols-outlined">
                      local_fire_department </span
                    ><br /><span class="score">•</span>
                  </td>
                </tr>

                <tr>
                  <td colspan="1" class="popo">•</td>
                  <td colspan="3" class="papa">
                  •
                  </td>
                </tr>
                `;

                big_tbody.innerHTML += big_data;
                small_tbody.innerHTML += small_data;

            
              }
              fetch("/backend/footer.php")
                .then((res) => res.json())
                .then((data) => {

          
                  console.log(data);
                    // 각각의 count에 데이터를 삽입
                    document.querySelector("#count1").textContent = (parseInt(data[0]["count1"])+1).toLocaleString('ko-KR');
                    document.querySelector("#count2").textContent = parseInt(parseInt(data[1]["count2"])+1).toLocaleString('ko-KR');
                })
                .catch((error) => {
                    console.error('데이터를 불러오는 중 에러 발생:', error);
              });
               
            


              fetch("/backend/searchLog.php", {
                method: "POST",
                headers: {
                  "Content-Type": "application/json",
                },
                body: JSON.stringify({
                  userId: userId,
                  userNm: nickname,
                  keyword: filterValues,
                  history: log.value,
                }),
              })
                .then((res) => res.json())
                .then((data) => {});

              const arr = [];
              async function fetchData() {
                for (const element of data) {
                  let color;

                    const response = await fetch("/backend/confirmedCheck.php", {
                      method: "POST",
                      headers: {
                        "Content-Type": "application/json",
                      },
                      body: JSON.stringify({
                        pk: element["pk"],
                        userId: getCookie("userId"),
                      }),
                    });

                    const responseData = await response.json();

                    if (responseData["state"] == "delete") {
                      arr.push(1);
                      color = "red";
                    } else {
                      arr.push(0);
                      color = "black";
                    }
                  };
              }

              fetchData();
              let i =0;
              const brr = [];

              async function fetchData2() {
                for (const element of data) {
          

                    const response = await fetch("/backend/selectMyNickname.php", {
                      method: "POST",
                      headers: {
                          "Content-Type": "application/json",
                      },
                      body: JSON.stringify({
                          id: element["post_userId"],
                      }),
                      })

                    const responseData = await response.json();
                      let nick
                    try {
                      nick = responseData[0]["user_nickname"];
                    } catch (error) {
                      nick = "";
                    }
                    const big_data = `
                      <tr>
                        <td class="transparent"></td>
                      </tr>

                      <tr>
                        <td>${
                          element["black_name"] != ""
                            ? element["black_name"]
                            : "•"
                        }</td>
                        <td>${
                          element["black_bank"] != "none"
                            ? element["black_bank"]
                            : "•"
                        }</td>
                        <td>${
                          element["black_account"] != ""
                            ? element["black_account"]
                            : "•"
                        }</td>
                        <td>${
                          element["black_number"] != ""
                            ? element["black_number"]
                            : "•"
                        }</td>
                        <td>${
                          element["black_userId"] != ""
                            ? element["black_userId"]
                            : "•"
                        }</td>
                        <td>${
                          element["black_ip"] != "" ? element["black_ip"] : "•"
                        }</td>
                        <td>${
                          element["black_date"] != ""
                            ? element["black_date"]
                            : "•"
                        }</td>
                        <td>${
                          nick != ""
                            ? nick
                            : "•"
                        }</td>
                        <td ><span id="${
                          element["pk"]
                        }" class="confirmed material-symbols-outlined" >local_fire_department
                            </span><br><span class="score" id="confirmedValue_${
                              element["pk"]
                            }" style="font-size: 16px;">${element["cc"]-1}</span>
                      <td>${element["check_number"]}</td>
                      </tr>
                      <tr>
                        <td colspan='2' class="popo">${
                          element["black_desc"] != ""
                            ? element["black_desc"]
                            : "•"
                        }</td>
                        <td colspan='9' class="papa">${
                          element["black_content"] != ""
                            ? element["black_content"]
                            : "•"
                        }</td>
                      </tr>
                      <tr>
                        <td class="transparent"></td>
                      </tr>
                      `;

                const small_data = `
                        <tr>
                        <td class="transparent"></td>
                      </tr>
                        <tr>
                        <td>${
                          element["black_name"] != ""
                            ? element["black_name"]
                            : "•"
                        }<br><br>
                        ${
                          element["black_bank"] != "none"
                            ? element["black_bank"]
                            : "•"
                        }<br><br>
                        ${
                          element["black_userId"] != ""
                            ? element["black_userId"]
                            : "•"
                        }
                        </td>
                        <td>${
                          element["black_number"] != ""
                            ? element["black_number"]
                            : "•"
                        }<br><br>
                        ${
                          element["black_account"] != ""
                            ? element["black_account"]
                            : "•"
                        }<br><br>
                        ${element["black_ip"] != "" ? element["black_ip"] : "•"}
                        </td>
                        <td>${
                          element["black_date"] != ""
                            ? element["black_date"]
                            : "•"
                        }<br><br>
                        ${
                          nick != ""
                            ? nick
                            : "•"
                        }<br><br>
                        ${
                          element["check_number"] != ""
                            ? element["check_number"]
                            : "•"
                        }
                        </td>
                        <td>
                        <span id="${
                          element["pk"]
                        }" class="confirmed_small material-symbols-outlined" >
                        local_fire_department
                        </span ><br><span class="score" id="confirmedValue2_${
                          element["pk"]
                        }" style="font-size: 14px;">${element["cc"]-1}</span>
                        </td>
                      </tr>

                      <tr>
                      <td colspan='2' class="popo">${
                        element["black_desc"] != ""
                          ? element["black_desc"]
                          : "•"
                      }</td>
                      <td colspan='9' class="papa">${
                        element["black_content"] != ""
                          ? element["black_content"]
                          : "•"
                      }</td>
                      </tr>

                      <tr>
                        <td class="transparent"></td>
                      </tr>

                            `;

                big_tbody.innerHTML += big_data;
                small_tbody.innerHTML += small_data;
                brr.push(0);
                i+=1;
                      
                  };
              }

              fetchData2()

        

         
              const interval = setInterval(() => {
                
                if(data.length != brr.length){
                  return false;
                }
                if(data.length != brr.length){
                  return false;
                }

                let confirmed = document.querySelectorAll(".confirmed");
                let confirmed_small =
                  document.querySelectorAll(".confirmed_small");

                confirmed_small.forEach((element, i) => {
                  if (arr[i] == 1) {
                    element.style.color = "red";
                  } else if (arr[i] == 0) {
                    element.style.color = "black";
                  }
                  element.addEventListener("click", () => {
                    console.log("dadsa");
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
                        let datas_value = document.querySelector(
                          `#confirmedValue_${element.id}`
                        );
                        let datas_value2 = document.querySelector(
                          `#confirmedValue2_${element.id}`
                        );

                        let color;
                        if (data["state"] == "add") {
                          element.style.color = "red";
                          datas_value.textContent =
                            parseInt(datas_value.textContent) + 1;
                          datas_value2.textContent =
                            parseInt(datas_value2.textContent) + 1;
                          color = "red";
                        } else {
                          element.style.color = "black";
                          datas_value.textContent -= 1;
                          datas_value2.textContent -= 1;
                          color = "black";
                        }

                        confirmed.forEach((elements) => {
                          if (elements.id == element.id) {
                            elements.style.color = color;
                          }
                        });
                      });
                  });
                });

                confirmed.forEach((element, i) => {
                  
                  if (arr[i] == 1) {
                    element.style.color = "red";
                  } else if (arr[i] == 0) {
                    element.style.color = "black";
                  }
                  console.log(element.id);
                  element.addEventListener("click", () => {
                    console.log("dadsa");
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
                        let datas_value = document.querySelector(
                          `#confirmedValue_${element.id}`
                        );
                        let datas_value2 = document.querySelector(
                          `#confirmedValue2_${element.id}`
                        );

                        let color;
                        if (data["state"] == "add") {
                          element.style.color = "red";
                          datas_value.textContent =
                            parseInt(datas_value.textContent) + 1;
                          datas_value2.textContent =
                            parseInt(datas_value2.textContent) + 1;
                          color = "red";
                        } else {
                          element.style.color = "black";
                          datas_value.textContent -= 1;
                          datas_value2.textContent -= 1;
                          color = "bloack";
                        }

                        confirmed_small.forEach((elements) => {
                          console.log(elements.id + "__" + element.id);
                          if (elements.id == element.id) {
                            elements.style.color = color;
                          }
                        });
                      });
                  });
                });
                stop();
              }, 200);
              function stop(){
                console.log("stopped")
                clearInterval(interval)
            }
            });

           
        }

            
      
      });
    </script>
  </body>
</html>
