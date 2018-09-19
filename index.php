<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
    <!-- 兼容ie9以下的浏览器 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
     <!-- 头部 -->
     <!--顶部导航 -->
    <nav class="navbar navbar-inverse">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <span class="glyphicon glyphicon-phone-alt"></span> 028-86261949</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">首页</a></li> 
                <li><a href="#">小强</a></li>
                <li><a href="#">赶快充值</a></li>
                <li><a href="#">注销</a></li>
                <li><a href="#">帮助</a></li>
                <li><a href="#" data-toggle="tooltip" data-html=true data-placement="bottom" title="<img src='./images/contract.png'>">联系客服</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- 主导航 -->
    <nav class="navbar navbar-default">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">            
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="网站logo" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->      
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页 </a></li>
                <li><a href="#">我要投资</a></li>
                <li><a href="#">我要借款</a></li>
                <li><a href="#">个人中心</a></li>
                <li><a href="#">新手指引</a></li>
                <li><a href="#">关于我们</a></li>                
            </ul                   
        </div><!-- /.container-fluid -->
    </nav>
     <!--轮播图  -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- 轮播园点 -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>            
        </ol>

        <!-- 轮播的主体内容 -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="./images/banner01.jpg" alt="...">
                <div class="carousel-caption"></div>
            </div>                
            <div class="item">
                <img src="./images/banner02.jpg" alt="...">
                <div class="carousel-caption"></div>
            </div>          
        </div>

        <!-- 左右控制箭头 -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
     <!-- 三大特色 -->
    <div class="container" id= "feature">
        <div class="row">
            <div class="col-sm-4" class="col-xs-12">
                <h3>稳健理财</h3>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
            <div class="col-sm-4" class="col-xs-12">
                <h3>投资理财</h3>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
            <div class="col-sm-4" class="col-xs-12">
                <h3>借款容易</h3>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
        </div>
    </div>
     <!-- 投资信息 -->
     <section></section>
     <!-- 新闻文章 -->
     <section></section>
     <!-- 页脚 -->
     <section></section>
     <!-- 引入jquery -->
     <script src="./lib/jquery/jquery.min.js"></script>
     <!--引入bootstrap核心库-->
     <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
     <!-- 引入自定义js -->
     <script src="./dist/js/p2p.js"></script>
</body>
</html>