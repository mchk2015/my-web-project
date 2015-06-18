<?php
  echo isset($_POST['url']) ?
    file_get_contents($_POST['url']) :
    file_get_contents($_GET['url']);
?>