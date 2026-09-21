<?php
  function drawTable($cols, $rows, $color) {
    echo "<table border='1' width=\"200\">";
    for ($r = 1; $r <= $rows; $r++) {
      echo "<tr>";
      for ($c = 1; $c <= $cols; $c++) {
        $value = $r * $c;
        if ($r === 1 || $c === 1) {
          echo "<td style='font-weight: bold; text-align: center; background-color: ", $color, ";'>", $value, "</td>";
        } else {
          echo "<td>", $value, "</td>";
        }
      }
      echo "</tr>";
    }
    echo "</table>";
  }

  function drawMenu($menu, $vertical = true) {
    if ($vertical) {
      echo "<ul>";
      foreach ($menu as $item) {
        echo "<li><a href='", $item['href'], "'>", $item['link'], "</a></li>";
      }
      echo "</ul>";
    } else {
      echo "<ul style='display: flex; list-style: none; padding: 0; gap: 15px;'>";
      foreach ($menu as $item) {
        echo "<li><a href='", $item['href'], "'>", $item['link'], "</a></li>";
      }
      echo "</ul>";
    }
  }
?>
