<?php
  $host = "localhost";      // نام هاست
  $dbname = "shop";         // نام پایگاه داده
  $username = "root";       // نام کاربری MySQL (برای XAMPP معمولاً 'root' است)
  $password = "";           // رمز عبور MySQL (برای XAMPP معمولاً خالی است)

  try {
      // اتصال به پایگاه داده
      $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }
?>
