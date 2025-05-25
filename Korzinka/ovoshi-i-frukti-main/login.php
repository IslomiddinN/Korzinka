<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $db = new PDO('sqlite:users.db');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        $stmt = $db->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'email' => $user['email'],
                'phone' => $user['phone']
            ];
            header('Location: index.php');
            exit;
        } else {
            $error = 'Неверный email или пароль.';
        }
    } catch (PDOException $e) {
        $error = 'Ошибка входа: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Вход | Корзинка</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon_io/favicon-32x32.png" type="favicon_io/favicon-32x32.png" sizes="32x32">
  <link rel="icon" href="favicon_io/favicon-16x16.png" type="favicon_io/favicon-16x16.png" sizes="16x16">
  <link rel="apple-touch-icon" href="favicon_io/apple-touch-icon.png">
  <link rel="manifest" href="site.webmanifest">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background: #f9f9f9;
      margin: 0; padding: 0;
      color: #333;
    }
    .container {
      max-width: 380px;
      margin: 60px auto;
      background: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    h2.auth-title {
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
      margin-bottom: 6px;
      font-weight: 600;
    }
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px 12px;
      font-size: 15px;
      border: 1.8px solid #ccc;
      border-radius: 6px;
      transition: border-color 0.3s ease;
      box-sizing: border-box;
    }
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #0056ff;
      outline: none;
    }
    .input-error {
      border-color: #dc3545 !important;
      background-color: #fff5f5;
    }
    .error-message {
      background-color: #f8d7da;
      color: #842029;
      padding: 10px;
      border-radius: 6px;
      margin-bottom: 20px;
    }
    button[type="submit"] {
      width: 100%;
      background-color: #0056ff;
      border: none;
      color: white;
      padding: 14px 0;
      font-size: 16px;
      font-weight: 600;
      border-radius: 50px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      transition: background-color 0.3s ease;
    }
    .auth-links {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }
    .auth-links a {
      color: #0056ff;
      text-decoration: none;
      font-weight: 600;
    }
    .auth-links a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="auth-title"><i class="fas fa-sign-in-alt"></i> Вход в аккаунт</h2>

  <?php if (!empty($error)): ?>
    <div class="error-message"><?= htmlspecialchars($error) ?></div>
  <?php endif; ?>

  <form id="loginForm" method="POST" action="login.php" novalidate>
    <div class="form-group">
      <label for="email">Email*</label>
      <input type="email" id="email" name="email" placeholder="example@mail.ru" required />
    </div>

    <div class="form-group">
      <label for="password">Пароль*</label>
      <input type="password" id="password" name="password" placeholder="Введите пароль" required />
    </div>

    <button type="submit">
      <i class="fas fa-sign-in-alt"></i> Войти
    </button>
  </form>

  <div class="auth-links">
    Нет аккаунта? <a href="signup.php">Зарегистрироваться</a>
  </div>
</div>

</body>
</html>
