<?php
session_start();

if (isset($_SESSION['message'])) {
  echo  $_SESSION['message'];
  unset($_SESSION['message']); // Clear the message after displaying
} else {
  echo "<p>No message available.</p>";
}
