@extends('layout')

@section('header')
@endsection

@section('content')

        <div class="content__video-body">
        <div class="content__video">
            <div>
            <img src="https://theblueprint.ru/upload/15303/social_image_id.gif" style="width: 100%; max-width:550px; height:100%; border:none; overflow:hidden; max-height:400px;" alt="" class="content-gif"></img>
            <img src="https://cdn.dribbble.com/users/725346/screenshots/6727425/mds-collivery-animated-gif-enormous-strides.gif" style="width: 100%; max-width:550px; height:100%; border:none; overflow:hidden; max-height:400px; margin-top:150px" alt="" class="content-gif"></img>
        </div>
        </div>

        <div class="contens">
          <img height="100%" width="100%" src="https://i.gifer.com/VZaA.gif" alt=""></div>
        </div>



        <div class="content__right">
            <div class="content__right-body">
                <div class="content__right-head">
                    Заявка
                </div>
              <div class="right__title">
                <a class="right__enter activate" id="u">Юр лицо </a>
                <a class="right__enter" id="f">Физ лицо </a>
              </div>
              <div class="channge">
                  <div class="conetnt__text-write">
                  <form action="POST">
                  <input
                    class="email activ"
                    type="text"
                    placeholder="Название организцаии"
                    name="name"
                  />
                  <input
                    type="text"
                    placeholder="ИНН"
                    name="nomber"
                    class="nomber activ"
                  />

                  <input
                    class="name__people"
                    type="text"
                    placeholder="ФИО"
                    name="name_people"
                  />
                  <input
                    type="text"
                    placeholder="Мобильный телефон"
                    name="name_people"
                    class="nomber__people"
                  />

                  <input
                    type="text"
                    placeholder="Email"
                    name="email"
                    class="email"
                  />
                  </div>

                  <button class="button__send" type="submit">Отправить заявку</button>

                <div class="content__right-footer">
                <div class="agree__rules">
                    <div class="rules__left">
                    Нажимая Продолжить вы соглашаетесь с условиями пользовательского соглашения
                    </div>
                    <input type="radio">
                    </div>

                  <div class="agree__rules">
                    <div class="rules__left">
                      Я даю согласие на получение классных новостных рассылок
                    </div>
                    <input type="checkbox">
                </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <div class="content__prices">
            <div class="content__prices-body">
                <h1 class="">Тарифы для частных лиц</h1>

                <div class="prices__link">
                    <div class="prices__text">Все тарифы</div>
                    <div class="prices__text">Быстрая доставка</div>
                    <div class="prices__text">Тяжелый груз</div>
                    <div class="prices__text">По Росии</div>
                    <div class="prices__text">Международная доставка</div>
                </div>

                <div class="content__prices-block">
                    <div class="prices__left">
                        <h3 class="prices__left-title">Экспресс-лайт</h3>

                        <div class="prices__left-text">
                            Экспресс-доставка документов и мелких грузов
                        </div>
                    </div>

                    <div class="prices__right">
                        <div class="prcies__right-text">до 29 кг</div>
                        <div class="prcies__right-text">от 1 дня</div>
                        <div class="prcies__right-text">
                            Россия, Беларусь, Казахстан, Армения, Киргизия
                        </div>
                    </div>
                </div>

                <div class="content__prices-block">
                    <div class="prices__left">
                        <h3 class="prices__left-title">Экспресс-тяжеловесы</h3>

                        <div class="prices__left-text">
                            Экспресс доставка грузов
                        </div>
                    </div>

                    <div class="prices__right">
                        <div class="prcies__right-text">от 30 кг</div>
                        <div class="prcies__right-text">от 1 дня</div>
                        <div class="prcies__right-text">
                            Россия, Беларусь, Казахстан, Армения, Киргизия
                        </div>
                    </div>
                </div>

                <div class="content__prices-block">
                    <div class="prices__left">
                        <h3 class="prices__left-title">Супер-экспресс</h3>

                        <div class="prices__left-text">
                            Срочная доставка к определенному часу документов и
                            мелких грузов
                        </div>
                    </div>

                    <div class="prices__right">
                        <div class="prcies__right-text"></div>
                        <div class="prcies__right-text">1-2 дня</div>
                        <div class="prcies__right-text">
                            Россия, Беларусь, Казахстан, Армения, Киргизия
                        </div>
                    </div>
                </div>

                <div class="content__prices-block">
                    <div class="prices__left">
                        <h3 class="prices__left-title">
                            Магистральный экспресс
                        </h3>

                        <div class="prices__left-text">
                            Экономичная наземная доставка
                        </div>
                    </div>

                    <div class="prices__right">
                        <div class="prcies__right-text"></div>
                        <div class="prcies__right-text">1-2 дня</div>
                        <div class="prcies__right-text">
                            Россия, Беларусь, Казахстан, Армения, Киргизия
                        </div>
                    </div>
                </div>

                <div class="content__prices-block">
                    <div class="prices__left">
                        <h3 class="prices__left-title">Экономичный экспресс</h3>

                        <div class="prices__left-text">
                            Экономичная наземная доставка
                        </div>
                    </div>

                    <div class="prices__right">
                        <div class="prcies__right-text"></div>
                        <div class="prcies__right-text">от 3 дней</div>
                        <div class="prcies__right-text">
                            Россия, Беларусь, Казахстан, Армения, Киргизия
                        </div>
                    </div>
                </div>

                <div class="content__prices-block">
                    <div class="prices__left">
                        <h3 class="prices__left-title">Экономичный экспресс</h3>

                        <div class="prices__left-text">
                            Экономичная наземная доставка
                        </div>
                    </div>

                    <div class="prices__right">
                        <div class="prcies__right-text"></div>
                        <div class="prcies__right-text">от 3 дней</div>
                        <div class="prcies__right-text">
                            Россия, Беларусь, Казахстан, Армения, Киргизия
                        </div>
                    </div>
                </div>
            </div>

            </div>

        <div class="content__baner">
            <div class="content__baner-body">
                <div class="content__body-title">
                    <div class="content__body-block">
                        <div class="content__body-text">2000</div>
                        <span class="contnent__body-info">
                            год основания компании
                        </span>
                    </div>

                    <div class="content__body-block">
                        <div class="content__body-text">6000+</div>
                        <span class="contnent__body-info"> Курьеров </span>
                    </div>

                    <div class="content__body-block">
                        <div class="content__body-text">40000</div>
                        <span class="contnent__body-info">
                            Населенных пунктов
                        </span>
                    </div>

                    <div class="content__body-block">
                        <div class="content__body-text">300 000+</div>
                        <span class="contnent__body-info">
                            отправлений в день
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="title__delivery">
            Размеры посылок
        </div>

        <div class="content__change">
            <div class="content__change-body">
                <div class="conetnt__change-block">
                    <div class="content__change-title">
                        <div class="change__title-header">
                            <span class="change__text"> Размер </span>
                            <span class="content__change-sizze"> XS </span>
                        </div>

                        <div class="content__change-price">
                            <span> 250–500 ₽ </span>
                        </div>
                    </div>
                    <div class="contenet__change-image">
                        <img src="{{ asset('img\del1.png') }}" alt="" class="content__change-img" />
                    </div>
                </div>

                <div class="conetnt__change-block">
                    <div class="content__change-title">
                        <div class="change__title-header">
                            <span class="change__text"> Размер </span>
                            <span class="content__change-sizze"> S </span>
                        </div>

                        <div class="content__change-price">
                            <span> 300–600 ₽ </span>
                        </div>
                    </div>
                    <div class="contenet__change-image">
                    <img src="{{ asset('img\del2.png') }}" alt="" class="content__change-img" />
                    </div>
                </div>

                <div class="conetnt__change-block">
                    <div class="content__change-title">
                        <div class="change__title-header">
                            <span class="change__text"> Размер </span>
                            <span class="content__change-sizze"> M </span>
                        </div>

                        <div class="content__change-price">
                            <span> 400–800 ₽ </span>
                        </div>
                    </div>
                    <div class="contenet__change-image">
                    <img src="{{ asset('img\del3.png') }}" alt="" class="content__change-img" />
                    </div>
                </div>

                <div class="conetnt__change-block">
                    <div class="content__change-title">
                        <div class="change__title-header">
                            <span class="change__text"> Размер </span>
                            <span class="content__change-sizze"> L </span>
                        </div>

                        <div class="content__change-price">
                            <span> 650–1500 ₽ </span>
                        </div>
                    </div>
                    <div class="contenet__change-image">
                    <img src="{{ asset('img\del4.png') }}" alt="" class="content__change-img" />
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('footer')
@endsection
