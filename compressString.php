<?php


  $string = "wwwwaaadexxxxxxywww";

  for ($i = 0; $i < strlen($string); $i++)
  {
      $count = 1;

      while ($i < strlen($string) - 1 && $string[$i] == $string[$i+1])
      {
          $count++;
          $i++;
      }

    echo ($string[$i]);
      echo ($count);
  }

     
