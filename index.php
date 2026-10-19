<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Strawberry Kitchen</title>
<meta name="title" content="Strawberry Kitchen">
<meta name="description" content="Strawberry Kitchen">
<meta name="application-name" content="Strawberry Kitchen">
<meta name="apple-mobile-web-app-title" content="Strawberry Kitchen">
<meta name="keywords" content="Strawberry Kitchen">
<meta property="og:title" content="Strawberry Kitchen">
<meta property="og:description" content="Strawberry Kitchen">
<meta property="og:site_name" content="Strawberry Kitchen">
<meta name="twitter:title" content="Strawberry Kitchen">
<meta name="twitter:description" content="Strawberry Kitchen">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap" rel="stylesheet">

<style>
:root {
    --page-bg: #0B111A;
    --body-text: #E2E8F0;
    --muted-text: #94A3B8;
    --heading-text: #FFFFFF;
    
    --nav-bg: rgba(11, 17, 26, 0.85);
    --nav-text: #E2E8F0;
    
    --hero-deep: #05080C;
    --hero-mid: #121A25;
    --hero-light: #1E2D42;
    --hero-glow-1: rgba(200, 121, 65, 0.25);
    --hero-glow-2: rgba(56, 102, 166, 0.2);
    
    --section-a: #121A25;
    --section-b: #172230;
    --section-c: #1E2D42;
    --section-strong: #080D14;
    
    --card-bg: #1B2636;
    --card-text: #E2E8F0;
    --card-border: #2A3C54;
    
    --accent: #D28148;
    --accent-contrast: #0B111A;
    --accent-hover: #E2935D;
    
    --input-bg: #0B111A;
    --input-text: #FFFFFF;
    --input-border: #334863;
    --focus: #D28148;
    
    --footer-start: #121A25;
    --footer-end: #05080C;
    --footer-text: #94A3B8;

    --font-heading: 'Plus Jakarta Sans', system-ui, sans-serif;
    --font-body: 'Manrope', system-ui, sans-serif;
    
    --space-section: clamp(64px, 8vw, 120px);
    --space-inner: clamp(24px, 5vw, 48px);
    --max-width: 1320px;
    
    --radius-sm: 6px;
    --radius-md: 12px;
    --radius-lg: 20px;
    
    --shadow-soft: 0 10px 30px -5px rgba(0, 0, 0, 0.3);
    --shadow-strong: 0 20px 40px -10px rgba(0, 0, 0, 0.5);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    background-color: var(--page-bg);
    color: var(--body-text);
    font-family: var(--font-body);
    font-size: 16px;
    line-height: 1.65;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

h1, h2, h3, h4, h5, h6 {
    font-family: var(--font-heading);
    color: var(--heading-text);
    font-weight: 600;
    line-height: 1.2;
}

p {
    margin-bottom: 24px;
}

p:last-child {
    margin-bottom: 0;
}

a {
    color: inherit;
    text-decoration: none;
    transition: color 0.25s ease, border-color 0.25s ease, background-color 0.25s ease;
}

a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible, textarea:focus-visible {
    outline: 2px solid var(--focus);
    outline-offset: 4px;
}

.text-justify {
    text-align: justify;
}

.container {
    max-width: var(--max-width);
    margin: 0 auto;
    padding: 0 var(--space-inner);
}

img {
    max-width: 100%;
    height: auto;
    display: block;
}

.btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: var(--accent);
    color: var(--accent-contrast);
    padding: 14px 32px;
    font-family: var(--font-heading);
    font-size: 15px;
    font-weight: 700;
    border: none;
    border-radius: var(--radius-sm);
    cursor: pointer;
    transition: background-color 0.2s ease, transform 0.2s ease;
}

.btn-primary:hover {
    background-color: var(--accent-hover);
    transform: translateY(-2px);
}

.btn-outline {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: transparent;
    color: var(--accent);
    border: 1px solid var(--accent);
    padding: 14px 32px;
    font-family: var(--font-heading);
    font-size: 15px;
    font-weight: 600;
    border-radius: var(--radius-sm);
    cursor: pointer;
    transition: all 0.2s ease;
}

