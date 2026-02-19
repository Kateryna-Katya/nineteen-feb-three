<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> | Технологии нового поколения</title>
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='14' fill='none' stroke='%2300f2ea' stroke-width='2'/%3E%3Ccircle cx='16' cy='16' r='6' fill='%2300f2ea'/%3E%3Cpath d='M16 2 L16 6 M16 26 L16 30 M2 16 L6 16 M26 16 L30 16' stroke='%2300f2ea' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />    
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="header__logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>
            
            <nav class="header__nav">
                <ul class="header__menu">
                    <li><a href="./#hero" class="header__link">Главная</a></li>
                    <li><a href="./#courses" class="header__link">Курсы</a></li>
                    <li><a href="./#about" class="header__link">О школе</a></li>
                    <li><a href="./#process" class="header__link">Обучение</a></li>
                    <li><a href="./#faq" class="header__link">FAQ</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--outline header__btn">Связаться</a>
            
            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag" data-aos="fade-down">Terms & Conditions</span>
            <h1 data-aos="fade-up">Условия использования</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent" data-aos="fade-up">
                    <p>
                        Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                        представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и платформой <strong><?= $domainTitle ?></strong>.
                        Используя наш ресурс, вы подтверждаете свое полное согласие с данными правилами.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>1. Предмет Соглашения</h2>
                    <p>
                        Компания предоставляет Пользователю доступ к функционалу сайта <strong><?= $fullDomain ?></strong>, включая: доступ к инновационным материалам, статьям в блоге, экспертным консультациям и другим цифровым инструментам обучения. 
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>2. Обязанности Пользователя</h2>
                    <p>При использовании платформы <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="legal-list">
                        <li>Публиковать или передавать любую незаконную или клеветническую информацию.</li>
                        <li>Нарушать работу цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.</li>
                        <li>Использовать автоматизированные скрипты для сбора данных без разрешения.</li>
                        <li>Предоставлять недостоверные данные при регистрации на программы обучения.</li>
                    </ul>
                </div>

                <div class="legal-block intellectual-property" data-aos="zoom-in">
                    <div class="property-card">
                        <div class="property-icon">
                            <i data-lucide="copyright"></i>
                        </div>
                        <div class="property-text">
                            <h2>3. Интеллектуальная собственность</h2>
                            <p>
                                Весь контент на <strong><?= $fullDomain ?></strong> (тексты, код, графика, логотипы) является собственностью Компании. 
                                Вам предоставляется ограниченная лицензия для личного использования. Копирование материалов для коммерческих целей запрещено.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>4. Ограничение ответственности</h2>
                    <div class="as-is-warning">
                        <i data-lucide="shield-alert"></i>
                        <p>
                            Услуги предоставляются по принципу <strong>«как есть» (as is)</strong>. Компания не несет ответственности за любые убытки, 
                            возникшие в результате использования или невозможности использования платформы <strong><?= $domainTitle ?></strong>.
                        </p>
                    </div>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>5. Изменения и разрешение споров</h2>
                    <p>
                        Мы оставляем за собой право изменять Условия в любое время. Все споры будут разрешаться путем переговоров в рамках юрисдикции Великобритании и ЕС.
                    </p>
                </div>

                <div class="contact-footer-policy" data-aos="zoom-in">
                    <h2>Контактная информация</h2>
                    <p>Если у вас возникли вопросы, связанные с настоящими Условиями:</p>
                    <div class="policy-mail-box">
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="footer__logo"><?= $domainTitle ?></a>
                <p class="footer__tagline">Инновационная технология обучения для вашего карьерного взлета. Постройте карьеру, которая работает на вас.</p>
            </div>
            
            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#courses">Курсы</a></li>
                    <li><a href="./#about">О школе</a></li>
                    <li><a href="./#process">Обучение</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-list">
                    <li>
                        <i data-lucide="phone" class="icon-sm"></i>
                        <a href="tel:+442074272890">+44 20 7427 2890</a>
                    </li>
                    <li>
                        <i data-lucide="mail" class="icon-sm"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin" class="icon-sm"></i>
                        <span>22 Chancery Ln, Holborn, London WC2A 1LS, United Kingdom</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="footer__bottom">
            <div class="container">
                <p>&copy; <?= date('Y') ?> <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах Великобритании и ЕС.</p>
            </div>
        </div>
    </footer>
    <div id="cookiePopup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="acceptCookies" class="btn btn--primary">Принять</button>
        </div>
    </div>
    
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu__content">
            <ul class="mobile-menu__list">
                <li><a href="./#hero">Главная</a></li>
                <li><a href="./#courses">Курсы</a></li>
                <li><a href="./#about">О школе</a></li>
                <li><a href="./#process">Обучение</a></li>
                <li><a href="./#faq">FAQ</a></li>
                <li><a href="./#contact" class="btn btn--primary">Связаться</a></li>
            </ul>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>