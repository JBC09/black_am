const main = document.querySelector("#main");
const search = document.querySelector("#search");
const search_btn = document.querySelector("#search_btn");

function truncateText(text, maxLength) {
  if (text.length > maxLength) {
    return text.substring(0, maxLength) + "...";
  } else {
    return text;
  }
}

fetch("/backend/communityList.php")
  .then((res) => res.json())
  .then((data) => {
    data.forEach((element) => {
      let boxData = `
        <div class="post" id="post${element["pk"]}">
            <img src="/img/${element["img"]}" alt="게시물 이미지" />
            <h2>${truncateText(element["title"], 35)}</h2>
         </div>
    `;

      main.innerHTML += boxData;
    });

    const posts = document.querySelectorAll(".post");
    posts.forEach((element) => {
      element.addEventListener("click", () => {
        const id = element.id.substring(4);

        self.location.href = `./detail.html?id=${id}`;
      });
    });
  });

search_btn.addEventListener("click", () => {
  fetch("/backend/communityList.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      search: search.value,
    }),
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.length == 0) {
        alert("검색 데이터가 없습니다.");
        return false;
      }
      main.innerHTML = "";

      data.forEach((element) => {
        let boxData = `
          <div class="post" id="post${element["pk"]}">
              <img src="/img/${element["img"]}" alt="게시물 이미지" />
              <h2>${truncateText(element["title"], 35)}</h2>
           </div>
      `;

        main.innerHTML += boxData;
      });

      const posts = document.querySelectorAll(".post");
      posts.forEach((element) => {
        element.addEventListener("click", () => {
          const id = element.id.substring(4);
          self.location.href = `./detail.html?id=${id}`;
        });
      });
    });
});
