const userId = document.querySelector("#id");
const password = document.querySelector("#pass");
const btnlogin = document.querySelector("#btnlogin");

btnlogin.addEventListener("click", () => {
  fetch("/backend/login.php", {
    method: "post",
    headers: {
      "Content-Type": " application/json",
    },
    body: JSON.stringify({
      userId: userId.value,
      userPw: password.value,
    }),
  })
    .then((res) => res.json())
    .then((data) => {
      if (data["state"] == "not_check_user") {
        alert("아직 승인이 되지 않은 회원입니다.");
        return false;
      } else if (data["state"] == "ok") {
        alert("정상적으로 로그인이 되었습니다.");
        self.location.href = "index.html";
        let endDay = new Date();
        endDay.setDate(endDay.getDate() + 7);

        document.cookie = `userId=${userId.value}; expires=${endDay}; path=/`;
      } else {
        alert("없는 회원입니다.");
        console.log(data["state"]);
      }
    });
});
