<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body id="app-layout">


<header id="header" class="navbar bg-white-only padder-v  box-shadow-lg">
    <div class="container">
        <div class="navbar-header m-t-sm">
            <button class="btn visible-xs pull-right m-r" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <i class="icon-menu"></i>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand v-center m-t-xs">
                <span class="h4">Помощь студентам</span>
                {{-- <img src="https://vsesdal.com/templates/logo_new.png" class="img-responsive"> --}}
            </a>
        </div>
        <div class="collapse navbar-collapse">

            {{--
            <ul class="nav navbar-nav">
                <li class="">
                    <a class="page-scroll" href="#about">О проекте</a>
                </li>
                <li class="">
                    <a class="page-scroll" href="#services">Об оплате</a>
                </li>
                <li class="">
                    <a class="page-scroll" href="#contact">Контакты</a>
                </li>
            </ul>
--}}

            @if (!Auth::guest())
                <form class="navbar-form navbar-form-sm navbar-left" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control input-sm bg-light no-border rounded padder"
                                   placeholder="Поиск предложений...">
                            <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="icon-magnifier"></i></button>
              </span>
                        </div>
                    </div>
                </form>
        @endif


        <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li>
                        <div class="m-t-sm text-center">
                            <a href="{{ url('/login') }}" class="btn btn-link btn-sm">Войти</a> или
                            <a href="{{ url('/register') }}" class="btn btn-sm btn-info btn-rounded m-l"><strong>Зарегистрироваться</strong></a>
                        </div>
                    </li>
                @else
                    <li><a href="{{route('task.list')}}" title="Спрос и предложения">
                            <span class="v-center">
                                 <i class="icon-compass text-lg"></i> <span class="m-l-xs">Поиск</span>
                            </span>
                        </a>
                    </li>


                    <li><a href="/organizations" title="Организация">
                            <span class="v-center">
                                 <i class="icon-organization text-lg"></i> <span class="m-l-xs">Организация</span>
                            </span>
                        </a>
                    </li>

                    <li><a href="{{route('account.edit')}}" title="Профиль">
                            <span class="v-center">
                                 <i class="icon-user text-lg"></i> <span class="m-l-xs">Профиль</span>
                            </span>
                        </a>
                    </li>

                    <li><a href="/chat" title="Сообщения">
                            <span class="v-center">
                                 <i class="icon-envelope text-lg"></i>
                                  <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
                                <span class="m-l-xs">Сообщения</span>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="https://liptur.ru/profile" title="Мой профиль">
<span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
<img src="data:image/jpeg;base64,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" alt="tabuna">
<i class="on md b-white bottom"></i>
</span>
                            <span class="hidden-sm hidden-md">tabuna</span>
                        </a>
                    </li>

                @endif
            </ul>
        </div>
    </div>
</header>


@yield('content')



