<?php
$conn = mysqli_connect("localhost", "root", "fjqm1325", "opentutorials");
echo "<h1>single row</h1>";
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
  echo '<h2>'.$row['title'].'</h2>';
  echo $row['description'];
}
?>
