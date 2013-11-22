<?php
  function br2nl($str) {
    $str = preg_replace("<<br />>", "", $str);
    return $str;
  }

 ?>