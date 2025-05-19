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


// создание и наполнение таблицы product
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
  $pdo->exec("DELETE FROM order_product");
  $pdo->exec("DELETE FROM order2");

  // обнуление AUTO_INCREMENT id = 1 
  $sqlIncrementAuto = "ALTER TABLE order2 AUTO_INCREMENT = 1";
  $pdo->exec($sqlIncrementAuto);

  // Запрос
  echo "База данных order2:" . PHP_EOL;

  // Получение ID магазина по имени:
  $stmt = $pdo->prepare("SELECT id FROM shop WHERE name = ?");
  $stmt->execute(['Da']);
  $shopId1 = $stmt->fetchColumn();
  $stmt->execute(['Lenta']);
  $shopId2 = $stmt->fetchColumn();
  $stmt->execute(['Karusel']);
  $shopId3 = $stmt->fetchColumn();
  $stmt->execute(['Streat']);
  $shopId4 = $stmt->fetchColumn();
  $stmt->execute(['Bingo']);
  $shopId5 = $stmt->fetchColumn();

  // Получение ID клиента по имени:
  $stmt = $pdo->prepare("SELECT id FROM client WHERE name = ?");
  $stmt->execute(['Thomas']);
  $clientId1 = $stmt->fetchColumn();
  $stmt->execute(['Anton']);
  $clientId2 = $stmt->fetchColumn();
  $stmt->execute(['Otto']);
  $clientId3 = $stmt->fetchColumn();
  $stmt->execute(['Kimi']);
  $clientId4 = $stmt->fetchColumn();
  $stmt->execute(['Leonid']);
  $clientId5 = $stmt->fetchColumn();

  $sqlInsertOrder = "INSERT INTO order2 (created_at, seller_id, buyer_id) VALUES ('2025-05-10', ?, ?)";
  $stmt = $pdo->prepare($sqlInsertOrder);
  $stmt->execute([$shopId1, $clientId1]);
  $stmt->execute([$shopId2, $clientId2]);
  $stmt->execute([$shopId3, $clientId3]);
  $stmt->execute([$shopId4, $clientId4]);
  $stmt->execute([$shopId5, $clientId5]);
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

  // Выводим результат
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
    order_id INT,
    product_id INT,
    quantity INT,
    FOREIGN KEY (order_id) REFERENCES order2(id),
    FOREIGN KEY (product_id) REFERENCES product(id)
    )";
  $pdo->exec($sqlCreate);

  // удаляем лишнии записи
  $sql = "DELETE FROM order_product";
  $pdo->exec($sql);

  // обнуление AUTO_INCREMENT id = 1 
  $sqlIncrementAuto = "ALTER TABLE order_product AUTO_INCREMENT = 1";
  $pdo->exec($sqlIncrementAuto);


  // Запрос
  echo "База данных order_product:" . PHP_EOL;

  // Получение id продукта:
  $stmt = $pdo->prepare("SELECT id FROM product WHERE name = ?");
  $stmt->execute(['apple']);
  $productId1 = $stmt->fetchColumn();
  $stmt->execute(['pears']);
  $productId2 = $stmt->fetchColumn();
  $stmt->execute(['bananas']);
  $productId3 = $stmt->fetchColumn();
  $stmt->execute(['grapes']);
  $productId4 = $stmt->fetchColumn();
  $stmt->execute(['coconut']);
  $productId5 = $stmt->fetchColumn();

  // Получение ID order:
  $stmt = $pdo->prepare("SELECT id FROM order2 WHERE id = ?");
  $stmt->execute(['1']);
  $order2Id1 = $stmt->fetchColumn();
  $stmt->execute(['2']);
  $order2Id2 = $stmt->fetchColumn();
  $stmt->execute(['3']);
  $order2Id3 = $stmt->fetchColumn();
  $stmt->execute(['4']);
  $order2Id4 = $stmt->fetchColumn();
  $stmt->execute(['5']);
  $order2Id5 = $stmt->fetchColumn();


  // Вставка позиции в заказ:
  $sqlInsertOrderProduct = "INSERT INTO order_product (order_id, product_id, quantity) VALUES (?, ?, ?)";
  $stmt = $pdo->prepare($sqlInsertOrderProduct);
  $stmt->execute([$order2Id1, $productId1, 10]);
  $stmt->execute([$order2Id2, $productId2, 15]);
  $stmt->execute([$order2Id3, $productId3, 50]);
  $stmt->execute([$order2Id4, $productId4, 60]);
  $stmt->execute([$order2Id5, $productId5, 2]);
  $lastOrderId = $pdo->lastInsertId();


  // Вывод данных
  $stmt = $pdo->query("SELECT * FROM order_product");
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "id: " . $row['id'] . "; ";
    echo "order_id: " . $row['order_id'] . "; ";
    echo "product_id: " . $row['product_id'] . "; ";
    echo "quantity: " . $row['quantity'] . "; " . PHP_EOL;
  }

  // Получаем все заказы с деталями о ордере2 и продукте:
  $sql = "SELECT op.*, o.created_at AS order2_created_at, p.name AS product_name, p.price AS product_price
  FROM order_product op
  LEFT JOIN order2 o ON op.order_id = o.id
  LEFT JOIN product p ON op.product_id = p.id";

  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $ordersProduct = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Выводим результат
  foreach ($ordersProduct as $op) {
    echo "Заказ №" . $op['id'] . ": ";
    echo "Зада заказа: " . $op['order2_created_at'] . "; ";
    echo "Продукт: " . $op['product_name'] . ", " . $op['product_price'] . PHP_EOL;
  }
} catch (PDOException $e) {
  echo "Ошибка: " . $e->getMessage();
}
