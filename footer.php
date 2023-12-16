<style>
    #footer{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #footer p{
        margin-right: 10px;
    }
</style>

<footer>
    <div id="count">
        <ul>
            <li class="title">오늘 블랙회원 예방 수</li>
            <li class="num" id="count1"></li>
        </ul>
        <ul>
            <li class="title">누적 블랙회원 예방 수</li>
            <li class="num" id="count2"></li>
        </ul>
        <ul>
            <li class="title">오늘 블랙정보 등록 수</li>
            <li class="num" id="count3"></li>
        </ul>
        <ul>
            <li class="title">총 블랙정보 수</li>
            <li class="num" id="count4"></li>
        </ul>
    </div>
    <!-- //container -->

    <div id="footer">
        <p>Copyright ⓒ 2023 블랙아머. All Rights Reserved.</p> <img src="/img/tele2.svg" alt="" width="30px" height="30px">
    </div>
</footer>

<script>
    fetch("/backend/footer.php")
        .then((res) => res.json())
        .then((data) => {

   
          console.log(data);
            // 각각의 count에 데이터를 삽입
            document.querySelector("#count1").textContent = data[0]["count1"].toLocaleString('ko-KR');
            document.querySelector("#count2").textContent = parseInt(parseInt(data[1]["count2"])).toLocaleString('ko-KR');
            document.querySelector("#count3").textContent = data[2]["count3"].toLocaleString('ko-KR');
            document.querySelector("#count4").textContent = parseInt(parseInt(data[3]["count4"])).toLocaleString('ko-KR');
        })
        .catch((error) => {
            console.error('데이터를 불러오는 중 에러 발생:', error);
        });
</script>
