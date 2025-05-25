<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Каталог продуктов | Корзинка</title>
 <link rel="icon" href="favicon_io/favicon-32x32.png" type="favicon_io/favicon-32x32.png">
  <link rel="icon" href="favicon_io/favicon-32x32.png" type="favicon_io/favicon-32x32.png" sizes="32x32">
  <link rel="icon" href="favicon_io/favicon-16x16.png" type="favicon_io/favicon-16x16.png" sizes="16x16">
  <link rel="apple-touch-icon" href="favicon_io/apple-touch-icon.png">
  <link rel="manifest" href="site.webmanifest">
  
  <!-- Предзагрузка ресурсов -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <link rel="stylesheet" href="css/catalog.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="header-top">
      <div class="container">
        <div class="contact-info">
          <span><i class="fas fa-phone"></i> +7 996 107-35-09</span>
          <span><i class="fas fa-map-marker-alt"></i> г. Уфа, ул. Лучистая 110</span>
        </div>
        <div class="auth-links">
        </div>
      </div>
    </div>
    <div class="header-main">
      <div class="container">
        <div class="logo">
          <h1><i class="fas fa-leaf"></i> Корзинка</h1>
          <p>Натуральные продукты с доставкой</p>
        </div>
        <nav>
          <a href="index.php"><i class="fas fa-home"></i> Главная</a>
          <a href="catalog.php" class="active"><i class="fas fa-apple-alt"></i> Каталог</a>
          <a href="season.php"><i class="fas fa-calendar-alt"></i> Сезонные</a>
          <a href="recipes.php"><i class="fas fa-utensils"></i> Рецепты</a>
          <a href="about.php"><i class="fas fa-info-circle"></i> О нас</a>
          <a href="cart.php" class="cart-link"><i class="fas fa-shopping-basket"></i> Корзина <span class="cart-count">0</span></a>
        </nav>
      </div>
    </div>
  </header>

  <main class="catalog-page">
    <section class="catalog-header">
      <div class="container">
        <h1>Каталог продуктов</h1>
        <div class="catalog-controls">
          <div class="search-box">
            <input type="text" id="search-input" placeholder="Поиск товаров...">
            <button id="search-btn"><i class="fas fa-search"></i></button>
          </div>
          <div class="filters">
            <button class="filter-btn active" data-category="all">Все товары</button>
            <button class="filter-btn" data-category="фрукты">Фрукты</button>
            <button class="filter-btn" data-category="овощи">Овощи</button>
            <button class="filter-btn" data-category="ягоды">Ягоды</button>
          </div>
        </div>
      </div>
    </section>

    <section class="catalog-products">
      <div class="container">
        <div id="product-list" class="product-grid">
          <!-- Товары будут загружаться здесь через JS -->
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="footer-column">
        <h3><i class="fas fa-leaf"></i> Корзинка</h3>
        <p>Натуральные продукты с доставкой по Уфе</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-vk"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-telegram"></i></a>
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
        </ul>
      </div>
      <div class="footer-column">
        <h3>Контакты</h3>
        <ul>
          <li><i class="fas fa-phone"></i> +7 996 107-35-09</li>
          <li><i class="fas fa-envelope"></i> qq6584881@gmail.com</li>
          <li><i class="fas fa-map-marker-alt"></i> г. Уфа, ул. Лучистая 110</li>
          <li><i class="fas fa-clock"></i> Пн-Пт: 9:00-21:00</li>
        </ul>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2015 Корзинка. Все права защищены.</p>
    </div>
  </footer>

  <script src="js/catalog.js"></script>
</body>
</html>
