<!DOCTYPE html>
<html lang="et">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AppArtA IT — Laadimine...</title>
<style>
    :root {
        --primary-purple: #6a11cb;
        --secondary-purple: #8a2be2;
        --accent-purple: #9d4edd;
        --light-purple: #b19cd9;
        --white: #ffffff;
        --dark-bg: #0f0f1a;
        --transition-time: 1.5s;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        margin: 0;
        padding: 0;
        background: var(--dark-bg);
        color: var(--white);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        text-align: center;
        overflow: hidden;
    }
    
    .universe {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        background: radial-gradient(ellipse at center, #1a1a2e 0%, #0f0f1a 70%);
    }
    
    .stars {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
    }
    
    .star {
        position: absolute;
        background-color: white;
        border-radius: 50%;
        animation: twinkle 3s infinite ease-in-out;
    }
    
    .particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 3;
    }
    
    .particle {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--primary-purple), var(--accent-purple));
        opacity: 0.7;
        filter: blur(5px);
        animation: float 20s infinite linear;
    }
    
    .container {
        position: relative;
        z-index: 10;
        max-width: 900px;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .logo {
        margin-bottom: 2rem;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s ease forwards 0.5s;
    }
    
    .logo h1 {
        font-size: 4.5rem;
        font-weight: 800;
        letter-spacing: 3px;
        margin-bottom: 0.5rem;
        background: linear-gradient(to right, #ffffff, var(--light-purple), #ffffff);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-shadow: 0 0 20px rgba(157, 78, 221, 0.5);
        position: relative;
    }
    
    .logo h1::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(to right, transparent, var(--accent-purple), transparent);
        border-radius: 50%;
        filter: blur(1px);
    }
    
    .logo-icon {
        width: 120px;
        height: 120px;
        margin: 0 auto 1.5rem;
        position: relative;
        opacity: 0;
        animation: fadeIn 1s ease forwards 0.8s;
    }
    
    .logo-icon-inner {
        width: 100%;
        height: 100%;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        background: linear-gradient(135deg, var(--primary-purple), var(--accent-purple));
        animation: morph 8s ease-in-out infinite;
        box-shadow: 0 0 40px rgba(157, 78, 221, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2.5rem;
        font-weight: bold;
    }
    
    .tagline {
        font-size: 1.5rem;
        line-height: 1.6;
        margin-bottom: 2rem;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s ease forwards 1s;
        max-width: 700px;
    }
    
    .tagline p {
        margin-bottom: 1rem;
        position: relative;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }
    
    .tagline p:hover {
        transform: translateY(-3px);
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    .loading-container {
        margin-top: 2rem;
        opacity: 0;
        animation: fadeIn 1s ease forwards 1.5s;
        width: 100%;
        max-width: 500px;
    }
    
    .loading-text {
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
        letter-spacing: 2px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    
    .loading-dots {
        display: flex;
        gap: 5px;
    }
    
    .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--light-purple);
        animation: dotPulse 1.5s infinite ease-in-out;
    }
    
    .dot:nth-child(2) {
        animation-delay: 0.2s;
    }
    
    .dot:nth-child(3) {
        animation-delay: 0.4s;
    }
    
    .loading-bar-container {
        width: 100%;
        height: 8px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        margin: 0 auto;
        overflow: hidden;
        position: relative;
        box-shadow: 0 0 10px rgba(157, 78, 221, 0.3);
    }
    
    .loading-progress {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0%;
        background: linear-gradient(to right, var(--primary-purple), var(--accent-purple), var(--light-purple));
        border-radius: 10px;
        animation: loading 3s ease-in-out forwards;
        box-shadow: 0 0 15px rgba(157, 78, 221, 0.7);
    }
    
    .loading-percentage {
        position: absolute;
        top: -25px;
        right: 0;
        font-size: 0.9rem;
        font-weight: bold;
        color: var(--light-purple);
    }
    
    .tech-icons {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 2rem;
        opacity: 0;
        animation: fadeIn 1s ease forwards 2s;
    }
    
    .tech-icon {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(5px);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--light-purple);
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .tech-icon:hover {
        transform: translateY(-5px) scale(1.1);
        background: rgba(157, 78, 221, 0.2);
        box-shadow: 0 5px 15px rgba(157, 78, 221, 0.4);
    }
    
    .interactive-hint {
        margin-top: 2rem;
        font-size: 0.9rem;
        color: var(--light-purple);
        opacity: 0.7;
        opacity: 0;
        animation: fadeIn 1s ease forwards 2.5s;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    @keyframes loading {
        0% {
            width: 0%;
        }
        20% {
            width: 25%;
        }
        50% {
            width: 60%;
        }
        80% {
            width: 85%;
        }
        100% {
            width: 100%;
        }
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }
        33% {
            transform: translateY(-30px) rotate(120deg);
        }
        66% {
            transform: translateY(15px) rotate(240deg);
        }
    }
    
    @keyframes morph {
        0% {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }
        25% {
            border-radius: 58% 42% 75% 25% / 76% 46% 54% 24%;
        }
        50% {
            border-radius: 50% 50% 33% 67% / 55% 27% 73% 45%;
        }
        75% {
            border-radius: 33% 67% 58% 42% / 63% 68% 32% 37%;
        }
        100% {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }
    }
    
    @keyframes twinkle {
        0%, 100% {
            opacity: 0.2;
        }
        50% {
            opacity: 1;
        }
    }
    
    @keyframes dotPulse {
        0%, 100% {
            transform: scale(1);
            opacity: 0.7;
        }
        50% {
            transform: scale(1.5);
            opacity: 1;
        }
    }
    
    /* Медиа-запросы для адаптивности */
    @media (max-width: 768px) {
        .logo h1 {
            font-size: 3rem;
        }
        
        .logo-icon {
            width: 100px;
            height: 100px;
        }
        
        .tagline {
            font-size: 1.2rem;
        }
        
        .loading-bar-container {
            width: 300px;
        }
    }
    
    @media (max-width: 480px) {
        .logo h1 {
            font-size: 2.2rem;
        }
        
        .logo-icon {
            width: 80px;
            height: 80px;
        }
        
        .tagline {
            font-size: 1rem;
        }
        
        .loading-bar-container {
            width: 250px;
        }
        
        .tech-icons {
            gap: 10px;
        }
        
        .tech-icon {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }
    }
</style>
</head>
<body>
    <div class="universe"></div>
    <div class="stars" id="stars"></div>
    <div class="particles" id="particles"></div>
    
    <div class="container">
        <div class="logo">
            <div class="logo-icon">
                <div class="logo-icon-inner">A</div>
            </div>
            <h1>AppArtA IT</h1>
        </div>
        
        <div class="tagline">
            <p>Teie toote arendus ja reklaam</p>
            <p>Разработка и реклама вашего продукта</p>
            <p>Parimas töökorralduses</p>
        </div>
        
        <div class="loading-container">
            <div class="loading-text">
                Laadimine
                <div class="loading-dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
            <div class="loading-bar-container">
                <div class="loading-progress">
                    <div class="loading-percentage" id="percentage">0%</div>
                </div>
            </div>
        </div>
        
        <div class="tech-icons">
            <div class="tech-icon">💻</div>
            <div class="tech-icon">📱</div>
            <div class="tech-icon">🌐</div>
            <div class="tech-icon">🎨</div>
            <div class="tech-icon">🚀</div>
        </div>
        
        <div class="interactive-hint">
            Klõpsa ekraanil interaktiivsuse jaoks
        </div>
    </div>

<script>
    // Создание звездного неба
    const starsContainer = document.getElementById('stars');
    for (let i = 0; i < 150; i++) {
        const star = document.createElement('div');
        star.classList.add('star');
        star.style.width = Math.random() * 3 + 'px';
        star.style.height = star.style.width;
        star.style.left = Math.random() * 100 + '%';
        star.style.top = Math.random() * 100 + '%';
        star.style.animationDelay = Math.random() * 5 + 's';
        starsContainer.appendChild(star);
    }
    
    // Создание частиц
    const particlesContainer = document.getElementById('particles');
    for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        const size = Math.random() * 100 + 50;
        particle.style.width = size + 'px';
        particle.style.height = size + 'px';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animationDuration = (Math.random() * 20 + 10) + 's';
        particle.style.animationDelay = Math.random() * 5 + 's';
        particlesContainer.appendChild(particle);
    }
    
    // Обновление процента загрузки
    const percentageElement = document.getElementById('percentage');
    let progress = 0;
    const progressInterval = setInterval(() => {
        progress += Math.random() * 10;
        if (progress > 100) progress = 100;
        percentageElement.textContent = Math.floor(progress) + '%';
        
        if (progress >= 100) {
            clearInterval(progressInterval);
        }
    }, 150);
    
    // Интерактивность при клике
    document.body.addEventListener('click', function(e) {
        // Создание волны при клике
        const wave = document.createElement('div');
        wave.style.position = 'fixed';
        wave.style.left = e.clientX + 'px';
        wave.style.top = e.clientY + 'px';
        wave.style.width = '0px';
        wave.style.height = '0px';
        wave.style.borderRadius = '50%';
        wave.style.background = 'radial-gradient(circle, rgba(157,78,221,0.3) 0%, rgba(157,78,221,0) 70%)';
        wave.style.transform = 'translate(-50%, -50%)';
        wave.style.zIndex = '5';
        wave.style.pointerEvents = 'none';
        document.body.appendChild(wave);
        
        // Анимация волны
        const size = 200;
        wave.animate([
            { width: '0px', height: '0px', opacity: 1 },
            { width: size + 'px', height: size + 'px', opacity: 0 }
        ], {
            duration: 1000,
            easing: 'ease-out'
        });
        
        // Удаление волны после анимации
        setTimeout(() => {
            wave.remove();
        }, 1000);
        
        // Создание частиц при клике
        for (let i = 0; i < 5; i++) {
            createParticle(e.clientX, e.clientY);
        }
    });
    
    // Функция создания частиц при клике
    function createParticle(x, y) {
        const particle = document.createElement('div');
        particle.style.position = 'fixed';
        particle.style.left = x + 'px';
        particle.style.top = y + 'px';
        particle.style.width = '10px';
        particle.style.height = '10px';
        particle.style.borderRadius = '50%';
        particle.style.background = `hsl(${Math.random() * 60 + 250}, 100%, 70%)`;
        particle.style.zIndex = '5';
        particle.style.pointerEvents = 'none';
        document.body.appendChild(particle);
        
        // Анимация частицы
        const angle = Math.random() * Math.PI * 2;
        const speed = 2 + Math.random() * 2;
        const vx = Math.cos(angle) * speed;
        const vy = Math.sin(angle) * speed;
        
        let posX = x;
        let posY = y;
        let opacity = 1;
        
        const animateParticle = () => {
            posX += vx;
            posY += vy;
            opacity -= 0.02;
            
            particle.style.left = posX + 'px';
            particle.style.top = posY + 'px';
            particle.style.opacity = opacity;
            
            if (opacity > 0) {
                requestAnimationFrame(animateParticle);
            } else {
                particle.remove();
            }
        };
        
        animateParticle();
    }
    
    // Переход на другую страницу после завершения анимации
    setTimeout(function() {
        window.location.href = "apparta-ee.php";
    }, 5000);
</script>
<div id="cookieNotice" style="position:fixed;bottom:0;left:0;width:100%;background:rgba(15,15,26,0.95);color:#fff;padding:15px;text-align:center;z-index:10000;font-size:14px;">
  Мы используем cookies для улучшения работы сайта. Ознакомьтесь с 
  <a href="cookies.php" style="color:#9d4edd;text-decoration:underline;">Политикой cookies</a>,
  <a href="privacy.php" style="color:#9d4edd;text-decoration:underline;">Политикой конфиденциальности</a> и
  <a href="terms.php" style="color:#9d4edd;text-decoration:underline;">Условиями использования</a>.
  <button onclick="acceptCookies()" style="margin-left:10px;padding:5px 10px;background:#6a11cb;color:#fff;border:none;border-radius:5px;cursor:pointer;">Согласен</button>
</div>

<script>
function acceptCookies() {
  document.getElementById('cookieNotice').style.display = 'none';
  document.cookie = "cookieAccepted=true; path=/; max-age=" + 60*60*24*365;
  startRedirect(); // запуск редиректа после согласия
}

function startRedirect() {
  setTimeout(function() {
    window.location.href = "apparta-ee.php"; // можно адаптировать по языкам
  }, 1000); // задержка чтобы пользователь увидел кнопку нажатием
}

// Проверка cookie при загрузке
window.onload = function() {
  if (document.cookie.indexOf("cookieAccepted=true") !== -1) {
    document.getElementById('cookieNotice').style.display = 'none';
    startRedirect(); // если согласие уже есть — редирект сразу
  }
};
</script>
</body>
</html>