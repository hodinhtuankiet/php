<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/reset.css">
    <link rel="stylesheet" href="./public/grid.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./public/responsive.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <title>Coffee</title>
</head>

<body>
    <div class="wrapper">
        <header id="header">
            <div class="header__container">
                <div class="header__navbar">
                    <div class="grid wide">
                        <div class="header__navbar-container">
                            <div class="list__header-navbar">
                                <div class="row">
                                    <div class="item__navbar-center col l-8">
                                        <div class="row">
                                            <div class="item__navbar-content item__navbar-logo"><a class="logo_1" href="#header">
                                                    COFFEE
                                                </a></div>
                                            <div class="item__navbar-content active"><a href="#header">Home Page</a>
                                            </div>
                                            <div class="item__navbar-content"><a href="#menu__drink">Menu</a></div>
                                            <div class="item__navbar-content"><a href="#user">Endow</a></div>
                                            <div class="item__navbar-content"><a href="#author">About Us</a></div>
                                        </div>
                                    </div>
                                    <div class="nhaa ">
                                        <div class="item__navbar-right col l-1 col-sm-2 ">
                                            <div class="icon__shop-header">
                                                <a href="./cart.html"></a>
                                                <i class="fa-solid fa-bag-shopping"></i>
                                                <span class="quatity__cart">0</span>
                                            </div>
                                        </div>
                                        <div class="user__login col l-1 col-sm-2">
                                            <div class="user__login-img">
                                                <img src="./img/author/Rectangle58.jpg" alt="">
                                            </div>

                                            <div class="user__option-login">
                                                <div class="user__content">
                                                    <div class="user__content-name">Ho Dinh Tuan Kiet</div>
                                                    <div class="user__content-id">MANAGER</div>
                                                </div>
                                                <div class="user__list-option">
                                                    <div class="user__item-option active">Home</div>
                                                    <div class="user__item-option user__item-option-cart">CART</div>
                                                    <div class="user__item-option" onclick="openHistoryOrder()">ORDER
                                                    </div>
                                                    <div class="user__item-option">SETTING</div>
                                                    <div class="user__item-option">VOUCHER</div>
                                                    <div class="user__item-option"><a href="/admin" id="login-link" onclick="redirectToAdminPage()">ADMIN</a>
                                                    </div>
                                                    <div class="user__item-option">
                                                        <a href="#" id="login-link" onclick="redirectToLoginPage()">LOG
                                                            OUT</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toggle-btn col l-1 col-sm-2">
                                            <div class="bx bx-menu" id="menu-icon">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="home">
            <video src="./video/video_1.mp4" autoplay muted loop class="video-slide active"></video>
            <video src="./video/video_6.mp4" autoplay muted loop class="video-slide"></video>
            <video src="./video/video_5.mp4" autoplay muted loop class="video-slide"></video>
            <video src="./video/video_3.mp4" autoplay muted loop class="video-slide"></video>
            <!-- <video src="./video/video_3.mp4" autoplay muted loop class="video-slide3"></video> -->
            <div class="content">
                <div class="header__content">
                    <div class="grid wide">
                        <div class="header__content-container col l-8">
                            <div class="header__content-title">
                                <h1>the K&L </br> cornor coffee</h1>
                            </div>
                            <div class="header__content-decs">The K&L Corner Coffee is a cozy and welcoming café located
                                in the heart of downtown.
                                It is a popular spot among locals and tourists alike, known for its excellent coffee,
                                delicious pastries, and friendly atmosphere.
                            </div>
                        </div>
                        <div class="header__content-btn">
                            <div class="button button--transparent">
                                <span class="content__button">Watch the intro video</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-navigation">
                <div class="nav-btn active"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
            </div>
    </div>

    </section>

    <main>
        <section class="space__shop-section">
            <div class="space__shop-container">
                <div class="grid wide">
                    <div class="row">
                        <div class="flexx">
                            <div class="space__shop-content col l-6 animate-item animate-item__left">
                                <div class="space__shop-content-title">ABOUT SPACE</div>
                                <div class="space__shop-content-decs">
                                    The space of The K&L CORNOR COFFEE is designed with warm and comfortable yellow
                                    tones
                                    roof.
                                    Thing
                                    The interior is smartly and delicately arranged to bring comfort to customers.
                                    Painting
                                    Art paintings hanging on the wall along with crystal lanterns create a luxurious
                                    space
                                    elegant and alluring. You can sit in private corners or single tables depending on
                                    department
                                    his likes. The K&L CORNOR COFFEE will be an ideal place for you to find peace
                                    jar
                                    and
                                    relax.
                                </div>
                            </div>
                            <div class="space__shop-img col l-6 animate-item animate-item__right">
                                <div class="box__img">
                                    <img src="./img/space_shop/Rectangle46.png" alt="" class="img__space active">
                                    <img src="./img/space_shop/Rectangle47.png" alt="" class="img__space">
                                    <img src="./img/space_shop/Rectangle48.jpg" alt="" class="img__space">
                                    <img src="./img/space_shop/Rectangle49.jpg" alt="" class="img__space">
                                    <img src="./img/space_shop/Rectangle50.jpg" alt="" class="img__space">
                                </div>
                                <div class="icon__next" onclick="next()"><i class="fa-solid fa-chevron-right"></i></div>
                                <div class="icon__prev" onclick="prev()"><i class="fa-solid fa-chevron-left"></i></div>
                                <div class="list__dot">
                                    <div class="item__dot"></div>
                                    <div class="item__dot"></div>
                                    <div class="item__dot"></div>
                                    <div class="item__dot"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="best-seller__section">
            <div class="best__seller-container">
                <ul class="list__best-seller">
                    <li class="item__best-seller">
                        <div class="hero-banner__title" aria-hidden="true">Best seller #1 </br> Coffee Milk</div>
                        <img src="./img/drink_menu/cafe2.png" alt="ca phe sua" class="img__item-best-seller">
                        <h1 class="hero-banner__title hero-banner__stroked-title">Best seller #1 </br> Coffee Milk
                        </h1>
                    </li>

                    <button class="button button__best-seller">Experience now<i class="fa-solid fa-arrow-right"></i></button>
                    <div class="title__item-best-seller" data-title="Best seller #1
    cà phê sữa"></div>
                </ul>
            </div>
        </section>

        <section class="menu__drink-section" id="menu__drink">
            <div class="grid wide">
                <div class="menu__drink-container col l-12">
                    <div class="menu__drink-title title animate-item animate-item__left">What's on the menu?
                    </div>
                    <div class="menu__drink-options col l-12">
                        <ul class="list__option-menu ">
                            <div class="row">
                                <li class="option__menu-item active animate-item animate-item__left">Coffee</li>
                                <li class="option__menu-item animate-item animate-item__top">Milk tea</li>
                                <li class="option__menu-item animate-item animate-item__right">Soda</li>
                            </div>
                        </ul>
                    </div>

                    <div class="menu__drinks animate-item animate-item__left">
                        <ul class="box__list list__drink list__drink-coffee active">

                        </ul>
                        <!-- Milk tea  -->
                        <ul class="box__list list__drink list__drink-milkTea">
                            <li class="box__item drink__item">
                                <div class="box__item-img drink__item-img">
                                    <img srcset="./img/drink_menu/cafe1.png 2x" alt="" class="img-drink">
                                </div>
                                <div class="box__item-content drink__item-content">
                                    <div class="box__item-info drink__item-info">
                                        <div class="item__content-name drink__content-name">Coffe Black</div>
                                        <div class="item__content-price drink__content-price">25.000 VNĐ</div>
                                    </div>
                                    <div class="box__item-like drink__item-like">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="box__item-btn drink__item-btn">
                                    <button class="button button-add">
                                        Add to cart
                                    </button>
                                </div>
                            </li>
                            <li class="box__item drink__item">
                                <div class="box__item-img drink__item-img">
                                    <img srcset="./img/drink_menu/cafe1.png 2x" alt="" class="img-drink">
                                </div>
                                <div class="box__item-content drink__item-content">
                                    <div class="box__item-info drink__item-info">
                                        <div class="item__content-name drink__content-name">Coffe Black</div>
                                        <div class="item__content-price drink__content-price">25.000 VNĐ</div>
                                    </div>
                                    <div class="box__item-like drink__item-like">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="box__item-btn drink__item-btn">
                                    <button class="button button-add">
                                        Add to cart
                                    </button>
                                </div>
                            </li>
                            <li class="box__item drink__item">
                                <div class="box__item-img drink__item-img">
                                    <img srcset="./img/drink_menu/cafe1.png 2x" alt="" class="img-drink">
                                </div>
                                <div class="box__item-content drink__item-content">
                                    <div class="box__item-info drink__item-info">
                                        <div class="item__content-name drink__content-name">Cà Phê Đen</div>
                                        <div class="item__content-price drink__content-price">25.000 VNĐ</div>
                                    </div>
                                    <div class="box__item-like drink__item-like">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="box__item-btn drink__item-btn">
                                    <button class="button button-add">
                                        Add to cart
                                    </button>
                                </div>
                            </li>
                            <li class="box__item drink__item">
                                <div class="box__item-img drink__item-img">
                                    <img srcset="./img/drink_menu/cafe1.png 2x" alt="" class="img-drink">
                                </div>
                                <div class="box__item-content drink__item-content">
                                    <div class="box__item-info drink__item-info">
                                        <div class="item__content-name drink__content-name">Cà Phê Đen</div>
                                        <div class="item__content-price drink__content-price">25.000 VNĐ</div>
                                    </div>
                                    <div class="box__item-like drink__item-like">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="box__item-btn drink__item-btn">
                                    <button class="button button-add">
                                        Add to cart
                                    </button>
                                </div>
                            </li>
                            <li class="box__item drink__item">
                                <div class="box__item-img drink__item-img">
                                    <img srcset="./img/drink_menu/cafe1.png 2x" alt="" class="img-drink">
                                </div>
                                <div class="box__item-content drink__item-content">
                                    <div class="box__item-info drink__item-info">
                                        <div class="item__content-name drink__content-name">Cà Phê Đen</div>
                                        <div class="item__content-price drink__content-price">25.000 VNĐ</div>
                                    </div>
                                    <div class="box__item-like drink__item-like">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="box__item-btn drink__item-btn">
                                    <button class="button button-add">
                                        Add to cart
                                    </button>
                                </div>
                            </li>
                        </ul>
                        <!-- Soda  -->
                        <ul class="box__list list__drink list__drink-soda">
                            <li class="box__item drink__item">
                                <div class="box__item-img drink__item-img">
                                    <img srcset="./img/drink_menu/cafe1.png 2x" alt="" class="img-drink">
                                </div>
                                <div class="box__item-content drink__item-content">
                                    <div class="box__item-info drink__item-info">
                                        <div class="item__content-name drink__content-name">Cà Phê Đen</div>
                                        <div class="item__content-price drink__content-price">25.000 VNĐ</div>
                                    </div>
                                    <div class="box__item-like drink__item-like">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="box__item-btn drink__item-btn">
                                    <button class="button button-add">
                                        Add to cart
                                    </button>
                                </div>
                            </li>
                            <li class="box__item drink__item">
                                <div class="box__item-img drink__item-img">
                                    <img srcset="./img/drink_menu/cafe1.png 2x" alt="" class="img-drink">
                                </div>
                                <div class="box__item-content drink__item-content">
                                    <div class="box__item-info drink__item-info">
                                        <div class="item__content-name drink__content-name">Cà Phê Đen</div>
                                        <div class="item__content-price drink__content-price">25.000 VNĐ</div>
                                    </div>
                                    <div class="box__item-like drink__item-like">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="box__item-btn drink__item-btn">
                                    <button class="button button-add">
                                        Add to cart
                                    </button>
                                </div>
                            </li>
                            <li class="box__item drink__item">
                                <div class="box__item-img drink__item-img">
                                    <img srcset="./img/drink_menu/cafe1.png 2x" alt="" class="img-drink">
                                </div>
                                <div class="box__item-content drink__item-content">
                                    <div class="box__item-info drink__item-info">
                                        <div class="item__content-name drink__content-name">Cà Phê Đen</div>
                                        <div class="item__content-price drink__content-price">25.000 VNĐ</div>
                                    </div>
                                    <div class="box__item-like drink__item-like">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="box__item-btn drink__item-btn">
                                    <button class="button button-add">
                                        Add to cart
                                    </button>
                                </div>
                            </li>
                            <li class="box__item drink__item">
                                <div class="box__item-img drink__item-img">
                                    <img srcset="./img/drink_menu/cafe1.png 2x" alt="" class="img-drink">
                                </div>
                                <div class="box__item-content drink__item-content">
                                    <div class="box__item-info drink__item-info">
                                        <div class="item__content-name drink__content-name">Cà Phê Đen</div>
                                        <div class="item__content-price drink__content-price">25.000 VNĐ</div>
                                    </div>
                                    <div class="box__item-like drink__item-like">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="box__item-btn drink__item-btn">
                                    <button class="button button-add">
                                        Add to cart
                                    </button>
                                </div>
                            </li>
                            <li class="box__item drink__item">
                                <div class="box__item-img drink__item-img">
                                    <img srcset="./img/drink_menu/cafe1.png 2x" alt="" class="img-drink">
                                </div>
                                <div class="box__item-content drink__item-content">
                                    <div class="box__item-info drink__item-info">
                                        <div class="item__content-name drink__content-name">Cà Phê Đen</div>
                                        <div class="item__content-price drink__content-price">25.000 VNĐ</div>
                                    </div>
                                    <div class="box__item-like drink__item-like">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="box__item-btn drink__item-btn">
                                    <button class="button button-add">
                                        Add to cart
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- ---------------------------------------- -->
            <div class="container_coffee">
                <div class="main">
                    <div class="combo">
                        <i class='bx bxs-x-circle bx_2'></i>
                    </div>

                    <div class="nahh">
                    </div>
                </div>
            </div>

        </section>

        <section class="combo-section">
            <div class="grid wide">
                <div class="combo__container">
                    <div class="combo__container-title title animate-item animate-item__top">
                        <h1 style="max-width: 100%;">along with offers</h1>
                    </div>
                    <div class="combo__list col l-12">
                        <div class="combo__item combo1 col l-12 col-md-12">
                            <div class="row col-md-12">
                                <div class="combo__item-img col l-5 animate-item animate-item__left"><img srcset="./img/combo/Rectangle132.png 2x" alt="">
                                </div>
                                <div class="combo__item-content col l-7 animate-item animate-item__right">
                                    <div class="combo__item-content-title">
                                        <h3>endow #1</h3>
                                    </div>
                                    <div class="combo__item-decs">
                                        <p>The combination of Cappuccino and raisin cake is one way
                                            Great for combining sweet and fresh flavors. Delicious Cappuccino
                                            and cool will quench thirst on hot days. Custard cake
                                            The raisin filling will create a mild sweetness, along with the crispy
                                            taste of the cake, bringing
                                            and a wonderful enjoyment experience. Come to The K&L CORNOR Coffee
                                            belong to
                                            us to enjoy this Offer today!</p>
                                    </div>

                                    <div class="button button--transparent-best">
                                        Let's experience it now<i class="fa-solid fa-arrow-right-long"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="combo__item combo2 col l-12 col-md-12">
                            <div class="row combo2">
                                <div class="combo__item-content col l-7 animate-item animate-item__left">
                                    <div class="combo__item-content-title">
                                        <h3>endow #2</h3>
                                    </div>
                                    <div class="combo__item-decs">
                                        <p>The combination of Cappuccino and raisin cake is one way
                                            Great for combining sweet and fresh flavors. Delicious Cappuccino
                                            and cool will quench thirst on hot days. Custard cake
                                            The raisin filling will create a mild sweetness, along with the crispy
                                            taste of the cake, bringing
                                            and a wonderful enjoyment experience. Come to The K&L CORNOR Coffee
                                            belong to
                                            us to enjoy this Offer today!</p>
                                    </div>

                                    <div class="button button--transparent-best">
                                        Let's experience it now <i class="fa-solid fa-arrow-right-long"></i>
                                    </div>
                                </div>

                                <div class="combo__item-img col l-5 animate-item animate-item__right"><img srcset="./img/combo/Rectangle133.png 2x" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu__cake-section">
            <div class="grid wide">
                <div class="menu__cake-container">
                    <div class="menu__cake-container-title title animate-item animate-item__top">cake. <br> Why not ?
                    </div>
                    <ul class="box__list list__cake animate-item animate-item__left">
                    </ul>
                </div>
            </div>
        </section>

        <section class="advantage-section">
            <div class="grid wide">
                <div class="advantage__container">
                    <div class="adventage__container-title title animate-item animate-item__left">Why are we
                        is the ideal place <br> for you
                        ?</div>
                    <div class="list__adventage">
                        <div class="item__adventage animate-item animate-item__right">
                            <div class="item__adventage-img">
                                <img srcset="./img/img__advantage/coffee_advantage.jpg 2x" alt="" class="img__adventage">
                            </div>
                            <div class="item__adventage-content">
                                <div class="adventage__content-title">About coffee</div>
                                <div class="adventage__content-decs">Our coffee is made from
                                    carefully selected coffee beans and roasted according to traditional methods to
                                    ensure
                                    characteristic flavor and excellent quality. Come to their cafe
                                    With me, you will enjoy a cup of coffee with the strongest and most delicious
                                    taste.</div>
                            </div>
                        </div>

                        <div class="item__adventage animate-item animate-item__left">
                            <div class="item__adventage-img">
                                <img srcset=".\img\space_shop\Rectangle48.jpg 2x" alt="" class="img__adventage">
                            </div>
                            <div class="item__adventage-content">
                                <div class="adventage__content-title">About environment</div>
                                <div class="adventage__content-decs">Our shop has a cozy atmosphere and
                                    Luxurious design, creating a relaxing and inspiring environment for guests
                                    row. You will have the opportunity to enjoy great coffee in a comfortable space
                                    cheerful and enthusiastic. Please visit our bar to enjoy the space
                                    The most beautiful and comfortable.</div>
                            </div>
                        </div>

                        <div class="item__adventage animate-item animate-item__right">
                            <div class="item__adventage-img">
                                <img srcset="./img/img__advantage/ship_advantage.jpg 2x" alt="" class="img__adventage">
                            </div>
                            <div class="item__adventage-content">
                                <div class="adventage__content-title">about delivery</div>
                                <div class="adventage__content-decs">Our shop has a cozy atmosphere and
                                    Luxurious design, creating a relaxing and inspiring environment for guests
                                    row. You will have the opportunity to enjoy great coffee in a comfortable space
                                    cheerful and enthusiastic. Please visit our bar to enjoy the space
                                    The most beautiful and comfortable.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="user-section" id="user">
            <div class="grid wide">
                <div class="user__container">
                    <div class="user__container-content col l-6 animate-item animate-item__left">
                        <div class="user__content-title">QUALITY FEEDBACK<br>
                            FROM CUSTOMER ABOUT OUR COFFEE</div>
                        <div class="user__content-decs">Your feedback plays an integral role in helping us improve our
                            services and enhance the overall experience for our customers. We carefully consider each
                            comment and suggestion, as they allow us to identify areas where we can make positive
                            changes and meet your expectations even better.We strive to create a welcoming and
                            comfortable atmosphere where you can enjoy a great cup of coffee. Your feedback helps us
                            ensure that we maintain high standards of quality in both our beverages and customer
                            service. With your input, we can continue to refine our menu, introduce new flavors, and
                            provide an exceptional coffee experience.</div>
                    </div>
                    <div class="user__content-form col l-6 animate-item animate-item__top">
                        <div class="user__form-title">INFORMATION</div>
                        <input id="name_customer" type="text" placeholder="Name Customer">
                        <input id="email_customer" type="email" placeholder="Email Customer">
                        <input id="message_customer" type="text" placeholder="Customer message">
                        <button class="button button__send" id="button__send">Submit</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="author-section" id="author">
            <div class="grid wide">
                <div class="author__container">
                    <div class="author__container-title title animate-item animate-item__left">about us</div>
                    <div class="list__author">
                        <div class="item__author">
                            <div class="item__author-content">
                                <div class="item__author-img"><img srcset="./img/author/Rectangle55.jpg 2x" alt="">
                                </div>
                                <div class="item__author-info">
                                    <div class="author__info-name">Phan Thanh Loi</div>
                                    <div class="author__info-job">Maneger</div>
                                </div>
                                <div class="item__author-contact">
                                    <div class="contact contact-1"> <a href="https://www.facebook.com/bachammm"><i class="fa-brands fa-facebook"></i>
                                        </a> </i></div>
                                    <div class="contact contact-2"> <a href=""><i class="fa-brands fa-instagram"></i></a> </div>
                                    <div class="contact contact-3"> <a href=""><i class="fa-brands fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item__author">
                            <div class="item__author-content">
                                <div class="item__author-img"><img srcset="./img/author/Rectangle58.jpg 2x" alt="">
                                </div>
                                <div class="item__author-info">
                                    <div class="author__info-name">Ho Dinh Tuan Kiet</div>
                                    <div class="author__info-job">Maneger</div>
                                </div>
                                <div class="item__author-contact">
                                    <div class="contact contact-1"> <a style="color: white;" href="https://www.facebook.com/profile.php?id=100080159688790"><i class="fa-brands fa-facebook"></i></a> </div>

                                    <div class="contact contact-2"> <a href=""> <i class="fa-brands fa-instagram">
                                            </i></a>
                                    </div>
                                    <div class="contact contact-3"> <a href=""> <i class="fa-brands fa-github"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slogan-section">
            <div class="grid wide">
                <div class="slogan__container">
                    <div class="slogan__container-img animate-item animate-item__top"><img style="border-radius: 9px;" srcset="./img/Exclude.png 1x" alt=""></div>
                    <div class="slogan__container-text animate-item animate-item__top">“We can do it.”
                    </div>
                </div>
            </div>
        </section>
    </main>
    <form action="#">
        <div class="cart">
            <div class="cart__header">
                <div class="button__back">
                    <i class="fa-solid fa-arrow-left"></i> Back
                </div>

                <div class="cart__title">
                    Cart
                </div>

                <div class="cart__quanlity">
                    Quantity : <span class="quanlity">0</span>
                </div>
            </div>
            <div class="cart__container">
                <div class="cart_body">

                    <div class="list__cart">

                    </div>
                </div>
                <div class="cart__footer">
                    <div class="cart__sub-total">
                        <div class="sub__total-bill">
                            <span class="title__total-bill">Total Bill : </span>
                            <span class="content__total-bill">0 VNĐ</span>
                        </div>
                        <div class="sub__total-ship">
                            <span class="title__total-ship">Delivery charges : </span>
                            <span class="content__total-ship">15,000 VNĐ</span>
                        </div>
                    </div>

                    <div class="cart__total">
                        <span class="cart__total-title">
                            total money :
                        </span>

                        <span class="cart__total-content">
                            0 VNĐ
                        </span>
                    </div>

                    <button class="button__buy">
                        payment confirmation
                    </button>

                    <div class="QR">
                        <img src="./img/QR.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <footer>
        <div class="grid wide">
            <div class="container">
                <div class="footer__container">
                    <ul class="list__info-footer">
                        <li class="info__footer">
                            <div class="info__footer-title">
                                Contact Info </div>

                            <div class="info__footer-content">
                                <div class="info__footer-content-location">
                                    <h5 class="location__name">
                                        <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> Đà Nẵng
                                    </h5>
                                    <p class="location__decs">
                                        Đ.Nam Kỳ Khởi Nghĩa, Hòa Quý, Ngũ Hành Sơn, Đà Nẵng
                                    </p>
                                </div>

                                <div class="info__footer-content-gmail">
                                    <h5 class="gmail-name">
                                        <i class="fa-regular fa-envelope" style="color: #ffffff;"></i> gmail
                                    </h5>

                                    <p class="gmail-decs">
                                        Thek&lcornor@gmail.com
                                    </p>
                                </div>

                                <ul class="list__icon-contact">
                                    <li class="icon__contact">
                                        <i class="fa-brands fa-facebook"></i>
                                    </li>

                                    <li class="icon__contact">
                                        <i class="fa-brands fa-instagram"></i>
                                    </li>

                                    <li class="icon__contact">
                                        <i class="fa-brands fa-twitter"></i>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="info__footer">
                            <div class="info__footer-title">
                                Production
                            </div>

                            <div class="info__footer-content">
                                <ul class="list__info">
                                    <li class="item__info">
                                        coffee
                                    </li>
                                    <li class="item__info">
                                        Fresh milk
                                    </li>
                                    <li class="item__info">
                                        Milk tea
                                    </li>
                                    <li class="item__info">
                                        soda
                                    </li>
                                    <li class="item__info">
                                        cake
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="info__footer">
                            <div class="info__footer-title">
                                Help
                            </div>

                            <div class="info__footer-content">
                                <ul class="list__info">
                                    <li class="item__info">
                                        search
                                    </li>
                                    <li class="item__info">
                                        introduce
                                    </li>
                                    <li class="item__info">
                                        recruitment
                                    </li>
                                    <li class="item__info">
                                        soda
                                    </li>
                                    <li class="item__info">
                                        cake
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="info__footer">
                            <div class="info__footer-title">
                                Product
                            </div>

                            <div class="info__footer-content">
                                <ul class="list__info">
                                    <li class="item__info">
                                        Sign up for promotions <br>
                                    </li>
                                    <li class="item__info">
                                        <input type="email" placeholder="Enter email">
                                        <button class="button-seen">Submit</button>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="line__footer">
        2023 Copyright © TheK&L. All rights reserved
    </div>

    <div class="blur">
        <div class="main">
            <form action="" method="POST" class="form" id="form-1">
                <div class="icon__close-form">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <h3 class="heading">Order confirmation</h3>
                <p class="desc">Please fill in all information <br>
                    so that we can best assist you ❤️</p>

                <div class="spacer"></div>

                <div class="form-group">
                    <label for="fullname" class="form-label">Name</label>
                    <input id="fullname" name="họ và tên" type="text" placeholder="VD: Phan Thành Lợi" class="form-control">
                    <span class="form-message invalid"></span>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="Gmail" type="text" placeholder="VD: email@domain.com" class="form-control">
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="numberPhone" class="form-label">Number Phone</label>
                    <input id="numberPhone" name="số điện thoại" type="number" placeholder="Nhập số điện thoại" class="form-control">
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input id="address" name="địa chỉ" type="text" placeholder="VD: Khái Tây 2, Hòa Quý, Ngũ Hành Sơn, Đà Nẵng" class="form-control">
                    <span class="form-message invalid"></span>
                </div>

                <div class="form-group">
                    <label for="time" class="form-label">Choose your delivery time</label>
                    <input id="time" name="thời gian" type="time" class="form-control">
                    <span class="form-message invalid"></span>
                </div>

                <div class="form-group">
                    <label for="option-pay" class="form-label">Select a payment method</label>
                    <select id="option-pay" name="Thanh toán" class="form-control">
                        <option value="Thanh toán sau khi nhận hàng">Pay after recieve</option>
                        <option value="Chuyển khoảng">Transfer</option>
                    </select>
                    <span class="form-message invalid"></span>
                </div>

                <button class="form-submit disabled">Confirm</button>
            </form>
        </div>
    </div>

    <div class="status">
        <ul class="list__status">

        </ul>
    </div>

    <div class="history__order">
        <div class="history__container">
            <div class="history__header">
                <div class="history__header-title">
                    BILLS LIST
                </div>

                <div class="icon__close-history-order">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
            </div>
            <div class="history__body">
                <ul class="list__order">

                </ul>
            </div>
        </div>
    </div>

    <div class="active__bill">

        <div class="active__bill-container">
            <div class="active__bill-title">
                Your order has been confirmed
            </div>

            <div class="active__bill-icon">
                <i class="fa-solid fa-clipboard-check"></i>
            </div>
            <div class="active__bill-decs">
                Please check your order
            </div>
            <div class="active__bill-btn">
                <div class="button-bill seen__bill">
                    Right now
                </div>
                <div class="button-bill close__bill">
                    Later
                </div>
            </div>
            <div class="icon__close-bill">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
    </div>
    <!-- show coffee  -->


    <button id="scroll-to-top-button"><i class="fa-solid fa-circle-up"></i></button>
    <script src="../js/animation.js"></script>
    <script src="../js/form_handle.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/index.js"></script>
    <script src="./public/j/jav/show.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js">
    </script>
    <script>
        var btn = document.getElementById("button__send");
        btn.addEventListener('click', () => {
            console.log("hii");
            var name_customer = document.getElementById("name_customer").value;
            var email_customer = document.getElementById("email_customer").value;
            var message_customer = document.getElementById("message_customer").value;
            var body = "Name: " + name_customer + "<br/> Email:" + email_customer + "<br/> Message: " + message_customer;
            Email.send({
                SecureToken: "df3a101f-3345-425a-b2d7-8c79a1523065",
                To: 'hodinhtuankiet@gmail.com',
                From: "kiethdt.22ite@vku.udn.vn",
                Subject: "The K&L Website Coffee-Message-Customer",
                Body: body
            }).then(
                message => alert("Thanks you for feedback")
            );
        })
    </script>
</body>

</html>