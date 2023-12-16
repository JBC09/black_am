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
                        <li  ><a href="adminDeleteBlack.php">삭제블랙정보</a></li>
                    </ul>

                    <ul>
                        <li><a href="adminNoticeWrite.php">공지사항 글쓰기</a></li>
                        <li><a href="adminDownWrite.php">자료실 글쓰기</a></li>
                    </ul>
                    

                    <ul>
                        <li ><a href="adminDeleteNotice.php">공지사항 글 삭제</a></li>
                        <li id="noon"><a href="adminDeleteComm.php">자료실 글 삭제</a></li>
                    </ul>
                </div>
                <div id="right">
                        <!-- <div id="search">
                            <input placeholder="계좌번호" maxlength="20" name="account" id="accountInput"></input>
                            <button class="btn1" id="accountBtn" onclick="searchAccount()">검색</button>
                            
                            <input placeholder="전화번호"  id="phoneInput"></input>
                            <button class="btn2" id="phoneBtn" onclick="searchPhone()">검색</button>
                            
                            <input placeholder="이름" maxlength="8" id="nameInput"></input>
                            <button class="btn2" id="nameBtn" onclick="searchName()">검색</button> -->

                        <!-- <input placeholder="닉네임" maxlength="8"></input>
                        <button class="btn2">검색</button> -->
                        <!-- </div> -->

                    <table id="big">
                        <thead>
                            <tr>
                              <th>번호</th>
                              <th>제목</th>
                              <th>내용</th>
                              <th>날짜</th>
                              <th>파일명</th>
                              <th>조회수</th>
                              <th>수정</th>
                              <th>삭제</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                         
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
            
            data.forEach((element,i) => {
                let smallData = `
                <tr id="tr${element[0]}">
                    <td>${i+1}</td>
                    <td>${element[2] }</td>
                    <td>${element[3]}</td>
                    <td>${element[4]}</td>
                    <td>${element[5]}</td>
                    <td>${element[6]}</td>
                    <td><button class="btn update" id="${element[0]}">수정</button></td>
                    <td><button class="btn delete" id="${element[0]}">삭제</button></td>
                </tr>`

                tableBody.innerHTML += smallData;
            })

            const deletes = document.querySelectorAll(".delete");
            const update = document.querySelectorAll(".update");

            // ?id=1&type=notice/

            update.forEach(element => {
                element.addEventListener('click',()=>{
                    self.location.href = `updateNotice.php?id=${element.id}&type=notice`;
                })
            });

            deletes.forEach(element => {
                element.addEventListener('click',()=>{
                    fetch("/backend/deleteNotice.php",{
                        method:"POST",
                        headers:{
                            "Content-Type" : "application/json"
                        },
                        body: JSON.stringify({
                            pk: element.id,
                            key: "notice2"
                        })
                    })
                    .then((res) => res.json())
                    .then((data) => {
                      
                        if(data["state"] == "ok"){
                            document.querySelector(`#tr${element.id}`).style.display = "none";
                            alert("자료 삭제");
                        }
                    })
                })
            });

        }




        fetch("/backend/communityList.php")
        .then((res) => res.json())
        .then((data) => {
            Draw(data);
        });


       


    </script>
</body>
</html>