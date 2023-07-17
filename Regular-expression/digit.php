<?php
$str = "Remove non digits 123";
$newstr = preg_replace('/\D /', "", $str, -1, $count);
if ($count > 0) {
  echo "newstr after $count replacement(s):\n$newstr\n";
} else {
  echo "No replacement\n";
}
?>  