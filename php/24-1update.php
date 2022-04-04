<?php
require_once('26lib/26-1print.php');
require_once('26-2view/26-3top.php');
?>
    <a href="23-1create.php">creat</a>
    <?php if(isset($_GET['id'])) { ?>
    <a href="24-1update.php?id=<?=$_GET['id'];?>">update</a>
  <?php } ?>
    <h2>
    <?php
    print_title();
     ?>
   </h2>
    <?php
    print_description();
    ?>


        <form  action="24-2update_process.php" method="post">
          <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
          <p>
            <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
          </p>
          <p>
            <textarea name="description" rows="8" cols="80" placeholder="Description"><?php print_description(); ?></textarea>
          </p>
          <p>
            <input type="submit">
          </p>
        </form>
        <?php
        require_once('26-2view/26-2bottom.php');
        ?>
