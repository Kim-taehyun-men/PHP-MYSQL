<?php
require_once('26lib/26-1print.php');
require_once('26-2view/26-3top.php');
?>
    <a href="23-1create.php">creat</a>

    <form  action="23-2create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>
      <p>
        <textarea name="description" rows="8" cols="80" placeholder="Description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
    <?php
    require_once('26-2view/26-2bottom.php');
    ?>
