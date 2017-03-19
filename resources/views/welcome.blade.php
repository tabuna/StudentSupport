@extends('layouts.app')

@section('content')


    <section class=""  style="background: url(https://static.pexels.com/photos/57825/pexels-photo-57825.jpeg); background-size: cover;">


        <div class="bg-black-opacity" style="height: calc(100vh - 50px);width: 100%;">
            <div class="container" style="height: calc(100vh - 50px);   display: flex;
  align-items: center;
  justify-content: center;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="m-b-xxl padder-v">
                            <h1 class="font-bold l-h-1x m-t-xxl text-white padder-v animated fadeInDown">
                                Сайт <span class="b-b b-3x">помощи</span> студентам
                            </h1>
                            <h3 class="m-t-xl l-h-1x text-white">
                                Это сервис по принципу «Я хочу <span class="b-b b-2x">заказать</span>, а я могу выполнить!». Здесь выполнят вашу работу без посредников.
                            </h3>
                            <p class="text-center m-b-xxl wrapper">
                                <a href="/" class="btn btn-lg btn-default btn-rounded text-lg font-bold m-b-xxl">Заказать</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="container-fluid">

            <div class="row box-shadow-lg">

                <div class="container">

                    <div class="row wrapper-lg">
                        <div class="col-md-10 col-md-offset-1">
                            <p class="h1 font-thin">Как работает сайт <span class="text-info">помощи студентам</span>?</p>

                            <div class="col-md-8 pull-in m-t-md  text-justify">
                                <small>
                                    Уважаемые исполнители - зарабатывать с нами легко и удобно. Здесь размещают любые студенческие заказы: рефераты, курсовые, дипломные, контрольные и другие работы.
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class="row wrapper-lg">
                        <div class="col-md-10 col-md-offset-1">

                            <div class="row">
                                <div class="col-xs-12 col-sm-3  font-thin">
                                    <div class="h3 text-info b-b b-info padder-v font-thin">
                                        1. Заказать
                                    </div>
                                    <div class=" text-muted m-t-md l-h-1x">
                                        <strong>Сайт бесплатно разошлёт ваш заказ исполнителям</strong>
                                        <p>А исполнители предложат цены. Это удобнее, чем искать кого-то по интернету. Тем более если у вас срочный заказ студенческой работы. Оформите заявку и узнайте стоимость работы уже сегодня.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3  font-thin">
                                    <div class="h3 text-info b-b b-info padder-v font-thin">
                                        2. Выбрать
                                    </div>
                                    <div class=" text-muted m-t-md l-h-1x">
                                        Выберите исполнителя по цене и отзывам
                                        С выбранным исполнителем вы сможете связаться в любое время и узнать о ходе выполнения. Кроме того, вы сможете получать работу по частям — так вы будете уверены, что работа идёт в нужном русле.
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3  font-thin">
                                    <div class="h3 text-info b-b b-info padder-v font-thin">
                                        3. Оплатить
                                    </div>
                                    <div class=" text-muted m-t-md l-h-1x">
                                        Получите выполненный заказ и отправьте преподавателю
                                        На все выполненные работы мы даём гарантию. После защиты работы вы сможете оставить исполнителю отзыв. Теперь вы знаете, почему стоит заказывать студенческие работы на сайте помощи студентам.
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3  font-thin">
                                    <div class="h3 text-info b-b b-info padder-v font-thin">
                                        4. Скачать
                                    </div>
                                    <div class=" text-muted m-t-md l-h-1x">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis .
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>


                </div>


            </div>

        </div>
    </section>


    {{--
    <section class="container-fluid b-b b-t">
        <div class="row">

            <div class="container m-t-lg m-b-lg">

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="m-t-md m-b-md v-center">
                                <div class="pull-left m-r-md">
                                    <i class="icon-credit-card fa-4x"></i>
                                </div>
                                <div class="">
                                    <strong class="text-uppercase text-info m-b-xs block">ОТ 500 РУБЛЕЙ</strong>
                                    <small class="font-thin">Квалифицированная помощь от наших специалистов за небольшие деньги</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="m-t-md m-b-md v-center">
                                <div class="pull-left m-r-md">
                                    <i class="icon-clock fa-4x"></i>
                                </div>
                                <div class="">
                                    <strong class="text-uppercase text-info m-b-xs block">ОТ 1 ДНЯ</strong>
                                    <small class="font-thin">Вы сами устанавливаете срок к которому вам необходимо получить готовую работу</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="m-t-md m-b-md v-center">
                                <div class="pull-left m-r-md">
                                    <i class="icon-layers fa-4x"></i>
                                </div>
                                <div class="">
                                    <strong class="text-uppercase text-info m-b-xs block">БЕСПЛАТНЫЕ ДОРАБОТКИ</strong>
                                    <small class="font-thin">Без лишних вопросов доведём работу до требуемого результата без дополнительных затрат</small>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">


        <div class="row bg-white">

            <div class="container">

                <div class="col-md-10 col-md-offset-1 m-t-lg m-b-lg">
                    <div class="row">

                        <div class="col-md-10 m-b-xxl">
                            <p class="h1 font-thin">Наши <span class="text-info">Акции и Новости</span></p>

                            <div class="col-md-8 pull-in m-t-md text-justify">
                                <small>
                                    Разнообразный и богатый опыт реализация намеченных плановых заданий позволяет выполнять важные задания по разработке направлений прогрессивного развития.
                                </small>
                            </div>
                        </div>


                        <article class="col-md-4 padder-v">
                            <div class="panel panel-default box-shadow-lg pos-rlt">
                                <div data-mh="main-news-img">
                                    <a href="https://liptur.ru/public/ru/news/romanovskiy-indyuk-stal-dlya-parizhan-olicetvoreniem-tradicionnoy-russkoy-kultury"><img src="https://liptur.ru/storage/2017/03/17/b74aaf6e98ec4af401170aefca21e414b47f3abb_medium.jpg" class="img-full img-post "></a>
                                </div>
                                <div class="wrapper-md">
                                    <div data-mh="main-news-body">
                                        <p class="h4 m-b-xs text-ellipsis"><a href="https://liptur.ru/public/ru/news/romanovskiy-indyuk-stal-dlya-parizhan-olicetvoreniem-tradicionnoy-russkoy-kultury">Романовский индюк стал для парижан олицетворением традиционной русской культуры</a>
                                        </p>
                                        <p class="text-xs">
                                            Более 50 изделий традиционных промыслов и ремесел Липецкой области представлены на выставке ...
                                        </p>
                                    </div>
                                    <p class="top-left wrapper bg-info">
                                        <time class="font-bold text-white">
                                            17 Март
                                        </time>
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 padder-v">
                            <div class="panel panel-default box-shadow-lg pos-rlt">
                                <div data-mh="main-news-img">
                                    <a href="https://liptur.ru/public/ru/news/romanovskiy-indyuk-stal-dlya-parizhan-olicetvoreniem-tradicionnoy-russkoy-kultury"><img src="https://liptur.ru/storage/2017/03/17/b74aaf6e98ec4af401170aefca21e414b47f3abb_medium.jpg" class="img-full img-post "></a>
                                </div>
                                <div class="wrapper-md">
                                    <div data-mh="main-news-body">
                                        <p class="h4 m-b-xs  text-ellipsis"><a href="https://liptur.ru/public/ru/news/romanovskiy-indyuk-stal-dlya-parizhan-olicetvoreniem-tradicionnoy-russkoy-kultury">Романовский индюк стал для парижан олицетворением традиционной русской культуры</a>
                                        </p>
                                        <p class="text-xs">
                                            Более 50 изделий традиционных промыслов и ремесел Липецкой области представлены на выставке ...
                                        </p>
                                    </div>
                                    <p class="top-left wrapper bg-info">
                                        <time class="font-bold text-white">
                                            17 Март
                                        </time>
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 padder-v">
                            <div class="panel panel-default box-shadow-lg pos-rlt">
                                <div data-mh="main-news-img">
                                    <a href="https://liptur.ru/public/ru/news/romanovskiy-indyuk-stal-dlya-parizhan-olicetvoreniem-tradicionnoy-russkoy-kultury"><img src="https://liptur.ru/storage/2017/03/17/b74aaf6e98ec4af401170aefca21e414b47f3abb_medium.jpg" class="img-full img-post "></a>
                                </div>
                                <div class="wrapper-md">
                                    <div data-mh="main-news-body">
                                        <p class="h4 m-b-xs text-ellipsis">
                                            <a href="https://liptur.ru/public/ru/news/romanovskiy-indyuk-stal-dlya-parizhan-olicetvoreniem-tradicionnoy-russkoy-kultury">Романовский индюк стал для парижан олицетворением традиционной русской культуры</a>
                                        </p>
                                        <p class="text-xs">
                                            Более 50 изделий традиционных промыслов и ремесел Липецкой области представлены на выставке ...
                                        </p>
                                    </div>
                                    <p class="top-left wrapper bg-info">
                                        <time class="font-bold text-white">
                                            17 Март
                                        </time>
                                    </p>
                                </div>
                            </div>
                        </article>


                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
    <div class="bg-img-map box-shadow b-t  hidden-xs" style="background: url(http://themes.suelo.pl/trener/images/backgrounds/background04.jpg);background-size: cover;">
        <div class="bg-black-opacity">
            <div class="container">
                <div class="row m-t-xl m-b-xl">
                    <div class="col-sm-12 text-center text-white">
                        <h4 class="m-b">Зинтересованы?</h4>
                        <p>
                            <small>Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечен

                            </small>
                        </p>
                        <p><a href="#" class="btn btn-lg btn-info btn-rounded">Заказать работу</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
