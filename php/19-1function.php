<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
    function basic(){
      print("1Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> ");
      print("2Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> ");
    }
    basic();?>
    <h2>parameter &and; argument</h2>
    <?php
    function sum($a, $b)
    {
      printf($a + $b);
      print("<br>");
    }
    sum(2,4);
    sum(4,6);?>
    <h2>return</h2>
    <?php

    function sum2($a, $b)
    {
      return $a + $b;
    }
    print(sum2(2,4));
    file_put_contents('19-2result.txt',sum2(2,4)); ?>
  </body>
</html>
