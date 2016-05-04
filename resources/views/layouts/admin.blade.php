<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/styles.css">    
    </head>
    <body>
        <nav class="navbar navbar-default navbar-black">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-brand-white" href="#">UTBVirtual</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/admin/periodos">Periodos <span class="sr-only">(current)</span></a></li>
                        <li><a href="https://github.com/IngenieriaDeSistemasUTB/sat/wiki" target="_blank">API Doc</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/auth/logout">Logout</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <script src="/js/jquery.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>