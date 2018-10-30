<!DOCTYPE html>
<!--[if lt IE 9]>
<html lang="ja" class="no-js lt-ie9" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja" class="no-js" prefix="og: http://ogp.me/ns#"><!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="description" content="sample text,sample tex">
    <meta name="keywords" content="word1,word2,word3">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="">
    <meta property="og:description" content="sample text,sample tex">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="blog">
    <meta property="fb:admins" content="">
    <meta property="og:image" content="assets/images/common/ogp.png">

    <meta name="apple-mobile-web-app-title" content="">

    <link rel="shortcut icon" href="assets/images/common/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="images/common/apple-touch-icon-precomposed.png">
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body id="js-body">

    <div id="fb-root"></div>

    <noscript class="for-no-js">Javascriptを有効にしてください。</noscript>
    <div class="for-old">お使いのOS・ブラウザでは、本サイトを適切に閲覧できない可能性があります。最新のブラウザをご利用ください。</div>

    <input type="hidden" value="./" id="js-base-url">

    <div class="l-wrap js-wrap">

        @include('admin.layouts.header')
           
        @yield('content')

        @include('admin.layouts.footer')

    </div>

    <script src="{{ asset('/lib/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('/lib/modernizr.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/scripts.js') }}"></script>



</body>


</html>
