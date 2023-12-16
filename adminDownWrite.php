<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>블랙아머</title>
    <link rel="stylesheet" href="css/adminDownWrite copy.css" tpye="text/css" />

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
                        <li id="noon"><a href="adminDownWrite.php">자료실 글쓰기</a></li>
                    </ul>
                    

                    <ul>
                        <li ><a href="adminDeleteNotice.php">공지사항 글 삭제</a></li>
                        <li><a href="adminDeleteComm.php">자료실 글 삭제</a></li>
                    </ul>
        </div>

        <div id="right">
          <form
            action="/backend/upload.php"
            method="POST"
            enctype="multipart/form-data"
            name="frm"
          >
            <div id="title">
              <textarea id="title" placeholder="제목" name="title"></textarea>
            </div>
            <div>
              <textarea
                id="content"
                placeholder="내용"
                name="content"
              ></textarea>
            </div>

            <div id="btn" style="display: flex; justify-content: center">
              <label for="fileToUpload">
                <p class="btn1">첨부파일</p>
              </label>

              <input
                type="file"
                style="display: none"
                name="fileToUpload"
                id="fileToUpload"
              />

              <p class="btn1"  onclick="check()">글쓰기</p>
            </div>
          </form>

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
        function check(){
           document.querySelector("#content").value =  document.querySelector("#content").value.replace(/(?:\r\n|\r|\n)/g, '<br>');
           frm.submit();
        }
      
        const urlString = window.location.href;
        const url = new URL(urlString);
        let id = url.searchParams.get("id");

       
        if (id == "ok") {
          alert("파일이 정상적으로 등록되었습니다");
        }

    </script>
  </body>
</html>
