<?php
/**
 * Created by PhpStorm.
 * User: houzhyan
 * mail: houzhyan@126.com
 * Locator: http://www.descartes.top
 * Date: 2017/8/7
 * Time: 14:12
 */
$this->title = 'my blog home';
//设置关键字和描述
$this->registerMetaTag(['name'=>'keywords','content'=>'博客,政延']);
$this->registerMetaTag(['name'=>'description','content'=>'博客,政延的博客']);
//将数据放入全局参数数组,让布局模板也能使用
$this->params['category_rows'] = $category_rows;
?>
<div class="col-md-9 mb-xs-24">
    <div class="post-snippet mb64">
        <a href="#">
            <img class="mb24" alt="Post Image" src="img/blog-single-4.jpg" />
        </a>
        <div class="post-title">
            <span class="label">2016年4月1日</span>
            <a href="#">
                <h4 class="inline-block">PHP，超文本预处理器</h4>
            </a>
        </div>
        <ul class="post-meta">
            <li>
                <i class="ti-user"></i>
                <span>作者
                                            <a href="#">houzhyan</a>
                                        </span>
            </li>
            <li>
                <i class="ti-tag"></i>
                <span>标签
                                            <a href="#">PHP</a>
                                            <a href="#">互联网</a>
                                            <a href="#">PHP7</a>
                                        </span>
            </li>
        </ul>
        <hr>
        <p>
            PHP（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）是一种通用开源脚本语言。语法吸收了C语言、Java和Perl的特点，利于学习，使用广泛，主要适用于Web开发领域。PHP 独特的语法混合了C、Java、Perl以及PHP自创的语法。它可以比CGI或者Perl更快速地执行动态网页。用PHP做出的动态页面与其他的编程语言相比，PHP是将程序嵌入到HTML（标准通用标记语言下的一个应用）文档中去执行，执行效率比完全生成HTML标记的CGI要高许多；PHP还可以执行编译后代码，编译可以达到加密和优化代码运行，使代码运行更快。
        </p>
        <a class="btn btn-sm" href="article.html">详细</a>
    </div>
    <!--end of post snippet-->

    <div class="post-snippet mb64">
        <a href="#">
            <img class="mb24" alt="Post Image" src="img/blog-single-3.jpg" />
        </a>
        <div class="post-title">
            <span class="label">2016年4月1日</span>
            <a href="#">
                <h4 class="inline-block">PHP，超文本预处理器</h4>
            </a>
        </div>
        <ul class="post-meta">
            <li>
                <i class="ti-user"></i>
                <span>作者
                                            <a href="#">houzhyan</a>
                                        </span>
            </li>
            <li>
                <i class="ti-tag"></i>
                <span>标签
                                            <a href="#">PHP</a>
                                            <a href="#">互联网</a>
                                            <a href="#">PHP7</a>
                                        </span>
            </li>
        </ul>
        <hr>
        <p>
            PHP（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）是一种通用开源脚本语言。语法吸收了C语言、Java和Perl的特点，利于学习，使用广泛，主要适用于Web开发领域。PHP 独特的语法混合了C、Java、Perl以及PHP自创的语法。它可以比CGI或者Perl更快速地执行动态网页。用PHP做出的动态页面与其他的编程语言相比，PHP是将程序嵌入到HTML（标准通用标记语言下的一个应用）文档中去执行，执行效率比完全生成HTML标记的CGI要高许多；PHP还可以执行编译后代码，编译可以达到加密和优化代码运行，使代码运行更快。
        </p>
        <a class="btn btn-sm" href="#">详细</a>
    </div>
    <!--end of post snippet-->

    <div class="post-snippet mb64">
        <a href="#">
            <img class="mb24" alt="Post Image" src="img/blog-single-2.jpg" />
        </a>
        <div class="post-title">
            <span class="label">2016年4月1日</span>
            <a href="#">
                <h4 class="inline-block">PHP，超文本预处理器</h4>
            </a>
        </div>
        <ul class="post-meta">
            <li>
                <i class="ti-user"></i>
                <span>作者
                                            <a href="#">houzhyan</a>
                                        </span>
            </li>
            <li>
                <i class="ti-tag"></i>
                <span>标签
                                            <a href="#">PHP</a>
                                            <a href="#">互联网</a>
                                            <a href="#">PHP7</a>
                                        </span>
            </li>
        </ul>
        <hr>
        <p>
            PHP（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）是一种通用开源脚本语言。语法吸收了C语言、Java和Perl的特点，利于学习，使用广泛，主要适用于Web开发领域。PHP 独特的语法混合了C、Java、Perl以及PHP自创的语法。它可以比CGI或者Perl更快速地执行动态网页。用PHP做出的动态页面与其他的编程语言相比，PHP是将程序嵌入到HTML（标准通用标记语言下的一个应用）文档中去执行，执行效率比完全生成HTML标记的CGI要高许多；PHP还可以执行编译后代码，编译可以达到加密和优化代码运行，使代码运行更快。
        </p>
        <a class="btn btn-sm" href="#">详细</a>
    </div>
    <!--end of post snippet-->


    <div class="text-center">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li>
                <a href="#">5</a>
            </li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--end of nine col-->