.btn-outline:hover {
    background-color: var(--accent);
    color: var(--accent-contrast);
}

.header-nav {
    position: sticky;
    top: 0;
    z-index: 1000;
    background-color: var(--nav-bg);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    min-height: 80px;
}

.brand-logo {
    font-family: var(--font-heading);
    font-size: 22px;
    font-weight: 700;
    color: var(--heading-text);
    letter-spacing: -0.5px;
}

.nav-menu {
    display: flex;
    gap: 32px;
    align-items: center;
}

.nav-menu a {
    font-family: var(--font-body);
    font-size: 14px;
    font-weight: 500;
    color: var(--nav-text);
}

.nav-menu a:hover {
    color: var(--accent);
}

.hero-section {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    background: linear-gradient(145deg, var(--hero-deep), var(--hero-mid), var(--hero-light));
    min-height: 85vh;
    display: flex;
    align-items: center;
}

.hero-section::before,
.hero-section::after {
    content: "";
    position: absolute;
    inset: -20%;
    z-index: -1;
    pointer-events: none;
    border-radius: 50%;
    mix-blend-mode: screen;
}

.hero-section::before {
    background: radial-gradient(ellipse at 75% 40%, var(--hero-glow-1), transparent 60%);
    animation: driftLayerOne 24s ease-in-out infinite alternate;
}

.hero-section::after {
    background: radial-gradient(ellipse at 20% 70%, var(--hero-glow-2), transparent 55%);
    animation: driftLayerTwo 18s ease-in-out infinite alternate;
}

@keyframes driftLayerOne {
    0% { transform: translate(-5%, -5%) scale(1); opacity: 0.7; }
    100% { transform: translate(10%, 10%) scale(1.1); opacity: 1; }
}

@keyframes driftLayerTwo {
    0% { transform: translate(5%, 10%) scale(1.05); opacity: 0.6; }
    100% { transform: translate(-10%, -5%) scale(0.95); opacity: 0.9; }
}

@media (prefers-reduced-motion: reduce) {
    .hero-section::before, .hero-section::after {
        animation: none;
    }
}

.hero-content-stage {
    display: grid;
    grid-template-columns: 1fr;
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    z-index: 10;
    padding: var(--space-section) 0;
}

.hero-content-stage h1 {
    font-size: clamp(40px, 6vw, 64px);
    margin-bottom: 24px;
    letter-spacing: -1px;
    line-height: 1.1;
    color: var(--heading-text);
    text-shadow: 0 2px 10px rgba(0,0,0,0.5);
}

.hero-content-stage p {
    font-size: clamp(16px, 2vw, 18px);
    color: var(--body-text);
    margin-bottom: 40px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.section-wrapper {
    padding: var(--space-section) 0;
}

.bg-a { background-color: var(--section-a); }
.bg-b { background-color: var(--section-b); }
.bg-c { background-color: var(--section-c); }

.about-editorial-split {
    display: grid;
    grid-template-columns: 35% 60%;
    gap: 5%;
    align-items: start;
}

.about-title-rail h2 {
    font-size: clamp(32px, 4vw, 44px);
    letter-spacing: -1px;
    position: sticky;
    top: 120px;
}

.about-content-rail p {
    font-size: 17px;
    color: var(--muted-text);
}

.why-modular-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
}

.why-module {
    padding: 32px;
    background-color: var(--card-bg);
    border-top: 3px solid var(--accent);
    border-radius: 0 0 var(--radius-md) var(--radius-md);
    box-shadow: var(--shadow-soft);
}

.why-module h3 {
    font-size: 20px;
    margin-bottom: 16px;
    color: var(--heading-text);
}

.why-module p {
    color: var(--muted-text);
    font-size: 15px;
    margin-bottom: 0;
}

.section-header-center {
    text-align: center;
    max-width: 600px;
    margin: 0 auto 56px auto;
}

.section-header-center h2 {
    font-size: clamp(32px, 4vw, 44px);
    margin-bottom: 16px;
}

