<?php
  function createDropDownListOptions ($arr, $optionValue, $fieldNames, $separator = " ") {

    for($i = 0; $i < count($arr); $i++){
      $id = $arr[$i][$optionValue];
      $optionText = $arr[$i][$fieldNames[0]];

      for ($j = 1; $j < count($fieldNames); $j++){
        $optionText = $optionText . $separator . $arr[$i][$fieldNames[$j]];
      }

      echo "<option value=\"$id\">$optionText</option>";
    }
  }
?>