<?php
  # Recipe 4-23 / Example 1

  $scores = array(88, 75, 91, 84);

  list($maths, $english, $history, $biology) = $scores;

  printf("<p>Maths: %d; English: %d; History: %d; Biology: %d.</p>\n",
          $maths, $english, $history, $biology);
?>