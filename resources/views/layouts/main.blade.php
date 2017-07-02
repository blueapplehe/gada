<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/main.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/npm.js"></script>
    </head>
    <body>
        <div>
            <div class="container">
                <div class='row'>
                    <div class='col-md-8'>
                        <img src="http://www.kpgada.com/images/logo.jpg" style="max-width: 100%" />
                    </div>
                    <div  class='col-md-2'>
                        <img src="http://www.kpgada.com/images/china.jpg" id="language" />
                    </div>
                </div>
                <div class="row" style="padding-top: 10px;padding-bottom: 10px;background-color: #337ab7;margin-left: 0px;margin-right: 0px">
                        <div class='col-md-6'>
                            <span class="nav-button"><a  href="/site/index">首页</a></span>
                            <span class="nav-button"><a href="/site/about">联系我们</a></span>
                            <span class="nav-button"><a href="/site/products">产品展示</a></span>
                            <span class="nav-button"><a href="/site/msg">访客留言</a></span>
                            <span class="nav-button"><a href="/site/recruit">人才招聘</a></span>
                        </div>
                </div>

            </div>
            <div class="container" id="main-container">
                @yield('content')
            </div>
        </div>

        <div class="footer" style="background-color: #e3e1d5">
            <div class="container"  >
                <div class="row" >
                    <div class="col-md-6">
                        <img src="/img/underlogo.jpg" id="footer-logo" />
                    </div>
                    <div class="col-md-6" id="footer-front">
                        <div>公司地址：广东省开平市325国道赤坎开发区石溪路18号</div>
                        <div>电 话：0750-2612599      传 真：0750-2618689    0750-2610489 </div>
                        <div>E-mail：gada@kpgada.com          邮政编码：529367</div>
                        <div>粤ICP备05072728号</div>                     
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>