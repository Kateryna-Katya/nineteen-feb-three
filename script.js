document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок Lucide
    lucide.createIcons();

    // 2. Инициализация AOS (с CDN)
    if (typeof AOS !== 'undefined') {
        AOS.init({ duration: 800, offset: 100, once: true });
    }

    // 3. Мобильное меню
    const burger = document.querySelector('.burger');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuLinks = document.querySelectorAll('.mobile-menu__list a');

    const toggleMenu = () => {
        burger.classList.toggle('burger--active');
        mobileMenu.classList.toggle('mobile-menu--active');
        document.body.style.overflow = mobileMenu.classList.contains('mobile-menu--active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    menuLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 4. Hero Tilt Effect (Ванильный JS)
    const scene = document.querySelector('#scene');
    if (scene) {
        window.addEventListener('mousemove', (e) => {
            let x = (window.innerWidth / 2 - e.pageX) / 30;
            let y = (window.innerHeight / 2 - e.pageY) / 30;
            scene.style.transform = `rotateY(${x}deg) rotateX(${y}deg)`;
        });
    }

    // 5. Аккордеон FAQ
    document.querySelectorAll('.accordion__trigger').forEach(trigger => {
        trigger.addEventListener('click', () => {
            const item = trigger.parentElement;
            const isActive = item.classList.contains('active');
            document.querySelectorAll('.accordion__item').forEach(i => i.classList.remove('active'));
            if (!isActive) item.classList.add('active');
        });
    });

    // 6. Контактная форма: Валидация и Математическая капча
    const form = document.getElementById('mainContactForm');
    const phoneInput = document.getElementById('phoneInput');
    const captchaText = document.getElementById('captchaQuestion');
    const captchaInput = document.getElementById('captchaInput');
    
    // Генерация капчи
    let num1 = Math.floor(Math.random() * 10) + 1;
    let num2 = Math.floor(Math.random() * 10) + 1;
    let captchaSum = num1 + num2;
    if(captchaText) captchaText.innerText = `${num1} + ${num2}`;

    // Только цифры для телефона
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/[^\d]/g, '');
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        if (parseInt(captchaInput.value) !== captchaSum) {
            alert('Неправильный ответ на капчу!');
            return;
        }

        // Имитация AJAX
        const btn = form.querySelector('button');
        btn.innerText = 'Отправка...';
        btn.disabled = true;

        setTimeout(() => {
            form.reset();
            btn.style.display = 'none';
            document.getElementById('formSuccess').style.display = 'flex';
            lucide.createIcons(); // Обновляем иконку в сообщении
        }, 1500);
    });

    // 7. Cookie Popup
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('cookie-popup--show');
        }, 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookiePopup.classList.remove('cookie-popup--show');
        setTimeout(() => cookiePopup.style.display = 'none', 500);
    });
});