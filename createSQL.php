<?php

// создание и наполнение таблицы shop
try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // создание таблицы 
  $sqlCreate = "CREATE TABLE IF NOT EXISTS shop (name VARCHAR(100), address TEXT,  UNIQUE (name))";
  $pdo->exec($sqlCreate);
  
  // добавление элементов в таблицу
  $sqlInsert = "INSERT INTO  shop (name, address) VALUES ('Lenta', 'Moscow') 
    ON DUPLICATE KEY UPDATE name = 'Lenta'";  // наполнение
  $pdo->exec($sqlInsert); // запись
  $sqlInsert = "INSERT INTO  shop (name, address) VALUES ('Karusel', 'Moscow, streat One, hous 1') 
    ON DUPLICATE KEY UPDATE name = 'Karusel'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  shop (name, address) VALUES ('Da', 'Moscow, streat Two, hous 2') 
    ON DUPLICATE KEY UPDATE name = 'Da'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  shop (name, address) VALUES ('Streat', 'Moscow, streat Three, hous 3') 
    ON DUPLICATE KEY UPDATE name = 'Streat'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  shop (name, address) VALUES ('Bingo', 'Moscow, streat Five, hous 5') 
    ON DUPLICATE KEY UPDATE name = 'Bingo'";    
  $pdo->exec($sqlInsert);


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


// создание и наполнение таблицы client
try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // создание таблицы 
  $sqlCreate = "CREATE TABLE IF NOT EXISTS client (name VARCHAR(100), phone TEXT,  UNIQUE (name))";
  $pdo->exec($sqlCreate);
  
  // добавление элементов в таблицу
  $sqlInsert = "INSERT INTO  client (name, phone) VALUES ('Thomas', '+79991118855') 
    ON DUPLICATE KEY UPDATE name = 'Thomas'";  // наполнение
  $pdo->exec($sqlInsert); // запись
  $sqlInsert = "INSERT INTO  client (name, phone) VALUES ('Anton', '+79992228855') 
    ON DUPLICATE KEY UPDATE name = 'Anton'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  client (name, phone) VALUES ('Otto', '+79992228811') 
    ON DUPLICATE KEY UPDATE name = 'Otto'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  client (name, phone) VALUES ('Kimi', '+79992227711') 
    ON DUPLICATE KEY UPDATE name = 'Kimi'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  client (name, phone) VALUES ('Leonid', '+79993337733') 
    ON DUPLICATE KEY UPDATE name = 'Leonid'";    
  $pdo->exec($sqlInsert);


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


// создание и наполнение таблицы product:
try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  // создание таблицы 
  $sqlCreate = "CREATE TABLE IF NOT EXISTS product (name VARCHAR(100), price INT, count INT,  UNIQUE (name))";
  $pdo->exec($sqlCreate);
  
  // добавление элементов в таблицу
  $sqlInsert = "INSERT INTO  product (name, price, count) VALUES ('apple', 50, 100) 
    ON DUPLICATE KEY UPDATE name = 'apple'";  // наполнение
  $pdo->exec($sqlInsert); // запись
  $sqlInsert = "INSERT INTO  product (name, price, count) VALUES ('pears', 60, 80) 
    ON DUPLICATE KEY UPDATE name = 'pears'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  product (name, price, count) VALUES ('bananas', 120, 200) 
    ON DUPLICATE KEY UPDATE name = 'bananas'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  product (name, price, count) VALUES ('grapes', 200, 50) 
    ON DUPLICATE KEY UPDATE name = 'grapes'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  product (name, price, count) VALUES ('coconut', 400, 10) 
    ON DUPLICATE KEY UPDATE name = 'coconut'";    
  $pdo->exec($sqlInsert);


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

