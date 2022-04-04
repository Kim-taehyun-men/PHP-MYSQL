<?php
require_once('26lib/26-1print.php');
require_once('26-2view/26-3top.php');
?>
    <a href="23-1create.php">creat</a>
    <?php if(isset($_GET['id'])) { ?>
    <a href="24-1update.php?id=<?=$_GET['id']?>">update</a>
    <form  action="25-1delete_process.php" method="post">
      <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <input type="submit" value = "delete">
    </form>
  <?php } ?>
    <h2>
    <?php
    print_title();
     ?>
   </h2>
    <?php
    print_description();
    ?>
    <?php
    require_once('26-2view/26-2bottom.php');
    ?>
