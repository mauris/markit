<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ isset($title) ? $title : '' }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="{{URL::to('/')}}/theme/default/default.css" rel="stylesheet" type="text/css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{ isset($content) ? $content : '' }}
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
