<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ isset($title) ? $title : '' }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="{{URL::to('/')}}/theme/default/default.less" rel="stylesheet/less" type="text/css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.1.0/less.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{ $content or '' }}
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
    @if (Config::get('markit.ga'))
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '{{Config::get('markit.ga')}}', 'auto');
    ga('send', 'pageview');

    </script>
    @endif
</html>
