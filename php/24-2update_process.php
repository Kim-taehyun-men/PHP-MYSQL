<?php
  rename( '7-2indexdata/'.$_POST['old_title'], '7-2indexdata/'.$_POST['title']);
  file_put_contents('7-2indexdata/'.$_POST['title'],$_POST['description']);
  header('Location: /php/7-2index.php?id='.$_POST['title']);
?>
