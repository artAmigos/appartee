<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppArtA IT — Teie ettevõtte digitaalsed lahendused</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6a11cb;
            --secondary: #8a2be2;
            --accent: #9d4edd;
            --light: #b19cd9;
            --dark: #0f0f1a;
            --text: #333;
            --white: #ffffff;
            --gray: #f5f5f7;
            --success: #4CAF50;
            --transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        body {
            background-color: var(--white);
            color: var(--text);
            line-height: 1.7;
            overflow-x: hidden;
        }
        header {
            background: rgba(15, 15, 26, 0.95);
            backdrop-filter: blur(20px);
            color: var(--white);
            padding: 1.2rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }
        header.scrolled {
            padding: 0.8rem 0;
            background: rgba(15, 15, 26, 0.98);
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 2rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, var(--primary), var(--light));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            transition: var(--transition);
        }
        .logo:hover {
            transform: scale(1.05);
        }
        .nav-links {
            display: flex;
            list-style: none;
            align-items: center;
            gap: 2rem;
        }
        .nav-links li {
            position: relative;
        }
        .nav-links a {
            color: var(--white);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            position: relative;
            padding: 0.5rem 0;
            font-size: 1.05rem;
        }
        .nav-links a:hover {
            color: var(--light);
        }
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transition: var(--transition);
            border-radius: 2px;
        }
        .nav-links a:hover::after {
            width: 100%;
        }
        .language-switcher {
            display: flex;
            gap: 0.5rem;
            margin-left: 1.5rem;
        }
        .lang-btn {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.7);
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            cursor: pointer;
            transition: var(--transition);
            font-size: 0.9rem;
            font-weight: 600;
        }
        .lang-btn:hover, .lang-btn.active {
            background: var(--primary);
            color: var(--white);
            border-color: var(--primary);
        }
        .nav-contact {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: var(--white);
            padding: 0.7rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            transition: var(--transition);
            box-shadow: 0 5px 15px rgba(106, 17, 203, 0.3);
            margin-left: 1.5rem;
            text-decoration: none;
        }
        .nav-contact:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(106, 17, 203, 0.4);
        }
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.8rem;
            cursor: pointer;
            transition: var(--transition);
            padding: 0.5rem;
            border-radius: 8px;
            z-index: 1001;
        }
        .mobile-menu-btn:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        .hero {
            background: linear-gradient(135deg, rgba(15, 15, 26, 0.85), rgba(42, 15, 84, 0.9)), url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--white);
            padding: 15rem 0 10rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 30% 50%, rgba(157, 78, 221, 0.2) 0%, transparent 50%),
                        radial-gradient(circle at 70% 20%, rgba(106, 17, 203, 0.15) 0%, transparent 50%);
            z-index: 1;
        }
        .hero .container {
            position: relative;
            z-index: 2;
        }
        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            font-weight: 800;
            background: linear-gradient(135deg, #ffffff, var(--light));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .hero p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto 3rem;
            opacity: 0.9;
            font-weight: 300;
            line-height: 1.6;
        }
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: var(--white);
            padding: 1.2rem 3rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.2rem;
            transition: var(--transition);
            box-shadow: 0 10px 30px rgba(106, 17, 203, 0.4);
            margin: 0 1rem;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--accent), var(--primary));
            transition: var(--transition);
            z-index: -1;
        }
        .cta-button:hover::before {
            left: 0;
        }
        .cta-button:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 35px rgba(106, 17, 203, 0.5);
        }
        .cta-button.secondary {
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }
        .cta-button.secondary:hover {
            background: var(--white);
            color: var(--primary);
            border-color: var(--white);
        }
        .services {
            padding: 8rem 0;
            background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
            position: relative;
        }
        .services::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" opacity="0.03"><polygon fill="%236a11cb" points="0,1000 1000,0 1000,1000"/></svg>');
            background-size: cover;
        }
        .section-title {
            text-align: center;
            margin-bottom: 5rem;
            position: relative;
            z-index: 2;
        }
        .section-title h2 {
            font-size: 3rem;
            color: var(--dark);
            margin-bottom: 1.5rem;
            font-weight: 800;
            position: relative;
            display: inline-block;
        }
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            border-radius: 2px;
        }
        .section-title p {
            max-width: 700px;
            margin: 0 auto;
            color: #666;
            font-size: 1.2rem;
            line-height: 1.6;
        }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px,1fr));
            gap: 2.5rem;
            position: relative;
            z-index: 2;
        }
        .service-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(106, 17, 203, 0.03) 0%, rgba(157, 78, 221, 0.05) 100%);
            z-index: 1;
        }
        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }
        .service-icon {
            height: 140px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }
        .service-icon::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
            transform: rotate(30deg);
        }
        .service-content {
            padding: 2.5rem;
            position: relative;
            z-index: 2;
        }
        .service-content h3 {
            font-size: 1.7rem;
            margin-bottom: 1.2rem;
            color: var(--dark);
            font-weight: 700;
        }
        .service-content ul {
            list-style: none;
            margin-bottom: 2rem;
        }
        .service-content li {
            margin-bottom: 0.8rem;
            padding-left: 2rem;
            position: relative;
            line-height: 1.5;
        }
        .service-content li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--success);
            font-weight: bold;
            font-size: 1.1rem;
        }
        .service-price {
            font-size: 1.4rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .service-price span {
            font-size: 1rem;
            color: #888;
            font-weight: normal;
        }
        .price-note {
            font-size: 0.9rem;
            color: #666;
            font-style: italic;
            margin-bottom: 1.5rem;
        }
        .service-cta {
            display: block;
            width: 100%;
            text-align: center;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: var(--white);
            padding: 1rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 700;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .service-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--accent), var(--primary));
            transition: var(--transition);
            z-index: -1;
        }
        .service-cta:hover::before {
            left: 0;
        }
        .service-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(106, 17, 203, 0.3);
        }
        .pricing {
            padding: 8rem 0;
            background: linear-gradient(135deg, var(--dark), #1a1a2e);
            color: var(--white);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .pricing::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(157, 78, 221, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }
        .pricing::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(106, 17, 203, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }
        .pricing .section-title h2 {
            color: var(--white);
        }
        .pricing .section-title p {
            color: rgba(255, 255, 255, 0.8);
        }
        .pricing-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 4rem 3rem;
            margin: 0 auto;
            max-width: 800px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 2;
        }
        .pricing-card h3 {
            font-size: 2.2rem;
            margin-bottom: 2rem;
            font-weight: 700;
        }
        .pricing-card p {
            margin-bottom: 2rem;
            opacity: 0.9;
            font-size: 1.1rem;
            line-height: 1.7;
        }
        .discount-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--accent), #ff6b6b);
            color: var(--white);
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 800;
            margin-bottom: 2.5rem;
            animation: pulse 2s infinite;
            box-shadow: 0 10px 20px rgba(157, 78, 221, 0.3);
            font-size: 1.1rem;
        }
        @keyframes pulse {
            0% { transform: scale(1); box-shadow: 0 10px 20px rgba(157, 78, 221, 0.3); }
            50% { transform: scale(1.05); box-shadow: 0 15px 30px rgba(157, 78, 221, 0.4); }
            100% { transform: scale(1); box-shadow: 0 10px 20px rgba(157, 78, 221, 0.3); }
        }
        .contact {
            padding: 8rem 0;
            background-color: var(--white);
            position: relative;
        }
        .contact::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(106, 17, 203, 0.05) 0%, transparent 70%);
        }
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        .contact-info h3 {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
            font-weight: 700;
        }
        .contact-info p {
            margin-bottom: 2.5rem;
            color: #666;
            font-size: 1.1rem;
            line-height: 1.7;
        }
        .contact-details {
            margin-bottom: 3rem;
        }
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            transition: var(--transition);
            padding: 1rem;
            border-radius: 12px;
        }
        .contact-item:hover {
            background: rgba(106, 17, 203, 0.05);
            transform: translateX(10px);
        }
        .contact-item i {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.5rem;
            font-size: 1.2rem;
            box-shadow: 0 8px 20px rgba(106, 17, 203, 0.3);
        }
        .contact-form {
            background: linear-gradient(135deg, #f8f9ff, #f0f2ff);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .form-group {
            margin-bottom: 2rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 600;
            color: var(--dark);
        }
        .form-control {
            width: 100%;
            padding: 1.2rem 1.5rem;
            border: 1px solid #e1e5e9;
            border-radius: 12px;
            font-size: 1rem;
            transition: var(--transition);
            background: var(--white);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
        }
        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 5px 20px rgba(106, 17, 203, 0.15);
            transform: translateY(-2px);
        }
        textarea.form-control {
            min-height: 180px;
            resize: vertical;
        }
        footer {
            background: linear-gradient(135deg, var(--dark), #1a1a2e);
            color: var(--white);
            padding: 5rem 0 2rem;
            position: relative;
        }
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 3rem;
            margin-bottom: 4rem;
        }
        .footer-column h4 {
            font-size: 1.3rem;
            margin-bottom: 1.8rem;
            position: relative;
            font-weight: 700;
        }
        .footer-column h4::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            border-radius: 2px;
        }
        .footer-links {
            list-style: none;
        }
        .footer-links li {
            margin-bottom: 1rem;
        }
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
        }
        .footer-links a i {
            margin-right: 0.8rem;
            font-size: 0.9rem;
            width: 20px;
            text-align: center;
        }
        .footer-links a:hover {
            color: var(--light);
            padding-left: 5px;
        }
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: var(--white);
            transition: var(--transition);
            font-size: 1.2rem;
        }
        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(106, 17, 203, 0.3);
        }
        .copyright {
            text-align: center;
            padding-top: 3rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.95rem;
        }
        @media (max-width: 1100px) {
            .hero h1 {
                font-size: 3.5rem;
            }
            .contact-container {
                gap: 3rem;
            }
        }
        @media (max-width: 992px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
            .hero h1 {
                font-size: 3rem;
            }
            .services-grid {
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            }
        }
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: rgba(15, 15, 26, 0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 2rem 0;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
                z-index: 999;
                gap: 2rem;
            }
            .nav-links.active {
                display: flex;
            }
            .nav-links li {
                margin: 0;
                text-align: center;
                width: 100%;
            }
            .nav-links a {
                display: block;
                padding: 1rem 0;
                font-size: 1.5rem;
                width: 100%;
            }
            .language-switcher {
                margin: 1rem 0;
                justify-content: center;
            }
            .mobile-menu-btn {
                display: block;
                position: relative;
                z-index: 1001;
            }
            .hero {
                padding: 12rem 0 7rem;
                background-attachment: scroll;
            }
            .hero h1 {
                font-size: 2.5rem;
            }
            .hero p {
                font-size: 1.2rem;
            }
            .cta-button {
                display: block;
                margin: 1.5rem auto;
                max-width: 280px;
            }
            .section-title h2 {
                font-size: 2.5rem;
            }
            .services, .pricing, .contact {
                padding: 6rem 0;
            }
            .service-content {
                padding: 2rem;
            }
            .contact-form {
                padding: 2.5rem;
            }
        }
        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2.2rem;
            }
            .services-grid {
                grid-template-columns: 1fr;
            }
            .service-card {
                margin: 0 auto;
                max-width: 350px;
            }
            .pricing-card {
                padding: 3rem 2rem;
            }
            .contact-form {
                padding: 2rem;
            }
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .footer-column h4::after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
        .fade-in {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        html {
    zoom: 0.85;
}
    </style>
</head>
<body>
    <header id="header">
        <div class="container nav-container">
            <div class="logo">AppArtA IT</div>
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-links">
                <li><a href="#services">Teenused</a></li>
                <li><a href="#pricing">Hinnad</a></li>
                <li><a href="#contact">Kontakt</a></li>
                <li class="language-switcher">
    <button class="lang-btn" onclick="window.location.href='apparta-ru.php'">RU</button>
    <button class="lang-btn" onclick="window.location.href='apparta-en.php'">EN</button>
    <button class="lang-btn active" onclick="window.location.href='apparta-ee.php'">ET</button>
</li>
                <li><a href="#contact" class="nav-contact">Võta meiega ühendust</a></li>
            </ul>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h1>Digitaalsed lahendused teie ettevõtte kasvuks</h1>
            <p>Teie toote arendamine ja reklaamimine parimas töökorralduses. Loome tehnoloogiaid, mis töötavad teie heaks ööpäevaringselt ja toovad reaalseid tulemusi.</p>
            <a href="#contact" class="cta-button">Alusta projekti</a>
            <a href="#services" class="cta-button secondary">Meie teenused</a>
        </div>
    </section>
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Meie teenused</h2>
                <p>Teie ettevõtte digitaalse kohaloleku terviklikud lahendused. Iga projekt on individuaalne lähenemine ja maksimaalne tulemus.</p>
            </div>
            <div class="services-grid">
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="service-content">
                        <h3>Veebiarendus</h3>
                        <ul>
                            <li>Ettevõtete veebisaidid ja maandumislehed</li>
                            <li>E-poed</li>
                            <li>Veebirakendused</li>
                            <li>CRM-i ja API integreerimine</li>
                            <li>Tugi ja uuendused</li>
                        </ul>
                        <div class="service-price">alates 390€ <span>/ projekt</span></div>
                        <div class="price-note">* täpne hind määratakse pärast arutelu</div>
                        <a href="#contact" class="service-cta">Aruta projekti</a>
                    </div>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="service-content">
                        <h3>Mobiiliarendus</h3>
                        <ul>
                            <li>Androidi rakendused</li>
                            <li>Platvormidevahelised lahendused</li>
                            <li>UX/UI disain</li>
                            <li>Serveri integreerimine</li>
                            <li>Avaldamine Google Play's</li>
                        </ul>
                        <div class="service-price">alates 590€ <span>/ rakendus</span></div>
                        <div class="price-note">* täpne hind määratakse pärast arutelu</div>
                        <a href="#contact" class="service-cta">Loo rakendus</a>
                    </div>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="service-content">
                        <h3>SEO ja turundus</h3>
                        <ul>
                            <li>Veebilehtede põhjalik turundus</li>
                            <li>SEO audit ja optimeerimine</li>
                            <li>Kontekstreklaam</li>
                            <li>Kampaaniate analüütika</li>
                            <li>Orgaanilise liikluse suurendamine</li>
                        </ul>
                        <div class="service-price">alates 190€ <span>/ kuu</span></div>
                        <div class="price-note">* täpne hind määratakse pärast arutelu</div>
                        <a href="#contact" class="service-cta">Suurenda liiklust</a>
                    </div>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-hashtag"></i>
                    </div>
                    <div class="service-content">
                        <h3>Sotsiaalmeedia turundus ja bränding</h3>
                        <ul>
                            <li>Sotsiaalmeedia haldamine</li>
                            <li>Visuaalse sisu loomine</li>
                            <li>Sihtotstarbeline reklaam</li>
                            <li>Brändi identiteedi arendamine</li>
                            <li>Kaasatuse suurendamine</li>
                        </ul>
                        <div class="service-price">alates 250€ <span>/ kuu</span></div>
                        <div class="price-note">* täpne hind määratakse pärast arutelu</div>
                        <a href="#contact" class="service-cta">Tugevda brändi</a>
                    </div>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="service-content">
                        <h3>Disain ja UX/UI</h3>
                        <ul>
                            <li>Veebisaitide ja liideste disain</li>
                            <li>Prototüüpimine</li>
                            <li>Bännerite ja makettide loomine</li>
                            <li>Brändi identiteedi kohandamine</li>
                            <li>Kasutajauuringud</li>
                        </ul>
                        <div class="service-price">alates 190€ <span>/ projekt</span></div>
                        <div class="price-note">* täpne hind määratakse pärast arutelu</div>
                        <a href="#contact" class="service-cta">Telli disain</a>
                    </div>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <div class="service-content">
                        <h3>Mängud ja tarkvara</h3>
                        <ul>
                            <li>Mängude arendamine</li>
                            <li>Töölaudrakendused</li>
                            <li>Automatiseerimine ja botid</li>
                            <li>Kunstlik intelligents</li>
                            <li>Tehniline tugi</li>
                        </ul>
                        <div class="service-price">alates 450€ <span>/ projekt</span></div>
                        <div class="price-note">* täpne hind määratakse pärast arutelu</div>
                        <a href="#contact" class="service-cta">Aruta ideed</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing" id="pricing">
        <div class="container">
            <div class="section-title">
                <h2>Paindlik hinnapoliitika</h2>
                <p>Loome lahendusi, mis vastavad teie eelarvele ja äri eesmärkidele</p>
            </div>
            <div class="pricing-card fade-in">
                <div class="discount-badge">Kuni 30% allahindlust mitme teenuse tellimisel!</div>
                <h3>Individuaalne lähenemine hinnakujundusele</h3>
                <p>Mõistame, et iga ettevõte on ainulaadne, seetõttu ei paku me standardseid lahendusi. Kõik näidatud hinnad on ligikaudsed ja lõplik maksumus määratakse pärast teie vajaduste ja eesmärkide põhjalikku arutelu.</p>
                <p>Meie eesmärk on luua toode, mis toob maksimaalset kasu optimaalsete kuludega. Oleme alati valmis klientidele vastu tulema ja pakume paindlikke koostöötingimusi.</p>
                <a href="#contact" class="cta-button">Hangi hinnapakkumine</a>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Võta meiega ühendust</h2>
                <p>Kas olete valmis projekti alustama? Jätke taotlus ja me võtame teiega ühendust 24 tunni jooksul tasuta konsultatsiooni jaoks</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Loome koos midagi suurepärast!</h3>
                    <p>Oleme alati kättesaadavad ja valmis vastama kõigile teie küsimustele. Valige mugav suhtlusviis või täitke tagasisidevorm:</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>E-post</h4>
                                <p>info@apparta.ee</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4>Telefon / WhatsApp</h4>
                                <p>+372 5625 0266</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Aadress</h4>
                                <p>Tallinn, Eesti</p>
                            </div>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="https://wa.me/37256250266" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" title="Telegram"><i class="fab fa-telegram"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="contact-form fade-in">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Teie nimi *</label>
                            <input type="text" id="name" class="form-control" required placeholder="Kuidas teid kutsuda?">
                        </div>
                        <div class="form-group">
                            <label for="email">E-post *</label>
                            <input type="email" id evolving="email" class="form-control" required placeholder="näide@meil.com">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="tel" id="phone" class="form-control" placeholder="+372 ...">
                        </div>
                        <div class="form-group">
                            <label for="service">Huvipakkuv teenus</label>
                            <select id="service" class="form-control">
                                <option value="">Vali teenus</option>
                                <option value="web">Veebiarendus</option>
                                <option value="mobile">Mobiiliarendus</option>
                                <option value="seo">SEO ja turundus</option>
                                <option value="smm">Sotsiaalmeedia turundus ja bränding</option>
                                <option value="design">Disain ja UX/UI</option>
                                <option value="games">Mängud ja tarkvara</option>
                                <option value="consultation">Konsultatsioon</option>
                                <option value="other">Muu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Sõnum</label>
                            <textarea id="message" class="form-control" placeholder="Kirjeldage oma projekti, esitage küsimus või märkige soovid..."></textarea>
                        </div>
                        <button type="submit" class="cta-button" style="width: 100%;">Saada taotlus</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h4>AppArtA IT</h4>
                    <p>Teie toote arendamine ja reklaamimine parimas töökorralduses. Loome digitaalseid lahendusi, mis toovad tulemusi.</p>
                    <div class="social-links">
                        <a href="https://wa.me/37256250266" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" title="Telegram"><i class="fab fa-telegram"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h4>Teenused</h4>
                    <ul class="footer-links">
                        <li><a href="#services"><i class="fas fa-chevron-right"></i> Veebiarendus</a></li>
                        <li><a href="#services"><i class="fas fa-chevron-right"></i> Mobiiliarendus</a></li>
                        <li><a href="#services"><i class="fas fa-chevron-right"></i> SEO ja turundus</a></li>
                        <li><a href="#services"><i class="fas fa-chevron-right"></i> Sotsiaalmeedia turundus ja bränding</a></li>
                        <li><a href="#services"><i class="fas fa-chevron-right"></i> Disain ja UX/UI</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Ettevõte</h4>
                    <ul class="footer-links">
                        <li><a href="#services"><i class="fas fa-chevron-right"></i> Teenused</a></li>
                        <li><a href="#pricing"><i class="fas fa-chevron-right"></i> Hinnad</a></li>
                        <li><a href="#contact"><i class="fas fa-chevron-right"></i> Kontakt</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Portfell</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Blogi</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Kontakt</h4>
                    <ul class="footer-links">
                        <li><a href="mailto:info@apparta.ee"><i class="fas fa-envelope"></i> info@apparta.ee</a></li>
                        <li><a href="tel:+37256250266"><i class="fas fa-phone"></i> +372 5625 0266</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> Tallinn, Eesti</a></li>
                        <li><a href="https://wa.me/37256250266" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>© 2025 AppArtA IT — Kõik õigused kaitstud. | Teie toote arendamine ja reklaamimine</p>
            </div>
        </div>
    </footer>
    <script>
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');
        mobileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            navLinks.classList.toggle('active');
            mobileMenuBtn.innerHTML = navLinks.classList.contains('active') 
                ? '<i class="fas fa-times"></i>' 
                : '<i class="fas fa-bars"></i>';
        });
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.nav-container') && navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            }
        });
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        const langButtons = document.querySelectorAll('.lang-btn');
        langButtons.forEach(button => {
            button.addEventListener('click', () => {
                langButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                alert(`Keel muudetud: ${button.textContent}`);
            });
        });
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                    navLinks.classList.remove('active');
                    mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                }
            });
        });
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            if (!name || !email) {
                alert('Palun täitke kohustuslikud väljad (nimi ja e-post)');
                return;
            }
            alert(`Aitäh, ${name}! Teie taotlus on saadetud. Võtame teiega peagi ühendust.`);
            contactForm.reset();
        });
        const fadeElements = document.querySelectorAll('.fade-in');
        const fadeInOnScroll = () => {
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        };
        window.addEventListener('scroll', fadeInOnScroll);
        fadeInOnScroll();
    </script>
</body>
</html>