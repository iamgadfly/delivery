<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="{{ asset('css\styles.css') }}" rel="stylesheet" />

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">

        <title>delivery</title>
    </head>
    <body>
@yield('header')

        <div class="header__line">
            <div class="header__body">
                <div class="header__body-left">
                    <div class="header__body-logo">
                      <a href="/"><img src="{{ asset('img\logo.jpg') }}" alt="" /> </a>
                    </div>

                    <div class="header__body-link">
                        <a href="#" class="header__text">Отследить</a>
                    </div>

                    <div class="header__body-link">
                        <a href="#" class="header__text">Рассчитать</a>
                    </div>
                    <div class="header__body-link">
                        <a href="#" class="header__text">Тарифы</a>
                    </div>
                    <div class="header__body-link">
                        <a href="#" class="header__text">Посылка</a>
                    </div>
                    <div class="header__body-link">
                        <a href="#" class="header__text">О компании</a>
                    </div>
                    <div class="header__body-link">
                        <a href="#" class="header__text">Физическим лицам</a>
                    </div>

                    <div class="header__body-link">
                        <a href="#" class="header__text">Юридическим лицам</a>
                    </div>

                    <div class="header__body-link">
                        <a href="#" class="header__text">Прайс</a>
                    </div>

                    <div class="header__body-link">
                        <a href="bid" class="header__text">Заявка</a>
                    </div>
                </div>

                <div class="header__body-right">
                <img class="menu__burger" src="https://img.icons8.com/material-sharp/24/000000/menu--v3.png"/>
                <!-- <img class="menu__burger" src="https://img.icons8.com/ios-glyphs/30/000000/multiply.png"/> -->
                </div>
            </div>
        </div>

        <div class="header__menuburger-block">
                <div class="header__body-link">
                        <a href="#" class="header__text">Отследить</a>
                    </div>

                    <div class="header__body-link">
                        <a href="#" class="header__text-burger">Рассчитать</a>
                    </div>
                    <div class="header__body-link">
                        <a href="#" class="header__text-burger">Тарифы</a>
                    </div>
                    <div class="header__body-link">
                        <a href="#" class="header__text-burger">Посылка</a>
                    </div>
                    <div class="header__body-link">
                        <a href="#" class="header__text-burger">О компании</a>
                    </div>
                    <div class="header__body-link">
                        <a href="#" class="header__text-burger">Физическим лицам</a>
                    </div>

                    <div class="header__body-link">
                        <a href="#" class="header__text-burger">Юридическим лицам</a>
                    </div>

                    <div class="header__body-link">
                        <a href="#" class="header__text-burger">Прайс</a>
                    </div>

                    <div class="header__body-link">
                        <a href="bid" class="header__text-burger">Заявка</a>
                    </div>

                </div>
        @yield('content')





        @yield('footer')
        <div class="footer">
    <div class="footer__body">
        <div class="footer__left">
            <div class="footer__left-title">Физическим лицам</div>
        <div class="footer__left-block">
            <div class="footer__block-column1">
                <div>
                    <a href="" class="column__text">Отследить</a>
                </div>

                <div>
                    <a href="" class="column__text">Расчитать</a>
                </div>

                <div>
                    <a href="" class="column__text">Тарифы</a>
                </div>

                <div>
                    <a href="" class="column__text">Заявка</a>
                </div>
            </div>

            <div class="footer__block-column2">
                <div>
                    <a href="" class="column__text">О компании</a>
                </div>

                <div>
                    <a href="" class="column__text">Прайс</a>
                </div>
            </div>
        </div>
        </div>

        <div class="footer__right-block">
            <div class="footer__right-title">Онлайн звонок</div>
            <div class="footer__titile-about">+7(495)009-04-05</div>
        </div>
    </div>

    <div class="footer__contacts">
        <div class="contacts__title">Мы в соцсетях</div>

        <div class="contacts__block">
            <div class="contact__text">
                 <span>VK</span>
                <div class="contact__image">
                    <img src="{{ asset('img\vk.svg') }}" alt="">
                </div>
            </div>

            <div class="contact__text">
               <span>Instagram</span>
                <div class="contact__image">
                    <img src="{{ asset('img\Instagram.svg') }}" alt="">

                </div>
            </div>

            <div class="contact__text">
         <div> Facebook</div>
                <div class="contact__image">
                    <img src="{{ asset('img\facebook.svg') }}" alt="">
                </div>
            </div>


            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js\index.js') }}" ></script>
</body>
</html>