.section-header-center p {
    color: var(--accent);
    font-family: var(--font-heading);
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 14px;
    font-weight: 700;
}

.menu-horizontal-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
}

.dish-card-horizontal {
    display: grid;
    grid-template-columns: 200px 1fr;
    background-color: var(--card-bg);
    border: 1px solid var(--card-border);
    border-radius: var(--radius-md);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.dish-card-horizontal:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-strong);
    border-color: var(--accent);
}

.dish-img-box {
    position: relative;
    width: 100%;
    height: 100%;
    min-height: 200px;
}

.dish-img-box img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.dish-details {
    padding: 32px;
    display: flex;
    flex-direction: column;
}

.dish-cat {
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    font-family: var(--font-heading);
    font-weight: 700;
    color: var(--accent);
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 12px;
}

.dish-cat span:first-child {
    color: var(--muted-text);
}

.dish-title {
    font-size: 20px;
    margin-bottom: 12px;
}

.dish-desc {
    font-size: 14px;
    color: var(--muted-text);
    flex-grow: 1;
    margin-bottom: 0;
}

.reserve-overlap-container {
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
    background-color: var(--card-bg);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-strong);
    border: 1px solid var(--card-border);
    overflow: hidden;
}

.reserve-overlap-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.reserve-text-panel {
    background-color: var(--section-c);
    padding: 56px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.reserve-text-panel h2 {
    font-size: 32px;
    margin-bottom: 24px;
}

.reserve-text-panel p {
    color: var(--muted-text);
}

.reserve-form-panel {
    padding: 56px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-bottom: 24px;
}

.form-group label {
    font-size: 14px;
    font-family: var(--font-heading);
    font-weight: 600;
    color: var(--body-text);
}

.form-group input, 
.form-group select, 
.form-group textarea {
    width: 100%;
    padding: 16px;
    border: 1px solid var(--input-border);
    border-radius: var(--radius-sm);
    background-color: var(--input-bg);
    font-family: var(--font-body);
    font-size: 15px;
    color: var(--input-text);
    transition: all 0.2s ease;
}

.form-group input:focus, 
.form-group select:focus, 
.form-group textarea:focus {
    outline: none;
    border-color: var(--accent);
    background-color: var(--section-strong);
}

.contact-contained {
    max-width: 700px;
    margin: 0 auto;
    background-color: var(--section-c);
    padding: 64px;
    border-radius: var(--radius-lg);
    border: 1px solid var(--card-border);
}

.contact-contained h2 {
    font-size: 32px;
    margin-bottom: 16px;
    text-align: center;
}

.contact-contained > p {
    text-align: center;
    color: var(--muted-text);
    margin-bottom: 40px;
}

.editorial-measure {
    max-width: 800px;
    margin: 0 auto;
}

.editorial-measure h2 {
    font-size: 36px;
    margin-bottom: 40px;
    text-align: center;
}

.editorial-measure h3 {
    font-size: 20px;
    margin: 40px 0 16px 0;
    color: var(--accent);
}

.editorial-measure p {
    color: var(--muted-text);
}

.site-footer {
    background: linear-gradient(180deg, var(--footer-start), var(--footer-end));
    padding: 80px 0 32px 0;
    border-top: 1px solid var(--card-border);
}

.footer-split {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 80px;
    margin-bottom: 64px;
}

.footer-brand h3 {
    font-size: 24px;
    color: var(--heading-text);
    margin-bottom: 16px;
}

.footer-brand p {
    color: var(--footer-text);
    max-width: 400px;
    font-size: 15px;
}

.footer-nav-col h4 {
    font-family: var(--font-heading);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--heading-text);
    margin-bottom: 24px;
}

.footer-links-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.footer-links-list a {
    color: var(--footer-text);
    font-size: 15px;
}

.footer-links-list a:hover {
    color: var(--accent);
}

.footer-copyright {
    padding-top: 32px;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
    font-size: 14px;
    color: var(--footer-text);
}

