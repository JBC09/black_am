<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>블랙아머</title>
    <link rel="stylesheet" href="/css/noticeView.css" tpye="text/css" />

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
                
            </div> -->

      <!-- 게시판 보기 -->
      <div id="view">
        <div id="title">
          <span id="titleValue">제목제목제목제목제목제목제목</span>

          <span class="conform" id="conform">112</span>
          <span class="material-symbols-outlined">visibility</span>
          <span class="date" id="date">2023-09-11</span>
        </div>
        <div id="hidden">
          <span id="date2">2023-09-11</span>
          <span id="material-symbols-outlined" class="material-symbols-outlined"
            >visibility</span
          >
          <span id="conform2">112</span>
        </div>
        <div id="content"></div>
        <div id="btn" onclick="self.location.href='notice.php'">
          <button id="list">목 록</button>
        </div>
      </div>
      <!-- 게시판 보기 -->

      <!-- //container -->

      <?php
      include 'footer.php';
    ?>
    </div>
    <!-- //wrap -->
    <!-- 
     <script src="js/index.js"></script> -->

    <script>
      const urlString = window.location.href;
      const url = new URL(urlString);
      let id = url.searchParams.get("id");

      if(id == null) {
        alert("존재하는 공지사항이 없습니다.");
            history.go(-1);
      }
      fetch("/backend/noticeList.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },

        body: JSON.stringify({
          id: id,
        }),
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.length == 0) {
            alert("존재하는 공지사항이 없습니다.");
            history.go(-1);
          }

          console.log(data);

          document.querySelector("#titleValue").textContent = data[0]["title"];
          document.querySelector("#date").textContent = data[0]["date"];
          document.querySelector("#date2").textContent = data[0]["date"];
          document.querySelector("#conform").textContent = data[0]["count"];
          document.querySelector("#conform2").textContent = data[0]["count"];
          document.querySelector("#content").innerHTML = data[0]["content"];
        });
    </script>
  </body>
</html>
