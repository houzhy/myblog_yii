<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    --><?php //$this->registerCssFile('@web/css/bootstrap.css');?>
<!--    --><?php //$this->registerCssFile('@web/css/themify-icons.css');?>
<!--    --><?php //$this->registerCssFile('@web/css/theme.css');?>
<!--    --><?php //$this->registerCssFile('@web/css/custom.css');?>
    <?php $this->head() ?>
</head>
<body>

<div class="main-container">
    <section class="page-title page-title-4 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="uppercase mb0">延的博客</h3>
                </div>
                <div class="col-md-6 text-right">
                    <ol class="breadcrumb breadcrumb-2">
                        <li>
                            <a href="index.html">首页</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section>
        <div class="container">
            <div class="row">
                <?= $content ?>
                <div class="col-md-3 hidden-sm">
                    <div class="widget">
                        <h6 class="title">搜索</h6>
                        <hr>
                        <form>
                            <input class="mb0" type="text" placeholder="关键词" />
                        </form>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">作者</h6>
                        <hr>
                        <p>
                            houzhyan，程序延,php,mysql,缓存服务器架构,集群主从复制,读写分离环境搭建.擅长框架-tp3,yii2.
                        </p>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">分类</h6>
                        <hr>
                        <ul class="link-list">
                            <?php foreach ($this->params['category_rows'] as $category):?>
                            <li>
                                <a href="<?= Url::to(['blog/category','category_id'=>$category['category_id']]) ?>"><?=$category->category_name?></a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">最新博文</h6>
                        <hr>
                        <ul class="link-list recent-posts">
                            <li>
                                <a href="#">互联网+畅想</a>
                                <span class="date">September 23, 2015</span>
                            </li>
                            <li>
                                <a href="#">PHP7极速体验</a>
                                <span class="date">September 19, 2015</span>
                            </li>
                            <li>
                                <a href="#">全栈工程师怎么养成</a>
                                <span class="date">September 07, 2015</span>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">最新评论</h6>
                        <hr>
                        <ul class="link-list recent-comments">
                            <li>
                                <a href="#">高大上</a>
                                <span class="date">September 23, 2015</span>
                            </li>
                            <li>
                                <a href="#">我要报名</a>
                                <span class="date">September 19, 2015</span>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                </div>
                <!--end of sidebar-->
            </div>
            <!--end of container row-->
        </div>
        <!--end of container-->
    </section>
    <footer class="footer-1 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <img alt="Logo" class="logo" src="img/logo-light1.png" />
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="widget">
                        <h6 class="title">友情链接</h6>
                        <hr>
                        <ul class="link-list recent-posts">
                            <li>
                                <a href="https://laravel-china.org/">laravel china</a>
                            </li>
                            <li>
                                <a href="http://hellokang.net/">韩忠康</a>
                            </li>
                            <li>
                                <a href="http://www.csdn.net/">CSDN程序员</a>
                            </li>
                            <li>
                                <a href="https://github.com/">github</a>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-6">
                    <span class="sub">&copy; Copyright 2017 - 程序员</span>
                </div>
                <div class="col-sm-6 text-right">

                </div>
            </div>
        </div>
        <!--end of container-->
        <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
    </footer>
</div>
<?php //$this->registerCssFile('@web/js/jquery.min.js'); ?>
<?php //$this->registerCssFile('@web/js/bootstrap.min.js'); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

