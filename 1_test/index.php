<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ループ処理を変更してみる</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<table>
  <?php
  for ($a = 1; $a <= 9; $a++) {
    echo '<tr>';
    for ($b = 1; $b <= 9; $b++) {
      echo '<td>' . $a * $b . '</td>';
    }
    echo '</tr>';
  }
  ?>
</table>
</body>
</html>