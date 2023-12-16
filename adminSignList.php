<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블랙아머</title>
    <link rel="stylesheet" href="css/adminUserList.css" tpye="text/css">

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
                        <li id="noon"><a href="adminSignList.php">가입요청</a></li>
                        <li><a href="adminUserOutList.php">탈퇴목록</a></li>
                    </ul>

                    <ul>
                        <li><a href="adminWriteBlack.php">등록블랙정보</a></li>
                        <li><a href="adminDeleteBlack.php">삭제블랙정보</a></li>
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
                    </div>

                   <table>
                        <thead>
                            <tr>
                                <th>아이디</th>
                                <th>업체명</th>
                                <th>url</th>
                                <th>닉네임</th>
                                <th>텔레그램</th>
                                
                                <th>가입</th>
                                <th>거부</th>
                                <th>탈퇴처리</th>
                            </tr>
                        </thead>

                        <tbody id="tableBody">
                            <!--여백줌-->
                            <tr>
                                <td class="space" colspan="10"></td>
                            </tr>
                            <!-- 여백줌
                            <tr >
                                <td>naver</td>
                                <td><input placeholder="12345"></input></td>
                                <td><input placeholder="베스킨라빈스"></input></td>
                                <td><input placeholder="naver.com"></td>
                                <td><input placeholder="외계인"></td>
                                <td><input placeholder="1w1w1ss"></td>
                                <td><button class="btn">승인</button></td>
                                <td><button class="btn">거부</button></td>
                                <td><button class="btn">탈퇴</button></td>
                            </tr>

                            <tr>
                                <td>bbcc12</td>
                                <td><input placeholder="asdf@S21!"></input></td>
                                <td><input placeholder="파리바게트"></input></td>
                                <td><input placeholder="google.com"></td>
                                <td><input placeholder="크로와상"></td>
                                <td><input placeholder="12ddddd"></td>
                                <td><button class="btn">승인</button></td>
                                <td><button class="btn">거부</button></td>
                                <td><button class="btn">탈퇴</button></td>
                            </tr>

                            <tr>
                                <td>dddaaa3</td>
                                <td><input placeholder="asfde@@@"></input></td>
                                <td><input placeholder="facebook"></input></td>
                                <td><input placeholder="facebook.com"></td>
                                <td><input placeholder="붕어빵"></td>
                                <td><input placeholder="aabb11"></td>
                                <td><button class="btn">승인</button></td>
                                <td><button class="btn">거부</button></td>
                                <td><button class="btn">탈퇴</button></td>
                            </tr> -->
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

            const id = document.querySelector("#id");
            const nick = document.querySelector("#nick");

            const idSearch = document.querySelector("#idSearch");
            const nickSearch = document.querySelector("#nickSearch");


            idSearch.addEventListener('click',()=>{
                fetch("/backend/userSearchList.php", {
                method: "POST",
                headers: {
                "Content-Type": "application/json",
                },

                body: JSON.stringify({
                search: id.value,
                type: "id",
                number: "join"
                }),
            })
                .then((res) => res.json())
                .then((data) => {
                tableBody.innerHTML = "";
                console.log(data);
                if (data.length == 0) {
                    alert("해당 기간의 데이터가 없습니다.");
                }
                tableBody.innerHTML += `
                <tr>
                                    <td class="space" colspan="10"></td>
                                </tr>`
                data.forEach((element) => {
                    let smallData = `
                        <tr id="tr${element[0]}">
                            <td>${element[0]}</td>
                            <td><input placeholder="${element[3]}"></input></td>
                            <td><input placeholder="${element[4]}"></td>
                            <td><input placeholder="${element[2]}"></td>
                            <td><input placeholder="${element[5]}"></td>
                            <td><button class="btn oks" id="${element[0]}">승인</button></td>
                        <td><button class="btn nos" id="${element[0]}">거부</button></td>
                        <td><button class="btn delete" id="${element[0]}">탈퇴</button></td>
                        </tr>
                        `

                        tableBody.innerHTML += smallData
                });
                console.log(data);
                });
            });

            nickSearch.addEventListener('click',()=>{
                fetch("/backend/userSearchList.php", {
                method: "POST",
                headers: {
                "Content-Type": "application/json",
                },

                body: JSON.stringify({
                search: nick.value,
                type: "nick",
                number: "join"
                }),
            })
                .then((res) => res.json())
                .then((data) => {
                tableBody.innerHTML = `
                    <tr>
                        <td class="space" colspan="10"></td>
                    </tr>
            `;
                        

            data.forEach(element => {
             
                    let smallData = `
                    <tr id="tr${element[0]}">
                        <td>${element[0]}</td>
                        <td><input placeholder="${element[3]}"></input></td>
                        <td><input placeholder="${element[4]}"></td>
                        <td><input placeholder="${element[2]}"></td>
                        <td><input placeholder="${element[5]}"></td>
                        <td><button class="btn oks" id="${element[0]}">승인</button></td>
                        <td><button class="btn nos" id="${element[0]}">거부</button></td>
                        <td><button class="btn delete" id="${element[0]}">탈퇴</button></td>
                    </tr>
                    `

                    tableBody.innerHTML += smallData
                
            });

            const deletes = document.querySelectorAll(".delete");
            const oks = document.querySelectorAll(".oks");
            const nos = document.querySelectorAll(".nos");

            oks.forEach(element => {
                
                element.addEventListener("click",()=>{
                    fetch("/backend/userGrade.php",{
                        method:"POST",
                        headers: {
                            "Content-Type":"application/json"
                        },
                        body: JSON.stringify({
                            userId: element.id,
                            type: "ok"
                        })
                    })
                    .then((res) => res.json())
                    .then((data) => {
                        if(data["state"] == "ok"){
                            document.querySelector(`#tr${element.id}`).style.display = "none";
                            alert("승인되었습니다.");
                            
                        }
                    })
                })
            });


            nos.forEach(element => {
                element.addEventListener("click",()=>{
                    fetch("/backend/userGrade.php",{
                        method:"POST",
                        headers: {
                            "Content-Type":"application/json"
                        },
                        body: JSON.stringify({
                            userId: element.id,
                            type: "no"
                        })
                    })
                    .then((res) => res.json())
                    .then((data) => {
                        if(data["state"] == "ok"){
                            document.querySelector(`#tr${element.id}`).style.display = "none";
                            alert("거부 되었습니다.");
                            
                        }
                    })
                })
            });


            deletes.forEach(element => {
                element.addEventListener("click",()=>{
                    fetch("/backend/userGrade.php",{
                        method:"POST",
                        headers: {
                            "Content-Type":"application/json"
                        },
                        body: JSON.stringify({
                            userId: element.id,
                            type: "delete"
                        })
                    })
                    .then((res) => res.json())
                    .then((data) => {
                        if(data["state"] == "ok"){
                            document.querySelector(`#tr${element.id}`).style.display = "none";
                            alert("탈퇴 처리 되었습니다.");
                            
                        }
                    })
                })
                })
                });
            });

        fetch("/backend/notCheckUser.php")
        .then((res)=> res.json())
        .then((data) => {
            console.log(data);

            tableBody.innerHTML = `
                    <tr>
                        <td class="space" colspan="10"></td>
                    </tr>
            `;
                        

            data.forEach(element => {
             
                    let smallData = `
                    <tr id="tr${element[0]}">
                        <td>${element[0]}</td>
                        <td><input placeholder="${element[3]}"></input></td>
                        <td><input placeholder="${element[4]}"></td>
                        <td><input placeholder="${element[2]}"></td>
                        <td><input placeholder="${element[5]}"></td>
                        <td><button class="btn oks" id="${element[0]}">승인</button></td>
                        <td><button class="btn nos" id="${element[0]}">거부</button></td>
                        <td><button class="btn delete" id="${element[0]}">탈퇴</button></td>
                    </tr>
                    `

                    tableBody.innerHTML += smallData
                
            });

            const deletes = document.querySelectorAll(".delete");
            const oks = document.querySelectorAll(".oks");
            const nos = document.querySelectorAll(".nos");

            oks.forEach(element => {
                
                element.addEventListener("click",()=>{
                    fetch("/backend/userGrade.php",{
                        method:"POST",
                        headers: {
                            "Content-Type":"application/json"
                        },
                        body: JSON.stringify({
                            userId: element.id,
                            type: "ok"
                        })
                    })
                    .then((res) => res.json())
                    .then((data) => {
                        if(data["state"] == "ok"){
                            document.querySelector(`#tr${element.id}`).style.display = "none";
                            alert("승인되었습니다.");
                            
                        }
                    })
                })
            });


            nos.forEach(element => {
                element.addEventListener("click",()=>{
                    fetch("/backend/userGrade.php",{
                        method:"POST",
                        headers: {
                            "Content-Type":"application/json"
                        },
                        body: JSON.stringify({
                            userId: element.id,
                            type: "no"
                        })
                    })
                    .then((res) => res.json())
                    .then((data) => {
                        if(data["state"] == "ok"){
                            document.querySelector(`#tr${element.id}`).style.display = "none";
                            alert("거부 되었습니다.");
                            
                        }
                    })
                })
            });


            deletes.forEach(element => {
                element.addEventListener("click",()=>{
                    fetch("/backend/userGrade.php",{
                        method:"POST",
                        headers: {
                            "Content-Type":"application/json"
                        },
                        body: JSON.stringify({
                            userId: element.id,
                            type: "delete"
                        })
                    })
                    .then((res) => res.json())
                    .then((data) => {
                        if(data["state"] == "ok"){
                            document.querySelector(`#tr${element.id}`).style.display = "none";
                            alert("탈퇴 처리 되었습니다.");
                            
                        }
                    })
                })
            });
        })

   </script>
</body>
</html>