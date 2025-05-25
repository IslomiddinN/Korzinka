<?php
// Обработка формы
$error = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $db = new PDO('sqlite:users.db');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Валидация
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $password = $_POST['password'];
        $passwordConfirm = $_POST['password-confirm'];
        $address = trim($_POST['address'] ?? '');

        if ($password !== $passwordConfirm) {
            $error = "Пароли не совпадают.";
        } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $db->prepare("INSERT INTO users (email, phone, password_hash) VALUES (?, ?, ?)");
            $stmt->execute([$email, $phone, $password_hash]);

            header("Location: login.php");
            exit;
        }
    } catch (PDOException $e) {
        $error = "Ошибка: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <title>Регистрация | Корзинка</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 400px;
      margin: 40px auto;
      background: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: 700;
      color: #2c3e50;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
    }
    input[type="text"], input[type="email"], input[type="tel"], input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1.5px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      box-sizing: border-box;
    }
    .error-message {
      background: #f8d7da;
      color: #842029;
      padding: 10px;
      border-radius: 6px;
      margin-bottom: 15px;
    }
    .privacy-check {
      font-size: 14px;
      margin-bottom: 15px;
    }
    button {
      width: 100%;
      background-color: #0056ff;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 50px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    button:hover {
      background-color: #0041d0;
    }
    .auth-links {
      text-align: center;
      margin-top: 15px;
    }
    .auth-links a {
      color: #0056ff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2><i class="fas fa-user-plus"></i> Регистрация</h2>

    <?php if ($error): ?>
      <div class="error-message"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST">
      <div class="form-group">
        <label for="name">ФИО*</label>
        <input type="text" name="name" id="name" required />
      </div>

      <div class="form-group">
        <label for="phone">Телефон*</label>
        <input type="tel" name="phone" id="phone" required />
      </div>

      <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" name="email" id="email" required />
      </div>

      <div class="form-group">
        <label for="password">Пароль*</label>
        <input type="password" name="password" id="password" required minlength="6" />
      </div>

      <div class="form-group">
        <label for="password-confirm">Подтвердите пароль*</label>
        <input type="password" name="password-confirm" id="password-confirm" required />
      </div>

      <div class="form-group">
        <label for="address">Адрес доставки</label>
        <input type="text" name="address" id="address" />
      </div>

      <div class="privacy-check">
        <input type="checkbox" name="privacy" id="privacy" required />
        <label for="privacy">Я согласен с <a href="privacy.html" target="_blank">политикой конфиденциальности</a>*</label>
      </div>

      <button type="submit"><i class="fas fa-user-plus"></i> Зарегистрироваться</button>
    </form>

    <div class="auth-links">
      Уже есть аккаунт? <a href="login.php">Войти</a>
    </div>
  </div>
</body>
</html>
