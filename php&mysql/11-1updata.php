<?php
$conn = mysqli_connect("localhost", "root", "fjqm1325", "opentutorials");
$list = '';
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
  $list = $list."<li><a href=\"3-1index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array(
  'title'=>'Welcome',
  'description'=>'HELLO, Welcome'
);
if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM topic WHERE id={$filtered_id}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['title'] = $row['title'];
  $article['description'] = $row['description'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="3-1index.php">WEB</a></h1>
    <ol>
      <?=$list?>
    </ol>
    <form action="11-2process_updata.php" method="POST">
      <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <p><input type="text" name="title" placeholder="title" value="<?=$article['title']?>"></p>
      <p><textarea name="description" placeholder="description" ><?=$article['description']?></textarea></p>
      <p><input type="submit"></p>
    </form>
  </body>
</html>