<footer id="footer" role="footer">



    <div class="bg-white-only box-shadow-lg b-t  padder-v">
        <div class="container">

            <div class="row padder-v">
                    <div class="col-md-3 vi-col-4">
                        <a class="wrapper-sm v-center">
                            <i class="icon-phone fa-2x m-r-xs"></i>
                             8-8000-35-35
                        </a>
                    </div>
                    <div class="col-md-3 hidden-xs vi-hide">
                        <a class="wrapper-sm v-center" role="button" data-toggle="collapse" href="#collapse-recommended-links" aria-expanded="false" aria-controls="collapse-recommended-links">
                            <i class="icon-info fa-2x  m-r-xs"></i>
                            Полезные ссылки
                        </a>
                    </div>
                    <div class="col-md-3 vi-col-4">
                        <a class="wrapper-sm click-visually v-center" data-toggle="visually-impaired" data-target="#html">
                            <i class="icon-eye fa-2x m-r-xs"></i>
                            Контакты
                        </a>
                    </div>





                    <div class="col-md-3 vi-hide">
                        <p>
                            <a href="https://vk.com/lipsobtur" target="_blank" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-vk"></i></a>

                            <a href="http://ok.ru/group/57780474019888" target="_blank" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-odnoklassniki"></i></a>

                            <a href="#" target="_blank" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-facebook"></i></a>

                            <a href="https://twitter.com/lipsobtur" target="_blank" class="btn btn-icon btn-rounded btn-grey"><i class="fa fa-twitter"></i></a>

                            <a href="#" target="_blank" class="btn btn-icon btn-rounded btn-grey">
                                <i class="fa fa-rss" aria-hidden="true"></i>
                            </a>

                        </p>

                    </div>

                </div>




            <div class="collapse" id="collapse-recommended-links" aria-expanded="false">
                <div class="row m-n b-t padder-v">


                    <div class="col-md-12 m-b-md">
                        <div class="pos-rlt">
                            <a class="wrapper-sm  top-right text-muted" role="button" data-toggle="collapse" href="#collapse-recommended-links" aria-expanded="false" aria-controls="collapse-recommended-links">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>

                        <p class="h3 font-thin ">Наши <span class="text-info">Партнёры</span></p>
                        <div class="col-md-6 pull-in m-t-md">
                            <small>
                                Вы оплачиваете товар после его получения в почтовом отделении или курьеру при доставке. Таким образом, вы снижаете риск обмана - никаких предоплат не требуется!
                            </small>
                        </div>
                    </div>
                    <div class="col-md-12">


                        <div class="row">
                            <div class="col-md-2">
                                <a href="" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="Федеральное агентство по туризму. Национальный туристический портал" data-original-title="" title="">
                                    <img src="https://liptur.ru/img/tour/partner/1.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="Календарь событий Липецкой области" data-original-title="" title="">
                                    <img src="https://liptur.ru/img/tour/partner/2.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="Центр событийного туризма проводит областной конкурс «Я живу в Липецкой области!»" data-original-title="" title="">
                                    <img src="https://liptur.ru/img/tour/partner/3.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="Глянцевый журнал о внутреннем и въездном туризме. Репортажи о путешествиях, туристические новости, интервью, фотографии уникальных мест России и стран СНГ." data-original-title="" title="">
                                    <img src="https://liptur.ru/img/tour/partner/4.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="Автотуристский кластер «Задонщина»" data-original-title="" title="">
                                    <img src="https://liptur.ru/img/tour/partner/5.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" target="_blank" class="btn-opacity block" data-container="body" data-toggle="popover" data-placement="top" data-content="По городам и весям ТРК Липецкое время" data-original-title="" title="">
                                    <img src="https://liptur.ru/img/tour/partner/6.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="wrapper b-t bg-gray hidden-xs vi-hide">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">

                    <h4 class="text-u-c m-b font-thin text-uppercase">Информация</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>О проекте</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Безопасная сделка</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Гарантии</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Исполнители</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Интересные места</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Контакты</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Помощь	</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">МАРШРУТЫ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Пешком</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Доступные для инвалидов</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>На велосипеде</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>На автомобиле</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">АУДИОГИДЫ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Пешеходные</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Автомобильные</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">НОВОСТИ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Туриндустрия</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Бюро</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Городские</a></li>
                    </ul>


                </div>
                <div class="col-xs-12 col-sm-3">


                    <h4 class="text-u-c m-b font-thin text-uppercase">ФОТО</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Достопримечательности</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Мосты</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Сады и парки</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">ВИДЕО</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Познавательное</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Творчество</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">РАЗМЕЩЕНИЕ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Гостиницы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Мини-отели</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">ГАСТРОНОМИЯ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Кафе</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Рестораны</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Анти-кафе</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Спорт-бары</a></li>
                    </ul>

                </div>
                <div class="clearfix hidden-sm hidden-lg hidden-md"></div>
                <div class="col-xs-12 col-sm-3">


                    <h4 class="text-u-c m-b font-thin text-uppercase">ДОСУГ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Театры</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Выставочные залы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Ночные клубы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Кинотеатры</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">ШОППИНГ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Торговые комплексы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Сувениры</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Ночные клубы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Кинотеатры</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">БРОНИРОВАНИЕ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Отели</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Такси</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Ночные клубы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Кинотеатры</a></li>
                    </ul>


                    <h4 class="text-u-c m-b font-thin text-uppercase">СОБЫТИЯ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Концерты</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Выставки</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Спектакли</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Опера и балет</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Спорт</a></li>
                    </ul>


                </div>
                <div class="col-xs-12 col-sm-3">


                    <h4 class="text-u-c m-b font-thin text-uppercase">ТРАНСПОРТ</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Аэропорты</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Порты морские и речные вокзалы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Международные и междугородние автобусы</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Прокат велосипедов</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Прокат автомобилей</a></li>
                    </ul>

                    <h4 class="text-u-c m-b font-thin text-uppercase">ПАМЯТКА ТУРИСТА</h4>
                    <ul class="list-unstyled m-b-md text-sm">
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Туристские центры</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Вопрос-ответ</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Консульства</a></li>
                        <li><a href="#"><i class="fa fa-angle-right text-muted m-r-sm"></i>Карта Гостя</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
