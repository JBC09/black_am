<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>게시판 메인 화면</title>
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
        display: flex;
        flex-direction: column;
        align-items: start;
      }

      header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        text-align: center;
        width: 100%;
      }

      main {
        padding: 20px 0px 20px 2vw;
        margin-top: 20px;
        width: 100vw;
        box-sizing: border-box;
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        justify-content: start;
      }

      .search-bar {
        width: 100%;
        margin-bottom: 20px;
      }

      .post {
        width: 450px;
        background-color: #fff;
        padding: 10px;
        box-sizing: border-box;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: start;
        cursor: pointer;
      }

      .post img {
        margin-right: 15px;
        width: 80px;
        height: 80px;
        max-width: 100%;
        border-radius: 8px;
        border: 1px solid #ddd;
      }

      h2 {
        color: #333;
        font-size: 17px;
        font-weight: 100;
      }

      p {
        color: #666;
        text-align: center;
      }

      .search-bar {
        margin: 0 auto;
        width: 100%;
        margin-top: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      input[type="text"] {
        width: 50%;
        padding: 10px;
        box-sizing: border-box;
        border-radius: 4px;
        margin-right: 10px;
        font-size: 1.2rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        outline: none;
      }

      button {
        background-color: #555;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 10px;
        font-size: 1.2rem;
      }

      button:hover {
        background-color: #555;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>게시판</h1>
    </header>

    <div class="search-bar">
      <input type="text" placeholder="검색어를 입력하세요" id="search" />
      <button id="search_btn">검색</button>
      <button onclick="self.location.href='writeComm.html'">글작성</button>
    </div>

    <main id="main"></main>

    <!-- <script src="/js/mainComm.js"></script> -->

    <script>
      const _0x42c933 = _0x5cf5;
      function _0x5cf5(_0x180b07, _0x24c3fd) {
        const _0x21b0ee = _0x21b0();
        return (
          (_0x5cf5 = function (_0x5cf5db, _0x5c7b29) {
            _0x5cf5db = _0x5cf5db - 0x1bd;
            let _0x30e949 = _0x21b0ee[_0x5cf5db];
            return _0x30e949;
          }),
          _0x5cf5(_0x180b07, _0x24c3fd)
        );
      }
      (function (_0x3f6906, _0x3eca8d) {
        const _0xd17634 = _0x5cf5,
          _0x181da1 = _0x3f6906();
        while (!![]) {
          try {
            const _0x12c508 =
              (parseInt(_0xd17634(0x1d3)) / 0x1) *
                (parseInt(_0xd17634(0x1ca)) / 0x2) +
              -parseInt(_0xd17634(0x1c3)) / 0x3 +
              -parseInt(_0xd17634(0x1d7)) / 0x4 +
              (-parseInt(_0xd17634(0x1c0)) / 0x5) *
                (-parseInt(_0xd17634(0x1da)) / 0x6) +
              (parseInt(_0xd17634(0x1e2)) / 0x7) *
                (-parseInt(_0xd17634(0x1cc)) / 0x8) +
              (-parseInt(_0xd17634(0x1be)) / 0x9) *
                (parseInt(_0xd17634(0x1bd)) / 0xa) +
              (-parseInt(_0xd17634(0x1e1)) / 0xb) *
                (-parseInt(_0xd17634(0x1c8)) / 0xc);
            if (_0x12c508 === _0x3eca8d) break;
            else _0x181da1["push"](_0x181da1["shift"]());
          } catch (_0x323ec7) {
            _0x181da1["push"](_0x181da1["shift"]());
          }
        }
      })(_0x21b0, 0xae93a);
      const main = document[_0x42c933(0x1c5)](_0x42c933(0x1cf)),
        search = document[_0x42c933(0x1c5)]("#search"),
        search_btn = document[_0x42c933(0x1c5)](_0x42c933(0x1d9));
      function _0x21b0() {
        const _0x3f3bb2 = [
          ".post",
          "innerHTML",
          "5627xGdSjD",
          "application/json",
          "title",
          "location",
          "4009280yLehVM",
          "then",
          "#search_btn",
          "6EEYgEG",
          "POST",
          "검색\x20데이터가\x20없습니다.",
          "\x22\x20alt=\x22게시물\x20이미지\x22\x20/>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<h2>",
          "\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<img\x20src=\x22/img/",
          "json",
          "substring",
          "9185yFaHiH",
          "5548431MhSoCQ",
          "</h2>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20",
          "635380WLVvCl",
          "117CqNFiu",
          "img",
          "5855510dVGwsG",
          "href",
          "forEach",
          "2800560RUlxMI",
          "querySelectorAll",
          "querySelector",
          "value",
          "length",
          "27708yRXzNJ",
          "addEventListener",
          "416qEUHJe",
          "</h2>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20\x20\x20",
          "8pNAwmX",
          "\x0a\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22post\x22\x20id=\x22post",
          "stringify",
          "#main",
          "click",
        ];
        _0x21b0 = function () {
          return _0x3f3bb2;
        };
        return _0x21b0();
      }
      function truncateText(_0x11396c, _0x4f3e67) {
        const _0x3f2256 = _0x42c933;
        return _0x11396c[_0x3f2256(0x1c7)] > _0x4f3e67
          ? _0x11396c[_0x3f2256(0x1e0)](0x0, _0x4f3e67) + "..."
          : _0x11396c;
      }
      fetch("/backend/communityList.php")
        [_0x42c933(0x1d8)]((_0x1fdab5) => _0x1fdab5[_0x42c933(0x1df)]())
        [_0x42c933(0x1d8)]((_0x3a7143) => {
          const _0x276498 = _0x42c933;
          _0x3a7143[_0x276498(0x1c2)]((_0x1659f8) => {
            const _0x50d643 = _0x276498;
            let _0xb4a326 =
              _0x50d643(0x1cd) +
              _0x1659f8["pk"] +
              "\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<img\x20src=\x22/img/" +
              _0x1659f8[_0x50d643(0x1bf)] +
              "\x22\x20alt=\x22게시물\x20이미지\x22\x20/>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<h2>" +
              truncateText(_0x1659f8[_0x50d643(0x1d5)], 0x23) +
              _0x50d643(0x1e3);
            main[_0x50d643(0x1d2)] += _0xb4a326;
          });
          const _0x2d0cfd = document[_0x276498(0x1c4)](".post");
          _0x2d0cfd["forEach"]((_0x7b1369) => {
            const _0xf15f09 = _0x276498;
            _0x7b1369[_0xf15f09(0x1c9)](_0xf15f09(0x1d0), () => {
              const _0x5d2a2c = _0xf15f09,
                _0x45fd3b = _0x7b1369["id"][_0x5d2a2c(0x1e0)](0x4);
              self[_0x5d2a2c(0x1d6)][_0x5d2a2c(0x1c1)] =
                "./detail.html?id=" + _0x45fd3b;
            });
          });
        }),
        search_btn["addEventListener"]("click", () => {
          const _0x16cc9f = _0x42c933;
          fetch("/backend/communityList.php", {
            method: _0x16cc9f(0x1db),
            headers: { "Content-Type": _0x16cc9f(0x1d4) },
            body: JSON[_0x16cc9f(0x1ce)]({ search: search[_0x16cc9f(0x1c6)] }),
          })
            ["then"]((_0x529223) => _0x529223["json"]())
            [_0x16cc9f(0x1d8)]((_0x3c8268) => {
              const _0x707093 = _0x16cc9f;
              if (_0x3c8268["length"] == 0x0)
                return alert(_0x707093(0x1dc)), ![];
              (main[_0x707093(0x1d2)] = ""),
                _0x3c8268["forEach"]((_0x340314) => {
                  const _0x5c4da1 = _0x707093;
                  let _0x5ad574 =
                    "\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22post\x22\x20id=\x22post" +
                    _0x340314["pk"] +
                    _0x5c4da1(0x1de) +
                    _0x340314[_0x5c4da1(0x1bf)] +
                    _0x5c4da1(0x1dd) +
                    truncateText(_0x340314["title"], 0x23) +
                    _0x5c4da1(0x1cb);
                  main[_0x5c4da1(0x1d2)] += _0x5ad574;
                });
              const _0x226663 = document[_0x707093(0x1c4)](_0x707093(0x1d1));
              _0x226663[_0x707093(0x1c2)]((_0x112c73) => {
                const _0x3e4e4d = _0x707093;
                _0x112c73[_0x3e4e4d(0x1c9)]("click", () => {
                  const _0x5600e0 = _0x3e4e4d,
                    _0x31bda7 = _0x112c73["id"][_0x5600e0(0x1e0)](0x4);
                  self[_0x5600e0(0x1d6)][_0x5600e0(0x1c1)] =
                    "./detail.html?id=" + _0x31bda7;
                });
              });
            });
        });
    </script>
  </body>
</html>
