<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>게시글 상세 페이지</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;900&display=swap"
    />
    <link rel="stylesheet" href="/css/search.css">

    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Noto Sans KR", sans-serif;
      }


      #postContainer {
        max-width: 900px;
        margin: 50px auto;
      }

      #postTitle {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #333;
      }

      #postImage {
        border-radius: 5px;
        width: 100%;
        max-width: 400px;
        margin: 20px 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      #postContent {
        font-size: 1.2rem;
        line-height: 1.6;
        color: #555;
      }

      #bottom {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ddd;
        margin-bottom: 20px;
      }

      .button {
        cursor: pointer;
        padding: 10px 15px;
        border-radius: 5px;
        color: #fff;
        font-weight: 600;
        text-align: center;
        transition: background-color 0.3s ease;
      }

      #mainBoardBtn {
        background-color: #3498db;
      }

      #goBackBtn {
        background-color: #2ecc71;
      }

      h1{
        color: white;
      }
      li{
        color:white
      }
    </style>
  </head>
      
  <body>

  <?php
  include 'header.php';
  ?>
    <div id="postContainer">
      <div id="bottom">
        <h1 id="postTitle">제목</h1>
        <div>
          <a href="mainComm.html" class="button" id="mainBoardBtn"
            >자유게시판</a
          >
          <a href="#" class="button" onclick="history.go(-1)" id="goBackBtn"
            >뒤로가기</a
          >
        </div>
      </div>
      <img
        id="postImage"
        src="../img/d8f3c8d22c0c2dfcd712477de45c0498e00b074aa태그.png"
        alt="게시물 이미지"
      />
      <p id="postContent">내용</p>
    </div>


    
  <?php
  include 'footer.php';
  ?>
    <script>
      function _0x29ad() {
        const _0x55b8e7 = [
          "then",
          "353454RJeahT",
          "img",
          "application/json",
          "153wJNQiA",
          "25raOTFI",
          "postTitle",
          "getElementById",
          "11208zTbPMQ",
          "/backend/detail.php",
          "textContent",
          "3lUtMLM",
          "2434236GHkVCo",
          "POST",
          "1190hdkjGN",
          "존재하지\x20않는\x20페이지\x20입니다.",
          "54570RgCPks",
          "get",
          "href",
          "315100cmbadX",
          "./mainComm.html",
          "11KxiwbU",
          "postContent",
          "location",
          "75604ovynfY",
          "searchParams",
          "262374EMKtWr",
        ];
        _0x29ad = function () {
          return _0x55b8e7;
        };
        return _0x29ad();
      }
      const _0x3ef803 = _0x14d7;
      function _0x14d7(_0x42e83d, _0xc14947) {
        const _0x29ad7a = _0x29ad();
        return (
          (_0x14d7 = function (_0x14d769, _0x28564c) {
            _0x14d769 = _0x14d769 - 0x110;
            let _0x1d407a = _0x29ad7a[_0x14d769];
            return _0x1d407a;
          }),
          _0x14d7(_0x42e83d, _0xc14947)
        );
      }
      (function (_0x4a0f1f, _0x1adf39) {
        const _0xdb948b = _0x14d7,
          _0x2db465 = _0x4a0f1f();
        while (!![]) {
          try {
            const _0x327b0c =
              -parseInt(_0xdb948b(0x121)) / 0x1 +
              parseInt(_0xdb948b(0x12a)) / 0x2 +
              (-parseInt(_0xdb948b(0x119)) / 0x3) *
                (parseInt(_0xdb948b(0x126)) / 0x4) +
              (-parseInt(_0xdb948b(0x113)) / 0x5) *
                (-parseInt(_0xdb948b(0x128)) / 0x6) +
              (-parseInt(_0xdb948b(0x11c)) / 0x7) *
                (-parseInt(_0xdb948b(0x116)) / 0x8) +
              (-parseInt(_0xdb948b(0x112)) / 0x9) *
                (-parseInt(_0xdb948b(0x11e)) / 0xa) +
              (parseInt(_0xdb948b(0x123)) / 0xb) *
                (-parseInt(_0xdb948b(0x11a)) / 0xc);
            if (_0x327b0c === _0x1adf39) break;
            else _0x2db465["push"](_0x2db465["shift"]());
          } catch (_0x571a5d) {
            _0x2db465["push"](_0x2db465["shift"]());
          }
        }
      })(_0x29ad, 0x2e411);
      const urlString = window["location"][_0x3ef803(0x120)],
        url = new URL(urlString),
        id = url[_0x3ef803(0x127)][_0x3ef803(0x11f)]("id");
      id == null &&
        (alert("존재하지\x20않는\x20페이지\x20입니다."),
        (self["location"]["href"] = _0x3ef803(0x122)));
      fetch(_0x3ef803(0x117), {
        method: _0x3ef803(0x11b),
        headers: { "Content-Type": _0x3ef803(0x111) },
        body: JSON["stringify"]({ id: id }),
      })
        [_0x3ef803(0x129)]((_0x4a084b) => _0x4a084b["json"]())
        ["then"]((_0x4b1768) => {
          const _0x56c124 = _0x3ef803;
          (document[_0x56c124(0x115)](_0x56c124(0x114))["textContent"] =
            _0x4b1768[0x0]["title"]),
            (document["getElementById"]("postImage")["src"] =
              "/img/" + _0x4b1768[0x0][_0x56c124(0x110)]),
            (document[_0x56c124(0x115)](_0x56c124(0x124))[_0x56c124(0x118)] =
              _0x4b1768[0x0]["content"]);
        })
        ["catch"](() => {
          const _0x146d8f = _0x3ef803;
          alert(_0x146d8f(0x11d)),
            (self[_0x146d8f(0x125)][_0x146d8f(0x120)] = "./mainComm.html");
        });
    </script>
  </body>
</html>
