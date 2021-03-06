<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="/Application/Public/css/index.css" type="text/css" rel="stylesheet"/>

</head>
<body>
<!--标题-->
<div class="page-header">
    <h1 class="header-title">小白菜的碟机
        <small>@author:Flc</small>
    </h1>
</div>
<!--标题-->

<!--搜索框-->
<div class="wrap mt15">
    <form method="post" id="searchForm" action="/php/index.php/Home/Index/index/p/4.html">
        <div class="input-group input-group-lg">
            <input type="text" name="search_key" class="form-control" id="keyword" placeholder="请输入关键字..."
                   autocomplete="off">
        <span class="input-group-btn">
            <button class="btn btn-default" type="submit">搜索</button>
        </span>
        </div>
    </form>
</div>
<!--搜索结果-->
<div class="wrap mt20">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <div class="pull-left">搜索结果：<span class="label label-success" id="skeyword"><?php echo ($key); ?></span></div>
            <div class="pull-right">总共找到<span id="stotal"><?php echo ($count); ?></span>首</div>
        </div>
        <div class="panel-body">

            <div id="songs_infos">
                <!--歌曲列表-->
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th style="width: 2.5rem;">#</th>
                        <th>歌曲名</th>
                        <th>时长</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody id="songs_lists">


                    <?php if(is_array($songs)): $i = 0; $__LIST__ = $songs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($i); ?></td>
                            <td><?php echo ($vo["filename"]); ?></td>
                            <td><?php echo ($vo["timelength"]); ?></td>
                            <td>试听</td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>


                    </tbody>
                </table>
                <!--歌曲列表-->

                <!--分页-->
                <div class="pages">

                    <?php echo ($show); ?>;
                    <!--<ul class="pagination">-->
                        <!--&lt;!&ndash;<li>-->
                            <!--<a href="#" aria-label="Previous">-->
                                <!--<span aria-hidden="true">&laquo;</span>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li class="active"><a href="#">1</a></li>-->
                        <!--<li><a href="#">2</a></li>-->
                        <!--<li><a href="#">3</a></li>-->
                        <!--<li><a href="#">4</a></li>-->
                        <!--<li><a href="#">5</a></li>-->
                        <!--<li>-->
                            <!--<a href="#" aria-label="Next">-->
                                <!--<span aria-hidden="true">&raquo;</span>-->
                            <!--</a>-->
                        <!--</li>&ndash;&gt;-->
                    <!--</ul>-->
                </div>
                <!--分页-->
            </div>

            <!--载入-->
            <div id="sloading" class="search-loading"></div>
            <!--载入-->

            <!---->
            <div class="search-default">请在上方输入关键字进行查询!</div>
            <!---->
        </div>
    </div>
</div>
<!--搜索结果-->


</body>
</html>