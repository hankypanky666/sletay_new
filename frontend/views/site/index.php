<?php

/* @var $this yii\web\View */
use yii\bootstrap\Modal;

$this->title = 'Поиск дешевых авиабилетов в Беларуси - SLETAY.BY';
?>
<div class="site-index">
    <div class="container">
        <div class="jumbotron">
            <h1>Удобный поиск дешевых авиабилетов онлайн!</h1>
            <h2>Здесь можно купить авиабилеты дешево</h2>
        </div>

        <div class="row">
            <div class="center-block">
                <script charset="utf-8" src="//www.travelpayouts.com/widgets/7ae14e0ce4f47538810fa122d57f405d.js?v=568" async>
                </script>

            </div>
        </div>
    </div>

    <div class="body-content">

        <div class="white-back">
            <div class="container">
                <div class="row no-gutter">

                        <h2>Хотите отдохнуть, но ещё не решили когда?</h2>

                        <div class="col-md-6" style="padding-right: 15px">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-calendar"></i>
                                         Календарь низких цен на авиабилеты</h3>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>Думаете, когда и на сколько взять отпуск?</li>
                                        <li>Выбираете лучшие даты для поездки в Париж?</li>
                                        <li>Хотите знать, когда дешевле отдохнуть — зимой или летом?</li>
                                    </ul>
                                    <?php
                                    Modal::begin([
                                        'header' => '<h4><i class="fa fa-calendar"></i> Календарь низких цен на авиабилеты</h4>',
                                        'toggleButton' => ['label' => 'Посмотреть цены <strong>в календаре</strong>',
                                            'class' => 'btn btn-block',
                                        ],
                                        'size' => 'modal-lg',
                                    ]);

                                    echo '<script src="//www.travelpayouts.com/calendar_widget/iframe.js?marker=77752.
&origin=MSQ&destination=BKK&currency=usd&width=940&searchUrl=search.sletay.by%2Fflights&one_way=false&only_direct=false&locale=ru&period=year&range=7%2C14" async></script>
';
                                    Modal::end();
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" style="padding-left: 15px;">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-map-o"></i>
                                        Поиск дешевых авиабилетов на карте</h3>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>Ищете, куда в Азии сейчас дешевле всего слетать?</li>
                                        <li>Планируете маршрут перелетов по Европе?</li>
                                        <li>Взяли отпуск и решаете, в какую страну поехать?</li>
                                    </ul>
                                    <?php
                                    Modal::begin([
                                        'options' => ['class' => 'modal-nopadding'],
                                        'header' => '<h4><i class="fa fa-calendar"></i> Карта поиска авиабилетов</h4>',
                                        'toggleButton' => ['label' => 'Посмотреть цены <strong>на карте</strong>',
                                            'class' => 'btn btn-block',
                                        ],
                                        'size' => 'modal-lg',
                                    ]);

                                    echo '<iframe src="//maps.avs.io/flights/?auto_fit_map=true&hide_sidebar=true&hide_reformal=true&disable_googlemaps_ui=true&zoom=3&show_filters_icon=true&redirect_on_click=true&small_spinner=true&hide_logo=true&direct=false&lines_type=TpLines&cluster_manager=TpWidgetClusterManager&marker=77752.map&show_tutorial=false&locale=ru&host=search.sletay.by%2Fmap&origin_iata=MSQ" width="898px" height="600px" scrolling="no" frameborder="0"></iframe>        </div>
';
                                    Modal::end();
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php if(isset($model)): ?>
                        <?= print_r($model->data->data) ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>

    </div>
</div>

