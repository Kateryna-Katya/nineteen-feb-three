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
            <span class="section-tag" data-aos="fade-down">Payment & Refunds</span>
            <h1 data-aos="fade-up">Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent" data-aos="fade-up">
                    <p>
                        Мы стремимся к максимальной прозрачности. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на качестве услуг и защите прав потребителей в рамках законодательства Великобритании.
                    </p>
                </div>

                <h2 data-aos="fade-up">Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="100">
                        <i data-lucide="file-text"></i>
                        <h3>Несоответствие</h3>
                        <p>Содержание материалов существенно отличается от заявленного на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="200">
                        <i data-lucide="wrench"></i>
                        <h3>Тех-проблемы</h3>
                        <p>Критические ошибки на <strong><?= $fullDomain ?></strong>, которые не были устранены нашей поддержкой.</p>
                    </div>
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="300">
                        <i data-lucide="timer"></i>
                        <h3>Период охлаждения</h3>
                        <p>Отказ в течение 14 дней с момента оплаты (согласно Consumer Rights Act).</p>
                    </div>
                </div>

                <div class="procedure-block" data-aos="fade-up">
                    <h2>Процедура запроса</h2>
                    <p>Чтобы инициировать возврат на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span class="step-num">1</span> Письмо на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span class="step-num">2</span> Тема: «Запрос на возврат средств»</div>
                        <div class="step-mini"><span class="step-num">3</span> Данные: ФИО и название программы</div>
                        <div class="step-mini"><span class="step-num">4</span> Подробное описание причины запроса</div>
                    </div>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>Сроки и способ возврата</h2>
                    <p>
                        После одобрения запроса, возврат будет произведен в течение <strong>7–14 рабочих дней</strong>. 
                        Средства возвращаются тем же способом, которым была совершена оплата. Фактический срок зачисления
                        зависит от регламента вашего банка в <strong>Великобритании</strong> или стране вашего пребывания.
                    </p>
                </div>

                <div class="warning-block refund-warning" data-aos="fade-up">
                    <h2>Исключения и ограничения</h2>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней с момента покупки.</li>
                        <li>Вы уже изучили или скачали более 50% материалов программы обучения.</li>
                        <li>Технические проблемы на стороне пользователя (софт, браузер, провайдер).</li>
                        <li>Нарушение условий использования платформы <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy" data-aos="zoom-in">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем вопросам обращайтесь в нашу службу поддержки:</p>
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