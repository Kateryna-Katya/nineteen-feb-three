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
            <span class="section-tag" data-aos="fade-down">Risk Disclosure</span>
            <div class="legal-header" data-aos="fade-up">
                <div class="warning-icon-wrapper">
                    <i data-lucide="alert-triangle" class="warning-icon"></i>
                </div>
                <h1>Отказ от ответственности</h1>
            </div>

            <div class="legal-content">
                <div class="legal-block" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        <strong>Общая информация:</strong> Все материалы, статьи и сведения,
                        опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно
                        информационно-ознакомительный характер. Они не являются и не должны
                        рассматриваться как персональная инвестиционная рекомендация,
                        профессиональный юридический или финансовый совет.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="150">
                    <p>
                        <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                        относительно точности или актуальности представленной информации. Любые упоминания потенциального 
                        карьерного роста или пассивного дохода не гарантируют аналогичных результатов в будущем.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        <strong>Ограничение ответственности:</strong> Администрация <strong><?= $fullDomain ?></strong> 
                        не несет ответственности за любые прямые или косвенные убытки, возникшие в результате использования методологий платформы. 
                        Вся ответственность за ваши решения лежит исключительно на вас.
                    </p>
                </div>

                <div class="legal-block risk-warning" data-aos="zoom-in" data-aos-delay="250">
                    <div class="risk-inner">
                        <i data-lucide="info"></i>
                        <p>
                            <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                            изменение финансового статуса, сопряжена с рисками. Мы настоятельно рекомендуем провести
                            собственное исследование перед принятием важных решений.
                        </p>
                    </div>
                </div>

                <div class="legal-block agreement" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        <strong>Подтверждение пользователя:</strong> Продолжая использовать
                        сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                        действуете по собственной воле и полностью принимаете условия данного дисклеймера.
                    </p>
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