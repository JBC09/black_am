<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블랙아머</title>
    <link rel="stylesheet" href="css/adminWriteBlack.css" tpye="text/css">

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
                        <div class="box">
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
                        <li><a href="adminLog.php">검색로그</a></li>
                    </ul>

                    <ul>
                        <li><a href="admin.php">회원목록</a></li>
                        <li><a href="adminSignList.php">가입요청</a></li>
                        <li><a href="adminUserOutList.php">탈퇴목록</a></li>
                    </ul>

                    <ul>
                        <li><a href="adminWriteBlack.php">등록블랙정보</a></li>
                        <li   id="noon"><a href="adminDeleteBlack.php">삭제블랙정보</a></li>
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
                        <input placeholder="계좌번호" maxlength="20" name="account" id="accountInput"></input>
                        <button class="btn1" id="accountBtn" onclick="searchAccount()">검색</button>
                        
                        <input placeholder="전화번호"  id="phoneInput"></input>
                        <button class="btn2" id="phoneBtn" onclick="searchPhone()">검색</button>
                        
                        <input placeholder="이름" maxlength="8" id="nameInput"></input>
                        <button class="btn2" id="nameBtn" onclick="searchName()">검색</button>

                    <!-- <input placeholder="닉네임" maxlength="8"></input>
                    <button class="btn2">검색</button> -->
                    </div>

                    <table id="big">
                        <thead>
                            <tr>
                              <th>이름</th>
                              <th>은행명</th>
                              <th>계좌번호</th>
                              <th>전화번호</th>
                              <th>아이디</th>
                              <th>아이피</th>
                              <th>등록일자</th>
                              <th>등록인</th>
                              <th>확정</th>
                              <th>조회수</th>
                              <th>삭제</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <tr>
                              <td>김병만</td>
                              <td>농협</td>
                              <td>3925623894523</td>
                              <td>01023568956</td>
                              <td>soso1212</td>
                              <td>109.210.330.119</td>
                              <td>2023-10-02</td>
                              <td>제우스</td>
                              <td><span class="material-symbols-outlined">
                                local_fire_department
                                </span><br><span class="score">533</span>
                              </td>
                              <td>112</td>
                              <td><button class="btn">삭제</button></td>
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
                              <td><span class="material-symbols-outlined">
                                local_fire_department
                                </span><br><span class="score">1</span>
                              </td>
                              <td>112</td>
                              <td><button class="btn">삭제</button></td>
                            </tr>
                            <tr>
                                <td colspan='2' class="popo">통장협박•계좌신고</td>
                                <td colspan='9' class="papa">양빵 사무실</td>
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
                                <td><span class="material-symbols-outlined">
                                    local_fire_department
                                    </span><br><span class="score">0</span>
                                </td>
                                <td>112</td>
                                <td><button class="btn">삭제</button></td>
                                <tr>
                                    <td colspan='2' class="popo">3자사기</td>
                                    <td colspan='9' class="papa">악질 다막힘 절대 받으면 안됨</td>
                                </tr>
                            </tr>
                        </tbody>
                    </table>
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

        const tableBody = document.querySelector("#tableBody");

        function Draw(data){
            tableBody.innerHTML = ``
            
            
            for (const element of data) {

                fetch("/backend/selectMyNickname.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    id: element["post_userId"],
                }),
                })
                .then((res) => res.json())
                .then((data) => {
                    let nick = data[0]["user_nickname"];
                        let smallData = `
                        <tr id="tr${element[0]}">
                            <td>${element["black_name"] != "" ? element["black_name"] : "•" }</td>
                            <td>${element["black_bank"] != "none" ? element["black_bank"] : "•"}</td>
                            <td>${element["black_account"] != "" ? element["black_account"] : "•"}</td>
                            <td>${element["black_number"] != "" ? element["black_number"] : "•"}</td>
                            <td>${element["black_userId"] != "" ? element["black_userId"] : "•"}</td>
                            <td>${element["black_ip"] != "" ? element["black_ip"] : "•"}</td>
                            <td>${element["black_date"] != "" ? element["black_date"] : "•"}</td>
                            <td>${nick != "" ? nick : "•"}</td>
                            <td><span class="material-symbols-outlined">
                                local_fire_department
                                </span><br><span class="score">${element["cc"]}</span>
                            </td>
                            <td>${element["check_number"]}</td>
                            <td><button class="btn delete" id="${element[0]}">복구</button></td>
                        <tr id="tr2${element[0]}">
                                <td colspan='2' class="popo">${element["black_desc"] != "" ? element["black_desc"] : "•"}</td>
                                <td colspan='9' class="papa">${element["black_content"] != "" ? element["black_content"] : "•"}</td>
                            </tr>
                        </tr>`

                    tableBody.innerHTML += smallData;
                })
             

            }

            const deletes = document.querySelectorAll(".delete");

            deletes.forEach(element => {
                element.addEventListener('click',()=>{
                    fetch("/backend/deleteRequest.php",{
                        method:"POST",
                        headers:{
                            "Content-Type" : "application/json"
                        },
                        body: JSON.stringify({
                            userId: element.id,
                            key: "reload"
                        })
                    })
                    .then((res) => res.json())
                    .then((data) => {
                      
                        if(data["state"] == "ok"){
                            document.querySelector(`#tr${element.id}`).style.display = "none";
                            document.querySelector(`#tr2${element.id}`).style.display = "none";
                            alert("블랙정보가 복구.");
                        }
                    })
                })
            });

        }



        function searchAccount() {
            const accountInput = document.getElementById('accountInput').value;
            fetch("/backend/adminBlackList.php",{
                method:"POST",
                headers:{
                    "Content-Type" : "application/json"
                },
                body: JSON.stringify({
                    check: "no",
                    type: "account",
                    search:accountInput
                })
            })
            .then((res) => res.json())
            .then((data) => {
                if(data.length == 0){
                            alert("검색된 데이터가 없습니다.");
                            return false;
                        }
                Draw(data);
                });
            }

        function searchPhone() {
            const phoneInput = document.getElementById('phoneInput').value;
            fetch("/backend/adminBlackList.php",{
                method:"POST",
                headers:{
                    "Content-Type" : "application/json"
                },
                body: JSON.stringify({
                    check: "no",
                    type: "phone",
                    search:phoneInput
                })
            })
            .then((res) => res.json())
            .then((data) => {
                if(data.length == 0){
                alert("검색된 데이터가 없습니다.");
                return false;
                }
                Draw(data);
                });
        }

        function searchName() {
            const nameInput = document.getElementById('nameInput').value;
            fetch("/backend/adminBlackList.php",{
                method:"POST",
                headers:{
                    "Content-Type" : "application/json"
                },
                body: JSON.stringify({
                    check: "no",
                    type: "name",
                    search:nameInput
                })
            })
            .then((res) => res.json())
            .then((data) => {
                if(data.length == 0){
                            alert("검색된 데이터가 없습니다.");
                            return false;
                        }
                Draw(data);
                });
        }

      

        fetch("/backend/adminBlackList.php",{
            method:"POST",
            headers:{
                "Content-Type" : "application/json"
            },
            body: JSON.stringify({
                check: "no",
                type: "no",
                search:"noe"
            })
        })
        .then((res) => res.json())
        .then((data) => {
            alert("최근 10개의 데이터를 가져옵니다.");
            Draw(data);
        });


       


    </script>
</body>
</html>