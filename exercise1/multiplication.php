<?php

  $size = 100;
  echo "<table>";
  for($r = 0; $r<=$size; $r++)
  {
    echo "<tr>";
    for($c = 0; $c<=$size; $c++)
    {
      echo "<td>";
      if($r==0 and $c!=0)
      {
        echo $c;
      }
      else if($c==0 and $r!=0)
      {
        echo $r;
      }
      else if($r!=0 or $c!=0){
        echo $r*$c;
      }
      echo "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";

?>
