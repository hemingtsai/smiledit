<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />

<!-- 设置页面标题 -->
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>

<!-- 引入CSS样式表 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/main.css'); ?>" />

<!-- Typecho 其它HTML头部信息 -->
<?php $this->header(); ?>

<!-- Latex 支持 -->
<?php if ($this->is('post') && $this->fields->isLatex == 1): ?>
    <script defer type="text/javascript" src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />
    <script defer type="text/javascript" src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/contrib/auto-render.min.js"></script>
<?php endif; ?>

<div style="display:flex">
    <!-- 网站标题 -->
    <div>
        <h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
        <span><?php $this->options->description() ?></span>
    </div>

    <!-- 搜索 -->
    <form method="post" action="">
        <div><input type="text" name="s" class="text" size="32" /> <input type="submit" class="submit" value="Search" /></div>
    </form>
</div>

<!-- 独立页面列表 -->
<ul class="clearfix" id="nav_menu">
    <li><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
    <?php $this->widget('Widget_Contents_Page_List')
        ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>