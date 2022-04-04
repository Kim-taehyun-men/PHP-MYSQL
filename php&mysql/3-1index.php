<?php
$conn = mysqli_connect("localhost", "root", "fjqm1325", "opentutorials");

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result))
{
  $escaped_title = htmlspecialchars($row['title']);
  $list = $list."<li><a href=\"3-1index.php?id={$row['id']}\">{$escaped_title}</a></li>";
}

$article = array(
  'title'=>'Welcome',
  'description'=>'HELLO, Welcome'
);
$updatalink = '';
$deletelink = '';
$author = '';
if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id={$filtered_id}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['title'] = htmlspecialchars($row['title']);
  $article['description'] = htmlspecialchars($row['description']);
  $article['name'] = htmlspecialchars($row['name']);
  $updatalink = '<a href="11-1updata.php?id='.$_GET['id'].'">updata</a>';
  $deletelink = '
  <form action="12-1process_delete.php" method="post">
    <input type="hidden" name="id" value="'.$_GET['id'].'">
    <input type="submit" value="delete">
  </form>
    ';
    $author = "<p>by {$article['name']} </p>";
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
    <p><a href="17-1author.php">author</a></p>
    <ol>
      <?=$list?>
    </ol>
    <a href="7-1create.php">create</a>
    <?=$updatalink?>
    <?=$deletelink?>
      <h2><?=$article['title']?></h2>
      <?=$article['description']?>
      <?=$author?>

  </body>
</html>
