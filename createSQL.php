<?php

// создание и наполнение таблицы shop
try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // создание таблицы 
  $sqlCreate = "CREATE TABLE IF NOT EXISTS shop (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100), 
    address TEXT,  
    UNIQUE (name))";
  $pdo->exec($sqlCreate);

  // обнуление AUTO_INCREMENT id = 1 
  $sqlIncrementAuto = "ALTER TABLE shop AUTO_INCREMENT = 1";
  $pdo->exec($sqlIncrementAuto);

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
    echo "id: " . $row['id'] . "; ";
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
  $sqlCreate = "CREATE TABLE IF NOT EXISTS client (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100), 
    phone TEXT,  
    UNIQUE (name))";
  $pdo->exec($sqlCreate);

  // обнуление AUTO_INCREMENT id = 1 
  $sqlIncrementAuto = "ALTER TABLE client AUTO_INCREMENT = 1";
  $pdo->exec($sqlIncrementAuto);

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
    echo "id: " . $row['id'] . "; ";
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
  $sqlCreate = "CREATE TABLE IF NOT EXISTS product (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100), 
    price INT, 
    count INT,  
    UNIQUE (name))";
  $pdo->exec($sqlCreate);

  // обнуление AUTO_INCREMENT id = 1 
  $sqlIncrementAuto = "ALTER TABLE product AUTO_INCREMENT = 1";
  $pdo->exec($sqlIncrementAuto);

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
    echo "id: " . $row['id'] . "; ";
    echo "name: " . $row['name'] . "; ";
    echo "price: " . $row['price'] . "; ";
    echo "count: " . $row['count'] . "; " . PHP_EOL;
  }
} catch (PDOException $e) {
  echo "Ошибка: " . $e->getMessage();
}

