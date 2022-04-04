<?php
$conn = mysqli_connect("localhost", "root", "fjqm1325", "opentutorials");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="3-1index.php">WEB</a></h1>
    <p><a href="3-1index.php">topic</a></p>

    <table border="1">
  <tr>
    <td>id</td><td>name</td><td>profile</td><td></td>
    <?php
    $sql = "SELECT * FROM author";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
      $filtered = array(
        'id'=>htmlspecialchars($row['id']),
        'name'=>htmlspecialchars($row['name']),
        'profile'=>htmlspecialchars($row['profile'])
      );
      ?>
      <tr>
        <td><?=$filtered['id']?></td>
        <td><?=$filtered['name']?></td>
        <td><?=$filtered['profile']?></td>
        <td><a href="17-1author.php?id=<?=$filtered['id']?>">update</a></td>
        <td>
          <form action="20-1process_delete_author.php" method="post" onsubmit="if(!confirm('sure?')){return false;}">
            <input type="hidden" name="id" value="<?=$filtered['id']?>">
            <input type="submit" value="delete">
          </form>
        </td>
      </tr>
      <?php
    }
    ?>
  </tr>
</table>
<?php
$escaped = array(
  'name'=>'',
  'profile'=>''
);
$label_submit = 'Create author';
$form_action = '18-1process_create_author.php';
$form_id = '';
if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
  settype($filtered_id, 'integer');
  $sql = "SELECT * FROM author WHERE id = {$filtered_id}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $escaped['name'] = htmlspecialchars($row['name']);
  $escaped['profile'] = htmlspecialchars($row['profile']);
  $label_submit = 'Update author';
  $form_action = '19-1process_update_author.php';
  $form_id = '<input type="hidden" name="id" value="'.$_GET['id'].'">';
}
?>
<form action="<?=$form_action?>" method="post">
  <?=$form_id?>
  <p><input type="text" name="name" placeholder="name" value="<?=$escaped['name']?>"></p>
  <p><textarea name="profile" placeholder="profile"><?=$escaped['profile']?></textarea></p>
  <p><input type="submit" value="<?=$label_submit?>"></p>
</form>
  </body>
</html>
