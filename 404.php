<!DOCTYPE HTML>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,user-scalable=no">
<title>页面没找到 - <?php $this->options->title() ?>
</title>
<!--[if lt IE 9]>
    <script src="<?php $this->options->themeUrl('404/404.js'); ?>"></script>
    <![endif]-->
<link rel="stylesheet" href="./css/404.min.css">
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/404/three.js"></script>
<script type="text/javascript" src="./js/404/shui.js"></script>

</head>
<body ondragstart="return false;">
<div class="body404 Snow">
  <div class="info404">
    <header id="header404" class="clearfix">
      <div class="site-name404"> <img src="<?php $this->options->themeUrl('img/404.png'); ?>"></div>
    </header>
    <section class="sec">
    <div class="search">
         <form role="search" method="get" class="search-form is-active" action="/index.php">
        <label>  
        <input type="search" class="search-field" placeholder="输入搜索内容" value="" name="s">
        </label>
      </form>
    </div>
      <a class="index404" rel="nofollow" href="<?php $this->options->siteUrl(); ?>">返回首页</a> 
    </section>
    <footer id="footer404">用文字记录生活 | 还原最美的笔尖记忆<br>Copyright &copy; 2020 <?php $this->options->title() ?></span> </footer>
  </div>
</div>
</body>
</html>
