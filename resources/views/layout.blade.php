<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- <title>@yield('title')</title> -->
    <title>{{$title}}</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> -->
</head>

<body>
    <div class="inner bg-white">
        <a href="{{url('/content1')}}">
            <img src="images/btn1.jpg" alt="応募フォームはこちら" class="btn-go-page">
        </a>
        <div class="content">
            <!-- show content -->
			@yield('content')
        </div>        
    </div>
    <section class="footer">
        <div>
            <p>クーポンに関するお問い合わせ先</p>
            <p class="line-dotted"></p>
            <p>プチギフト運営事務局</p>
            <p class="mb10">サントリーキャンペーン係</p>
            <p class="txt-bold mb10 txt-underline">support+premiumfriday@support.petitgift.jp</p>
            <p>営業日:10時〜18時（土日・祝日休）</p>
        </div>
    </section>
    <script src="{{ asset('js/jquery-1.11.3.min.js')}}"></script>
</body>

</html>