<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/admin_custom.css">
        <title>Document</title>
    </head>

    <body>

        @include('admin.partials.nav')


        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>







        <script src="/js/jquery-3.5.1.slim.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>


    </body>

    </html>
