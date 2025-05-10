<?php

try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Запрос
  $stmt = $pdo->query("SELECT * FROM shop");
  echo "База данных shop:" . PHP_EOL;

  // Вывод данных
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "name: " . $row['name'] . "; ";
      echo "address: " . $row['address'] . "; " . PHP_EOL;
  }
} catch (PDOException $e) {
  echo "Ошибка: " . $e->getMessage();
}

try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Запрос
  $stmt = $pdo->query("SELECT * FROM product");
  echo "База данных product:" . PHP_EOL;

  // Вывод данных
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "name: " . $row['name'] . "; ";
      echo "price: " . $row['price'] . "; ";
      echo "count: " . $row['count'] . "; " . PHP_EOL;
  }
} catch (PDOException $e) {
  echo "Ошибка: " . $e->getMessage();
}

try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Запрос
  $stmt = $pdo->query("SELECT * FROM `order`");
  echo "База данных order:" . PHP_EOL;

  // Вывод данных
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "created_at: " . $row['created_at'] . "; ";
      echo "seller: " . $row['seller'] . "; ";
      echo "buyer: " . $row['buyer'] . "; " . PHP_EOL;
  }
} catch (PDOException $e) {
  echo "Ошибка: " . $e->getMessage();
}

try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Запрос
  $stmt = $pdo->query("SELECT * FROM order_product");
  echo "База данных order_product :" . PHP_EOL;

  // Вывод данных
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "name: " . $row['name'] . "; ";
      echo "price: " . $row['price'] . "; ";
      echo "count: " . $row['count'] . "; ";
      echo "created_at: " . $row['created_at'] . "; ";
      echo "seller: " . $row['seller'] . "; ";
      echo "buyer: " . $row['buyer'] . "; " . PHP_EOL;
  }
} catch (PDOException $e) {
  echo "Ошибка: " . $e->getMessage();
}

try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Запрос
  $stmt = $pdo->query("SELECT * FROM client");
  echo "База данных client:" . PHP_EOL;

  // Вывод данных
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "name: " . $row['name'] . "; ";
      echo "phone: " . $row['phone'] . "; " . PHP_EOL;
  }
} catch (PDOException $e) {
  echo "Ошибка: " . $e->getMessage();
}

