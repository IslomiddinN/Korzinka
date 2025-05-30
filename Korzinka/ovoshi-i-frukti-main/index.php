<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Свежие фермерские овощи и фрукты с доставкой в Уфе. Натуральные продукты без химикатов и ГМО.">
  <meta name="keywords" content="овощи, фрукты, доставка, Уфа, фермерские продукты">
  <meta name="theme-color" content="#4CAF50">
  
  <!-- Open Graph / Социальные сети -->
  <meta property="og:title" content="Корзинка">
  <meta property="og:description" content="Свежие фермерские овощи и фрукты с доставкой в Уфе">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://ovoshifrukti-ufa.ru">
  <meta property="og:image" content="favicon_io/favicon-32x32.png">
  
  <title> Корзинка | Натуральные продукты</title>
  
  <!-- Иконки -->
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon_io/favicon-32x32.png" type="favicon_io/favicon-32x32.png" sizes="32x32">
  <link rel="icon" href="favicon_io/favicon-16x16.png" type="favicon_io/favicon-16x16.png" sizes="16x16">
  <link rel="apple-touch-icon" href="favicon_io/apple-touch-icon.png">
  <link rel="manifest" href="site.webmanifest">
  
  <!-- Предзагрузка ресурсов -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <!-- Стили -->
  <link rel="stylesheet" href="css/stayle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="header-top">
      <div class="container">
        <div class="contact-info">
          <span><i class="fas fa-phone" aria-hidden="true"></i> +7 996 107-35-09</span>
          <address><i class="fas fa-map-marker-alt" aria-hidden="true"></i> г. Уфа, ул. Лучистая 110</address>
        </div>
        <div class="auth-links">
          <a href="login.php"><i class="fas fa-user" aria-hidden="true"></i> Вход</a>
        </div>
      </div>
    </div>
    
    <div class="header-main">
      <div class="container">
        <div class="logo">
          <h1><i class="fas fa-leaf" aria-hidden="true"></i> Корзинка </h1>
          <p>Натуральные продукты с доставкой</p>
        </div>
        <nav>
          <a href="index.php"><i class="fas fa-home" aria-hidden="true"></i> Главная</a>
          <a href="catalog.php"><i class="fas fa-apple-alt" aria-hidden="true"></i> Каталог</a>
          <a href="season.php"><i class="fas fa-calendar-alt" aria-hidden="true"></i> Сезонные</a>
          <a href="recipes.php"><i class="fas fa-utensils" aria-hidden="true"></i> Рецепты</a>
          <a href="about.php"><i class="fas fa-info-circle" aria-hidden="true"></i> О нас</a>
          <a href="cart.php" class="cart-link"><i class="fas fa-shopping-basket" aria-hidden="true"></i> Корзина <span class="cart-count">0</span></a>
        </nav>
      </div>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="container">
        <div class="hero-content">
          <h2>Свежие фермерские продукты</h2>
          <p>Натуральные овощи и фрукты прямо с грядки</p>
          <a href="catalog.php" class="btn">В каталог <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </section>

    <section class="featured-products">
      <div class="container">
        <h2 class="section-title">Специальные предложения</h2>
        <div id="product-list" class="product-grid">
          <!-- Товары будут загружаться здесь -->
        </div>
      </div>
    </section>

    <section class="benefits">
      <div class="container">
        <div class="benefit-card">
          <i class="fas fa-truck" aria-hidden="true"></i>
          <h3>Быстрая доставка</h3>
          <p>Доставляем заказы в день оформления</p>
        </div>
        <div class="benefit-card">
          <i class="fas fa-seedling" aria-hidden="true"></i>
          <h3>Экологично</h3>
          <p>Без химикатов и ГМО</p>
        </div>
        <div class="benefit-card">
          <i class="fas fa-money-bill-wave" aria-hidden="true"></i>
          <h3>Доступные цены</h3>
          <p>Прямые поставки от фермеров</p>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="footer-column">
        <h3><i class="fas fa-leaf" aria-hidden="true"></i> Корзинка </h3>
        <p>Натуральные продукты с доставкой по Уфе</p>
        <div class="social-links">
          <a href="#" aria-label="ВКонтакте"><i class="fab fa-vk"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="Telegram"><i class="fab fa-telegram"></i></a>
        </div>
      </div>
      <div class="footer-column">
        <h3>Меню</h3>
        <ul>
          <li><a href="index.php">Главная</a></li>
          <li><a href="catalog.php">Каталог</a></li>
          <li><a href="season.php">Сезонные продукты</a></li>
          <li><a href="recipes.php">Рецепты</a></li>
          <li><a href="about.php">О нас</a></li>
          <li><a href="privacy.php">Политика конфиденциальности</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Контакты</h3>
        <ul>
          <li><i class="fas fa-phone" aria-hidden="true"></i> +7 996 107-35-09</li>
          <li><i class="fas fa-envelope" aria-hidden="true"></i> qq6584881@gmail.com</li>
          <li><i class="fas fa-map-marker-alt" aria-hidden="true"></i> г. Уфа, ул. Лучистая 110</li>
          <li><i class="fas fa-clock" aria-hidden="true"></i> Пн-Пт: 9:00-21:00</li>
        </ul>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2015-<script>document.write(new Date().getFullYear())</script> Корзинка. Все права защищены.</p>
    </div>
  </footer>

<div id="registrationSuccess" class="registration-success">
  <i class="fas fa-check-circle"></i> Вы успешно зарегистрированы!
</div>

  <script src="js/script.js"></script>
</body>
</html>
