// HTML CSS JSResult Skip Results Iframe
// EDIT ON
//-------- HTML 요소 셀렉팅 ---------//

const elInputUsername = document.querySelector("#id");

const elFailureMessage = document.querySelector(".failure-message");
const elSuccessMessage = document.querySelector(".success-message");

const elPassword = document.querySelector("#pass");
const elPasswordRetype = document.querySelector("#passcheck");

const elPWRetypeFailureMsg = document.querySelector(".mismatch-message");
const elPWRetypeSuccessMsg = document.querySelector(".match-message");

// const elPWFailureLeng = document.querySelector('.password-failure-length');
const elPWFailureComb = document.querySelector(".password-failure-comb");
const elPWFailureContn = document.querySelector(".password-failure-contn");
// const elPWFailureUpper = document.querySelector('.password-failure-upper');
const elPWSuccessMessage = document.querySelector(".password-success-message");

const elUrl = document.querySelector("#url");
const elSite = document.querySelector("#site");
const elNickname = document.querySelector("#name");
const elNickFailMessage = document.querySelector(".name-fail");
const elNickSuccessMessage = document.querySelector(".name-success");
const eltele = document.querySelector("#tele");

const elSubmitButton = document.querySelector("#subit-button");

const btnlogin = document.querySelector("#btnlogin");

/* input 포커스에 따른 높이조정 */

var id11 = Boolean(false);
var pw12 = Boolean(false);
var pw22 = Boolean(false);
var nick = Boolean(false);

/* 아이디 */
document.getElementById("id").addEventListener("focus", () => {
  id11 = true;

  if (id11 === true && pw12 === false && pw22 === false) {
    document.getElementById("inner").style.height = `528px`;
  }

  if (id11 === true && pw12 === true && pw22 === false) {
    document.getElementById("inner").style.height = `546px`;
  }
  if (id11 === true && pw12 === false && pw22 === true) {
    document.getElementById("inner").style.height = `546px`;
  }
  if (id11 === true && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `564px`;
  }

  /* 닉네임 */
  if (nick === true && id11 === true && pw12 === false && pw22 === false) {
    document.getElementById("inner").style.height = `566px`;
  }
  if (nick === true && id11 === true && pw12 === true && pw22 === false) {
    document.getElementById("inner").style.height = `584px`;
  }
  if (nick === true && id11 === true && pw12 === false && pw22 === true) {
    document.getElementById("inner").style.height = `584px`;
  }
  if (nick === true && id11 === true && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `602px`;
  }
});

/* 비밀번호 */
document.getElementById("pass").addEventListener("focus", () => {
  pw12 = true;

  if (id11 === false && pw12 === true && pw22 === false) {
    document.getElementById("inner").style.height = `528px`;
  }
  if (id11 === true && pw12 === true && pw22 === false) {
    document.getElementById("inner").style.height = `546px`;
  }
  if (id11 === false && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `546px`;
  }
  if (id11 === true && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `564px`;
  }

  /* 닉네임 */
  if (nick === true && id11 === false && pw12 === true && pw22 === false) {
    document.getElementById("inner").style.height = `566px`;
  }
  if (nick === true && id11 === true && pw12 === true && pw22 === false) {
    document.getElementById("inner").style.height = `584px`;
  }
  if (nick === true && id11 === false && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `584px`;
  }
  if (nick === true && id11 === true && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `602px`;
  }
});

/* 비밀번호 확인 */
document.getElementById("passcheck").addEventListener("focus", () => {
  pw22 = true;

  if (id11 === false && pw12 === false && pw22 === true) {
    document.getElementById("inner").style.height = `528px`;
  }
  if (id11 === true && pw12 === false && pw22 === true) {
    document.getElementById("inner").style.height = `546px`;
  }
  if (id11 === false && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `546px`;
  }
  if (id11 === true && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `564px`;
  }

  /* 닉네임 */
  if (nick === true && id11 === false && pw12 === false && pw22 === true) {
    document.getElementById("inner").style.height = `566px`;
  }
  if (nick === true && id11 === true && pw12 === false && pw22 === true) {
    document.getElementById("inner").style.height = `584px`;
  }
  if (nick === true && id11 === false && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `584px`;
  }
  if (nick === true && id11 === true && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `602px`;
  }
});

