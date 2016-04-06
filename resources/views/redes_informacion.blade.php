@extends('main')

@section('title','Redes de Información')

@section('content')
    <div class="content shortcodes">

        <div class="layout">
            <div class="title">
                <h3 class="lined">Heladas en Twitter</h3>
            </div>

            <div class="row">
                <div class="row-item col-1_2" style="min-height: 600px;">


                    <a class="twitter-timeline" href="https://twitter.com/hashtag/heladas" data-widget-id="703217207002734592">Tweets sobre #heladas</a>
                    <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>

                    <div class="gap" style="height: 50px;"></div>
                </div>

                <div class="row-item col-1_2" style="min-height: 600px;">

                    <a class="twitter-timeline" href="https://twitter.com/hashtag/bajocero" data-widget-id="703232390097932289">Tweets sobre #bajocero</a>
                    <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>
                    <div class="gap" style="height: 50px;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection