document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. ИНИЦИАЛИЗАЦИЯ ИКОНОК ---
    if (typeof lucide !== 'undefined') lucide.createIcons();

    // --- 2. ХЕДЕР (СКРОЛЛ) ---
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(18, 18, 18, 0.95)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(18, 18, 18, 0.8)';
        }
    });

    // --- 3. МОБИЛЬНОЕ МЕНЮ ---
    const burger = document.querySelector('.burger');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuLinks = document.querySelectorAll('.mobile-menu__list a');

    if (burger && mobileMenu) {
        burger.addEventListener('click', () => {
            burger.classList.toggle('burger--active');
            mobileMenu.classList.toggle('mobile-menu--active');
            document.body.style.overflow = mobileMenu.classList.contains('mobile-menu--active') ? 'hidden' : '';
        });

        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                burger.classList.remove('burger--active');
                mobileMenu.classList.remove('mobile-menu--active');
                document.body.style.overflow = '';
            });
        });
    }

    // --- 4. ПОДКЛЮЧЕНИЕ AOS ЧЕРЕЗ СКРИПТ ---
    const aosScript = document.createElement('script');
    aosScript.src = "https://unpkg.com/aos@next/dist/aos.js";
    aosScript.onload = () => {
        AOS.init({
            duration: 800,
            offset: 100,
            once: true,
            easing: 'ease-out-cubic'
        });
    };
    document.head.appendChild(aosScript);

    // --- 5. TILT ЭФФЕКТ (HERO) ---
    const scene = document.querySelector('#scene');
    if (scene) {
        window.addEventListener('mousemove', (e) => {
            let x = (window.innerWidth / 2 - e.pageX) / 30;
            let y = (window.innerHeight / 2 - e.pageY) / 30;
            scene.style.transform = `rotateY(${x}deg) rotateX(${y}deg)`;
        });
    }

    // --- 6. АККОРДЕОН (FAQ) ---
    const accordionItems = document.querySelectorAll('.accordion__item');
    accordionItems.forEach(item => {
        const trigger = item.querySelector('.accordion__trigger');
        if (trigger) {
            trigger.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                accordionItems.forEach(otherItem => otherItem.classList.remove('active'));
                if (!isActive) item.classList.add('active');
            });
        }
    });

    // --- 7. ФОРМА И КАПЧА ---
    const contactForm = document.getElementById('mainContactForm');
    const captchaLabel = document.getElementById('captchaQuestion');
    const captchaInput = document.getElementById('captchaInput');
    const phoneInput = document.getElementById('phoneInput');

    if (contactForm && captchaLabel) {
        let n1 = Math.floor(Math.random() * 10) + 1;
        let n2 = Math.floor(Math.random() * 10) + 1;
        let result = n1 + n2;
        captchaLabel.innerText = `${n1} + ${n2}`;

        if (phoneInput) {
            phoneInput.addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/[^\d]/g, '');
            });
        }

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            if (parseInt(captchaInput.value) !== result) {
                alert('Капча решена неверно!');
                return;
            }
            
            const btn = contactForm.querySelector('button');
            btn.disabled = true;
            btn.innerText = 'Отправка...';

            setTimeout(() => {
                contactForm.reset();
                btn.style.display = 'none';
                document.getElementById('formSuccess').style.display = 'flex';
                if (typeof lucide !== 'undefined') lucide.createIcons();
            }, 1500);
        });
    }

    // --- 8. КУКИ ---
    const cookieBox = document.getElementById('cookiePopup');
    const cookieBtn = document.getElementById('acceptCookies');
    if (cookieBox && !localStorage.getItem('nineteen_cookies')) {
        setTimeout(() => cookieBox.classList.add('cookie-popup--show'), 2000);
    }
    if (cookieBtn) {
        cookieBtn.addEventListener('click', () => {
            localStorage.setItem('nineteen_cookies', 'true');
            cookieBox.classList.remove('cookie-popup--show');
        });
    }
});