<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>블랙아머</title>
    <link rel="stylesheet" href="css/rank.css" tpye="text/css" />

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
      <!-- <div id="container">
                
                    <div>
                        <h2>사기피해사례 검색</h2>
                        <div class="box">
                            <input tpye="text" placeholder="연락처 또는 계좌번호, 이름으로 검색해 보세요." maxlength="20">
                            <button type="button" onclick="location.href='search.html'"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        
                        <h3>블랙아머는 범죄피해 방지 및 범죄피해자 보호를 위해 2006년부터 운영되고 있습니다.</h3>
                    </div>
                
            </div>
             -->
      <!-- 등록 -->
      <div id="tab">
        <div class="inner">
          <ul id="t_btn">
            <li onclick="self.location.href='rank.php'">조회수랭킹</li>
            <li onclick="self.location.href='rank2.php'">확정랭킹</li>
            <li onclick="self.location.href='rank3.php'">최근등록</li>
          </ul>
          <div id="t_con">
            <div id="tab1">
              <table id="big">
                <thead>
                  <tr>
                    <td class="transparent"></td>
                  </tr>
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
                    <th>랭킹</th>
                  </tr>
                </thead>
                <tbody id="big_check">
                  <!-- <tr>
                                      <td>김병만</td>
                                      <td>농협</td>
                                      <td>3925623894523</td>
                                      <td>01023568956</td>
                                      <td>soso1212</td>
                                      <td>109.210.330.119</td>
                                      <td>2023-10-02</td>
                                      <td>제우스</td>
                                      <td><span class="material-symbols-outlined">local_fire_department
                                          </span><br><span class="score">533</span>
                                      </td>
                                      <td>5567</td>
                                      <td>1</td>
                                    </tr>
                                    <tr>
                                        <td colspan='2' class="popo">통장협박•계좌신고</td>
                                        <td colspan='9' class="papa">양빵,작업베팅,통협,3자사기 가입하고 협박함</td>
                                    </tr>
                                    
                                    <tr>
                                      <td>류현진</td>
                                      <td>국민</td>
                                      <td>443565443123445</td>
                                      <td>01023568956</td>
                                      <td>fastgogo</td>
                                      <td>111.222.334.233</td>
                                      <td>2023-03-23</td>
                                      <td>쥬라기</td>
                                      <td><span class="material-symbols-outlined">local_fire_department
                                          </span><br><span class="score">1024</span>
                                      </td>
                                      <td>4512</td>
                                      <td>2</td>
                                    </tr>
                                    <tr>
                                        <td colspan='2' class="popo">통장협박•계좌신고</td>
                                        <td colspan='9' class ="papa">양빵 사무실</td>
                                    </tr>
            
                                    <tr>
                                        <td>손병삼</td>
                                        <td>신한</td>
                                        <td>110333997744</td>
                                        <td>01023568956</td>
                                        <td>koreamonster</td>
                                        <td>110.231.342.444</td>
                                        <td>2023-08-14</td>
                                        <td>우든코스터</td>
                                        <td><span class="material-symbols-outlined">local_fire_department
                                            </span><br><span class="score">776</span>
                                        </td>
                                        <td>2354</td>
                                        <td>3</td>
                                        <tr>
                                            <td colspan='2' class="popo">3자사기</td>
                                            <td colspan='9' class="papa">악질 다막힘 절대 받으면 안됨</td>
                                        </tr>
                                    </tr> -->
                </tbody>
              </table>

              <table id="small">
                <thead>
                  <tr>
                    <td class="transparent"></td>
                  </tr>
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
                    <th>
                      랭킹<br />
                      확정
                    </th>
                  </tr>
                </thead>
                <tbody id="small_check">
                  <!-- <tr>
                                      <td>김병만<br><br>
                                          농협<br><br>
                                          soso1212
                                      </td>
                                      <td>01023568956<br><br>
                                          3925623894523<br><br>
                                          109.210.330.119
                                      </td>
                                      <td>2023-10-02<br><br>
                                          제우스<br><br>
                                          5667
                                      </td>
                                      <td><span class="coco">1</span><br>
                                        <span class="material-symbols-outlined">
                                        local_fire_department
                                        </span><br><span class="score">553</span>
                                      </td>
                                    </tr>
            
                                    <tr>
                                        <td colspan='1' class="popo">통장협박•계좌신고</td>
                                        <td colspan='3' class="papa">양빵,작업베팅,통협,3자사기 가입하고 협박함</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>류현진<br><br>
                                            국민<br><br>
                                            fastgogo
                                        </td>
                                        <td>01023568956<br><br>
                                            443565443123445<br><br>
                                            111.222.334.233
                                        </td>
                                        <td>2023-03-23<br><br>
                                            쥬라기<br><br>
                                            4512
                                        </td>
                                        <td><span class="coco">2</span><br>
                                            <span class="material-symbols-outlined">
                                            local_fire_department
                                            </span><br><span class="score">1024</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan='1' class="popo">통장협박•계좌신고</td>
                                        <td colspan='3' class="papa">양빵 사무실</td>
                                      </tr>
                                      
                                      <tr>
                                        <td>손병삼<br><br>
                                            신한<br><br>
                                            koreamonster
                                        </td>
                                        <td>01023568956<br><br>
                                            110333912112121297744<br><br>
                                            110.231.342.444
                                        </td>
                                        <td>2023-08-14<br><br>
                                            우든코스터<br><br>
                                            2354
                                        </td>
                                        <td><span class="coco">3</span><br>
                                            <span class="material-symbols-outlined">
                                            local_fire_department
                                            </span><br><span class="score">776</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan='1' class="popo">3자사기</td>
                                        <td colspan='3' class="papa">악질 다막힘 절대 받으면 안됨</td>
                                      </tr> -->
                </tbody>
              </table>
            </div>

            <div id="tab2">
              <table id="big">
                <thead>
                  <tr>
                    <td class="transparent"></td>
                  </tr>
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
                    <th>랭킹</th>
                  </tr>
                </thead>
                <tbody id="big_confirmed">
                  <!-- <tr>
                                      <td>김병만</td>
                                      <td>농협</td>
                                      <td>3925623894523</td>
                                      <td>01023568956</td>
                                      <td>soso1212</td>
                                      <td>109.210.330.119</td>
                                      <td>2023-10-02</td>
                                      <td>제우스</td>
                                      <td><span class="material-symbols-outlined">local_fire_department
                                          </span><br><span class="score">5567</span>
                                      </td>
                                      <td>2243</td>
                                      <td>1</td>
                                    </tr>
                                    <tr>
                                        <td colspan='2' class="popo">통장협박•계좌신고</td>
                                        <td colspan='9' class="papa">양빵,작업베팅,통협,3자사기 가입하고 협박함</td>
                                    </tr>
                                    
                                    <tr>
                                      <td>류현진</td>
                                      <td>국민</td>
                                      <td>443565443123445</td>
                                      <td>01023568956</td>
                                      <td>fastgogo</td>
                                      <td>111.222.334.233</td>
                                      <td>2023-03-23</td>
                                      <td>쥬라기</td>
                                      <td><span class="material-symbols-outlined">local_fire_department
                                          </span><br><span class="score">3234</span>
                                      </td>
                                      <td>1956</td>
                                      <td>2</td>
                                    </tr>
                                    <tr>
                                        <td colspan='2' class="popo">통장협박•계좌신고</td>
                                        <td colspan='9' class ="papa">양빵 사무실</td>
                                    </tr>
            
                                    <tr>
                                        <td>손병삼</td>
                                        <td>신한</td>
                                        <td>110333997744</td>
                                        <td>01023568956</td>
                                        <td>koreamonster</td>
                                        <td>110.231.342.444</td>
                                        <td>2023-08-14</td>
                                        <td>우든코스터</td>
                                        <td><span class="material-symbols-outlined">local_fire_department
                                            </span><br><span class="score">1243</span>
                                        </td>
                                        <td>3232</td>
                                        <td>3</td>
                                        <tr>
                                            <td colspan='2' class="popo">3자사기</td>
                                            <td colspan='9' class="papa">악질 다막힘 절대 받으면 안됨</td>
                                        </tr>
                                    </tr> -->
                </tbody>
              </table>

              <table id="small">
                <thead>
                  <tr>
                    <td class="transparent"></td>
                  </tr>
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
                    <th>
                      랭킹<br />
                      확정
                    </th>
                  </tr>
                </thead>
                <tbody id="small_confirmed">
                  <!-- <tr>
                                      <td>김병만<br><br>
                                          농협<br><br>
                                          soso1212
                                      </td>
                                      <td>01023568956<br><br>
                                          3925623894523<br><br>
                                          109.210.330.119
                                      </td>
                                      <td>2023-10-02<br><br>
                                          제우스<br><br>
                                          2243
                                      </td>
                                      <td><span class="coco">1</span><br>
                                        <span class="material-symbols-outlined">
                                        local_fire_department
                                        </span><br><span class="score">5567</span>
                                      </td>
                                    </tr>
            
                                    <tr>
                                        <td colspan='1' class="popo">통장협박•계좌신고</td>
                                        <td colspan='3' class="papa">양빵,작업베팅,통협,3자사기 가입하고 협박함</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>류현진<br><br>
                                            국민<br><br>
                                            fastgogo
                                        </td>
                                        <td>01023568956<br><br>
                                            443565443123445<br><br>
                                            111.222.334.233
                                        </td>
                                        <td>2023-03-23<br><br>
                                            쥬라기<br><br>
                                            1956
                                        </td>
                                        <td><span class="coco">2</span><br>
                                            <span class="material-symbols-outlined">
                                            local_fire_department
                                            </span><br><span class="score">3234</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan='1' class="popo">통장협박•계좌신고</td>
                                        <td colspan='3' class="papa">양빵 사무실</td>
                                      </tr>
                                      
                                      <tr>
                                        <td>손병삼<br><br>
                                            신한<br><br>
                                            koreamonster
                                        </td>
                                        <td>01023568956<br><br>
                                            110333912112121297744<br><br>
                                            110.231.342.444
                                        </td>
                                        <td>2023-08-14<br><br>
                                            우든코스터<br><br>
                                            3232
                                        </td>
                                        <td><span class="coco">3</span><br>
                                            <span class="material-symbols-outlined">
                                            local_fire_department
                                            </span><br><span class="score">1243</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan='1' class="popo">3자사기</td>
                                        <td colspan='3' class="papa">악질 다막힘 절대 받으면 안됨</td>
                                      </tr> -->
                </tbody>
              </table>
            </div>

            <div id="tab3">
              <table id="big">
                <thead>
                  <tr>
                    <td class="transparent"></td>
                  </tr>
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
                  <!-- <tr>
                                      <td>김병만</td>
                                      <td>농협</td>
                                      <td>3925623894523</td>
                                      <td>01023568956</td>
                                      <td>soso1212</td>
                                      <td>109.210.330.119</td>
                                      <td>2023-11-26</td>
                                      <td>제우스</td>
                                      <td><span class="material-symbols-outlined">local_fire_department
                                          </span><br><span class="score">533</span>
                                      </td>
                                      <td>5567</td>
                                    </tr>
                                    <tr>
                                        <td colspan='2' class="popo">통장협박•계좌신고</td>
                                        <td colspan='8' class="papa">양빵,작업베팅,통협,3자사기 가입하고 협박함</td>
                                    </tr>
                                    
                                    <tr>
                                      <td>류현진</td>
                                      <td>국민</td>
                                      <td>443565443123445</td>
                                      <td>01023568956</td>
                                      <td>fastgogo</td>
                                      <td>111.222.334.233</td>
                                      <td>2023-11-23</td>
                                      <td>쥬라기</td>
                                      <td><span class="material-symbols-outlined">local_fire_department
                                          </span><br><span class="score">1</span>
                                      </td>
                                      <td>4512</td>
                                    </tr>
                                    <tr>
                                        <td colspan='2' class="popo">통장협박•계좌신고</td>
                                        <td colspan='8' class ="papa">양빵 사무실</td>
                                    </tr>
            
                                    <tr>
                                        <td>손병삼</td>
                                        <td>신한</td>
                                        <td>110333997744</td>
                                        <td>01023568956</td>
                                        <td>koreamonster</td>
                                        <td>110.231.342.444</td>
                                        <td>2023-11-19</td>
                                        <td>우든코스터</td>
                                        <td><span class="material-symbols-outlined">local_fire_department
                                            </span><br><span class="score">0</span>
                                        </td>
                                        <td>2354</td>
                                        <tr>
                                            <td colspan='2' class="popo">3자사기</td>
                                            <td colspan='8' class="papa">악질 다막힘 절대 받으면 안됨</td>
                                        </tr>
                                    </tr> -->
                </tbody>
              </table>

              <table id="small">
                <thead>
                  <tr>
                    <td class="transparent"></td>
                  </tr>
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
                    <th>확정</th>
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
                      2023-11-26<br /><br />
                      제우스<br /><br />
                      112
                    </td>
                    <td>
                      <span class="material-symbols-outlined">
                        local_fire_department </span
                      ><br /><span class="score">5567</span>
                    </td>
                  </tr>

                  <tr>
                    <td colspan="1" class="popo">통장협박•계좌신고</td>
                    <td colspan="3" class="papa">
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
                      2023-11-23<br /><br />
                      쥬라기<br /><br />
                      4512
                    </td>
                    <td>
                      <span class="material-symbols-outlined">
                        local_fire_department </span
                      ><br /><span class="score">0</span>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="1" class="popo">통장협박•계좌신고</td>
                    <td colspan="3" class="papa">양빵 사무실</td>
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
                      2023-11-19<br /><br />
                      우든코스터<br /><br />
                      2354
                    </td>
                    <td>
                      <span class="material-symbols-outlined">
                        local_fire_department </span
                      ><br /><span class="score">1</span>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="1" class="popo">3자사기</td>
                    <td colspan="3" class="papa">
                      악질 다막힘 절대 받으면 안됨
                    </td>
                  </tr> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- 등록 -->

      <?php
        include 'footer.php'
      ?>
    </div>
    <!-- //wrap -->
    <!-- 
     <script src="js/index.js"></script> -->

    <script>
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
          console.log(data);
          const arr = [];
          let xi = 0;
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
              
              if (responseData["state"] === "delete") {
                arr.push(1);
                color = "red";
              } else {
                arr.push(0);
                color = "black";
              }
              console.log(responseData["state"]+"__"+xi);
              xi+=1;
            }
        }

          fetchData();

          data.forEach((element, i) => {
            const big_data = `

      <tr>
                <td class="transparent"></td>
              </tr>

          <td>${element["black_name"] != "" ? element["black_name"] : "•"}</td>
          <td>${
            element["black_bank"] != "none" ? element["black_bank"] : "•"
          }</td>
          <td>${
            element["black_account"] != "" ? element["black_account"] : "•"
          }</td>
          <td>${
            element["black_number"] != "" ? element["black_number"] : "•"
          }</td>
          <td>${
            element["black_userId"] != "" ? element["black_userId"] : "•"
          }</td>
          <td>${element["black_ip"] != "" ? element["black_ip"] : "•"}</td>
          <td>${element["black_date"] != "" ? element["black_date"] : "•"}</td>
          <td>${
            element["post_userId"] != "" ? element["post_userId"] : "•"
          }</td>
        <td>
        <span  id="${
          element["pk"]
        }" class="confirmed material-symbols-outlined" >local_fire_department
            </span><br><span class="score" id="confirmedValue_${
              element["pk"]
            }">${element["cc"]}</span>
        </td>
        <td>${element["check_number"]}</td>
        <td>${i + 1}</td>
      </tr>
      <tr>
      <td colspan='2' class="popo">${
        element["black_desc"] != "" ? element["black_desc"] : "•"
      }</td>
      <td colspan='9' class="papa">${
        element["black_content"] != "" ? element["black_content"] : "•"
      }</td>
      </tr>

      <tr>
                <td class="transparent"></td>
              </tr>
        `;
            big_check.innerHTML += big_data;

            const small_data = `


      <tr>
                <td class="transparent"></td>
              </tr>
      <tr>
            <td>${
              element["black_name"] != "" ? element["black_name"] : "•"
            }<br><br>
            ${
              element["black_bank"] != "none" ? element["black_bank"] : "•"
            }<br><br>
            ${element["black_userId"] != "" ? element["black_userId"] : "•"}
            </td>
            <td>${
              element["black_number"] != "" ? element["black_number"] : "•"
            }<br><br>
            ${
              element["black_account"] != "" ? element["black_account"] : "•"
            }<br><br>
            ${element["black_ip"] != "" ? element["black_ip"] : "•"}
            </td>
            <td>${
              element["black_date"] != "" ? element["black_date"] : "•"
            }<br><br>
            ${
              element["post_userId"] != "" ? element["post_userId"] : "•"
            }<br><br>
            ${element["check_number"]}
            </td>
            <td><span class="coco">${i + 1}</span><br>
            <span <span id="${
              element["pk"]
            }" class="material-symbols-outlined confirmed_small">
            local_fire_department
            </span><br>  <span  id="confirmedValue2_${
              element["pk"]
            }" class="score">${element["cc"]}</span>
            </td>
        </tr>

        <tr>
        <td colspan='2' class="popo">${
          element["black_desc"] != "" ? element["black_desc"] : "•"
        }</td>
        <td colspan='9' class="papa">${
          element["black_content"] != "" ? element["black_content"] : "•"
        }</td>
        </tr>
        <tr>
                <td class="transparent"></td>
              </tr>
        `;

            small_check.innerHTML += small_data;
          });

        const interval = setInterval(() => {
          if(data.length != arr.length){
                  return false;
              }


            let confirmed = document.querySelectorAll(".confirmed");
            let confirmed_small = document.querySelectorAll(".confirmed_small");

            confirmed_small.forEach((element, i) => {
              if (arr[i] === 1) {
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
              if (arr[i] === 1) {
                element.style.color = "red";
              } else if (arr[i] == 0) {
                element.style.color = "black";
              }
              console.log(element.id+"__"+arr[i]);
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

      // fetch("/backend/rank.php", {
      //   method: "POST",
      //   headers: {
      //     "Content-Type": "application/json",
      //   },
      //   body: JSON.stringify({
      //     type: "confirmed",
      //   }),
      // })
      //   .then((res) => res.json())
      //   .then((data) => {
      //     const arr = [];
      //     data.forEach( async(element, i) => {

      //       let color;

      //       const response = await fetch("/backend/confirmedCheck.php", {
      //           method: "POST",
      //           headers: {
      //             "Content-Type": "application/json",
      //           },
      //           body: JSON.stringify({
      //             pk: element["pk"],
      //             userId: getCookie("userId"),
      //           }),
      //       })

      //       const responseData = await response.json();

      //       if (responseData["state"] === "delete") {
      //         arr.push(1);
      //         color = "red";
      //       } else {
      //         arr.push(0);
      //         color = "black";
      //       }
      //       })

      //       data.forEach((element,i) => {
      //         const big_data = `

      //           <tr>
      //                     <td class="transparent"></td>
      //                   </tr>
      //           <td>${element["black_name"] != "" ? element["black_name"] : "•"}</td>
      //           <td>${element["black_bank"] != "none" ? element["black_bank"] : "•"}</td>
      //           <td>${element["black_account"] != "" ? element["black_account"] : "•"}</td>
      //           <td>${element["black_number"] != "" ? element["black_number"] : "•"}</td>
      //           <td>${element["black_userId"] != "" ? element["black_userId"] : "•"}</td>
      //           <td>${element["black_ip"] != "" ? element["black_ip"] : "•"}</td>
      //           <td>${element["black_date"] != "" ? element["black_date"] : "•"}</td>
      //           <td>${element["post_userId"] != "" ? element["post_userId"] : "•"}</td>
      //           <td>
      //           <span id="${
      //             element["pk"]
      //           }" class="confirmed2 material-symbols-outlined">local_fire_department
      //               </span><br><span class="score" id="confirmed2Value_${element["pk"]}" >${
      //           element["cc"]
      //           }</span>
      //           <td>${element["check_number"]}</td>
      //           <td>${i + 1}</td>
      //           </tr>
      //           <tr>
      //           <td colspan='2' class="popo">${element["black_desc"] != "" ? element["black_desc"] : "•"}</td>
      //           <td colspan='9' class="papa">${element["black_content"] != "" ? element["black_content"] : "•"}</td>
      //           </tr>

      //           <tr>
      //                     <td class="transparent"></td>
      //                   </tr>
      //           `;
      //           big_confirmed.innerHTML += big_data;

      //           const small_data = `

      //           <tr>
      //                     <td class="transparent"></td>
      //                   </tr>
      //           <tr>
      //             <td>${element["black_name"] != "" ? element["black_name"] : "•"}<br><br>
      //             ${element["black_bank"] != "none" ? element["black_bank"] : "•"}<br><br>
      //             ${element["black_userId"] != "" ? element["black_userId"] : "•"}
      //             </td>
      //             <td>${element["black_number"] != "" ? element["black_number"] : "•"}<br><br>
      //             ${element["black_account"] != "" ? element["black_account"] : "•"}<br><br>
      //             ${element["black_ip"] != "" ? element["black_ip"] : "•"}
      //             </td>
      //             <td>${element["black_date"] != "" ? element["black_date"] : "•"}<br><br>
      //             ${element["post_userId"] != "" ? element["post_userId"] : "•"}<br><br>
      //             ${element["check_number"]}
      //             </td>

      //             <td><span class="coco">${i + 1}</span><br>
      //             <span id="${
      //               element["pk"]
      //             }" class="confirmed_small2 material-symbols-outlined">
      //             local_fire_department
      //             </span><br><span id="confirmed2Value2_${element["pk"]}" class="score" >${element["cc"]}</span>
      //             </td>
      //           </tr>

      //           <tr>
      //           <td colspan='2' class="popo">${element["black_desc"] != "" ? element["black_desc"] : "•"}</td>
      //           <td colspan='9' class="papa">${element["black_content"] != "" ? element["black_content"] : "•"}</td>
      //           </tr>
      //           <tr>
      //                     <td class="transparent"></td>
      //                   </tr>

      //           `
      //           ;
      //           small_confirmed.innerHTML += small_data;
      //       });

      //     setTimeout(() => {
      //       let confirmed = document.querySelectorAll(".confirmed2");
      //       let confirmed_small = document.querySelectorAll(".confirmed_small2");

      //       confirmed_small.forEach((element, i) => {
      //         if (arr[i] === 1) {
      //           element.style.color = "red";
      //         } else if (arr[i] == 0) {
      //           element.style.color = "black";
      //         }
      //         element.addEventListener("click", () => {
      //           console.log("dadsa");
      //           fetch("/backend/confirmed.php", {
      //             method: "POST",
      //             headers: {
      //               "Content-Type": "application/json",
      //             },
      //             body: JSON.stringify({
      //               pk: element.id,
      //               userId: getCookie("userId"),
      //             }),
      //           })
      //             .then((res) => res.json())
      //             .then((data) => {
      //               let datas_value = document.querySelector(
      //                 `#confirmed2Value_${element.id}`
      //               );
      //               let datas_value2 = document.querySelector(
      //                 `#confirmed2Value2_${element.id}`
      //               );

      //               let color;
      //               if (data["state"] == "add") {
      //                 element.style.color = "red";
      //                 datas_value.textContent =
      //                   parseInt(datas_value.textContent) + 1;
      //                 datas_value2.textContent =
      //                   parseInt(datas_value2.textContent) + 1;
      //                 color = "red";
      //               } else {
      //                 element.style.color = "black";
      //                 datas_value.textContent -= 1;
      //                 datas_value2.textContent -= 1;
      //                 color = "black";
      //               }

      //               confirmed.forEach((elements) => {
      //                 if (elements.id == element.id) {
      //                   elements.style.color = color;
      //                 }
      //               });
      //             });
      //         });
      //       });

      //       confirmed.forEach((element, i) => {
      //         if (arr[i] === 1) {
      //           element.style.color = "red";
      //         } else if (arr[i] == 0) {
      //           element.style.color = "black";
      //         }
      //         console.log(element.id);
      //         element.addEventListener("click", () => {
      //           console.log("dadsa");
      //           fetch("/backend/confirmed.php", {
      //             method: "POST",
      //             headers: {
      //               "Content-Type": "application/json",
      //             },
      //             body: JSON.stringify({
      //               pk: element.id,
      //               userId: getCookie("userId"),
      //             }),
      //           })
      //             .then((res) => res.json())
      //             .then((data) => {
      //               let datas_value = document.querySelector(
      //                 `#confirmed2Value_${element.id}`
      //               );
      //               let datas_value2 = document.querySelector(
      //                 `#confirmed2Value2_${element.id}`
      //               );

      //               let color;
      //               if (data["state"] == "add") {
      //                 element.style.color = "red";
      //                 datas_value.textContent =
      //                   parseInt(datas_value.textContent) + 1;
      //                 datas_value2.textContent =
      //                   parseInt(datas_value2.textContent) + 1;
      //                 color = "red";
      //               } else {
      //                 element.style.color = "black";
      //                 datas_value.textContent -= 1;
      //                 datas_value2.textContent -= 1;
      //                 color = "black";
      //               }

      //               confirmed_small.forEach((elements) => {
      //                 console.log(elements.id + "__" + element.id);
      //                 if (elements.id == element.id) {
      //                   elements.style.color = color;
      //                 }
      //               });
      //             });
      //         });
      //       });
      //     }, 1000);
      //   });

      // fetch("/backend/rank.php", {
      //   method: "POST",
      //   headers: {
      //     "Content-Type": "application/json",
      //   },
      //   body: JSON.stringify({
      //     type: "any",
      //   }),
      // })

      //   .then((res) => res.json())
      //   .then((data) => {
      //     const arr = [];
      //     data.forEach(async (element) => {

      //       let color;

      //       const response = await fetch("/backend/confirmedCheck.php", {
      //           method: "POST",
      //           headers: {
      //             "Content-Type": "application/json",
      //           },
      //           body: JSON.stringify({
      //             pk: element["pk"],
      //             userId: getCookie("userId"),
      //           }),
      //       })

      //       const responseData = await response.json();

      //       if (responseData["state"] === "delete") {
      //         arr.push(1);
      //         color = "red";
      //       } else {
      //         arr.push(0);
      //         color = "black";
      //       }

      //     });

      //     data.forEach((element,i) => {

      //       const big_tbody = document.querySelector("#big_tbody");
      //       const small_tbody = document.querySelector("#small_tbody");
      //       const big_data = `
      //       <tr>
      //                     <td class="transparent"></td>
      //                   </tr>
      //       <td>${element["black_name"] != "" ? element["black_name"] : "•"}</td>
      //       <td>${element["black_bank"] != "none" ? element["black_bank"] : "•"}</td>
      //       <td>${element["black_account"] != "" ? element["black_account"] : "•"}</td>
      //       <td>${element["black_number"] != "" ? element["black_number"] : "•"}</td>
      //       <td>${element["black_userId"] != "" ? element["black_userId"] : "•"}</td>
      //       <td>${element["black_ip"] != "" ? element["black_ip"] : "•"}</td>
      //       <td>${element["black_date"] != "" ? element["black_date"] : "•"}</td>
      //       <td>${element["post_userId"] != "" ? element["post_userId"] : "•"}</td>
      //       <td ><span id="${element["pk"]}" class="confirmed3 material-symbols-outlined" >local_fire_department
      //           </span><br><span class="score" id="confirmed3Value_${element["pk"]}">${element["cc"]}</span>
      //     <td>${element["check_number"]}</td>
      //   </tr>
      //   <tr>
      //       <td colspan='2' class="popo">${element["black_desc"] != "" ? element["black_desc"] : "•"}</td>
      //       <td colspan='9' class="papa">${element["black_content"] != "" ? element["black_content"] : "•"}</td>
      //   </tr>
      //   <tr>
      //                     <td class="transparent"></td>
      //                   </tr>

      //   `;

      //       const small_data = `

      //       <tr>
      //                     <td class="transparent"></td>
      //                   </tr>
      //       <tr>
      //       <td>${element["black_name"] != "" ? element["black_name"] : "•"}<br><br>
      //       ${element["black_bank"] != "none" ? element["black_bank"] : "•"}<br><br>
      //       ${element["black_userId"] != "" ? element["black_userId"] : "•"}
      //       </td>
      //       <td>${element["black_number"] != "" ? element["black_number"] : "•"}<br><br>
      //       ${element["black_account"] != "" ? element["black_account"] : "•"}<br><br>
      //       ${element["black_ip"] != "" ? element["black_ip"] : "•"}
      //       </td>
      //       <td>${element["black_date"] != "" ? element["black_date"] : "•"}<br><br>
      //       ${element["post_userId"] != "" ? element["post_userId"] : "•"}<br><br>
      //       ${element["check_number"]}
      //       </td>
      //       <td>
      //       <span id="${element["pk"]}" class="confirmed_small3 material-symbols-outlined" >
      //       local_fire_department
      //       </span ><br><span class="score" id="confirmed3Value2_${element["pk"]}">${element["cc"]}</span>
      //       </td>
      //   </tr>

      //   <tr>
      //   <td colspan='2' class="popo">${element["black_desc"] != "" ? element["black_desc"] : "•"}</td>
      //   <td colspan='9' class="papa">${element["black_content"] != "" ? element["black_content"] : "•"}</td>
      //   </tr>

      //   <tr>
      //                     <td class="transparent"></td>
      //                   </tr>

      //                 `;
      //       big_tbody.innerHTML += big_data;
      //       small_tbody.innerHTML += small_data;
      //     });

      //      setTimeout(() => {
      //       let confirmed = document.querySelectorAll(".confirmed3");
      //       let confirmed_small = document.querySelectorAll(".confirmed_small3");

      //       confirmed_small.forEach((element, i) => {
      //         if (arr[i] === 1) {
      //           element.style.color = "red";
      //         } else if (arr[i] == 0) {
      //           element.style.color = "black";
      //         }
      //         element.addEventListener("click", () => {
      //           console.log("dadsa");
      //           fetch("/backend/confirmed.php", {
      //             method: "POST",
      //             headers: {
      //               "Content-Type": "application/json",
      //             },
      //             body: JSON.stringify({
      //               pk: element.id,
      //               userId: getCookie("userId"),
      //             }),
      //           })
      //             .then((res) => res.json())
      //             .then((data) => {
      //               let datas_value = document.querySelector(
      //                 `#confirmed3Value_${element.id}`
      //               );
      //               let datas_value2 = document.querySelector(
      //                 `#confirmed3Value2_${element.id}`
      //               );

      //               let color;
      //               if (data["state"] == "add") {
      //                 element.style.color = "red";
      //                 datas_value.textContent =
      //                   parseInt(datas_value.textContent) + 1;
      //                 datas_value2.textContent =
      //                   parseInt(datas_value2.textContent) + 1;
      //                 color = "red";
      //               } else {
      //                 element.style.color = "black";
      //                 datas_value.textContent -= 1;
      //                 datas_value2.textContent -= 1;
      //                 color = "black";
      //               }

      //               confirmed.forEach((elements) => {
      //                 if (elements.id == element.id) {
      //                   elements.style.color = color;
      //                 }
      //               });
      //             });
      //         });
      //       });

      //       confirmed.forEach((element, i) => {
      //         if (arr[i] === 1) {
      //           element.style.color = "red";
      //         } else if (arr[i] == 0) {
      //           element.style.color = "black";
      //         }
      //         console.log(element.id);
      //         element.addEventListener("click", () => {
      //           console.log("dadsa");
      //           fetch("/backend/confirmed.php", {
      //             method: "POST",
      //             headers: {
      //               "Content-Type": "application/json",
      //             },
      //             body: JSON.stringify({
      //               pk: element.id,
      //               userId: getCookie("userId"),
      //             }),
      //           })
      //             .then((res) => res.json())
      //             .then((data) => {
      //               let datas_value = document.querySelector(
      //                 `#confirmed3Value_${element.id}`
      //               );
      //               let datas_value2 = document.querySelector(
      //                 `#confirmed3Value2_${element.id}`
      //               );

      //               let color;
      //               if (data["state"] == "add") {
      //                 element.style.color = "red";
      //                 datas_value.textContent =
      //                   parseInt(datas_value.textContent) + 1;
      //                 datas_value2.textContent =
      //                   parseInt(datas_value2.textContent) + 1;
      //                 color = "red";
      //               } else {
      //                 element.style.color = "black";
      //                 datas_value.textContent -= 1;
      //                 datas_value2.textContent -= 1;
      //                 color = "black";
      //               }

      //               confirmed_small.forEach((elements) => {
      //                 console.log(elements.id + "__" + element.id);
      //                 if (elements.id == element.id) {
      //                   elements.style.color = color;
      //                 }
      //               });
      //             });
      //         });
      //       });
      //     }, 1000);
      //   });
    </script>
  </body>
</html>
