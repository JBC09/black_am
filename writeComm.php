<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/search.css"> <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Noto%20Sans%20KR%3Aital%2Cwght%400%2C100..900&directory=3&display=block");

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Noto Sans KR";
      }

      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        height: 100vh;
      }

      form {
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 30vw;
        min-width: 300px;
      }
      li{
        color: white
      }

      h1 {
        color: #272727;
        text-align: center;
      }

      header h1{
        color: white
      }

    

      input,
      select {
        border-radius: 3px;
        outline: none;
        border: 1px solid #ddd;
        width: 100%;
        padding: 8px;
        margin-bottom: 13px;
        box-sizing: border-box;
        transition: 0.35s;
      }
      input:focus,
      select:focus {
        border: 1px solid #7367f0;
      }

      .p {
        text-align: center;
        box-sizing: border-box;
        width: 100%;
        background-color: #7367f0;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
        transition: 0.35s;
        font-size: 15px;
      }
      .p2 {
        text-align: center;
        box-sizing: border-box;
        width: 100%;
        background-color: #7367f0;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
        transition: 0.35s;
        font-size: 15px;
        color: #272727;
        background-color: gold;
      }

      #flex {
        width: 100%;
        display: flex;
        justify-content: space-between;
      }

      #bank_div {
        width: 35%;
      }

      #account_div {
        width: 60%;
      }
      #content {
        resize: none;
        border: 1px solid #ddd;
        border-radius: 3px;
        width: 100%;
        outline: none;
      }

      @media (max-width: 600px) {
        form {
          width: 80vw;
        }
      }
    </style>
    <title>Personal Information Form</title>
  </head>
  <body>

    <?php
      include 'header.php';
    ?>
    <form
      method="post"
      action="/backend/upload.php"
      enctype="multipart/form-data"
    >
      <h1>게시글 등록</h1>
      <input type="hidden" name="userId" id="userId" />
      <label for="title">제목</label>
      <input
        type="text"
        id="title"
        name="title"
        placeholder="홍길동"
        required
      />

      <input
        type="file"
        id="imgFile"
        accept="image/*"
        name="imgFile"
        required
      />
      <label for="content">내용</label>
      <textarea name="content" id="content" rows="10"></textarea>

      <input type="submit" id="post" class="p" value="작성" />
      <p onclick="location.href='./notice.php'" class="p2">돌아가기</p>
    </form>
    <?php
      include 'footer.php';
    ?>
    <script>
      const userId = document.querySelector("#userId");

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

      if (getCookie("userId") == null) {
        alert("로그인 후 이용이 가능합니다.");
        self.location.href = "/notice.php";
      } else {
        userId.value = getCookie("userId");
      }
    </script>
  </body>
</html>
