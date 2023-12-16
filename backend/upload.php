<?php   

include "./dbconn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $targetDirectory = "../img/";  // 저장할 디렉토리 경로
    $originalFileName = basename($_FILES["fileToUpload"]["name"]);
    
    $newFileName = time() . '_' . $originalFileName;
    
    $targetFile = $targetDirectory . $newFileName;
    
    $title = $_POST["title"];
    $content = $_POST["content"];

    $currentDateTime = date("Y-m-d");
    $sql = "insert into community values(NULL,'관리자','$title','$content','$newFileName','$currentDateTime',0)";
    mysqli_query($connect,$sql);

    
    // 파일을 지정한 디렉토리로 이동
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "파일이 업로드되었습니다. 새로운 파일 이름: $newFileName";
        
          header("Location:  /adminDownWrite.php?id=ok");
    } else {
        echo "파일 업로드에 실패했습니다.";
    }
} else {
    echo "올바른 방식으로 요청되지 않았습니다.";
}

?>
