// create_db.php — выполните один раз, чтобы создать БД и таблицу
<?php
try {
    $db = new PDO('sqlite:users.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        email TEXT UNIQUE NOT NULL,
        phone TEXT UNIQUE,
        password_hash TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";
    
    $db->exec($query);

    echo "Таблица users успешно создана.";
} catch (PDOException $e) {
    echo "Ошибка создания базы данных: " . $e->getMessage();
}
?>