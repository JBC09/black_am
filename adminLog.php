<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블랙아머</title>
    <link rel="stylesheet" href="css/adminLog.css" tpye="text/css">

    <script src="https://kit.fontawesome.com/dd244c30e3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                        <div class="box">ㅈ
                            <input tpye="text" placeholder="연락처 또는 계좌번호, 이름으로 검색해 보세요." maxlength="20">
                            <button type="button" onclick="location.href='search.php'"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        
                        <h3>블랙아머는 범죄피해 방지 및 범죄피해자 보호를 위해 2006년부터 운영되고 있습니다.</h3>
                    </div>
                
            </div> -->
            
            <!-- 관리자 -->
            <div id="main">
                <div id="left">
                    <ul>
                        <li   id="noon"><a href="adminLog.php">검색로그</a></li>
                    </ul>

                    <ul>
                        <li><a href="admin.php">회원목록</a></li>
                        <li><a href="adminSignList.php">가입요청</a></li>
                        <li><a href="adminUserOutList.php">탈퇴목록</a></li>
                    </ul>

                    <ul>
                        <li><a href="adminWriteBlack.php">등록블랙정보</a></li>
                        <li ><a href="adminDeleteBlack.php">삭제블랙정보</a></li>
                    </ul>

                    <ul>
                        <li><a href="adminNoticeWrite.php">공지사항 글쓰기</a></li>
                        <li><a href="adminDownWrite.php">자료실 글쓰기</a></li>
                    </ul>
                    
                    <ul>
                        <li ><a href="adminDeleteNotice.php">공지사항 글 삭제</a></li>
                        <li><a href="adminDeleteComm.php">자료실 글 삭제</a></li>
                    </ul>
                    
                </div>
                <div id="right">

                    <div id="search">
                        <input placeholder="아이디" maxlength="20" id="id"></input>
                        <button class="btn1" id="idSearch">검색</button>

                        <input placeholder="닉네임" maxlength="8" id="nick"></input>
                        <button class="btn2" id="nickSearch">검색</button>

                        <div class="date1">
                                <form>
                                    <input type="date" value="2023-11-01" min="2023-11-01" max="2030-12-31" id="start">
                                </form>
                                
                        </div>
                            
                        <div id="nap">
                                <span>~</span>
                        </div>

                        <div class="date2">
                                <form>
                                    <input type="date" value="2023-11-08" min="2023-11-01" max="2030-12-31" id="end">
                                </form>
                        </div>

                        <div id="map">
                            <button class="btn1" id="search_btn">검색</button>
                        </div>

                        <div id="keep">
                            <form action="#">
                                <!--label태그는 체크박스를 누르지 않아도 연결된 체크박스를 체크해줌-->
                                <label for="chk">
                                <input type="checkbox" id="chk" >
                                <!--실제로는 글자를 기울이는 태그, 퍼블리셔들이 아이콘담을 때 많이 사용-->
                                <i class="circle"></i>
                                <span class="text">전화번호만</span>
                                </label>
                            </form>
                        </div>

                        <div id="memo">
                            메모:<input placeholder="메모" id="memoInput" oninput="memo()"></input>
                       
                        </div>

                        <button class="btn1" id="excel">다운</button>
                    </div>

                    <div id="table">
                        <table >
                            <thead>
                                <tr>
                                    <th>아이디</th>
                                    <th>업체명</th>
                                    <th>URL</th>
                                    <th>닉네임</th>
                                    <th id="good">keyword</th>
                                    <th>검색시간</th>
                                </tr>
                            </thead>

                            <tbody id="logData">
                                <!--여백줌-->
                            
                                <!--여백줌-->
                                <!-- <tr>
                                    <td>naver</td>
                                    <td>베스킨라빈스</td>
                                    <td>naver.com</td>
                                    <td>외계인</td>
                                    <td>01099997777</td>
                                    <td>2023-09-11 14:23</td>
                                </tr>

                                <tr>
                                    <td>bbcc12</td>
                                    <td>파리바게트</td>
                                    <td>google.com</td>
                                    <td>크로와상</td>
                                    <td>류현진</td>
                                    <td>2023-09-11 15:56</td>
                                </tr>

                                <tr>
                                    <td>dddaaa3</td>
                                    <td>facebook</td>
                                    <td>facebook.com</td>
                                    <td>붕어빵</td>
                                    <td>01098982323</td>
                                    <td>2023-09-12 13:12</td>
                                </tr> -->
                            </tbody>
                    </table>
                    </div>

                       <!-- //paging -->   
                       <!-- <div class="paging">
                        <a href="#"><span class="material-symbols-outlined">chevron_left</span></a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <strong>5</strong>
                        <a href="#">6</a>
                        <a href="#">7</a>
                        <a href="#">8</a>
                        <a href="#">9</a>
                        <a href="#"><span class="material-symbols-outlined">chevron_right</span></a>
                    </div> -->
                    <!-- //paging -->
                </div>

                

          
            </div>
      
            <!-- 관리자 -->

            <?php
                include 'footer.php';
            ?>
     </div>
     <!-- //wrap -->