// создание и наполнение таблицы order2
try {
  // Подключение
  $pdo = new PDO("mysql:host=localhost;dbname=testBase", 'root', '12345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  // создание таблицы 
  $sqlCreate = "CREATE TABLE IF NOT EXISTS order2 (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    created_at DATE, 
    seller_id INT,
    buyer_id INT,
    FOREIGN KEY (seller_id) REFERENCES shop(id), 
    FOREIGN KEY (buyer_id) REFERENCES client(id))";
  $pdo->exec($sqlCreate);

  // удаляем лишнии записи
  $sql = "DELETE FROM order2";
  $pdo->exec($sql);

  // обнуление AUTO_INCREMENT id = 1 
  $sqlIncrementAuto = "ALTER TABLE order2 AUTO_INCREMENT = 1";
  $pdo->exec($sqlIncrementAuto);


  // Запрос
  echo "База данных order2:" . PHP_EOL;

  // Получение ID магазина по имени:
  $stmt = $pdo->prepare("SELECT id FROM shop WHERE name = ?");
  $stmt->execute(['Da']);
  $shopId = $stmt->fetchColumn(); // например, 3

  // Получение ID клиента по имени:
  $stmt = $pdo->prepare("SELECT id FROM client WHERE name = ?");
  $stmt->execute(['Thomas']);
  $clientId = $stmt->fetchColumn(); // например, 2

  $sqlInsertOrder = "INSERT INTO order2 (created_at, seller_id, buyer_id) VALUES ('2025-05-10', ?, ?)";
  $stmt = $pdo->prepare($sqlInsertOrder);
  $stmt->execute([$shopId, $clientId]);
  $lastOrderId = $pdo->lastInsertId();


  // Вывод данных
  $stmt = $pdo->query("SELECT * FROM order2");
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "id: " . $row['id'] . "; ";
    echo "created_at: " . $row['created_at'] . "; ";
    echo "seller_id: " . $row['seller_id'] . "; ";
    echo "buyer_id: " . $row['buyer_id'] . "; " . PHP_EOL;
  }

  // Получаем все заказы с деталями о магазине и клиенте
  $sql = "SELECT o.*, s.name AS shop_name, s.address AS shop_address, c.name AS client_name, c.phone AS client_phone
  FROM order2 o
  LEFT JOIN shop s ON o.seller_id = s.id
  LEFT JOIN client c ON o.buyer_id = c.id";

  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Выводим или обрабатываем результат
  foreach ($orders as $order) {
  echo "Заказ №" . $order['id'] . ": ";
  echo "Магазин: " . $order['shop_name'] . ", " . $order['shop_address'] . "; ";
  echo "Клиент: " . $order['client_name'] . ", " . $order['client_phone'] . PHP_EOL;
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
    id INT AUTO_INCREMENT PRIMARY KEY, 
    -- name VARCHAR(100), 
    -- price INT, 
    -- count INT,
    -- created_at DATE, 
    -- seller VARCHAR(100), 
    -- buyer VARCHAR(100),
    order_id INT,
    product_id INT,
    -- UNIQUE (name),
    quantity INT,
    FOREIGN KEY (order_id) REFERENCES order2(id),
    FOREIGN KEY (product_id) REFERENCES product(id)
    -- FOREIGN KEY (price) REFERENCES product(price),
    -- FOREIGN KEY (count) REFERENCES product(count),
    -- FOREIGN KEY (created_at) REFERENCES order2(created_at),
    -- FOREIGN KEY (buyer) REFERENCES order2(buyer)
    )";
  $pdo->exec($sqlCreate);

  // удаляем лишнии записи
  $sql = "DELETE FROM order_product";
  $pdo->exec($sql);

  // обнуление AUTO_INCREMENT id = 1 
  $sqlIncrementAuto = "ALTER TABLE order_product AUTO_INCREMENT = 1";
  $pdo->exec($sqlIncrementAuto);

  // // добавление элементов в таблицу
  // $sqlInsert = "INSERT INTO  order_product (name, price, count, created_at, seller, buyer) 
  //   VALUES ('apple', 50, 10, '2025-05-10', 'Da', 'Thomas') 
  //   ON DUPLICATE KEY UPDATE name = 'apple'";  // наполнение
  // $pdo->exec($sqlInsert); // запись
  // $sqlInsert = "INSERT INTO  order_product (name, price, count, created_at, seller, buyer) 
  //   VALUES ('pears', 60, 5, '2025-05-09', 'Lenta', 'Anton') 
  //   ON DUPLICATE KEY UPDATE name = 'pears'";
  // $pdo->exec($sqlInsert);
  // $sqlInsert = "INSERT INTO  order_product (name, price, count, created_at, seller, buyer) 
  //   VALUES ('bananas', 120, 50, '2025-05-09', 'Karusel', 'Otto') 
  //   ON DUPLICATE KEY UPDATE name = 'bananas'";
  // $pdo->exec($sqlInsert);
  // $sqlInsert = "INSERT INTO  order_product (name, price, count, created_at, seller, buyer) 
  //   VALUES ('grapes', 200, 15, '2025-05-10', 'Karusel', 'Kimi') 
  //   ON DUPLICATE KEY UPDATE name = 'grapes'";
  // $pdo->exec($sqlInsert);
  // $sqlInsert = "INSERT INTO  order_product (name, price, count, created_at, seller, buyer) 
  //   VALUES ('coconut', 400, 1, '2025-05-10', 'Bingo', 'Leonid') 
  //   ON DUPLICATE KEY UPDATE name = 'coconut'";
  // $pdo->exec($sqlInsert);


  // Запрос
  echo "База данных order_product:" . PHP_EOL;

  // Получение id продукта по имени (например, 'apple'):
  $stmt = $pdo->prepare("SELECT id FROM product WHERE name = ?");
  $stmt->execute(['apple']);
  $productId = $stmt->fetchColumn(); // например, 1

  // Вставка позиции в заказ:
  $sqlInsertOrderProduct = "INSERT INTO order_product (order_id, product_id, quantity) VALUES (?, ?, ?)";
  $stmt = $pdo->prepare($sqlInsertOrderProduct);
  $stmt->execute([$lastOrderId, $productId, 10]);


  // Вывод данных
  $stmt = $pdo->query("SELECT * FROM order_product");
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "id: " . $row['id'] . "; ";
    // echo "name: " . $row['name'] . "; ";
    // echo "price: " . $row['price'] . "; ";
    // echo "count: " . $row['count'] . "; ";
    // echo "created_at: " . $row['created_at'] . "; ";
    // echo "seller: " . $row['seller'] . "; ";
    // echo "buyer: " . $row['buyer'] . "; ";
    echo "order_id: " . $row['order_id'] . "; ";
    echo "product_id: " . $row['product_id'] . "; ";
    echo "quantity: " . $row['quantity'] . "; " . PHP_EOL;
  }
} catch (PDOException $e) {
  echo "Ошибка: " . $e->getMessage();
}
