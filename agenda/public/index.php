<?php
require_once(BASE_PATH . '/home/controller/controllerhome.php');
$currentDir = dirname($_SERVER['PHP_SELF']);
$controllerhome = new Controllerhome();
if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['save-user'])) {
  return;
} else {
  $controllerhome->index();
}
