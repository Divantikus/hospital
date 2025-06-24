<?php

function createSetString($ignoredFields)
{
  foreach ($ignoredFields as $value) {
    unset($_POST[$value]);
  }

  $str = "SET";

  foreach ($_POST as $key => $value) {
    if ($value) {
      $str = $str . ", $key = '$value'";
    }
  }
  $str = substr_replace($str, '', 3, 1);
  return $str;
}