/* 닉네임 */
document.getElementById("name").addEventListener("focus", () => {
  nick = true;

  if (nick === true && id11 === false && pw12 === false && pw22 === false) {
    document.getElementById("inner").style.height = `528px`;
  }
  if (nick === true && id11 === true && pw12 === false && pw22 === false) {
    document.getElementById("inner").style.height = `566px`;
  }
  if (nick === true && id11 === false && pw12 === true && pw22 === false) {
    document.getElementById("inner").style.height = `566px`;
  }
  if (nick === true && id11 === false && pw12 === false && pw22 === true) {
    document.getElementById("inner").style.height = `566px`;
  }
  if (nick === true && id11 === true && pw12 === true && pw22 === false) {
    document.getElementById("inner").style.height = `584px`;
  }
  if (nick === true && id11 === false && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `584px`;
  }
  if (nick === true && id11 === true && pw12 === false && pw22 === true) {
    document.getElementById("inner").style.height = `584px`;
  }
  if (nick === true && id11 === true && pw12 === true && pw22 === true) {
    document.getElementById("inner").style.height = `602px`;
  }
});

/* input 포커스에 따른 높이조정 */

/* 닉네임 입력값 제한 */
// function handleOnInput(e)  {
//   e.value = e.value.replace(/[^ㄱ-힣]+/g, '')
//   // e.value = e.value.replace(/[^A-Za-z]/ig, '')
// }
/* 닉네임 입력값 제한 */

/* 텔레그램 입력값 제한 */
function handleOnInputtele(e) {
  e.value = e.value.replace(/[^A-Za-z0-9_]+/g, "");
  // e.value = e.value.replace(/[^A-Za-z]/ig, '')
}
/* 텔레그램 입력값 제한 */

//-------- 유효성 검사 ---------//

function nicknameFn() {
  if (isMoreThan2Length(elNickname.value) && isNickNameChar(elNickname.value)) {
    elNickSuccessMessage.classList.remove("hide");
    elNickFailMessage.classList.add("hide");
  } else {
    elNickFailMessage.classList.remove("hide");
    elNickSuccessMessage.classList.add("hide");
  }
}
elNickname.addEventListener("click", nicknameFn);
elNickname.addEventListener("keyup", nicknameFn);

// { 아이디 } input 유효성 검사
function usernameFn() {
  /*
  if( isMoreThan4Length(elInputUsername.value) ) {
    //console.log('4보다 길다..')
  } else {
    //console.log('4보다 짧다...!!!')
  }
  
  if( isUserNameChar(elInputUsername.value) ) {
    //console.log('가능한 것만 있네!');
  } else {
    //console.log('안되는 것도 있네?');
  }
  */

  if (
    isMoreThan4Length(elInputUsername.value) &&
    isUserNameChar(elInputUsername.value)
  ) {
    elSuccessMessage.classList.remove("hide");
    elFailureMessage.classList.add("hide");
  } else {
    elFailureMessage.classList.remove("hide");
    elSuccessMessage.classList.add("hide");
  }

  // isSubmitButton();
}

elInputUsername.addEventListener("click", usernameFn);
elInputUsername.addEventListener("keyup", usernameFn);

// { 비밀번호 } input 유효성 검사
function passwordFn() {
  // if( isMoreThan8Length(elPassword.value) ) {
  //   elPWFailureLeng.classList.add('hide');
  // } else {
  //   elPWFailureLeng.classList.remove('hide');
  // }

  /*
  if( isPasswordEng(elPassword.value) ) {
    console.log('영어가 있다..');
  } else {
    console.log('영어가 없다...!!!');
  }
  
  if( isPasswordNum(elPassword.value) ) {
    console.log('숫자가 있다..');
  } else {
    console.log('숫자가 없다...!!!');
  }
  if( isPasswordSpeci(elPassword.value) ) {
    console.log('특수문자가 있다..');
  } else {
    console.log('특수문자가 없다...!!!');
  }
  if( isPasswordBlank(elPassword.value) ) {
    console.log('공백이 없다..');
  } else {
    console.log('공백이 있다...!!!');
  }
  */

  /* 비밀번호 체크 */
  if (
    isMoreThan8Length(elPassword.value) &&
    isPasswordEng(elPassword.value) +
      isPasswordNum(elPassword.value) +
      isPasswordSpeci(elPassword.value) >=
      2 &&
    isPasswordBlank(elPassword.value) &&
    isPasswordChar(elPassword.value)
  ) {
    elPWFailureComb.classList.add("hide");
    elPWSuccessMessage.classList.remove("hide");
  } else {
    elPWFailureComb.classList.remove("hide");
    elPWSuccessMessage.classList.add("hide");
  }

  /* 비밀번호 체크 */

  // if( isPasswordRepeat(elPassword.value) ) {
  //   elPWFailureContn.classList.remove('hide');
  // } else {
  //   elPWFailureContn.classList.add('hide');
  // }

  // if( (isPasswordUpper(elPassword.value)) ) {
  //   elPWFailureUpper.classList.add('hide');
  // } else {
  //   elPWFailureUpper.classList.remove('hide');
  // }

  // if( (isMoreThan8Length(elPassword.value)) &&
  //     (isPasswordEng(elPassword.value) + isPasswordNum(elPassword.value) + isPasswordSpeci(elPassword.value) >= 2) &&
  //     (isPasswordChar(elPassword.value)) &&
  //     (isPasswordBlank(elPassword.value)) &&
  //     (!isPasswordRepeat(elPassword.value)) &&
  //     ((isPasswordUpper(elPassword.value)))
  //   ) {
  //   elPWSuccessMessage.classList.remove('hide');
  // } else {
  //   elPWSuccessMessage.classList.add('hide');
  // }

  // isSubmitButton();
}

