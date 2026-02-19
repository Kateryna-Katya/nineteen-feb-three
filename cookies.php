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
            <span class="section-tag" data-aos="fade-down">Legal Documents</span>
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text" data-aos="fade-up">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie.
                </p>

                <div class="legal-block" data-aos="fade-up">
                    <h2>Что такое файлы cookie?</h2>
                    <p>
                        Файл cookie — это небольшой фрагмент данных, который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. Это позволяет платформе 
                        <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                        (язык, настройки региона Великобритания и другие параметры) 
                        в течение определенного времени.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>Какие типы файлов cookie мы используем?</h2>
                    <p>
                        Мы классифицируем файлы cookie на <strong><?= $fullDomain ?></strong> по следующим категориям:
                    </p>
                    <div class="cookie-types-grid">
                        <div class="cookie-type-item">
                            <i data-lucide="shield-check"></i>
                            <strong>Строго необходимые:</strong>
                            <span>Критически важны для функционирования и безопасности платформы.</span>
                        </div>
                        <div class="cookie-type-item">
                            <i data-lucide="bar-chart-3"></i>
                            <strong>Аналитические:</strong>
                            <span>Сбор анонимной информации о том, как посетители используют наш сайт.</span>
                        </div>
                        <div class="cookie-type-item">
                            <i data-lucide="settings-2"></i>
                            <strong>Функциональные:</strong>
                            <span>Запоминают ваш выбор для персонализированного IT-обучения.</span>
                        </div>
                        <div class="cookie-type-item">
                            <i data-lucide="target"></i>
                            <strong>Маркетинговые:</strong>
                            <span>Используются для доставки объявлений, соответствующих вашим интересам.</span>
                        </div>
                    </div>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>Зачем мы используем файлы cookie?</h2>
                    <ul class="legal-list">
                        <li>Обеспечение стабильной и безопасной работы цифровой инфраструктуры.</li>
                        <li>Анализ пользовательского поведения для оптимизации курсов.</li>
                        <li>Персонализация контента для пользователей в Лондоне и всей Европе.</li>
                        <li>Предоставление методологий, доказавших эффективность.</li>
                    </ul>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>Ваш выбор и управление</h2>
                    <p>
                        Вы имеете полный контроль над файлами cookie. Вы можете в любой
                        момент изменить свои настройки в браузере. Однако, обратите
                        внимание: отключение строго необходимых cookie может привести к
                        некорректной работе некоторых функций.
                    </p>
                </div>

                <div class="contact-info-block" data-aos="fade-up">
                    <h2>Контактная информация</h2>
                    <p>Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>:</p>
                    <ul class="contact-data-list">
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <a href="tel:+442074272890">+44 20 7427 2890</a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>22 Chancery Ln, Holborn, London WC2A 1LS, UK</span>
                        </li>
                    </ul>
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