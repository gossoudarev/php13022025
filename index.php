<?php
  header('Content-type: text/html; charset=utf-8' );
  echo date('r');
  $username = $_GET['username'];
  echo '<hr>';
  echo '<p>Привет, ' . $username . '!</p>';