elPassword.addEventListener("click", passwordFn);
elPassword.addEventListener("keyup", passwordFn);
// elPassword.addEventListener('keyup', passwordRetypeFn)

// { 비밀번호 확인 } input 유효성 검사
function passwordRetypeFn() {
  if (
    isMatch(elPassword.value, elPasswordRetype.value) &&
    isPasswordBlank(elPasswordRetype.value)
  ) {
    //console.log('두 비밀번호가 동일하다..');
    elPWRetypeFailureMsg.classList.add("hide");
    elPWRetypeSuccessMsg.classList.remove("hide");
  } else {
    //console.log('두 비밀번호가 다르다...!!!');
    elPWRetypeFailureMsg.classList.remove("hide");
    elPWRetypeSuccessMsg.classList.add("hide");
  }

  // isSubmitButton();
}

elPasswordRetype.onclick = passwordRetypeFn;
elPasswordRetype.onkeyup = passwordRetypeFn;

//-------- 최종 유효성 검사에서 사용하는 함수다 ---------//

// 모든 조건이 충족되었는지 확인하는 함수
function isAllCheck() {
  if (
    isMoreThan4Length(elInputUsername.value) &&
    isUserNameChar(elInputUsername.value)
  ) {
    // 아이디
    if (
      isMoreThan8Length(elPassword.value) &&
      isPasswordEng(elPassword.value) +
        isPasswordNum(elPassword.value) +
        isPasswordSpeci(elPassword.value) >=
        2 &&
      isPasswordChar(elPassword.value) &&
      isPasswordBlank(elPassword.value)
      //  &&
      //  (!isPasswordRepeat(elPassword.value)) &&
      // ((isPasswordUpper(elPassword.value)))
    ) {
      // 비밀번호
      if (isMatch(elPassword.value, elPasswordRetype.value)) {
        // 비밀번호 확인
        //console.log('true!!');
        return true;
      } else {
        return false;
      }
    }
  } else {
    //console.log('false!!');
    return false;
  }
}

// // [회원가입 버튼] 배경 활성화 함수
// function isSubmitButton() {
//   if( isAllCheck() ) {
//     elSubmitButton.classList.add('allCheck');
//   }
//   else {
//     elSubmitButton.classList.remove('allCheck');
//   }
// }

// // [회원가입 버튼] 클릭 이벤트 함수
// elSubmitButton.onclick = function() {
//   if( isAllCheck() ) {
//     alert('회원가입이 완료되었습니다!');
//     elInputUsername.value = '';
//     elPassword.value = '';
//     elPasswordRetype.value = '';
//     elSuccessMessage.classList.add('hide');
//     elPWRetypeSuccessMsg.classList.add('hide');
//     elPWSuccessMessage.classList.add('hide');
//     elSubmitButton.classList.remove('allCheck');
//   }
//   else {
//     alert('모든 조건이 충족되어야합니다.');
//   }
// };

//-------- 유효성 검사에서 사용하는 함수다 ---------//

// [아이디] 길이가 4자 이상이면 true를 리턴하는 함수
function isMoreThan4Length(value) {
  // 아이디 입력창에 사용자가 입력을 할 때
  // 글자 수가 4개이상인지 판단한다.
  // 글자가 4개 이상이면 success메세지가 보여야 한다.
  return value.length >= 4;
}
/*테테테텥스스스스스트트트트트*/

// [닉네임] 길이가 2자 이상이면 true를 리턴하는 함수
function isMoreThan2Length(value) {
  // 아이디 입력창에 사용자가 입력을 할 때
  // 글자 수가 4개이상인지 판단한다.
  // 글자가 4개 이상이면 success메세지가 보여야 한다.
  return value.length >= 2;
}

