<?php

$pageTitle = 'Index page';

$aboutUsHeader = 'About Us';
$currentYear = date('Y');

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/fonts.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title><?php echo $pageTitle ?></title>
</head>
<body>
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top__logo logo">
                <a href="#">
                    <img src="img/logo.png" alt="Logo">
                </a>
            </div>
            <div>
                <a class="header-top__phone" href="tel:+1234567890">+123 456 7890</a>
            </div>
            <div>
                <a class="header-top__email" href="mailto:info@example.com">info@example.com</a>
            </div>
            <div class="header-top__search">
                <label class="visually-hidden" for="search-input">Search</label>
                <input id="search-input" type="text" name="search-input" value="" placeholder="Search"/>
                <button class="search-button" type="button" name="search-button">
                    <img src="img/search-icon.png" alt="Поиск">
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-menu">
            <div class="header-menu__item">
                <a href="#">Home</a>
            </div>
            <div class="header-menu__item">
                <a href="#about-us">About</a>
            </div>
            <div class="header-menu__item">
                <a href="#services">Services</a>
            </div>
            <div class="header-menu__item">
                <a href="#gallery">Gallery</a>
            </div>
            <div class="header-menu__item">
                <a href="#">News</a>
            </div>
            <div class="header-menu__item">
                <a href="#our-team">Team</a>
            </div>
            <div class="header-menu__item">
                <a href="#contact-us">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="header__hr"></div>
    <div class="container">
        <div class="header-content">
            <p class="header__small-text">Nunc eget nibh</p>
            <div class="header__hr-small"></div>
            <p class="header__big-text">Morbi in nisl auctor</p>
            <div>
                <a class="header__social" href="#">
                    <img src="img/fb.png" width="40" height="40" alt="fb">
                </a>
                <a class="header__social" href="#">
                    <img src="img/tw.png" width="40" height="40" alt="tw">
                </a>
                <a class="header__social" href="#">
                    <img src="img/rss.png" width="40" height="40" alt="rss">
                </a>
                <a class="header__social" href="#">
                    <img src="img/vk.png" width="40" height="40" alt="vk">
                </a>
            </div>
        </div>
    </div>
</div>
<div id="about-us" class="about-us">
    <div class="container">
        <div class="about-us__text">
            <h2 class="about-us__text_title"><?php echo $aboutUsHeader ?></h2>
            <p class="about-us__text_body">
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            </p>
        </div>
        <div class="about-us__image">
            <img src="img/about-image.jpg" width="540" height="338" alt="About us">
        </div>
    </div>
</div>
<div id="our-team" class="our-team">
    <div class="container">
        <h2 class="our-team__title">Our Team</h2>
        <div class="our-team__person-list">
            <div class="our-team__person">
                <img class="our-team__person-photo" src="img/photo-1.jpg" width="270" height="405" alt="Mary Jane">
                <div class="our-team__person-name">Mary Jane</div>
                <div class="our-team__person-position">Vestibulum</div>
                <div class="our-team__person-social-list">
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-fb.png" width="30" height="30" alt="fb">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-tw.png" width="30" height="30" alt="tw">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-rss.png" width="30" height="30" alt="rss">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-vk.png" width="30" height="30" alt="vk">
                        </a>
                    </div>
                </div>
            </div>
            <div class="our-team__person">
                <img class="our-team__person-photo" src="img/photo-2.jpg" width="270" height="405" alt="Peter Parker">
                <div class="our-team__person-name">Peter Parker</div>
                <div class="our-team__person-position">Ves tibulum</div>
                <div class="our-team__person-social-list">
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-fb.png" width="30" height="30" alt="fb">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-tw.png" width="30" height="30" alt="tw">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-rss.png" width="30" height="30" alt="rss">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-vk.png" width="30" height="30" alt="vk">
                        </a>
                    </div>
                </div>
            </div>
            <div class="our-team__person">
                <img class="our-team__person-photo" src="img/photo-3.jpg" width="270" height="405" alt="John Watson">
                <div class="our-team__person-name">John Watson</div>
                <div class="our-team__person-position">Vestibulum</div>
                <div class="our-team__person-social-list">
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-fb.png" width="30" height="30" alt="fb">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-tw.png" width="30" height="30" alt="tw">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-rss.png" width="30" height="30" alt="rss">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-vk.png" width="30" height="30" alt="vk">
                        </a>
                    </div>
                </div>
            </div>
            <div class="our-team__person">
                <img class="our-team__person-photo" src="img/photo-4.jpg" width="270" height="405" alt="Steven Wilson">
                <div class="our-team__person-name">Steven Wilson</div>
                <div class="our-team__person-position">Vestibulum</div>
                <div class="our-team__person-social-list">
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-fb.png" width="30" height="30" alt="fb">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-tw.png" width="30" height="30" alt="tw">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-rss.png" width="30" height="30" alt="rss">
                        </a>
                    </div>
                    <div class="our-team__person-social-item">
                        <a href="#">
                            <img src="img/person-vk.png" width="30" height="30" alt="vk">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="subscribe">
    <div class="container">
        <p class="subscribe__text">Subscribe with Us</p>
        <div class="subscribe__form">
            <label class="visually-hidden" for="subscribe__input">Subscribe email</label>
            <input id="subscribe__input" type="email" name="email" value="" placeholder="Email" required>
            <button class="subscribe__button">Subscribe</button>
        </div>
    </div>
</div>
<div id="contact-us" class="contact-us">
    <div class="container">
        <h2 class="contact-us__title">Contact Us</h2>
        <div class="contact-us__content">
            <div class="contact-us__text-block">
                <h3 class="contact-us__text-block-title">Get in touch with us</h3>
                <div class="contact-us__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets
                    containing Lorem Ipsum passages sed do, At vero eos et accusamus et
                    iusto odio digs qui blanditiis
                    <br><br>
                    Leningradsky AVE 39, BLDG 79
                    MOSCOW 125167, Russia
                    <br><br>
                    Telephone : +00 111 222 3333
                    <br><br>
                    FAX : +1 888 888 4444
                    <br><br>
                    Email : <span class="contact-us__email">mail@example.com</span>
                </div>
            </div>
            <div class="contact-us__form">
                <form action="#">
                    <div class="contact-us__form-row">
                        <label class="visually-hidden" for="contact-us__input-name">Name</label>
                        <input id="contact-us__input-name" type="text" name="name" value="" placeholder="Name" required>
                    </div>
                    <div class="contact-us__form-row">
                        <label class="visually-hidden" for="contact-us__input-email">Email</label>
                        <input id="contact-us__input-email" type="email" name="email" value="" placeholder="Email" required>
                    </div>
                    <div class="contact-us__form-row">
                        <label class="visually-hidden" for="contact-us__input-message">Message</label>
                        <textarea id="contact-us__input-message" name="message" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="contact-us__form-row">
                        <button class="contact-us__submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="map">
    <div class="container">
        <h2 class="map__title">Route Map</h2>
        <div class="map__google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2121.9025302946297!2d35.00716610223201!3d57.87085905244316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b74cff52e0ce2b%3A0x6241cb95d74884b6!2z0YPQuy4g0J_QvtC_0L7QstCwLCAyNSwg0KPQtNC-0LzQu9GPLCDQotCy0LXRgNGB0LrQsNGPINC-0LHQuy4sIDE3MTg0MQ!5e0!3m2!1sru!2sru!4v1612905473708!5m2!1sru!2sru" width="100%" height="298" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer__text">
            © <?php echo $currentYear ?> Историческе Игры. Все права защищены
        </div>
    </div>
</div>
</body>
</html>