<!-- 
     <script src="js/index.js"></script> -->

     <script>
        const memoInput = document.querySelector("#memoInput");
        const search_btn = document.querySelector("#search_btn");
        const start = document.querySelector("#start");
        const end = document.querySelector("#end");
        const logData = document.querySelector("#logData");
        const chk = document.querySelector("#chk");

        const id = document.querySelector("#id");
        const nick = document.querySelector("#nick");

        const idSearch = document.querySelector("#idSearch");
        const nickSearch = document.querySelector("#nickSearch");
        
        const excel = document.querySelector("#excel");
        const table = document.querySelector("#table");

        let sql;

        excel.addEventListener("click",()=>{
            self.location.href = `/backend/excel.php?sql=${sql}`;
        })
        
 
        alert("최근 10개 이하의 데이터를 가져옵니다.")
        function memo(){

            let endDay = new Date();
            endDay.setDate(endDay.getDate() + 7);
            document.cookie = `memo=${memoInput.value}; expires=${endDay}; path=/`;
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
        
       
        memoInput.value = getCookie("memo");

        fetch("/backend/LogList.php")
        .then((res) => res.json())
        .then((data) => {
          
        logData.innerHTML = `
        <tr>
            <td class="space" colspan="10"></td>
        </tr>`
        data.forEach((element,i) => {
            if(i == 0){
                sql = data[0];
            }else{
            let smallData = `
                <tr>
                <td>${element["user_id"]}</td>
                <td>${element["user_company"]}</td>
                <td>${element["user_url"]}</td>
                <td>${element[8]}</td>
                <td>${element["search_history"]}</td>
                <td>${element["search_date"]}</td>
            </tr>`;
            logData.innerHTML += smallData;
            }
           

        
        });
        });

        
    
        idSearch.addEventListener('click',()=>{
            fetch("/backend/nameSearchLogList.php", {
            method: "POST",
            headers: {
            "Content-Type": "application/json",
            },

            body: JSON.stringify({
            search: id.value,
            type: "id",
            number:chk.checked ? "check" : "none"
            }),
        })
            .then((res) => res.json())
            .then((data) => {
            logData.innerHTML = "";
            console.log(data);
            if (data.length == 0) {
                alert("해당 기간의 데이터가 없습니다.");
            }
            logData.innerHTML += `
            <tr>
                                <td class="space" colspan="10"></td>
                            </tr>`
            data.forEach((element,i) => {
                if(i == 0){
                sql = data[0];
            }else{
            let smallData = `
                <tr>
                <td>${element["user_id"]}</td>
                <td>${element["user_company"]}</td>
                <td>${element["user_url"]}</td>
                <td>${element[8]}</td>
                <td>${element["search_history"]}</td>
                <td>${element["search_date"]}</td>
            
            </tr>`;
            logData.innerHTML += smallData;
            }
            });
            console.log(data);
            });
        });

        nickSearch.addEventListener('click',()=>{
            fetch("/backend/nameSearchLogList.php", {
            method: "POST",
            headers: {
            "Content-Type": "application/json",
            },

            body: JSON.stringify({
            search: nick.value,
            type: "nick",
            number:chk.checked ? "check" : "none"
            }),
        })
            .then((res) => res.json())
            .then((data) => {
            logData.innerHTML = "";
            console.log(data);
            if (data.length == 0) {
                alert("해당 기간의 데이터가 없습니다.");
            }
            console.log(nick.value);
            logData.innerHTML += `
            <tr>
                                <td class="space" colspan="10"></td>
                            </tr>`
            data.forEach((element,i) => {
                if(i == 0){
                sql = data[0];
            }else{
            let smallData = `
                <tr>
                <td>${element["user_id"]}</td>
                <td>${element["user_company"]}</td>
                <td>${element["user_url"]}</td>
                <td>${element[8]}</td>
                <td>${element["search_history"]}</td>
                <td>${element["search_date"]}</td>
            
            </tr>`;
            logData.innerHTML += smallData;
            }
            });
            console.log(data);
            });
        });




        search_btn.addEventListener("click", () => {
        fetch("/backend/LogList.php", {
            method: "POST",
            headers: {
            "Content-Type": "application/json",
            },

            body: JSON.stringify({
            start: start.value,
            end: end.value,
            number:chk.checked ? "check" : "none"
            }),
        })
            .then((res) => res.json())
            .then((data) => {
            logData.innerHTML = "";
            console.log(data);
            if (data.length == 0) {
                alert("해당 기간의 데이터가 없습니다.");
            }
            logData.innerHTML += `
            <tr>
                                <td class="space" colspan="10"></td>
                            </tr>`
            data.forEach((element,i) => {
                if(i == 0){
                sql = data[0];
            }else{
            let smallData = `
                <tr>
                <td>${element["user_id"]}</td>
                <td>${element["user_company"]}</td>
                <td>${element["user_url"]}</td>
                <td>${element[8]}</td>
                <td>${element["search_history"]}</td>
                <td>${element["search_date"]}</td>
            
            
            </tr>`;
            logData.innerHTML += smallData;
            }

            });
            console.log(data);
            });
        });

     </script>
</body>
</html>