// [닉네임] 길이가 한글이면 true를 리턴하는 함수
function isNickNameChar(username) {
  var letters = /^[가-힣]+$/;

  if (username.match(letters)) {
    return true;
  } else {
    return false;
  }
}
/*테테테텥스스스스스트트트트트*/

// [아이디] '영문, 숫자'만 있으면 true를 리턴하는 함수
function isUserNameChar(username) {
  var letters = /^[A-Za-z0-9]+$/;

  if (username.match(letters)) {
    return true;
  } else {
    return false;
  }
}

// [비밀번호] 길이가 8자 이상이면 true를 리턴하는 함수
function isMoreThan8Length(password) {
  return password.length >= 8;
}

// [비밀번호] 영문이 있으면 true를 리턴하는 함수
function isPasswordEng(password) {
  var letters = /[A-Za-z]/; // 잘 모르겠지만 이것은 정규표현식으로 AZ - az 모든 알파벳을 담고 있다.

  if (letters.test(password)) {
    // 정규표현식에 영어문자가 모두 들었고. 정규표현식의 메소드인 test()로 비밀번호 문자에 영어가 있는지 판단한다.
    return true;
  } else {
    return false;
  }
}

// [비밀번호] 숫자가 있으면 true를 리턴하는 함수
function isPasswordNum(password) {
  var letters = /[0-9]/;

  if (letters.test(password)) {
    return true;
  } else {
    return false;
  }
}

// [비밀번호] 특수문자가 있으면 true를 리턴하는 함수
function isPasswordSpeci(password) {
  var letters = /[~!@#$%^&*()\-_=+\\\|\[\]{};:\'",.<>\/?]/;

  if (letters.test(password)) {
    return true;
  } else {
    return false;
  }
}

// [비밀번호][비밀번호 확인] 스페이스가 없을 경우 true를 리턴하는 함수
function isPasswordBlank(password) {
  if (password.search(/\s/) === -1) {
    return true;
  } else {
    return false;
  }
}

// [비밀번호] '영문, 숫자, 특수문자'만 있으면 true를 리턴하는 함수
function isPasswordChar(password) {
  var letters = /^[A-Za-z0-9~!@#$%^&*()\-_=+\\\|\[\]{};:\'",.<>\/?]+$/;

  if (password.match(letters)) {
    //console.log('가능한 것만 있네!');
    return true;
  } else {
    //console.log('안되는 것도 있네?');
    return false;
  }
}

// [비밀번호] 동일한 숫자 3개 이상 연속 사용하면 true를 리턴하는 함수
// function isPasswordRepeat (password) {
//   // password의 길이만큼 반복되는 반복문이 있어야 한다.
//   // 문자 하나와 나 자신+1과 나자신 +2와 비교한다.
//   // 숫자인지 아닌지 판단한다.숫자이면 true 아니면 false
//   for( let i=0; i<password.length-2; i++ ) {
//     if( password[i]===password[i+1] && password[i]===password[i+2] ) {
//       if( !isNaN(Number(password[i])) ) {
//         return true;
//       }
//     }
//   }
//   return false;
// }

// [비밀번호] 영문자 중에 대문자 하나이상 포함되면 true를 리턴하는 함수
// function isPasswordUpper (password) {
//   var letters = /[A-Z]/;

//   if( letters.test(password) ) {
//     return true;
//   } else {
//     return false;
//   }
// }

// [비밀번호 확인] 매치가 동일하면 true를 리턴하는 함수
function isMatch(password1, password2) {
  if (password1 && password2) {
    if (password1 === password2) {
      return true;
    }
  } else {
    return false;
  }
}

btnlogin.addEventListener("click", () => {
  if (isAllCheck()) {
    fetch("/backend/signup.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        userId: elInputUsername.value,
        userPw: elPassword.value,
        userNickName: elNickname.value,
        userTelegram: eltele.value,
        userCompany: elSite.value,
        userUrl: elUrl.value,
      }),
    })
      .then((res) => res.json())
      .then((data) => {
        if (data["state"] == "ok") {
          alert("회원가입이 정상적으로 되었습니다.");
          self.location.href = "index.html";
          history.go(-1);
        } else {
          alert("이미 존재하는 회원ID입니다.");
        }
      });
  } else {
    alert("입력된 값이 올바르지 않습니다 확인해주세요.");
  }
});

async function colorList(pk) {
  fetch("/backend/confirmed.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      pk: element["pk"],
      userId: getCookie("userId"),
    }),
  })
    .then((res) => res.json())
    .then((data) => {
      if (data["state"] == "add") {
        color = "black";
      } else {
        color = "red";
      }
    });

  fetch("/backend/confirmed.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      pk: element["pk"],
      userId: getCookie("userId"),
    }),
  });
}