@media (max-width: 1024px) {
    .menu-horizontal-grid {
        grid-template-columns: 1fr;
    }
    
    .about-editorial-split {
        grid-template-columns: 1fr;
        gap: 32px;
    }
    
    .about-title-rail h2 {
        position: static;
    }
    
    .reserve-overlap-grid {
        grid-template-columns: 1fr;
    }
    
    .footer-split {
        grid-template-columns: 1fr;
        gap: 48px;
    }
}

@media (max-width: 768px) {
    .nav-container {
        flex-direction: column;
        padding: 20px 0;
        gap: 16px;
    }
    
    .nav-menu {
        flex-wrap: wrap;
        justify-content: center;
        gap: 16px 24px;
    }
    
    .why-modular-grid {
        grid-template-columns: 1fr;
    }
    
    .dish-card-horizontal {
        grid-template-columns: 1fr;
    }
    
    .dish-img-box {
        height: 240px;
    }
    
    .reserve-text-panel, .reserve-form-panel {
        padding: 40px 24px;
    }
    
    .contact-contained {
        padding: 40px 24px;
    }
    
    .text-justify {
        text-align: left;
    }
}
</style>
</head>
<body>

<header class="header-nav">
    <div class="container nav-container">
        <div class="brand-logo">Strawberry Kitchen</div>
        <nav class="nav-menu">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#menu">Menu</a>
            <a href="#reserve">Reserve</a>
            <a href="#contact">Contact Us</a>
        </nav>
    </div>
</header>

