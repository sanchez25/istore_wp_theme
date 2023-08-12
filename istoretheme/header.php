<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Ibmplexsans.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Ibmplexsanstext.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Ibmplexsansmedium.ttf" as="font" type="font/ttf" crossorigin>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>
<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-block">
                    <div class="header-logo">
                        <a href="/" aria-label="Logo">
                            <img width="80" height="32" class="header-logo-img" src="<?php echo get_template_directory_uri() ?>/img/logo.png)">
                        </a>
                    </div>
                    <div class="header-menu">
                        <div class="header-menu-item">
                            <a href="#">% Акции</a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#">Сервисный центр</a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#">Доставка и оплата</a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#">Trade-in</a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#">Гарантия</a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#">Контакты</a>
                        </div>
                    </div>
                    <div class="header-call">
                        <a href="tel:0800339589">0 800 339 589</a>
                        <div class="call-btn">Заказать звонок</div>
                    </div>
                    <div class="header-work-block">
                        <span>10:00 - 22:00</span>
                        <span>Ежедневно</span>
                    </div>
                    <div class="header-icons">
                        <div class="donat-icon">
                            <a href="#" class="donat-icon-link">
                                <div class="donat-icon-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/wish.webp)"></div>
                                <span class="donat-icon-text">0</span>
                            </a>
                        </div>
                        <div class="search-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/search.svg)"></div>
                        <div class="search-block">
                            <div class="container">
                                <form method="get" class="search-form-main" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <button type="submit" class="search-submit-main" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/magnifer.svg);"></button>
                                    <input type="search" class="search-field-main" placeholder="Что вы ищете?" value="<?php echo get_search_query() ?>">
                                    <div class="search-block-close" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/close.png);"></div>
                                </form>  
                                <div class="result-search-form">
                                    <div class="result-top">
                                        <a href="#">Смартфоны iPhone</a>
                                        <a href="#">iPhone 13 Pro Max</a>
                                        <a href="#">iPhone 13 Pro</a>
                                        <a href="#">iPhone 13</a>
                                        <a href="#">iPhone 13 mini</a>
                                    </div>
                                    <div class="result-bottom">
                                        <span class="result-bottom-title">Популярные товары</span>
                                        <div class="result-bottom-content">
                                            <a href="#">
                                                <div class="result-bottom-content-img">
                                                    <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-12-pro-128.jpg" width="120" height="120" alt="Apple iPhone 12 Pro 128 ГБ (Тихоокеанский синий)">
                                                </div>
                                                <span class="result-bottom-content-title">Apple iPhone 12 Pro 128 ГБ (Тихоокеанский синий)</span>
                                            </a>
                                            <a href="#">
                                                <div class="result-bottom-content-img">
                                                    <img src="<?php echo get_template_directory_uri() ?>/img/catalog/airpods-2.jpg" width="120" height="120" alt="Apple AirPods 2, Bluetooth">
                                                </div>
                                                <span class="result-bottom-content-title">Apple AirPods 2, Bluetooth</span>
                                            </a>
                                            <a href="#">
                                                <div class="result-bottom-content-img">
                                                    <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-12-pro-max-128-gb.jpg" width="120" height="120" alt="Apple iPhone 12 Pro Max 128 ГБ (Тихоокеанский синий)">
                                                </div>
                                                <span class="result-bottom-content-title">Apple iPhone 12 Pro Max 128 ГБ (Тихоокеанский синий)</span>
                                            </a>
                                            <a href="#">
                                                <div class="result-bottom-content-img">
                                                    <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-11-128-gb-purple.jpg" width="120" height="120" alt="Apple iPhone 11 128 ГБ (фиолетовый)">
                                                </div>
                                                <span class="result-bottom-content-title">Apple iPhone 11 128 ГБ (фиолетовый)</span>
                                            </a>
                                            <a href="#">
                                                <div class="result-bottom-content-img">
                                                    <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-11-128-gb-black.jpg" width="120" height="120" alt="Apple iPhone 11 128 ГБ (черный)">
                                                </div>
                                                <span class="result-bottom-content-title">Apple iPhone 11 128 ГБ (черный)</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="basket-icon">
                            <span class="basket-count">0</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.99835 16C4.89865 16 4.0089 16.9 4.0089 18C4.0089 19.1 4.89865 20 5.99835 20C7.09805 20 7.9978 19.1 7.9978 18C7.9978 16.9 7.09805 16 5.99835 16ZM0 1C0 1.55 0.449876 
                                    2 0.999725 2H1.99945L5.59846 9.59L4.24883 12.03C3.51903 13.37 4.47877 15 5.99835 15H16.9953C17.5452 15 17.995 14.55 17.995 14C17.995 13.45 17.5452 13 16.9953 13H5.99835L7.09805 
                                    11H14.546C15.2958 11 15.9556 10.59 16.2955 9.97L19.8745 3.48C19.9588 3.32843 20.002 3.15747 19.9999 2.98406C19.9978 2.81064 19.9505 2.64077 19.8627 2.49126C19.7748 2.34175 19.6494 
                                    2.21778 19.499 2.13162C19.3485 2.04546 19.1781 2.00009 19.0048 2H4.20884L3.53903 0.570001C3.45868 0.399307 3.33138 0.255042 3.17203 0.154095C3.01269 0.0531475 2.82789 -0.000302861 
                                    2.63927 1.29085e-06H0.999725C0.449876 1.29085e-06 0 0.450001 0 1ZM15.9956 16C14.8959 16 14.0061 16.9 14.0061 18C14.0061 19.1 14.8959 20 15.9956 20C17.0953 20 17.995 19.1 17.995 
                                    18C17.995 16.9 17.0953 16 15.9956 16Z" fill="#E6E6E6">
                                </path>
                            </svg>
                        </div>
                        <div class="basket-block">
                            <span>Корзина пуста</span>
                        </div>
                        <div class="personal-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/personal-area.svg);"></div>
                        <div class="personal-block">
                            <div class="personal-block-item">
                                <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2954 7.61805L23.036 10.3333H21.3081L22.2954 7.61805Z" fill="#808080" stroke="#808080" stroke-width="3" stroke-linecap="round"></path>
                                    <path d="M3.12893 16.7847L3.86946 19.5H2.14155L3.12893 16.7847Z" fill="#808080" stroke="#808080" stroke-width="3" stroke-linecap="round"></path>
                                    <path d="M1.6665 11.8333L22.4998 1.83333" stroke="#808080" stroke-width="3" stroke-linecap="round"></path>
                                    <path d="M12.5 5.16666V24.3333" stroke="#808080" stroke-width="3" stroke-linecap="round"></path>
                                    <path d="M5 24.3333H19.1667" stroke="#808080" stroke-width="3" stroke-linecap="round"></path>
                                </svg>
                                <a href="#" class="compare-link">
                                    <span>Сравнение</span>
                                    <span class="compare-count">0</span>
                                </a>
                            </div>
                            <div class="personal-block-item">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 0C5.60722 0 0 5.60722 0 12.5C0 19.3928 5.60722 25 12.5 25C19.3928 25 25 19.3928 25 12.5C25 5.60722 19.3928 0 12.5 0ZM13.5416 13.3499V16.6666C13.5416 
                                        17.2417 13.076 17.7084 12.5 17.7084C11.924 17.7084 11.4584 17.2417 11.4584 16.6666V13.3499C10.2489 12.9187 9.375 11.7729 9.375 10.4166C9.375 8.6937 10.7771 7.2916 12.5 
                                        7.2916C14.2229 7.2916 15.625 8.6937 15.625 10.4166C15.625 11.7729 14.7511 12.9187 13.5416 13.3499Z" fill="#808080">
                                    </path>
                                </svg>
                                <a href="#" class="compare-link">
                                    <span>Регистрация</span>
                                </a>
                            </div>
                            <div class="personal-block-item">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4606 0C5.94021 0 0.592488 4.99316 0.0175781 11.3636H10.188V7.95448C10.188 7.49546 10.4652 7.08077 10.889 6.90453C11.3141 6.7285 11.8027 6.82609 12.1277 
                                        7.1511L16.6731 11.6967C17.1175 12.1409 17.1175 12.859 16.6731 13.3034L12.1277 17.8488C11.8027 18.1738 11.3141 18.2716 10.889 18.0954C10.4652 17.9194 10.188 17.5045 
                                        10.188 17.0455V13.6364H0.0175781C0.592488 20.0068 5.94021 24.9999 12.4606 24.9999C19.3641 24.9999 24.9607 19.4034 24.9607 12.5001C24.9607 5.59658 19.3641 0 12.4606 0V0Z" 
                                        fill="#808080">
                                    </path>
                                </svg>
                                <a href="#" class="compare-link">
                                    <span>Вход</span>
                                </a>
                            </div>
                        </div>
                        <div class="lang-btn">
                            <span>РУС</span>
                        </div>
                        <div class="menu-mobile-button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="main-menu">
                    <div class="main-menu-item">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/iphone.png" width="20" height="20" alt="iPhone">
                            <span class="main-menu-item-title">iPhone</span>
                        </a>
                        <div class="sub-menu">
                            <div class="container">
                                <div class="sub-menu-block">
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-13-pro-max-blue.png" width="59" height="70" alt="iPhone 13 Pro Max">
                                            </div>
                                            <span class="sub-menu-title">iPhone 13 Pro Max</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-13-pro-gold.png" width="59" height="70" alt="iPhone 13 Pro">
                                            </div>
                                            <span class="sub-menu-title">iPhone 13 Pro</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-13-pink.png" width="59" height="70" alt="iPhone 13">
                                            </div>
                                            <span class="sub-menu-title">iPhone 13</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-13-mini-starlight.png" width="59" height="70" alt="iPhone 13 mini">
                                            </div>
                                            <span class="sub-menu-title">iPhone 13 mini</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-12-pro-max-blue.png" width="59" height="70" alt="iPhone 12 Pro Max">
                                            </div>
                                            <span class="sub-menu-title">iPhone 12 Pro Max</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-12-pro-silver.png" width="59" height="70" alt="iPhone 12 Pro">
                                            </div>
                                            <span class="sub-menu-title">iPhone 12 Pro</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-12-green.png" width="59" height="70" alt="iPhone 12">
                                            </div>
                                            <span class="sub-menu-title">iPhone 12</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-12-mini-black.png" width="59" height="70" alt="iPhone 12 mini">
                                            </div>
                                            <span class="sub-menu-title">iPhone 12 mini</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-11-pro-max.png" width="35" height="49" alt="iPhone 11 Pro Max">
                                            </div>
                                            <span class="sub-menu-title">iPhone 11 Pro Max</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-11-pro.png" width="34" height="45" alt="iPhone 11 Pro">
                                            </div>
                                            <span class="sub-menu-title">iPhone 11 Pro</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-11.png" width="35" height="48" alt="iPhone 11">
                                            </div>
                                            <span class="sub-menu-title">iPhone 11</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-xr.png" width="31" height="48" alt="iPhone Xr">
                                            </div>
                                            <span class="sub-menu-title">iPhone Xr</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-se-2020.jpg" width="70" height="45" alt="iPhone SE">
                                            </div>
                                            <span class="sub-menu-title">iPhone SE (новый)</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/iphone-supptort.png" width="50" height="50" alt="iPhone Б/У">
                                            </div>
                                            <span class="sub-menu-title">iPhone Б/У</span>
                                        </a>
                                    </div>
                                    <div class="second-sub-menu">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-menu.jpg" width="80" height="80" alt="Аксессуары iPhone">
                                        <span class="second-sub-menu-title">Аксессуары iPhone</span>
                                        <div class="second-sub-menu-items">
                                            <div class="second-sub-menu-item">
                                                <a href="#">Чехлы айфон</a>
                                            </div>
                                            <div class="second-sub-menu-item">
                                                <a href="#">Защитные стекла</a>
                                            </div>
                                            <div class="second-sub-menu-item">
                                                <a href="#">Кабели и переходники</a>
                                            </div>
                                            <div class="second-sub-menu-item">
                                                <a href="#">Зарядные устройства</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu-item">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/mac.png" width="20" height="20" alt="Mac">
                            <span class="main-menu-item-title">Mac</span>
                        </a>
                        <div class="sub-menu">
                            <div class="container">
                                <div class="sub-menu-block">
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/macbook-pro.png" width="70" height="39" alt="MacBook Pro">
                                            </div>
                                            <span class="sub-menu-title">MacBook Pro</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/macbook-air.png" width="62" height="36" alt="MacBook Air">
                                            </div>
                                            <span class="sub-menu-title">MacBook Air</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/imac.png" width="62" height="49" alt="iMac">
                                            </div>
                                            <span class="sub-menu-title">iMac</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/mac-pro.jpeg" width="70" height="53" alt="Mac Pro">
                                            </div>
                                            <span class="sub-menu-title">Mac Pro</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/pro-display.jpeg" width="70" height="53" alt="Дисплеи и мониторы для Apple Mac">
                                            </div>
                                            <span class="sub-menu-title">Дисплеи и мониторы для Apple Mac</span>
                                        </a>
                                    </div>
                                    <div class="second-sub-menu">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-menu-mac.jpg" width="80" height="80" alt="Аксессуары Mac">
                                        <span class="second-sub-menu-title">Аксессуары Mac</span>
                                        <div class="second-sub-menu-items">
                                            <div class="second-sub-menu-item">
                                                <a href="#">Кабели и переходники</a>
                                            </div>
                                            <div class="second-sub-menu-item">
                                                <a href="#">Зарядные устройства</a>
                                            </div>
                                            <div class="second-sub-menu-item">
                                                <a href="#">Чехлы для MacBook</a>
                                            </div>
                                            <div class="second-sub-menu-item">
                                                <a href="#">Клавиатуры, мыши</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu-item">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/ipad.png" width="20" height="20" alt="iPad">
                            <span class="main-menu-item-title">iPad</span>
                        </a>
                        <div class="sub-menu">
                            <div class="container">
                                <div class="sub-menu-block">
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/ipad-pro-12.png" width="44" height="50" alt="iPad Pro 12,9">
                                            </div>
                                            <span class="sub-menu-title">iPad Pro 12,9"</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/ipad-pro-11.png" width="38" height="44" alt="iPad Pro 11">
                                            </div>
                                            <span class="sub-menu-title">iPad Pro 11"</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/ipad-air.jpg" width="37" height="44" alt="iPad Air">
                                            </div>
                                            <span class="sub-menu-title">iPad Air</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/ipad-mini.png" width="37" height="44" alt="iPad mini">
                                            </div>
                                            <span class="sub-menu-title">iPad mini</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/ipad-10.png" width="37" height="45" alt="iPad (новый) 10,2">
                                            </div>
                                            <span class="sub-menu-title">iPad (новый) 10,2"</span>
                                        </a>
                                    </div>
                                    <div class="second-sub-menu">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-menu-ipad.jpg" width="80" height="80" alt="Аксессуары iPad">
                                        <span class="second-sub-menu-title">Аксессуары iPad</span>
                                        <div class="second-sub-menu-items">
                                            <div class="second-sub-menu-item">
                                                <a href="#">Защитные стекла</a>
                                            </div>
                                            <div class="second-sub-menu-item">
                                                <a href="#">Чехлы для iPad</a>
                                            </div>
                                            <div class="second-sub-menu-item">
                                                <a href="#">Стилус</a>
                                            </div>
                                            <div class="second-sub-menu-item">
                                                <a href="#">Кабели и переходники</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu-item">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/watch.png" width="20" height="20" alt="Apple Watch">
                            <span class="main-menu-item-title">Apple Watch</span>
                        </a>
                        <div class="sub-menu">
                            <div class="container">
                                <div class="sub-menu-block">
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/apple-watch-44-blue-7.jpeg" width="50" height="50" alt="Apple Watch Series 7">
                                            </div>
                                            <span class="sub-menu-title">Apple Watch Series 7</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/apple-watch-se.jpg" width="50" height="50" alt="Apple Watch SE">
                                            </div>
                                            <span class="sub-menu-title">Apple Watch SE</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/apple-watch-red-6.jpg" width="50" height="50" alt="Apple Watch Series 6">
                                            </div>
                                            <span class="sub-menu-title">Apple Watch Series 6</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/apple-watch-red-5.png" width="50" height="50" alt="Apple Watch Series 5">
                                            </div>
                                            <span class="sub-menu-title">Apple Watch Series 5</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/apple-watch-3.png" width="50" height="50" alt="Apple Watch Series 3">
                                            </div>
                                            <span class="sub-menu-title">Apple Watch Series 3</span>
                                        </a>
                                    </div>
                                    <div class="second-sub-menu">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-menu-watch.jpg" width="80" height="80" alt="Аксессуары Apple Watch">
                                        <span class="second-sub-menu-title">Аксессуары Apple Watch</span>
                                        <div class="second-sub-menu-items">
                                            <div class="second-sub-menu-item">
                                                <a href="#">Ремешки</a>
                                            </div>
                                            <div class="second-sub-menu-item">
                                                <a href="#">Кабель Apple Magnetic</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu-item">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/air-pods.png" width="20" height="20" alt="AirPods">
                            <span class="main-menu-item-title">AirPods</span>
                        </a>
                        <div class="sub-menu">
                            <div class="container">
                                <div class="sub-menu-block">
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/airpods-2-cat.jpg" width="70" height="45" alt="Airpods 2">
                                            </div>
                                            <span class="sub-menu-title">Airpods 2</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/airpods-3.jpeg" width="70" height="70" alt="Airpods 3">
                                            </div>
                                            <span class="sub-menu-title">Airpods 3</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/airpods-pro.jpg" width="70" height="45" alt="Airpods Pro">
                                            </div>
                                            <span class="sub-menu-title">Airpods Pro</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/airpods-max.jpg" width="70" height="45" alt="AirPods Max">
                                            </div>
                                            <span class="sub-menu-title">AirPods Max</span>
                                        </a>
                                    </div>
                                    <div class="second-sub-menu">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-menu-airpods.jpg" width="75" height="80" alt="Аксессуары AirPods">
                                        <span class="second-sub-menu-title">Аксессуары AirPods</span>
                                        <div class="second-sub-menu-items">
                                            <div class="second-sub-menu-item">
                                                <a href="#">Чехлы</a>
                                            </div>
                                            <div class="second-sub-menu-item">
                                                <a href="#">Зарядные устройства</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu-item">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/accessories.png" width="20" height="20" alt="Аксессуары">
                            <span class="main-menu-item-title">Аксессуары</span>
                        </a>
                        <div class="sub-menu-last">
                            <div class="container">
                                <div class="sub-menu-block-last">
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/airtag.jpg" width="70" height="58" alt="AirTag">
                                            </div>
                                            <span class="sub-menu-title">AirTag</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/cables.png" width="50" height="50" alt="Кабели и переходники">
                                            </div>
                                            <span class="sub-menu-title">Кабели и переходники</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/glasses.png" width="50" height="50" alt="Защитные стекла">
                                            </div>
                                            <span class="sub-menu-title">Защитные стекла</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/charger.png" width="50" height="50" alt="Зарядные устройства">
                                            </div>
                                            <span class="sub-menu-title">Зарядные устройства</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/straps.png" width="50" height="50" alt="Ремешки для Apple Watch">
                                            </div>
                                            <span class="sub-menu-title">Ремешки для Apple Watch</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/mouse.png" width="50" height="50" alt="Клавиатуры, мыши и пульты">
                                            </div>
                                            <span class="sub-menu-title">Клавиатуры, мыши и пульты</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/external-drives.png" width="50" height="50" alt="Внешние накопители">
                                            </div>
                                            <span class="sub-menu-title">Внешние накопители</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/apple-tv.png" width="50" height="50" alt="Сетевое оборудование и Apple TV">
                                            </div>
                                            <span class="sub-menu-title">Сетевое оборудование и Apple TV</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/holder.png" width="50" height="50" alt="Держатели | Док-станции">
                                            </div>
                                            <span class="sub-menu-title">Держатели | Док-станции</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/toys.png" width="50" height="50" alt="Игрушки">
                                            </div>
                                            <span class="sub-menu-title">Игрушки</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/playstation.jpg" width="70" height="70" alt="Sony Playstation">
                                            </div>
                                            <span class="sub-menu-title">Sony Playstation</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/headphones.png" width="20" height="20" alt="Наушники">
                                            </div>
                                            <span class="sub-menu-title">Наушники</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/acoustics.png" width="70" height="44" alt="Акустика">
                                            </div>
                                            <span class="sub-menu-title">Акустика</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu-item">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/covers.png" width="20" height="20" alt="Чехлы и сумки">
                            <span class="main-menu-item-title">Чехлы и сумки</span>
                        </a>
                        <div class="sub-menu-last">
                            <div class="container">
                                <div class="sub-menu-block-last">
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/covers-iphone.png" width="50" height="50" alt="Чехлы для iPhone">
                                            </div>
                                            <span class="sub-menu-title">Чехлы для iPhone</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/covers-ipad.png" width="50" height="50" alt="Чехлы для iPad">
                                            </div>
                                            <span class="sub-menu-title">Чехлы для iPad</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/covers-mac.png" width="50" height="50" alt="Чехлы для ноутбуков Apple">
                                            </div>
                                            <span class="sub-menu-title">Чехлы для ноутбуков Apple</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/handbags-mac.png" width="50" height="50" alt="Сумки для ноутбуков Apple">
                                            </div>
                                            <span class="sub-menu-title">Сумки для ноутбуков Apple</span>
                                        </a>
                                    </div>
                                    <div class="sub-menu-item">
                                        <a href="#">
                                            <div class="sub-menu-item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/img/catalog/handbags-mac.png" width="70" height="45" alt="Чехлы для AirPods">
                                            </div>
                                            <span class="sub-menu-title">Чехлы для AirPods</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-border"></div>
                    <div class="main-menu-last">
                        <div class="main-menu-last-btn">
                            <div class="personal-icon-menu" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/personal-area.svg);"></div>
                            <span class="main-menu-last-btn-title">Личный кабинет</span>
                            <div id="menu-personal" class="dropdown-menu">
                                <div class="personal-block-item">
                                    <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.2954 7.61805L23.036 10.3333H21.3081L22.2954 7.61805Z" fill="#808080" stroke="#808080" stroke-width="3" stroke-linecap="round"></path>
                                        <path d="M3.12893 16.7847L3.86946 19.5H2.14155L3.12893 16.7847Z" fill="#808080" stroke="#808080" stroke-width="3" stroke-linecap="round"></path>
                                        <path d="M1.6665 11.8333L22.4998 1.83333" stroke="#808080" stroke-width="3" stroke-linecap="round"></path>
                                        <path d="M12.5 5.16666V24.3333" stroke="#808080" stroke-width="3" stroke-linecap="round"></path>
                                        <path d="M5 24.3333H19.1667" stroke="#808080" stroke-width="3" stroke-linecap="round"></path>
                                    </svg>
                                    <a href="#" class="compare-link">
                                        <span>Сравнение</span>
                                        <span class="compare-count">0</span>
                                    </a>
                                </div>
                                <div class="personal-block-item">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5 0C5.60722 0 0 5.60722 0 12.5C0 19.3928 5.60722 25 12.5 25C19.3928 25 25 19.3928 25 12.5C25 5.60722 19.3928 0 12.5 0ZM13.5416 13.3499V16.6666C13.5416 
                                            17.2417 13.076 17.7084 12.5 17.7084C11.924 17.7084 11.4584 17.2417 11.4584 16.6666V13.3499C10.2489 12.9187 9.375 11.7729 9.375 10.4166C9.375 8.6937 10.7771 7.2916 12.5 
                                            7.2916C14.2229 7.2916 15.625 8.6937 15.625 10.4166C15.625 11.7729 14.7511 12.9187 13.5416 13.3499Z" fill="#808080">
                                        </path>
                                    </svg>
                                    <a href="#" class="compare-link">
                                        <span>Регистрация</span>
                                    </a>
                                </div>
                                <div class="personal-block-item">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4606 0C5.94021 0 0.592488 4.99316 0.0175781 11.3636H10.188V7.95448C10.188 7.49546 10.4652 7.08077 10.889 6.90453C11.3141 6.7285 11.8027 6.82609 12.1277 
                                            7.1511L16.6731 11.6967C17.1175 12.1409 17.1175 12.859 16.6731 13.3034L12.1277 17.8488C11.8027 18.1738 11.3141 18.2716 10.889 18.0954C10.4652 17.9194 10.188 17.5045 
                                            10.188 17.0455V13.6364H0.0175781C0.592488 20.0068 5.94021 24.9999 12.4606 24.9999C19.3641 24.9999 24.9607 19.4034 24.9607 12.5001C24.9607 5.59658 19.3641 0 12.4606 0V0Z" 
                                            fill="#808080">
                                        </path>
                                    </svg>
                                    <a href="#" class="compare-link">
                                        <span>Вход</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu-last">
                        <div class="main-menu-last-btn">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.99835 16C4.89865 16 4.0089 16.9 4.0089 18C4.0089 19.1 4.89865 20 5.99835 20C7.09805 20 7.9978 19.1 7.9978 18C7.9978 16.9 7.09805 16 5.99835 16ZM0 1C0 1.55 0.449876 2 0.999725 2H1.99945L5.59846 9.59L4.24883 12.03C3.51903 13.37 4.47877 15 5.99835 15H16.9953C17.5452 15 17.995 14.55 17.995 14C17.995 13.45 17.5452 13 16.9953 13H5.99835L7.09805 11H14.546C15.2958 11 15.9556 10.59 16.2955 9.97L19.8745 3.48C19.9588 3.32843 20.002 3.15747 19.9999 2.98406C19.9978 2.81064 19.9505 2.64077 19.8627 2.49126C19.7748 2.34175 19.6494 2.21778 19.499 2.13162C19.3485 2.04546 19.1781 2.00009 19.0048 2H4.20884L3.53903 0.570001C3.45868 0.399307 3.33138 0.255042 3.17203 0.154095C3.01269 0.0531475 2.82789 -0.000302861 2.63927 1.29085e-06H0.999725C0.449876 1.29085e-06 0 0.450001 0 1ZM15.9956 16C14.8959 16 14.0061 16.9 14.0061 18C14.0061 19.1 14.8959 20 15.9956 20C17.0953 20 17.995 19.1 17.995 18C17.995 16.9 17.0953 16 15.9956 16Z" fill="#E6E6E6"></path>
                            </svg>
                            <span class="main-menu-last-btn-title">Корзина</span>
                            <div id="menu-basket" class="dropdown-menu">
                                <span>Корзина пуста</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog-mobile">
            <div class="catalog-mobile-block">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18 0H0V4H18L20 2L18 0ZM17 3C17.5523 3 18 2.55228 18 2C18 1.44772 17.5523 1 17 1C16.4477 1 16 1.44772 16 2C16 2.55228 16.4477 3 17 3Z" fill="white"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18 8H0V12H18L20 10L18 8ZM17 11C17.5523 11 18 10.5523 18 10C18 9.44772 17.5523 9 17 9C16.4477 9 16 9.44772 16 10C16 10.5523 16.4477 11 17 11Z" fill="white"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18 16H0V20H18L20 18L18 16ZM17 19C17.5523 19 18 18.5523 18 18C18 17.4477 17.5523 17 17 17C16.4477 17 16 17.4477 16 18C16 18.5523 16.4477 19 17 19Z" fill="white"></path>
                </svg>
                <span>Каталог товаров</span>
                <div class="down-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/down.svg);"></div>
            </div>
            <div class="catalog-mobile-menu">
                <a href="#" class="catalog-mobile-menu-item">
                    <div class="catalog-mobile-menu-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/menu/iphone.png" width="20" height="20" alt="iPhone">
                        <span class="main-menu-item-title">iPhone</span>
                    </div>
                    <div class="catalog-mobile-menu-right" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/right.svg);"></div>
                </a>
                <a href="#" class="catalog-mobile-menu-item">
                    <div class="catalog-mobile-menu-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/menu/mac.png" width="20" height="20" alt="Mac">
                        <span class="main-menu-item-title">Mac</span>
                    </div>
                    <div class="catalog-mobile-menu-right" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/right.svg);"></div>
                </a>
                <a href="#" class="catalog-mobile-menu-item">
                    <div class="catalog-mobile-menu-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/menu/ipad.png" width="20" height="20" alt="iPad">
                        <span class="main-menu-item-title">iPad</span>
                    </div>
                    <div class="catalog-mobile-menu-right" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/right.svg);"></div>
                </a>
                <a href="#" class="catalog-mobile-menu-item">
                    <div class="catalog-mobile-menu-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/menu/watch.png" width="20" height="20" alt="Apple Watch">
                        <span class="main-menu-item-title">Apple Watch</span>
                    </div>
                    <div class="catalog-mobile-menu-right" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/right.svg);"></div>
                </a>
                <a href="#" class="catalog-mobile-menu-item">
                    <div class="catalog-mobile-menu-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/menu/air-pods.png" width="20" height="20" alt="AirPods">
                        <span class="main-menu-item-title">AirPods</span>
                    </div>
                    <div class="catalog-mobile-menu-right" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/right.svg);"></div>
                </a>
                <a href="#" class="catalog-mobile-menu-item">
                    <div class="catalog-mobile-menu-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/menu/accessories.png" width="20" height="20" alt="Аксессуары">
                        <span class="main-menu-item-title">Аксессуары</span>
                    </div>
                    <div class="catalog-mobile-menu-right" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/right.svg);"></div>
                </a>
                <a href="#" class="catalog-mobile-menu-item">
                    <div class="catalog-mobile-menu-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/menu/covers.png" width="20" height="20" alt="Чехлы и сумки">
                        <span class="main-menu-item-title">Чехлы и сумки</span>
                    </div>
                    <div class="catalog-mobile-menu-right" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/right.svg);"></div>
                </a>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="close-mobile-menu" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/close-menu.svg)";></div>
            <div class="mobile-menu-call">
                <a href="tel:0800330334" class="mobile-menu-number">0 800 330 334</a>
            </div>
            <div class="mobile-menu-time">
                <span>10:00 - 22:00</span>
                <span>Ежедневно</span>
            </div>
            <a href="#" class="call-btn-mobile">Заказать звонок</a>
            <div class="mobile-menu-items">
                <a href="#" class="mobile-menu-item-link">% Акции</a>
                <a href="#" class="mobile-menu-item-link">Сервисный центр</a>
                <a href="#" class="mobile-menu-item-link">Доставка и оплата</a>
                <a href="#" class="mobile-menu-item-link">Trade-in</a>
                <a href="#" class="mobile-menu-item-link">Гарантия</a>
                <a href="#" class="mobile-menu-item-link">Контакты</a>
            </div>
        </div>
    </header>
