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
            <span class="section-tag" data-aos="fade-down">Privacy Policy</span>
            <h1 data-aos="fade-up">Политика конфиденциальности</h1>

            <div class="legal-content">
                <div class="policy-hero-card" data-aos="fade-up">
                    <p>
                        Политика конфиденциальности распространяется на персональные данные,
                        предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания услуг по обучению и консультированию, так и для других взаимодействий в электронном формате.
                    </p>
                </div>

                <div class="policy-notice" data-aos="fade-up">
                    <i data-lucide="info"></i>
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в положения Политики. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц. Предоставляя свои данные, вы даете полное согласие на их обработку способами, предусмотренными настоящей Политикой.
                    </p>
                </div>

                <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения</h2>
                <div class="storage-info" data-aos="fade-up">
                    <div class="storage-item">
                        <div class="storage-icon"><i data-lucide="history"></i></div>
                        <span>Срок хранения до <strong>75 лет</strong></span>
                    </div>
                    <div class="storage-item">
                        <div class="storage-icon"><i data-lucide="user-check"></i></div>
                        <span>Только с вашего согласия</span>
                    </div>
                </div>
                <p data-aos="fade-up">
                    Для предотвращения утечки данных мы используем полный комплекс мер информационной безопасности. Уничтожение или блокирование данных осуществляется по запросу клиента или при достижении целей сбора.
                </p>

                <div class="data-collection-grid">
                    <div class="data-box" data-aos="fade-right">
                        <h3><i data-lucide="cpu"></i> Техническая информация</h3>
                        <ul class="legal-list">
                            <li>IP-адрес и время доступа</li>
                            <li>Источники перехода на <strong><?= $fullDomain ?></strong></li>
                            <li>Данные браузера и просмотры блоков</li>
                        </ul>
                    </div>
                    <div class="data-box" data-aos="fade-left">
                        <h3><i data-lucide="contact"></i> Персонализация</h3>
                        <ul class="legal-list">
                            <li>Имя пользователя</li>
                            <li>E-mail и номер телефона</li>
                            <li>Данные о контрактах и услугах</li>
                        </ul>
                    </div>
                </div>

                <h2 data-aos="fade-up">Цели обработки персональных данных</h2>
                <ul class="legal-list" data-aos="fade-up">
                    <li>Предоставление доступа к инновационной платформе обучения.</li>
                    <li>Учет пожеланий при разработке новых решений.</li>
                    <li>Информирование об акциях и материалах блога.</li>
                    <li>Обеспечение качественной обратной связи.</li>
                </ul>

                <h2 data-aos="fade-up">Использование Cookies</h2>
                <p data-aos="fade-up">
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Великобритания), чтобы сделать использование <strong><?= $fullDomain ?></strong> удобнее. Вы можете отключить их в настройках браузера.
                </p>

                <div class="rights-block" data-aos="zoom-in">
                    <h2>Ваши права</h2>
                    <p>
                        Если вы хотите отредактировать свои данные или прекратить их обработку, свяжитесь с командой <strong><?= $domainTitle ?></strong>:
                    </p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-btn">hello@<?= $fullDomain ?></a>
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