<main>
    <section id="home" class="hero-section">
        <div class="container">
            <div class="hero-content-stage">
                <h1>Honest Vegetarian Meals Shared Together</h1>
                <p>We prepare simple, thoughtful vegetarian dishes drawing from multiple regional traditions. Join us in a quiet space built for good conversation and relaxed dining.</p>
                <div>
                    <a href="#menu" class="btn-primary">View Menu</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section-wrapper bg-a">
        <div class="container about-editorial-split">
            <div class="about-title-rail">
                <h2>Our Approach</h2>
            </div>
            <div class="about-content-rail">
                <p class="text-justify">Strawberry Kitchen started as a quiet place for neighbors to gather over simple, well-prepared vegetarian meals. We focus on drawing out the natural flavors of vegetables, grains, and legumes using techniques from various regional traditions. Our kitchen takes time with every recipe, ensuring each plate feels honest and unpretentious.</p>
                <p class="text-justify">The dining room reflects this same straightforward philosophy. We maintain a calm, comfortable environment where the focus remains on the food and the people you share it with. Whether you are stopping in for a quick lunch or a long evening meal, you will find a relaxed atmosphere and attentive service.</p>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="section-wrapper bg-b">
        <div class="container">
            <div class="section-header-center">
                <p>Why Choose Us</p>
                <h2>Dining Details</h2>
            </div>
            <div class="why-modular-grid">
                <div class="why-module">
                    <h3>Plant-Based Variety</h3>
                    <p class="text-justify">We offer a rotating selection of vegetarian dishes inspired by multiple cuisines, giving you different flavors to explore on each visit.</p>
                </div>
                <div class="why-module">
                    <h3>Comfortable Setting</h3>
                    <p class="text-justify">Our dining room is designed to be quiet and spacious, providing a relaxed environment for both small and large groups.</p>
                </div>
                <div class="why-module">
                    <h3>Straightforward Service</h3>
                    <p class="text-justify">We prioritize attentive, sensible service. Our menu is easy to navigate, and our team is always ready to answer questions.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="menu" class="section-wrapper bg-a">
        <div class="container">
            <div class="section-header-center">
                <p>Menu Selection</p>
                <h2>Illustrative Menu Selection</h2>
            </div>
            <div class="menu-horizontal-grid">
                <article class="dish-card-horizontal">
                    <div class="dish-img-box">
                        <img src="files/1.jpg" alt="Tomato Basil Gnocchi">
                    </div>
                    <div class="dish-details">
                        <div class="dish-cat">
                            <span>01</span>
                            <span>Italian Inspired</span>
                        </div>
                        <h3 class="dish-title">Tomato Basil Gnocchi</h3>
                        <p class="dish-desc text-justify">Soft potato dumplings rest in a bright, freshly crushed tomato sauce. We fold in torn basil leaves right before serving to maintain their aromatic quality. A light grating of aged vegetarian parmesan adds a gentle saltiness to the finish. This dish relies on the natural sweetness of summer tomatoes and the pillowy texture of carefully rolled gnocchi. It offers a comforting, familiar profile that works well as a main course or shared plate for the table.</p>
                    </div>
                </article>

                <article class="dish-card-horizontal">
                    <div class="dish-img-box">
                        <img src="files/2.jpg" alt="Vegetable Ginger Soba">
                    </div>
                    <div class="dish-details">
                        <div class="dish-cat">
                            <span>02</span>
                            <span>Japanese Inspired</span>
                        </div>
                        <h3 class="dish-title">Vegetable Ginger Soba</h3>
                        <p class="dish-desc text-justify">Chilled buckwheat noodles are tossed with crisp julienned carrots, snow peas, and purple cabbage. The dressing combines toasted sesame oil with freshly grated ginger and a splash of rice vinegar for a sharp, clean finish. We top the bowl with toasted sesame seeds and a few sprigs of cilantro. This preparation highlights the earthy, robust flavor of the soba noodles while keeping the overall dish feeling light and refreshing.</p>
                    </div>
                </article>

                <article class="dish-card-horizontal">
                    <div class="dish-img-box">
                        <img src="files/3.jpg" alt="Cucumber Sesame Sushi">
                    </div>
                    <div class="dish-details">
                        <div class="dish-cat">
                            <span>03</span>
                            <span>Japanese Inspired</span>
                        </div>
                        <h3 class="dish-title">Cucumber Sesame Sushi</h3>
                        <p class="dish-desc text-justify">Short-grain rice is seasoned with a mild vinegar blend and wrapped around crisp cucumber strips. We roll these tightly in toasted nori and slice them into bite-sized pieces. Each roll is finished with a dusting of white sesame seeds for a subtle crunch. Served alongside a traditional soy dipping sauce and a small mound of pickled ginger, this offering provides a clean, precise flavor profile that works beautifully as an appetizer.</p>
                    </div>
                </article>

                <article class="dish-card-horizontal">
                    <div class="dish-img-box">
                        <img src="files/4.jpg" alt="Pear Walnut Quinoa Salad">
                    </div>
                    <div class="dish-details">
                        <div class="dish-cat">
                            <span>04</span>
                            <span>Mediterranean Inspired</span>
                        </div>
                        <h3 class="dish-title">Pear Walnut Quinoa Salad</h3>
                        <p class="dish-desc text-justify">Fluffy white quinoa forms the base of this nutrient-dense bowl, mixed with peppery arugula and tender spinach leaves. We add thinly sliced ripe pears for a natural sweetness that balances the greens. Toasted walnuts provide a rich, earthy crunch. The entire salad is lightly dressed with a simple lemon and olive oil vinaigrette, allowing the distinct flavors of the raw ingredients to remain the central focus of the dish.</p>
                    </div>
                </article>

                <article class="dish-card-horizontal">
                    <div class="dish-img-box">
                        <img src="files/5.jpg" alt="Turmeric Sesame Tofu">
                    </div>
                    <div class="dish-details">
                        <div class="dish-cat">
                            <span>05</span>
                            <span>Asian Fusion</span>
                        </div>
                        <h3 class="dish-title">Turmeric Sesame Tofu</h3>
                        <p class="dish-desc text-justify">Firm tofu is pressed and pan-seared until a golden crust develops on the outside. We glaze the pieces with a mild turmeric and soy reduction, bringing a deep yellow hue and a savory, earthy flavor. The tofu sits on a small bed of steamed bok choy, which provides a clean, crisp contrast to the dense protein. A final garnish of black sesame seeds completes this straightforward, satisfying main dish.</p>
                    </div>
                </article>

                <article class="dish-card-horizontal">
                    <div class="dish-img-box">
                        <img src="files/6.jpg" alt="Creamy Potato Mushroom Soup">
                    </div>
                    <div class="dish-details">
                        <div class="dish-cat">
                            <span>06</span>
                            <span>European Inspired</span>
                        </div>
                        <h3 class="dish-title">Creamy Potato Mushroom Soup</h3>
                        <p class="dish-desc text-justify">Yukon gold potatoes are simmered slowly until they begin to break down, naturally thickening the broth. We incorporate a mix of roasted cremini and shiitake mushrooms, which lend a deep, savory foundation to the soup. A splash of plant-based cream is stirred in at the end to create a rich, velvety texture. Finished with a crack of black pepper and fresh thyme, this bowl is hearty and warming.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="reserve" class="section-wrapper bg-b">
        <div class="container">
            <div class="reserve-overlap-container">
                <div class="reserve-overlap-grid">
                    <div class="reserve-text-panel">
                        <h2>Reserve Your Table</h2>
                        <p class="text-justify">Let us know when you plan to visit. We accept reservations up to a month in advance. For larger groups requiring specific arrangements, providing advance notice helps us prepare the right space in our dining room.</p>
                    </div>
                    <div class="reserve-form-panel">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="name">Guest Name</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <select id="time" name="time" required>
                                    <option value="17:00">5:00 PM</option>
                                    <option value="18:00">6:00 PM</option>
                                    <option value="19:00">7:00 PM</option>
                                    <option value="20:00">8:00 PM</option>
                                    <option value="21:00">9:00 PM</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="guests">Number of Guests</label>
                                <select id="guests" name="guests" required>
                                    <option value="1">1 Person</option>
                                    <option value="2">2 People</option>
                                    <option value="3">3 People</option>
                                    <option value="4">4 People</option>
                                    <option value="5">5 People</option>
                                    <option value="6">6 People</option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-bottom: 0;">
                                <button type="submit" class="btn-primary" style="width: 100%;">Submit Reservation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section-wrapper bg-a">
        <div class="container">
            <div class="contact-contained">
                <h2>Visit Strawberry Kitchen</h2>
                <p class="text-justify">Reach out to our team online to arrange private events, ask about our seasonal ingredients, or request specific dietary accommodations before your visit. We aim to respond to all inquiries within one business day.</p>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="inquiry-email">Email Address</label>
                        <input type="email" id="inquiry-email" name="inquiry-email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <button type="submit" class="btn-outline">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="privacy" class="section-wrapper bg-b">
        <div class="container">
            <div class="editorial-measure text-justify">
                <h2>Privacy Policy</h2>
                <p>We respect your privacy. This document outlines how Strawberry Kitchen handles the information you provide when using our website to browse our menu or submit reservation requests.</p>
                
                <h3>Information Collection</h3>
                <p>We only collect the information necessary to process your reservation requests and contact inquiries. This includes your name, email address, preferred reservation dates, and any messages you send directly through our website forms.</p>
                
                <h3>Use of Information</h3>
                <p>The details you submit are used strictly for managing your dining arrangements and responding to your questions. We do not sell your personal information to third parties or use it for unrelated marketing purposes.</p>
                
                <h3>Data Security</h3>
                <p>We take sensible precautions to protect the information submitted through our website. However, no data transmission over the internet can be guaranteed as completely secure.</p>
                
                <h3>Updates to Policy</h3>
                <p>We may update this policy periodically to reflect changes in our website functionality. Please review this section occasionally to stay informed about how we manage your information.</p>
            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-split">
            <div class="footer-brand">
                <h3>Strawberry Kitchen</h3>
                <p class="text-justify">Vegetarian Multi-Cuisine Restaurant</p>
            </div>
            <div class="footer-nav-col">
                <h4>Useful Links</h4>
                <div class="footer-links-list">
                    <a href="#home">Home</a>
                    <a href="#about">About Us</a>
                    <a href="#menu">Menu</a>
                    <a href="#reserve">Reserve</a>
                    <a href="#why-choose-us">Why Choose Us</a>
                    <a href="#privacy">Privacy Policy</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2026 Strawberry Kitchen. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>
