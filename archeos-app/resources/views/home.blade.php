<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Archeos - Leader des équipementiers agricoles au Bénin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo-archeos.png') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('base/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/main.css') }}">
</head>

<body>

    <!-- preloader start -->
    <div id="preloader">
        <div class="bd-loader-inner">
            <div class="bd-loader">
                <span class="bd-loader-item"></span>
                <span class="bd-loader-item"></span>
                <span class="bd-loader-item"></span>
                <span class="bd-loader-item"></span>
                <span class="bd-loader-item"></span>
            </div>
        </div>
    </div>
    <!-- preloader start -->

    <!-- Back to top start -->
    <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top end -->

    <!-- search area start -->
    <div class="df-search-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="df-search-form">
                        <div class="df-search-close text-center mb-20">
                            <button class="df-search-close-btn df-search-close-btn"></button>
                        </div>
                        <form action="/search">
                            <div class="df-search-input mb-10">
                                <input type="text" placeholder="Recherche...">
                                <button type="submit"><i class="icon-search"></i></button>
                            </div>
                            <div class="df-search-category">
                                <span>Rechercher un de nos produits. </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- search area end -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="/">
                                <img src="{{ asset('/landscape-archeos-logo.png') }}" alt="Header Logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="offcanvas__search mb-25">
                        <p class="text-white">We assist West African farmers in transitioning to modern, connected
                            agriculture through IoT technology. Archeos is also dedicated to the design, production, and
                            marketing of connected agricultural equipment and tools that promote environmentally
                            friendly and resilient farming practices.</p>
                    </div>
                    <div class="mobile-menu fix mb-40"></div>
                    <div class="offcanvas__contact mt-30 mb-20">
                        <h4>Contacts</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Rue 12, Qtier Zontori, Djougou</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+22965166797">+229 65166797</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+229-65166797"><span
                                            class="mailto:support@archeos.africa">support@archeos.africa</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas__social">
                        <ul>
                            <li><a href="https://x.com/soubabyarcheos"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- Header area start -->
    <header>
        <div class="container-fluid bg-color-1">
            <div class="header-top">
                <div class="header-top-contact-info">
                    <span class="email p-relative"><a href="mailto:info@gramen.com">contact@archeos.africa</a></span>
                    <span class="time p-relative">Heure: Lundi - Samedi: 7H.00 - 18H.00
                    </span>
                </div>
                <div class="header-top-socials">
                    <span><a href="https://x.com/soubabyarcheos"><i class="fab fa-twitter"></i></a></span>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header-area">
            <div class="large-container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="{{ asset('/landscape-archeos-logo.png') }}" alt="header logo">
                                </a>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end">
                            <div class="mean__menu-wrapper d-none d-lg-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active">
                                                <a href="/">Accueil</a>
                                            </li>
                                            <li>
                                                <a href="/#about">A Propos</a>
                                            </li>
                                            <li>
                                                <a href="/Service">Services</a>
                                                <ul class="submenu">
                                                    <li><a href=/Nos-Condiments">Nos Produits Agricoles</a></li>
                                                    <li><a href="/Nos-Equipements">Nos Equipements</a></li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="/Blogs">Publications</a>
                                            </li>
                                            <li class="">
                                                <a href="http://souba.archeos.africa/">Souba</a>
                                            </li>
                                            <li>
                                                <a href="/#Contacts">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- for wp -->
                                    <div class="header__hamburger ml-50 d-none">
                                        <button type="button" class="hamburger-btn offcanvas-open-btn">
                                            <span>01</span>
                                            <span>01</span>
                                            <span>01</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="search-toggle-open header-search my-auto">
                                <div class="search-icon">
                                    <i class="icon-search"></i>
                                </div>
                            </div>
                            <div class="header-shopping-cart my-auto">
                                <div class="cart-icon">
                                    <a href="/Store"><i class="icon-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="header-action d-none d-xl-inline-flex gap-5">
                                <div class="header-link">
                                    <a class="primary-btn-1 btn-hover" href="/Devis">
                                        DEMANDER UN DEVIS &nbsp; | <i class="icon-right-arrow"></i>
                                        <span style="top: 147.172px; left: 108.5px;"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <a class="bar-icon" href="javascript:void(0)">
                                        <i class="fa-light fa-bars-sort"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->


    <main>

        <!-- Banner area start -->
        <section class="banner-section p-relative fix">
            <div class="swiper banner-active">
                <div class="swiper-wrapper" style="height: auto;">
                    <!-- block -->
                    <div class="swiper-slide">
                        <div class="banner-main" data-background="{{ asset('imgs/archeos-banner1.png') }}">
                            <div class="large-container">
                                <div class="banner-area p-relative z-3 wow img-custom-anim-left animated"
                                    data-wow-delay="1500ms">
                                    <span class="p-relative banner-sub-title">Agriculture Connectée</span>
                                    <h1 class="banner-title">Modernisez votre production agricole.
                                    </h1>
                                    <p class="banner-text">Nous vous appuyons pour le choix des outils d’agriculture
                                        connectée et la conception d’outils d’agriculture connectés sur mesure pour
                                        votre exploitation agricole.</p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-shape-area">
                            <div class="shape-5" data-background="{{ asset('/logo-archeos-croped.png') }}"></div>
                        </div>
                    </div>
                    <!-- block -->
                    <div class="swiper-slide">
                        <div class="banner-main" data-background="{{ asset('imgs/archeos-banner2.png') }}">
                            <div class="large-container">
                                <div class="banner-area p-relative z-3 wow img-custom-anim-left animated"
                                    data-wow-delay="2500ms">
                                    <span class="p-relative banner-sub-title">Manger sain & equilibré</span>
                                    <h1 class="banner-title">Nourrissez vous dans nos marchés</h1>
                                    <p class="banner-text">Grace à nos partenaires et notre productions nous vous
                                        offrons des produits agricoles de grande qualité dans nos magasins physique et
                                        en ligne suivi d'une livraison gratuite.</p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-shape-area">
                            <div class="shape-5" data-background="{{ asset('/logo-archeos-croped.png') }}"></div>
                        </div>
                    </div>
                    <!-- block -->
                    <div class="swiper-slide">
                        <div class="banner-main" data-background="{{ asset('imgs/archeos-banner3.jpg') }}">
                            <div class="large-container">
                                <div class="banner-area p-relative z-3 wow img-custom-anim-left animated"
                                    data-wow-delay="3000ms">
                                    <span class="p-relative banner-sub-title">Qualité & Professionnalisme</span>
                                    <h1 class="banner-title">Faites appelles à notres expertises</h1>
                                    <p class="banner-text">Conseil agricole, services informatiques, électronique et
                                        conceptions électroniques, consultation IoT, blockchain, etc. Nous sommes à
                                        votre disposition 24h/24.</p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-shape-area">
                            <div class="shape-5" data-background="{{ asset('/logo-archeos-croped.png') }}"></div>
                        </div>
                    </div>
                    <!-- block -->
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="banner-dot-inner">
                <div class="banner-dot"></div>
            </div>
        </section>
        <!-- Banner area end -->

        <!-- About us area start -->

        <section class="about-us-section section-space p-relative" id="about">
            <div class="shape-area">
                <div class="shape-1" data-background="{{ asset('imgs/bckw1.jpg') }}"
                    style="  background-attachment: fixed;
                background-position: left;
                background-repeat: no-repeat;
                background-size: fill;">
                </div>
                <div class="shape-2 quote-animation" data-background="{{ asset('base/imgs/shapes/shape-7.png') }}">
                </div>
                <div class="shape-3 quote-animation" data-background="{{ asset('base/imgs/shapes/shape-8.png') }}">
                </div>
            </div>
            <div class="small-container">
                <div class="row g-4">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <!-- image area start -->
                        <div class="about-us-image-area p-relative wow fadeInRight" data-wow-delay=".5s">
                            <div class="border-shape" data-background="{{ asset('base/imgs/shapes/shape-6.png') }}">
                            </div>
                            <figure class="image-1">
                                <img src="{{ asset('imgs/archeos-banner4x.png') }}" alt="">
                            </figure>
                            <div class="working-area float-bob-y">
                                <div class="inner p-relative">
                                    <div class="icon-box">
                                        <i class="icon-prize"></i>
                                        <h4><span class="counter">5</span> Ans</h4>
                                        <p>D'expériences mixtes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- image area end -->
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <!-- .content start -->
                        <div class="about-us-content-area p-relative z-1 pl-30">
                            <div class="title-box mb-35 wow fadeInLeft" data-wow-delay=".5s">
                                <span class="section-sub-title">A Propos de nous</span>
                                <h3 class="section-title mt-10">Construire une nouvelle Afrique</h3>
                            </div>
                            <p class="mb-35 wow fadeInLeft" data-wow-delay=".5s">Archeos c'est : Conception et
                                réalisation de logiciel
                                informatique, études informatiques (fourniture de matériel informatique et maintenance,
                                conception et réalisation de projet informatique et IOT), prestations de services en
                                BTP, Production et commercialisation de produits agricole, divers.</p>
                            <div class="icon-box mb-20 wow fadeInLeft" data-wow-delay=".8s">
                                <div class="icon">
                                    <i class="icon-roof"></i>
                                </div>
                                <div class="content">
                                    <h5><a href="/#about">Nourrire avec responsabilité</a></h5>
                                    <p>Grâce à nos partenaires, nous collectons les produits des agriculteurs béninois,
                                        produits avec soin et contrôlés par nos dispositifs connectés, pour une
                                        traçabilité garantie. Ensuite, nous les revendons sur nos différents marchés et
                                        via notre plateforme web.</p>
                                </div>
                            </div>
                            <div class="icon-box mb-20 wow fadeInLeft" data-wow-delay=".9s">
                                <div class="icon">
                                    <i class="icon-roof-9"></i>
                                </div>
                                <div class="content">
                                    <h5><a href="/#about">Regagner sa fierté et contribuer au développement</a>
                                    </h5>
                                    <p>Nous mettons toute notre énergie au service de notre communauté en tant que
                                        cabinet d’experts, afin de partager nos connaissances et vous aider à atteindre
                                        vos différents objectifs.</p>
                                </div>
                            </div>
                            <div class="about-btn-box wow fadeInLeft" data-wow-delay="1s">
                                <a class="primary-btn-1 btn-hover" href="/A-propos">
                                    A Propos de... &nbsp; | <i class="icon-right-arrow"></i>
                                    <span style="top: 147.172px; left: 108.5px;"></span>
                                </a>
                            </div>
                        </div>
                        <!-- .content end -->
                    </div>
                </div>
            </div>
        </section>

        <!-- About us area end -->

        <!-- Service Slider area start -->
        <section class="service-slider-section section-space bg-color-1 p-relative">

            <div class="shape-3" data-background="{{ asset('base/imgs/shapes/shape-11.png') }}"></div>
            <div class="small-container">
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="title-box mb-50 wow fadeInLeft" data-wow-delay=".5s">
                            <span class="section-sub-title">Nos Services</span>
                            <h3 class="section-title mt-10">Agriculture de précision, IOT et service général</h3>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <!-- If we need navigation buttons -->
                        <div class="service_1_navigation__wrapprer position-relative z-1 text-end mt-30">
                            <div class="common-slider-navigation">
                                <button class="service-1-button-prev"><i class="icon-arrow-left-angle"></i></button>
                                <button class="service-1-button-next"><i class="icon-arrow-right-angle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper service-active-1">
                    <div class="swiper-wrapper">
                        <!-- block -->
                        <div class="swiper-slide">
                            <div class="service-slider-area p-relative">
                                <figure class="image w-img">
                                    <img src="{{ asset('imgs/agc.png') }}" alt=""
                                        style="max-height: 271px; height: 271px;">
                                </figure>
                                <div class="content">
                                    <div class="icon-box">
                                        <i class="icon-target"></i>
                                    </div>
                                    <h4 class="mb-15"><a href="/Service">Agriculture de précision</a></h4>
                                    <p class="mb-25">Conception, suivi, deployement, maintenance d'appareil
                                        d'agriculture de précision et automatisation de machine existant.</p>

                                </div>
                            </div>
                        </div>
                        <!-- block -->
                        <div class="swiper-slide">
                            <div class="service-slider-area p-relative">
                                <figure class="image w-img">
                                    <img src="{{ asset('imgs/iot.png') }}" alt=""
                                        style="max-height: 271px; height: 271px;">
                                </figure>
                                <div class="content">
                                    <div class="icon-box">
                                        <i class="icon-engineer"></i>
                                    </div>
                                    <h4 class="mb-15"><a href="/Service">IOT</a></h4>
                                    <p class="mb-25">Domotique pour la maison, l’usine, les dispositifs connectés, la
                                        conception d’appareils électroniques et toute autre consultation.</p>

                                </div>
                            </div>
                        </div>
                        <!-- block -->
                        <div class="swiper-slide">
                            <div class="service-slider-area p-relative">
                                <figure class="image w-img">
                                    <img src="{{ asset('imgs/frt.png') }}" alt=""
                                        style="max-height: 271px; height: 271px;">
                                </figure>
                                <div class="content">
                                    <div class="icon-box">
                                        <i class="icon-shopping-cart"></i>
                                    </div>
                                    <h4 class="mb-15"><a href="/Service">Produits agricole</a></h4>
                                    <p class="mb-25">Commercialisation de produits agricole de qualité viande, fruits,
                                        légumes poissons etc. avec un service de livraison gratuite dans tout le nord
                                        Bénin.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-slider-area p-relative">
                                <figure class="image w-img">
                                    <img src="{{ asset('imgs/btp.jpg') }}" alt=""
                                        style="max-height: 271px; height: 271px;">
                                </figure>
                                <div class="content">
                                    <div class="icon-box">
                                        <i class="icon-roof"></i>
                                    </div>
                                    <h4 class="mb-15"><a href="/Service">Construction et réalisation</a></h4>
                                    <p class="mb-25">Suivi et élaboration de projet de construction BTP, Usine,
                                        Habitation Domotique etc. realisation des plans technique.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Slider area end -->


        <!-- Project slider area start -->
        <section class="project-slider-section section-space fix">
            <div class="small-container">
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="title-box mb-50 wow fadeInLeft" data-wow-delay=".5s">
                            <span class="section-sub-title">Activités récentes</span>
                            <h3 class="section-title mt-10">Nos differents projets et salons</h3>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <!-- If we need navigation buttons -->
                        <div class="project_1_navigation__wrapprer position-relative z-1 text-end mt-30">
                            <div class="common-slider-navigation">
                                <button class="project-1-button-prev"><i class="icon-arrow-left-angle"></i></button>
                                <button class="project-1-button-next"><i class="icon-arrow-right-angle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper project-active-1">
                <div class="swiper-wrapper">
                    <!-- block -->
                    <div class="swiper-slide">
                        <div class="project-slider-area p-relative">
                            <figure class="image m-img">
                                <img src="{{ asset('imgs/gitex.jpg') }}" alt="">
                            </figure>
                            <div class="content-area">
                                <div class="title-area">
                                    <h6 class="mb-5">GITEX AFRICA 2024</h6>
                                    <h5><a href="https://gitexafrica.com/">Exposition grand publique des startup</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- block -->
                    <div class="swiper-slide">
                        <div class="project-slider-area p-relative">
                            <figure class="image m-img">
                                <img src="{{ asset('imgs/acma2i.webp') }}" alt="">
                            </figure>
                            <div class="content-area">
                                <div class="title-area">
                                    <h6 class="mb-5">ACMA2 Benin</h6>
                                    <h5><a
                                            href="https://agratime.com/acma2-vers-la-mise-a-echelle-des-solutions-tic-de-jinunkun-et-souba/">Hackathon
                                            Agrinnov 229</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- block -->
                    <div class="swiper-slide">
                        <div class="project-slider-area p-relative">
                            <figure class="image m-img">
                                <img src="{{ asset('imgs/agrihack.jpeg') }}" alt="">
                            </figure>
                            <div class="content-area">
                                <div class="title-area">
                                    <h6 class="mb-5">AgriHack winner</h6>
                                    <h5><a
                                            href="https://ardyis.cta.int/fr/actualites/actualites-du-projet/item/286-fish-farming-agrihack-in-west-africa87e8.html?tmpl=component&print=1">West
                                            Africa AgriHack 2016</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- block -->
                    <div class="swiper-slide">
                        <div class="project-slider-area p-relative">
                            <figure class="image m-img">
                                <img src="{{ asset('imgs/senum.jpg') }}" alt="">
                            </figure>
                            <div class="content-area">
                                <div class="title-area">
                                    <h6 class="mb-5">Hackathon SENUM Winner</h6>
                                    <h5><a href="https://semainedunumerique.bj/">SEmaine du NUMérique Bénin 2018</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project area end -->

        <!-- Choose area start -->
        <section class="choose-section bg-color-1 section-space-top p-relative">
            <div class="bg-image" data-background="{{ asset('imgs/fsh.jpeg') }}"></div>
            <div class="shape-image" data-background="{{ asset('base/imgs/shapes/shape-15.png') }}"></div>
            <div class="small-container">
                <div class="row g-4">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 p-relative section-space-medium-bottom">
                        <div class="title-box mb-50 wow fadeInLeft" data-wow-delay=".5s">
                            <span class="section-sub-title">Pourquoi nous?</span>
                            <h3 class="section-title mt-10">Produisez autrement</h3>
                        </div>
                        <!-- block -->
                        <div class="choose-area-icon-box mb-15 wow fadeInRight" data-wow-delay=".5s">
                            <div class="content">
                                <h5><a href="https://souba.archeos.africa/">Souba</a></h5>
                                <p>Souba est un dispositif d'allimentaation des poissons coûtant $300 qui permet de
                                    manière autonome et
                                    automatique de nourrir les poissons, de contrôler la qualité de l’eau et sa
                                    distribution. Il suit les besoins d’alimentation et les ajuste en conséquence. De
                                    plus, il notifie les utilisateurs via Internet.</p>
                            </div>
                        </div>
                        <hr>
                        <!-- block -->
                    </div>

                </div>
            </div>
        </section>
        <!-- Choose area end -->

        <!-- Blog area start -->
        <section class="blog-section-one section-space">
            <div class="small-container">
                <div class="title-box mb-40 wow fadeInLeft" data-wow-delay=".5s">
                    <span class="section-sub-title">Blog</span>
                    <h3 class="section-title mt-10">Publications Récentes</h3>
                </div>
                <div class="row g-4">
                    @if (0 === 1)
                        <!-- block -->
                        <div class="col-xxl-4 col-xl-4 col-lg-6">
                            <div class="blog-style-one">
                                <a class="blog-image w-img" href="/blog/view">
                                    <img src="{{ asset('base/imgs/blog/blog-1.jpg') }}" alt="">
                                </a>
                                <div class="blog-content">
                                    <div class="post-meta">
                                        <span class="p-relative"><a href="/blog/view"><i class="fal fa-user"></i>
                                                By Admin</a></span>
                                        <span class="p-relative"><a href="/blog/view"><i
                                                    class="fal fa-calendar-alt"></i>28 Nov, 2023</a></span>
                                    </div>
                                    <hr>
                                    <h5 class="blog-title mb-30"><a href="/blog/view">Best Repairing For
                                            Leakage
                                            Roof In</a></h5>
                                    <div class="blog-link">
                                        <a class="primary-btn-5 btn-hover" href="/blog/view">
                                            Read MORE &nbsp; | <i class="icon-right-arrow"></i>
                                            <span style="top: 147.172px; left: 108.5px;"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- block -->
                    @else
                        <h5 class="blog-title mb-30"><a>Non disponible</a></h5>
                    @endif
                </div>
            </div>
        </section>
        <!-- Blog area end -->


        <!-- Brand area start -->
        <div class="brand-section section-space-bottom">
            <div class="small-container">
                <div class="swiper brand-active">
                    <div class="swiper-wrapper">
                        <!-- block -->
                        <div class="swiper-slide">
                            <span><a href="#"><img src="{{ asset('base/imgs/resources/01.png') }}"
                                        alt="" style="max-height: 81px"></a></span>
                        </div>
                        <!-- block -->
                        <div class="swiper-slide">
                            <span><a href="#"><img src="{{ asset('base/imgs/resources/02.jpeg') }}"
                                        alt="" style="max-height: 81px"></a></span>
                        </div>
                        <!-- block -->
                        <div class="swiper-slide">
                            <span><a href="#"><img src="{{ asset('base/imgs/resources/03.webp') }}"
                                        alt="" style="max-height: 81px"></a></span>
                        </div>
                        <!-- block -->
                        <div class="swiper-slide">
                            <span><a href="#"><img src="{{ asset('base/imgs/resources/03.png') }}"
                                        alt="" style="max-height: 81px"></a></span>
                        </div>
                        <!-- block -->
                        <div class="swiper-slide">
                            <span><a href="#"><img src="{{ asset('base/imgs/resources/04.webp') }}"
                                        alt="" style="max-height: 81px"></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand area end -->

    </main>


    <!-- Footer area start -->
    <footer>
        <div class="footer-main bg-color-1">
            <div class="footer-top section-space-medium">
                <div class="small-container">
                    <div class="row ">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                            <figure class="image">
                                <img src="{{ asset('logo-archeos.png') }}" alt=""
                                    style="max-height: 270px; -webkit-filter: drop-shadow(1px 1px 0 rgb(255, 255, 255))
                                    drop-shadow(-1px -1px 0 rgb(255, 255, 255));
                    filter: drop-shadow(1px 1px 0 rgb(255, 255, 255)) 
                            drop-shadow(-1px -1px 0 rgb(255, 255, 255));">
                            </figure>
                        </div>

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">

                            <div class="footer-widget-1">

                                <p class="mt-40 mb-40">
                                    Conception et réalisation de logiciel informatique, études informatiques (fourniture
                                    de matériel informatique et maintenance, conception et réalisation de projet
                                    informatique et IOT), prestations de services en BTP, Production et
                                    commercialisation de produits agricole, divers.
                                </p>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-widget-2 pl-50">
                                <h4 class="mb-20 footer-title">Nos services</h4>
                                <ul class="service-list">
                                    <li><a href="/Service">IOT</a></li>
                                    <li><a href="/Service">Agriculture de précision</a></li>
                                    <li><a href="/Service">Construction</a></li>
                                    <li><a href="/Service">Développement de logiciel</a></li>
                                    <li><a href="/Service">Conseil agricole</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-widget-4 pr-30">
                                <h4 class="mb-20 footer-title">Newsletter</h4>
                                <p>Restez connecter à nos nouveau projets.</p>
                                <div class="footer-subscribe">
                                    <form action="/newsletter">
                                        <input type="email" name="email" placeholder="Votre adresse mail"
                                            required>
                                        <button type="submit" class="primary-btn-1 btn-hover">
                                            S'ENREGISTRER
                                            <span style="top: 147.172px; left: 108.5px;"></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-container">
                <div class="footer-bottom pt-30 pb-30">
                    <div class="left-area">
                        <span>© Archeos Benin 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer area end -->


    <!-- JS here -->
    <script src="{{ asset('base/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('base/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('base/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('base/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('base/js/swiper.min.js') }}"></script>
    <script src="{{ asset('base/js/slick.min.js') }}"></script>
    <script src="{{ asset('base/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('base/js/counterup.js') }}"></script>
    <script src="{{ asset('base/js/wow.js') }}"></script>
    <script src="{{ asset('base/js/main.js') }}"></script>

</body>

</html>
