<?php
$conn = mysqli_connect("localhost", "root", "fjqm1325", "opentutorials");

$flitered = array(
  'title'=>mysqli_real_escape_string($conn, $_POST['title']),
  'description'=>mysqli_real_escape_string($conn, $_POST['description']),
  'author_id'=>mysqli_real_escape_string($conn, $_POST['author_id'])
);
$sql = "
  INSERT INTO topic
    (title, description, created, author_id)
    VALUES(
        '{$flitered['title']}',
        '{$flitered['description']}',
        NOW(),
        {$flitered['author_id']}
    )
";

$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="3-1index.php">돌아가기</a>';
}
?>