// создание и наполнение таблицы order:
try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  // создание таблицы 
  $sqlCreate = "CREATE TABLE IF NOT EXISTS order2 (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    created_at DATE, 
    seller VARCHAR(100), 
    buyer VARCHAR(100),
    FOREIGN KEY (seller) REFERENCES shop(name), 
    FOREIGN KEY (buyer) REFERENCES client(name))";
  $pdo->exec($sqlCreate);

  // удаляем лишнии записи
  $sql = "DELETE FROM order2";
  $pdo->exec($sql);
  
  // обнуление AUTO_INCREMENT id = 1 
  $sqlIncrementAuto = "ALTER TABLE order2 AUTO_INCREMENT = 1";    
  $pdo->exec($sqlIncrementAuto);
  

  // добавление элементов в таблицу
  $sqlInsert = "INSERT INTO  order2 (created_at, seller, buyer) VALUES ('2025-05-10', 'Da', 'Thomas')";  // наполнение
  $pdo->exec($sqlInsert); // запись
  $sqlInsert = "INSERT INTO  order2 (created_at, seller, buyer) VALUES ('2025-05-09', 'Lenta', 'Anton')";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  order2 (created_at, seller, buyer) VALUES ('2025-05-09', 'Karusel', 'Otto')";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  order2 (created_at, seller, buyer) VALUES ('2025-05-10', 'Karusel', 'Kimi')";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  order2 (created_at, seller, buyer) VALUES ('2025-05-10', 'Bingo', 'Leonid')";    
  $pdo->exec($sqlInsert);


  // Запрос
  $stmt = $pdo->query("SELECT * FROM order2");
  echo "База данных order2:" . PHP_EOL;

  // Вывод данных
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "id: " . $row['id'] . "; ";
      echo "created_at: " . $row['created_at'] . "; ";
      echo "seller: " . $row['seller'] . "; ";
      echo "buyer: " . $row['buyer'] . "; " . PHP_EOL;
  }
} catch (PDOException $e) {
  echo "Ошибка: " . $e->getMessage();
}


// создание и наполнение таблицы order_product:
try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  // создание таблицы 
  $sqlCreate = "CREATE TABLE IF NOT EXISTS order_product (
    name VARCHAR(100), 
    price INT, 
    count INT,
    created_at DATE, 
    seller VARCHAR(100), 
    buyer VARCHAR(100),
    UNIQUE (name))";
  $pdo->exec($sqlCreate);

  // удаляем лишнии записи
  $sql = "DELETE FROM order_product";
  $pdo->exec($sql);
  
  // добавление элементов в таблицу
  $sqlInsert = "INSERT INTO  order_product (name, price, count, created_at, seller, buyer) 
    VALUES ('apple', 50, 10, '2025-05-10', 'Da', 'Thomas') 
    ON DUPLICATE KEY UPDATE name = 'apple'";  // наполнение
  $pdo->exec($sqlInsert); // запись
  $sqlInsert = "INSERT INTO  order_product (name, price, count, created_at, seller, buyer) 
    VALUES ('pears', 60, 5, '2025-05-09', 'Lenta', 'Anton') 
    ON DUPLICATE KEY UPDATE name = 'pears'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  order_product (name, price, count, created_at, seller, buyer) 
    VALUES ('bananas', 120, 50, '2025-05-09', 'Karusel', 'Otto') 
    ON DUPLICATE KEY UPDATE name = 'bananas'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  order_product (name, price, count, created_at, seller, buyer) 
    VALUES ('grapes', 200, 15, '2025-05-10', 'Karusel', 'Kimi') 
    ON DUPLICATE KEY UPDATE name = 'grapes'";    
  $pdo->exec($sqlInsert);
  $sqlInsert = "INSERT INTO  order_product (name, price, count, created_at, seller, buyer) 
    VALUES ('coconut', 400, 1, '2025-05-10', 'Bingo', 'Leonid') 
    ON DUPLICATE KEY UPDATE name = 'coconut'";    
  $pdo->exec($sqlInsert);


  // Запрос
  $stmt = $pdo->query("SELECT * FROM order_product");
  echo "База данных order_product:" . PHP_EOL;

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