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
          <a href="./index.html" class="button" id="mainBoardBtn">메인페이지</a>
          <a href="#" class="button" onclick="history.go(-1)" id="goBackBtn"
            >뒤로가기</a
          >
        </div>
      </div>
      <p id="postContent">내용</p>
    </div>

    <?php
  include 'footer.php';
  ?>

    <script>
      const _0x4d0b7a = _0x55ea;
      function _0x55ea(_0x37eb41, _0x2bda50) {
        const _0x186ab3 = _0x186a();
        return (
          (_0x55ea = function (_0x55eaf7, _0x3208f2) {
            _0x55eaf7 = _0x55eaf7 - 0xeb;
            let _0x276ac0 = _0x186ab3[_0x55eaf7];
            return _0x276ac0;
          }),
          _0x55ea(_0x37eb41, _0x2bda50)
        );
      }
      function _0x186a() {
        const _0x45fbd3 = [
          "location",
          "catch",
          "396674OvwCXh",
          "4073148TRqLIt",
          "href",
          "postTitle",
          "getElementById",
          "24864GzZeux",
          "json",
          "35120BBzVJf",
          "POST",
          "8muixzB",
          "then",
          "./index.html",
          "/backend/noticeList.php",
          "존재하지\x20않는\x20페이지\x20입니다.",
          "textContent",
          "searchParams",
          "1614032CNaUJa",
          "3632739WncbZt",
          "application/json",
          "8739XfyPRI",
          "./mainComm.html",
          "title",
          "2876065ODjAVR",
          "2584uBPHGg",
          "postContent",
        ];
        _0x186a = function () {
          return _0x45fbd3;
        };
        return _0x186a();
      }
      (function (_0x4e6563, _0x296f38) {
        const _0x488435 = _0x55ea,
          _0x38e746 = _0x4e6563();
        while (!![]) {
          try {
            const _0x227eda =
              parseInt(_0x488435(0xff)) / 0x1 +
              parseInt(_0x488435(0xf4)) / 0x2 +
              parseInt(_0x488435(0xf5)) / 0x3 +
              (parseInt(_0x488435(0xed)) / 0x4) *
                (parseInt(_0x488435(0xfa)) / 0x5) +
              -parseInt(_0x488435(0x100)) / 0x6 +
              (-parseInt(_0x488435(0x104)) / 0x7) *
                (-parseInt(_0x488435(0xfb)) / 0x8) +
              (parseInt(_0x488435(0xf7)) / 0x9) *
                (-parseInt(_0x488435(0xeb)) / 0xa);
            if (_0x227eda === _0x296f38) break;
            else _0x38e746["push"](_0x38e746["shift"]());
          } catch (_0x5174e0) {
            _0x38e746["push"](_0x38e746["shift"]());
          }
        }
      })(_0x186a, 0x982d3);
      const urlString = window[_0x4d0b7a(0xfd)]["href"],
        url = new URL(urlString),
        id = url[_0x4d0b7a(0xf3)]["get"]("id");
      id == null &&
        (alert(_0x4d0b7a(0xf1)), (self["location"]["href"] = _0x4d0b7a(0xf8)));
      fetch(_0x4d0b7a(0xf0), {
        method: _0x4d0b7a(0xec),
        headers: { "Content-Type": _0x4d0b7a(0xf6) },
        body: JSON["stringify"]({ id: id }),
      })
        [_0x4d0b7a(0xee)]((_0x353588) => _0x353588[_0x4d0b7a(0x105)]())
        [_0x4d0b7a(0xee)]((_0x46f445) => {
          const _0x900794 = _0x4d0b7a;
          (document[_0x900794(0x103)](_0x900794(0x102))[_0x900794(0xf2)] =
            _0x46f445[0x0][_0x900794(0xf9)]),
            (document["getElementById"](_0x900794(0xfc))[_0x900794(0xf2)] =
              _0x46f445[0x0]["content"]);
        })
        [_0x4d0b7a(0xfe)](() => {
          const _0x2e6f08 = _0x4d0b7a;
          alert("존재하지\x20않는\x20페이지\x20입니다."),
            (self[_0x2e6f08(0xfd)][_0x2e6f08(0x101)] = _0x2e6f08(0xef));
        });
    </script>
  </body>
</html>
