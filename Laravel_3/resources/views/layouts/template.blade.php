<html>

    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--Style-->
        <style>
            .imageHead{
                float: right;
                padding: 15px;
                width: 100px;
            }
            .head{
                text-align: center;
                font-family: 'Raleway', sans-serif;
                margin-bottom: 10px;
                background-color: #fff;
                color: #636b6f;
            }
            .content form{
                width: 500px;
                margin: 0 auto;
            }
            .content table{
                width: 800px;
                margin: 0 auto;
            }
            .footer{
                position: fixed;
                bottom: 0px;
                width: 100%;
                font-size: 0.7em;
                margin-bottom: 15px;
            }
        </style>

    </head>

    <body>
        <div class="head">
            <img src="/images/laravel.png" class="imageHead"/>
            @yield("head")
        </div>
        <div class="content">
            @yield("content")
        </div>
    </body>

    <footer>
        <div class="footer">
            @yield("footer")
                Proyecto Elaborado con Laravel 7.x
        </div>
    </footer>

</html>
